@extends('layouts.main')

@section('container')
<h1 class="h2 text-center mb-5">
    JAVASCRIPT SERVER SIDE PROGRAMMING
</h1>
<div class="my-auto row">
    <div class="my-auto mb-3 col-lg-4">
       <div class="card">
            <div class="text-center p-4 card-body">
                <div class="card-title h5">DAFTAR ISI</div>
                <img src="{{asset('img/Daftar Isi.png')}}" class="card-img w-75 mx-auto d-block" alt="Daftar Isi">
                <a href="/" role="button" tabindex="0" class="btn btn-outline-dark">LIHAT DAFTAR ISI</a>
            </div>
        </div> 
    </div>
    <div class="my-auto mb-3 col-lg-4">
       <div class="card">
            <div class="text-center p-4 card-body">
                <div class="card-title h5">MATERI</div>
                <img src="{{asset('img/Materi.png')}}" class="card-img w-75 mx-auto d-block" alt="Materi">
                <a href="/javascript-runtime-nodejs" role="button" tabindex="0" class="btn btn-primary">MULAI BELAJAR</a>
            </div>
        </div> 
    </div>
    <div class="my-auto mb-3 col-lg-4">
       <div class="card">
            <div class="text-center p-4 card-body">
                <div class="card-title h5">INFORMASI</div>
                <img src="{{asset('img/Informasi.png')}}" class="card-img w-75 mx-auto d-block" alt="Daftar Isi">
                <a href="/" role="button" tabindex="0" class="btn btn-outline-dark">LIHAT INFORMASI</a>
            </div>
        </div> 
    </div>
    
</div>
@endsection