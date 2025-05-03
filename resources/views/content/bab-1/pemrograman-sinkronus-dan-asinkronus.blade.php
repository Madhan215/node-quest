@extends('layouts.base')

@section('container-base-content')
    <h2 class="mb-2">1.4 Pemrograman Sinkronus dan Asinkronus</h2>
    <p class="lh-lg">
        Dalam pemrograman, model eksekusi dalam kode dibagi menjadi dua jenis yang disebut syncronous (sinkronus) dan
        asyncronous (asinkronus). Dua mode eksekusi pemrograman tersebut menentukan bagaimana program dalam menangani
        tugas-tugas yang memakan waktu, seperti operasi I/O (input/output), pengambilan data, atau operasi lainnya.
        Ilustrasi dari proses pemrograman sinkronus dan asinkronus dapat dilihat pada gambar 3.
    </p>
    <figure class="text-center">
        <img class="img-fluid d-block mx-auto"
            src="{{ asset('img/bab1-6/Ilustrasi Proses Pemrograman Sinkronus dan Asinkronus.png') }}"
            alt="Ilustrasi Proses Pemrograman Sinkronus dan Asinkronus" style="max-height: 400px;">
        <figcaption class="figure-caption text-center">
            Gambar 3. Ilustrasi Proses Pemrograman Sinkronus dan Asinkronus
        </figcaption>
    </figure>
    <p class="text-primary fw-semibold">
        1.4.1 Pemrograman Sinkronus
    </p>
    <p class="lh-lg">
        Pemrograman sinkronus adalah model dimana setiap baris kode dieksekusi satu persatu secara berurutan, umumnya dari
        atas lalu ke bawah. Model ini menunggu proses pada kode sebelum atau diatasnya untuk melanjutkan ke instruksi
        berikutnya. Sinkronus memiliki karakterisrik blocking yang berarti setiap operasi sebelumnya harus selesai sebelum
        program dapat melanjutkan ke operasi berikutnya. Jika suatu operasi membutuhkan waktu yang lama, maka seluruh
        program akan berhenti sampai operasi tersebut selesai.
    </p>
    <p class="text-primary fw-semibold">
        1.4.2 Pemrograman Asinkronus
    </p>
    <p class="lh-lg">
        Pemrograman Asinkronus adalah suatu model pemrograman yang memungkinkan suatu program untuk melakukan banyak tugas
        secara bersamaan tanpa harus menunggu proses lainnya selesai. Konsep berikut juga menjadi pendukung dalam
        mempelajari Node.js, yang merupakan salah satu bagian mendasar dari Node.js, diantaranya:
    </p>
    <ul class="list-group list-group-flush">
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex align-items-start">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1">Pemrograman Asinkron dan Callbacks</p>
                    Metode pemrograman ini memungkinkan suatu kode untuk mengeksekusi operasi yang memerlukan waktu tanpa
                    menghentikan atau menghambat proses lainnya. Yang berarti setiap kode dapat terus berjalan tanpa
                    menunggu proses lainnya untuk selesai. Callbacks merupakan fungsi yang diteruskan sebagai argumen ke
                    fungsi lain yang dipanggil setelah operasi asinkron selesai.
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex align-items-start">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1">Timers</p>
                    Timers merupakan fungsi dari Javascript yang memungkinkan pengguna untuk mengatur waktu pada kode
                    seperti menjalankan setelah watku tertentu menggunakan fungsi setTimeout, dan menjalankan berulang pada
                    interval tertentu menggunakan setInterval
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex align-items-start">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1">Promises</p>
                    Promises digunakan untuk menangani hasil dari proses asinkron yang memiliki kemungkinan berhasil atau
                    gagal. Menggunakan fungsi then dan catch yang akan menangani hasil atau kegagalan.
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex align-items-start">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1">Async and Await</p>
                    Merupakan cara yang lebih sederhana dalam menangani promise. Fungsi async secara otomatis akan
                    mengembalikan promise dan fungsi await digunakan untuk menunggu Promise selesai.
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex align-items-start">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1">Closures</p>
                    Merupakan sebuah fungsi yang dapat mengingat variabel dari lingkup tempatnya didefinisikan, meskipun
                    fungsi tersebut didefinisikan diluar lingkup tersebut.
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex align-items-start">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1">Event Loop</p>
                    Event Loop merupakan mekanisme yang memungkinkan Javascript untuk menangani operasi asinkron secara
                    efisien. Dengan tetap bisa menangani operasi yang membatuhkan waktu lama tanpa memblokir eksekusi dari
                    kode lainnya.
                </div>
            </div>
        </li>
    </ul>
    <p class="text-primary fw-semibold mt-2">
        1.4.3 Perbandingan Pemrograman Sinkoronus dan Asinkronus
    </p>
    <p class="lh-lg">
        Berikut perbandingan dari pemrograman sinkronus dan asinkronus, dapat dilihat pada tabel 1.
    </p>
    <table class="table table-striped mx-auto" style="max-width: 800px;">
        <caption class="text-center">Tabel 1. Perbandingan Pemrograman Sinkronus dan Asinkronus</caption>
        <thead class="fw-semibold">
            <tr>
                <th>Karakteristik</th>
                <th>Sinkronus</th>
                <th>Asinkronus</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="fw-semibold">Eksekusi</td>
                <td>Blocking, menunggu proses sebelumnya selesai</td>
                <td>Non-blocking, melanjutkan semua proses tanpa menunggu proses lain selesai</td>
            </tr>
            <tr>
                <td class="fw-semibold">Alur Kode</td>
                <td>Linear, umumnya baris kode dieksekusi dari atas ke bawah</td>
                <td>Non-linear, eksekusi dapat dilakukan secara menyimpang tergantung lama proses yang dilakukan</td>
            </tr>
            <tr>
                <td class="fw-semibold">Kompleksitas</td>
                <td>Cenderung lebih mudah dipahami</td>
                <td>Lebih sulit dipahami karena merupakan pembelajaran lebih lanjut</td>
            </tr>
            <tr>
                <td class="fw-semibold">Penggunaan</td>
                <td>Cocok digunakan untuk operasi yang cepat</td>
                <td>Cocok untuk operasi yang memakan waktu lama</td>
            </tr>
        </tbody>
    </table>

    <p class="lh-lg">
        Dengan memahami perbedaan dari dua modul pemrograman tersebut, diharapkan dapat mengembangkan aplikasi yang modern,
        terutama pada saat mengerjakan operasi yang melibatkan interaksi dengan server atau sistem eksternal.
    </p>
    <div class="p-0 p-md-3 my-4 my-md-2" id="aktivitas">
        <div class="card">
            <div class="p-3 d-flex align-items-center justify-content-between card-header">
                <div class="mb-0 h6 fw-semibold card-title">Aktivitas 1.4</div>
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
        let stepId = 4;
        const penjelasanSalah = "bukan merupakan jawaban, ayo ulangi dan cari jawaban yang benar!";
        const bankSoal = [{
                soal: "Apa yang membedakan eksekusi pemrograman sinkronus dengan pemrograman asinkronus dalam konteks operasi yang memakan waktu lama?",
                pilihan: [
                    "Sinkronus menunggu setiap proses selesai, sementara asinkronus melanjutkan proses lainnya tanpa menunggu.",
                    "Sinkronus memungkinkan eksekusi simultan dari beberapa proses, sedangkan asinkronus bersifat linear.",
                    "Pemrograman sinkronus lebih kompleks, sedangkan asinkronus lebih mudah untuk dipahami.",
                    "Pemrograman sinkronus menggunakan callbacks untuk menangani hasil, sementara asinkronus tidak memerlukan callback."
                ],
                benar: 0,
                penjelasan: "Sinkronus menjalankan proses satu per satu, sedangkan asinkronus memungkinkan proses berjalan tanpa harus menunggu proses sebelumnya selesai."
            },
            {
                soal: "Dalam pemrograman yang menggunakan Node.js, bagaimana cara yang tepat untuk mengelola operasi yang memakan waktu lama tanpa menghambat eksekusi kode lainnya?",
                pilihan: [
                    "Menggunakan loop secara berulang agar operasi selesai dalam satu proses.",
                    "Menggunakan fungsi callbacks agar fungsi lainnya dapat dipanggil setelah operasi selesai.",
                    "Menulis operasi secara sinkron agar seluruh program menunggu hingga selesai.",
                    "Menggunakan Promise tanpa fungsi then atau catch untuk menyelesaikan tugas secara bersamaan."
                ],
                benar: 1,
                penjelasan: "Callbacks memungkinkan Node.js untuk mengeksekusi operasi yang memakan waktu tanpa menghentikan eksekusi kode lainnya."
            },
            {
                soal: "Mengapa penggunaan teknik async dan await dianggap lebih efisien dibandingkan dengan menggunakan promise secara manual?",
                pilihan: [
                    "async dan await memperkenalkan mekanisme pengulangan yang membuat kode lebih cepat dieksekusi.",
                    "async dan await secara otomatis mengembalikan nilai tanpa perlu menangani status berhasil atau gagal.",
                    "async dan await menyederhanakan kode dengan memungkinkan eksekusi asinkronus tetap terlihat seperti eksekusi sinkronus.",
                    "async dan await menghilangkan kebutuhan untuk menggunakan event loop dalam pemrograman."
                ],
                benar: 2,
                penjelasan: "Async/Await membuat kode lebih mudah dibaca dan dipahami dibandingkan dengan penggunaan promise secara manual."
            },
            {
                soal: "Bagaimana fungsi Event Loop dalam JavaScript membantu untuk mengelola eksekusi kode dalam pemrograman asinkronus?",
                pilihan: [
                    "Event Loop mengeksekusi setiap kode secara sinkron, sehingga operasi asinkronus berjalan lebih cepat.",
                    "Event Loop hanya menangani operasi yang dilakukan dalam callback function.",
                    "Event Loop memungkinkan kode untuk tetap berjalan meskipun ada operasi yang memerlukan waktu lama, tanpa memblokir eksekusi kode lainnya.",
                    "Event Loop menghapus kode yang tidak diperlukan setelah proses asinkronus selesai."
                ],
                benar: 2,
                penjelasan: "Event Loop memungkinkan JavaScript menangani operasi asinkron tanpa menghentikan eksekusi kode lainnya."
            },
            {
                soal: "Dalam kasus apa seorang programmer memilih untuk tidak menggunakan teknik asinkronus, meskipun operasi yang dilakukan memerlukan waktu yang lama?",
                pilihan: [
                    "Ketika suatu kode membutuhkan hasil yang langsung dan urutan eksekusi harus dijaga secara ketat.",
                    "Ketika operasi dapat dilakukan dalam waktu singkat dan tidak berinteraksi dengan sumber daya eksternal.",
                    "Ketika perlu menangani beberapa operasi secara bersamaan tanpa perlu memprioritaskan satu tugas tertentu.",
                    "Ketika operasi dilakukan dengan data yang sangat besar dan memerlukan pembagian hasil secara paralel."
                ],
                benar: 0,
                penjelasan: "Dalam beberapa kasus, urutan eksekusi yang ketat diperlukan, sehingga sinkronisasi diperlukan untuk menghindari inkonsistensi."
            }
        ];
    </script>
@endsection
