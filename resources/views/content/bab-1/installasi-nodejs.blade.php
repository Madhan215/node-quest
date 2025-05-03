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
        1.7.1 Langkah-langkah Instalasi Node.js pada Windows
    </p>
    <ol class="list-group list-group-numbered">
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Kunjungi website dari Node.js <a class="fw-semibold" href="https://nodejs.org/"
                        target="_blank">nodejs.org</a>, lalu download versi terbaru (node-v20.17.0) tanggal 25/09/2024 dari
                    Situs Node.js</div>

                <figure class="text-center mt-4">
                    <a href="{{ asset('img/bab1-6/no-1.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 4. Website Nodejs.org">
                        <img class="img-fluid d-block mx-auto my-2 shadow" src="{{ asset('img/bab1-6/no-1.png') }}"
                            alt="Gambar 4. Website Nodejs.org" style="max-height: 400px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 4. Website Nodejs.org</figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Klik “Download Node.js (LTS)”. LTS (Long Term Support) berarti versi tersebut memiliki dukungan jangka
                    panjang untuk kedannya.</div>

                <figure class="text-center">
                    <a href="{{ asset('img/bab1-6/no-2.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 5. Download Node.js (LTS)">
                        <img class="img-fluid d-block mx-auto my-2 shadow" src="{{ asset('img/bab1-6/no-2.png') }}"
                            alt="Gambar 5. Download Node.js (LTS)" style="max-height: 300px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 5. Download Node.js (LTS)</figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Setelah download selesai, klik dua kali aplikasinya untuk memulai proses intalasi</div>

                <figure class="text-center">
                    <a href="{{ asset('img/bab1-6/no-3.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 6. Aplikasi Node.js">
                        <img class="img-fluid d-block mx-auto my-2 shadow" src="{{ asset('img/bab1-6/no-3.png') }}"
                            alt="Gambar 6. Aplikasi Node.js" style="max-height: 500px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 6. Aplikasi Node.js</figcaption>
                </figure>


            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Muncul jendela Welcome untuk menginstal Node.js di komputer, dan klik tombol Next.</div>

                <figure class="text-center">
                    <a href="{{ asset('img/bab1-6/no-4.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 7. Jendela Welcome Setup Node.js">
                        <img class="img-fluid d-block mx-auto my-2 shadow" src="{{ asset('img/bab1-6/no-4.png') }}"
                            alt="Gambar 7. Jendela Welcome Setup Node.js" style="max-height: 500px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 7. Jendela Welcome Setup Node.js</figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Muncul jendela End-User License Agreement dan checklist I Accept … lalu klik Next.</div>

                <figure class="text-center">
                    <a href="{{ asset('img/bab1-6/no-5.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 8. End User License">
                        <img class="img-fluid d-block mx-auto my-2" src="{{ asset('img/bab1-6/no-5.png') }}"
                            alt="Gambar 8. End User License" style="max-height: 500px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 8. End User License</figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Muncul jendela Destination Folder lalu klik Next.</div>

                <figure class="text-center">
                    <a href="{{ asset('img/bab1-6/no-6.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 9. Destinasi Installasi Node.js">
                        <img class="img-fluid d-block mx-auto my-2" src="{{ asset('img/bab1-6/no-6.png') }}"
                            alt="Gambar 9. Destinasi Installasi Node.js" style="max-height: 500px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 9. Destinasi Installasi Node.js</figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Muncul jendela Custom Setup lalu klik Next.</div>

                <figure class="text-center">
                    <a href="{{ asset('img/bab1-6/no-7.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 10. Jendela Custom Setup">
                        <img class="img-fluid d-block mx-auto my-2" src="{{ asset('img/bab1-6/no-7.png') }}"
                            alt="Gambar 10. Jendela Custom Setup" style="max-height: 500px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 10. Jendela Custom Setup</figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Muncul jendela Tools for Native Modules dan klik kotak Automatically Install … lalu klik Next.</div>

                <figure class="text-center">
                    <a href="{{ asset('img/bab1-6/no-8.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 11. Jendela Tools for Native Modules">
                        <img class="img-fluid d-block mx-auto my-2" src="{{ asset('img/bab1-6/no-8.png') }}"
                            alt="Gambar 11. Jendela Tools for Native Modules" style="max-height: 500px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 11. Jendela Tools for Native Modules</figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Muncul jendela Ready to Install node.js lalu klik tombol Install.</div>

                <figure class="text-center">
                    <a href="{{ asset('img/bab1-6/no-9.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 12. Jendela Siap Untuk Menginstall Node.js">
                        <img class="img-fluid d-block mx-auto my-2" src="{{ asset('img/bab1-6/no-9.png') }}"
                            alt="Gambar 12. Jendela Siap Untuk Menginstall Node.js" style="max-height: 500px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 12. Jendela Siap Untuk Menginstall Node.js
                    </figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Proses installasi berlangsung seperti di bawah ini.</div>

                <figure class="text-center">
                    <a href="{{ asset('img/bab1-6/no-10.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 13. Proses installasi berlangsung">
                        <img class="img-fluid d-block mx-auto my-2" src="{{ asset('img/bab1-6/no-10.png') }}"
                            alt="Gambar 13. Proses installasi berlangsung" style="max-height: 500px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 13. Proses installasi berlangsung</figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Jika proses installasi berakhir dan sukses, muncul jendela Completed seperti di bawah ini.</div>

                <figure class="text-center">
                    <a href="{{ asset('img/bab1-6/no-11.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 14. Proses installasi selesai">
                        <img class="img-fluid d-block mx-auto my-2" src="{{ asset('img/bab1-6/no-11.png') }}"
                            alt="Gambar 14. Proses installasi selesai" style="max-height: 500px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 14. Proses installasi selesai</figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Klik tombol Finish, akan muncul informasi instalasi modules seperti gambar di bawah ini.</div>

                <figure class="text-center">
                    <a href="{{ asset('img/bab1-6/no-12.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 15. Informasi Installasi Modul">
                        <img class="img-fluid d-block mx-auto my-2" src="{{ asset('img/bab1-6/no-12.png') }}"
                            alt="Gambar 15. Informasi Installasi Modul" style="max-height: 500px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 15. Informasi Installasi Modul</figcaption>
                </figure>
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

                <figure class="text-center mt-3">
                    <a href="{{ asset('img/bab1-6/no-14.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 16. Tampilan welcome to Node">
                        <img class="img-fluid d-block mx-auto my-2 shadow" src="{{ asset('img/bab1-6/no-14.png') }}"
                            alt="Gambar 16. Tampilan welcome to Node" style="max-height: 500px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 16. Tampilan welcome to Node</figcaption>
                </figure>

            </div>
        </li>
    </ol>
    <p class="text-primary fw-semibold">
        1.7.2 Melihat versi Node dan NPM
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

                <figure class="text-center">
                    <a href="{{ asset('img/bab1-6/no-15.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 17. Melihat versi node">
                        <img class="img-fluid d-block mx-auto my-2" src="{{ asset('img/bab1-6/no-15.png') }}"
                            alt="Gambar 17. Melihat versi node" style="max-height: 500px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 17. Melihat versi node</figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Untuk melihat versi npm, ketik <code>npm --version</code> lalu tekan tombol Enter</div>

                <figure class="text-center">
                    <a href="{{ asset('img/bab1-6/no-16.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 18. Melihat versi npm">
                        <img class="img-fluid d-block mx-auto my-2" src="{{ asset('img/bab1-6/no-16.png') }}"
                            alt="Gambar 18. Melihat versi npm" style="max-height: 500px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 18. Melihat versi npm</figcaption>
                </figure>

            </div>
        </li>
    </ol>
    <div class="p-0 p-md-3 my-4 my-md-2" id="aktivitas">
        <div class="card">
            <div class="p-3 d-flex align-items-center justify-content-between card-header">
                <div class="mb-0 h6 fw-semibold card-title">Aktivitas 1.7</div>
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
        let stepId = 7;
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

    <script>
        Fancybox.bind("[data-fancybox]", {
            Toolbar: true, // Tampilkan toolbar
            animated: true, // Animasi transisi
        });
    </script>
@endsection
