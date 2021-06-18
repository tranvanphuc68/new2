<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SalaryController extends Controller
{
    public function index()
    {
        if(isset($_GET['searchTeacher']))
        {
            $searchTeacher = $_GET['searchTeacher'];
            $teachers = DB::table('users')
            ->where('role', 'teacher')
            ->whereExists(function($query)
                {
                    $query->select(DB::raw(1))
                    ->from('courses')
                    ->whereRaw('courses.id_teacher = users.id');
                })
            ->where(function ($query) use ($searchTeacher){
                $query->where('last_name','LIKE', "%".$searchTeacher."%")
                    ->orWhere('first_name','LIKE', "%".$searchTeacher."%")
                    ->orWhere('id','LIKE', "%".$searchTeacher."%");
                })
            ->orderBy('last_name')
            ->paginate(5)->withQueryString();
            foreach($teachers as $teacher)
            {
                $teacher->dob = Controller::formatDate($teacher->dob);
            }
        }
        else {
            $teachers = DB::table('users')
                ->where('role', 'teacher')
                ->whereExists(function($query)
                {
                    $query->select(DB::raw(1))
                    ->from('courses')
                    ->whereRaw('courses.id_teacher = users.id');
                })
                ->select('users.*')
                ->orderBy('last_name')
                ->get();
                foreach($teachers as $teacher)
                {
                    $teacher->dob = Controller::formatDate($teacher->dob);
                }
        }
        $id = Auth::user()->id;
        if(isset($_GET['searchCourse']))
        {
            $searchCourse = $_GET['searchCourse'];
            $salaries = DB::table('courses')
            ->where('id_teacher', "$id")
            ->where(function ($query) use ($searchCourse){
                $query->where('name', 'LIKE', '%'.$searchCourse.'%')
                    ->orWhere('id','LIKE', "%".$searchCourse."%");
                })
            ->select('courses.*')
            ->paginate(5)->withQueryString();
        }
        else {
            $salaries = DB::table('courses')
            ->join('users', 'users.id', '=', 'courses.id_teacher')
            ->where('id_teacher', "$id")
            ->select('courses.*')
            ->get();
        } 
        $sum = DB::table('courses')
        ->join('users', 'users.id', '=', 'courses.id_teacher')
        ->where('id_teacher', "$id")
        ->sum('courses.salary');

        $received = DB::table('courses')
        ->join('users', 'users.id', '=', 'courses.id_teacher')
        ->where('id_teacher', "$id")
        ->where('status_salary','1')
        ->count('courses.salary');

        $count = DB::table('courses')
        ->join('users', 'users.id', '=', 'courses.id_teacher')
        ->where('id_teacher', "$id")
        ->count('courses.salary');
        if (Auth::user()->role == 'Student')
            {
                abort(401);
            }
        return view('salaries.index', [
                'teachers' => $teachers,
                'salaries' => $salaries,
                'count' => $count,
                'received' => $received,
                'sum' => $sum
            ]);
    }

    public function show($id_teacher)
    {
        $salaries = DB::table('courses')
        ->join('users', 'users.id', '=', 'courses.id_teacher')
        ->where('id_teacher', "$id_teacher")
        ->select('courses.*', 'users.first_name', 'users.last_name')
        ->orderBy('last_name')
        ->get();

        $sum = DB::table('courses')
        ->join('users', 'users.id', '=', 'courses.id_teacher')
        ->where('id_teacher', "$id_teacher")
        ->where('status_salary','1')
        ->sum('courses.salary');

        $received = DB::table('courses')
        ->join('users', 'users.id', '=', 'courses.id_teacher')
        ->where('id_teacher', "$id_teacher")
        ->where('status_salary','1')
        ->count('courses.salary');

        $count = DB::table('courses')
        ->join('users', 'users.id', '=', 'courses.id_teacher')
        ->where('id_teacher', "$id_teacher")
        ->count('courses.salary');

        return view('salaries.show', [
            'count' => $count,
            'sum' => $sum,
            'received' => $received,
            'salaries' => $salaries,
            'id_teacher' => $id_teacher
        ]);
    }

    public function edit($id_teacher)
    {
        $teachers = DB::table('courses')
        ->join('users', 'users.id', '=', 'courses.id_teacher')
        ->where('id_teacher', "$id_teacher")
        ->select('courses.*', 'users.first_name', 'users.last_name')
        ->orderBy('last_name')
        ->get();
        return view('salaries.edit', [
            'teachers' => $teachers,
            'id_teacher' => $id_teacher
        ]);
    }

    public function update(Request $request, $id_teacher)
    {
        $teachers = DB::table('courses')
        ->join('users', 'users.id', '=', 'courses.id_teacher')
        ->where('id_teacher', "$id_teacher")
        ->select('courses.*','users.first_name', 'users.last_name')
        ->get();
        //
        foreach ($teachers as $teacher) {
            DB::table('courses')
            ->where('id','=',$teacher->id)
            ->update([
                'status_salary' => $request->input("$teacher->id")
            ]);
        }
        return redirect("/salaries/{$teachers[0]->id_teacher}");
    }

}