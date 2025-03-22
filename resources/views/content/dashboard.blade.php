@extends('layouts.base')

@section('container-base-content')
    <h1>Dashboard</h1>
    <div class="container">
        <div class="row g-3">
            <!-- Card 1: Progress Pembelajaran -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="card-title">Profil</h5>
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
                                <img src="{{ asset('image/' . $badge->image) }}" alt="{{ $badge->name }}" class="rounded-circle" width="50">
                            @endforeach --}}
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
