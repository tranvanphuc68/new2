<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DetailCourseController;
use App\Http\Controllers\AttendanceController;
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
    return view('home.index');
});

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
//-----------------------------------------------------------------------------------

    Route::get('/users/teacher', [UserController::class, 'index_teacher']);
Route::group(['middleware'=>'admin'], function(){    
    Route::get('/users/teacher/create',[UserController::class, 'create_teacher']);   
    Route::post('/users/teacher', [UserController::class, 'store_teacher']);
    Route::get('/users/teacher/{user}/edit', [UserController::class, 'edit_teacher']);
    Route::put('/users/teacher/{user}', [UserController::class, 'update_teacher']);
    Route::delete('/users/teacher/{user}', [UserController::class, 'destroy_teacher']);
});
    Route::get('/users/student', [UserController::class, 'index_student']);
Route::group(['middleware'=>'admin'], function(){ 
    Route::get('/users/student/create',[UserController::class, 'create_student']);
    Route::post('/users/student', [UserController::class, 'store_student']);
    Route::get('/users/student/{user}/edit', [UserController::class, 'edit_student']);
    Route::put('/users/student/{user}', [UserController::class, 'update_student']);
    Route::delete('/users/student/{user}', [UserController::class, 'destroy_student']);
});

    Route::get('/users/{user}',[UserController::class, 'show']);
    Route::get('/users/self_edit', [UserController::class, 'self_edit']);
    Route::put('/users/self_edit/{user}', [UserController::class, 'self_update']);
    
    


Route::group(['middleware'=>'admin'], function(){
    
   
    
    
    
    
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

//--------------------------------------------------------------------------
// không có show và index-> courses.show
Route::group(['middleware'=>'admin'], function(){
    Route::get('/detail_course/create',[DetailCourseController::class, 'create']);
    Route::post('/detail_course', [DetailCourseController::class, 'store']);
    Route::get('/detail_course/{id_course}-{number}/edit', [DetailCourseController::class, 'edit']);
    Route::put('/detail_course/{id_course}-{number}', [DetailCourseController::class, 'update']);
    Route::delete('/detail_course/{id_course}-{number}', [DetailCourseController::class, 'destroy']);
});
// oke
Route::group(['middleware'=>'admin'], function(){
    Route::get('/detail_course/create',[DetailCourseController::class, 'create']);
    Route::post('/detail_course', [DetailCourseController::class, 'store']);
    Route::get('/detail_course/{id_course}-{number}/edit', [DetailCourseController::class, 'edit']);
    Route::put('/detail_course/{id_course}-{number}', [DetailCourseController::class, 'update']);
    Route::delete('/detail_course/{id_course}-{number}', [DetailCourseController::class, 'destroy']);
});

Route::group(['middleware'=>'admin'], function(){
    Route::get('/attendance', [AttendanceController::class, 'index']);
    Route::get('/attendance/{id_course}-{number}',[AttendanceController::class, 'create']);
    Route::post('/attendance', [AttendanceController::class, 'store']);
});