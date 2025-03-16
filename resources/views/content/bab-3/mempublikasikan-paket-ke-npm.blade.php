@extends('layouts.base')

@section('container-base-content')

<h2>3.3 Mempublikasikan Paket ke NPM</h2>

<p class="lh-lg">
    Pengembang dapat membulikasikan projek yang mereka buat kedalam NPM. Sehingga projek yang dibuat dapat dibagikan. Berikut langkah-langkah dalam mempublikasikan projek Node:
</p>

<ol class="list-group list-group-numbered">
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto ">
            <p class="m-0">Login atau buat akun di <a href="https://www.npmjs.com/">https://www.npmjs.com/</a></p>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto ">
            <p class="m-0">Login di terminal dengan mengetikkan “npm login”, lalu akan diarahkan ke browser</p>
            <img class="d-block mx-auto img-fluid my-2 p-4 shadow " src="{{ asset('img/bab3-3/no-42.png') }}" alt="">
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto ">
            <p class="m-0">Memasukkan Kode OTP</p>
            <img class="d-block mx-auto img-fluid my-2 p-4 shadow w-50" src="{{ asset('img/bab3-3/no-43.png') }}" alt="">
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto ">
            <p class="m-0">Jika sukses maka akan muncul notifikasi authentikasi sukses.</p>
            <img class="d-block mx-auto img-fluid my-2 p-4 shadow w-50" src="{{ asset('img/bab3-3/no-44.png') }}" alt="">
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto ">
            <p class="m-0">Dan pada terminal akan tampil output seperti berikut</p>
            <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/bab3-3/no-45.png') }}" alt="">
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto ">
            <p class="m-0">Setelah login, kita perlu menambahkan user ke NPM dengan cara mengetikkan perintah “npm adduser”</p>
            <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/bab3-3/no-46.png') }}" alt="">
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto ">
            <p class="m-0">Untuk mempublikasikan projek anda, ketikkan perintah npm publish. Jika terjadi error, coba rubah nama paket anda.</p>
            <img class="d-block mx-auto img-fluid my-2 p-4 shadow w-50" src="{{ asset('img/bab3-3/no-47.png') }}" alt="">
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto ">
            <p class="m-0">Paket telah berhasi dipublikasikan ke dalam NPM.</p>
            <img class="d-block mx-auto img-fluid my-2 p-4 shadow w-50" src="{{ asset('img/bab3-3/no-48.png') }}" alt="">
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto ">
            <p class="m-0">Paket telah berhasi dipublikasikan ke dalam NPM.</p>
        </div>
    </li>
</ol>
@endsection