@extends('layouts.base')

@section('container-base-content')
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <!-- Fancybox JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

    <h2>1.8 REPL (Read, Evaluate, Print, Loop)</h2>
    <p class="lh-lg">
        REPL merupakan singkatan dari Read Evaluate Print Loop. Ini merupakan lingkungan bahasa pemrograman yang berjalan di
        konsol window, cara kerjanya adalah mengambil ekspresi tunggal sebagai input dari pengguna dan mengembalikan
        hasilnya ke konsol setelah eksekusi. Sesi REPL berguna untuk pengujian atau debugging kode JavaScript secara cepat
        dan sederhana. Berikut cara untuk masuk kedalam REPL:
    </p>
    <ol class="list-group list-group-numbered">
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Untuk masuk pada sesi REPL, ketikkan perintah “node” pada Terminal:</div>

                <figure class="text-center mt-3">
                    <a href="{{ asset('img/bab1-7/no-17.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 19. Masuk sesi REPL">
                        <img class="img-fluid d-block mx-auto my-2 shadow" src="{{ asset('img/bab1-7/no-17.png') }}"
                            alt="Gambar 19. Masuk sesi REPL" style="max-height: 400px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 19. Masuk sesi REPL</figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Maka, akan masuk pada REPL dan menunggu untuk menerima perintah dari pengguna</div>

                <figure class="text-center">
                    <a href="{{ asset('img/bab1-7/no-18.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 20. Prompt menunggu perintah">
                        <img class="img-fluid d-block mx-auto my-2" src="{{ asset('img/bab1-7/no-18.png') }}"
                            alt="Gambar 20. Prompt menunggu perintah" style="max-height: 400px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 20. Prompt menunggu perintah</figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Mulai dengan input untuk menampilkan hello world dan ketik enter untuk menjalankan</div>

                <figure class="text-center mt-3">
                    <a href="{{ asset('img/bab1-7/no-19.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 21. Input sederhana">
                        <img class="img-fluid d-block mx-auto my-2 shadow" src="{{ asset('img/bab1-7/no-19.png') }}"
                            alt="Gambar 21. Input sederhana" style="max-height: 400px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 21. Input sederhana</figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Pada kode diatas REPL membaca (Read) kode yang dimasukkan pengguna, lalu melakukan evaluasi (Evaluate),
                    mencatak (Print) hasilnya, lalu kembali menunggu inputan dari pengguna untuk memasukkan bari kode
                    lainnya. Node akan mengulang (Loop) ketiga langkah tersebut untuk setiap baris kode yang di jalankan
                    dalam REPL hingga keluar pada sesi tersebut. Dari situlah konsep nama REPL dibuat.</div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Node secara otomatis mencetak hasil dari baris kode JavaScript mana pun tanpa perlu memberi instruksi
                    untuk melakukannya. Misalnya, ketik baris berikut dan tekan enter:</div>

                <figure class="text-center">
                    <a href="{{ asset('img/bab1-7/no-20.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 22. Otomatis mencetak hasil dari perbandingan">
                        <img class="img-fluid d-block mx-auto my-2 shadow" src="{{ asset('img/bab1-7/no-20.png') }}"
                            alt="Gambar 22. Otomatis mencetak hasil dari perbandingan" style="max-height: 400px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 22. Otomatis mencetak hasil dari perbandingan
                    </figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Dalam beberapa kondisi, kode yang dimasukkan memerlukan beberapa baris. Misalnya, ingin membuat sebuah
                    fungsi yang menghasilkan angka acak, dalam sesi REPL, tekan enter lalu ketikkan kode pada baris
                    selanjutnya.</div>

                <figure class="text-center">
                    <a href="{{ asset('img/bab1-7/no-21.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 23. Multi line code pada REPL">
                        <img class="img-fluid d-block mx-auto my-2 shadow" src="{{ asset('img/bab1-7/no-21.png') }}"
                            alt="Gambar 23. Multi line code pada REPL" style="max-height: 400px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 23. Multi line code pada REPL</figcaption>
                </figure>

                <div>Node REPL memiliki kepintaran untuk mengetahui bahwa kode tersebut belum selesai, dan akan masuk ke
                    dalam mode multi-line agar pengguna dapat melanjutkan pengetikkan kodenya. Untuk menyelesaikan cukup
                    dengan menutuf definisi fungsi tersebut lalu tekan enter.</div>

                <figure class="text-center mt-3">
                    <a href="{{ asset('img/bab1-7/no-22.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 24. Menyelesaikan multi line code">
                        <img class="img-fluid d-block mx-auto my-2 shadow" src="{{ asset('img/bab1-7/no-22.png') }}"
                            alt="Gambar 24. Menyelesaikan multi line code" style="max-height: 400px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 24. Menyelesaikan multi line code</figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Anda dapat keluar dari prompt REPL dengan mengetik .exit dan tekan tombol Enter.</div>
            </div>
        </li>
    </ol>
    <p class="fw-bold text-primary mt-2">
        1.8.1 Command dot REPL
    </p>
    <p class="lh-lg">
        REPL memiliki beberapa perintah khusus, semuanya dimulai dengan titik. Perintah-perintah tersebut adalah:
    </p>
    <ul class="list-group list-group-flush">
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex align-items-start">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1 fw-semibold">.help</p>
                    Menunjukkan bantuan perintah command dot.
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex align-items-start">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1 fw-semibold">.editor</p>
                    Mengaktifkan mode editor, untuk menulis kode JavaScript dengan mode multi-line dengan mudah. Setelah
                    Anda berada dalam mode ini, tekan ctrl-D untuk menjalankan kode yang Anda tulis.
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex align-items-start">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1 fw-semibold">.break</p>
                    Saat memasukkan ekspresi multi-line, memasukkan perintah .break akan membatalkan input selanjutnya. Sama
                    seperti menekan ctrl-C.
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex align-items-start">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1 fw-semibold">.clear</p>
                    Menyetel ulang konteks REPL ke objek kosong dan menghapus ekspresi multi-line yang sedang dimasukkan.
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex align-items-start">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1 fw-semibold">.load</p>
                    Memuat file JavaScript, relatif terhadap direktori kerja saat ini
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex align-items-start">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1 fw-semibold">.save</p>
                    Menyimpan semua yang Anda masukkan dalam sesi REPL ke dalam file (sebutkan nama file).
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex align-items-start">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1 fw-semibold">.exit</p>
                    Keluar dari sesi REPL (sama seperti menekan ctrl-C dua kali).
                </div>
            </div>
        </li>
    </ul>
    <div class="p-0 p-md-3 my-4 my-md-2" id="aktivitas">
        <div class="card">
            <div class="p-3 d-flex align-items-center justify-content-between card-header">
                <div class="mb-0 h6 fw-semibold card-title">Aktivitas 1.8</div>
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
        let stepId = 8;
        const penjelasanSalah =
            "Bukan merupakan jawaban, ayo cari dong jawaban yang benar. Kamu pasti bisa kamu hebat jangan menyerah sampai titik ini";
        const bankSoal = [{
                soal: "Dengan menggunakan REPL, buatlah program untuk menampilkan 'Hello World' di Console!",
                input: true,
                jawabanBenar: ["console.log('Hello World')", 'console.log("Hello World")'],
                penjelasan: "Untuk mencetak teks ke console di REPL, gunakan perintah console.log();"
            },
            {
                soal: "REPL Kepanjangan dari?",
                pilihan: [
                    "Run, Execute, Print, Loop",
                    "Read, Evaluate, Print, Loop",
                    "Read, Execute, Print, Loop",
                    "Read, Edit, Process, Loop"
                ],
                benar: 1,
                penjelasan: "REPL adalah singkatan dari Read, Evaluate, Print, Loop, yang merupakan lingkungan interaktif untuk menjalankan kode JavaScript."
            },
            {
                soal: "Tulis perintah untuk menampilkan daftar perintah dot pada REPL!",
                input: true,
                jawabanBenar: [".help"],
                penjelasan: "Perintah .help akan menampilkan daftar perintah dot yang tersedia di REPL."
            },
            {
                soal: "Sebutkan perintah dot untuk membersihkan REPL!",
                input: true,
                jawabanBenar: [".clear"],
                penjelasan: "Perintah .clear digunakan untuk membersihkan layar REPL dan menghapus semua variabel yang telah didefinisikan."
            },
            {
                soal: "Sebutkan perintah dot untuk keluar dari REPL!",
                input: true,
                jawabanBenar: [".exit"],
                penjelasan: "Perintah .exit digunakan untuk keluar dari lingkungan REPL."
            }
        ];
    </script>

    <script>
        Fancybox.bind("[data-fancybox]", {
            Toolbar: true, // Tampilkan toolbar
            animated: true, // Animasi transisi
        });
    </script>
@endsection
