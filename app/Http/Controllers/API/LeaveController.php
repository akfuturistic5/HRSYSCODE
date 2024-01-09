<?php

namespace App\Http\Controllers\Api;

use Auth;
use Validator;
use App\Models;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;

class LeaveController extends Controller
{
	//test
	public function __construct() {
		$this->limit = 10;
		$this->successCode = 200;
		$this->errorCode = 401;
		$this->warningCode = 500;
	}

	public function index(Request $request){
		
		try {
		
			$leaves = Models\Leave::with(['leaveType','employee'])->where('delete_status',0);
		
			if(!empty($request->s_employee_id)){
				
				$leaves->whereHas('employee', function($q) use ($request){
					$q->where('id', '=', $request->s_employee_id);
				});
			}
			
			if(!empty($request->s_leave_type)){
				
				$leaves->whereHas('leaveType', function($q) use ($request){
					$q->where('id', '=', $request->s_leave_type);
				});
			}
			
			if(!empty($request->s_status)){
				
				$leaves->where('status',$request->s_status);
			}
			
			if(!empty($request->s_from)){
				
				$leaves->where('from',$request->s_from);
			}
			
			if(!empty($request->s_to)){
				
				$leaves->where('to',$request->s_to);
			}
			
			$record = $leaves->paginate($this->limit);
		
			if(empty($record)){
				return response()->json(['message' => __('No Leaves found!!')], $this->warningCode); 
			}
			
			return response()->json(['message' => __('Successful'), 'data' => $record], $this->successCode);
			
		}catch (\Illuminate\Database\QueryException $exception){
			
			return response()->json(['message'=>$exception->getMessage()], $this->warningCode);
			
		}catch(\Exception $exception){
			
			return response()->json(['message'=>$exception->getMessage()], $this->warningCode);
		}
	}
	
	public function store(Request $request){
		
		try {
			
			DB::beginTransaction();
			
			$userId = Auth::user()->id;
			
			$rules = [
				'employee_id'=>'required',
				'leave_type_id'=>'required',
				'from' => 'required',
				'to' => 'required',
				'reason' => 'required',
				'status' => 'required',
			];

			$validator = Validator::make($request->all(), $rules);

			if ($validator->fails()) {
				DB::rollBack();
				return response()->json(['message' => $validator->errors()->first(),'error' => $validator->errors()], $this->warningCode);      
			}
			
			$inputTab = [
				'employee_id'=>$request->employee_id,
				'leave_type_id'=>$request->leave_type_id,
				'from'=>$request->from,
				'to'=>$request->to,
				'reason'=>$request->reason,
				'status' => 'Approved',
				'user_id' => $userId
			];
			
			$modifier = Models\Leave::create($inputTab);
			
			DB::commit();
			
			return response()->json(['message' => __("Created Succesful")], $this->successCode);
			
		}catch (\Illuminate\Database\QueryException $exception){
			
			DB::rollBack();
			return response()->json(['message'=>$exception->getMessage()], $this->warningCode);
			
		}catch(\Exception $exception){
			DB::rollBack();
			return response()->json(['message'=>$exception->getMessage()], $this->warningCode);
			
		}
	}
	
	public function detail(Request $request,$id){
		
		try {
			//$userId = Auth::user()->id;

			$record = Models\Leave::where('id',$id)->first();
			if(empty($record)){
				return response()->json(['message' => __('Invalid Leave')], $this->warningCode); 
			}
			$data['record'] = $record;
			return response()->json(['message' => __('Successful'), 'data' => $data], $this->successCode);
		}catch (\Illuminate\Database\QueryException $exception){
			DB::rollBack();
			return response()->json(['message'=>$exception->getMessage()], $this->warningCode);
		}catch(\Exception $exception){
			DB::rollBack();
			return response()->json(['message'=>$exception->getMessage()], $this->warningCode);
		}	
	}
	
	public function update(Request $request,$id){
		
		try {
			DB::beginTransaction();
			
			$rules = [
				'leave_type_id'  => 'required',
			];

			$validator = Validator::make($request->all(), $rules);

			if ($validator->fails()) {
				DB::rollBack();
				return response()->json(['message' =>$validator->errors()->first(),'error' => $validator->errors()], $this->warningCode);      
			}
			
			$input  = $request->except(['user_id']);
			
			$record = Models\Leave::where('id',$id);
			$record = $record->first();
			if(empty($record)){
				DB::rollBack();
				return response()->json(['message' => __('Invalid Leave.')], $this->warningCode); 
			}
			
			$record->update($input);
			DB::commit();
			
			$msg = "Leave Updated Successfully";
			
			return response()->json(['message' => __($msg)], $this->successCode);
			
		}catch (\Illuminate\Database\QueryException $exception){
			DB::rollBack();
			return response()->json(['message'=>$exception->getMessage()], $this->warningCode);
		}catch(\Exception $exception){
			DB::rollBack();
			return response()->json(['message'=>$exception->getMessage()], $this->warningCode);
		}	
	}
	
	
	public function destroy(Request $request,$id){
		
		try {
			DB::beginTransaction();
			
			$record = Models\Leave::where('id',$id);
			$record = $record->first();
			if(empty($record)){
				DB::rollBack();
				return response()->json(['message' => __('Invalid Leave.')], $this->warningCode); 
			}
			
			$input = array();
			$input['delete_status'] = 1;
			
			$record->update($input);
			DB::commit();
			
			$msg = "Leave Deleted Successfully";
			
			return response()->json(['message' => __($msg)], $this->successCode);
			
		}catch (\Illuminate\Database\QueryException $exception){
			DB::rollBack();
			return response()->json(['message'=>$exception->getMessage()], $this->warningCode);
		}catch(\Exception $exception){
			DB::rollBack();
			return response()->json(['message'=>$exception->getMessage()], $this->warningCode);
		}	
	}
}