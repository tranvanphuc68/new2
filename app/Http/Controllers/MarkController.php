<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class MarkController extends Controller
{
    public function index()
    {
        $adminView = DB::table('courses')
        ->select('courses.*')
        ->get();

        $id = Auth::user()->id;
        $studentView = DB::table('students_courses')
        ->join('users', 'users.id', '=', 'students_courses.id_student')
        ->join('courses', 'courses.id', '=', 'students_courses.id_course')
        ->where('id_student', '=', "$id")
        ->select('students_courses.*', 'users.first_name', 'users.last_name', 'courses.name')
        ->orderBy('last_name')
        ->get();

        $teacherView = DB::table('courses')
        ->where('id_teacher', "$id")
        ->select('courses.*')
        ->get();

        return view('marks.index', [
            'teacherView' => $teacherView,
            'studentView' => $studentView,
            'adminView' => $adminView
        ]);
    }

    public function show($id_course)
    {
        $course = DB::table('courses')
                ->where('id', '=', "$id_course")
                ->select('courses.*')
                ->get();
        if(isset($_GET['search']))
        {
            $searchStudents = $_GET['search'];
            $students = DB::table('users')
            ->join('students_courses', 'students_courses.id_student', '=', 'users.id')
            ->where('role', 'student')
            ->whereExists(function($query) use ($id_course)
                {
                    $query->select(DB::raw(1))
                    ->from('students_courses')
                    ->whereRaw("students_courses.id_student = users.id");
                })
            ->where('id_course',"$id_course")
            ->where(function ($query) use ($searchStudents){
                $query->where('last_name','LIKE', "%".$searchStudents."%")
                    ->orWhere('first_name','LIKE', "%".$searchStudents."%")
                    ->orWhere('id','LIKE', "%".$searchStudents."%");
                })
            ->select('users.*','students_courses.*')
            ->orderBy('last_name')
            ->get();
            foreach($students as $student)
            {
                $student->dob = Controller::formatDate($student->dob);
            }
        }
        else {
            $students = DB::table('students_courses')
            ->join('users','users.id','=','students_courses.id_student')
            ->join('courses','courses.id','=','students_courses.id_course')
            ->where('id_course','=',"$id_course")
            ->select('students_courses.*','users.first_name', 'users.last_name','courses.name','users.dob')
            ->orderBy('last_name')
            ->get();
            foreach($students as $student)
            {
                $student->dob = Controller::formatDate($student->dob);
            }
        }
        $countStu = DB::table('students_courses')
        ->where('id_course','=',"$id_course")
        ->count('id_student');
        return view('marks.show', [
            'course' => $course,
            'students' => $students,
            'countStu' => $countStu,
            'id_course' => $id_course
        ]);
    }

    public function edit($id_course)
    {
        $students = DB::table('students_courses')
        ->join('users', 'users.id', '=', 'students_courses.id_student')
        ->join('courses', 'courses.id', '=', 'students_courses.id_course')
        ->where('id_course',$id_course)
        ->select('students_courses.*','users.first_name', 'users.last_name','courses.name','users.dob')
        ->orderBy('last_name')
        ->get();
        foreach($students as $student)
        {
            $student->dob = Controller::formatDate($student->dob);
        }
        return view('marks.edit', [
            'students' => $students,
            'id_course' => $id_course
        ]);
    }

    public function update(Request $request, $id_course)
    {
        $students = DB::table('students_courses')
        ->join('users', 'users.id', '=', 'students_courses.id_student')
        ->join('courses', 'courses.id', '=', 'students_courses.id_course')
        ->where('id_course',$id_course)
        ->select('students_courses.*','users.first_name', 'users.last_name','courses.name')
        ->get();

        foreach ($students as $student) {
            DB::table('students_courses')
            ->where('id_student','=',$student->id_student)
            ->where('id_course','=',$student->id_course)
            ->update([
                'mark' => $request->input("$student->id_student")
            ]);
        }
        return redirect("/marks/{$id_course}");
    }

    public function search()
    {   
        $courseName = $_GET['search'];
        $id = Auth::user()->id;
        if( Auth::user()->role == 'Admin' )
        {   
            $adminView = DB::table('courses')
            ->where('name', 'LIKE', '%'.$courseName.'%')
            ->orWhere('id', 'LIKE', '%'.$courseName.'%')
            ->select('courses.*')
            ->get();
            return view('marks.index', [
                'adminView' => $adminView,
            ]);
        } 
        elseif( Auth::user()->role == 'Teacher' ){
            $teacherView = DB::table('courses')
            ->where('id_teacher', "$id")
            ->where(function ($query) use ($courseName){
                $query->where('name', 'LIKE', '%'.$courseName.'%')
                    ->orWhere('id','LIKE', "%".$courseName."%");
                })
            ->select('courses.*')
            ->get();
            return view('marks.index', [
                'teacherView' => $teacherView,
            ]);
        }
        else{ 
            $studentView = DB::table('courses')
            ->join('students_courses','students_courses.id_course','=','courses.id')
            ->where(function($query) use ($id)
                {
                    $query->select(DB::raw(1))
                    ->from('students_courses')
                    ->whereRaw("students_courses.id_student = $id");
                })
            ->where(function ($query) use ($courseName){
                $query->where('name', 'LIKE', '%'.$courseName.'%')
                    ->orWhere('id','LIKE', "%".$courseName."%");
                })
            ->select('courses.*','students_courses.*')
            ->get();
            return view('marks.index', [
                'studentView' => $studentView,
            ]);
        }
    }
}