@extends('layouts.main')

@section('container')
    <h1>Daftar Isi Materi</h1>
    <div class="my-3 g-3 row">
        <div class="col-lg-4">
            <div class="h-100 card">
                <div class="card-body">
                    <div class="card-title h5">
                        BAB 1
                    </div>
                    <div class="mb-2 text-muted card-subtitle h6">
                        Pengenalan Node.js
                    </div>
                    <ul>
                        <li>
                            <p class="m-0 small card-text">Javascript Runtime Node.js</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">Pemrograman Sisi Klien dan Sisi Server</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">Persiapan belajar Node.js</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">Pemrograman Sinkronus dan Asinkronus</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">Hubungan Node.js dengan Browser</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">Engine V8</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">Installasi Node.js</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">REPL (Read, Evaluate, Print, Loop)</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">Membuat Projek Node.js</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="h-100 card">
                <div class="card-body">
                    <div class="card-title h5">
                        BAB 2
                    </div>
                    <div class="mb-2 text-muted card-subtitle h6">
                        Module
                    </div>
                    <ul>
                        <li>
                            <p class="m-0 small card-text">Pengertian Modul pada Node.js</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">jenis Modul di Node.js</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">Fungsi Require()</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">Core Moduls</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">Local Moduls</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="h-100 card">
                <div class="card-body">
                    <div class="card-title h5">
                        BAB 3
                    </div>
                    <div class="mb-2 text-muted card-subtitle h6">
                        NPM (Node Package Manager)
                    </div>
                    <ul>
                        <li>
                            <p class="m-0 small card-text">NPM</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">Mengelola Projek dengan NPM</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">Mempublikasikan Paket ke NPM</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="h-100 card">
                <div class="card-body">
                    <div class="card-title h5">
                        BAB 4
                    </div>
                    <div class="mb-2 text-muted card-subtitle h6">
                        Modul Event
                    </div>
                    <ul>
                        <li>
                            <p class="m-0 small card-text">Modul Event</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">Fungsi dan Manfaat Modul Event</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">Contoh Kode Modul Event</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="h-100 card">
                <div class="card-body">
                    <div class="card-title h5">
                        BAB 5
                    </div>
                    <div class="mb-2 text-muted card-subtitle h6">
                        Modul File System
                    </div>
                    <ul>
                        <li>
                            <p class="m-0 small card-text">Module File System</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">Fungsi dan Operasi Dasar Modul FS</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">Contoh Kode Modul File System</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="h-100 card">
                <div class="card-body">
                    <div class="card-title h5">
                        BAB 6
                    </div>
                    <div class="mb-2 text-muted card-subtitle h6">
                        Modul HTTP
                    </div>
                    <ul>
                        <li>
                            <p class="m-0 small card-text">Modul HTTP</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">Fungsi Utama Modul HTTP</p>
                        </li>
                        <li>
                            <p class="m-0 small card-text">Contoh Kode Penggunaan Modul HTTP</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <p class="fw-bold mb-0">Penjelasan:</p>

    <p>
        Bab 1 sampai 3 Merupakan pengetahuan mendasar mengenai Node.js dan pada Bab 4 sampai 6 merupakan implementasi
        penerapan Modul Node.js.
    </p>
@endsection
