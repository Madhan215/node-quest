@extends('layouts.base')

@section('container-base-content')

<h2>2.4 Local Moduls</h2>
<p class="lh-lg">
    Dalam pembuatan program di Node.js, pengembang dapat membuat modul mereka sendiri. Dengan cara Exports modul tersebut lalu dapat digunakan pada script atau program lain. Untuk lebih jelasnya, berikut langkah-langkah dalam membuat modul sendiri:
</p>
<ol class="list-group list-group-numbered">
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <p class="m-0">Buat file JavaScript yang menampung paket yang nantinya akan berisi fungsi, buat file dengan nama say.js</p>
            <pre class="border rounded"><code class="javascript m-0 pt-1 pb-1">// Fungsi untuk menampilkan pesan "Hello, World!"
function sayHello() {
    return "Hello, World!";
}</code></pre> 
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <p class="m-0">Export fungsi yang ingin digunakan pada program lain, untuk mengekspor fungsi yang diinginkan gunakan perintah module.exports = nama_fungsi;</p>
            <pre class="border rounded"><code class="javascript m-0 pt-1 pb-1">// Ekspor fungsi agar dapat digunakan di file lain
module.exports = sayHello;</code></pre> 
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <p class="m-0">Impor paker tersebut dengan menggunakan require(./nama_file) </p>
            <pre class="border rounded"><code class="javascript m-0 pt-1 pb-1">// Mengimpor modul greeting
const sayHello = require('./say');

// Menggunakan fungsi dari modul greeting
console.log(sayHello()); // Output: Hello, World!</code></pre> 
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <p class="m-0">Jalankan dengan dengan node </p>
            <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/bab2-4/no-25.png') }}" alt="">
        </div>
    </li>
</ol>
<div class="p-0 p-md-3 my-4 my-md-2">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 2.4</div>
        </div>
        <div class="card-body">
            <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis berikut ini dengan baik dan benar!</p>
            <p class="fw-semibold bg-primary text-white p-2 rounded card-text">Pertanyaan 1 dari <span id="noSoal">1</span></p>
        </div>
    </div>
</div>
@endsection