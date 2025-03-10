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
<div class="p-0 p-md-3 my-4 my-md-2" id="aktivitas">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 6.1</div>
        </div>
        <div class="card-body">
            <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis
                berikut ini dengan baik dan benar!</p>
            <p class="fw-semibold bg-primary text-white p-2 rounded card-text">
                Pertanyaan <span id="noSoal">1</span> dari <span id="totalSoal">1</span>
            </p>
            <div class="soal-container" style="height: 40vh; overflow-y: auto;">
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
    const penjelasanSalah = "Bukan merupakan jawaban, ayo cari dong jawaban yang benar. Kamu pasti bisa kamu hebat jangan menyerah sampai titik ini";
    const bankSoal = [
    {
        soal: "Apa itu Modul HTTP dalam Node.js?",
        pilihan: [
            "Modul untuk menangani database.",
            "Modul untuk mengelola sesi pengguna.",
            "Modul untuk membuat server web dan mengelola permintaan serta respons HTTP.",
            "Modul untuk memanipulasi data gambar."
        ],
        benar: 2,
        penjelasan: "Modul HTTP di Node.js digunakan untuk membuat server web dan menangani permintaan serta respons HTTP."
    },
    {
        soal: "Mengapa Node.js menggunakan arsitektur event-driven untuk menangani permintaan HTTP?",
        pilihan: [
            "Untuk menghemat memori.",
            "Agar dapat memproses banyak permintaan secara bersamaan tanpa memblokir.",
            "Agar lebih mudah dalam penulisan kode.",
            "Untuk meningkatkan keamanan aplikasi."
        ],
        benar: 1,
        penjelasan: "Arsitektur event-driven memungkinkan Node.js menangani banyak permintaan secara bersamaan tanpa memblokir eksekusi."
    },
    {
        soal: "Apa kepanjangan dari HTTP?",
        pilihan: [
            "HyperText Transfer Protocol",
            "HyperLink Transfer Protocol",
            "HyperData Transmission Protocol",
            "HyperTransfer Text Process"
        ],
        benar: 0,
        penjelasan: "HTTP adalah singkatan dari HyperText Transfer Protocol, yang digunakan untuk komunikasi antara klien dan server."
    },
    {
        soal: "Dalam konteks arsitektur event-driven di Node.js, bagaimana sistem ini membantu mengelola banyak permintaan HTTP secara efisien?",
        pilihan: [
            "Dengan menyimpan semua permintaan di antrian dan memprosesnya satu per satu.",
            "Dengan memblokir setiap permintaan hingga permintaan sebelumnya selesai diproses.",
            "Dengan memproses permintaan secara simultan tanpa mengganggu proses lainnya.",
            "Dengan memberikan prioritas kepada permintaan yang datang lebih dahulu."
        ],
        benar: 2,
        penjelasan: "Node.js menggunakan model non-blocking untuk menangani banyak permintaan secara bersamaan tanpa menunggu satu per satu."
    },
    {
        soal: "Dalam komunikasi antara klien dan server menggunakan HTTP, siapa yang bertanggung jawab untuk memulai permintaan, dan apa yang diterima sebagai respons?",
        pilihan: [
            "Server memulai permintaan, dan klien menerima respons.",
            "Klien memulai permintaan, dan server menerima respons.",
            "Klien memulai permintaan, dan server mengirimkan respons.",
            "Server memulai permintaan, dan klien mengirimkan respons."
        ],
        benar: 2,
        penjelasan: "Dalam komunikasi HTTP, klien (misalnya browser) mengirimkan permintaan ke server, dan server memberikan respons."
    }
];

</script>
@endsection