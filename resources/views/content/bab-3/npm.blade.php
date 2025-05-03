@extends('layouts.base')

@section('container-base-content')
    <h1>NPM (Node Package Manager)</h1>
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
                            Mengenal NPM pada Node.js
                        </div>
                    </li>
                    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                        <div class="d-flex align-items-start">
                            <span class="h5 me-2 mb-0 p-0">•</span>
                            Membuat projek dengan NPM
                        </div>
                    </li>
                    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                        <div class="d-flex align-items-start">
                            <span class="h5 me-2 mb-0 p-0">•</span>
                            Mempublikasikan projek NPM
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <h2>3.1 NPM</h2>
    <p class="lh-lg">
        NPM (Node Package Manager) merupakan fitur yang ada di dalam Node.js untuk mengatur dalam manajemen paket, seperti
        dalam bahasa Pemrograman Python disebut dengan PIP. NPM merupakan Package Manager yang digunakan untuk platform
        Node.js. Fungsi utama dari NPM adalah sebagai wadah untuk developer JavaScript bisa saling berbagi modul yang
        dibuat. Program tersebut dapat ditemukan di https://www.npmjs.com/. Fitur NPM didapat ketika sudah menginstal
        Node.js.
    </p>
    <p class="text-primary fw-semibold">
        3.1.1 Third Party Module
    </p>
    <p class="lh-lg">
        Node.js memiliki banyak modul yang berada di dalam NPM, berikut modul NPM yang populer digunakan dalam pengembangan
        projek dalam Node.js diantaranya:
    </p>
    <ol class="list-group list-group-numbered">
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Express.js</p>
                <code class="text-primary">npm install express</code>
                <p>
                    Modul ini digunakan untuk membangun aplikasi web dan API. Express mendukung berbagai fungsi dari metode
                    HTTP dan middleware, membuatnya fleksibel untuk berbagai kebutuhan dalam pengembangan web.
                </p>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Moment.js</p>
                <code class="text-primary">npm install moment</code>
                <p>
                    Digunakan untuk manajemen waktu dan tanggal yang memudahkan manipulasi, parsing, dan waktu pada
                    JavaScript.
                </p>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Mongoose</p>
                <code class="text-primary">npm install mongosee</code>
                <p>
                    Modul ini digunakan untuk berinteraksi dengan MongoDB yang memungkinkan pemodelan data dalam JavaScript.
                    Dengan modul mongoose, pengembang dapat mengelola koleksi MongoDB seperti objek JavaScript, serta dapat
                    membuat skema untuk melakukan validasi dan mengelola data yang disimpan.
                </p>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Chalk</p>
                <code class="text-primary">npm install chalk</code>
                <p>
                    Modul ini memberikan tampilan dan gaya serta efek pada terminal. Modul ini dapat membantu pengembang
                    untuk membedakan pesan atau log sehingga lebih mudah dibaca dan diidentifikasi.
                </p>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Async</p>
                <code class="text-primary">npm install async</code>
                <p>
                    Digunakan untuk mengelola operasi asinkron seperti callback dan promises. Dengan modul ini memungkinkan
                    pengembangan untuk menjalankan tugas secara paralel atau berurutan sesuai dengan kebutuhan, modul ini
                    dapat meningkatkan performa aplikasi yang memerlukan operasi yang panjang.
                </p>
            </div>
        </li>
    </ol>
    <p class="lh-lg">
        Untuk menggunakan modul pihak ke-tiga dari Node.js. Pengembang perlu menginstall terlebih dahulu dengan fitur NPM,
        setelah itu modul yang telah ter-install dapat digunakan dalam script atau program. Berikut langkah-langkah dalam
        menginstall Third Party Moduls dari NPM:
    </p>
    <ol class="list-group list-group-numbered">
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">
                    Kita akan mencoba untuk menginstall moment, ketikkan kode berikut<br>
                    <code>npm install moment</code>
                </p>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">
                    Jalankan kode berikut, dan tuliskan ke dalam file app.js
                </p>
                <div class="d-flex justify-content-end align-items-end">
                    <button class="btn btn-sm btn-outline-primary ms-2" onclick="copyToClipboard()">
                        <i class="bi bi-clipboard"></i> Copy
                    </button>
                </div>
                <textarea class="code-editor" id="code-moment">// Import modul moment
const moment = require('moment');

// Menampilkan waktu saat ini dalam format default
console.log("Waktu saat ini:", moment().format());

// Memformat tanggal dalam format yang lebih spesifik
console.log("Tanggal sekarang (YYYY-MM-DD):", moment().format('YYYY-MM-DD'));

// Menampilkan hari dalam seminggu
console.log("Hari dalam seminggu:", moment().format('dddd'));

// Menambahkan 7 hari dari tanggal saat ini
const nextWeek = moment().add(7, 'days');
console.log("7 hari dari sekarang:", nextWeek.format('YYYY-MM-DD'));

// Mengurangi 1 bulan dari tanggal saat ini
const lastMonth = moment().subtract(1, 'months');
console.log("1 bulan yang lalu:", lastMonth.format('YYYY-MM-DD'));

// Menghitung selisih hari dari tanggal tertentu
const birthdate = moment("2000-01-01", "YYYY-MM-DD");
const daysSinceBirth = moment().diff(birthdate, 'days');
console.log("Jumlah hari sejak 1 Januari 2000:", daysSinceBirth);</textarea>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">
                    Jalankan file JavaScript tersebut dengan mengetikkan node app.js
                </p>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">
                    Untuk menghapus paket NPM gunakan perintah <br> <code>npm uninstall nama_paket</code>
                </p>
            </div>
        </li>
    </ol>
    <div class="p-0 p-md-3 my-4 my-md-2">
        <div class="card">
            <div class="p-3 d-flex align-items-center justify-content-between card-header">
                <div class="mb-0 h6 fw-semibold card-title">Aktivitas 3.1</div>
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
        let stepId = 16;
        const penjelasanSalah = "Jawaban ini belum benar. Ayo, coba lagi dan temukan jawaban yang tepat!";
        const bankSoal = [{
                soal: "Apa fungsi utama dari NPM (Node Package Manager) dalam Node.js?",
                pilihan: [
                    "Mengelola dan berbagi modul JavaScript",
                    "Menjalankan kode Python dalam Node.js",
                    "Menginstal sistem operasi dalam Node.js",
                    "Membuat database di MongoDB"
                ],
                benar: 0,
                penjelasan: "NPM digunakan untuk mengelola dan berbagi modul JavaScript dalam ekosistem Node.js."
            },
            {
                soal: "Modul Express.js dalam NPM digunakan untuk?",
                pilihan: [
                    "Mengelola operasi asinkron dalam JavaScript",
                    "Membangun aplikasi web dan API",
                    "Memberikan efek warna pada terminal",
                    "Menghubungkan aplikasi dengan database MongoDB"
                ],
                benar: 1,
                penjelasan: "Express.js adalah framework untuk membangun aplikasi web dan API dalam Node.js."
            },
            {
                soal: "Perintah berikut digunakan untuk menginstal modul Moment.js dalam Node.js…",
                pilihan: [
                    "npm remove moment",
                    "npm install moment",
                    "node install moment",
                    "npm run moment"
                ],
                benar: 1,
                penjelasan: "Untuk menginstal modul Moment.js, perintah yang digunakan adalah `npm install moment`."
            },
            {
                soal: "Modul Chalk dalam NPM berfungsi untuk?",
                pilihan: [
                    "Menampilkan teks dengan gaya dan warna di terminal",
                    "Mengelola database dengan lebih mudah",
                    "Menjalankan fungsi asinkronus dalam Node.js",
                    "Membuat skema validasi data dalam MongoDB"
                ],
                benar: 0,
                penjelasan: "Chalk digunakan untuk menampilkan teks dengan gaya dan warna di terminal Node.js."
            },
            {
                soal: "Bagaimana cara menghapus modul NPM yang telah diinstal?",
                pilihan: [
                    "npm install nama_paket",
                    "npm remove nama_paket",
                    "npm uninstall nama_paket",
                    "npm delete nama_paket"
                ],
                benar: 2,
                penjelasan: "Perintah yang benar untuk menghapus modul NPM adalah `npm uninstall nama_paket`."
            }
        ];
    </script>

    <script>
        function copyToClipboard() {
            var text = document.getElementById("code-moment").innerText;
            navigator.clipboard.writeText(text).then(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Code berhasil disalin ke clipboard.',
                    timer: 2000,
                    showConfirmButton: false
                });
            }).catch(function(err) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: 'Gagal menyalin Code.',
                });
                console.error("Gagal menyalin teks", err);
            });
        }
    </script>
@endsection
