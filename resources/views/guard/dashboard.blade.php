@extends('layouts.base')

@section('container-base-content')
    <h1>Dashboard Dosen</h1>

    <div class="mt-4">
        <div class="row">
            <!-- Kolom pertama: Full Width -->
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Profil</h5>
                        <div class=" d-flex align-items-center">
                            <!-- Foto Profil di Kiri -->
                            <img src="{{ auth()->user()->profilePhotoUrl }}" alt="Profile Photo"
                                class="rounded-circle border border-primary me-3"
                                style="width: 80px; height: 80px; object-fit: cover;">

                            <!-- Informasi Profil di Kanan -->
                            <div>
                                <p class="mb-1"><strong>Role:</strong> {{ auth()->user()->role }}</p>
                                <p class="mb-1"><strong>Nama:</strong> {{ auth()->user()->name }}</p>
                                <p class="mb-1"><strong>Email:</strong> {{ auth()->user()->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-3 mt-1">
            <!-- Kolom kedua: 3 Card sejajar -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Token Kelas</h5>
                            <button class="btn btn-sm btn-outline-primary ms-2" onclick="copyToClipboard()">
                                <i class="bi bi-clipboard"></i> Copy
                            </button>
                        </div>

                        <p class="card-text" id="classToken">{{ auth()->user()->class_token }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Mahasiswa</h5>
                        <p class="card-text">{{ $totalMahasiswa }} Orang</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Progress Mahasiswa</h5>
                        <p class="card-text">{{ $sudahMengerjakan }}/{{ $totalMahasiswa }} Selesai</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function copyToClipboard() {
            var text = document.getElementById("classToken").innerText;
            navigator.clipboard.writeText(text).then(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Class Token berhasil disalin ke clipboard.',
                    timer: 2000,
                    showConfirmButton: false
                });
            }).catch(function(err) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: 'Gagal menyalin Class Token.',
                });
                console.error("Gagal menyalin teks", err);
            });
        }
    </script>
@endsection
