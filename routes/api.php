<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FileController;

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
Route::post('save',[DeviceController::class,'testData']);
Route::get('data',[dummyAPI::class,'getData']);
Route::get('list/{id?}',[DeviceController::class,'list']);
Route::post('add',[DeviceController::class,'add']);
Route::post('login',[UserController::class,'index']);
Route::put('update',[DeviceController::class,'update']);
Route::delete('delete/{id}',[DeviceController::class,'delete']);
Route::post('upload',[FileController::class,'upload']);


Route::apiResource('member',MemberController::class);
