@extends('layouts.base')

@section('container-base-content')

<h1>Modul Event</h1>
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
                        Memahami konsep dasar event di Node.js
                    </div>
                </li>
                <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                    <div class="d-flex align-items-start">
                        <span class="h5 me-2 mb-0 p-0">•</span>
                        Menerapkan EventEmitter dalam Program Node.js
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<h2>4.1 Modul Event</h2>
<p class="lh-lg">
    Node.js menyediakan berbagai fungsi untuk mengelola event dalam aplikasi. Dengan menggunakan EventEmitter yang merupakan objek inti untuk membuat, mendengarkan, dan memicu event. Modul ini sangat penting bagi Node.js karena dapat digunakan untuk menangani event asinkron secara efisien.
</p>
<h3>4.1.1 Konsep dasar EventEmitter</h3>
<p class="lh-lg">
    EventEmitter merupakan kalas dalam Node.js yang menyediakan mekanisme untuk membuat, mengelola, dan menangani event. EventEmitter menjadi inti dalam modul event sebagai fitur penting dalam pemrograman berbasis event dalam lingkungan Node.js. EventEmitter memungkinkan objek yang ada dalam aplikasi untuk memicu (emit) event tertentu dan mendengarkan (listen) event tersebut. Berikut penjelasannya:
</p>
<ul class="list-group list-group-flush">
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1">Event</p>
                Merupakan suatu kejadian yang ada dalam aplikasi. Misalnya, tombol yang di klik, menerima permintaan dari server, atau menyelesaikan suatu operasi.
            </div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1">Emit</p>
                Merupakan fungsi yang memicu event. Ketika suatu event dipicu, semua listener yang terdaftar untuk event tersebut juga akan dipanggil.
            </div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1">Listener</p>
                Fungsi yang dipanggil ketika event terjadi. Listener akan menunggu event tersebut dipicu dan menjalankan fungsinya saat event terjadi. Pengembang dapat menambahkan satu atau lebih untuk merespon event.
            </div>
        </div>
    </li>
</ul>
<div class="p-0 p-md-3 my-4 my-md-2">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 4.1</div>
        </div>
        <div class="card-body">
            <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis berikut ini dengan baik dan benar!</p>
            <p class="fw-semibold bg-primary text-white p-2 rounded card-text">Pertanyaan 1 dari <span id="noSoal">1</span></p>
        </div>
    </div>
</div>
@endsection