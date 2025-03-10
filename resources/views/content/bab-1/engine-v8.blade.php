@extends('layouts.base')

@section('container-base-content')

<h2>1.6 Engine V8</h2>
<p class="lh-lg">
    Engine V8 adalah mesin yang mendukung performa dari Google Chrome. Mesin ini yang melakukan ekesekusi terhadap program JavaScript yang berjalan saat menjelajah Chrome. V8 memiki kemapuan untuk mengurai dan mengeksekusi kode JavaScript. Seperti DOM dan API Platform yang disediakan oleh browser.
</p>
<p class="lh-lg">
    Uniknya, mesin JavaScript tidak bergantung terhadap browser tempat mesin tersebut dihosting. Sehingga fitur utama ini memungkinkan munculnya Node.js yang didukung dengan V8 pada tahun 2009. Sehingga ekosistem tersebut juga dapat mendukung aplikasi desktop, dengan proyek sepeti Electron.
</p>
<p class="text-primary fw-semibold">
    Engine Javascript lainnya
</p>
<p class="lh-lg">
    Browser lain memiliki mesin JavaScript mereka masing-masing, diantaranya:
</p>
<ul>
    <li><p>FireFox dengan SpiderMonkey</p></li>
    <li><p>Safari dengan JavaScriptCore (Disebut juga Nitro)</p></li>
    <li><p>Edge dengan Chakra, namun sekarang dikembangkan dengan Chromium dan Engine V8</p></li>
</ul>
<p class="lh-lg">
    Semua mesin tersebut menerapkan standar ECMA ES-262, yang juga disebut ECMAScript, standar yang digunakan oleh JavaScript.
</p>
<div class="p-0 p-md-3 my-4 my-md-2" id="aktivitas">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 1.6</div>
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
            soal: "Hewan berbulu yang sering dipelihara Manusia adalah",
            pilihan: ["Rusa", "Kucing", "Komodo", "Gajah"],
            benar: 1,
            penjelasan: "Betul sekali, apakah kamu suka kucying :D"
        },
        {
            soal: "Manakah dibawah ini yang termasuk ikan",
            pilihan: ["Belalang", "Kumbang", "Garuda", "Koi"],
            benar: 3,
            penjelasan: "Kok tau jawabannya sih, kan Koi-daman ku :v "
        },
        {
            soal: "1 tambah 1 sama dengan",
            pilihan: ["Jendela", "Dua", "Kita", "Keknya dua"],
            benar: 0,
            penjelasan: "Hahay Ketauan kamu anak jaman dulu"
        },
        {
            soal: "Kendaraan bermotor yang dipakai mahasiswa menggunakan bahan bakar",
            pilihan: ["Avtur", "Batu Bara", "Pertalite", "Nuklir"],
            benar: 2,
            penjelasan: "Belinya pun juga eceran wkwk"
        },
        {
            soal: "Ngoding kepanjangan dari",
            pilihan: ["Ngomong Dingin", "Ngoprek Koding", "Ngomel Mending", "Ngosongin Mading"],
            benar: 1,
            penjelasan: "Pasti kamu programmer handal murah senyum dan tidak sombong"
        }
    ]
</script>
@endsection