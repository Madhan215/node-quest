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
                                    <p class="mb-2 card-text">Waktu pengerjaan soal adalah 45 menit, terdapat timer pada
                                        bagian kanan atas.</p>
                                </li>
                                <li>
                                    <p class="mb-2 card-text">Laman kuis terbagi menjadi dua sisi. Pada sisi bagian kiri
                                        terdapat soal, progres dan navigasi. Pada sisi bagian kanan terdapat soal dan teks
                                        editor untuk menuliskan jawaban. Selalu tekan tombol simpan setelah menjawab soal.
                                    </p>
                                </li>
                                <li>
                                    <p class="mb-2 card-text">Jika seluruh soal sudah dikerjakan, tombol "SELESAI" aktif dan
                                        dapat diklik. Jika waktu pengerjaan soal habis maka laman soal akan otomatis
                                        tertutup dan akan diarahkan ke halaman hasil.</p>
                                </li>
                                <li>
                                    <p class="mb-2 card-text">Jika keluar ketika sedang mengerjakan kuis, semua jawaban yang
                                        sudah diketikkan tidak akan disimpan dan harus menjawab ulang dari awal.</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="text-center p-3">
                    <button type="button" class="me-2 btn btn-primary" id="mulai-kuis" onclick="startQuiz()">MULAI</button>
                    <button type="button" class="btn btn-outline-primary">KEMBALI</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 fade" id="quiz" style="display: none;">
        <!-- Progress Bar -->
        <div class="progress mb-3">
            <div class="progress-bar" role="progressbar" style="width: 10%;" id="progress-bar">10%</div>
        </div>

        <div class="row">
            <!-- Bagian kiri: Soal, Timer, Jawaban -->
            <div class="col-md-8 order-1 order-md-0 mb-3">
                <div class="card">
                    <div class="d-flex justify-content-between card-header">
                        <div class="fw-semibold">Kuis 1</div>
                        <div class="text-danger"><i class="bi bi-stopwatch"></i> 45:00</div>
                    </div>
                    <div class="card-body">
                        <div class="fw-semibold">
                            Soal No. <span id="nomor-soal"></span>
                        </div>
                        <div class="soal-container" style="">
                            <p class="lh-lg" id="soal">Soal</p>
                            <div class="mb-4" id="pilihanContainer"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary"><i class="bi bi-chevron-double-left"></i> Sebelumnya</button>
                            <button class="btn btn-primary">Berikutnya <i class="bi bi-chevron-double-right"></i></button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Bagian kanan: Nomor Soal, Tombol Selesai -->
            <div class="col-md-4 order-0 order-md-1 mb-3">
                <div class="card">
                    <div class="card-header">Nomor Soal</div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-center gap-2">
                            <div class="w-100 d-flex justify-content-center gap-2">
                                <button class="btn btn-outline-primary" style="width: 50px;">1</button>
                                <button class="btn btn-outline-primary" style="width: 50px;">2</button>
                                <button class="btn btn-outline-primary" style="width: 50px;">3</button>
                                <button class="btn btn-outline-primary" style="width: 50px;">4</button>
                                <button class="btn btn-outline-primary" style="width: 50px;">5</button>
                            </div>
                            <div class="w-100 d-flex justify-content-center gap-2 mt-2">
                                <button class="btn btn-outline-primary" style="width: 50px;">6</button>
                                <button class="btn btn-outline-primary" style="width: 50px;">7</button>
                                <button class="btn btn-outline-primary" style="width: 50px;">8</button>
                                <button class="btn btn-outline-primary" style="width: 50px;">9</button>
                                <button class="btn btn-outline-primary" style="width: 50px;">10</button>
                            </div>
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
                                <p>Hari & Tanggal:</p>
                                <p>Waktu:</p>
                            </div>
                            <div class="text-center">
                                <h5>NILAI</h5>
                                <div class="h1 text-success">100</div>
                                <p class="small m-0">Jawaban benar:</p>
                                <p class="small m-0">Jawaban salah</p>
                            </div>
                            <div role="alert" class="fade text-center small alert alert-success show">Selamat, skor kamu memenuhi untuk dapat lanjut ke materi berikutnya</div>
                        </div>
                    </div>
                </div>
                <div class="text-center p-3">
                    <button class="btn btn-primary" onclick="restartQuiz()">Coba Lagi</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        let bank_kuis = {
            {
                {
                    "id": 1,
                    "type": "multiple_choice",
                    "question": "Node.js merupakan runtime yang bersifat?",
                    "options": ["Blocking", "Non-blocking", "Single-threaded", "Multi-threaded"],
                    "answer": "Non-blocking"
                }, {
                    "id": 2,
                    "type": "multiple_choice",
                    "question": "Apa manfaat utama dari menggunakan Node.js untuk pengembangan aplikasi berbasis server dibandingkan dengan bahasa pemrograman lain yang bersifat blocking (sinkronus)?",
                    "options": [
                        "Node.js memiliki fitur bawaan untuk memproses data besar tanpa perlu koneksi internet.",
                        "Node.js menggunakan pendekatan asinkronus yang memungkinkan eksekusi non-blocking, sehingga aplikasi dapat menangani banyak permintaan secara bersamaan tanpa menunggu operasi selesai.",
                        "Node.js hanya mendukung penulisan kode server dalam bahasa selain JavaScript.",
                        "Node.js memungkinkan pembuatan antarmuka pengguna (UI) yang kompleks langsung di sisi server tanpa menggunakan frontend."
                    ],
                    "answer": "Node.js menggunakan pendekatan asinkronus yang memungkinkan eksekusi non-blocking, sehingga aplikasi dapat menangani banyak permintaan secara bersamaan tanpa menunggu operasi selesai."
                }, {
                    "id": 3,
                    "type": "multiple_choice",
                    "question": "Apa yang dimaksud dengan pemrograman sisi klien (Frontend)?",
                    "options": [
                        "Kode yang dijalankan di server",
                        "Kode yang dijalankan di browser pengguna",
                        "Kode yang mengolah data di database",
                        "Kode yang mengatur sistem file"
                    ],
                    "answer": "Kode yang dijalankan di browser pengguna"
                }, {
                    "id": 4,
                    "type": "multiple_choice",
                    "question": "Mengapa JavaScript menjadi pilihan utama untuk pemrograman sisi klien?",
                    "options": [
                        "Karena dapat mengakses database secara langsung",
                        "Karena dapat digunakan untuk pemrograman sisi server",
                        "Karena dapat menciptakan interaktivitas dan manipulasi DOM",
                        "Karena tidak memerlukan koneksi internet"
                    ],
                    "answer": "Karena dapat menciptakan interaktivitas dan manipulasi DOM"
                }, {
                    "id": 5,
                    "type": "multiple_choice",
                    "question": "Apa keuntungan utama menggunakan JavaScript di kedua sisi (klien dan server)?",
                    "options": [
                        "Menggunakan dua bahasa yang sama di sisi klien dan server",
                        "Memungkinkan penggunaan bahasa pemrograman yang berbeda",
                        "Meningkatkan keamanan aplikasi web",
                        "Mengurangi kebutuhan akan database"
                    ],
                    "answer": "Menggunakan dua bahasa yang sama di sisi klien dan server"
                }, {
                    "id": 6,
                    "type": "multiple_choice",
                    "question": "Fungsi apa yang tidak termasuk dalam penggunaan JavaScript pada sisi server?",
                    "options": ["Akses memori", "Manipulasi DOM", "Sistem file", "Input/output"],
                    "answer": "Manipulasi DOM"
                }, {
                    "id": 7,
                    "type": "multiple_choice",
                    "question": "Apa yang menjadi fokus utama dari pemrograman sisi server (Backend)?",
                    "options": [
                        "Desain antarmuka pengguna",
                        "Interaksi langsung dengan pengguna",
                        "Pengolahan data dan interaksi dengan database",
                        "Pembuatan elemen visual di browser"
                    ],
                    "answer": "Pengolahan data dan interaksi dengan database"
                }, {
                    "id": 8,
                    "type": "short_answer",
                    "question": "Dengan menggunakan REPL, buatlah program yang menghasilkan output di konsol yang bertuliskan 'Belajar Node.js itu menyenangkan'.",
                    "answer": "console.log('Belajar Node.js itu menyenangkan');"
                }, {
                    "id": 9,
                    "type": "short_answer",
                    "question": "Buatlah fungsi dalam REPL untuk menentukan bilangan merupakan bilangan Prima atau bukan.",
                    "answer": "function isPrime(num) { if (num < 2) return false; for (let i = 2; i <= Math.sqrt(num); i++) { if (num % i === 0) return false; } return true; }"
                }, {
                    "id": 10,
                    "type": "short_answer",
                    "question": "Buatlah fungsi dalam REPL yang berisi rumus bangun datar persegi panjang, argumen yang dikirimkan merupakan bilangan.",
                    "answer": "function luasPersegiPanjang(p, l) { return p * l; }"
                }

            }

        }
    </script>
    <script>
        // ID nya adalah nomor soal
        // Tipe itu kondisi nanti di container nya
        // question masuk ke dalam soal
        // answer nanti di periksa oleh sistem

        const questions = [{
                "question": "Node.js merupakan runtime yang bersifat?",
                "options": ["Blocking", "Non-blocking", "Single-threaded", "Multi-threaded"],
                "answer": 1
            },
            {
                "question": "Apa manfaat utama dari menggunakan Node.js?",
                "options": ["Fitur bawaan untuk memproses data besar", "Pendekatan asinkronus non-blocking",
                    "Hanya mendukung bahasa selain JavaScript", "Pembuatan UI kompleks di server"
                ],
                "answer": 1
            }
        ];

        let currentQuestionIndex = 0;
        let score = 0;

        function showElement(elementId) {
            document.getElementById(elementId).style.display = "block";
            setTimeout(() => document.getElementById(elementId).classList.add("show"), 10);
            if (elementId == 'result' || elementId == "instructions") {
                setTimeout(() => document.getElementById(elementId).classList.add("d-flex"), 10);
                setTimeout(() => document.getElementById(elementId).classList.add("align-items-center"), 10);
                setTimeout(() => document.getElementById(elementId).classList.add("justifiy-content-center"), 10);
                setTimeout(() => document.getElementById(elementId).classList.add("vh-100"), 10);
            }

        }

        function hideElement(elementId) {
            setTimeout(() => document.getElementById(elementId).style.display = "none", 100);

            setTimeout(() => document.getElementById(elementId).classList.remove("show"), 100);
            setTimeout(() => document.getElementById(elementId).classList.remove("d-flex"), 100);
            setTimeout(() => document.getElementById(elementId).classList.remove("align-items-center"), 100);
            setTimeout(() => document.getElementById(elementId).classList.remove("justify-content-center"), 100);
            setTimeout(() => document.getElementById(elementId).classList.remove("vh-100"), 100);


            
        }

        function startQuiz() {
            hideElement("instructions");
            setTimeout(() => showElement("quiz"), 500);
            loadQuestion();
        }

        function loadQuestion() {
            const questionData = questions[currentQuestionIndex];
            document.getElementById("current-question").innerText = currentQuestionIndex + 1;
            document.getElementById("question-text").innerText = questionData.question;

            let optionsHtml = "";
            questionData.options.forEach((option, index) => {
                optionsHtml +=
                    `<li class='list-group-item'><input type='radio' name='answer' value='${index}'> ${option}</li>`;
            });
            document.getElementById("options-list").innerHTML = optionsHtml;
        }

        function nextQuestion() {
            if (currentQuestionIndex < questions.length - 1) {
                currentQuestionIndex++;
                loadQuestion();
            }
        }

        function prevQuestion() {
            if (currentQuestionIndex > 0) {
                currentQuestionIndex--;
                loadQuestion();
            }
        }

        function confirmFinishQuiz() {
            Swal.fire({
                title: "Apakah Anda yakin ingin menyelesaikan kuis?",
                text: "Pastikan Anda telah menjawab semua pertanyaan dengan benar!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Selesai!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    finishQuiz();
                }
            });
        }

        function finishQuiz() {
            hideElement("quiz");
            setTimeout(() => showElement("result"), 500);
            document.getElementById("score").innerText = score;
        }

        function restartQuiz() {
            currentQuestionIndex = 0;
            score = 0;
            hideElement("result");
            setTimeout(() => showElement("instructions"), 500);
        }
    </script>
@endsection
