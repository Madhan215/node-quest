<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentBab5Controller extends Controller
{
    public function moduleFileSystem()
    {
        return view('content.bab-5.modul-file-system');
    }
    public function fungsiDanOperasiDasarModulFileSystem()
    {
        return view('content.bab-5.fungsi-dan-operasi-dasar-modul-file-system');
    }
    public function contohKodeModuleFileSystem()
    {
        return view('content.bab-5.contoh-kode-modul-file-system');
    }
}
