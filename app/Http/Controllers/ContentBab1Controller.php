<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentBab1Controller extends Controller
{
    public function javascriptRuntimeNodejs()
    {
        $prevUrl = null;
        $nextUrl = '/pengenalan/persiapan-belajar-nodejs';
        return view('content.bab-1.javascript-runtime-nodejs',compact('prevUrl','nextUrl'));
    }
    public function persiapanBelajarNodejs()
    {
        $prevUrl = '/pengenalan/javascript-runtime-nodejs';
        $nextUrl = '/pengenalan/pemrograman-sisi-klien-dan-sisi-server';
        return view('content.bab-1.persiapan-belajar-nodejs',compact('prevUrl','nextUrl'));
    }
    public function pemrogramanSisiKlienDanSisiServer()
    {
        $prevUrl = '/pengenalan/persiapan-belajar-nodejs';
        $nextUrl = '/pengenalan/pemrograman-sinkronus-dan-asinkronus';
        return view('content.bab-1.pemrograman-sisi-klien-dan-sisi-server',compact('prevUrl','nextUrl'));
    }
    public function pemrogramanSinkronusDanAsinkronus()
    {
        $prevUrl = '/pengenalan/pemrograman-sisi-klien-dan-sisi-server';
        $nextUrl = '/pengenalan/hubungan-nodejs-dengan-browser';
        return view('content.bab-1.pemrograman-sinkronus-dan-asinkronus',compact('prevUrl','nextUrl'));
    }
    public function hubunganNodejsDenganBrowser()
    {
        $prevUrl = '/pengenalan/pemrograman-sinkronus-dan-asinkronus';
        $nextUrl = '/pengenalan/engine-v8';
        return view('content.bab-1.hubungan-nodejs-dengan-browser',compact('prevUrl','nextUrl'));
    }
    public function engineV8()
    {
        $prevUrl = '/pengenalan/hubungan-nodejs-dengan-browser';
        $nextUrl = '/pengenalan/installasi-nodejs';
        return view('content.bab-1.engine-v8',compact('prevUrl','nextUrl'));
    }
    public function installasiNodejs()
    {
        $prevUrl = '/pengenalan/engine-v8';
        $nextUrl = '/pengenalan/repl-read-evaluate-print-loop';
        return view('content.bab-1.installasi-nodejs',compact('prevUrl','nextUrl'));
    }
    public function replReadEvaluatePrintLoop()
    {
        $prevUrl = '/pengenalan/installasi-nodejs';
        $nextUrl = '/pengenalan/membuat-projek-nodejs';
        return view('content.bab-1.repl-read-evaluate-print-loop',compact('prevUrl','nextUrl'));
    }
    public function membuatProjekNodejs()
    {
        $prevUrl = '/pengenalan/repl-read-evaluate-print-loop';
        $nextUrl = null;
        return view('content.bab-1.membuat-projek-nodejs',compact('prevUrl','nextUrl'));
    }
    public function kuis(){
        return view('content.bab-1.kuis-1');
    }
}