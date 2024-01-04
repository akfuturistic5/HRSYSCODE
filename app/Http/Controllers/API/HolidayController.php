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

class HolidayController extends Controller
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
		
			$perpage = $this->limit;
			
			if(!empty($request->per_page)){
				$perpage = $request->per_page;
			}
			
			$record = Models\Holiday::where('status',1)->paginate($perpage);
			if(empty($record)){
				return response()->json(['message' => __('No Holidays found!!')], $this->warningCode); 
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
				'name'=>'required|max:200',
				'holiday_date'=>'required|date',
				'end_date' => 'required|date|after_or_equal:holiday_date',
			];

			$validator = Validator::make($request->all(), $rules);

			if ($validator->fails()) {
				DB::rollBack();
				return response()->json(['message' => $validator->errors()->first(),'error' => $validator->errors()], 404);      
			}
			
			$userId = Auth::user()->id;
			
			$inputTab = [
				'name'=>$request->name,
				'holiday_date'=>$request->holiday_date,
				'end_date' => $request->end_date,
				'completed' => 0,
				'status' => 1,
				'user_id' => $userId
			];
			
			$modifier = Models\Holiday::create($inputTab);
			
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

			$record = Models\Holiday::where('id',$id)->first();
			if(empty($record)){
				return response()->json(['message' => __('Invalid Holiday')], $this->warningCode); 
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
				'name'  => 'required',
				'holiday_date'=>'date',
				'end_date' => 'date|after_or_equal:holiday_date',
			];

			$validator = Validator::make($request->all(), $rules);

			if ($validator->fails()) {
				DB::rollBack();
				return response()->json(['message' =>$validator->errors()->first(),'error' => $validator->errors()], $this->warningCode);      
			}
			
			$input  = $request->except(['user_id']);
			
			$record = Models\Holiday::where('id',$id);
			$record = $record->first();
			if(empty($record)){
				DB::rollBack();
				return response()->json(['message' => __('Invalid Holiday.')], $this->warningCode); 
			}
			
			$record->update($input);
			DB::commit();
			
			$msg = "Holiday Updated Successfully";
			
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
			
			$record = Models\Holiday::where('id',$id);
			$record = $record->first();
			if(empty($record)){
				DB::rollBack();
				return response()->json(['message' => __('Invalid Holiday.')], $this->warningCode); 
			}
			
			$input = array();
			$input['status'] = 0;
			
			$record->update($input);
			DB::commit();
			
			$msg = "Holiday Deleted Successfully";
			
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