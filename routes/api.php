<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route untuk akses employee
Route::get('/employee', [EmployeeController::class, 'index'] );
Route::post('/employee', [EmployeeController::class , 'create']);
Route::put('/employee/{id}', [EmployeeController::class, 'update']);
Route::delete('/employee/{id}', [EmployeeController::class, 'delete']);

//Route untuk menampilkan User
Route::get('/user', [UserController::class, 'index'] );
Route::post('/user', [UserController::class, 'create'] );
Route::put('/user/{id}', [UserController::class, 'update'] );
Route::delete('/user/{id}', [UserController::class, 'delete'] );

Route::get('/category', [CategoryController::class, 'index']);
Route::post('/category', [CategoryController::class, 'create']);
Route::put('/category/{id}', [CategoryController::class, 'update']);
Route::get('/category/{id}', [CategoryController::class, 'delete']);
