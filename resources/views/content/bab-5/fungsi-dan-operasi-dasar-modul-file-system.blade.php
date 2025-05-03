@extends('layouts.base')

@section('container-base-content')
    <h2>5.2 Fungsi dan Operasi Dasar Modul File System</h2>
    <p class="lh-lg">
        Modul File System memiliki berbagai fungsi yang memungkinkan pengembang untuk mengelola file dan direktori dengan
        cara yang efisien, beberapa fungsi utama dalam modul File System meliputi:
    </p>
    <ol class="list-group list-group-numbered">
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto ">
                <p class="m-0">Membaca File</p>
                <code class="text-primary">fs.readFile(path, options, callback)</code>
                <p class="lh-lg">
                    Dengan menggunakan fungsi fs.readFile untuk membaca isi file dalam sistem. Fungsi ini menerima tiga
                    argumen:
                </p>
                <ul class="list-group list-group-flush">
                    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                        <div class="d-flex align-items-start">
                            <span class="h5 me-2 mb-0 p-0">•</span>
                            path : Jalur ke file yang ingin di baca
                        </div>
                    </li>
                    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                        <div class="d-flex align-items-start">
                            <span class="h5 me-2 mb-0 p-0">•</span>
                            options : Opsi pengaturan, seperti encoding (misalnya, ‘utf8’)
                        </div>
                    </li>
                    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                        <div class="d-flex align-items-start">
                            <span class="h5 me-2 mb-0 p-0">•</span>
                            callback : Fungsi yang dipanggil setelah operasi selesai
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto ">
                <p class="m-0">Membaca File</p>
                <code class="text-primary">fs.readFile(path, options, callback)</code>
                <p class="lh-lg">
                    Dengan menggunakan fungsi fs.readFile untuk membaca isi file dalam sistem. Fungsi ini menerima tiga
                    argumen:
                </p>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto ">
                <p class="m-0">Menulis File</p>
                <code class="text-primary">fs.writeFile(path, data, options, callback)</code>
                <p class="lh-lg">
                    Dengan menggunakan fungsi fs.writeFile untuk membuat atau memperbarui file dengan konten tertentu.
                </p>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto ">
                <p class="m-0">Menghapus File</p>
                <code class="text-primary">fs.unlink(path, callback)</code>
                <p class="lh-lg">
                    Dengan menggunakan fungsi fs.unlink digunakan untuk menghapus file yang tidak diperlukan.
                </p>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto ">
                <p class="m-0">Mengubah Nama File</p>
                <code class="text-primary">fs.rename(oldPath, newPath, callback)</code>
                <p class="lh-lg">
                    Dengan menggunakan fungsi fs.rename dapat digunakan untuk mengubah nama dari file.
                </p>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto ">
                <p class="m-0">Mengelola Direktori</p>
                <code class="text-primary">fs.readdir(path, callback)</code>
                <p class="lh-lg">
                    Modul File System juga dapat digunakan untuk mengelola direktori, seperti membuat membuat direktori dan
                    mendapatkan daftar isi direktori.
                </p>
            </div>
        </li>
    </ol>
    <div class="p-0 p-md-3 my-4 my-md-2" id="aktivitas">
        <div class="card">
            <div class="p-3 d-flex align-items-center justify-content-between card-header">
                <div class="mb-0 h6 fw-semibold card-title">Aktivitas 5.2</div>
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
        let stepId = 25;
        const penjelasanSalah =
            "Bukan merupakan jawaban, ayo cari dong jawaban yang benar. Kamu pasti bisa kamu hebat jangan menyerah sampai titik ini";
        const bankSoal = [{
                soal: "Metode mana yang digunakan untuk membaca isi file secara asinkron di Node.js?",
                pilihan: [
                    "fs.writeFile",
                    "fs.readFile",
                    "fs.unlink",
                    "fs.rename"
                ],
                benar: 1,
                penjelasan: "fs.readFile digunakan untuk membaca isi file secara asinkron di Node.js."
            },
            {
                soal: "Metode mana yang digunakan untuk menghapus file secara asinkron di Node.js?",
                pilihan: [
                    "fs.writeFile",
                    "fs.readFile",
                    "fs.unlink",
                    "fs.rename"
                ],
                benar: 2,
                penjelasan: "fs.unlink digunakan untuk menghapus file secara asinkron."
            },
            {
                soal: "Metode mana yang digunakan untuk membuat file secara asinkron di Node.js?",
                pilihan: [
                    "fs.writeFile",
                    "fs.readFile",
                    "fs.unlink",
                    "fs.rename"
                ],
                benar: 0,
                penjelasan: "fs.writeFile dapat digunakan untuk membuat file baru jika belum ada."
            },
            {
                soal: "Metode mana yang digunakan untuk merubah nama file secara asinkron di Node.js?",
                pilihan: [
                    "fs.writeFile",
                    "fs.readFile",
                    "fs.unlink",
                    "fs.rename"
                ],
                benar: 3,
                penjelasan: "fs.rename digunakan untuk mengganti nama file secara asinkron."
            },
            {
                soal: "Metode mana yang digunakan untuk mengelola direktori di Node.js?",
                pilihan: [
                    "fs.writeFile",
                    "fs.readFile",
                    "fs.readdir",
                    "fs.rename"
                ],
                benar: 2,
                penjelasan: "fs.readdir digunakan untuk membaca isi dari sebuah direktori."
            }
        ];
    </script>
@endsection
