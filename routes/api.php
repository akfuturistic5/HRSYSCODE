<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DepartmentController;
use App\Http\Controllers\API\WagesController;
use App\Http\Controllers\API\ContracttypeController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ShiftsController;
use App\Http\Controllers\API\ScheduleController;
use App\Http\Controllers\API\OvertimeController;
use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\API\TimesheetController;

use App\Http\Controllers\API\DesignationController;
use App\Http\Controllers\API\HolidayController;
use App\Http\Controllers\API\LeaveController;
use App\Http\Controllers\API\LeaveTypeController;
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
		Route::get('/all', [DepartmentController::class, 'listall']);
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
	
	Route::group(['prefix' => 'leavetypes'], function () {
		Route::get('/all', [LeaveTypeController::class, 'listall']);
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


	Route::group(['prefix' => 'shifts'], function () {
		Route::get('/', [ShiftsController::class, 'index']);
		Route::post('/', [ShiftsController::class, 'store']);
		Route::get('/{id}/detail', [ShiftsController::class, 'detail']);
		Route::put('{id}', [ShiftsController::class, 'update']);
		Route::delete('{id}', [ShiftsController::class, 'destroy']);
	});
	
	Route::group(['prefix' => 'schedule'], function () {
		Route::get('/', [ScheduleController::class, 'index']);
		Route::post('/', [ScheduleController::class, 'store']);
		Route::get('/{id}/detail', [ScheduleController::class, 'detail']);
		Route::put('{id}', [ScheduleController::class, 'update']);
		Route::delete('{id}', [ScheduleController::class, 'destroy']);
	});
	
	Route::group(['prefix' => 'overtime'], function () {
		Route::get('/', [OvertimeController::class, 'index']);
		Route::post('/', [OvertimeController::class, 'store']);
		Route::get('/{id}/detail', [OvertimeController::class, 'detail']);
		Route::put('{id}', [OvertimeController::class, 'update']);
		Route::delete('{id}', [OvertimeController::class, 'destroy']);
	});	

	Route::group(['prefix' => 'project'], function () {
		Route::get('/', [ProjectController::class, 'index']);
		Route::post('/', [ProjectController::class, 'store']);
		Route::get('/{id}/detail', [ProjectController::class, 'detail']);
		Route::put('{id}', [ProjectController::class, 'update']);
		Route::delete('{id}', [ProjectController::class, 'destroy']);
	});

	Route::group(['prefix' => 'timesheet'], function () {
		Route::get('/', [TimesheetController::class, 'index']);
		Route::post('/', [TimesheetController::class, 'store']);
		Route::get('/{id}/detail', [TimesheetController::class, 'detail']);
		Route::put('{id}', [TimesheetController::class, 'update']);
		Route::delete('{id}', [TimesheetController::class, 'destroy']);
	});
});	