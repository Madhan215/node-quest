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
        Node.js menyediakan berbagai fungsi untuk mengelola event dalam aplikasi. Dengan menggunakan EventEmitter yang
        merupakan objek inti untuk membuat, mendengarkan, dan memicu event. Modul ini sangat penting bagi Node.js karena
        dapat digunakan untuk menangani event asinkron secara efisien.
    </p>
    <p class="fw-semibold text-primary">
        4.1.1 Konsep dasar EventEmitter
    </p>
    <p class="lh-lg">
        EventEmitter merupakan kalas dalam Node.js yang menyediakan mekanisme untuk membuat, mengelola, dan menangani event.
        EventEmitter menjadi inti dalam modul event sebagai fitur penting dalam pemrograman berbasis event dalam lingkungan
        Node.js. EventEmitter memungkinkan objek yang ada dalam aplikasi untuk memicu (emit) event tertentu dan mendengarkan
        (listen) event tersebut. Berikut penjelasannya:
    </p>
    <ul class="list-group list-group-flush">
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex align-items-start">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1 text-primary">Event</p>
                    Merupakan suatu kejadian yang ada dalam aplikasi. Misalnya, tombol yang di klik, menerima permintaan
                    dari server, atau menyelesaikan suatu operasi.
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex align-items-start">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1 text-primary">Emit</p>
                    Merupakan fungsi yang memicu event. Ketika suatu event dipicu, semua listener yang terdaftar untuk event
                    tersebut juga akan dipanggil.
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex align-items-start">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1 text-primary">Listener</p>
                    Fungsi yang dipanggil ketika event terjadi. Listener akan menunggu event tersebut dipicu dan menjalankan
                    fungsinya saat event terjadi. Pengembang dapat menambahkan satu atau lebih untuk merespon event.
                </div>
            </div>
        </li>
    </ul>
    <div class="p-0 p-md-3 my-4 my-md-2" id="aktivitas">
        <div class="card">
            <div class="p-3 d-flex align-items-center justify-content-between card-header">
                <div class="mb-0 h6 fw-semibold card-title">Aktivitas 4.1</div>
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
        let stepId = 20;
        const penjelasanSalah =
            "Bukan merupakan jawaban, ayo cari dong jawaban yang benar. Kamu pasti bisa kamu hebat jangan menyerah sampai titik ini";
        const bankSoal = [{
                soal: "Apa yang dimaksud dengan modul Event di Node.js?",
                pilihan: [
                    "Modul yang digunakan untuk mengakses file sistem.",
                    "Modul yang digunakan untuk menangani event dalam aplikasi.",
                    "Modul untuk membuat koneksi jaringan.",
                    "Modul untuk menjalankan kode sinkron."
                ],
                benar: 1,
                penjelasan: "Modul Event di Node.js digunakan untuk menangani event dalam aplikasi, memungkinkan pemrograman berbasis event."
            },
            {
                soal: "Objek inti yang disediakan oleh modul Event untuk mengelola event dalam Node.js adalah:",
                pilihan: [
                    "EventTrigger",
                    "EventController",
                    "EventManager",
                    "EventEmitter"
                ],
                benar: 3,
                penjelasan: "EventEmitter adalah objek inti dalam modul Event yang digunakan untuk menangani event dalam Node.js."
            },
            {
                soal: "Mengapa modul Event penting dalam arsitektur Node.js?",
                pilihan: [
                    "Karena membantu mengelola event asinkron secara efisien dalam aplikasi.",
                    "Karena memungkinkan pemrograman yang terstruktur dengan baik.",
                    "Karena memudahkan akses ke modul HTTP.",
                    "Karena menyediakan fungsi untuk koneksi ke basis data."
                ],
                benar: 0,
                penjelasan: "Modul Event penting karena membantu mengelola event asinkron secara efisien, yang merupakan inti dari arsitektur Node.js."
            },
            {
                soal: "Apa yang dimaksud dengan emit dalam konteks modul Event di Node.js?",
                pilihan: [
                    "Fungsi yang mendengarkan kejadian tertentu dan menjalankan aksi ketika event terjadi.",
                    "Fungsi yang memicu suatu event dan menjalankan semua listener yang terdaftar untuk event tersebut.",
                    "Fungsi yang mengatur urutan eksekusi kode dalam aplikasi.",
                    "Fungsi yang mematikan event setelah terjadi."
                ],
                benar: 1,
                penjelasan: "emit() digunakan untuk memicu event dalam EventEmitter, yang akan mengeksekusi semua listener yang terdaftar untuk event tersebut."
            },
            {
                soal: "Apa yang dimaksud dengan Listener dalam konteks EventEmitter di Node.js?",
                pilihan: [
                    "Fungsi yang dipanggil untuk memicu event di dalam aplikasi.",
                    "Fungsi yang menunggu suatu event terjadi dan menjalankan aksi ketika event tersebut dipicu.",
                    "Fungsi yang mengatur event untuk dieksekusi pada waktu tertentu.",
                    "Fungsi yang menghapus event yang sudah diproses."
                ],
                benar: 1,
                penjelasan: "Listener adalah fungsi yang menunggu suatu event terjadi dan menjalankan aksi saat event tersebut dipicu."
            }
        ];
    </script>
@endsection
