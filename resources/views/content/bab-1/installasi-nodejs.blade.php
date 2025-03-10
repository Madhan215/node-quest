@extends('layouts.base')

@section('container-base-content')
    <h2>1.7 Installasi Node.js</h2>
    <p class="lh-lg">
        Dalam masing-masing browser terdapat program untuk menjalankan JavaScript, seperti pada Chrome yang memiliki mesin
        javascript yang bernama V8, pada Firefox dengan nama Spider Monkey, dan pada Internet Explorer dengan nama Chakra,
        demikian juga dengan browser-browser yang lain. Jadi Javascript tidak diinstallasi, tetapi Node.js merupakan
        lingkunga untuk menjalankan kode JavaScript di luar dan di dalam browser atau disebut dengan JavaScript Runtime,
        mirip dengan JRE (Java Runtime Environment) untuk bahasa pemrograman Java. Oleh karena itu, Node.js harus
        diinstalasi.
    </p>
    <p class="text-primary fw-semibold">
        Langkah-langkah Instalasi Node.js
    </p>
    <ol class="list-group list-group-numbered">
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Kunjungi website dari Node.js <a class="fw-semibold" href="https://nodejs.org/"
                        target="_blank">nodejs.org</a>, lalu download versi terbaru dari Node.js</div>
                <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/bab1-6/no-1.png') }}"
                    alt="Website Nodejs.org">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Klik “Download Node.js (LTS)”. LTS (Long Term Support) berarti versi tersebut memiliki dukungan jangka
                    panjang untuk kedannya.</div>
                <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/bab1-6/no-2.png') }}"
                    alt="Website Nodejs.org">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Setelah download selesai, klik dua kali aplikasinya untuk memulai proses intalasi</div>
                <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/bab1-6/no-3.png') }}"
                    alt="Website Nodejs.org">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Muncul jendela Welcome untuk menginstal Node.js di komputer, dan klik tombol Next.</div>
                <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/bab1-6/no-4.png') }}"
                    alt="Website Nodejs.org">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Muncul jendela End-User License Agreement dan checklist I Accept … lalu klik Next.</div>
                <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/bab1-6/no-5.png') }}"
                    alt="Website Nodejs.org">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Muncul jendela Destination Folder lalu klik Next.</div>
                <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/bab1-6/no-6.png') }}"
                    alt="Website Nodejs.org">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Muncul jendela Custom Setup lalu klik Next.</div>
                <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/bab1-6/no-7.png') }}"
                    alt="Website Nodejs.org">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Muncul jendela Tools for Native Modules dan klik kotak Automatically Install … lalu klik Next.</div>
                <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/bab1-6/no-8.png') }}"
                    alt="Website Nodejs.org">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Muncul jendela Ready to Install node.js lalu klik tombol Install.</div>
                <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/bab1-6/no-9.png') }}"
                    alt="Website Nodejs.org">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Proses installasi berlangsung seperti di bawah ini.</div>
                <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/bab1-6/no-10.png') }}"
                    alt="Website Nodejs.org">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Jika proses installasi berakhir dan sukses, muncul jendela Completed seperti di bawah ini.</div>
                <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/bab1-6/no-11.png') }}"
                    alt="Website Nodejs.org">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Klik tombol Finish, akan muncul informasi instalasi modules seperti gambar di bawah ini.</div>
                <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/bab1-6/no-12.png') }}"
                    alt="Website Nodejs.org">
            </div>
        </li>

        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Tekan tombol apa saja untuk melanjutkan.</div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Untuk memastikan Node.js terinstal dan berjalan dengan baik, buka command prompt dan ketik ‘node’
                    kemudian tekan Enter.</div>
                <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/bab1-6/no-14.png') }}"
                    alt="Website Nodejs.org">
            </div>
        </li>
    </ol>
    <p class="text-primary fw-semibold">
        Melihat versi Node dan NPM
    </p>
    <p class="lh-lg">
        Setelah menginstal Node.js, secara otomatis akan menginstal fitur NPM (Node.js Package Manager), fitur ini digunakan
        untuk manajemen paket Node.js, seperti PIP pada bahasa pemrograman Python.
    </p>
    <p class="lh-lg">
        Langkah-langkah melihat versi Node.js seperti di bawah ini:
    </p>
    <ol class="list-group list-group-numbered">
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Buka Command Prompt (CMD)</div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Kemudian ketik <code>node --version</code> dan tekan tombol Enter</div>
                <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/bab1-6/no-15.png') }}"
                    alt="Website Nodejs.org">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Untuk melihat versi npm, ketik <code>npm --version</code> lalu tekan tombol Enter</div>
                <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/bab1-6/no-16.png') }}"
                    alt="Website Nodejs.org">
            </div>
        </li>
    </ol>
    <div class="p-0 p-md-3 my-4 my-md-2" id="aktivitas">
        <div class="card">
            <div class="p-3 d-flex align-items-center card-header">
                <div class="mb-0 h6 fw-semibold card-title">Aktivitas 1.7</div>
            </div>
            <div class="card-body">
                <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis
                    berikut ini dengan baik dan benar!</p>
                <p class="fw-semibold bg-primary text-white p-2 rounded card-text">
                    Pertanyaan <span id="noSoal">1</span> dari <span id="totalSoal">1</span>
                </p>
                <div class="soal-container" style="height: 40vh; overflow-y: auto;">
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
        const penjelasanSalah = "bukan merupakan jawaban, ayo ulangi dan cari jawaban yang benar!";
        const bankSoal = [{
                soal: "Apa alamat website resmi dari Node.js?",
                pilihan: [
                    "nodejs.net",
                    "nodejs.org",
                    "npmjs.com",
                    "nodejs.com"
                ],
                benar: 1,
                penjelasan: "Website resmi Node.js adalah nodejs.org, tempat untuk mengunduh Node.js dan mendapatkan dokumentasi resmi."
            },
            {
                soal: "Versi yang mendapatkan dukungan jangka panjang disebut apa?",
                pilihan: [
                    "ALPHA",
                    "BETA",
                    "LTS",
                    "RC"
                ],
                benar: 2,
                penjelasan: "LTS (Long-Term Support) adalah versi Node.js yang mendapatkan dukungan jangka panjang dan lebih stabil untuk produksi."
            },
            {
                soal: "Kenapa Node.js harus diinstall?",
                pilihan: [
                    "Karena Node.js adalah lingkungan runtime yang memungkinkan eksekusi JavaScript di server, dan tidak dapat digunakan tanpa aplikasi.",
                    "Karena Node.js hanya berfungsi di browser dan tidak memerlukan installasi tambahan.",
                    "Karena Node.js hanya digunakan untuk pengembangan aplikasi desktop, bukan untuk aplikasi web atau server.",
                    "Karena Node.js menyediakan pustaka standar yang dibutuhkan oleh sistem operasi untuk menjalankan aplikasi desktop."
                ],
                benar: 0,
                penjelasan: "Node.js adalah runtime JavaScript yang berjalan di luar browser dan digunakan untuk membangun aplikasi server-side."
            },
            {
                soal: "Tulis perintah untuk memeriksa versi dari Node.js yang terinstall!",
                input: true,
                jawabanBenar: ["node -v", "node --version"],
                penjelasan: "Gunakan perintah `node -v` atau `node --version` di terminal untuk mengecek versi Node.js yang terinstall."
            },
            {
                soal: "Tulis perintah untuk memeriksa versi dari npm yang terinstall!",
                input: true,
                jawabanBenar: ["npm -v", "npm --version"],
                penjelasan: "Gunakan perintah `npm -v` atau `npm --version` di terminal untuk mengecek versi npm yang terinstall."
            }
        ];
    </script>
@endsection
