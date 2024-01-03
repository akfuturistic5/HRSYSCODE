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

class WagesController extends Controller
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
			
			$record = Models\Wages::where('wages_dl',0)->paginate($this->limit);
			if(empty($record)){
				return response()->json(['message' => __('No Wages found!!')], $this->warningCode); 
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
				'wages_name'  => 'required',
			];

			$validator = Validator::make($request->all(), $rules);

			if ($validator->fails()) {
				DB::rollBack();
				return response()->json(['message' => $validator->errors()->first(),'error' => $validator->errors()], 404);      
			}
			
			$inputTab = [
				'wages_name'=>$request->wages_name,
				'wages_dl' => 0,
				'active' => 1,
				'user_id' => 0
			];
			
			$modifier = Models\Wages::create($inputTab);
			
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

			$record = Models\Wages::where('wages_id',$id)->first();
			if(empty($record)){
				return response()->json(['message' => __('Invalid Wages')], $this->warningCode); 
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
	
	public function update(Request $request,$wages_id){
		
		try {
			DB::beginTransaction();
			
			$rules = [
				'wages_name'  => 'required',
			];

			$validator = Validator::make($request->all(), $rules);

			if ($validator->fails()) {
				DB::rollBack();
				return response()->json(['message' =>$validator->errors()->first(),'error' => $validator->errors()], $this->warningCode);      
			}
			
			//$input  = $request->except(['user_id']);
			
			$input = array();
			
			$input['wages_name'] = $request->wages_name;
			
			$record = Models\Wages::where('wages_id',$wages_id);
			$record = $record->first();
			if(empty($record)){
				DB::rollBack();
				return response()->json(['message' => __('Invalid Wages.')], $this->warningCode); 
			}

			$record->update($input);
			DB::commit();
			
			$msg = "Wages Updated Successfully";
			
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
			$input['wages_dl'] = 1;

			$record = Models\Wages::where('wages_id',$id);
			$record = $record->first();
			if(empty($record)){
				DB::rollBack();
				return response()->json(['message' => __('Invalid Wages.')], $this->warningCode); 
			}
			
			$record->update($input);
			DB::commit();

			$msg = "Wages Deleted Successfully";
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