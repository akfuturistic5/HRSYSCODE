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

class ScheduleController extends Controller
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
			
			$record = Models\Schedule::where('schedule_dl',0)->paginate($this->limit);
			if(empty($record)){
				return response()->json(['message' => __('No Schedule found!!')], $this->warningCode); 
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
				'department_id'  => 'required',
                'employee_id'  => 'required',
                'date'  => 'required',
                'shift_id'  => 'required',
                'min_start_time'  => 'required',
                'start_time'  => 'required',
                'max_start_time'  => 'required',
                'min_end_time'  => 'required',
                'end_time'  => 'required',
                'max_end_time'  => 'required',
                'break_time'  => 'required',
                'accept_extra_hours'  => 'required',
                'active'  => 'required'
			];

			$validator = Validator::make($request->all(), $rules);

			if ($validator->fails()) {
				DB::rollBack();
				return response()->json(['message' => $validator->errors()->first(),'error' => $validator->errors()], 404);      
			}
			
			$inputTab = [
                'department_id'  => $request->department_id,
                'employee_id'  => $request->employee_id,
                'date'  => date('Y-m-d',strtotime($request->date)),
                'shift_id'  => $request->shift_id,
                'min_start_time'  => $request->min_start_time,
                'start_time'  => $request->start_time,
                'max_start_time'  => $request->max_start_time,
                'min_end_time'  => $request->min_end_time,
                'end_time'  => $request->end_time,
                'max_end_time'  => $request->max_end_time,
                'break_time'  => $request->break_time,
                'accept_extra_hours'  => $request->accept_extra_hours,
                'active'  => $request->active
			];
			
			$modifier = Models\Schedule::create($inputTab);
			
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

			$record = Models\Schedule::where('schedule_id',$id)->first();
			if(empty($record)){
				return response()->json(['message' => __('Invalid Schedule')], $this->warningCode); 
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
	
	public function update(Request $request,$schedule_id){
		
		try {
			DB::beginTransaction();
			
			$rules = [
				'department_id'  => 'required',
                'employee_id'  => 'required',
                'date'  => 'required',
                'shift_id'  => 'required',
                'min_start_time'  => 'required',
                'start_time'  => 'required',
                'max_start_time'  => 'required',
                'min_end_time'  => 'required',
                'end_time'  => 'required',
                'max_end_time'  => 'required',
                'break_time'  => 'required',
                'accept_extra_hours'  => 'required'
			];

			$validator = Validator::make($request->all(), $rules);

			if ($validator->fails()) {
				DB::rollBack();
				return response()->json(['message' =>$validator->errors()->first(),'error' => $validator->errors()], $this->warningCode);      
			}
			
			$input = array();
			
			$input = [
                'department_id'  => $request->department_id,
                'employee_id'  => $request->employee_id,
                'date'  => date('Y-m-d',strtotime($request->date)),
                'shift_id'  => $request->shift_id,
                'min_start_time'  => $request->min_start_time,
                'start_time'  => $request->start_time,
                'max_start_time'  => $request->max_start_time,
                'min_end_time'  => $request->min_end_time,
                'end_time'  => $request->end_time,
                'max_end_time'  => $request->max_end_time,
                'break_time'  => $request->break_time,
                'accept_extra_hours'  => $request->accept_extra_hours,
                'active'  => $request->active
			];
			
			$record = Models\Schedule::where('schedule_id',$schedule_id);
			$record = $record->first();
			if(empty($record)){
				DB::rollBack();
				return response()->json(['message' => __('Invalid Schedule.')], $this->warningCode); 
			}

			$record->update($input);
			DB::commit();
			
			$msg = "Schedule Updated Successfully";
			
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
			$input['schedule_dl'] = 1;

			$record = Models\Schedule::where('schedule_id',$id);
			$record = $record->first();
			if(empty($record)){
				DB::rollBack();
				return response()->json(['message' => __('Invalid Schedule.')], $this->warningCode); 
			}
			
			$record->update($input);
			DB::commit();

			$msg = "Schedule Deleted Successfully";
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