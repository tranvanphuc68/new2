<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\StudentCourseController;
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
//admin can do it

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

//Students Courses

Route::group(['middleware'=>'auth'], function(){
    Route::get('/students_courses', [StudentCourseController::class, 'index']);
    Route::get('/students_courses/create',[StudentCourseController::class, 'create'])->middleware('admin');   
    Route::get('/students_courses/{student_course}',[StudentCourseController::class, 'show']);
});

Route::group(['middleware'=>'admin'], function(){
    Route::post('/students_courses', [StudentCourseController::class, 'store']);
    Route::get('/students_courses/{student_course}/edit', [StudentCourseController::class, 'edit']);
    Route::put('/students_courses/{student_course}', [StudentCourseController::class, 'update']);
    Route::delete('/students_courses/{student_course}', [StudentCourseController::class, 'destroy']);
});

//Fee

Route::group(['middleware'=>'auth'], function(){
    Route::get('/fees', [FeeController::class, 'index']);
    Route::get('/fees/create',[FeeController::class, 'create'])->middleware('admin');   
    Route::get('/fees/{fee}',[FeeController::class, 'show']);
});

Route::group(['middleware'=>'admin'], function(){
    Route::post('/fees', [FeeController::class, 'store']);
    Route::get('/fees/{fee}/edit', [FeeController::class, 'edit']);
    Route::put('/fees/{fee}', [FeeController::class, 'update']);
    Route::delete('/fees/{fee}', [FeeController::class, 'destroy']);
});

