@extends('layouts.base')

@section('container-base-content')

<h2>Modul File System</h2>
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
                        Memahami fungsi dasar modul File System pada Node.js untuk mengakses dan mengelola file.
                    </div>
                </li>
                <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                    <div class="d-flex align-items-start">
                        <span class="h5 me-2 mb-0 p-0">•</span>
                        Mengimplementasi operasi file seperti membaca, menulis, menghapus, dan mengubah dalam aplikasi Node.js.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<h2>5.1 Module File System</h2>
<p class="lh-lg">
    Module File System merupakan modul bawaan dari Node.js yang memungkinkan program untuk berinteraksi dengan sistem file pada server. Modul ini berguna untuk melakukan berbagai operasi input maupun output pada file dan direktori, seperti membaca, menulis, menghapus, dan mengubah file. Dengan menggunakan modul ini, aplikasi Node.js dapat mengakses dan mengelola data yang berada di dalam disk dengan cara yang efisien. 
</p>
<div class="p-0 p-md-3 my-4 my-md-2">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 5.1</div>
        </div>
        <div class="card-body">
            <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis berikut ini dengan baik dan benar!</p>
            <p class="fw-semibold bg-primary text-white p-2 rounded card-text">Pertanyaan 1 dari <span id="noSoal">1</span></p>
        </div>
    </div>
</div>
@endsection