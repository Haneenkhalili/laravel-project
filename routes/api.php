<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\CoursesController;
use App\HTTP\Controllers\LoginController;


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



Route::post('/login', [App\Http\Controllers\LoginController::class,'login']);
Route::middleware('auth:api')->get('/courses',[App\Http\Controllers\CoursesController::class,'index']);
Route::middleware('auth:api')->post('/courses',[App\Http\Controllers\CoursesController::class,'store']);



