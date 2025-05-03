@extends('layouts.base')

@section('container-base-content')
    <h2>2.2 Fungsi Require</h2>
    <p class="lh-lg">
        Fungsi require pada Node.js merupakan cara utama yang digunakan untuk mengimpor modul ke dalam program Node.js.
        Berdasarkan urutan prioritas dalam fungsi require() sebagai berikut:
    </p>
    <ol class="list-group list-group-numbered">
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="text-primary m-0">Core Moduls</p>
                <p>Pertama, fungsi require() akan mencari modul bawaan yang ada pada sistem Node.js.</p>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="text-primary m-0">File atau Direktori (./ atau / atau ../)</p>
                <p>Pencarian kedua, adalah modul yang umumnya dibuat oleh pengembang.</p>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="text-primary m-0">Folder “node_modules”</p>
                <p>Pencarian yang terakhir adalah paket dalam third party modules, yang merupakan modul buatan pihak ketiga.
                    Paket modul yang telah diinstall dari NPM akan tersimpan dalam node_modules.</p>
            </div>
        </li>
    </ol>
    <div class="p-0 p-md-3 my-4 my-md-2" id="aktivitas">
        <div class="card">
            <div class="p-3 d-flex align-items-center justify-content-between card-header">
                <div class="mb-0 h6 fw-semibold card-title">Aktivitas 2.2</div>
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
        let stepId = 12;
        const penjelasanSalah =
            "Bukan merupakan jawaban, ayo cari dong jawaban yang benar. Kamu pasti bisa kamu hebat jangan menyerah sampai titik ini";
        const bankSoal = [{
                soal: "Fungsi apa yang digunakan untuk mengimpor modul dalam Node.js …",
                pilihan: [
                    "import()",
                    "require()",
                    "module()",
                    "define()"
                ],
                benar: 1,
                penjelasan: "Di Node.js, fungsi require() digunakan untuk mengimpor modul."
            },
            {
                soal: "Berikut baris kode yang digunakan untuk mengimpor modul bawaan http dalam Node.js adalah …",
                pilihan: [
                    "http.import()",
                    "const http = require(‘http’);",
                    "module.import(‘http’)",
                    "load http;"
                ],
                benar: 1,
                penjelasan: "Untuk mengimpor modul bawaan http dalam Node.js, gunakan require('http')."
            },
            {
                soal: "Modul bawaan yang sudah tersedia dalam Node.js disebut … Modules.",
                pilihan: [
                    "Core",
                    "Native",
                    "Local",
                    "Third-party"
                ],
                benar: 0,
                penjelasan: "Modul bawaan dalam Node.js disebut Core Modules."
            },
            {
                soal: "Saat mengimpor modul yang dibuat oleh pengembang, perintah require() digunakan dengan …",
                pilihan: [
                    "Nama modul dan ekstensi",
                    "Path atau alamat file",
                    "Kata kunci import",
                    "Nama folder node_modules"
                ],
                benar: 1,
                penjelasan: "Modul lokal dalam Node.js diimpor dengan require() menggunakan path atau alamat file."
            },
            {
                soal: "Folder default yang digunakan untuk menyimpan modul pihak ketiga (Third Party Module) dalam Node.js disebut …",
                pilihan: [
                    "external_modules",
                    "lib_modules",
                    "custom_modules",
                    "node_modules"
                ],
                benar: 3,
                penjelasan: "Folder node_modules adalah tempat penyimpanan default untuk modul pihak ketiga yang diinstal melalui npm."
            }
        ];
    </script>
@endsection
