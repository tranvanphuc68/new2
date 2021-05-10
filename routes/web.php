<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PostController;
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
    Route::get('/users/create',[UserController::class, 'create'])->middleware('admin');   
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
//------------------------------------------------------------------------
Route::group(['middleware'=>'auth'], function(){
    Route::get('/courses', [CourseController::class, 'index']);
    Route::get('/courses/create',[CourseController::class, 'create'])->middleware('admin');   
    Route::get('/courses/{course}',[CourseController::class, 'show']);
});

Route::group(['middleware'=>'admin'], function(){
    Route::post('/courses', [CourseController::class, 'store']);
    Route::get('/courses/{course}/edit', [CourseController::class, 'edit']);
    Route::put('/courses/{course}', [CourseController::class, 'update']);
    Route::delete('/courses/{course}', [CourseController::class, 'destroy']);
});
//----------------------------------------------------------------------- 
//post
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create',[PostController::class, 'create'])->middleware('auth');
Route::get('/posts/{post}',[PostController::class, 'show']);

Route::group(['middleware'=>'auth'], function(){
 //-> auth 
Route::post('/posts', [PostController::class, 'store']);//-> auth
Route::get('/posts/{post}/self_edit', [PostController::class, 'self_edit']);//->auth + $user = Auth::user();
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::delete('/posts/{post}', [PostController::class, 'destroy']);//->auth + $user = Auth::user();
});
//comment
Route::group(['middleware'=>'auth'], function(){ 
Route::post('/comments/{post}', [CommentController::class, 'store']);
Route::get('/comments/{comment}/self_edit', [CommentController::class, 'self_edit']);//->auth + $user = Auth::user();
Route::put('/comments/{comment}', [CommentController::class, 'update']);
Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);//->auth + $user = Auth::user();
});