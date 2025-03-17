@extends('layouts.main')

@section('container')
    <div class="p-5 p-sm-5 mb-5 mb-sm-0 flex-grow-1 container">
        <div class="d-md-flex gap-5 align-items-center">
            <img src="{{ asset('img/register.png') }}" alt="Ilustrasi Register" class="img-fluid p-3 d-none d-sm-block"
                width="360" height="360">
            <form class="w-100" action="{{ route('register.store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <h2 class="fw-semibold text-primary">DAFTAR</h2>
                </div>
                <h6 class="mb-4 text-muted">Isi semua data di bawah ini dengan benar!</h6>
                <div class="mb-3">
                    {{-- Nama --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('Nama') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autofocus autocomplete>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    {{-- Email --}}
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    {{-- Password --}}
                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" placeholder="Password" class="form-control"
                                id="password-input" required>
                            <button type="button" class="btn btn-outline-primary" id="toggle-password">
                                <i class="bi bi-eye-slash" id="toggle-icon"></i>
                            </button>
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label fw-semibold">Peran</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="dosen"
                            onchange="toggleToken()">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Dosen
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="flexRadioDefault2"
                            value="mahasiswa" onchange="toggleToken()">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Mahasiswa
                        </label>
                    </div>
                    @error('role')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3" id="class_token_div" style="display: none">
                    <label for="class_token" class="form-label text-gray">
                        Token Kelas
                        <i class="bi bi-info-circle" data-bs-toggle="tooltip"
                            title="Hubungi dosen untuk meminta token kelas."></i>
                    </label>
                    <input type="text" name="class_token" placeholder="Token Kelas" class="form-control">
                    @error('class_token')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-4">
                    <button type="submit" class="me-2 btn btn-primary">DAFTAR</button>
                    <button type="reset" class="btn btn-outline-dark">RESET</button>
                </div>
                <div class="mt-5">
                    <small class="small form-text">
                        Sudah punya akun? <a href="/login">Masuk</a>
                    </small>
                </div>
            </form>
        </div>
    </div>

    <script>
        function toggleToken() {
            var mahasiswaRadio = document.getElementById('flexRadioDefault2');
            var classTokenInput = document.querySelector('input[name="class_token"]');

            if (mahasiswaRadio.checked) {
                classTokenInput.removeAttribute('disabled');
                document.getElementById('class_token_div').style.display = 'block';
            } else {
                classTokenInput.setAttribute('disabled', 'disabled');
                document.getElementById('class_token_div').style.display = 'none';
            }
        }
    </script>

    <script src="{{ asset('js/showPass.js') }}"></script>
@endsection
