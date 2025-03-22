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
                        <h3 class="text-primary fw-semibold">KUIS 6</h3>
                        <h5>Modul HTTP</h5>
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
                                <li>
                                    <p class="mb-2 card-text">Jika kuis telah memenuhi KKM, maka kuis tidak dapat dikerjakan lagi.</p>
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
    @else
        {{-- Disini Kalau sudah selesai --}}
        <div id="completed" class="text-center show fade d-flex align-items-center justifiy-content-center vh-100">
            <div class="container">
                <div class="g-0 my-auto row justify-content-center">
                    <div class="mx-auto col-lg-7">
                        <div class="text-center">
                            <h3 class="text-primary fw-semibold">KUIS 6</h3>
                        <h5>Modul HTTP</h5>
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
                                <div role="alert"
                                class="fade text-center small alert alert-success show">
                                Kamu telah selesai mengerjakan Kuis ini, selanjutnya kamu dapat mengerjakan evaluasi
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center p-3">
                        <a href="/evaluasi" class="btn btn-primary">Kerjakan Evaluasi</a>
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
                        <div class="fw-semibold">KUIS 6</div>
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
                        <h3 class="text-primary fw-semibold">KUIS 6</h3>
                        <h5>Modul HTTP</h5>
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
                                Selamat, skor kamu memenuhi untuk dapat mengerjakan evaluasi
                            </div>
                        </div>
                    </div>

                </div>
                <div class="d-flex justify-content-center p-3">
                    <button class="btn btn-outline-primary" onclick="restartQuiz()" id="btn_coba_lagi" style="display: none">Coba Lagi</button>
                    <a href="/evaluasi" class="btn btn-primary" id="btn_materi_berikutnya" style="display: none">Kerjakan Evaluasi</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        let stepId = 31;
        // ID nya adalah nomor soal
        // Tipe itu kondisi nanti di container nya
        // question masuk ke dalam soal
        // answer nanti di periksa oleh sistem

        let timer_quiz = document.getElementById("timer");

        const questions = [
    {
        "id": 0,
        "type": "multiple_choice",
        "question": "Apa kegunaan utama dari modul HTTP di Node.js?",
        "options": ["Mengelola sesi pengguna", "Menangani permintaan dan respons HTTP", "Menghubungkan aplikasi dengan database", "Memproses data gambar"],
        "answer": 1,
        "userAnswer": null
    },
    {
        "id": 1,
        "type": "multiple_choice",
        "question": "Mengapa Node.js menggunakan pendekatan event-driven dalam menangani request HTTP?",
        "options": ["Agar proses dapat berjalan secara bersamaan tanpa harus menunggu request lain selesai", "Untuk meningkatkan keamanan komunikasi antara server dan klien", "Untuk membatasi jumlah koneksi yang diterima oleh server", "Supaya setiap request diproses secara berurutan tanpa tumpang tindih"],
        "answer": 0,
        "userAnswer": null
    },
    {
        "id": 2,
        "type": "multiple_choice",
        "question": "Dalam arsitektur client-server berbasis HTTP, siapa yang memulai komunikasi terlebih dahulu?",
        "options": ["Server mengirimkan permintaan ke klien", "Klien mengirimkan permintaan ke server", "Klien dan server saling mengirim permintaan secara bersamaan", "Server mengambil data dari klien tanpa permintaan"],
        "answer": 1,
        "userAnswer": null
    },
    {
        "id": 3,
        "type": "multiple_choice",
        "question": "Apa peran utama dari HyperText Transfer Protocol (HTTP)?",
        "options": ["Mengatur komunikasi antara klien dan server di web", "Mengelola pengolahan data dalam sistem operasi", "Meningkatkan keamanan transfer data dalam jaringan lokal", "Menghubungkan perangkat keras dengan aplikasi server"],
        "answer": 0,
        "userAnswer": null
    },
    {
        "id": 4,
        "type": "multiple_choice",
        "question": "Fungsi dari http.createServer() dalam Node.js adalah:",
        "options": ["Menghubungkan Node.js dengan database", "Membuat server yang dapat menangani permintaan HTTP", "Menghapus file dari sistem file", "Memproses data JSON dalam aplikasi web"],
        "answer": 1,
        "userAnswer": null
    },
    {
        "id": 5,
        "type": "multiple_choice",
        "question": "Bagaimana cara menangani permintaan GET dengan query parameter di server Node.js?",
        "options": ["Menggunakan fungsi fs.readFile() untuk mengambil data dari file", "Memanfaatkan querystring atau URL module untuk memproses req.url", "Menggunakan metode http.getParameter() untuk membaca parameter query", "Menjalankan fungsi http.createServer() dengan tambahan opsi khusus"],
        "answer": 1,
        "userAnswer": null
    },
    {
        "id": 6,
        "type": "multiple_choice",
        "question": "Apa yang terjadi jika status kode HTTP tidak disetel dengan benar di respons server?",
        "options": ["Klien mungkin tidak memahami apakah permintaannya berhasil atau gagal", "Server akan secara otomatis menampilkan halaman error 404", "Data yang dikirim oleh server akan selalu diterima oleh klien tanpa error", "Koneksi antara server dan klien akan langsung terputus"],
        "answer": 0,
        "userAnswer": null
    },
    {
        "id": 7,
        "type": "multiple_choice",
        "question": "Apa kepanjangan dari HTTP dalam konteks jaringan?",
        "options": ["Hypertext Transfer Protocol", "Hyperlink Transmission Process", "Hyper Data Transfer Page", "Hypertext Tracking Protocol"],
        "answer": 0,
        "userAnswer": null
    },
    {
        "id": 8,
        "type": "multiple_choice",
        "question": "Apa yang ditunjukkan oleh status kode HTTP 200?",
        "options": ["Permintaan berhasil dan server mengirimkan respons yang diharapkan", "Permintaan tidak valid atau salah format", "Server sedang mengalami kesalahan internal", "Sumber daya tidak ditemukan di server"],
        "answer": 0,
        "userAnswer": null
    },
    {
        "id": 9,
        "type": "multiple_choice",
        "question": "Mengapa penting untuk menggunakan status kode pada respons HTTP?",
        "options": ["Agar server dapat berjalan lebih cepat", "Untuk memberi tahu klien apakah permintaan berhasil atau gagal", "Supaya server dapat menyimpan data permintaan dalam database", "Untuk menghindari serangan keamanan dari klien"],
        "answer": 1,
        "userAnswer": null
    }
];

    </script>
    <script src="{{asset('script/kuis.js')}}"></script>
@endsection
