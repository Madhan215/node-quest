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

    <h2>6.3 Contoh kode penggunaan modul HTTP</h2>
    <p class="lh-lg">
        Pada bagian ini akan memaparkan bagaimana module HTTP digunakan untuk membuat server. Contoh ini akan menunjukkan
        server yang akan menerima permintaan HTTP dari klien, dan memberikan respon sederhana dalam bentuk teks.
    </p>
    <pre class="border rounded mt-2"><code class="javascript m-0 pt-1 pb-1">// Memuat modul HTTP
const http = require('http');

// Membuat server HTTP
const server = http.createServer((req, res) => {
    // Mengatur status kode dan header untuk respons
    res.writeHead(200, { 'Content-Type': 'text/plain' });

    // Cek URL permintaan
    if (req.url === '/') {
    res.write('Selamat datang di halaman utama!');
    } else if (req.url === '/about') {
    res.write('Ini adalah halaman tentang.');
    } else {
    res.write('Halaman tidak ditemukan.');
    }

    // Mengakhiri respons
    res.end();
});

// Menentukan port untuk server
const PORT = 3000;

// Menjalankan server
server.listen(PORT, () => {
    console.log(`Server berjalan pada http://localhost:${PORT}`);
});</code></pre>
    <h3>6.3.1 Menjalankan Server HTTP</h3>
    <p class="lh-lg">
        Untuk menjalankan kode diatas, ikuti langkah berikut:
    </p>
    <ol class="list-group list-group-numbered">
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Simpan kode tersebut ke dalam file server.js</p>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Buka terminal, masuk kedalam direktori file tersebut disimpan, lalu jalankan perintah
                    berikut:</p>
                <pre class="border rounded mt-2"><code class="javascript m-0 pt-1 pb-1">node server.js</code></pre>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <p class="m-0">Buka browser dan kunjungi URL http://localhost:3000 untuk melihat respon dari server.</p>
            </div>
        </li>
    </ol>
    <div class="p-0 p-md-3 my-4 my-md-2">
        <div class="card">
            <div class="p-3 d-flex align-items-center card-header">
                <div class="mb-0 h6 fw-semibold card-title">Aktivitas 6.3</div>
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
        const kodeUrutan = [{
                "order": 1,
                "text": "const http = require('http');"
            }, // Mengimpor modul HTTP
            {
                "order": 2,
                "text": "const server = http.createServer((req, res) => {"
            }, // Membuat server menggunakan http.createServer
            {
                "order": 3,
                "text": "    res.writeHead(200, { 'Content-Type': 'text/plain' });"
            }, // Menetapkan header respons HTTP
            {
                "order": 4,
                "text": "    res.end('Server berjalan!');"
            }, // Mengirim respons ke klien
            {
                "order": 5,
                "text": "}); // Menutup fungsi server"
            }, // Menutup fungsi server
            {
                "order": 6,
                "text": "server.listen(3000, 'localhost', () => {"
            }, // Menjalankan server pada port 3000
            {
                "order": 7,
                "text": "    console.log('Server berjalan di http://localhost:3000');"
            }, // Menampilkan pesan ke konsol
            {
                "order": 8,
                "text": "}); // Menutup fungsi listen"
            } // Menutup fungsi listen
        ];
    </script>
    <script src="{{ asset('script/urutkode.js') }}"></script>
@endsection
