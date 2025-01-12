<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentBab4Controller extends Controller
{
    public function modulEvent()
    {
        return view('content.bab-4.modul-event');
    }
    public function fungsiDanManfaatModulEvent()
    {
        return view('content.bab-4.fungsi-dan-manfaat-modul-event');
    }
    public function contohKodeModulEvent()
    {
        return view('content.bab-4.contoh-kode-modul-event');
    }
}
