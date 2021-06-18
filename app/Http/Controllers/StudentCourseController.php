<?php

namespace App\Http\Controllers;

use App\Models\StudentCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class StudentCourseController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        if (Auth::user()->role == 'Admin') {
            $courses = DB::table('courses')
            ->select('courses.*')
            ->get();
        }
        else if (Auth::user()->role == 'Teacher') {
            $courses = DB::table('courses')
            ->where('id_teacher','=',"$id")
            ->select('courses.*')
            ->get();
        }
        else 
        {
            abort (401);
        }
        return view('students_courses.index', [
            'courses' => $courses
        ]);
    }

    public function show($id_course)
    {   
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
        $course = DB::table('courses')
        ->where('id','=',"$id_course")
        ->select('courses.*')
        ->get();
        $countStu = DB::table('students_courses')
        ->where('id_course','=',"$id_course")
        ->count('id_student');
        return view('students_courses.show', [
            'course' => $course,
            'students' => $students,
            'countStu' => $countStu,
            'id_course' => $id_course
        ]);
    }

    public function create($id_course)
    {
        if(isset($_GET['search']))
        {
            $searchStudents = $_GET['search'];
            $students = DB::table('users')
            ->where('role', 'student')
            ->whereNotExists(function($query) use ($id_course)
            {
                $query->select(DB::raw(1))
                ->from('students_courses')
                ->where('students_courses.id_course', "$id_course")
                ->whereRaw('students_courses.id_student = users.id');
            })
            ->where(function ($query) use ($searchStudents){
                $query->where('last_name','LIKE', "%".$searchStudents."%")
                    ->orWhere('first_name','LIKE', "%".$searchStudents."%")
                    ->orWhere('id','LIKE', "%".$searchStudents."%");
                })
            ->select('users.*')
            ->orderBy('last_name')
            ->get();
            foreach($students as $student)
            {
                $student->dob = Controller::formatDate($student->dob);
            }
        }
        else {
            $students = DB::table('users')
            ->where('role','Student')
            ->whereNotExists(function($query) use ($id_course)
            {
                $query->select(DB::raw(1))
                ->from('students_courses')
                ->where('students_courses.id_course', "$id_course")
                ->whereRaw('students_courses.id_student = users.id');
            })
            ->orderBy('last_name')
            ->get();
            
            foreach($students as $student)
            {
                $student->dob = Controller::formatDate($student->dob);
            }
        }
        $course = DB::table('courses')
        ->where('id','=',"$id_course")
        ->select('courses.*')
        ->get();
        $data = DB::table('courses')
        ->where('id','=',"$id_course")
        ->select('courses.*')
        ->get();
        $max = $data[0]->max_students;
        $countStu = DB::table('students_courses')
        ->where('id_course','=',"$id_course")
        ->count('id_student');
        return view('students_courses.create', [
            'students' => $students,
            'id_course' => $id_course,
            'max' => $max,
            'countStu' => $countStu,
            'course' => $course
            ]);
    }

    public function store(Request $request)
    {  
        $students = json_decode($request->data,true);
        //max = 9
        //Dem danh sach sinh vien da co trong lop => COUNT(*) => ['count' => 7]
        //So luong inh vien moi = 6

        //giai thuat
        //max - sinh vien hien co = 2
        //array_chunk || collection chunk (2) => [[student_1, studennt_2],[student_3, student_4],[student_5]]
        //chunked[0];
        foreach ( $students as $student ) {  
            $create = StudentCourse::create([
                'id_student' =>$student['id_student'],
                'id_course' => $request->id_course
            ]);
        }
        //return redirect("/students_courses/{$id_course}")->with('students', chunked(2)); 
        //@foreach(students as $student) => alert (studennt->info|id|name)
    }

    public function destroy($id_student, $id_course)
    {
        $student_course = StudentCourse::where('id_course', '=', "$id_course")
        ->where('id_student', '=', "$id_student")
        ->delete();
        return redirect("students_courses/{$id_course}");
    }

    public function search()
    {   
        $courseName = $_GET['search'];
        $id = Auth::user()->id;
        if( Auth::user()->role == 'Admin' )
        {   
            $courses = DB::table('courses')
            ->where('name', 'LIKE', '%'.$courseName.'%')
            ->orWhere('id', 'LIKE', '%'.$courseName.'%')
            ->select('courses.*')
            ->paginate(5)->withQueryString();
        } 
        elseif ( Auth::user()->role == 'Teacher' ){
            $courses = DB::table('courses')
            ->where('id_teacher', "$id")
            ->whereExists(function($query) use ($courseName)
                {
                    $query->where('name', 'LIKE', '%'.$courseName.'%')
                    ->orWhere('id', 'LIKE', '%'.$courseName.'%');
                })
            ->select('courses.*')
            ->paginate(5)->withQueryString();
        }
        return view('students_courses.index', [
            'courses' => $courses,
        ]);
    }
}