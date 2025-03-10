<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function masuk(){
        return view('auth.masuk');
    }

    public function daftar(){
        return view('auth.daftar');
    }
}
