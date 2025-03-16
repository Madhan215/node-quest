@extends('layouts.base')

@section('container-base-content')

<h2>1.9 Membuat Projek Node.js</h2>
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
@endsection