<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() {
        return view("login");
    }

    public function loginproses(Request $request){
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('admin/home');
        }
        
        return redirect('login')->with('error', 'Login Gagal');
        
    }

    public function logout(){
    
        Auth::logout();
        return redirect('login');
            
        
        
    }
}
