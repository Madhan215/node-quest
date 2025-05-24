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

    <h2>5.3 Contoh Kode Modul Event</h2>
    <p class="lh-lg">
        Pada bagian ini akan memaparkan bagaimana module File System digunakan untuk melakukan berbagai operasi. Contoh ini
        mencakup program untuk membaca file, menulis file, menghapus file, dan mengubah nama file.
    </p>
    <p class="text-primary fw-semibold">5.3.1 Membaca File</p>
    <p class="lh-lg">
        Untuk menggunakan modul ini, pengembang perlu mengimport menggunakan fungsi require(‘fs’).
    </p>
    <textarea class="code-editor">const fs = require('fs');
// Membaca file 'data.txt'
fs.readFile('data.txt', 'utf8', (err, data) => {
    if (err) {
        console.error('Error membaca file:', err);
        return;
    }
    console.log('Isi file:', data);
});</textarea>
    <p class="text-primary fw-semibold">5.3.2 Menulis File</p>
    <p class="lh-lg">
        Selain digunakan untuk membaca file, modul file system juga dapat digunakan untuk menulis atau membuat file baru.
        Terdapat beberapa metode yang digunakan untuk membuat file baru, yaitu:
    </p>
    <table class="table table-striped">
        <thead class="fw-semibold">
            <td>Fungsi</td>
            <td>Keterangan</td>
        </thead>
        <tr>
            <td>
                <p class="fw-semibold">fs.appendFile()</p>
            </td>
            <td>
                <p>Digunakan untuk menambahkan data kedalam file. Jika file sudah ada, maka akan menambahkan file baru.</p>
            </td>
        </tr>
        <tr>
            <td>
                <p class="fw-semibold">fs.open()</p>
            </td>
            <td>
                <p>Digunakan untuk menulis ke dalam file, ini akan menulis ulang isi file.</p>
            </td>
        </tr>
    </table>
    <textarea class="code-editor">const fs = require('fs');
// Menulis data ke file 'output.txt'
fs.writeFile('output.txt', 'Ini adalah konten baru!', (err) => {
    if (err) {
        console.error('Error menulis file:', err);
        return;
    }
    console.log('File output.txt berhasil dibuat!');
});</textarea>
    <p class="text-primary fw-semibold">5.3.3 Mengubah Nama File</p>
    <p class="lh-lg">
        Untuk mengubah nama <i>(rename)</i> file, pada modul file system terdapat fungsi <strong>rename()</strong> untuk
        mengubah nama file. Fungsi ini memiliki dua parameter, yaitu:
    </p>
    <ol class="list-group list-group-numbered">
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            Nama file yang akan diubah.
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            Nama baru.
        </li>
    </ol>
    <textarea class="code-editor mt-2">const fs = require('fs');
// Mengubah nama file dari 'data.txt' menjadi 'data-baru.txt'
fs.rename('data.txt', 'data-baru.txt', (err) => {
    if (err) {
        console.error('Error mengubah nama file:', err);
        return;
    }
    console.log('Nama file berhasil diubah menjadi data-baru.txt');
});</textarea>
    <p class="text-primary fw-semibold">5.3.4 Menghapus File</p>
    <p class="lh-lg">
        Untuk menghapus nama (delete) file, pada modul file system terdapat fungsi <strong>unlink()</strong>.
    </p>
    <textarea class="code-editor mt-2">const fs = require('fs');
// Menghapus file 'output.txt'
fs.unlink('output.txt', (err) => {
    if (err) {
        console.error('Error menghapus file:', err);
        return;
    }
    console.log('File output.txt berhasil dihapus!');
});</textarea>
    <p class="lh-lg">
        Dengan memahami fungsi utama dari File System tersebut, dapat memberi kemudahan dalam pengembangan. Karena, hampir
        semua aplikasi web yang dikembangkan dengan Node.js membuatuhkan interaksi dengan data yang disimpan dalam server
    </p>
    <p class="lh-lg ">
        Kamu dapat mempraktekan kode program diatas pada <a href="/livenode" target="_blank"><span class="fw-bold">Live Node
                <sup><i class="bi bi-arrow-up-right"></i></sup></span></a>
    </p>
    <div class="p-0 p-md-3 my-4 my-md-2">
        <div class="card">
            <div class="p-3 d-flex align-items-center justify-content-between card-header">
                <div class="mb-0 h6 fw-semibold card-title">Aktivitas 5.3</div>
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
        let stepId = 26;
        const kodeUrutan = [{
                "order": 1,
                "text": "const fs = require('fs');"
            }, // Mengimpor modul File System (fs)
            {
                "order": 2,
                "text": "fs.readFile('data.txt', 'utf8', (err, data) => {"
            }, // Membaca file 'data.txt' secara asinkron
            {
                "order": 3,
                "text": "    if (err) { console.error('Error membaca file:', err); return; }"
            }, // Menangani error jika terjadi kesalahan saat membaca file
            {
                "order": 4,
                "text": "    console.log('Isi file:', data);"
            }, // Menampilkan isi file ke konsol
            {
                "order": 5,
                "text": "});"
            } // Menutup callback fungsi readFile
        ];
    </script>
    <script src="{{ asset('script/urutkode.js') }}"></script>
@endsection
