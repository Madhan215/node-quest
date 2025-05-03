@extends('layouts.base')

@section('container-base-content')
    <h1 class="mb-2">Pengenalan Node.js</h1>
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
                            Mengenal Javascript Runtime Node.js
                        </div>
                    </li>
                    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                        <div class="d-flex align-items-start">
                            <span class="h5 me-2 mb-0 p-0">•</span>
                            Memahami cara installasi Node.js
                        </div>
                    </li>
                    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                        <div class="d-flex align-items-start">
                            <span class="h5 me-2 mb-0 p-0">•</span>
                            Mampu membedakan Pemrograman pada sisi Server dan sisi Klien
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <h2>1.1 Javascript Runtime Node.js</h2>
    <p class="lh-lg">
        Node.js merupakan Runtime Environment JavaScript, bukan sebuah bahasa pemrograman. Node.js bersifat Open Source dan
        Cross Platform. Node JS Menjalankan mesin JavaScript V8, inti dari Google Chrome, di luar browser. Ini membuat
        aplikasi node menjadi sangat populer.

    </p>

    <p class="lh-lg">
        Node.js diciptakan oleh Ryan Dahl pada tahun 2009. Karena pada awalnya dia ingin membuat web server menggunakan
        event loop, bukan menggunakan thread. Dia sudah mencoba membuat dengan berbagai bahasa seperti C, Lua, dan Haskell.
        Oleh karena itu dia menciptakan Node.js yang membuat Bahasa Pemrograman JavaScript bisa berjalan pada sisi server.
        Gambar 1 menunjukkan logo dan maskot resmi dari Node.js.
    </p>

    <figure class="text-center">
        <img class="img-fluid d-block mx-auto my-2" src="{{ asset('img/Maskot dan Logo Nodejs.png') }}"
            alt="Logo dan Maskot Nodejs" style="max-height: 200px;">
        <figcaption class="figure-caption text-center">
            Gambar 1. Logo dan Maskot Nodejs
        </figcaption>
    </figure>



    <p class="lh-lg">
        Node JS berjalan dalam single process, tanpa membuat thread baru dalam setiap permintaan. NodeJs menyediakan
        serangkaian asynchronous I/O primitives dalam library yang mencegah kode javascript dari blocking. Secara umum
        pustaka pada node js ditulis dengan paradigma non-blocking, sehingga proses yang membutuhkan waktu lama (seperti
        mengakses penyimpanan atau jaringan) tidak akan menghentikan eksekusi program lain.
    </p>

    <p class="lh-lg">
        Hal ini memungkinkan node js untuk menangani ribuan koneksi secara bersamaan dengan satu server tanpa menimbulkan
        beban mengelola konkurensi thread, yang dapat menimbulkan sumber bug yang signifikan.
    </p>

    <p class="lh-lg">
        Node.js memiliki keunggulan bagi programmer frontend yang menulis dengan bahasa JavaScript untuk web dalam browser
        kini mereka dapat menuliskan kode pada sisi server tanpa perlu mempelajari bahasa baru.
    </p>

    <p class="lh-lg">
        Node.js, dapat menggunakan standar versi ECMAScript baru, karena pengguna tidak perlu menunggu untuk memperbarui
        browser, cukup dengan mengubah versi dari Node.js.
    </p>

    <div class="p-0 p-md-3 my-4 my-md-2" id="aktivitas">
        <div class="card">
            <div class="p-3 d-flex align-items-center justify-content-between card-header">
                <div class="mb-0 h6 fw-semibold card-title">Aktivitas 1.1</div>
                @if ($isCompleted)
                    <button class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Kamu telah menyelesaikan aktivitas ini, mengerjakannya tidak mempengaruhi perolehan poinmu">
                        <i class="bi bi-check2"></i> Completed
                    </button>
                @else
                    <button class="btn btn-success" style="display: none" id="completeJS"><i class="bi bi-check2"></i>
                        Completed</button>
                @endif
            </div>

            <div class="card-body">
                <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis
                    berikut ini dengan baik dan benar!</p>
                <p class="fw-semibold bg-primary text-white p-2 rounded card-text">
                    Pertanyaan <span id="noSoal">1</span> dari <span id="totalSoal">1</span>
                </p>
                <div class="soal-container" style="height: auto">
                    <p class="lh-lg" id="soal">Soal</p>
                    <div class="mb-4" id="pilihanContainer"></div>
                    <div id="penjelasan" hidden>
                        <div class="fade alert show" id="alertPenjelasan">
                            <div class="d-flex align-items-center mb-3">
                                <i class="me-2 bi fs-5" id="iconPenjelasan"></i>
                                <h6 class="fw-bold mb-0 mt-1" id="ketHasil"></h6>
                            </div>
                            <p class="mb-0" id="ketPenjelasan"></p>
                        </div>
                    </div>
                    <button class="btn btn-primary" id="btnNext">LANJUT</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let stepId = 1;
        const penjelasanSalah = "bukan merupakan jawaban, ayo ulangi dan cari jawaban yang benar!";
        const bankSoal = [{
                soal: "Node.js merupakan runtime programming yang bersifat?",
                pilihan: ["Blocking", "Non-Blocking", "Single-threaded", "Multi-threaded"],
                benar: 1,
                penjelasan: "merupakan sistem pemrograman yang ada pada Node.js"
            },
            {
                soal: "Apa mesin yang digunakan Node.js?",
                pilihan: ["V8", "SpiderMonkey", "Chakra", "Nitro"],
                benar: 0,
                penjelasan: "Merupakan mesin yang digunakan oleh Node.js"
            },
            {
                soal: "Tahun berapa Node.js diciptakan?",
                pilihan: ["2005", "2009", "2013", "2017"],
                benar: 1,
                penjelasan: "Merupakan tahun Node.js diciptakan"
            },
            {
                soal: "Siapa yang menciptakan Node.js?",
                pilihan: ["Brenden Eich", "Ryan Dahl", "Linus Torvalds", "James Gosling"],
                benar: 1,
                penjelasan: "merupakan orang yang menciptakan Node.js"
            },
            {
                soal: "Bahasa apa yang digunakan dalam Node.js?",
                pilihan: ["JavaScript", "Python", "Ruby", "PHP"],
                benar: 0,
                penjelasan: "merupakan bahasa yang digunakan dalam Node.js"
            }
        ]
    </script>
@endsection
