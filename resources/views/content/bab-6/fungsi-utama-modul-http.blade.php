@extends('layouts.base')

@section('container-base-content')
    <h2>6.2 Fungsi Utama Modul HTTP</h2>
    <p class="lh-lg">
        Modul HTTP memiliki beberapa fungsi utama yang sangat penting dalam mengambangkan aplikasi menggunakan Node.js,
        diantaranya:
    </p>
    <ol class="list-group list-group-numbered">
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Membuat Server HTTP</p>
                <textarea class="code-editor">http.createServer((req, res) => {
    res.writeHead(200, { 'Content-Type': 'text/plain' });
    res.end('Halo, ini adalah server HTTP!');
});</textarea>
                <p>Fungsi utama dari Modul HTTP adalah membuat server web yang dapat menerima permintaan dari klien. Dengan
                    menggunakan fungsi http.createServer(), pengembang dapat membuat server lokal yang dapat menangani
                    permintaan dan memberikan respon yang sesuai.</p>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Menjalankan Server HTTP</p>
                <textarea class="code-editor">server.listen(port, hostname, callback);</textarea>
                <p>Setelah server dibuat, kita perlu menjalankannya dengan metode server.listen().</p>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Mengelola Permintaan dan Respons HTTP</p>
                <textarea class="code-editor">http.request()</textarea>
                <p>Modul ini dapat menangani berbagai jenis permintaan HTTP seperti GET, POST, PUT, dan DELETE.</p>
            </div>
        </li>

        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Menangani Header dan Status Kode</p>
                <textarea class="code-editor">res.writeHead(statusCode, headers)</textarea>
                <p>HTTP menggunakan header dan status kode untuk memberikan informasi terhadap permintaan dan respon dari
                    klien. Dengan menggunakan modul HTTP, pengembang dapat mengatur respon dan status kode tersebut.
                    Misalnya kode 200 untuk OK, 404 untuk Not Found, dan lain-lain.</p>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Menyediakan Akses ke Data dari URL</p>
                <textarea class="code-editor">url.parse(req.url, true).query</textarea>
                <p class="m-1">Modul HTTP dapat digunakan pengembang untuk mengakses parameter dari URL dan query string
                    yang dikirimkan oleh klien. Fitur ini umumnya digunakan dalam pengembangan aplikasi berbasis REST API,
                    dimana klien sering mengirim data melalui URL untuk mengakses atau memanipulasi sumber daya tertentu.
                </p>
                <p class="m-1">Dengan menggunakan fungsi bawaan seperti req.url, url.parse(), dan req.query, pengembang
                    dapat dengan mudah menangani request data yang dikirimkan oleh klien, Berikut contoh klien yang
                    mengirimkan permintaan ke URL</p>
                <div class="border rounded">
                    <p class="m-1 text-black">http://localhost:3000/user?id=123&name=John</p>
                </div>

                <p class="m-1">
                    Maka, data id dan name tersebut dapat diakses dan diproses dalam server menggunakan modul HTTP. Fitur
                    ini dapat membuat aplikasi lebih dinamis dan responsif, terutama pada aplikasi yang memerlukan
                    filtering, pagination, atau pencarian data pada server.
                </p>
            </div>
        </li>
    </ol>
    <p class="lh-lg mt-2">
        Dengan berbagai macam fitur HTTP yang ditawarkan modul ini, membuat Node.js semakin andal dalam pengembangan
        aplikasi berbasis server side.
    </p>
    <div class="p-0 p-md-3 my-4 my-md-2" id="aktivitas">
        <div class="card">
            <div class="p-3 d-flex align-items-center justify-content-between card-header">
                <div class="mb-0 h6 fw-semibold card-title">Aktivitas 6.2</div>
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
        let stepId = 29;
        const penjelasanSalah =
            "Bukan merupakan jawaban, ayo cari dong jawaban yang benar. Kamu pasti bisa kamu hebat jangan menyerah sampai titik ini";
        const bankSoal = [{
                soal: "Apa peran utama dari Hypertext Transfer Protocol (HTTP) dalam komunikasi web?",
                pilihan: [
                    "Menghubungkan database dengan aplikasi.",
                    "Mengirim dan menerima file dalam jaringan lokal.",
                    "Menyediakan aturan untuk pertukaran data antara klien dan server di web.",
                    "Mengoptimalkan performa sistem operasi."
                ],
                benar: 2,
                penjelasan: "HTTP adalah protokol yang mendefinisikan bagaimana data dikirim dan diterima antara klien (browser) dan server di web."
            },
            {
                soal: "Apa fungsi utama dari Modul HTTP dalam Node.js?",
                pilihan: [
                    "Menyimpan data dalam database.",
                    "Mengelola permintaan dan respons HTTP.",
                    "Mengoptimalkan performa aplikasi.",
                    "Mengelola sesi pengguna."
                ],
                benar: 1,
                penjelasan: "Modul HTTP di Node.js digunakan untuk membuat server dan menangani permintaan serta respons HTTP."
            },
            {
                soal: "Apa yang dilakukan fungsi http.createServer()?",
                pilihan: [
                    "Menghapus server yang sedang berjalan.",
                    "Mengatur koneksi ke database.",
                    "Membuat server HTTP yang dapat menerima dan merespons permintaan.",
                    "Mengoptimalkan pengiriman data."
                ],
                benar: 2,
                penjelasan: "Fungsi `http.createServer()` digunakan untuk membuat server HTTP yang dapat menangani permintaan dari klien."
            },
            {
                soal: "Bagaimana cara menangani permintaan GET dengan parameter query di server Node.js?",
                pilihan: [
                    "Dengan menggunakan http.getParameter()",
                    "Dengan memparsing req.url dan memanfaatkan querystring atau URL module",
                    "Dengan http.createServer()",
                    "Dengan fs.readFile()"
                ],
                benar: 1,
                penjelasan: "Permintaan GET dengan parameter query dapat diambil dengan memparsing `req.url` dan menggunakan modul `querystring` atau `URL`."
            },
            {
                soal: "Mengapa penting untuk mengatur status kode pada respons HTTP di server Node.js?",
                pilihan: [
                    "Untuk meningkatkan kecepatan server",
                    "Agar klien memahami hasil permintaan, apakah sukses atau gagal",
                    "Untuk menyimpan data pengguna secara otomatis",
                    "Untuk menambah keamanan pada server"
                ],
                benar: 1,
                penjelasan: "Status kode HTTP memberikan informasi kepada klien tentang hasil permintaan, apakah sukses (200), gagal (404), atau error server (500)."
            }
        ];
    </script>
@endsection
