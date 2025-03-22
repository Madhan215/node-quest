@extends('layouts.base')

@section('container-base-content')
    <style>
        .draggable {
            padding: 10px 15px;
            cursor: grab;
            user-select: none;
        }

        .dropzone {
            min-height: 150px;
            background-color: #f8f9fa;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            align-items: center;
        }

        .dropzone h3 {
            width: 100%;
            text-align: center;
        }

        .draggable:active {
            cursor: grabbing;
        }
    </style>

    <h2>1.2 Pemrograman sisi klien dan sisi server</h2>

    <p class="lh-lg">
        Pada aktivitas pemrograman, umumnya terbagi menjadi dua tipe. Pemrograman sisi klien (Frontend) merujuk pada semua
        kode yang di jalankan di browser pengguna. Mencakup elemen-elemen yang berinteraksi langsung dengan pengguna,
        seperti antarmuka pengguna (UI), desain, dan interaksi. Sedangkan pemrograman sisi server (Backend) merujuk pada
        kode yang dijalankan di server. Mencakup pengolahan data, interaksi dengan database, dan sistem file. Perbedaan dari
        pemrograman pada sisi klien (Frontend) dan pada sisi server (Backend) dapat dilihat pada ilustrasi gambar 2.
    </p>
    <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{ asset('img/ilustrasi Frontend dan Backend.png') }}"
        alt="Ilustrasi Pemrograman sisi klien dan sisi server">
    <p class="lh-lg">
        JavaScript pada umumnya digunakan pada sisi klien, dengan adanya Node.js JavaScript dapat digunakan pada sisi
        server. Contoh penggunaan JavaScript pada sisi klien adalah Interaktivitas, Manipulasi DOM, EventListener, dan HTTP
        Request. Sedangkan penggunaan pada sisi server adalah akses memori, sistem file, input/output, dan jaringan.
    </p>
    <p class="lh-lg">
        Sehingga memberikan kemudahan dalam pengembangan aplikasi web di kedua sisi dengan menggunakan satu bahasa yang sama
        agar menciptakan aplikasi web yang lebih efisien dan responsif.
    </p>
    <div class="p-0 p-md-3 my-4 my-md-2" id="aktivitas">
        <div class="card">
            <div class="p-3 d-flex align-items-center justify-content-between card-header">
                <div class="mb-0 h6 fw-semibold card-title">Aktivitas 1.2</div>
                @if ($isCompleted)
                    <button class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Kamu telah menyelesaikan aktivitas ini, mengerjakannya tidak mempengaruhi perolehan poinmu">
                        <i class="bi bi-check2"></i> Completed
                    </button>
                @else
                    <button class="btn btn-success" style="display: none" id="completeJS"><i class="bi bi-check2"></i>
                        Completed</button>
                @endif
            </div>
            <div class="card-body">
                <p class="mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, seret teknologi berikut ke dalam
                    kategori yang sesuai</p>
                <div class="container">
                    <!-- Barisan Teknologi -->
                    <div class="row justify-content-center mb-4">
                        <div class="col-12 d-flex flex-wrap justify-content-center gap-2">
                            <div class="draggable btn btn-primary" draggable="true" id="css">CSS</div>
                            <div class="draggable btn btn-primary" draggable="true" id="python">Python</div>
                            <div class="draggable btn btn-primary" draggable="true" id="mysql">Database MySQL</div>
                            <div class="draggable btn btn-primary" draggable="true" id="php">PHP</div>
                            <div class="draggable btn btn-primary" draggable="true" id="js">JavaScript</div>
                            <div class="draggable btn btn-primary" draggable="true" id="html">HTML</div>
                        </div>
                    </div>

                    <!-- Kolom Frontend & Backend -->
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0"> <!-- Tambahkan mb-4 untuk jarak di mobile -->

                            <div class="dropzone border border-primary rounded p-3" id="frontend">
                                <h3 class="text-center">Front-end</h3>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-md-0"> <!-- Tambahkan mb-4 untuk jarak di mobile -->

                            <div class="dropzone border border-primary rounded p-3" id="backend">
                                <h3 class="text-center">Back-end</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Periksa & Hasil -->
                    <div class="text-center mt-4">
                        <button id="checkBtn" class="btn btn-success">Periksa</button>
                        <div class="fade alert mt-3" id="alertPenjelasan">
                            <div class="d-flex justify-content-center">
                                <i class="me-2 bi fs-5" id="iconPenjelasan"></i>
                                <h6 class="fw-bold mb-0 mt-1" id="ketHasil"></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let stepId = 2;
    </script>
    <script src="{{ asset('script/dragndrop.js') }}"></script>
@endsection
