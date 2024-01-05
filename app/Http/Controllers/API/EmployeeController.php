<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\CreateEmployeeRequest;
use AccessDeniedHttpException;
use DB;
use Auth;
use Validator;
use App\Models;
use Spatie\Permission\Models\Role;


class EmployeeController extends Controller
{
    public function __construct() {
		$this->limit = 10;
		$this->successCode = 200;
		$this->errorCode = 401;
		$this->warningCode = 500;
	}

    public function index()
    {
        try {

			$perpage = $this->limit;

			if(!empty($request->per_page)){
				$perpage = $request->per_page;
			}

			$record = User::whereHas('roles', function ($query) {
                $query->where('name', 'employee');
            })->get();

            return response()->json(['record'=>$record ]);


			if(empty($record)){
				return response()->json(['message' => __('No Employees found!!')], $this->warningCode);
			}

			return response()->json(['message' => __('Successful'), 'data' => $record], $this->successCode);

		}catch (\Illuminate\Database\QueryException $exception){

			return response()->json(['message'=>$exception->getMessage()], $this->warningCode);

		}catch(\Exception $exception){

			return response()->json(['message'=>$exception->getMessage()], $this->warningCode);
		}
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $rules = [
                'first_name' => ['required','string','max:50',new \App\Rules\NoSpacesRule()],
                'last_name' => 'required|string|max:50',
                'username' => ['required','min:8','regex:/^[a-zA-Z0-9]+$/',new \App\Rules\NoSpacesRule()],
                'email' => ['required','email','unique:users','email'],
                'password' => 'required|string|max:50',
                'employee_id'=>'required|string|max:50',
                'joining_date' => 'required|date|before_or_equal:today',
                'contact_number' => 'required|regex:/^[0-9]{11}$/',
                'company_id' => 'required|exists:companies,id',
                'department_id' => 'required|exists:departments,id',
                'designation_id' => 'required|exists:designations,id',
                'address' => 'nullable|string|max:500'
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
				DB::rollBack();
				return response()->json(['message' => $validator->errors()->first(),'error' => $validator->errors()], 404);
			}

            $userId = Auth::user()->id;

            $userData = $request->only([
                'first_name',
                'last_name',
                'username',
                'email',
                'password',
                'employee_id',
                'joining_date',
                'contact_number',
                'company_id',
                'department_id',
                'designation_id',
            ]);

            // Hash the password before storing
            $userData['password'] = bcrypt($userData['password']);

            $employee = User::create($userData);

            if($employee)
            {
                $role = $employeeRole = Role::where('name', 'Employee')->first();
                Models\UserRole::create(['user_id'=>$employee->id,'role_id'=>$role->id,'created_by'=>Auth::user()->id]);
            }

            DB::commit();

            return response()->json(['message' => __("Created Successful")], $this->successCode);

        }catch (\Illuminate\Database\QueryException $exception){
            DB::rollBack();
            return response()->json(['message'=>$exception->getMessage()], $this->warningCode);
        }catch(\Exception $exception){
            DB::rollBack();
			return response()->json(['message'=>$exception->getMessage()], $this->warningCode);
		}

    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $rules = [
                'first_name' => ['required','string','max:50',new \App\Rules\NoSpacesRule()],
                'last_name' => 'required|string|max:50',
                'username' => ['required','min:8','regex:/^[a-zA-Z0-9]+$/',new \App\Rules\NoSpacesRule()],
                'email' => [
                    'required',
                    'email',
                    Rule::unique('users')->ignore($id), // Ensure the email is unique except for this employee
                ],
                'password' => 'required|string|max:50',
                'employee_id'=>'required|string|max:50',
                'joining_date' => 'required|date|before_or_equal:today',
                'contact_number' => 'required|regex:/^[0-9]{11}$/',
                'company_id' => 'required|exists:companies,id',
                'department_id' => 'required|exists:departments,id',
                'designation_id' => 'required|exists:designations,id',
                'address' => 'nullable|string|max:500'
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                DB::rollBack();
                return response()->json(['message' => $validator->errors()->first(),'error' => $validator->errors()], 404);
            }

            $employee = User::findOrFail($id);

            $userData = $request->only([
                'first_name',
                'last_name',
                'username',
                'email',
                'password',
                'employee_id',
                'joining_date',
                'contact_number',
                'company_id',
                'department_id',
                'designation_id',
            ]);

            // Hash the password before storing
            $userData['password'] = bcrypt($userData['password']);

            $employee->update($userData);

            DB::commit();

            return response()->json(['message' => __("Updated Successfully")], $this->successCode);

        } catch (\Illuminate\Database\QueryException $exception){
            DB::rollBack();
            return response()->json(['message'=>$exception->getMessage()], $this->warningCode);
        } catch(\Exception $exception){
            DB::rollBack();
            return response()->json(['message'=>$exception->getMessage()], $this->warningCode);
        }
    }

    public function getEmployeeDetails($id){
        try {
            $employee = User::findOrFail($id);
            return response()->json(['data' => $employee], $this->successCode);

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception){
            return response()->json(['message' => 'Employee not found'], $this->warningCode);
        } catch(\Exception $exception){
            return response()->json(['message' => $exception->getMessage()], $this->warningCode);
        }
    }

    public function deActiveEmployee($id){
        try {
            $employee = User::findOrFail($id);
            $employee->update([
                'deleted_at' => now(),
                'deleted_by' => Auth::user()->id, // Capture the user who performed the deletion
            ]);

            return response()->json(['message' =>  __('Employee deleted successfully')], $this->successCode);

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception){
            return response()->json(['message' =>  __('Employee not found')], $this->warningCode);
        } catch(\Exception $exception){
            return response()->json(['message' => $exception->getMessage()], $this->warningCode);
        }
    }

    public function updateProfile(Request $request, $id){
        try {
            $rules = [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'birth_date' => 'nullable|date',
                'gender' => 'nullable|in:m,f,o',
                'address' => 'nullable|string|max:200',
                'state_id' => 'nullable|exists:states,id',
                'pincode' => 'nullable|string|max:10',
                'contact_number' => 'nullable|regex:/^[0-9]{10}$/',
                'department' => 'nullable|exists:departments,id',
                'designation' => 'nullable|exists:designations,id',
                'reports_to' => 'nullable',
                'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Avatar upload rules
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return response()->json(['message' => $validator->errors()->first(), 'errors' => $validator->errors()], $this->warningCode);
            }

            $userData = [
                'first_name',
                'last_name',
                'birth_date',
                'gender',
                'address',
                'state_id',
                'pincode',
                'contact_number',
                'department',
                'designation',
                'reports_to',
            ];

            // Retrieve the user based on the provided ID
            $user = User::findOrFail($id);

            if ($request->hasFile('avatar')) {
                $avatar = $request->file('avatar');
                $avatarName = 'avatar_' . $user->id . '.' . $avatar->getClientOriginalExtension();

                // Store the uploaded avatar in storage
                $avatar->storeAs('avatars', $avatarName, 'public');

                // Update the avatar path in the user's data
                $userData['avatar'] = $avatarName;
            }

            // Update user profile based on the validated data
            $user->update($request->only($userData));

            return response()->json(['message' => __('Profile updated successfully')], $this->successCode);

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return response()->json(['message' => __('User not found')], $this->warningCode);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], $this->warningCode);
        }
    }


    public function updatePersonalProfile(Request $request, $id){
        try {
            $rules = [
                'passport_number' => 'nullable|string|max:255',
                'passport_expire_at' => 'nullable|date',
                'telephone_number' => 'nullable|string|max:20',
                'nationality' => 'nullable|string|max:255',
                'religion' => 'nullable|string|max:255',
                'marital_status' => 'nullable|string|max:255',
                'employment_of_spouse' => 'nullable|string|max:255',
                'no_of_child' => 'nullable|integer|min:0',
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return response()->json(['message' => $validator->errors()->first(), 'errors' => $validator->errors()], $this->warningCode);
            }

            // Retrieve the user profile based on the provided ID
            $userProfile = UserProfile::findOrFail($id);

            // Update user profile based on the validated data
            $userProfile->update($request->only([
                'passport_number',
                'passport_expire_at',
                'telephone_number',
                'nationality',
                'religion',
                'marital_status',
                'employment_of_spouse',
                'no_of_child',
            ]));

            return response()->json(['message' => __('Personal profile updated successfully')], $this->successCode);

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return response()->json(['message' => __('User profile not found')], $this->warningCode);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], $this->warningCode);
        }
    }


    public function addEmployeeEmergencyContact(Request $request, $id){

        try {
            $validator = Validator::make($request->all(), [
                'contact_details.*.user_id' => 'required|exists:users,id',
                'contact_details.*.contact_type' => 'required|in:p,s',
                'contact_details.*.name' => 'required|string|max:255',
                'contact_details.*.relationship' => 'required|string|max:255',
                'contact_details.*.contact_number_1' => 'required|string|max:20',
                'contact_details.*.contact_number_2' => 'nullable|string|max:20',
                'contact_details.*.created_by' => 'nullable|exists:users,id',
                'contact_details.*.updated_by' => 'nullable|exists:users,id',
            ]);

            if ($validator->fails()) {
                return response()->json(['message' => $validator->errors()->first(), 'errors' => $validator->errors()], $this->warningCode);
            }

            $contactDetails = $request->input('contact_details');

            foreach ($contactDetails as $contactDetailData) {
                $employeeEmergencyContact = Models\EmployeeContact::updateOrCreate(
                    ['user_id' => $contactDetailData['user_id']],
                    $contactDetailData
                );
            }

            return response()->json(['message' => __('Employee emergency contacts managed successfully')], $this->successCode);
        }
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return response()->json(['message' => __('Something went wrong')], $this->warningCode);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], $this->warningCode);
        }
    }


    public function updateEmployeeEmergencyContact(Request $request, $id){
        try {
            $validator = Validator::make($request->all(), [
                'contact_details.*.user_id' => 'required|exists:users,id',
                'contact_details.*.contact_type' => 'required|in:p,s',
                'contact_details.*.name' => 'required|string|max:255',
                'contact_details.*.relationship' => 'required|string|max:255',
                'contact_details.*.contact_number_1' => 'required|string|max:20',
                'contact_details.*.contact_number_2' => 'nullable|string|max:20',
                'contact_details.*.created_by' => 'nullable|exists:users,id',
                'contact_details.*.updated_by' => 'nullable|exists:users,id',
            ]);

            if ($validator->fails()) {
                return response()->json(['message' => $validator->errors()->first(), 'errors' => $validator->errors()], $this->warningCode);
            }

            $contactDetails = $request->input('contact_details');

            // Perform update operation for each contact detail
            foreach ($contactDetails as $contactDetailData) {
                $userId = $contactDetailData['user_id'];

                $employeeEmergencyContact = Models\EmployeeContact::where('user_id', $userId)->first();

                if ($employeeEmergencyContact) {
                    $employeeEmergencyContact->update($contactDetailData);
                }
            }

            return response()->json(['message' => __('Employee emergency contacts updated successfully')], $this->successCode);

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return response()->json(['message' => __('Something went wrong')], $this->warningCode);
        } catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], $this->warningCode);
        }
    }

    public function getEmployeeEmergencyContactById(Request $request, $id)
    {
        try {
            $employeeEmergencyContacts = Models\EmployeeContact::where('user_id', $userId)->get();

            if ($employeeEmergencyContacts->isEmpty()) {
                return response()->json(['message' => __('No emergency contacts found for this user')], $this->warningCode);
            }

            return response()->json(['data' => $employeeEmergencyContacts], $this->successCode);

        }
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return response()->json(['message' => __('Something went wrong')], $this->warningCode);
        }
        catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], $this->warningCode);
        }
    }

    public function createEmployeeBankDetail(Request $request,$id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'bank_name' => 'required|string|max:255',
                'bank_account_number' => 'required|string|max:255',
                'IFSC_code' => 'required|string|max:255',
                'pan_number' => 'required|string|max:255',
                'user_id' => 'required|exists:users,id',
            ]);

            if ($validator->fails()) {
                return response()->json(['message' => $validator->errors()->first(), 'errors' => $validator->errors()], $this->warningCode);
            }

            $employeeBankDetail = Models\EmployeeBankDetail::create($request->all());

            return response()->json(['message' => __('Employee bank detail created successfully'), 'data' => $employeeBankDetail], $this->successCode);

        }
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return response()->json(['message' => __('Something went wrong')], $this->warningCode);
        }
        catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], $this->warningCode);
        }
    }

    public function updateEmployeeBankDetail(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'bank_name' => 'required|string|max:255',
                'bank_account_number' => 'required|string|max:255',
                'IFSC_code' => 'required|string|max:255',
                'pan_number' => 'required|string|max:255',
                'user_id' => 'required|exists:users,id'

            ]);

            if ($validator->fails()) {
                return response()->json(['message' => $validator->errors()->first(), 'errors' => $validator->errors()], 422);
            }

            $employeeBankDetail = Models\EmployeeBankDetail::where('user_id', $userId)->first();

            if (!$employeeBankDetail) {
                return response()->json(['message' => 'Employee bank detail not found'], $this->warningCode);
            }

            $employeeBankDetail->update($request->all());

            return response()->json(['message' => 'Employee bank detail updated successfully', 'data' => $employeeBankDetail], $this->successCode);

        }
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return response()->json(['message' => __('Something went wrong')], $this->warningCode);
        }
        catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], $this->warningCode);
        }
    }


    public function getEmployeeBankDetails(Request $request, $id)
    {
        try {
            $employeeBankDetails = Models\EmployeeBankDetail::where('user_id', $userId)->get();

            if ($employeeBankDetails->isEmpty()) {
                return response()->json(['message' => 'Employee bank details not found for this user'], 404);
            }

            return response()->json(['data' => $employeeBankDetails], 200);

        }
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return response()->json(['message' => __('Something went wrong')], $this->warningCode);
        }
        catch (\Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 500);
        }
    }

}
