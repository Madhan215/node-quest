@extends('layouts.base')

@section('container-base-content')
<style>
    .badge-img {
    transition: transform 0.2s ease-in-out;
}

.badge-img:hover {
    transform: scale(1.2);
    cursor: pointer;
}

.grayscale {
    filter: grayscale(100%);
}

</style>
    <h1>Dashboard</h1>
    <div class="container">
        <div class="row g-3">
            <!-- Card 1: Progress Pembelajaran -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="card-title text-center">Profil</h5>
                        <p class="mb-1"><strong>Role:</strong> {{ auth()->user()->role }}</p>
                        <p class="mb-1"><strong>Nama:</strong> {{ auth()->user()->name }}</p>
                        <p class="mb-1"><strong>Email:</strong> {{ auth()->user()->email }}</p>
                    </div>
                </div>
            </div>
    
            <!-- Card 2: Profil -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Perolehan Badge</h5>
                        <div class="d-flex flex-wrap justify-content-center gap-2">
                            {{-- @foreach ($badges as $badge)
                                <img src="{{ asset('img/' . $badge->image) }}" alt="{{ $badge->name }}" class="rounded-circle" width="50">
                            @endforeach --}}
                            {{-- <img src="{{ asset('img/badges/1 Knowledge.png') }}" alt="" class="rounded-circle badge-img badge-img grayscale" width="70" data-bs-toggle="tooltip" title="Selesaikan Bab Pengenalan untuk memperoleh badge ini">
                            <img src="{{ asset('img/badges/2 Module.png') }}" alt="" class="rounded-circle badge-img badge-img grayscale" width="70" data-bs-toggle="tooltip" title="Selesaikan Bab Modul untuk memperoleh badge ini">
                            <img src="{{ asset('img/badges/3 NPM.png') }}" alt="" class="rounded-circle badge-img badge-img grayscale" width="70" data-bs-toggle="tooltip" title="Selesaikan Bab NPM untuk memperoleh badge ini">
                            <img src="{{ asset('img/badges/4 Event.png') }}" alt="" class="rounded-circle badge-img grayscale" width="70" data-bs-toggle="tooltip" title="Selesaikan Bab Modul Event untuk mendapatkan badge ini">
                            <img src="{{ asset('img/badges/5 File System.png') }}" alt="" class="rounded-circle badge-img grayscale" width="70" data-bs-toggle="tooltip" title="Selesaikan Bab Modul FIle System untuk memperoleh badge ini">
                            <img src="{{ asset('img/badges/6 HTTP.png') }}" alt="" class="rounded-circle badge-img grayscale" width="70" data-bs-toggle="tooltip" title="Selesaikan Bab Modul HTTP untuk memperoleh badge ini">
                            <img src="{{ asset('img/badges/Beginner.png') }}" alt="" class="rounded-circle badge-img grayscale" width="70" data-bs-toggle="tooltip" title="Selesaikan semua pembelajaran dengan progress 100%">
                            <img src="{{ asset('img/badges/The Flash.png') }}" alt="" class="rounded-circle badge-img grayscale" width="70" data-bs-toggle="tooltip" title="Selesaikan kuis manapun kurang dari 10 Menit">
                            <img src="{{ asset('img/badges/Perfect Max Point.png') }}" alt="" class="rounded-circle badge-img grayscale" width="70" data-bs-toggle="tooltip" title="Dapatkan nilai maksimal dari semua aktivitas, kuis, dan latihan"> --}}
                            @foreach ($badges as $badge)
    <img src="{{ asset($badge->url) }}" 
         alt="Badge {{ $badge->name }}" 
         class="rounded-circle badge-img {{ $badge->earned_at ? '' : 'grayscale' }}" 
         width="70" 
         data-bs-toggle="tooltip" 
         title="{{ $badge->earned_at ? $badge->info . ' (Diperoleh pada: ' . $badge->earned_at . ')' : $badge->how }}">
@endforeach

                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Card 3: Perolehan Poin -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="card-title mb-2">Progress Pembelajaran</h5>
                        <div class="progress mt-2 w-100">
                            <div role="progressbar" class="progress-bar bg-primary progress-bar-striped progress-bar-animated fw-semibold"
                                aria-valuenow="{{ ($progressCompleted / 32) * 100 }}" aria-valuemin="0" aria-valuemax="100"
                                style="width: {{ ($progressCompleted / 32) * 100 }}%;">
                                {{ number_format((($progressCompleted / 32) * 100),2) }}%
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
    
            <!-- Card 4: Perolehan Badge -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Perolehan Poin</h5>
                        <h4 class="fw-semibold text-primary">{{ $totalPoints }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
