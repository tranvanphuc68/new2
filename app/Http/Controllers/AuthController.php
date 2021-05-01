<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(AuthRequest $request)
    {
        $email =  $request->input('email');
        $password = ($request->input('password'));
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $request->session()->regenerate();
            return redirect('/users');
        }
        else 
            return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}
