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


Route::group(['middleware'=>'auth'], function(){
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/self-edit', [UserController::class, 'self_edit']);
    Route::put('/users/self-update', [UserController::class, 'self_update']);
    Route::group(['middleware'=>'admin'], function(){
        Route::get('/users/create', [UserController::class, 'create']);
        Route::post('/users', [UserController::class, 'store']);
        Route::get('/users/{id}/edit', [UserController::class, 'edit']);
        Route::put('/users', [UserController::class, 'update']);
        Route::delete('/users/{id}/delete', [UserController::class, 'destroy']);
    });
});