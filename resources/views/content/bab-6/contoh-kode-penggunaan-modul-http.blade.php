@extends('layouts.base')

@section('container-base-content')

<h2>6.3 Contoh kode penggunaan modul HTTP</h2>
<p class="lh-lg">
    Pada bagian ini akan memaparkan bagaimana module HTTP digunakan untuk membuat server. Contoh ini akan menunjukkan server yang akan menerima permintaan HTTP dari klien, dan memberikan respon sederhana dalam bentuk teks.
</p>
<pre class="border rounded mt-2"><code class="javascript m-0 pt-1 pb-1">// Memuat modul HTTP
const http = require('http');

// Membuat server HTTP
const server = http.createServer((req, res) => {
    // Mengatur status kode dan header untuk respons
    res.writeHead(200, { 'Content-Type': 'text/plain' });

    // Cek URL permintaan
    if (req.url === '/') {
    res.write('Selamat datang di halaman utama!');
    } else if (req.url === '/about') {
    res.write('Ini adalah halaman tentang.');
    } else {
    res.write('Halaman tidak ditemukan.');
    }

    // Mengakhiri respons
    res.end();
});

// Menentukan port untuk server
const PORT = 3000;

// Menjalankan server
server.listen(PORT, () => {
    console.log(`Server berjalan pada http://localhost:${PORT}`);
});</code></pre>
<h3>6.3.1 Menjalankan Server HTTP</h3>
<p class="lh-lg">
    Untuk menjalankan kode diatas, ikuti langkah berikut:
</p>
<ol class="list-group list-group-numbered">
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <p class="m-0">Simpan kode tersebut ke dalam file server.js</p>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <p class="m-0">Buka terminal, masuk kedalam direktori file tersebut disimpan, lalu jalankan perintah berikut:</p>
            <pre class="border rounded mt-2"><code class="javascript m-0 pt-1 pb-1">node server.js</code></pre>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <p class="m-0">Buka browser dan kunjungi URL http://localhost:3000 untuk melihat respon dari server.</p>
        </div>
    </li>
</ol>
<div class="p-0 p-md-3 my-4 my-md-2">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 6.3</div>
        </div>
        <div class="card-body">
            <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis berikut ini dengan baik dan benar!</p>
            <p class="fw-semibold bg-primary text-white p-2 rounded card-text">Pertanyaan 1 dari <span id="noSoal">1</span></p>
        </div>
    </div>
</div>
@endsection