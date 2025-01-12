<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentBab6Controller extends Controller
{
    public function modulHttp()
    {
        return view('content.bab-6.modul-http');
    }
    public function fungsiUtamaModulHttp()
    {
        return view('content.bab-6.fungsi-utama-modul-http');
    }
    public function contohKodePenggunaanModulHttp()
    {
        return view('content.bab-6.contoh-kode-penggunaan-modul-http');
    }
}
