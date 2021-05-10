<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalaryController extends Controller
{
    public function index()
    {
    $salaries = DB::table('salaries')
        ->join('users', 'users.id', '=', 'salaries.id_teacher')
        ->join('courses', 'courses.id', '=', 'salaries.id_course')
        ->select('salaries.*', 'users.fullname', 'courses.name', 'courses.salary')
        ->get();
    return view('salaries.index', [
            'salaries' => $salaries
        ]);
    }

    public function show(Salary $salary)
    {
        return view('salaries.show', [
            'salary' => $salary
        ]);
    }

    public function edit($id_teacher, $id_course)
    {   
        $data = Salary::where('id_teacher', '=', "$id_teacher")
        ->where('id_course', '=', "$id_course")
        ->get();
        $salary = $data[0];
        return view('salaries.edit', [
            'salary' => $salary
        ]);
    }

    public function update(Request $request, $id_teacher, $id_course)
    {
        $salary = Salary::where('id_teacher', '=', "$id_teacher")
        ->where('id_course', '=', "$id_course")
        ->update([
            'id_teacher' => $request->id_teacher,
            'id_course' => $request->id_course,
            'status' => $request->status
        ]);
        return redirect('salaries');
    }
}
