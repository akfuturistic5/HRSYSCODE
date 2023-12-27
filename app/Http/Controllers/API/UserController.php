<?php

namespace App\Http\Controllers\Api;

use Auth;
use Validator;
use App\Models;
use App\Models\User;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;

class UserController extends Controller
{
	//test
	public function __construct() {
		$this->limit = 10;
		$this->successCode = 200;
		$this->errorCode = 401;
		$this->warningCode = 500;
	}

	public function adminlogin(Request $request){
		
		
		try {
			
			DB::beginTransaction();
			
			$rules = [
				'email' => 'required',
				'password' => 'required|min:6',
			];

			$validator = Validator::make($request->all(), $rules);

			if ($validator->fails()) {
				DB::rollBack();
				return response()->json(['message' => $validator->errors()->first(),'error' => $validator->errors()], $this->warningCode);            
			}
			
			if(auth()->guard('superadmin')->attempt($request->only(['email', 'password']))) {
			
				config(['auth.guards.api.provider' => 'superadmin']);
	  
				$customer = Auth::guard('superadmin')->user();
				
				//$customer->AuthAcessToken()->where('name','SuperAdmin')->delete();
		
				$customer->updated_at = Carbon::now();
				$customer->save();
	
				$token =  $customer->createToken('Superadmin',['superadmin'])->accessToken;
				
				DB::commit();
				return response()->json(['message'=>__('Successfully.'),'user'=>$customer,'token'=>$token], $this->successCode);
				
				
				
			}else{
				DB::rollBack();
				return response()->json(['message' => __('Please check your credentials and try again.')], $this->warningCode);            
			}

		}catch (\Illuminate\Database\QueryException $exception){
			DB::rollBack();
			return response()->json(['message'=>$exception->getMessage()], $this->warningCode);
		}catch(\Exception $exception){
			DB::rollBack();
			return response()->json(['message'=>$exception->getMessage()], $this->warningCode);
		}
	}
	
	
	public function createuser(Request $request){
		
		try {
			
			DB::beginTransaction();
			$rules = [
				'name'     => 'required',
				'email'    => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix|unique:users',
				'password' => 'required|min:6',
			];

			$validator = Validator::make($request->all(), $rules);

			if ($validator->fails()) {
				return response()->json(['message' => __('All fields are required.'),'error' => $validator->errors()], $this->warningCode);      
			}

			$request->request->add([ 'password' => Hash::make($request->input('password'))]);
			
			$data  = ($request->all());

			$user  = User::create($data);
			$token =  $user->createToken('auth')->accessToken;
			
			DB::commit();
			
			return response()->json(['message' => __('Successful.'), 'user' => $user, 'token'=>$token], $this->successCode);
		
		}catch (\Illuminate\Database\QueryException $exception){
			DB::rollBack();
			return response()->json(['message'=>$exception->getMessage()], $this->warningCode);
		}catch(\Exception $exception){
			DB::rollBack();
			return response()->json(['message'=>$exception->getMessage()], $this->warningCode);
		}
	}		
}