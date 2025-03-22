@extends('layouts.base')

@section('container-base-content')

<h2>2.3 Core Moduls</h2>
<p class="lh-lg">
    Dalam menggunakan modul bawaan dari Node.js cukup dengan memakai fungsi require(). Node.js memiliki banyak core modul yang bisa dimanfaatkan dalam pembuatan aplikasi. Core Moduls tidak perlu diinstal dengan NPM, karena sudah tersedia sejak awal penginstallan Node.js. Berikut beberapa contoh core moduls:
</p>
<ul class="list-group list-group-flush">
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1">http</p>
                http merupakan modul yang digunakan untuk melakukan perintah http (HTTP Request) dan membuat server HTTP.
            </div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1">fs</p>
                fs merupakan modul sistem file (file system) yang dipakai untuk pengelolaan file serta input dan output.
            </div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1">url</p>
                url merupakan modul untuk melakukan parsing string dari URL.
            </div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1">os</p>
                os merupakan modul sistem yang menyediakan informasi terkait sistem operasi.
            </div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1">dan lain-lainnya</p>
            </div>
        </div>
    </li>
</ul>
<p class="lh-lg mt-2">
    Cara untuk meng-import core modul ke dalam program adalah menggunakan fungsi require()
</p>
<h3>2.3.1 Menggunakan Modul OS</h3>
<p class="lh-lg">
    Berikut script sederhana menggunakan modul OS untuk menampilkan informasi tentang sistem operasi yang sedang digunakan.
</p>
<pre class="border rounded"><code class="javascript m-0 pt-1 pb-1">// Memuat modul 'os'
const os = require('os');

// Mendapatkan tipe sistem operasi
const osType = os.type();
console.log(`Tipe Sistem Operasi: ${osType}`);

// Mendapatkan nama host
const hostName = os.hostname();
console.log(`Nama Host: ${hostName}`);

// Mendapatkan total memori dalam sistem (dalam byte)
const totalMemory = os.totalmem();
console.log(`Total Memori: ${totalMemory / 1024 / 1024} MB`);

// Mendapatkan memori yang tersedia (dalam byte)
const freeMemory = os.freemem();
console.log(`Memori Tersedia: ${freeMemory / 1024 / 1024} MB`);

// Mendapatkan waktu kerja (uptime) sistem dalam detik
const uptime = os.uptime();
console.log(`Waktu Kerja Sistem: ${Math.floor(uptime / 60)} menit`);

// Mendapatkan informasi CPU
const cpuInfo = os.cpus();
console.log(`Informasi CPU: ${cpuInfo.length} cores`);

// Mendapatkan arsitektur sistem
const architecture = os.arch();
console.log(`Arsitektur Sistem: ${architecture}`);</code></pre>
<div class="p-0 p-md-3 my-4 my-md-2" id="aktivitas">
    <div class="card">
        <div class="p-3 d-flex align-items-center justify-content-between card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 2.3</div>
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
    let stepId = 13;
    const penjelasanSalah = "Bukan merupakan jawaban, ayo cari dong jawaban yang benar. Kamu pasti bisa kamu hebat jangan menyerah sampai titik ini";
    const bankSoal = [
    {
        soal: "Fungsi apa yang digunakan untuk mengimpor core modul ke dalam program Node.js …",
        pilihan: [
            "import()",
            "require()",
            "include()",
            "load()"
        ],
        benar: 1,
        penjelasan: "Di Node.js, fungsi require() digunakan untuk mengimpor core modul ke dalam program."
    },
    {
        soal: "Modul apa yang digunakan untuk membuat server HTTP dan menangani HTTP request di Node.js …",
        pilihan: [
            "fs",
            "net",
            "http",
            "path"
        ],
        benar: 2,
        penjelasan: "Modul http dalam Node.js digunakan untuk membuat server HTTP dan menangani permintaan HTTP."
    },
    {
        soal: "Modul yang digunakan untuk mengelola file serta input dan output pada Node.js adalah …",
        pilihan: [
            "os",
            "events",
            "stream",
            "fs"
        ],
        benar: 3,
        penjelasan: "Modul fs (File System) dalam Node.js digunakan untuk mengelola file serta operasi input dan output."
    },
    {
        soal: "Modul yang digunakan untuk melakukan parsing string dari URL pada Node.js adalah …",
        pilihan: [
            "http",
            "url",
            "querystring",
            "dns"
        ],
        benar: 1,
        penjelasan: "Modul url dalam Node.js digunakan untuk melakukan parsing dan manipulasi URL."
    },
    {
        soal: "Modul yang digunakan untuk berinteraksi dengan sistem operasi pada Node.js adalah …",
        pilihan: [
            "os",
            "process",
            "child_process",
            "vm"
        ],
        benar: 0,
        penjelasan: "Modul os dalam Node.js digunakan untuk berinteraksi dengan sistem operasi, seperti mendapatkan informasi tentang platform dan arsitektur sistem."
    }
];
</script>
@endsection