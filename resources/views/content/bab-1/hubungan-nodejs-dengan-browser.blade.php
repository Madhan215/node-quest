@extends('layouts.base')

@section('container-base-content')
    <h2>1.5 Hubungan Node.js dengan Browser</h2>
    <p class="lh-lg">
        Browser dan Node.js menggunakan bahasa pemrograman yang sama, yaitu JavaScript. Namun, membangun aplikasi di Browser
        dan Node.js memiliki perbedaan. Ada beberapa perbedaan yang membuat pengguna harus menyesuaikan pengalaman
        pengembangan di antara keduanya.
    </p>
    <p class="lh-lg">
        Dari sudut pendang seorang Front End yang menggunakan JavaScript, kehadiran Node memberikan keuntungan yang sangat
        besar. Kemudahan dalam membangun sebuah aplikasi dengan menggabungkan sistem front end dan back end dalam satu
        bahasa.
    </p>
    <div class="card">
        <p class="text-primary text-center card-title h4">
            Yang berubah adalah ekosistemnya.
        </p>
    </div>
    <p class="lh-lg mt-2">
        Di browser, umumnya programmer hanya berinterkasi dengan menggunakan DOM (Document Object Model), atau API seperti
        Cookies. Dan hal tersebut tidak ada di dalam Node.js, karena dalam node tidak memiliki dokumen, window, dan semua
        objek yang disediakan oleh browser. Dan di browser tidak memiliki API yang disediakan dalam node seperti modul file
        sistem.
    </p>
    <p class="lh-lg">
        Perbedaan besar lainnya adalah, dengan Node.js dapat mengendalikan lingkungan pengembangan. Dapat menggunakan versi
        Node.js mana yang digunakan dalam pengembangan aplikasi. Dibandingkan dengan browser yang tidak memiliki kemampuan
        untuk mengatur browser yang digunakan oleh pengunjung web.
    </p>
    <p class="lh-lg">
        Dengan menggunakan node, memungkinkan programmer untuk menggunakan JavaScript ES2015+ yang lebih modern. Karena
        perkembangan JavaScript begitu cepat, namun browser cenderung menggunakan ES dengan versi yang lebih lama.
        Programmer dapat menggunakan Kompiler Babel untuk menyesuaikan kode agar kompetibel dengan ES5 sebelum
        mengirimkannya ke Browser, tetapi di Node.js tidak memerlukan itu.
    </p>
    <p class="lh-lg">
        Perbedaan lainnya adalah Node.js mendukung sistem modul CommonJS dan ES (sejak Node.js v12), sementara di browser
        standar Modul ES sedang dalam implementasi. Yang berarti Programmer dapat menggunakan fungsi require() dan import di
        node.js, sementara impor memiliki keterbatasan di browser.
    </p>
    <div class="p-0 p-md-3 my-4 my-md-2" id="aktivitas">
        <div class="card">
            <div class="p-3 d-flex align-items-center justify-content-between card-header">
                <div class="mb-0 h6 fw-semibold card-title">Aktivitas 1.5</div>
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
        let stepId = 5;
        const penjelasanSalah = "bukan merupakan jawaban, ayo ulangi dan cari jawaban yang benar!";
        const bankSoal = [{
                soal: "Apa yang digunakan user untuk berinteraksi dengan Browser?",
                pilihan: [
                    "Console",
                    "User Interface (UI)",
                    "DOM",
                    "Command Line Interface"
                ],
                benar: 2,
                penjelasan: "DOM (Document Object Model) memungkinkan pengguna untuk berinteraksi dengan elemen-elemen dalam browser melalui JavaScript."
            },
            {
                soal: "Modul apa yang digunakan Node.js untuk berinteraksi dengan sistem?",
                pilihan: [
                    "path",
                    "http",
                    "fs (File System)",
                    "buffer"
                ],
                benar: 2,
                penjelasan: "Modul fs (File System) digunakan untuk berinteraksi dengan sistem file dalam Node.js."
            },
            {
                soal: "Kompiler apa yang digunakan JavaScript untuk dapat menjalankannya di Browser versi lama?",
                pilihan: [
                    "V8",
                    "Webpack",
                    "Babel",
                    "TypeScript"
                ],
                benar: 2,
                penjelasan: "Babel adalah transpiler yang mengubah kode JavaScript modern menjadi versi yang kompatibel dengan browser lama."
            },
            {
                soal: "Sistem modul apa yang mendukung Node.js?",
                pilihan: [
                    "ES Modules",
                    "AMD (Asynchronous Module Definition)",
                    "UMD",
                    "CommonJS"
                ],
                benar: 3,
                penjelasan: "CommonJS adalah sistem modul utama yang digunakan di Node.js sebelum mendukung ES Modules."
            },
            {
                soal: "Apa kepanjangan dari DOM?",
                pilihan: [
                    "Data Output Model",
                    "Document Object Model",
                    "Dynamic Object Model",
                    "Distributed Object Model"
                ],
                benar: 1,
                penjelasan: "DOM (Document Object Model) adalah representasi struktur dokumen HTML dan XML yang memungkinkan manipulasi elemen secara programatik."
            }
        ];
    </script>
@endsection
