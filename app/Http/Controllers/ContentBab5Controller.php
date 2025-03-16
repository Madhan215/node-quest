<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentBab5Controller extends Controller
{
    public function moduleFileSystem()
    {
        $prevUrl = null;
        $nextUrl = '/modul-file-system/fungsi-dan-operasi-dasar-modul-file-system';
        return view('content.bab-5.modul-file-system',compact('prevUrl','nextUrl'));
    }
    public function fungsiDanOperasiDasarModulFileSystem()
    {
        $prevUrl = '/modul-file-system/modul-file-system';
        $nextUrl = '/modul-file-system/contoh-kode-modul-file-system';
        return view('content.bab-5.fungsi-dan-operasi-dasar-modul-file-system',compact('prevUrl','nextUrl'));
    }
    public function contohKodeModuleFileSystem()
    {
        $prevUrl = '/modul-file-system/fungsi-dan-operasi-dasar-modul-file-system';
        $nextUrl = '/modul-file-system/kuis';
        return view('content.bab-5.contoh-kode-modul-file-system',compact('prevUrl','nextUrl'));
    }
    public function kuis(){
        return view('content.bab-5.kuis-5');
    }
}
