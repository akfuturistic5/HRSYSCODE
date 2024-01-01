<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DepartmentController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\DesignationController;
use App\Http\Controllers\API\HolidayController;
use App\Http\Controllers\API\LeaveController;
use App\Http\Controllers\API\WagesController;
use App\Http\Controllers\API\ContracttypeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [UserController::class, 'index']);

Route::post('/adminlogin', [UserController::class, 'adminlogin']);
Route::get('/createuser', [UserController::class, 'createuser']);

Route::group(['middleware' => ['auth:superadmin-api']], function () {
	
	Route::group(['prefix' => 'departments'], function () {
		Route::get('/', [DepartmentController::class, 'index']);
		Route::post('/', [DepartmentController::class, 'store']);
		Route::get('/{id}/detail', [DepartmentController::class, 'detail']);
		Route::put('{id}', [DepartmentController::class, 'update']);
		Route::delete('{id}', [DepartmentController::class, 'destroy']);
	});

	Route::group(['prefix' => 'designations'], function () {
		Route::get('/', [DesignationController::class, 'index']);
		Route::post('/', [DesignationController::class, 'store']);
		Route::get('/{id}/detail', [DesignationController::class, 'detail']);
		Route::put('{id}', [DesignationController::class, 'update']);
		Route::delete('{id}', [DesignationController::class, 'destroy']);
	});


	Route::group(['prefix' => 'holidays'], function () {
		Route::get('/', [HolidayController::class, 'index']);
		Route::post('/', [HolidayController::class, 'store']);
		Route::get('/{id}/detail', [HolidayController::class, 'detail']);
		Route::put('{id}', [HolidayController::class, 'update']);
		Route::delete('{id}', [HolidayController::class, 'destroy']);
	});

	Route::group(['prefix' => 'leaves'], function () {
		Route::get('/', [LeaveController::class, 'index']);
		Route::post('/', [LeaveController::class, 'store']);
		Route::get('/{id}/detail', [LeaveController::class, 'detail']);
		Route::put('{id}', [LeaveController::class, 'update']);
		Route::delete('{id}', [LeaveController::class, 'destroy']);
	});

	Route::group(['prefix' => 'wages'], function () {
		Route::get('/', [WagesController::class, 'index']);
		Route::post('/', [WagesController::class, 'store']);
		Route::get('/{id}/detail', [WagesController::class, 'detail']);
		Route::put('{id}', [WagesController::class, 'update']);
		Route::delete('{id}', [WagesController::class, 'destroy']);
	});

	Route::group(['prefix' => 'contracttype'], function () {
		Route::get('/', [ContracttypeController::class, 'index']);
		Route::post('/', [ContracttypeController::class, 'store']);
		Route::get('/{id}/detail', [ContracttypeController::class, 'detail']);
		Route::put('{id}', [ContracttypeController::class, 'update']);
		Route::delete('{id}', [ContracttypeController::class, 'destroy']);
	});

});


