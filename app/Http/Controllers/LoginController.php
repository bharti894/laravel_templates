<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::attempt(['username' =>request('username'), 'password' => request('password')])) {
            // Authentication passed...
            echo "sfhg";
            return redirect()->intended('home');
        }
    }

    public function view_login()
    {
        return view('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
        
}
}

