<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentBab2Controller extends Controller
{
    public function pengertianModulPadaNodejs()
    {
        return view('content.bab-2.pengertian-modul-pada-nodejs');
    }
    public function fungsiRequire()
    {
        return view('content.bab-2.fungsi-require');
    }
    public function coreModuls()
    {
        return view('content.bab-2.core-moduls');
    }
    public function localModuls()
    {
        return view('content.bab-2.local-moduls');
    }
}
