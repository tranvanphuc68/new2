<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

//authenticate can do
Route::group(['middleware'=>'auth'], function(){
    //
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/create', [UserController::class, 'create'])->middleware('admin');   
    Route::get('/users/{user}',[UserController::class, 'show']);
    //update personal infomation
    Route::get('/user/self_edit', [UserController::class, 'self_edit']);
    Route::put('/users/{user}', [UserController::class, 'update']);
});
//admin can do

Route::group(['middleware'=>'admin'], function(){
    Route::post('/users', [UserController::class, 'store']);
    Route::get('/users/{user}/edit', [UserController::class, 'edit']);
    Route::delete('/users/{user}', [UserController::class, 'destroy']);
});

