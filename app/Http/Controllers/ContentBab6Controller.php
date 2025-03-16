<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentBab6Controller extends Controller
{
    public function modulHttp()
    {
        $prevUrl = null;
        $nextUrl = '/modul-http/fungsi-utama-modul-http';
        return view('content.bab-6.modul-http',compact('prevUrl','nextUrl'));
    }
    public function fungsiUtamaModulHttp()
    {
        $prevUrl = '/modul-http/modul-http';
        $nextUrl = '/modul-http/contoh-kode-penggunaan-modul-http';
        return view('content.bab-6.fungsi-utama-modul-http',compact('prevUrl','nextUrl'));
    }
    public function contohKodePenggunaanModulHttp()
    {
        $prevUrl = '/modul-http/fungsi-utama-modul-http';
        $nextUrl = '/modul-http/kuis';
        return view('content.bab-6.contoh-kode-penggunaan-modul-http',compact('prevUrl','nextUrl'));
    }
    public function kuis(){
        return view('content.bab-6.kuis-6');
    }
}
