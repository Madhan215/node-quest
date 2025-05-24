@extends('layouts.base')

@section('container-base-content')
    <style>
        .sortable-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .dropzone {
            width: 45%;
            min-height: 250px;
            padding: 15px;
            border: 2px dashed #ccc;
            border-radius: 5px;
            background-color: #f8f9fa;
        }

        .drag-item {
            background: #ffffff;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: grab;
        }

        @media (max-width: 768px) {
            .sortable-container {
                flex-direction: column;
                align-items: center;
            }

            .dropzone {
                width: 90%;
            }
        }
    </style>

    <h2>2.4 Local Moduls</h2>
    <p class="lh-lg">
        Dalam pembuatan program di Node.js, pengembang dapat membuat modul mereka sendiri. Dengan cara Exports modul
        tersebut lalu dapat digunakan pada script atau program lain. Untuk lebih jelasnya, berikut langkah-langkah dalam
        membuat modul sendiri:
    </p>
    <ol class="list-group list-group-numbered">
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <p class="m-0">Buat file JavaScript yang menampung paket yang nantinya akan berisi fungsi, buat file
                    dengan nama say.js</p>
                <textarea class="code-editor">// Fungsi untuk menampilkan pesan "Hello, World!"
function sayHello() {
    return "Hello, World!";
}</textarea>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <p class="m-0">Export fungsi yang ingin digunakan pada program lain, untuk mengekspor fungsi yang
                    diinginkan gunakan perintah module.exports = nama_fungsi;</p>
                <textarea class="code-editor">// Ekspor fungsi agar dapat digunakan di file lain
module.exports = sayHello;</textarea>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <p class="m-0">Impor paket tersebut dengan menggunakan require(./nama_file) </p>
                <textarea class="code-editor">// Mengimpor modul greeting
const sayHello = require('./say');

// Menggunakan fungsi dari modul greeting
console.log(sayHello()); // Output: Hello, World!</textarea>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <p class="m-0">Jalankan dengan dengan node </p>
                <img class="d-block mx-auto my-2 p-4 " src="{{ asset('img/bab2-4/no-25.png') }}" alt="">
            </div>
        </li>
    </ol>
    <p class="lh-lg">
        Kamu dapat mempraktekan kode program diatas pada <a href="/livenode"><span class="fw-bold">Live Node
                <sup><i class="bi bi-arrow-up-right"></i></sup></span></a>
    </p>
    <div class="p-0 p-md-3 my-4 my-md-2">
        <div class="card">
            <div class="p-3 d-flex align-items-center justify-content-between card-header">
                <div class="mb-0 h6 fw-semibold card-title">Aktivitas 2.4</div>
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
                <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi di atas, urutkanlah baris-baris
                    kode JavaScript berikut agar menjadi kode Node.js yang valid!</p>
                <div class="sortable-container mt-4">
                    <div class="dropzone" id="leftBox">
                        <p class="text-center fw-bold">Kode Acak</p>
                    </div>
                    <div class="dropzone" id="rightBox">
                        <p class="text-center fw-bold">Susun Kode di Sini</p>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button id="checkBtn" class="btn btn-success">Periksa</button>
                    <button id="resetBtn" class="btn btn-danger ms-2">Reset</button>
                </div>
                <div class=" mt-4">
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
    <script>
        let stepId = 14;
        const kodeUrutan = [{
                order: 1,
                text: 'function sayHello() {'
            }, // Fungsi harus dideklarasikan dulu
            {
                order: 2,
                text: '    return "Hello, World!";'
            }, // Isi dari fungsi
            {
                order: 3,
                text: '}'
            }, // Tutup fungsi
            {
                order: 4,
                text: 'module.exports = sayHello;'
            }, // Ekspor fungsi
            {
                order: 5,
                text: 'const sayHello = require(\'./say\');'
            }, // Impor fungsi
            {
                order: 6,
                text: 'console.log(sayHello());'
            } // Panggil fungsi
        ];
    </script>
    <script src="{{ asset('script/urutkode.js') }}"></script>
@endsection
