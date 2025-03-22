{{-- Untuk Template Materi --}}
@extends('layouts.main')

@section('container-base')

@php
    use App\Models\Progress;

    $userId = auth()->id();
    $completedStep = Progress::where('user_id', $userId)
        ->where('completed', true)
        ->max('step_id'); // Step terakhir yang selesai

    // dd($completedStep);
@endphp

    <div class="g-0 row">
        <div class="border-end border-top col-lg-3">
            <div class="bg-white sticky-top accordion">
                <h5 class="fw-semibold text-primary text-center p-3 mb-0">MENU</h5>
                @if(auth()->user()->role == 'dosen')
                <div class="border list-group list-group-flush">
                    <a href="/dosen/dashboard"
                        class="py-3 d-flex align-items-center justify-content-between bg-primary-light text-primary-dark false list-group-item {{ Route::is('dosen.dashboard') ? 'active' : '' }}">
                        <span><i class="bi bi-speedometer"></i> Dashboard Dosen</span></a>
                    <a href="/dosen/data-mahasiswa"
                        class="py-3 d-flex align-items-center justify-content-between bg-primary-light text-primary-dark false list-group-item {{ Route::is('dosen.data-mahasiswa') ? 'active' : '' }}">
                        <span><i class="bi bi-journal-check"></i> Data Mahasiswa</span></a>
                </div>
                @elseif(auth()->user()->role == 'mahasiswa')
                <div class="border list-group list-group-flush">
                    <a href="/mahasiswa/dashboard"
                        class="py-3 d-flex align-items-center justify-content-between bg-primary-light text-primary-dark false list-group-item {{ Route::is('mahasiswa.dashboard') ? 'active' : '' }}">
                        <span><i class="bi bi-speedometer"></i> Dashboard</span></a>
                    <a href="/mahasiswa/leaderboard"
                        class="py-3 d-flex align-items-center justify-content-between bg-primary-light text-primary-dark false list-group-item {{ Route::is('mahasiswa.leaderboard') ? 'active' : '' }}">
                        <span><i class="bi bi-list-ol"></i> Leaderboard</span></a>
                    {{-- <a href="#"
                        class="py-3 d-flex align-items-center justify-content-between bg-primary-light text-primary-dark false list-group-item {{ Route::is('dashboard') ? 'active' : '' }}">
                        <span><i class="bi bi-journal-check"></i> Data Nilai</span></a> --}}
                </div>

                <h5 class="fw-semibold text-primary text-center p-3 mb-0">DAFTAR MATERI</h5>
                <div class="accordion vh-100 overflow-auto" id="sidebarAccordion">
                    <div class="accordion-item" id="menuHeading1">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button text-primary {{ Route::is('bab1-*') ? '' : 'collapsed' }} text-dark"
                                type="button" data-bs-toggle="collapse" data-bs-target="#menuCollapse1"
                                aria-expanded="true" aria-controls="menuCollapse1">
                                <i class="bi bi-1-square"></i>
                                &nbsp;
                                PENGENALAN
                            </button>
                        </h2>
                        <div id="menuCollapse1" class="accordion-collapse collapse  {{ Route::is('bab1-*') ? 'show' : '' }}"
                            aria-labelledby="menuHeading1" data-bs-parent="#sidebarAccordion">
                            <div class="list-group list-group-flush">
                                <a href="/pengenalan/javascript-runtime-nodejs"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab1-1') ? 'active' : '' }} {{ $completedStep >= 1 ? '' : 'disabled text-muted' }}">
                                    <span>
                                        @if ($completedStep >= 1)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                        Javascript Runtime Node.js
                                    </span></a>
                                <a href="/pengenalan/pemrograman-sisi-klien-dan-sisi-server"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab1-2') ? 'active' : '' }} {{ $completedStep >= 2 ? '' : 'disabled text-muted' }}">
                                    <span>
                                        @if ($completedStep >= 2)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Pemrograman Sisi Klien dan Sisi Server</span></a>
                                <a href="/pengenalan/persiapan-belajar-nodejs"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab1-3') ? 'active' : '' }} {{ $completedStep >= 3 ? '' : 'disabled text-muted' }}">
                                    <span>
                                        @if ($completedStep >= 3)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                        Persiapan belajar Node.js</span></a>
                                <a href="/pengenalan/pemrograman-sinkronus-dan-asinkronus"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab1-4') ? 'active' : '' }} {{ $completedStep >= 4 ? '' : 'disabled text-muted' }}">
                                    <span>
                                        @if ($completedStep >= 4)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                        Pemrograman Sinkronous dan Asinkronous</span></a>
                                <a href="/pengenalan/hubungan-nodejs-dengan-browser"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab1-5') ? 'active' : '' }} {{ $completedStep >= 5 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 5)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif Hubungan Node.js dengan Browser</span></a>
                                <a href="/pengenalan/engine-v8"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab1-6') ? 'active' : '' }} {{ $completedStep >= 6 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 6)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Engine V8</span></a>
                                <a href="/pengenalan/installasi-nodejs"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab1-7') ? 'active' : '' }} {{ $completedStep >= 7 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 7)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Installasi Node.js</span></a>
                                <a href="/pengenalan/repl-read-evaluate-print-loop"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab1-8') ? 'active' : '' }} {{ $completedStep >= 8 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 8)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         REPL (Read - Evaluate - Print - Loop)</span></a>
                                <a href="/pengenalan/membuat-projek-nodejs"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab1-9') ? 'active' : '' }} {{ $completedStep >= 9 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 9)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Membuat Projek Node.js</span></a>
                                <a href="/pengenalan/kuis"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('kuis-1') ? 'active' : '' }} {{ $completedStep >= 10 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 10)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Kuis 1</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="menuHeading2">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button text-primary {{ Route::is('bab2-*') ? '' : 'collapsed' }} text-dark"
                                type="button" data-bs-toggle="collapse" data-bs-target="#menuCollapse2"
                                aria-expanded="true" aria-controls="menuCollapse2">
                                <i class="bi bi-2-square"></i>
                                &nbsp;
                                MODUL
                            </button>
                        </h2>
                        <div id="menuCollapse2" class="accordion-collapse collapse  {{ Route::is('bab2-*') ? 'show' : '' }}"
                            aria-labelledby="menuHeading2" data-bs-parent="#sidebarAccordion">
                            <div class="list-group list-group-flush">
                                <a href="/modul/pengertian-modul-pada-nodejs"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab2-1') ? 'active' : '' }} {{ $completedStep >= 11 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 11)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Pengertian Modul pada Node.js</span></a>
                                <a href="/modul/fungsi-require"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab2-2') ? 'active' : '' }} {{ $completedStep >= 12 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 12)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Fungsi Require()</span></a>
                                <a href="/modul/core-moduls"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab2-3') ? 'active' : '' }} {{ $completedStep >= 13 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 13)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Core Moduls</span></a>
                                <a href="/modul/local-moduls"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab2-4') ? 'active' : '' }} {{ $completedStep >= 14 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 14)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Local Moduls</span></a>
                                <a href="/modul/kuis"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('kuis-2') ? 'active' : '' }} {{ $completedStep >= 15 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 15)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Kuis 2</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="menuHeading3">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button text-primary {{ Route::is('bab3-*') ? '' : 'collapsed' }} text-dark"
                                type="button" data-bs-toggle="collapse" data-bs-target="#menuCollapse3"
                                aria-expanded="true" aria-controls="menuCollapse3">
                                <i class="bi bi-3-square"></i>
                                &nbsp;
                                NPM
                            </button>
                        </h2>
                        <div id="menuCollapse3" class="accordion-collapse collapse  {{ Route::is('bab3-*') ? 'show' : '' }}"
                            aria-labelledby="menuHeading3" data-bs-parent="#sidebarAccordion">
                            <div class="list-group list-group-flush">
                                <a href="/npm/npm"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab3-1') ? 'active' : '' }} {{ $completedStep >= 16 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 16)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         NPM</span></a>
                                <a href="/npm/mengelola-projek-dengan-npm"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab3-2') ? 'active' : '' }} {{ $completedStep >= 17 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 17)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Mengelola Projek dengan NPM</span></a>
                                <a href="/npm/mempublikasikan-paket-ke-npm"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab3-3') ? 'active' : '' }} {{ $completedStep >= 18 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 18)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Mempublikasiskan Paket ke NPM</span></a>
                                <a href="/npm/kuis"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('kuis-3') ? 'active' : '' }} {{ $completedStep >= 19 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 19)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Kuis 3</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="menuHeading4">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button text-primary {{ Route::is('bab4-*') ? '' : 'collapsed' }} text-dark"
                                type="button" data-bs-toggle="collapse" data-bs-target="#menuCollapse4"
                                aria-expanded="true" aria-controls="menuCollapse4">
                                <i class="bi bi-4-square"></i>
                                &nbsp;
                                MODUL EVENT
                            </button>
                        </h2>
                        <div id="menuCollapse4" class="accordion-collapse collapse  {{ Route::is('bab4-*') ? 'show' : '' }}"
                            aria-labelledby="menuHeading4" data-bs-parent="#sidebarAccordion">
                            <div class="list-group list-group-flush">
                                <a href="/modul-event/modul-event"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab4-1') ? 'active' : '' }} {{ $completedStep >= 20 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 20)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Modul Event</span></a>
                                <a href="/modul-event/fungsi-dan-manfaat-modul-event"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab4-2') ? 'active' : '' }} {{ $completedStep >= 21 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 21)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Fungsi dan Manfaat Modul Event</span></a>
                                <a href="/modul-event/contoh-kode-modul-event"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab4-3') ? 'active' : '' }} {{ $completedStep >= 22 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 22)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Contoh Kode Modul Event</span></a>
                                <a href="/modul-event/kuis"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('kuis-4') ? 'active' : '' }} {{ $completedStep >= 23 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 23)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Kuis 4</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="menuHeading5">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button text-primary {{ Route::is('bab5-*') ? '' : 'collapsed' }} text-dark"
                                type="button" data-bs-toggle="collapse" data-bs-target="#menuCollapse5"
                                aria-expanded="true" aria-controls="menuCollapse5">
                                <i class="bi bi-5-square"></i>
                                &nbsp;
                                MODUL FILE SYSTEM
                            </button>
                        </h2>
                        <div id="menuCollapse5" class="accordion-collapse collapse  {{ Route::is('bab5-*') ? 'show' : '' }}"
                            aria-labelledby="menuHeading5" data-bs-parent="#sidebarAccordion">
                            <div class="list-group list-group-flush">
                                <a href="/modul-file-system/modul-file-system"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab5-1') ? 'active' : '' }} {{ $completedStep >= 24 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 24)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Module File System</span></a>
                                <a href="/modul-file-system/fungsi-dan-operasi-dasar-modul-file-system"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab5-2') ? 'active' : '' }} {{ $completedStep >= 25 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 25)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Fungsi dan Operasi Dasar Modul File System</span></a>
                                <a href="/modul-file-system/contoh-kode-modul-file-system"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab5-3') ? 'active' : '' }} {{ $completedStep >= 26 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 26)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Contoh Kode Module File System</span></a>
                                <a href="/modul-file-system/kuis"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('kuis-5') ? 'active' : '' }} {{ $completedStep >= 27 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 27)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Kuis 5</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" id="menuHeading6">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button text-primary {{ Route::is('bab6-*') ? '' : 'collapsed' }} text-dark"
                                type="button" data-bs-toggle="collapse" data-bs-target="#menuCollapse6"
                                aria-expanded="true" aria-controls="menuCollapse6">
                                <i class="bi bi-6-square"></i>
                                &nbsp;
                                MODUL HTTP
                            </button>
                        </h2>
                        <div id="menuCollapse6" class="accordion-collapse collapse  {{ Route::is('bab6-*') ? 'show' : '' }}"
                            aria-labelledby="menuHeading6" data-bs-parent="#sidebarAccordion">
                            <div class="list-group list-group-flush">
                                <a href="/modul-http/modul-http"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab6-1') ? 'active' : '' }} {{ $completedStep >= 28 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 28)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Modul HTTP</span></a>
                                <a href="/modul-http/fungsi-utama-modul-http"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab6-2') ? 'active' : '' }} {{ $completedStep >= 29 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 29)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Fungsi Utama Modul HTTP</span></a>
                                <a href="/modul-http/contoh-kode-penggunaan-modul-http"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab6-3') ? 'active' : '' }} {{ $completedStep >= 30 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 30)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Contoh kode Penggunaan Modul HTTP</span></a>
                                <a href="/modul-http/kuis"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('kuis-6') ? 'active' : '' }} {{ $completedStep >= 31 ? '' : 'disabled text-muted' }}">
                                    <span>@if ($completedStep >= 31)
                                        <i class="bi bi-dot"></i> 
                                        @else
                                        <i class="bi bi-lock-fill"></i>
                                        @endif
                                         Kuis 6</span></a>
                            </div>
                        </div>
                    </div>
                    <h5 class="fw-semibold text-primary text-center p-3 mb-0">EVALUASI</h5>
                    <div class="border list-group list-group-flush">
                        <a href="/evaluasi"
                            class="py-3 d-flex align-items-center justify-content-between bg-primary-light text-primary-dark false list-group-item {{ Route::is('dashboard') ? 'active' : '' }} {{ $completedStep >= 32 ? '' : 'disabled text-muted' }}">
                            <span>@if ($completedStep >= 32)
                                <i class="bi bi-dot"></i> 
                                @else
                                <i class="bi bi-lock-fill"></i>
                                @endif
                                 EVALUASI</span></a>
                    </div>
                </div>
                @endif
            </div>

        </div>
        <div class="bg-white text-dark border-top col-lg-9">
            @if (!request()->is('dosen/*') && !request()->is('mahasiswa/*'))
            {{-- <div class="p-3 bg-white border-bottom">
                <div class="progress">
                    <div role="progressbar" class="progress-bar bg-primary progress-bar-striped" aria-valuenow="22"
                        aria-valuemin="0" aria-valuemax="100" style="width: 22%">22%</div>
                </div>
            </div> --}}
            @endif
            <div class="p-4 p-lg-5">
                @yield('container-base-content')
                @if (!request()->is('dosen/*') && !request()->is('mahasiswa/*'))
                <div class="w-100 py-5 d-flex align-items-center justify-content-between bottom-0  ">
                    {{-- Tombol Sebelumnya --}}
                    @if ($prevUrl)
                        <a href="{{ $prevUrl }}"
                            class="d-flex align-items-center py-2 px-3 text-white btn btn-danger" id="prevButton">
                            <i class="bi bi-chevron-double-left"></i> Sebelumnya
                        </a>
                    @else
                        <span class="d-flex align-items-center py-2 px-3 text-white btn btn-danger disabled">
                            <i class="bi bi-chevron-double-left"></i> Sebelumnya
                        </span>
                    @endif

                    {{-- Tombol Selanjutnya --}}
                    @if ($nextUrl)
                        <a href="{{ $nextUrl }}"
                            class="d-flex align-items-center py-2 px-3 text-white btn btn-success {{ $isCompleted ?? true ? '' : 'disabled' }}" id="nextButton">
                            Selanjutnya <i class="bi bi-chevron-double-right"></i>
                        </a>
                    @else
                        <span class="d-flex align-items-center py-2 px-3 text-white btn btn-success disabled">
                            Selanjutnya <i class="bi bi-chevron-double-right"></i>
                        </span>
                    @endif
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
