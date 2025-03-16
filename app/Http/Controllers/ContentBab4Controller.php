<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentBab4Controller extends Controller
{
    public function modulEvent()
    {
        $prevUrl = null;
        $nextUrl = '/modul-event/fungsi-dan-manfaat-modul-event';
        return view('content.bab-4.modul-event',compact('prevUrl','nextUrl'));
    }
    public function fungsiDanManfaatModulEvent()
    {
        $prevUrl = '/modul-event/modul-event';
        $nextUrl = '/modul-event/contoh-kode-modul-event';
        return view('content.bab-4.fungsi-dan-manfaat-modul-event',compact('prevUrl','nextUrl'));
    }
    public function contohKodeModulEvent()
    {
        $prevUrl = '/modul-event/fungsi-dan-manfaat-modul-event';
        $nextUrl = '/modul-event/kuis';
        return view('content.bab-4.contoh-kode-modul-event',compact('prevUrl','nextUrl'));
    }
    public function kuis(){
        return view('content.bab-4.kuis-4');
    }
}
