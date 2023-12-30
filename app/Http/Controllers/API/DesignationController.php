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

class DesignationController extends Controller
{
	public function __construct() {
		$this->limit = 10;
		$this->successCode = 200;
		$this->errorCode = 401;
		$this->warningCode = 500;
	}

	public function index(Request $request){
		
		try {
			
			$record = Models\Designation::with('department')->where('status',1)->orderBy('id','desc')->paginate($this->limit);
			if(empty($record)){
				return response()->json(['message' => __('No Department found!!')], $this->warningCode); 
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
				'designation_name'=>'required',
				'department'=>'required|exists:departments,id',
			];

			$validator = Validator::make($request->all(), $rules);

			if ($validator->fails()) {
				DB::rollBack();
				return response()->json(['message' => $validator->errors()->first(),'error' => $validator->errors()], $this->warningCode);      
			}
			
			$inputTab = [
				'name'=>$request->designation_name,
				'department_id'=>$request->department,
				'status' => 1,
				'user_id' => $userId
			];
			
			$modifier = Models\Designation::create($inputTab);
			
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

			$record = Models\Designation::with('department')->where('id',$id)->first();
			if(empty($record)){
				return response()->json(['message' => __('Invalid Designation')], $this->warningCode); 
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
				 'designation_name'=>'required',
				 'department'=>'required|exists:departments,id',
			];

			$validator = Validator::make($request->all(), $rules);

			if ($validator->fails()) {
				DB::rollBack();
				return response()->json(['message' =>$validator->errors()->first(),'error' => $validator->errors()], $this->warningCode);      
			}
			
			//$input  = $request->except(['user_id']);
			
			$input = array();
			
			$input['name'] = $request->designation_name;
			$input['department'] = $request->department;
			
			$record = Models\Designation::where('id',$id);
			$record = $record->first();
			if(empty($record)){
				DB::rollBack();
				return response()->json(['message' => __('Invalid Designation.')], $this->warningCode); 
			}
			
			$record->update($input);
			DB::commit();
			
			$msg = "Designation Updated Successfully";
			
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
			
			$record = Models\Designation::where('id',$id);
			$record = $record->first();
			if(empty($record)){
				DB::rollBack();
				return response()->json(['message' => __('Invalid Designation.')], $this->warningCode); 
			}
			
			$input = array();
			$input['status'] = 0;
			
			$record->update($input);
			DB::commit();
			
			$msg = "Designation Deleted Successfully";
			
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