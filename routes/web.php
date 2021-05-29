<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ReviewCourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentCourseController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\DetailCourseController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReportPostController;
use App\Http\Controllers\CommentController;
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
Route::get('/report', function () {
    return view('report.student');
});
Route::get('/about', function () {
    return view('home.about');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/review_course/create', [ReviewCourseController::class, 'create']);
Route::post('/review_course', [ReviewCourseController::class, 'store']);
Route::get('/review_course/{id}', [ReviewCourseController::class, 'show']);
Route::get('/review_course/edit/{id}', [ReviewCourseController::class, 'edit']);
Route::put('/review_course/{id}', [ReviewCourseController::class, 'update']);
//-----------------------------------------------------------------------------------

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
//-----------------------------------------------------------------------------------


    Route::get('/users/teacher', [UserController::class, 'index_teacher']);
Route::group(['middleware'=>'admin'], function(){    
    Route::get('/users/teacher/create',[UserController::class, 'create_teacher']);   
    Route::post('/users/teacher', [UserController::class, 'store_teacher']);
    Route::get('/users/teacher/{user}/edit', [UserController::class, 'edit_teacher']);
    Route::get('/users/teacher/{user}',[UserController::class, 'show_teacher']);
    Route::put('/users/teacher/{user}', [UserController::class, 'update_teacher']);
    Route::delete('/users/teacher/{user}', [UserController::class, 'destroy_teacher']);
});

    Route::get('/users/student', [UserController::class, 'index_student']);
Route::group(['middleware'=>'admin'], function(){ 
    Route::get('/users/student/create',[UserController::class, 'create_student']);
    Route::post('/users/student', [UserController::class, 'store_student']);
    Route::get('/users/student/{user}/edit', [UserController::class, 'edit_student']);
    Route::get('/users/student/{user}',[UserController::class, 'show_student']);
    Route::put('/users/student/{user}', [UserController::class, 'update_student']);
    Route::delete('/users/student/{user}', [UserController::class, 'destroy_student']);
});

Route::group(['middleware'=>'auth'], function(){
    Route::get('/users/self_edit', [UserController::class, 'self_edit']);
    Route::put('/users/update_avt/{user}', [UserController::class, 'update_avt']);
    Route::get('/users/self_show',[UserController::class, 'self_show']);
    Route::put('/users/self_edit/{user}', [UserController::class, 'self_update']);
});
//------------------------------------------------------------------------
Route::group(['middleware'=>'auth'], function(){
    Route::get('/courses', [CourseController::class, 'index']);
    Route::get('/courses/create',[CourseController::class, 'create'])->middleware('admin');   
    Route::get('/courses/{course}',[CourseController::class, 'show']);
    Route::get('/search/courses',[CourseController::class, 'search']);
});

Route::group(['middleware'=>'admin'], function(){
    Route::post('/courses', [CourseController::class, 'store']);
    Route::get('/courses/{course}/edit', [CourseController::class, 'edit']);
    Route::put('/courses/{course}', [CourseController::class, 'update']);
    Route::delete('/courses/{course}', [CourseController::class, 'destroy']);
});

//Attendance
Route::group(['middleware'=>'teacher'], function(){
    Route::get('/attendance', [AttendanceController::class, 'index']);
    Route::get('/attendance/{id_course}-{number}',[AttendanceController::class, 'create']);
    Route::post('/attendance', [AttendanceController::class, 'store']);
});

//Students Courses
//------------------------------------------------------
Route::group(['middleware'=>'auth'], function(){
    Route::get('/students_courses', [StudentCourseController::class, 'index']);
    Route::get('/students_courses/create/{id_course}',[StudentCourseController::class, 'create'])->middleware('admin');   
    Route::get('/students_courses/{id_course}',[StudentCourseController::class, 'show']);
});

Route::group(['middleware'=>'admin'], function(){
    Route::post('/students_courses', [StudentCourseController::class, 'store']);
    Route::delete('/students_courses/{id_student}-{id_course}', [StudentCourseController::class, 'destroy']);
});

//Fee
//------------------------------------------------------
Route::group(['middleware'=>'auth'], function(){
    Route::get('/fees', [FeeController::class, 'index']);  
});

Route::group(['middleware'=>'admin'], function(){
    Route::get('/fees/{id_course}',[FeeController::class, 'show']);
    Route::get('/fees/edit/{id_course}', [FeeController::class, 'edit']);
    Route::put('/fees/{id_course}', [FeeController::class, 'update']);
});

// Salaries
//------------------------------------------------------
    Route::group(['middleware'=>'auth'], function(){
    Route::get('/salaries', [SalaryController::class, 'index']);  
});

Route::group(['middleware'=>'admin'], function(){
    Route::get('/salaries/{id_teacher}',[SalaryController::class, 'show']);
    Route::get('/salaries/edit/{id_teacher}', [SalaryController::class, 'edit']);
    Route::put('/salaries/{id_teacher}', [SalaryController::class, 'update']);
});

// Mark
//------------------------------------------------------
Route::group(['middleware'=>'auth'], function(){
    Route::get('/marks', [MarkController::class, 'index']); 
    Route::get('/marks/{id_course}',[MarkController::class, 'show']); 
});

Route::group(['middleware'=>'teacher'], function(){
    Route::get('/marks/edit/{id_course}', [MarkController::class, 'edit']);
    Route::put('/marks/{id_course}', [MarkController::class, 'update']);
});
// Feedback
//--------------------------------------------------------------------------------
Route::group(['middleware'=>'auth'], function(){
    Route::get('/feedbacks', [FeedbackController::class, 'index']);  
    Route::get('/feedbacks/{id_course}',[FeedbackController::class, 'show']);
    Route::get('/feedbacks/edit/{id_course}', [FeedbackController::class, 'student_edit']);
    Route::put('/feedbacks/{id_course}', [FeedbackController::class, 'update']);
});

//--------------------------------------------------------------------------
// không có show và index-> courses.show
Route::group(['middleware'=>'admin'], function(){
    Route::get('/detail_course/create/{id_course}',[DetailCourseController::class, 'create']);
    Route::post('/detail_course/{id_course}', [DetailCourseController::class, 'store']);
    Route::get('/detail_course/{id_course}-{number}/edit', [DetailCourseController::class, 'edit']);
    Route::put('/detail_course/{id_course}-{number}', [DetailCourseController::class, 'update']);
});

Route::get('/calendar/teacher', [CalendarController::class, 'index_teacher'])->middleware('teacher');
Route::get('/calendar/student', [CalendarController::class, 'index_student'])->middleware('student');

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
Route::get('/post/search', [PostController::class, 'search'])->name('search'); 
});
//comment
Route::group(['middleware'=>'auth'], function(){ 
Route::post('/comments/{post}', [CommentController::class, 'store']);
Route::get('/comments/{comment}/self_edit', [CommentController::class, 'self_edit']);//->auth + $user = Auth::user();
Route::put('/comments/{comment}', [CommentController::class, 'update']);
Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);//->auth + $user = Auth::user();
});
//report_post 

Route::group(['middleware'=>'auth'], function(){
Route::get('/report_posts', [ReportPostController::class, 'index'])->middleware('admin');
Route::get('/report_posts/{post}/create',[ReportPostController::class, 'create']);
Route::get('/report_posts/{post}',[ReportPostController::class, 'show'])->middleware('admin');
Route::post('/report_posts/{post}', [ReportPostController::class, 'store']); 
Route::delete('/report_posts/{report_post}', [ReportPostController::class, 'destroy'])->middleware('admin');
Route::get('/report_post/search', [ReportPostController::class, 'search'])->name('search')->middleware('admin'); 
});
