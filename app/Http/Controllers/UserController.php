<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function index_teacher()
    {
        $teachers = User::where('role', 'teacher')->paginate(5)->withQueryString();
        foreach($teachers as $teacher)
        {
            $teacher->dob = Controller::formatDate($teacher->dob);
        }
        return view('users.teachers.index', [
            'teachers' => $teachers,
        ]);
    }

    public function index_student()
    {
        $students = User::where('role', 'student')->paginate(10)->withQueryString();
        foreach($students as $student)
        {
            $student->dob = Controller::formatDate($student->dob);
        }
        return view('users.students.index', [
            'students' => $students
        ]);
    }

    public function show_teacher(User $user)
    {
        $user->dob = Controller::formatDate($user->dob);
        return view('users.teachers.show', [
            'user' => $user
        ]);
    }

    public function show_student(User $user)
    {
        $user->dob = Controller::formatDate($user->dob);
        return view('users.students.show', [
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
        $user->update($request->input());
        return redirect('/users/teacher');
    }

    public function update_student(Request $request, User $user)
    {
        $user->update($request->input());
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

    public function self_show()
    {
        $user = Auth::user();
        $user->dob = Controller::formatDate($user->dob);
        return view('users.self_show', [
            'user' => $user
        ]);
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
        $user->update($request->input());
        return redirect('/');
    }

    public function update_avt(Request $request, User $user)
    {   
        if($request->hasFile('avatar'))
        {
            $file = $request->file('avatar');
            $name = time().".".$file->getClientOriginalExtension();
            Image::make($file)->resize(300,300)->save( public_path("/uploads/avatars/".$name));
            $user->update([
                'avatar' => $name
            ]);
        }
        return view('users.self_edit', [
            'user' => $user
        ]);
    }
}