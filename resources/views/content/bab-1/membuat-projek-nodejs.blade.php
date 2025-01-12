@extends('layouts.base')

@section('container-base-content')

<h2>1.8 Membuat Projek Node.js</h2>
<p class="lh-lg">
    Program node.js dapat dijalankan pada terminal, dengan cara menjalankan file JavaScript tersebut melalu terminal, berikut program sederhana untuk menjalankan Node.js
</p>
<ol class="list-group list-group-numbered">
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto w-100">
            <div>Buat program yang menampilkan “Hello World”</div>
            <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{asset('img/bab1-8/no-23.png')}}" alt="Website Nodejs.org">  
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto w-100">
            <div>Dengan menggunakan terminal tulis “node nama_file”</div>
            <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{asset('img/bab1-8/no-24.png')}}" alt="Website Nodejs.org">  
        </div>
    </li>
</ol>
<div class="p-0 p-md-3 my-4 my-md-2">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 1.8</div>
        </div>
        <div class="card-body">
            <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis berikut ini dengan baik dan benar!</p>
            <p class="fw-semibold bg-primary text-white p-2 rounded card-text">Pertanyaan 1 dari <span id="noSoal">1</span></p>
        </div>
    </div>
</div>
@endsection