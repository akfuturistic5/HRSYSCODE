<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DepartmentController;
use App\Http\Controllers\API\WagesController;
use App\Http\Controllers\API\UserController;

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

//Route::group(['middleware' => ['auth:superadmin-api', 'superadmin']], function () {
	
Route::group(['prefix' => 'departments'], function () {
	Route::get('/', [DepartmentController::class, 'index']);
	Route::post('/', [DepartmentController::class, 'store']);
	Route::get('/{id}/detail', [DepartmentController::class, 'detail']);
	Route::put('{id}', [DepartmentController::class, 'update']);
	Route::delete('{id}', [DepartmentController::class, 'destroy']);
});


Route::group(['prefix' => 'wages'], function () {
	Route::get('/', [WagesController::class, 'index']);
	Route::post('/', [WagesController::class, 'store']);
	Route::get('/{id}/detail', [WagesController::class, 'detail']);
	Route::put('{id}', [WagesController::class, 'update']);
	Route::delete('{id}', [WagesController::class, 'destroy']);
});
		
//});


