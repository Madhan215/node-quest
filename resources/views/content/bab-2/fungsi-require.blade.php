@extends('layouts.base')

@section('container-base-content')

<h2>2.2 Fungsi Require</h2>
<p class="lh-lg">
    Fungsi require pada Node.js merupakan cara utama yang digunakan untuk mengimpor modul ke dalam program Node.js. Berdasarkan urutan prioritas dalam fungsi require() sebagai berikut:
</p>
<ol class="list-group list-group-numbered">
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <p class="text-primary m-0">Core Moduls</p>
            <p>Pertama, fungsi require() akan mencari modul bawaan yang ada pada sistem Node.js.</p> 
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <p class="text-primary m-0">File atau Direktori (./ atau / atau ../)</p>
            <p>Pencarian kedua, adalah modul yang umumnya dibuat oleh pengembang.</p> 
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <p class="text-primary m-0">Folder “node_modules”</p>
            <p>Pencarian yang terakhir adalah paket dalam third party modules, yang merupakan modul buatan pihak ketiga. Paket modul yang telah diinstall dari NPM akan tersimpan dalam node_modules.</p> 
        </div>
    </li>
</ol>
<div class="p-0 p-md-3 my-4 my-md-2">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 2.2</div>
        </div>
        <div class="card-body">
            <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis berikut ini dengan baik dan benar!</p>
            <p class="fw-semibold bg-primary text-white p-2 rounded card-text">Pertanyaan 1 dari <span id="noSoal">1</span></p>
        </div>
    </div>
</div>

@endsection