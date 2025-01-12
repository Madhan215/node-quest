<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentBab1Controller extends Controller
{
    public function javascriptRuntimeNodejs()
    {
        return view('content.bab-1.javascript-runtime-nodejs');
    }
    public function persiapanBelajarNodejs()
    {
        return view('content.bab-1.persiapan-belajar-nodejs');
    }
    public function pemrogramanSinkronusDanAsinkronus()
    {
        return view('content.bab-1.pemrograman-sinkronus-dan-asinkronus');
    }
    public function hubunganNodejsDenganBrowser()
    {
        return view('content.bab-1.hubungan-nodejs-dengan-browser');
    }
    public function engineV8()
    {
        return view('content.bab-1.engine-v8');
    }
    public function installasiNodejs()
    {
        return view('content.bab-1.installasi-nodejs');
    }
    public function replReadEvaluatePrintLoop()
    {
        return view('content.bab-1.repl-read-evaluate-print-loop');
    }
    public function membuatProjekNodejs()
    {
        return view('content.bab-1.membuat-projek-nodejs');
    }
}
