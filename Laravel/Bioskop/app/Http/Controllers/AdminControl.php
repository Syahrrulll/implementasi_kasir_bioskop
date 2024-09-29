<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminControl extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $request ->validate([
            'username' => 'required',
            'password' => 'required',
       ]);
       $credentials = $request->only('username','password');
       if (Auth::attempt($credentials)) {
             return redirect()->intended('/');
       }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }
}
