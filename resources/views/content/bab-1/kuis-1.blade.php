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
                        <h3 class="text-primary fw-semibold">KUIS 1</h3>
                        <h5>Pengenalan Node.js</h5>
                        <hr class="my-4">
                    </div>
                    <div class="w-100 card">
                        <div class="p-3 text-center bg-white card-header">
                            <h5 class="m-0 fw-semibold card-title">Petunjuk Pengerjaan Kuis</h5>
                        </div>
                        <div class="small card-body">
                            <ol class="mb-0">
                                <li>
                                    <p class="mb-2 card-text">Terdapat 10 soal pada kuis ini. Untuk memulai mengerjakan
                                        kuis, tekan tombol "MULAI".

                                    </p>
                                </li>
                                <li>
                                    <p class="mb-2 card-text">Waktu pengerjaan soal adalah 30 menit, terdapat timer pada
                                        bagian kanan atas.</p>
                                </li>
                                <li>
                                    <p class="mb-2 card-text">Laman kuis terbagi menjadi dua sisi. Pada sisi bagian kiri
                                        terdapat soal. Pada sisi bagian kanan terdapat nomor soal dan tombol "SELESAI".
                                    </p>
                                </li>
                                <li>
                                    <p class="mb-2 card-text">Jika sudah selesai tekan tombol "SELESAI". Jika waktu
                                        pengerjaan soal habis maka laman soal akan otomatis
                                        tertutup yang akan langsung diarahkan ke halaman hasil.</p>
                                </li>
                                <li>
                                    <p class="mb-2 card-text">Jika keluar ketika sedang mengerjakan kuis, semua jawaban yang
                                        sudah dikerjakan tidak akan disimpan dan harus menjawab ulang dari awal.</p>
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
                        <div class="fw-semibold">KUIS 1</div>
                        <div class="text-danger fw-semibold"><i class="bi bi-stopwatch"></i> <span
                                id="timer">30:00</span></div>
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
                        <h3 class="text-primary fw-semibold">KUIS 1</h3>
                        <h5>Pengenalan Node.js</h5>
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
                    <a href="/modul/pengertian-modul-pada-nodejs" class="btn btn-primary" id="btn_materi_berikutnya" style="display: none">Materi Berikutnya</a>
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

        const questions = [{
                "id": 0,
                "type": "multiple_choice",
                "question": "Node.js merupakan runtime yang bersifat?",
                "options": ["Blocking", "Non-blocking", "Single-threaded", "Multi-threaded"],
                "answer": 1,
                "userAnswer": null
            },
            {
                "id": 1,
                "type": "multiple_choice",
                "question": "Apa manfaat utama dari menggunakan Node.js untuk pengembangan aplikasi berbasis server dibandingkan dengan bahasa pemrograman lain yang bersifat blocking (sinkronus)?",
                "options": [
                    "Node.js memiliki fitur bawaan untuk memproses data besar tanpa perlu koneksi internet.",
                    "Node.js menggunakan pendekatan asinkronus yang memungkinkan eksekusi non-blocking, sehingga aplikasi dapat menangani banyak permintaan secara bersamaan tanpa menunggu operasi selesai.",
                    "Node.js hanya mendukung penulisan kode server dalam bahasa selain JavaScript.",
                    "Node.js memungkinkan pembuatan antarmuka pengguna (UI) yang kompleks langsung di sisi server tanpa menggunakan frontend."
                ],
                "answer": 1,
                "userAnswer": null
            },
            {
                "id": 2,
                "type": "multiple_choice",
                "question": "Apa yang dimaksud dengan pemrograman sisi klien (Frontend)?",
                "options": [
                    "Kode yang dijalankan di server",
                    "Kode yang dijalankan di browser pengguna",
                    "Kode yang mengolah data di database",
                    "Kode yang mengatur sistem file"
                ],
                "answer": 1,
                "userAnswer": null
            },
            {
                "id": 3,
                "type": "multiple_choice",
                "question": "Mengapa JavaScript menjadi pilihan utama untuk pemrograman sisi klien?",
                "options": [
                    "Karena dapat mengakses database secara langsung",
                    "Karena dapat digunakan untuk pemrograman sisi server",
                    "Karena dapat menciptakan interaktivitas dan manipulasi DOM",
                    "Karena tidak memerlukan koneksi internet"
                ],
                "answer": 2,
                "userAnswer": null
            },
            {
                "id": 4,
                "type": "multiple_choice",
                "question": "Apa keuntungan utama menggunakan JavaScript di kedua sisi (klien dan server)?",
                "options": [
                    "Menggunakan dua bahasa yang sama di sisi klien dan server",
                    "Memungkinkan penggunaan bahasa pemrograman yang berbeda",
                    "Meningkatkan keamanan aplikasi web",
                    "Mengurangi kebutuhan akan database"
                ],
                "answer": 0,
                "userAnswer": null
            },
            {
                "id": 5,
                "type": "multiple_choice",
                "question": "Fungsi apa yang tidak termasuk dalam penggunaan JavaScript pada sisi server?",
                "options": ["Akses memori", "Manipulasi DOM", "Sistem file", "Input/output"],
                "answer": 1,
                "userAnswer": null
            },
            {
                "id": 6,
                "type": "multiple_choice",
                "question": "Apa yang menjadi fokus utama dari pemrograman sisi server (Backend)?",
                "options": [
                    "Desain antarmuka pengguna",
                    "Interaksi langsung dengan pengguna",
                    "Pengolahan data dan interaksi dengan database",
                    "Pembuatan elemen visual di browser"
                ],
                "answer": 2,
                "userAnswer": null
            },
            {
                "id": 7,
                "type": "multiple_choice",
                "question": "Sesi REPL berguna untuk?",
                "options": [
                    "Menjalankan kode JavaScript secara langsung untuk pengujian atau debugging",
                    "Membuat tampilan antarmuka pengguna (UI) dalam JavaScript.",
                    "Mengubah kode JavaScript menjadi file executable tanpa perlu interpreter.",
                    "Mengompilasi kode JavaScript menjadi bahasa mesin."
                ],
                "answer": 0,
                "userAnswer": null
            },
            {
                "id": 8,
                "type": "multiple_choice",
                "question": "Lingkungan bahasa pemrograman yang berjalan di konsol Windows, cara kerjanya adalah mengambil ekspresi tunggal sebagai input dari pengguna dan mengembalikan hasilnya ke konsol setelah eksekusi disebut?",
                "options": [
                    "Compiler",
                    "Debugger",
                    "REPL",
                    "Framework"
                ],
                "answer": 2,
                "userAnswer": null
            },
            {
                "id": 9,
                "type": "multiple_choice",
                "question": "Dengan menggunakan REPL, perintah manakah yang digunakan untuk menampilkan output di konsol dengan tulisan 'Belajar Node.js itu menyenangkan'?",
                "options": [
                    "console.print(\"Belajar Node.js itu menyenangkan\")",
                    "echo \"Belajar Node.js itu menyenangkan\"",
                    "console.log(\"Belajar Node.js itu menyenangkan\")",
                    "print(\"Belajar Node.js itu menyenangkan\")"
                ],
                "answer": 2,
                "userAnswer": null
            }

        ];
    </script>
    <script src="{{asset('script/kuis.js')}}"></script>
@endsection
