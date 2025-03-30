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
    </style>
    <h1 class="mb-4">🏆 Leaderboard</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th class="text-center" style="width: 10%;">Peringkat</th>
                    <th>Nama</th>
                    <th>Badge</th>
                    <th>Total Poin</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leaderboard as $index => $user)
                    <tr class="{{ auth()->id() == $user->id ? 'table-info' : '' }}">
                        <td class="text-center">{{ $index + 1 }}</td>

                        <td><img src="{{ $user->profilePhotoUrl }}" alt="Profile Photo"
                                class="rounded-circle border border-primary ms-1" style="width: 25px; height: 25px;">
                            {{ $user->name }}</td>
                        <td>
                            @if ($user->badges)
                                @foreach (explode(',', $user->badges) as $badge)
                                    <img src="{{ asset($badge) }}" alt="Badge" class="badge-img" width="50">
                                @endforeach
                            @else
                                <p>Belum memiliki badge</p>
                            @endif
                        </td>
                        <td>{{ $user->total_points }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
