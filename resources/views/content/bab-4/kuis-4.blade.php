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
    @if (!$isCompleted)
        <div id="instructions" class="fade show d-flex align-items-center justify-content-center vh-100">
            <div class="container">
                <div class="g-0 my-auto row justify-content-center">
                    <div class="mx-auto col-lg-7">
                        <div class="text-center">
                            <h3 class="text-primary fw-semibold">KUIS 4</h3>
                            <h5>Modul Event</h5>
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
                                        <p class="mb-2 card-text">Waktu pengerjaan soal adalah 20 menit, terdapat timer pada
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
                                        <p class="mb-2 card-text">Jika keluar ketika sedang mengerjakan kuis, semua jawaban
                                            yang
                                            sudah dikerjakan tidak akan disimpan dan harus menjawab ulang dari awal.</p>
                                    </li>
                                    <li>
                                        <p class="mb-2 card-text">Jika kuis telah memenuhi KKM, maka kuis tidak dapat
                                            dikerjakan lagi.</p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="text-center p-3">
                        <button type="button" class="me-2 btn btn-primary" id="mulai-kuis"
                            onclick="startQuiz()">MULAI</button>
                        <a href="{{ url()->previous() }}" class="btn btn-outline-primary">KEMBALI</a>
                    </div>
                </div>
            </div>
        </div>
    @else
        {{-- Disini Kalau sudah selesai --}}
        <div id="completed" class="text-center show fade d-flex align-items-center justifiy-content-center vh-100">
            <div class="container">
                <div class="g-0 my-auto row justify-content-center">
                    <div class="mx-auto col-lg-7">
                        <div class="text-center">
                            <h3 class="text-primary fw-semibold">KUIS 4</h3>
                            <h5>Modul Event</h5>
                            <hr class="my-4">
                        </div>
                        <div class="w-100 card">
                            <div class="p-3 text-center bg-white card-header">
                                <h5 class="m-0 fw-semibold card-title">HASIL KUIS</h5>
                            </div>
                            <div class="d-flex flex-column gap-4 card-body">
                                <div class="text-center">
                                    <h5>WAKTU SELESAI</h5>
                                    <p>{{ $dataKuis->completed_at }}</p>
                                </div>
                                <div class="text-center">
                                    <h5>NILAI</h5>
                                    <div id="completed-score" class="h1 text-success">
                                        {{ ($dataKuis->point_earned / 2) * 10 }}</div>
                                </div>
                                <div role="alert" class="fade text-center small alert alert-success show">
                                    Kamu telah selesai mengerjakan Kuis ini, silahkan mempelajari materi berikutnya
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center p-3">
                        <a id="rangkumanBtn" class="btn btn-primary">Rangkuman</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
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
                        <div class="fw-semibold">KUIS 4</div>
                        <div class="text-danger fw-semibold"><i class="bi bi-stopwatch"></i> <span
                                id="timer">20:00</span></div>
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
                        <h3 class="text-primary fw-semibold">KUIS 4</h3>
                        <h5>Modul Event</h5>
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
                    <button class="btn btn-outline-primary" onclick="restartQuiz()" id="btn_coba_lagi"
                        style="display: none">Coba Lagi</button>
                    <a class="btn btn-primary" id="rangkumanBtn" style="display: none">Rangkuman</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        let stepId = 23;
        // ID nya adalah nomor soal
        // Tipe itu kondisi nanti di container nya
        // question masuk ke dalam soal
        // answer nanti di periksa oleh sistem

        let timer_quiz = document.getElementById("timer");

        const questions = [{
                "id": 0,
                "type": "multiple_choice",
                "question": "Apa peran utama EventEmitter dalam modul Event di Node.js?",
                "options": ["Untuk mengakses database.", "Untuk menangani dan memicu event dalam aplikasi.",
                    "Untuk membuat koneksi jaringan.", "Untuk menambahkan file dalam sistem."
                ],
                "answer": 1,
                "userAnswer": null
            },
            {
                "id": 1,
                "type": "multiple_choice",
                "question": "Metode mana yang digunakan untuk memicu event dalam EventEmitter?",
                "options": ["on()", "emit()", "once()", "removeListener()"],
                "answer": 1,
                "userAnswer": null
            },
            {
                "id": 2,
                "type": "multiple_choice",
                "question": "Bagaimana cara menggunakan listener satu kali saja untuk sebuah event tertentu?",
                "options": ["Menggunakan metode emit.", "Menggunakan metode removeListener.",
                    "Menggunakan metode once.", "Menggunakan metode on."
                ],
                "answer": 2,
                "userAnswer": null
            },
            {
                "id": 3,
                "type": "multiple_choice",
                "question": "Apa manfaat dari menggunakan modul Event dalam aplikasi Node.js?",
                "options": ["Mengelola event secara asinkron tanpa memblokir thread utama.",
                    "Meningkatkan struktur dan modularitas kode",
                    "Memungkinkan komunikasi berbasis event dalam aplikasi.", "Semua jawaban benar."
                ],
                "answer": 3,
                "userAnswer": null
            },
            {
                "id": 4,
                "type": "multiple_choice",
                "question": "Apa fungsi dari removeListener dalam modul Event?",
                "options": ["Menambah listener baru ke event.", "Menghapus listener yang terdaftar pada suatu event.",
                    "Memicu event tertentu dalam aplikasi.", "Mengatur urutan event di dalam aplikasi."
                ],
                "answer": 1,
                "userAnswer": null
            },
            {
                "id": 5,
                "type": "multiple_choice",
                "question": "Apa tujuan utama dari modul Event dalam Node.js?",
                "options": ["Mengelola kejadian atau event dalam aplikasi secara efisien.",
                    "Menghubungkan aplikasi dengan basis data eksternal.",
                    "Menjalankan tugas-tugas secara sinkron.", "Mempermudah manipulasi file sistem."
                ],
                "answer": 0,
                "userAnswer": null
            },
            {
                "id": 6,
                "type": "multiple_choice",
                "question": "Dalam modul EventEmitter, bagaimana cara mendaftarkan event agar bisa dijalankan berkali-kali?",
                "options": ["Menggunakan metode once().", "Menggunakan metode on().", "Menggunakan metode emit().",
                    "Menggunakan metode removeListener()."
                ],
                "answer": 1,
                "userAnswer": null
            },
            {
                "id": 7,
                "type": "multiple_choice",
                "question": "Apa yang terjadi jika sebuah event tidak memiliki listener dalam EventEmitter?",
                "options": ["Event akan tetap dipicu tetapi tidak ada aksi yang dijalankan.",
                    "Event akan otomatis dibatalkan oleh Node.js.",
                    "Node.js akan menampilkan error dan menghentikan eksekusi program.",
                    "Event akan disimpan dalam antrean sampai listener tersedia."
                ],
                "answer": 0,
                "userAnswer": null
            },
            {
                "id": 8,
                "type": "multiple_choice",
                "question": "Dalam konteks EventEmitter, apa yang dilakukan oleh metode removeAllListeners()?",
                "options": ["Menghapus semua listener yang terdaftar untuk satu atau lebih event.",
                    "Menghapus hanya satu listener dari sebuah event.",
                    "Mencegah event untuk dipicu di masa mendatang.",
                    "Mengaktifkan kembali event yang telah dihapus sebelumnya."
                ],
                "answer": 0,
                "userAnswer": null
            },
            {
                "id": 9,
                "type": "multiple_choice",
                "question": "Apa yang terjadi jika metode emit() dipanggil sebelum listener didaftarkan?",
                "options": ["Event tetap dipicu, tetapi tidak ada kode yang dieksekusi.",
                    "Event akan secara otomatis menunggu hingga listener tersedia.",
                    "Node.js akan menampilkan pesan peringatan tetapi tetap melanjutkan eksekusi.",
                    "Program akan mengalami error dan berhenti berjalan."
                ],
                "answer": 0,
                "userAnswer": null
            }
        ];
    </script>
    <script src="{{ asset('script/kuis.js') }}"></script>
    <script>
        // Ketika tombol diklik, tampilkan SweetAlert
        document.getElementById('rangkumanBtn').addEventListener('click', function() {
            Swal.fire({
                title: 'Rangkuman BAB 4 <br> Modul Event',
                width: 800,
                html: `
            <p class="lh-lg">
                Selamat, kamu telah menyelesaikan semua materi pada bab ini. Adapun rangkuman materi pada bab ini adalah sebagai berikut:
            </p>
            <ul style="text-align: left;">
                <li>Modul event digunakan dalam penerapan pemrograman asinkron di Node.js.</li>
                <li><strong>EventEmitter</strong> merupakan komponen utama dalam modul event yang memungkinkan Node.js menangani event secara efisien.</li>
                <li><strong>Event</strong> merupakan kejadian yang terjadi dalam aplikasi.</li>
                <li><strong>Listener</strong> merupakan fungsi yang akan dipanggil ketika event terjadi.</li>
                <li><strong>Emit</strong> merupakan fungsi yang digunakan untuk memicu event.</li>
                <li>Metode <code>on()</code> digunakan untuk menambahkan listener ke event.</li>
                <li>Metode <code>emit()</code> digunakan untuk memicu atau menjalankan event.</li>
                <li>Metode <code>once()</code> digunakan untuk menambahkan listener yang hanya berjalan satu kali.</li>
                <li>Metode <code>removeListener()</code> digunakan untuk menghapus listener.</li>
                <li>Dengan mengelola event menggunakan modul event, dapat meningkatkan performa aplikasi dan mengorganisasi alur kerja secara terstruktur.</li>
            </ul>
            `,
                confirmButtonText: 'Materi Berikutnya'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href =
                        '/modul-file-system/modul-file-system'; // Ganti sesuai rute materi berikutnya
                }
            });
        });
    </script>
@endsection
