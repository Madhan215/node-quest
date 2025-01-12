<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentBab3Controller extends Controller
{
    public function npm()
    {
        return view('content.bab-3.npm');
    }
    public function mengelolaProjekDenganNpm()
    {
        return view('content.bab-3.mengelola-projek-dengan-npm');
    }
    public function mempublikasikanPaketKeNpm()
    {
        return view('content.bab-3.mempublikasikan-paket-ke-npm');
    }
}
