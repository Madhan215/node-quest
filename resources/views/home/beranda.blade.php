@extends('layouts.main')

@section('container')
<div class="d-md-flex flex-md-row-reverse text-center text-md-start align-items-center justify-content-between">
    <img src="{{asset('img/Hero.gif')}}" alt="Landing Page Ilustration" width="500" height="500" decoding="async" class="img-fluid p-3">
    <div class="d-flex flex-column gap-3">
        <div>
            <h3 class="fw-semibold text-primary">MEDIA PEMBELAJARAN INTERAKTIF</h3>
            <h3><span class="text-primary fw-bold">NODE.JS: </span>SERVER SIDE PROGRAMMING DENGAN JAVASCRIPT</h3> 
        </div>
        <p class="text-muted lead">Pelajari JavaScript Server Side Programming dengan mudah dan penuh tantangan. Materi pada media pembelajaran ini dibuat khusus bagi yang ingin mempelajari bagaimana JavaScript dapat berjalan pada sisi server dengan menggunakan Node.js. </p> 
        <div class="d-flex flex-column flex-md-row gap-3">
            <a role="button" tabindex="0" class="btn btn-primary btn-lg" href="/start">MULAI BELAJAR</a>
            <a role="button" tabindex="0" class="btn btn-outline-dark btn-lg" href="/dosen/masuk">HALAMAN DOSEN <i class="bi bi-chevron-double-right"></i></a>
        </div>
    </div>
</div>
@endsection