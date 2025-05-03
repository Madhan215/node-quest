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
                            Mengimplementasi operasi file seperti membaca, menulis, menghapus, dan mengubah dalam aplikasi
                            Node.js.
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <h2>5.1 Module File System</h2>
    <p class="lh-lg">
        Module File System merupakan modul bawaan dari Node.js yang memungkinkan program untuk berinteraksi dengan sistem
        file pada server. Modul ini berguna untuk melakukan berbagai operasi input maupun output pada file dan direktori,
        seperti membaca, menulis, menghapus, dan mengubah file. Dengan menggunakan modul ini, aplikasi Node.js dapat
        mengakses dan mengelola data yang berada di dalam disk dengan cara yang efisien.
    </p>
    <div class="p-0 p-md-3 my-4 my-md-2" id="aktivitas">
        <div class="card">
            <div class="p-3 d-flex align-items-center justify-content-between card-header">
                <div class="mb-0 h6 fw-semibold card-title">Aktivitas 5.1</div>
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
        let stepId = 24;
        const penjelasanSalah =
            "Bukan merupakan jawaban, ayo cari dong jawaban yang benar. Kamu pasti bisa kamu hebat jangan menyerah sampai titik ini";
        const bankSoal = [{
                soal: "Apa fungsi utama dari modul File System (FS) di Node.js?",
                pilihan: [
                    "Mengelola koneksi jaringan.",
                    "Menangani dan memicu event.",
                    "Mengakses dan mengelola file serta direktori di sistem file.",
                    "Mengelola sesi pengguna."
                ],
                benar: 2,
                penjelasan: "Modul File System (FS) memungkinkan Node.js untuk membaca, menulis, menghapus, dan mengelola file serta direktori di sistem file."
            },
            {
                soal: "Sebutkan operasi yang dapat dilakukan oleh Modul File System!",
                pilihan: [
                    "Menangani permintaan HTTP.",
                    "Membaca, menulis, menghapus, dan mengubah file.",
                    "Mengelola sesi pengguna.",
                    "Menghasilkan data acak."
                ],
                benar: 1,
                penjelasan: "Modul FS mendukung berbagai operasi file, seperti membaca, menulis, menghapus, dan mengubah file serta direktori."
            },
            {
                soal: "Mengapa Modul File System penting dalam aplikasi Node.js?",
                pilihan: [
                    "Karena memungkinkan akses ke database.",
                    "Karena memungkinkan program untuk berinteraksi dengan pengguna.",
                    "Karena memungkinkan aplikasi untuk mengakses dan mengelola data di dalam disk dengan cara yang efisien.",
                    "Karena mengelola koneksi ke server."
                ],
                benar: 2,
                penjelasan: "FS module sangat penting karena memungkinkan Node.js berinteraksi dengan sistem file, yang berguna untuk menyimpan dan mengelola data secara efisien."
            },
            {
                soal: "Perintah mana yang digunakan untuk membaca isi dari sebuah file menggunakan modul File System di Node.js?",
                pilihan: [
                    "fs.readFileSync()",
                    "fs.writeFile()",
                    "fs.deleteFile()",
                    "fs.renameFile()"
                ],
                benar: 0,
                penjelasan: "fs.readFileSync() digunakan untuk membaca isi file secara sinkron dalam Node.js."
            },
            {
                soal: "Apa yang terjadi jika kita mencoba menulis ke file yang tidak ada menggunakan fs.writeFile() di Node.js?",
                pilihan: [
                    "File baru akan dibuat jika file tidak ditemukan.",
                    "Program akan menghentikan eksekusi dengan error.",
                    "Program akan melanjutkan tanpa perubahan.",
                    "File lama akan dihapus."
                ],
                benar: 0,
                penjelasan: "fs.writeFile() secara otomatis akan membuat file baru jika file yang dimaksud tidak ditemukan."
            }
        ];
    </script>
@endsection
