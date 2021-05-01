<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
   public function login(Request $request){
    
    $email =  $request->input('email');
    $password = ($request->input('password'));
    if (Auth::attempt(['email' => $email, 'password' => $password])) {
        $request->session()->regenerate();
        
        return redirect('index');
        // Chuyển về trang chủ
//            return redirect()->intended('dashboard');
    } else {
        $dataView['errs'][] = 'Sai tên đăng nhập hoặc sai password!';
        return view('welcome');
    }
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('login');
    }
}


