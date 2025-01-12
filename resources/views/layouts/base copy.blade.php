{{-- Untuk Template Materi --}}
@extends('layouts.main')

@section('container-base')

<div class="g-0 row">
    <div class="border-end border-top col-lg-3">
        <div class="bg-white sticky-top accordion">
            <h5 class="fw-semibold text-primary text-center p-3 mb-0">MENU</h5>
            <div class="list-group list-group-flush">
                <a href="#" class="border py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('dashboard') ? 'active' : '' }}">
                    <span><i class="bi bi-speedometer"></i> Dashboard</span></a>
                <a href="#" class="border py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('dashboard') ? 'active' : '' }}">
                    <span><i class="bi bi-journal-check"></i> Data Nilai</span></a>
            </div>
            <h5 class="fw-semibold text-primary text-center p-3 mb-0">DAFTAR MATERI</h5>
            <h6 class="mx-3 fw-bold">PENGENALAN</h6>
            <ul>
                <li ><a href="/pengenalan/javascript-runtime-nodejs" class="{{ Route::is('bab1-1') ? 'fw-semibold' : '' }}">Javascript Runtime Node.js</a></li>
                <li ><a href="/pengenalan/persiapan-belajar-nodejs" class="{{ Route::is('bab1-2') ? 'fw-semibold' : '' }}">Persiapan belajar Node.js</a></li>
                <li><a href="/pengenalan/pemrograman-sinkronus-dan-asinkronus" class="{{ Route::is('bab1-3') ? 'fw-semibold' : '' }}">Pemrograman Sinkronous dan Asinkronous</a></li>
                <li><a href="/pengenalan/hubungan-nodejs-dengan-browser" class="{{ Route::is('bab1-4') ? 'fw-semibold' : '' }}">Hubungan Node.js dengan Browser</a></li>
                <li><a href="/pengenalan/engine-v8" class="{{ Route::is('bab1-5') ? 'fw-semibold' : '' }}">Engine V8</a></li>
                <li><a href="/pengenalan/installasi-nodejs" class="{{ Route::is('bab1-6') ? 'fw-semibold' : '' }}">Installasi Node.js</a></li>
                <li><a href="/pengenalan/repl-read-evaluate-print-loop" class="{{ Route::is('bab1-7') ? 'fw-semibold' : '' }}">REPL (Read - Evaluate - Print - Loop)</a></li>
                <li><a href="/pengenalan/membuat-projek-nodejs" class="{{ Route::is('bab1-8') ? 'fw-semibold' : '' }}">Membuat Projek Node.js</a></li>
                <li><a href="#" class="">Kuis 1</a></li>
            </ul>
            <h6 class="mx-3 fw-bold">MODUL</h6>
            <ul>
                <li><a href="/modul/pengertian-modul-pada-nodejs" class="{{Route::is('bab2-1') ? 'fw-semibold' : '' }}">Pengertian Modul pada Node.js</a></li>
                <li><a href="/modul/fungsi-require" class="{{Route::is('bab2-2') ? 'fw-semibold' : '' }}">Fungsi Require()</a></li>
                <li><a href="/modul/core-moduls" class="{{Route::is('bab2-3') ? 'fw-semibold' : '' }}">Core Moduls</a></li>
                <li><a href="/modul/local-moduls" class="{{Route::is('bab2-4') ? 'fw-semibold' : '' }}">Local Moduls</a></li>
                <li><a href="#" class="">Kuis 2</a></li>
            </ul>
            <h6 class="mx-3 fw-bold">NPM</h6>
            <ul>
                <li><a href="/npm/npm" class="{{Route::is('bab3-1') ? 'fw-semibold' : '' }}">NPM</a></li>
                <li><a href="/npm/mengelola-projek-dengan-npm" class="{{Route::is('bab3-2') ? 'fw-semibold' : '' }}">Mengelola Projek dengan NPM</a></li>
                <li><a href="/npm/mempublikasikan-paket-ke-npm" class="{{Route::is('bab3-3') ? 'fw-semibold' : '' }}">Mempublikasiskan Paket ke NPM</a></li>
                <li><a href="#" class="">Kuis 3</a></li>
            </ul>
            <h6 class="mx-3 fw-bold">MODUL EVENT</h6>
            <ul>
                <li><a href="/modul-event/modul-event" class="{{Route::is('bab4-1') ? 'fw-semibold' : '' }}">Modul Event</a></li>
                <li><a href="/modul-event/fungsi-dan-manfaat-modul-event" class="{{Route::is('bab4-2') ? 'fw-semibold' : '' }}">Fungsi dan Manfaat Modul Event</a></li>
                <li><a href="/modul-event/contoh-kode-modul-event" class="{{Route::is('bab4-3') ? 'fw-semibold' : '' }}">Contoh Kode Modul Event</a></li>
                <li><a href="#" class="">Kuis 4</a></li>
            </ul>
            <h6 class="mx-3 fw-bold">MODUL FILE SYSTEM</h6>
            <ul>
                <li><a href="/modul-file-system/modul-file-system" class="{{Route::is('bab5-1') ? 'fw-semibold' : '' }}">Module File System</a></li>
                <li><a href="/modul-file-system/fungsi-dan-operasi-dasar-modul-file-system" class="{{Route::is('bab5-2') ? 'fw-semibold' : '' }}">Fungsi dan Operasi Dasar Modul File System</a></li>
                <li><a href="/modul-file-system/contoh-kode-modul-file-system" class="{{Route::is('bab5-3') ? 'fw-semibold' : '' }}">Contoh Kode Module File System</a></li>
                <li><a href="#" class="">Kuis 5</a></li>
            </ul>
            <h6 class="mx-3 fw-bold">MODUL HTTP</h6>
            <ul>
                <li><a href="/modul-http/modul-http" class="{{Route::is('bab6-1') ? 'fw-semibold' : '' }}">Modul HTTP</a></li>
                <li><a href="/modul-http/fungsi-utama-modul-http" class="{{Route::is('bab6-2') ? 'fw-semibold' : '' }}">Fungsi Utama Modul HTTP</a></li>
                <li><a href="/modul-http/contoh-kode-penggunaan-modul-http" class="{{Route::is('bab6-3') ? 'fw-semibold' : '' }}">Contoh kode Penggunaan Modul HTTP</a></li>
                <li><a href="#" class="">Kuis 6</a></li>
            </ul>
        </div>
    </div>
    <div class="bg-white text-dark border-top col-lg-9">
        <div class="p-3 bg-white border-bottom">
            <div class="progress">
                <div role="progressbar" class="progress-bar bg-primary progress-bar-striped" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%">22%</div>
            </div>
        </div>
        <div class="p-4 p-lg-5">
            @yield('container-base-content')
        </div>
    </div>
</div>

@endsection