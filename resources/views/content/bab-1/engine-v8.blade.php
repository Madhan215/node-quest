@extends('layouts.base')

@section('container-base-content')

<h2>1.5 Engine V8</h2>
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
<div class="p-0 p-md-3 my-4 my-md-2">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 1.5</div>
        </div>
        <div class="card-body">
            <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis berikut ini dengan baik dan benar!</p>
            <p class="fw-semibold bg-primary text-white p-2 rounded card-text">Pertanyaan 1 dari <span id="noSoal">1</span></p>
        </div>
    </div>
</div>
@endsection