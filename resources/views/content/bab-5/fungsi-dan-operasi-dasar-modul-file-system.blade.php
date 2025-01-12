@extends('layouts.base')

@section('container-base-content')

<h2>5.2 Fungsi dan Operasi Dasar Modul File System</h2>
<p class="lh-lg">
    Modul File System memiliki berbagai fungsi yang memungkinkan pengembang untuk mengelola file dan direktori dengan cara yang efisien, beberapa fungsi utama dalam modul File System meliputi:
</p>
<ol class="list-group list-group-numbered">
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto ">
            <p class="m-0">Membaca File</p>
            <code class="text-primary">fs.readFile(path, options, callback)</code>
            <p class="lh-lg">
                Dengan menggunakan fungsi fs.readFile untuk membaca isi file dalam sistem. Fungsi ini menerima tiga argumen:
            </p>
            <ul class="list-group list-group-flush">
                <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                    <div class="d-flex align-items-start">
                        <span class="h5 me-2 mb-0 p-0">•</span>
                        path : Jalur ke file yang ingin di baca
                    </div>
                </li>
                <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                    <div class="d-flex align-items-start">
                        <span class="h5 me-2 mb-0 p-0">•</span>
                        options : Opsi pengaturan, seperti encoding (misalnya, ‘utf8’)
                    </div>
                </li>
                <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                    <div class="d-flex align-items-start">
                        <span class="h5 me-2 mb-0 p-0">•</span>
                        callback : Fungsi yang dipanggil setelah operasi selesai
                    </div>
                </li>
            </ul>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto ">
            <p class="m-0">Membaca File</p>
            <code class="text-primary">fs.readFile(path, options, callback)</code>
            <p class="lh-lg">
                Dengan menggunakan fungsi fs.readFile untuk membaca isi file dalam sistem. Fungsi ini menerima tiga argumen:
            </p>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto ">
            <p class="m-0">Menulis File</p>
            <code class="text-primary">fs.writeFile(path, data, options, callback)</code>
            <p class="lh-lg">
                Dengan menggunakan fungsi fs.writeFile untuk membuat atau memperbarui file dengan konten tertentu.
            </p>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto ">
            <p class="m-0">Menghapus File</p>
            <code class="text-primary">fs.unlink(path, callback)</code>
            <p class="lh-lg">
                Dengan menggunakan fungsi fs.unlink digunakan untuk menghapus file yang tidak diperlukan.
            </p>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto ">
            <p class="m-0">Mengubah Nama File</p>
            <code class="text-primary">fs.rename(oldPath, newPath, callback)</code>
            <p class="lh-lg">
                Dengan menggunakan fungsi fs.rename dapat digunakan untuk mengubah nama dari file.
            </p>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto ">
            <p class="m-0">Mengelola Direktori</p>
            <code class="text-primary">fs.readdir(path, callback)</code>
            <p class="lh-lg">
                Modul File System juga dapat digunakan untuk mengelola direktori, seperti membuat membuat direktori dan mendapatkan daftar isi direktori.
            </p>
        </div>
    </li>
</ol>
<div class="p-0 p-md-3 my-4 my-md-2">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 5.2</div>
        </div>
        <div class="card-body">
            <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis berikut ini dengan baik dan benar!</p>
            <p class="fw-semibold bg-primary text-white p-2 rounded card-text">Pertanyaan 1 dari <span id="noSoal">1</span></p>
        </div>
    </div>
</div>
@endsection