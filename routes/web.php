<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Mail\SubscribedEmail;
use Illuminate\Support\Facades\Route;
use App\Models\Role;
use App\Notifications\SampleNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

Route::get('/login', function(){ return view('auth.login');})->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);


//middlewares: authentication, rbac ==>route: backend
Route::group(['prefix'=> 'backend', 'middleware' => ['authenticate']], function() {
    Route::get('/role', [RoleController::class, 'index']);
    Route::get('/role/create', [RoleController::class, 'create']);
    Route::post('/role', [RoleController::class, 'store']);
});

//Route::frontend
Route::group(['middleware' => ['authenticate', 'privilege']], function() {

});

Route::group(['middleware' => ['authenticate']], function(){
    Route::get('/index', [UserController::class, 'index']);
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/create', [UserController::class, 'store']);
});


Route::get('/privilege-failed', function () {
    return 'failed privilege';
});

Route::get('mail', function() {
    $user = Auth::user();
    $user->notify(new SampleNotification());
    return 'done';
});