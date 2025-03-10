@extends('layouts.base')

@section('container-base-content')

<h1 class="mb-2">Module</h1>
<div class="p-0 p-md-3 my-4 my-md-2">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">
                <i class="bi bi-book"></i> Tujuan Pembelajaran
            </div>
        </div>
        <div class="card-body">
            <p class="m-0 card-text">
                Setelah menyelesaikan materi pada bab ini, mahasiswa diharapkan mampu
            </p>
            <ul class="list-group list-group-flush">
                <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                    <div class="d-flex align-items-start">
                        <span class="h5 me-2 mb-0 p-0">•</span>
                        Memahami konsep dan sistem modul pada Node.js
                    </div>
                </li>
                <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                    <div class="d-flex align-items-start">
                        <span class="h5 me-2 mb-0 p-0">•</span>
                        Mampu menggunakan modul bawaan pada Node.js
                    </div>
                </li>
                <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                    <div class="d-flex align-items-start">
                        <span class="h5 me-2 mb-0 p-0">•</span>
                        Mampu membuat modul secara lokal pada Node.js
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<h2>2.1 Pengertian Modul pada Node.js</h2>
<p class="lh-lg">
    Modul pada Node.js mirip  dengan Library pada JavaScript, yaitu kumpulan fungsi yang dapat digunakan dalam aplikasi. Modul ini dapat mencakup fungsi, objek, dan variabel. Sehingga dengan adanya Modul, pengguna tidak perlu membuat fungsi tersebut dari awal. Sebelum menggunakan modul, terlebih dahulu perlu di-import kedalam file program yang dibuat. Modul Node.js berisi fungsionalitas komplek yang tersimpan dalam file JavaScript. Setiap modul Node.js memiliki konteksnya masing-masing, tidak dapat saling tercampur dengan modul lainnya dalam lingkup Global.
</p>
<h3>
    2.1.1 Jenis Modul di Node.js
</h3>
<p class="lh-lg">
    Node.js mempunyai tiga jenis modul, yaitu:
</p>
<ol class="list-group list-group-numbered">
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <p class="text-primary m-0">Core Moduls</p>
            <p>Modul bawaan yang ada pada sistem Node.js, cara menggunakannya langsung dengan menggunakan fungsi require(). Contoh modul ini: fs, http, os, dan lain-lain.</p> 
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <p class="text-primary m-0">Local Moduls</p>
            <p>Modul yang dibuat oleh pengembang, biasanya memakai perintah exports untuk meng-ekspor program yang telah dibuat agar dapat digunakan pada program atau script lain.</p> 
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <p class="text-primary m-0">Third Party Moduls</p>
            <p>Modul ini dibuat oleh pihak ke tiga, yang dapat dipakai pada script Node.js. Sebagai contoh: moments, dev, global, dan lainnya. Modul ini disebut juga dengan NPM (Node Package Manager) yang akan dipelajari secara mendalam di BAB 3.</p> 
        </div>
    </li>
</ol>
<div class="p-0 p-md-3 my-4 my-md-2" id="aktivitas">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 2.1</div>
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
    const penjelasanSalah = "Bukan merupakan jawaban, ayo cari dong jawaban yang benar. Kamu pasti bisa kamu hebat jangan menyerah sampai titik ini";
    const bankSoal = [
    {
        soal: "Modul pada Node.js merupakan kumpulan dari …",
        pilihan: [
            "Program dan Database",
            "Fungsi dan Objek",
            "Interface dan API",
            "Style dan Script"
        ],
        benar: 1,
        penjelasan: "Modul pada Node.js terdiri dari kumpulan fungsi dan objek yang dapat digunakan kembali dalam aplikasi."
    },
    {
        soal: "Sebelum menggunakan modul di Node.js, langkah yang harus dilakukan oleh pengguna adalah …",
        pilihan: [
            "Membuat Variabel Baru",
            "Menulis ulang seluruh kode",
            "Mengimpor modul menggunakan require()",
            "Menginstal ulang Node.js"
        ],
        benar: 2,
        penjelasan: "Untuk menggunakan modul di Node.js, pengguna harus mengimpornya dengan require()."
    },
    {
        soal: "Modul bawaan yang sudah tersedia di dalam sistem Node.js dikenal sebagai … Modules.",
        pilihan: [
            "Native",
            "Core",
            "External",
            "Custom"
        ],
        benar: 1,
        penjelasan: "Modul bawaan yang disediakan oleh Node.js disebut Core Modules."
    },
    {
        soal: "Modul Node.js yang dibuat oleh pengembang disebut … Modules.",
        pilihan: [
            "Core",
            "Local",
            "Third-party",
            "Native"
        ],
        benar: 1,
        penjelasan: "Modul yang dibuat oleh pengembang sendiri disebut Local Modules."
    },
    {
        soal: "Modul Node.js yang dibuat oleh pihak ketiga disebut … Modules.",
        pilihan: [
            "Third-party",
            "Core",
            "User-defined",
            "Built-in"
        ],
        benar: 0,
        penjelasan: "Modul yang dikembangkan oleh pihak ketiga dan dapat diunduh melalui npm disebut Third-party Modules."
    }
];

</script>
@endsection