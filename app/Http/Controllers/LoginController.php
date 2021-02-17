<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function signIn() {
        return view('auth.signin');
    }

    public function signUp() {
        return view('auth.signup');
    }

    public function resetPassword() {
        return view('auth.forgotten-password');
    }
}
