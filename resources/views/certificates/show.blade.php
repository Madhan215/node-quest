@extends('layouts.base')

@section('container-base-content')

    <body>
        <h1 class="mb-4">Sertifikat</h1>

        @if ($certificate)
            <embed src="{{ asset('storage/' . $certificate->file_path) }}" width="100%" height="600px" />
            <br>
        @else
            <div class="alert alert-warning">
                Selesaikan seluruh pembelajaran untuk mendapatkan sertifikat!
            </div>
        @endif

    </body>
@endsection
