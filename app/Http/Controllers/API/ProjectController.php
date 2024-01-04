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

class ProjectController extends Controller
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
			
			$record = Models\Project::where('project_dl',0)->paginate($this->limit);
			if(empty($record)){
				return response()->json(['message' => __('No Project found!!')], $this->warningCode); 
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
				'project_name'  => 'required',
                'client_id'  => 'required',
                'deadline'  => 'required',
                'start_date'  => 'required',
                'end_date'  => 'required',
                'rate'  => 'required',
                'priority'  => 'required',
                'description'  => 'required'
			];

			$validator = Validator::make($request->all(), $rules);

			if ($validator->fails()) {
				DB::rollBack();
				return response()->json(['message' => $validator->errors()->first(),'error' => $validator->errors()], 404);      
			}
			
			$inputTab = [
                'project_name'  => $request->project_name,
                'client_id'  => $request->client_id,
                'deadline'  => date('Y-m-d',strtotime($request->deadline)),
                'start_date'  => date('Y-m-d',strtotime($request->start_date)),
                'end_date'  => date('Y-m-d',strtotime($request->end_date)),
                'rate'  => $request->rate,
                'priority'  => $request->priority,
                'leader'  => $request->leader,
                'teams'  => $request->teams,
                'description'  => $request->description,
                'progress'  => $request->progress
			];
			
			$modifier = Models\Project::create($inputTab);
			
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

			$record = Models\Project::where('project_id',$id)->first();
			if(empty($record)){
				return response()->json(['message' => __('Invalid Project')], $this->warningCode); 
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
	
	public function update(Request $request,$project_id){
		
		try {
			DB::beginTransaction();
			
			$rules = [
				'project_name'  => 'required',
                'client_id'  => 'required',
                'deadline'  => 'required',
                'start_date'  => 'required',
                'end_date'  => 'required',
                'rate'  => 'required',
                'priority'  => 'required',
                'description'  => 'required'
			];

			$validator = Validator::make($request->all(), $rules);

			if ($validator->fails()) {
				DB::rollBack();
				return response()->json(['message' =>$validator->errors()->first(),'error' => $validator->errors()], $this->warningCode);      
			}
			
			$input = array();
			
			$input = [
                'project_name'  => $request->project_name,
                'client_id'  => $request->client_id,
                'deadline'  => date('Y-m-d',strtotime($request->deadline)),
                'start_date'  => date('Y-m-d',strtotime($request->start_date)),
                'end_date'  => date('Y-m-d',strtotime($request->end_date)),
                'rate'  => $request->rate,
                'priority'  => $request->priority,
                'leader'  => $request->leader,
                'teams'  => $request->teams,
                'description'  => $request->description,
                'progress'  => $request->progress
			];
			
			$record = Models\Project::where('project_id',$project_id);
			$record = $record->first();
			if(empty($record)){
				DB::rollBack();
				return response()->json(['message' => __('Invalid Project.')], $this->warningCode); 
			}

			$record->update($input);
			DB::commit();
			
			$msg = "Project Updated Successfully";
			
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
			$input['project_dl'] = 1;

			$record = Models\Project::where('project_id',$id);
			$record = $record->first();
			if(empty($record)){
				DB::rollBack();
				return response()->json(['message' => __('Invalid Project.')], $this->warningCode); 
			}
			
			$record->update($input);
			DB::commit();

			$msg = "Project Deleted Successfully";
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