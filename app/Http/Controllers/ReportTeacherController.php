<?php

namespace App\Http\Controllers;

use App\Models\ReportTeacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportTeacherController extends Controller
{
    public function index()
    {
    $report_teachers = DB::table('report_teachers')
        ->join('users', 'users.id', '=', 'report_teachers.id_student')
        ->join('courses', 'courses.id', '=', 'report_teachers.id_course')
        ->select('report_teachers.*', 'users.fullname', 'courses.name')
        ->get();
    return view('report_teachers.index', [
            'report_teachers' => $report_teachers
        ]);
    }

    public function show($id_student, $id_course)
    {
        return view('report_teachers.show', [
            'id_student' => $id_student,
            'id_course' => $id_course
        ]);
    }
    public function edit($id_student, $id_course)
    {   
        $data = ReportTeacher::where('id_student', '=', "$id_student")
        ->where('id_course', '=', "$id_course")
        ->get();
        $report_teacher = $data[0];
        
        return view('report_teachers.edit', [
            'report_teacher' => $report_teacher
        ]);
    }

    public function update(Request $request, $id_student, $id_course)
    {
        $report_teacher = ReportTeacher::where('id_student', '=', "$id_student")
        ->where('id_course', '=', "$id_course")
        ->update([
            'id_student' => $request->id_student,
            'id_course' => $request->id_course,
            'content' => $request->content
        ]);
        return redirect('report_teachers');
    }
}
