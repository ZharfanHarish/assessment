<?php

use App\Http\Controllers\Api\AuthController;
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

Route::post('login', [AuthController::class, 'read']);
Route::post('register', [AuthController::class, 'create']);
Route::get('users', [AuthController::class, 'index']);
Route::post('files', [AuthController::class, 'upload']);
Route::post('user/update/{id}',[AuthController::class , 'update']);
Route::get('user/delete/{id}',[AuthController::class , 'delete']);