<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index_teacher()
    {
        $teachers = User::where('role', 'teacher')->get();
        return view('users.teachers.index', [
            'teachers' => $teachers
        ]);
    }

    public function index_student()
    {
        $students = User::where('role', 'student')->get();
        return view('users.students.index', [
            'students' => $students
        ]);
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }

    public function create_teacher()
    {
        return view('users.teachers.create');
    }
    
    public function create_student()
    {
        return view('users.students.create');
    }

    public function store_teacher(Request $request)
    {
        $data = User::create([
            'id' => $request->input('id'),
            'fullname' => $request->input('fullname'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'hometown' => $request->input('hometown'),
            'id_card' => $request->input('id_card'),
            'academic_level' => $request->input('academic_level'),
            'accomplishment' => $request->input('accomplishment'),
            'account' => $request->input('account'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => 'Teacher'
        ]);
        return redirect('/users/teacher');
    }

    public function store_student(Request $request)
    {
        $data = User::create([
            'id' => $request->input('id'),
            'fullname' => $request->input('fullname'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'hometown' => $request->input('hometown'),
            'id_card' => $request->input('id_card'),
            'academic_level' => $request->input('academic_level'),
            'accomplishment' => $request->input('accomplishment'),
            'account' => $request->input('account'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => 'Student'
        ]);
        return redirect('/users/student');
    }

    public function edit_teacher(User $user)
    {
        return view('users.teachers.edit', [
            'user' => $user
        ]);
    }

    public function edit_student(User $user)
    {
        return view('users.students.edit', [
            'user' => $user
        ]);
    }

    public function update_teacher(Request $request, User $user)
    {
        $user->update([
            'fullname' => $request->fullname
        ]);
        return redirect('/users/teacher');
    }

    public function update_student(Request $request, User $user)
    {
        $user->update([
            'fullname' => $request->fullname
        ]);
        return redirect('/users/student');
    }

    public function destroy_student(User $user)
    {
        $user->delete();
        return redirect('/users/student');
    }

    public function destroy_teacher(User $user)
    {
        $user->delete();
        return redirect('/users/teacher');
    }

    public function self_edit()
    {   
        $user = Auth::user();
        return view('users.self_edit', [
            'user' => $user
        ]);
    }

    public function self_update(Request $request, User $user)
    {   
        $user->update([
            'fullname' => $request->fullname
        ]);
        return redirect('/');
    }
}
