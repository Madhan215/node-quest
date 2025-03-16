@extends('layouts.main')

@section('container-kuis')
    <style>
        .fade {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .show {
            opacity: 1;
        }
    </style>
    {{-- <div class="fade text-dark p-3 flex-grow-1 d-flex show align-items-center justify-content-center min-vh-100"> --}}

    <div id="instructions" class="fade show d-flex align-items-center justify-content-center vh-100">
        <div class="container">
            <div class="g-0 my-auto row justify-content-center">
                <div class="mx-auto col-lg-7">
                    <div class="text-center">
                        <h3 class="text-primary fw-semibold">EVALUASI</h3>
                        <hr class="my-4">
                    </div>
                    <div class="w-100 card">
                        <div class="p-3 text-center bg-white card-header">
                            <h5 class="m-0 fw-semibold card-title">Petunjuk Pengerjaan Kuis</h5>
                        </div>
                        <div class="small card-body">
                            <ol class="mb-0">
                                <li>
                                    <p class="mb-2 card-text">Terdapat 20 soal pada evaluasi ini. Untuk memulai mengerjakan evaluasi, tekan tombol "MULAI".
                                    </p>
                                </li>
                                <li>
                                    <p class="mb-2 card-text">Waktu pengerjaan soal adalah 45 menit, terdapat timer pada bagian kanan atas.</p>
                                </li>
                                <li>
                                    <p class="mb-2 card-text">Laman evaluasi terbagi menjadi dua sisi. Pada sisi bagian kiri terdapat soal. Pada sisi bagian kanan terdapat nomor soal dan tombol "SELESAI".
                                    </p>
                                </li>
                                <li>
                                    <p class="mb-2 card-text">Jika sudah selesai tekan tombol "SELESAI". Jika waktu pengerjaan soal habis maka laman soal akan otomatis tertutup yang akan langsung diarahkan ke halaman hasil.</p>
                                </li>
                                <li>
                                    <p class="mb-2 card-text">Jika keluar ketika sedang mengerjakan evaluasi, semua jawaban yang  sudah dikerjakan tidak akan disimpan dan harus menjawab ulang dari awal.</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="text-center p-3">
                    <button type="button" class="me-2 btn btn-primary" id="mulai-kuis" onclick="startQuiz()">MULAI</button>
                    <a href="{{ url()->previous() }}" class="btn btn-outline-primary">KEMBALI</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 fade" id="quiz" style="display: none;">
        <!-- Progress Bar -->
        <div class="progress mb-3">
            <div class="progress-bar" role="progressbar" style="width: 0%;" id="progress-bar">0%</div>
        </div>

        <div class="row">
            <!-- Bagian kiri: Soal, Timer, Jawaban -->
            <div class="col-md-9 order-1 order-md-0 mb-3">
                <div class="card">
                    <div class="d-flex justify-content-between card-header">
                        <div class="fw-semibold">EVALUASI</div>
                        <div class="text-danger fw-semibold"><i class="bi bi-stopwatch"></i> <span
                                id="timer">45:00</span></div>
                    </div>
                    <div class="card-body">
                        <div class="fw-semibold">
                            Soal No. <span id="current-question"></span>
                        </div>
                        <div class="soal-container" style="">
                            <p class="lh-lg" id="question-text">Soal</p>
                            <div class="mb-4" id="options-list"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary" id="btn-sebelumnya" onclick="prevQuestion()" disabled><i
                                    class="bi bi-chevron-double-left"></i>
                                Sebelumnya</button>
                            <button class="btn btn-primary" id="btn-berikutnya" onclick="nextQuestion()">Berikutnya <i
                                    class="bi bi-chevron-double-right"></i></button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Bagian kanan: Nomor Soal, Tombol Selesai -->
            <div class="col-md-3 order-0 order-md-1 mb-3">
                <div class="card">
                    <div class="card-header fw-semibold">Nomor Soal</div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-center gap-2">
                            <div class="w-100 d-flex justify-content-center gap-2">
                                <button id="nav-question-1" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(0)">1</button>
                                <button id="nav-question-2" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(1)">2</button>
                                <button id="nav-question-3" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(2)">3</button>
                                <button id="nav-question-4" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(3)">4</button>
                                <button id="nav-question-5" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(4)">5</button>
                            </div>
                            <div class="w-100 d-flex justify-content-center gap-2 mt-2">
                                <button id="nav-question-6" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(5)">6</button>
                                <button id="nav-question-7" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(6)">7</button>
                                <button id="nav-question-8" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(7)">8</button>
                                <button id="nav-question-9" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(8)">9</button>
                                <button id="nav-question-10" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(9)">10</button>
                            </div>
                            <div class="w-100 d-flex justify-content-center gap-2 mt-2">
                                <button id="nav-question-11" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(10)">11</button>
                                <button id="nav-question-12" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(11)">12</button>
                                <button id="nav-question-13" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(12)">13</button>
                                <button id="nav-question-14" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(13)">14</button>
                                <button id="nav-question-15" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(14)">15</button>
                            </div>
                            <div class="w-100 d-flex justify-content-center gap-2 mt-2">
                                <button id="nav-question-16" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(15)">16</button>
                                <button id="nav-question-17" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(16)">17</button>
                                <button id="nav-question-18" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(17)">18</button>
                                <button id="nav-question-19" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(18)">19</button>
                                <button id="nav-question-20" class="btn btn-outline-primary nav-btn" style="width: 50px;"
                                    onclick="goToQuestion(19)">20</button>
                            </div>
                        </div>
                        <!-- Keterangan -->
                        <p class="fw-semibold mt-3">Keterangan:</p>
                        <div class="d-flex align-items-center gap-2">
                            <span class="btn btn-outline-primary"
                                style="width: 50px; height: 30px; pointer-events: none;"></span>
                            <span>Belum dijawab</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 mt-2">
                            <span class="btn btn-success" style="width: 50px; height: 30px; pointer-events: none;"></span>
                            <span>Sudah dijawab</span>
                        </div>
                        <button class="btn btn-danger mt-3 w-100" onclick="confirmFinishQuiz()">Selesai</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="result" class="text-center fade" style="display: none;">
        <div class="container">
            <div class="g-0 my-auto row justify-content-center">
                <div class="mx-auto col-lg-7">
                    <div class="text-center">
                        <h3 class="text-primary fw-semibold">EVALUASI</h3>
                        <hr class="my-4">
                    </div>
                    <div class="w-100 card">
                        <div class="p-3 text-center bg-white card-header">
                            <h5 class="m-0 fw-semibold card-title">HASIL KUIS</h5>
                        </div>
                        <div class="d-flex flex-column gap-4 card-body">
                            <div class="text-center">
                                <h5>WAKTU SELESAI</h5>
                                <p id="result-date">Hari & Tanggal:</p>
                                <p id="result-time">Waktu:</p>
                            </div>
                            <div class="text-center">
                                <h5>NILAI</h5>
                                <div id="result-score" class="h1 text-success">100</div>
                                <p id="correct-answers" class="small m-0">Jawaban benar:</p>
                                <p id="incorrect-answers" class="small m-0">Jawaban salah</p>
                            </div>
                            <div id="result-alert" role="alert"
                                class="fade text-center small alert alert-success show">
                                Selamat, skor kamu memenuhi untuk dapat lanjut ke materi berikutnya
                            </div>
                        </div>
                    </div>

                </div>
                <div class="d-flex justify-content-center p-3">
                    <button class="btn btn-outline-primary" onclick="restartQuiz()" id="btn_coba_lagi" style="display: none">Coba Lagi</button>
                    <a href="/modul-file-system/modul-file-system" class="btn btn-primary" id="btn_materi_berikutnya" style="display: none">KLAIM BADGE</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // ID nya adalah nomor soal
        // Tipe itu kondisi nanti di container nya
        // question masuk ke dalam soal
        // answer nanti di periksa oleh sistem

        let timer_quiz = document.getElementById("timer");

        
        const questions = [
        {
            "id": 0,
            "type": "multiple_choice",
            "question": "Apa sifat utama dari Node.js dalam menangani operasi asinkron?",
            "options": ["Multi-threaded", "Single-threaded", "Non-blocking", "Blocking"],
            "answer": 2,
            "userAnswer": null
        },
        {
            "id": 1,
            "type": "multiple_choice",
            "question": "Dalam lingkungan web, pemrograman sisi klien (frontend) mengacu pada?",
            "options": ["Kode yang mengatur sistem file", "Kode yang berjalan di server", "Kode yang diproses oleh browser pengguna", "Kode yang mengelola database"],
            "answer": 2,
            "userAnswer": null
        },
        {
            "id": 2,
            "type": "multiple_choice",
            "question": "Apa keuntungan utama menggunakan JavaScript baik di sisi klien maupun server?",
            "options": ["Meningkatkan keamanan data", "Mempermudah pengembangan dengan satu bahasa pemrograman", "Menghilangkan kebutuhan akan sistem database", "Memungkinkan pemrosesan lebih cepat"],
            "answer": 1,
            "userAnswer": null
        },
        {
            "id": 3,
            "type": "multiple_choice",
            "question": "Apa tujuan utama dari sesi REPL dalam Node.js?",
            "options": ["Mengonversi kode JavaScript menjadi bahasa mesin", "Mengembangkan tampilan antarmuka pengguna", "Menjalankan dan menguji kode JavaScript secara langsung", "Menjalankan skrip tanpa perlu interpreter"],
            "answer": 2,
            "userAnswer": null
        },
        {
            "id": 4,
            "type": "multiple_choice",
            "question": "Modul dalam Node.js berisi kumpulan dari?",
            "options": ["Fungsi dan objek", "Program dan database", "Interface dan API", "Style dan script"],
            "answer": 0,
            "userAnswer": null
        },
        {
            "id": 5,
            "type": "multiple_choice",
            "question": "Sebelum menggunakan modul dalam Node.js, apa yang harus dilakukan?",
            "options": ["Mengimpor modul dengan require()", "Menulis ulang kode dari awal", "Menginstal ulang Node.js", "Membuat variabel baru"],
            "answer": 0,
            "userAnswer": null
        },
        {
            "id": 6,
            "type": "multiple_choice",
            "question": "Apa yang dimaksud dengan Core Modules dalam Node.js?",
            "options": ["Modul yang dibuat oleh pengembang pihak ketiga", "Modul yang dikembangkan secara lokal", "Modul bawaan yang sudah tersedia dalam sistem Node.js", "Modul yang hanya dapat digunakan dalam proyek tertentu"],
            "answer": 2,
            "userAnswer": null
        },
        {
            "id": 7,
            "type": "multiple_choice",
            "question": "Bagaimana sebutan untuk modul yang secara langsung dikembangkan oleh programmer dalam Node.js?",
            "options": ["Modul bawaan (Core Modules)", "Modul lokal (Local Modules)", "Modul pihak ketiga (Third-party Modules)", "Modul asli (Native Modules)"],
            "answer": 1,
            "userAnswer": null
        },
        {
            "id": 8,
            "type": "multiple_choice",
            "question": "Perintah apa yang digunakan untuk menghapus paket yang telah diinstal melalui NPM?",
            "options": ["npm install [nama_paket]", "npm remove [nama_paket]", "npm uninstall [nama_paket]", "npm delete [nama_paket]"],
            "answer": 2,
            "userAnswer": null
        },
        {
            "id": 9,
            "type": "multiple_choice",
            "question": "Apa kepanjangan dari NPM dalam ekosistem Node.js?",
            "options": ["Node Package Management", "Node Programming Manager", "Node Package Manager", "Node Project Manager"],
            "answer": 2,
            "userAnswer": null
        },
        {
            "id": 10,
            "type": "multiple_choice",
            "question": "Perintah apa yang digunakan untuk memasang paket melalui NPM?",
            "options": ["npm start", "npm install [nama_paket]", "npm run install", "npm fetch [nama_paket]"],
            "answer": 1,
            "userAnswer": null
        },
        {
            "id": 11,
            "type": "multiple_choice",
            "question": "Apa perintah yang digunakan untuk menginisialisasi proyek baru dalam NPM?",
            "options": ["npm init", "npm create", "npm generate", "npm setup"],
            "answer": 0,
            "userAnswer": null
        },
        {
            "id": 12,
            "type": "multiple_choice",
            "question": "Apa fungsi utama dari EventEmitter dalam modul Event pada Node.js?",
            "options": ["Mengakses database", "Menangani serta memicu event dalam aplikasi", "Membuat koneksi jaringan", "Menambahkan file ke dalam sistem"],
            "answer": 1,
            "userAnswer": null
        },
        {
            "id": 13,
            "type": "multiple_choice",
            "question": "Apa fungsi utama dari modul Event dalam Node.js?",
            "options": ["Mengatur dan menangani event dalam aplikasi secara efektif.", "Menghubungkan aplikasi dengan database eksternal.", "Menjalankan proses secara sinkron.", "Memudahkan manipulasi sistem file."],
            "answer": 0,
            "userAnswer": null
        },
        {
            "id": 14,
            "type": "multiple_choice",
            "question": "Metode apa yang digunakan untuk memicu event pada EventEmitter?",
            "options": ["on()", "emit()", "once()", "removeListener()"],
            "answer": 1,
            "userAnswer": null
        },
        {
            "id": 15,
            "type": "multiple_choice",
            "question": "Apa tugas utama modul File System (FS) di Node.js?",
            "options": ["Mengelola sesi pengguna.", "Menangani permintaan HTTP.", "Mengakses dan mengelola file serta direktori pada sistem file.", "Mengatur koneksi jaringan."],
            "answer": 2,
            "userAnswer": null
        },
        {
            "id": 16,
            "type": "multiple_choice",
            "question": "Operasi apa saja yang dapat dilakukan menggunakan modul File System?",
            "options": ["Menghapus, membaca, menulis, dan mengubah file.", "Mengelola sesi pengguna.", "Menghasilkan data acak.", "Menangani koneksi server."],
            "answer": 0,
            "userAnswer": null
        },
        {
            "id": 17,
            "type": "multiple_choice",
            "question": "Mengapa modul File System sangat penting dalam pengembangan aplikasi Node.js?",
            "options": ["Memungkinkan program untuk mengelola koneksi ke server.", "Membantu aplikasi mengakses dan mengelola data dalam disk secara efisien.", "Menghubungkan aplikasi dengan database eksternal.", "Mengatur interaksi antara program dan pengguna."],
            "answer": 1,
            "userAnswer": null
        },
        {
            "id": 18,
            "type": "multiple_choice",
            "question": "Apa fungsi utama dari modul HTTP dalam Node.js?",
            "options": ["Mengelola sesi pengguna", "Memproses permintaan dan respons HTTP", "Menghubungkan aplikasi dengan basis data", "Memproses data dalam format gambar"],
            "answer": 1,
            "userAnswer": null
        },
        {
            "id": 19,
            "type": "multiple_choice",
            "question": "Apa tujuan utama dari HyperText Transfer Protocol (HTTP)?",
            "options": ["Mengatur komunikasi antara server dan klien dalam jaringan web", "Mengelola proses pengolahan data dalam sistem operasi", "Meningkatkan keamanan dalam transfer data di jaringan lokal", "Menghubungkan perangkat keras dengan aplikasi berbasis server"],
            "answer": 0,
            "userAnswer": null
        }
    ]



    </script>
    <script src="{{asset('script/evaluasi.js')}}"></script>
@endsection
