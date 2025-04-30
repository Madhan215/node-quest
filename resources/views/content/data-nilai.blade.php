@extends('layouts.base')

@section('container-base-content')
    <h1 class="mb-3">Data Nilai</h1>

    <div style="border: 1px solid #dee2e6; border-radius: 15px; overflow: hidden;">
        <table class="table table-bordered mb-0">
            <thead class="table-primary">
                <tr>
                    <th>Kuis 1</th>
                    <th>Kuis 2</th>
                    <th>Kuis 3</th>
                    <th>Kuis 4</th>
                    <th>Kuis 5</th>
                    <th>Kuis 6</th>
                    <th>Evaluasi</th>
                    <th>Rata-rata</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mhs)
                    <tr>
                        <td>{{ $mhs->kuis1 }}</td>
                        <td>{{ $mhs->kuis2 }}</td>
                        <td>{{ $mhs->kuis3 }}</td>
                        <td>{{ $mhs->kuis4 }}</td>
                        <td>{{ $mhs->kuis5 }}</td>
                        <td>{{ $mhs->kuis6 }}</td>
                        <td>{{ $mhs->evaluasi }}</td>
                        <td>{{ number_format($mhs->total_earned / 7, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    </script>
@endsection
