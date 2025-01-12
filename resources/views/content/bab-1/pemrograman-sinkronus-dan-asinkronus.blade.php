@extends('layouts.base')

@section('container-base-content')

<h2 class="mb-2">1.3 Pemrograman Sinkronus dan Asinkronus</h2>
<p class="lh-lg">
    Dalam pemrograman, model eksekusi dalam kode dibagi menjadi dua jenis yang disebut syncronous (sinkronus) dan asyncronous (asinkronus). Dua mode eksekusi pemrograman tersebut menentukan bagaimana program dalam menangani tugas-tugas yang memakan waktu, seperti operasi I/O (input/output), pengambilan data, atau operasi lainnya. 
</p>
<p class="text-primary fw-semibold">
    Pemrograman Sinkronus
</p>
<p class="lh-lg">
    Pemrograman sinkronus adalah model dimana setiap baris kode dieksekusi satu persatu secara berurutan, umumnya dari atas lalu ke bawah. Model ini menunggu proses pada kode sebelum atau diatasnya untuk melanjutkan ke instruksi berikutnya. Sinkronus memiliki karakterisrik blocking yang berarti setiap operasi sebelumnya harus selesai sebelum program dapat melanjutkan ke operasi berikutnya. Jika suatu operasi membutuhkan waktu yang lama, maka seluruh program akan berhenti sampai operasi tersebut selesai.
</p>
<p class="text-primary fw-semibold">
    Pemrograman Asinkronus
</p>
<p class="lh-lg">
    Pemrograman Asinkronus adalah suatu model pemrograman yang memungkinkan suatu program untuk melakukan banyak tugas secara bersamaan tanpa harus menunggu proses lainnya selesai. Konsep berikut juga menjadi pendukung dalam mempelajari Node.js, yang merupakan salah satu bagian mendasar dari Node.js, diantaranya:
</p>
<ul class="list-group list-group-flush">
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1">Pemrograman Asinkron dan Callbacks</p>
                Metode pemrograman ini memungkinkan suatu kode untuk mengeksekusi operasi yang memerlukan waktu tanpa menghentikan atau menghambat proses lainnya. Yang berarti setiap kode dapat terus berjalan tanpa menunggu proses lainnya untuk selesai. Callbacks merupakan fungsi yang diteruskan sebagai argumen ke fungsi lain yang dipanggil setelah operasi asinkron selesai.
            </div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1">Timers</p>
                Timers merupakan fungsi dari Javascript yang memungkinkan pengguna untuk mengatur waktu pada kode seperti menjalankan setelah watku tertentu menggunakan fungsi setTimeout, dan menjalankan berulang pada interval tertentu menggunakan setInterval
            </div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1">Promises</p>
                Promises digunakan untuk menangani hasil dari proses asinkron yang memiliki kemungkinan berhasil atau gagal. Menggunakan fungsi then dan catch yang akan menangani hasil atau kegagalan.
            </div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1">Async and Await</p>
                Merupakan cara yang lebih sederhana dalam menangani promise. Fungsi async secara otomatis akan mengembalikan promise dan fungsi await digunakan untuk menunggu Promise selesai.
            </div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1">Closures</p>
                Merupakan sebuah fungsi yang dapat mengingat variabel dari lingkup tempatnya didefinisikan, meskipun fungsi tersebut didefinisikan diluar lingkup tersebut.
            </div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1">Event Loop</p>
                Event Loop merupakan mekanisme yang memungkinkan Javascript untuk menangani operasi asinkron secara efisien. Dengan tetap bisa menangani operasi yang membatuhkan waktu lama tanpa memblokir eksekusi dari kode lainnya.
            </div>
        </div>
    </li>
</ul>
<p class="text-primary fw-semibold mt-2">
    Perbandingan Pemrograman Sinkoronus dan Asinkronus
</p>
<table class="table table-striped">
    <thead class="fw-semibold">
        <td>Karakteristik</td>
        <td>Sinkronus</td>
        <td>Asinkronus</td>
    </thead>
    <tr>
        <td><p class="fw-semibold">Eksekusi</p></td>
        <td><p>Blocking, menunggu proses sebelumnya selesai</p></td>
        <td><p>Non-blocking, melanjutkan semua proses tanpa menunggu proses lain selesai</p></td>
    </tr>
    <tr>
        <td><p class="fw-semibold">Alur Kode</p></td>
        <td><p>Linear, umumnya baris kode dieksekusi dari atas ke bawah</p></td>
        <td><p>Non-linear, eksekusi dapat dilakukan secara menyimpang tergantung lama proses yang dilakukan</p></td>
    </tr>
    <tr>
        <td><p class="fw-semibold">Kompleksitas</p></td>
        <td><p>Cenderung lebih mudah dipahami</p></td>
        <td><p>Lebih sulit dipahami karena merupakan pembelajaran lebih lanjut</p></td>
    </tr>
    <tr>
        <td><p class="fw-semibold">Penggunaan</p></td>
        <td><p>Cocok digunakan untuk operasi yang cepat</p></td>
        <td><p>Cocok untuk operasi yang memakan waktu lama</p></td>
    </tr>
</table>
<p class="lh-lg">
    Dengan memahami perbedaan dari dua modul pemrograman tersebut, diharapkan dapat mengembangkan aplikasi yang modern, terutama pada saat mengerjakan operasi yang melibatkan interaksi dengan server atau sistem eksternal. 
</p>
<div class="p-0 p-md-3 my-4 my-md-2">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 1.3</div>
        </div>
        <div class="card-body">
            <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis berikut ini dengan baik dan benar!</p>
            <p class="fw-semibold bg-primary text-white p-2 rounded card-text">Pertanyaan 1 dari <span id="noSoal">1</span></p>
        </div>
    </div>
</div>
@endsection