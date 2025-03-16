<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentBab3Controller extends Controller
{
    public function npm()
    {
        $prevUrl = null;
        $nextUrl = '/npm/mengelola-projek-dengan-npm';
        return view('content.bab-3.npm',compact('prevUrl','nextUrl'));
    }
    public function mengelolaProjekDenganNpm()
    {
        $prevUrl = '/npm/npm';
        $nextUrl = '/npm/mempublikasikan-paket-ke-npm';
        return view('content.bab-3.mengelola-projek-dengan-npm',compact('prevUrl','nextUrl'));
    }
    public function mempublikasikanPaketKeNpm()
    {
        $prevUrl = '/npm/mengelola-projek-dengan-npm';
        $nextUrl = '/npm/kuis';
        return view('content.bab-3.mempublikasikan-paket-ke-npm',compact('prevUrl','nextUrl'));
    }
    public function kuis(){
        return view('content.bab-3.kuis-3');
    }
}
