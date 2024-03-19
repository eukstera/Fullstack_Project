<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// get all users haha
Route::get('user',[UserController::class,'getAllUser']);
// get user by id
Route::get('user/id/{id}',[UserController::class,'getUser']);
// get user by name
Route::get('user/name/{name}', [UserController::class, 'getUserByName']);

