<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\DeviceController;
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
Route::put('update',[DeviceController::class,'update']);
