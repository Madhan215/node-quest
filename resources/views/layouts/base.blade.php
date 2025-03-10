{{-- Untuk Template Materi --}}
@extends('layouts.main')

@section('container-base')
    <div class="g-0 row">
        <div class="border-end border-top col-lg-3">
            <div class="bg-white sticky-top accordion">
                <h5 class="fw-semibold text-primary text-center p-3 mb-0">MENU</h5>
                <div class="border list-group list-group-flush">
                    <a href="#"
                        class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('dashboard') ? 'active' : '' }}">
                        <span><i class="bi bi-speedometer"></i> Dashboard</span></a>
                    <a href="#"
                        class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('dashboard') ? 'active' : '' }}">
                        <span><i class="bi bi-journal-check"></i> Data Nilai</span></a>
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
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab1-1') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Javascript Runtime Node.js</span></a>
                                <a href="/pengenalan/pemrograman-sisi-klien-dan-sisi-server"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab1-2') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Pemrograman Sisi Klien dan Sisi Server</span></a>
                                <a href="/pengenalan/persiapan-belajar-nodejs"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab1-3') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Persiapan belajar Node.js</span></a>
                                <a href="/pengenalan/pemrograman-sinkronus-dan-asinkronus"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab1-4') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Pemrograman Sinkronous dan Asinkronous</span></a>
                                <a href="/pengenalan/hubungan-nodejs-dengan-browser"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab1-5') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Hubungan Node.js dengan Browser</span></a>
                                <a href="/pengenalan/engine-v8"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab1-6') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Engine V8</span></a>
                                <a href="/pengenalan/installasi-nodejs"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab1-7') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Installasi Node.js</span></a>
                                <a href="/pengenalan/repl-read-evaluate-print-loop"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab1-8') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> REPL (Read - Evaluate - Print - Loop)</span></a>
                                <a href="/pengenalan/membuat-projek-nodejs"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab1-9') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Membuat Projek Node.js</span></a>
                                <a href="/pengenalan/kuis"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('kuis-1') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Kuis 1</span></a>
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
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab2-1') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Pengertian Modul pada Node.js</span></a>
                                <a href="/modul/fungsi-require"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab2-2') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Fungsi Require()</span></a>
                                <a href="/modul/core-moduls"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab2-3') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Core Moduls</span></a>
                                <a href="/modul/local-moduls"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab2-4') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Local Moduls</span></a>
                                <a href="#"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab2-5') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Kuis 2</span></a>
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
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab3-1') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> NPM</span></a>
                                <a href="/npm/mengelola-projek-dengan-npm"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab3-2') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Mengelola Projek dengan NPM</span></a>
                                <a href="/npm/mempublikasikan-paket-ke-npm"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab3-3') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Mempublikasiskan Paket ke NPM</span></a>
                                <a href="#"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab3-4') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Kuis 3</span></a>
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
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab4-1') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Modul Event</span></a>
                                <a href="/modul-event/fungsi-dan-manfaat-modul-event"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab4-2') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Fungsi dan Manfaat Modul Event</span></a>
                                <a href="/modul-event/contoh-kode-modul-event"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab4-3') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Contoh Kode Modul Event</span></a>
                                <a href="#"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab4-4') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Kuis 4</span></a>
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
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab5-1') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Module File System</span></a>
                                <a href="/modul-file-system/fungsi-dan-operasi-dasar-modul-file-system"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab5-2') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Fungsi dan Operasi Dasar Modul File System</span></a>
                                <a href="/modul-file-system/contoh-kode-modul-file-system"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab5-3') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Contoh Kode Module File System</span></a>
                                <a href="#"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab5-4') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Kuis 5</span></a>
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
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab6-1') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Modul HTTP</span></a>
                                <a href="/modul-http/fungsi-utama-modul-http"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab6-2') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Fungsi Utama Modul HTTP</span></a>
                                <a href="/modul-http/contoh-kode-penggunaan-modul-http"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab6-3') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Contoh kode Penggunaan Modul HTTP</span></a>
                                <a href="#"
                                    class="py-3 d-flex align-items-center justify-content-between small bg-primary-light text-primary-dark false list-group-item {{ Route::is('bab6-4') ? 'active' : '' }}">
                                    <span><i class="bi bi-dot"></i> Kuis 6</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="bg-white text-dark border-top col-lg-9">
            <div class="p-3 bg-white border-bottom">
                <div class="progress">
                    <div role="progressbar" class="progress-bar bg-primary progress-bar-striped" aria-valuenow="22"
                        aria-valuemin="0" aria-valuemax="100" style="width: 22%">22%</div>
                </div>
            </div>
            <div class="p-4 p-lg-5">
                @yield('container-base-content')
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
                            class="d-flex align-items-center py-2 px-3 text-white btn btn-success" id="nextButton">
                            Selanjutnya <i class="bi bi-chevron-double-right"></i>
                        </a>
                    @else
                        <span class="d-flex align-items-center py-2 px-3 text-white btn btn-success disabled">
                            Selanjutnya <i class="bi bi-chevron-double-right"></i>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
