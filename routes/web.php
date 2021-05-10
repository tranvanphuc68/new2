<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentCourseController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\ReportTeacherController;
use App\Http\Controllers\DetailCourseController;
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
    Route::get('/students_courses/{id_student}-{id_course}',[StudentCourseController::class, 'show']);
});

Route::group(['middleware'=>'admin'], function(){
    Route::post('/students_courses', [StudentCourseController::class, 'store']);
    Route::get('/students_courses/{id_student}-{id_course}/edit', [StudentCourseController::class, 'edit']);
    Route::put('/students_courses/{id_student}-{id_course}', [StudentCourseController::class, 'update']);
    Route::delete('/students_courses/{id_student}-{id_course}', [StudentCourseController::class, 'destroy']);
});

//Fee

Route::group(['middleware'=>'auth'], function(){
    Route::get('/fees', [FeeController::class, 'index']);  
    Route::get('/fees/{id_student}-{id_course}',[FeeController::class, 'show']);
});

Route::group(['middleware'=>'admin'], function(){
    Route::get('/fees/{id_student}-{id_course}/edit', [FeeController::class, 'edit']);
    Route::put('/fees/{id_student}-{id_course}', [FeeController::class, 'update']);
});

// Salaries
Route::group(['middleware'=>'auth'], function(){
    Route::get('/salaries', [SalaryController::class, 'index']);  
    Route::get('/salaries/{id_student}-{id_course}',[SalaryController::class, 'show']);
});

Route::group(['middleware'=>'admin'], function(){
    Route::get('/salaries/{id_student}-{id_course}/edit', [SalaryController::class, 'edit']);
    Route::put('/salaries/{id_student}-{id_course}', [SalaryController::class, 'update']);
});

// Mark

Route::group(['middleware'=>'auth'], function(){
    Route::get('/marks', [MarkController::class, 'index']);  
    Route::get('/marks/{id_student}-{id_course}',[MarkController::class, 'show']);
});

Route::group(['middleware'=>'admin'], function(){
    Route::get('/marks/{id_student}-{id_course}/edit', [MarkController::class, 'edit']);
    Route::put('/marks/{id_student}-{id_course}', [MarkController::class, 'update']);
});
// Report Teacher

Route::group(['middleware'=>'auth'], function(){
    Route::get('/report_teachers', [ReportTeacherController::class, 'index']);  
    Route::get('/report_teachers/{id_student}-{id_course}',[ReportTeacherController::class, 'show']);
});

Route::group(['middleware'=>'admin'], function(){
    Route::get('/report_teachers/{id_student}-{id_course}/edit', [ReportTeacherController::class, 'edit']);
    Route::put('/report_teachers/{id_student}-{id_course}', [ReportTeacherController::class, 'update']);
});

//--------------------------------------------------------------------------
// không có show và index-> courses.show
Route::group(['middleware'=>'admin'], function(){
    Route::get('/detail_course/create',[DetailCourseController::class, 'create']);
    Route::post('/detail_course', [DetailCourseController::class, 'store']);
    Route::get('/detail_course/{id_course}-{number}/edit', [DetailCourseController::class, 'edit']);
    Route::put('/detail_course/{id_course}-{number}', [DetailCourseController::class, 'update']);
    Route::delete('/detail_course/{id_course}-{number}', [DetailCourseController::class, 'destroy']);
});
