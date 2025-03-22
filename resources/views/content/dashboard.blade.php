@extends('layouts.base')

@section('container-base-content')
    <h1>Dashboard</h1>
    <hr>
    <h3>Progress Pembelajaran</h3>
    <div class="p-2">
        <div class="progress">
            <div role="progressbar" class="progress-bar bg-primary progress-bar-striped fw-semibold"
                aria-valuenow="{{ ($progressCompleted / 32) * 100 }}" aria-valuemin="0" aria-valuemax="100"
                style="width: {{ ($progressCompleted / 32) * 100 }}%">{{ number_format((($progressCompleted / 32) * 100),2) }}%</div>
        </div>
    </div>
    <hr>
    <h3>Profil</h3>
    {{ auth()->user()->role }} <br>
    {{ auth()->user()->name }} <br>
    {{ auth()->user()->email }} <br>
    <hr>
    <h3>Perolehan Poin</h3>
    <h4 class="fw-semibold">{{ $totalPoints }}</h4>
    <hr>
@endsection
