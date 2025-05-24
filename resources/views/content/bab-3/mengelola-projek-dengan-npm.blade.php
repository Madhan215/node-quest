@extends('layouts.base')

@section('container-base-content')
    <h2>3.2 Mengelola Projek dengan NPM</h2>
    <p class="lh-lg">
        Project merupakan objek yang menampung keseluruhan dari komponen Node.js. Pengembang dapat meletakkan perintah untuk
        menjalankan script server, dan juga dapat menjalankan script JavaScript. Untuk menginisialisasi NPM dalam projek,
        pengguna dapat menjalankan perintah “npm init” pada terminal, dan mengisi isian yang diberikan, berikut
        langkah-langkah dalam membuat projek Node.js:
    </p>
    <ol class="list-group list-group-numbered">
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto ">
                <p class="m-0">Ketikkan npm init, lalu beri nama pada paket tersebut</p>
                <img class="me-auto my-2 shadow" src="{{ asset('img/bab3-2/no-26.png') }}" alt="">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Beri nama paket</p>
                <img class="me-auto my-2 shadow" src="{{ asset('img/bab3-2/no-27.png') }}" alt="">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Menampilkan versi NPM, tekan enter</p>
                <img class="me-auto my-2 shadow" src="{{ asset('img/bab3-2/no-28.png') }}" alt="">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Masukkan deskripsi singkat proyek</p>
                <img class="me-auto my-2 shadow" src="{{ asset('img/bab3-2/no-29.png') }}" alt="">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Tentukan entry point (File Utama), default index.js</p>
                <img class="me-auto my-2 shadow" src="{{ asset('img/bab3-2/no-30.png') }}" alt="">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Tentukan test command, disini saya memasukkan “test”</p>
                <img class="me-auto my-2 shadow" src="{{ asset('img/bab3-2/no-31.png') }}" alt="">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Git Repository (jika ada)</p>
                <img class="me-auto my-2 shadow" src="{{ asset('img/bab3-2/no-32.png') }}" alt="">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Keywords atau kata kunci yang berkaitan dengan proyek (Bisa dikosongkan)</p>
                <img class="me-auto my-2 shadow" src="{{ asset('img/bab3-2/no-33.png') }}" alt="">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Masukkan nama author</p>
                <img class="me-auto my-2 shadow" src="{{ asset('img/bab3-2/no-34.png') }}" alt="">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Lisensi proyek (Default ISC)</p>
                <img class="me-auto my-2 shadow" src="{{ asset('img/bab3-2/no-35.png') }}" alt="">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Muncul konfirmasi, lalu tekan enter</p>
                <img class="me-auto my-2 shadow" src="{{ asset('img/bab3-2/no-36.png') }}" alt="">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Berikut struktur folder setelah berhasi menginisialisasi Node.js</p>
                <img class="me-auto my-2 shadow" src="{{ asset('img/bab3-2/no-37.png') }}" alt="">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Isi file package.json</p>
                <img class="me-auto my-2 shadow" src="{{ asset('img/bab3-2/no-38.png') }}" alt="">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Untuk menjalankan program tersebut dengan NPM, kita perlu membuat main nya terlebih
                    dahulu. Karena main nya index.js, maka kita akan membuat fie JavaScript dengan nama index.js</p>
                <img class="me-auto my-2 shadow" src="{{ asset('img/bab3-2/no-39.png') }}" alt="">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Setelah itu, buka file packager.json dan masukkan kode berikut</p>
                <img class="me-auto my-2 shadow" src="{{ asset('img/bab3-2/no-40.png') }}" alt="">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Ketikkan perintah berikut di terminal</p>
                <img class="me-auto my-2 shadow" src="{{ asset('img/bab3-2/no-41.png') }}" alt="">
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Maka program tersebut dijalankan dengan menggunakan NPM.</p>
            </div>
        </li>
    </ol>
    <p class="lh-lg mt-2">
        Dengan menggunakan NPM, kita dapat membagikan projek yang kita buat. Projek tersebut dapat diterbitkan ke NPM,
        dengan cara membuat akun terlebih dahulu.
    </p>
    <p class="lh-lg ">
        Kamu dapat mempraktekan kode program diatas pada <a href="/livenode"><span class="fw-bold">Live Node
                <sup><i class="bi bi-arrow-up-right"></i></sup></span></a>
    </p>
@endsection
