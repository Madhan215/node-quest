<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentBab2Controller extends Controller
{
    public function pengertianModulPadaNodejs()
    {
        $prevUrl = null;
        $nextUrl = '/modul/fungsi-require';
        return view('content.bab-2.pengertian-modul-pada-nodejs',compact('prevUrl','nextUrl'));
    }
    public function fungsiRequire()
    {
        $prevUrl = '/modul/pengertian-modul-pada-nodejs';
        $nextUrl = '/modul/core-moduls';
        return view('content.bab-2.fungsi-require',compact('prevUrl','nextUrl'));
    }
    public function coreModuls()
    {
        $prevUrl = '/modul/fungsi-require';
        $nextUrl = '/modul/local-moduls';
        return view('content.bab-2.core-moduls',compact('prevUrl','nextUrl'));
    }
    public function localModuls()
    {
        $prevUrl = '/modul/core-moduls';
        $nextUrl = null;
        return view('content.bab-2.local-moduls',compact('prevUrl','nextUrl'));
    }
}
