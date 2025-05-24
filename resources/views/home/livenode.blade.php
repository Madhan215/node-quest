@extends('layouts.main')

@section('container')
    <style>
        #stackblitzEmbed {
            width: 100%;
            height: 600px;
        }
    </style>
    <a href="{{ url()->previous() }}" class="btn btn-primary mb-2">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <strong><i class="bi bi-info-circle underline"></i> <u>(Klik untuk lihat) Panduan Live
                            Node</u></strong>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul class="mb-0">
                        <li>Live Node digunakan untuk mempraktikkan kode JavaScript secara langsung dengan Node.js.</li>
                        <li>File dan folder yang kamu buat bersifat sementara.</li>
                        <li>Dilengkapi fitur WebContainer untuk menjalankan server dan melihat hasil tampilannya.
                        </li>
                        <li>Kamu dapat masuk ke Sesi REPL dengan mengetikkan 'node' pada terminal.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <iframe id="stackblitzEmbed" class="mt-2"
        src="https://stackblitz.com/edit/stackblitz-starters-i4ur7g?embed=1&file=index.js"></iframe>
@endsection
