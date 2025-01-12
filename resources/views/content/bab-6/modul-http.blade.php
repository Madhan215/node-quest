@extends('layouts.base')

@section('container-base-content')

<h1>Modul HTTP</h1>
<div class="p-0 p-md-3 my-4 my-md-2">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">
                <i class="bi bi-book"></i> Tujuan Pembelajaran
            </div>
        </div>
        <div class="card-body">
            <p class="m-0 card-text">
                Setelah menyelesaikan materi pada bab ini, mahasiswa diharapkan mampu
            </p>
            <ul class="list-group list-group-flush">
                <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                    <div class="d-flex align-items-start">
                        <span class="h5 me-2 mb-0 p-0">•</span>
                        Memahami konsep dasar dalam menggunakan modul HTTP
                    </div>
                </li>
                <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                    <div class="d-flex align-items-start">
                        <span class="h5 me-2 mb-0 p-0">•</span>
                        Membuat Server HTTP Sederhana
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<h2>6.1 Modul HTTP</h2>
<p class="lh-lg">
    Modul HTTP (Hypertext Transfer Protocol) merupakan modul bawaan yang ada pada Node.js yang memungkinkan pengembangan untuk membuat web server dan mengelola permintaan respons HTTP. Modul HTTP merupakan fondasi yang digunakan dalam komunikasi antara klien dan server seperti mengirimkan dan menerima data.
</p>
<img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/bab6-1/no-49.png') }}" alt="">
<p class="lh-lg">
    Dengan adanya modul HTTP, memungkinkan pengguna untuk:
</p>
<ul class="list-group list-group-flush">
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                Mengembangkan aplikasi web dan API secara cepat dan efisien.
            </div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                Menyediakan respons yang cepat untuk permintaan klien.
            </div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                Dapat mengelola banyak koneksi secara bersamaan tanpa menghadapi masalah performa.
            </div>
        </div>
    </li>
</ul>
<div class="p-0 p-md-3 my-4 my-md-2">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 6.1</div>
        </div>
        <div class="card-body">
            <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis berikut ini dengan baik dan benar!</p>
            <p class="fw-semibold bg-primary text-white p-2 rounded card-text">Pertanyaan 1 dari <span id="noSoal">1</span></p>
        </div>
    </div>
</div>
@endsection