@extends('layouts.base')

@section('container-base-content')

<h1>Data Mahasiswa</h1>

<div class="container mt-4">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mahasiswa as $index => $mhs)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $mhs->name }}</td>
                    <td>{{ $mhs->email }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data mahasiswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection