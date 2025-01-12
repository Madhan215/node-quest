<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function beranda()
    {
        return view('home.beranda');
    }

    public function livenode()
    {
        return view('home.livenode');
    }

    public function materi()
    {
        return view('home.materi');
    }

    public function perihal()
    {
        return view('home.perihal');
    }
}
