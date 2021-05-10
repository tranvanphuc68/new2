<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarkController extends Controller
{
    public function index()
    {
    $marks = DB::table('marks')
        ->join('users', 'users.id', '=', 'marks.id_student')
        ->join('courses', 'courses.id', '=', 'marks.id_course')
        ->select('id_student', 'users.fullname', 'courses.name','id_course','mark')
        ->get();
    return view('marks.index', [
            'marks' => $marks
        ]);
    }

    public function show($id_student, $id_course)
    {
        return view('marks.show', [
            'id_student' => $id_student,
            'id_course' => $id_course
        ]);
    }

    public function edit($id_student, $id_course)
    {   
        $data = Mark::where('id_student', '=', "$id_student")
        ->where('id_course', '=', "$id_course")
        ->get();
        $mark = $data[0];
        
        return view('marks.edit', [
            'mark' => $mark
        ]);
    }

    public function update(Request $request, $id_student, $id_course)
    {
        $mark = Mark::where('id_student', '=', "$id_student")
        ->where('id_course', '=', "$id_course")
        ->update([
            'id_student' => $request->id_student,
            'id_course' => $request->id_course,
            'mark' => $request->mark
        ]);
        return redirect('marks');
    }
}
