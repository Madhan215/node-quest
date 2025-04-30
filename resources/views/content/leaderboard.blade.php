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

        td {
            vertical-align: middle;
        }
    </style>
    <h1 class="mb-4">🏆 Leaderboard</h1>
    <div class="table-responsive">
        <div style="border: 1px solid #dee2e6; border-radius: 15px; overflow: hidden;">
            <table class="table table-bordered mb-0">
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
                            <td class="text-center">
                                @if ($index + 1 <= 3)
                                    <strong>{{ $index + 1 }}</strong>
                                @else
                                    {{ $index + 1 }}
                                @endif
                            </td>

                            <td class="align-middle">
                                <div class="d-flex align-items-center">
                                    <a href="{{ $user->profilePhotoUrl }}" data-fancybox data-caption="{{ $user->name }}">
                                        <img class="rounded-circle border border-primary me-2"
                                            src="{{ $user->profilePhotoUrl }}" alt="{{ $user->name }}"
                                            style="width: 30px; height: 30px;">
                                    </a>
                                    <span>{{ $user->name }}</span>
                                </div>
                            </td>

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
    </div>
    <script>
        Fancybox.bind("[data-fancybox]", {
            Toolbar: {
                display: ["close"] // Hanya tombol close
            },
            animated: true,
            dragToClose: true,
            showClass: "fancybox-zoomIn",
            hideClass: "fancybox-zoomOut",
        });
    </script>
@endsection
