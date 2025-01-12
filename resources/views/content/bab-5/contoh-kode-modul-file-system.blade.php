@extends('layouts.base')

@section('container-base-content')

<h2>5.3 Contoh Kode Modul Event</h2>
<p class="lh-lg">
    Pada bagian ini akan memaparkan bagaimana module File System digunakan untuk melakukan berbagai operasi. Contoh ini mencakup program untuk membaca file, menulis file, menghapus file, dan mengubah nama file.
</p>
<h3>5.3.1 Membaca File</h3>
<p class="lh-lg">
    Untuk menggunakan modul ini, pengembang perlu mengimport menggunakan fungsi require(‘fs’).
</p>
<pre class="border rounded"><code class="javascript m-0 pt-1 pb-1">const fs = require('fs');
// Membaca file 'data.txt'
fs.readFile('data.txt', 'utf8', (err, data) => {
    if (err) {
        console.error('Error membaca file:', err);
        return;
    }
    console.log('Isi file:', data);
});
</code></pre>
<h3>5.3.2 Menulis File</h3>
<p class="lh-lg">
    Selain digunakan untuk membaca file, modul file system juga dapat digunakan untuk menulis atau membuat file baru. Terdapat beberapa metode yang digunakan untuk membuat file baru, yaitu:
</p>
<table class="table table-striped">
    <thead class="fw-semibold">
        <td>Fungsi</td>
        <td>Keterangan</td>
    </thead>
    <tr>
        <td><p class="fw-semibold">fs.appendFile()</p></td>
        <td><p>Digunakan untuk menambahkan data kedalam file. Jika file sudah ada, maka akan menambahkan file baru.</p></td>
    </tr>
    <tr>
        <td><p class="fw-semibold">fs.open()</p></td>
        <td><p>Digunakan untuk menulis ke dalam file, ini akan menulis ulang isi file.</p></td>
    </tr>
</table>
<pre class="border rounded"><code class="javascript m-0 pt-1 pb-1">const fs = require('fs');
// Menulis data ke file 'output.txt'
fs.writeFile('output.txt', 'Ini adalah konten baru!', (err) => {
    if (err) {
        console.error('Error menulis file:', err);
        return;
    }
    console.log('File output.txt berhasil dibuat!');
});
</code></pre>
<h3>5.3.3 Mengubah Nama File</h3>
<p class="lh-lg">
    Untuk mengubah nama <i>(rename)</i> file, pada modul file system terdapat fungsi <strong>rename()</strong> untuk mengubah nama file. Fungsi ini memiliki dua parameter, yaitu:
</p>
<ol class="list-group list-group-numbered">
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        Nama file yang akan diubah.
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        Nama baru.
    </li>
</ol>
<pre class="border rounded mt-2"><code class="javascript m-0 pt-1 pb-1">const fs = require('fs');
// Mengubah nama file dari 'data.txt' menjadi 'data-baru.txt'
fs.rename('data.txt', 'data-baru.txt', (err) => {
    if (err) {
        console.error('Error mengubah nama file:', err);
        return;
    }
    console.log('Nama file berhasil diubah menjadi data-baru.txt');
});    
</code></pre>
<h3>5.3.4 Menghapus File</h3>
<p class="lh-lg">
    Untuk menghapus nama (delete) file, pada modul file system terdapat fungsi <strong>unlink()</strong>.
</p>
<pre class="border rounded mt-2"><code class="javascript m-0 pt-1 pb-1">const fs = require('fs');
// Menghapus file 'output.txt'
fs.unlink('output.txt', (err) => {
    if (err) {
        console.error('Error menghapus file:', err);
        return;
    }
    console.log('File output.txt berhasil dihapus!');
});
</code></pre>
<p class="lh-lg">
    Dengan memahami fungsi utama dari File System tersebut, dapat memberi kemudahan dalam pengembangan. Karena, hampir semua aplikasi web yang dikembangkan dengan Node.js membuatuhkan interaksi dengan data yang disimpan dalam server
</p>
<div class="p-0 p-md-3 my-4 my-md-2">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 5.3</div>
        </div>
        <div class="card-body">
            <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis berikut ini dengan baik dan benar!</p>
            <p class="fw-semibold bg-primary text-white p-2 rounded card-text">Pertanyaan 1 dari <span id="noSoal">1</span></p>
        </div>
    </div>
</div>
@endsection