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
use DateTime;


class OvertimeController extends Controller
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
			
			$record = Models\Overtime::where('overtime_dl',0)->paginate($this->limit);
			if(empty($record)){
				return response()->json(['message' => __('No Overtime found!!')], $this->warningCode); 
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
			
			//$userId = Auth::user()->id;
			
			$rules = [
				'employee_id'  => 'required',
                'date'  => 'required',
                'hours'  => 'required'
			];

			$validator = Validator::make($request->all(), $rules);

			if ($validator->fails()) {
				DB::rollBack();
				return response()->json(['message' => $validator->errors()->first(),'error' => $validator->errors()], 404);      
			}
			
			$inputTab = [
                'employee_id'  => $request->employee_id,
                'date'  => date('Y-m-d',strtotime($request->date)),
                'hours'  => $request->hours,
                'description'  => $request->description
			];
			
			$modifier = Models\Overtime::create($inputTab);
			
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

			$record = Models\Overtime::where('overtime_id',$id)->first();
			if(empty($record)){
				return response()->json(['message' => __('Invalid Overtime')], $this->warningCode); 
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
	
	public function update(Request $request,$overtime_id){
		
		try {
			DB::beginTransaction();
			
			$rules = [
				'employee_id'  => 'required',
                'date'  => 'required',
                'hours'  => 'required'
			];

			$validator = Validator::make($request->all(), $rules);

			if ($validator->fails()) {
				DB::rollBack();
				return response()->json(['message' =>$validator->errors()->first(),'error' => $validator->errors()], $this->warningCode);      
			}
			
			//$input  = $request->except(['user_id']);
			
			$input = array();
			$input = [
				'employee_id'  => $request->employee_id,
                'date'  => date('Y-m-d',strtotime($request->date)),
                'hours'  => $request->hours,
                'description'  => $request->description
			];
			
			$record = Models\Overtime::where('overtime_id',$overtime_id);
			$record = $record->first();
			if(empty($record)){
				DB::rollBack();
				return response()->json(['message' => __('Invalid Overtime.')], $this->warningCode); 
			}

			$record->update($input);
			DB::commit();
			
			$msg = "Overtime Updated Successfully";
			
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
			$input = array();
			$input['overtime_dl'] = 1;

			$record = Models\Overtime::where('overtime_id',$id);
			$record = $record->first();
			if(empty($record)){
				DB::rollBack();
				return response()->json(['message' => __('Invalid Overtime.')], $this->warningCode); 
			}
			
			$record->update($input);
			DB::commit();

			$msg = "Overtime Deleted Successfully";
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