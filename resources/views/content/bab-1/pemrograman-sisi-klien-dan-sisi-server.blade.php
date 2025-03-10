@extends('layouts.base')

@section('container-base-content')

<h2>1.2 Pemrograman sisi klien dan sisi server</h2>

<p class="lh-lg">
    Pada aktivitas pemrograman, umumnya terbagi menjadi dua tipe. Pemrograman sisi klien (Frontend) merujuk pada semua kode yang di jalankan di browser pengguna. Mencakup elemen-elemen yang berinteraksi langsung dengan pengguna, seperti antarmuka pengguna (UI), desain, dan interaksi. Sedangkan pemrograman sisi server (Backend) merujuk pada kode yang dijalankan di server. Mencakup pengolahan data, interaksi dengan database, dan sistem file. Perbedaan dari pemrograman pada sisi klien (Frontend) dan pada sisi server (Backend) dapat dilihat pada ilustrasi gambar 2.
</p>
<img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{asset('img/ilustrasi Frontend dan Backend.png')}}" alt="Ilustrasi Pemrograman sisi klien dan sisi server">
<p class="lh-lg">
    JavaScript pada umumnya digunakan pada sisi klien, dengan adanya Node.js JavaScript dapat digunakan pada sisi server. Contoh penggunaan JavaScript pada sisi klien adalah Interaktivitas, Manipulasi DOM, EventListener, dan HTTP Request. Sedangkan penggunaan pada sisi server adalah akses memori, sistem file, input/output, dan jaringan.
</p>
<p class="lh-lg">
    Sehingga memberikan kemudahan dalam pengembangan aplikasi web di kedua sisi dengan menggunakan satu bahasa yang sama agar menciptakan aplikasi web yang lebih efisien dan responsif.
</p>
<div class="p-0 p-md-3 my-4 my-md-2" id="aktivitas">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 1.2</div>
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
    const bankSoal = [{
            soal: "Node.js merupakan runtime yang bersifat?",
            pilihan: ["Blocking", "Non-Blocking", "Single-threaded", "Multi-threaded"],
            benar: 1,
            penjelasan: "Non-Blocking ..."
        },
        {
            soal: "Apa mesin yang digunakan Node.js?",
            pilihan: ["V8", "SpiderMonkey", "Chakra", "Nitro"],
            benar: 0,
            penjelasan: "V8 Merupakan mesin yang digunakan oleh Node.js"
        },
        {
            soal: "Tahun berapa Node.js diciptakan?",
            pilihan: ["2005", "2009", "2013", "2017"],
            benar: 1,
            penjelasan: "Node.js diciptakan pada tahun 2009"
        },
        {
            soal: "Siapa yang menciptakan Node.js?",
            pilihan: ["Brenden Eich", "Ryan Dahl", "Linus Torvalds", "James Gosling"],
            benar: 1,
            penjelasan: "Ryan Dahl merupakan orang yang menciptakan Node.js"
        },
        {
            soal: "Bahasa apa yang digunakan dalam Node.js?",
            pilihan: ["JavaScript", "Python", "Ruby", "PHP"],
            benar: 0,
            penjelasan: "JavaScript merupakan bahasa yang digunakan dalam Node.js"
        }
    ]
</script>

@endsection