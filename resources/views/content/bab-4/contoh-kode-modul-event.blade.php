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

<h2>4.3 Contoh Kode Modul Event</h2>
<p class="lh-lg">
    Berikut adalah contoh sederhana penggunaan EventEmitter untuk memicu event kustom:
</p>
<pre class="border rounded"><code class="javascript m-0 pt-1 pb-1">const EventEmitter = require('events');
const myEmitter = new EventEmitter();

// Menambahkan listener untuk event 'login'
myEmitter.on('login', (user) => {
    console.log(`${user} has logged in.`);
});

// Memicu event 'login'
myEmitter.emit('login', 'JohnDoe');
</code></pre>
<div class="p-0 p-md-3 my-4 my-md-2">
    <div class="card">
        <div class="p-3 d-flex align-items-center justify-content-between card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 4.3</div>
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
    let stepId = 22;
    const kodeUrutan = [
    {
        "order": 1,
        "text": "const EventEmitter = require('events');"
    }, // Mengimpor modul EventEmitter
    {
        "order": 2,
        "text": "const eventEmitter = new EventEmitter();"
    }, // Membuat instance dari EventEmitter
    {
        "order": 3,
        "text": "eventEmitter.on('user-logged-in', (username) => {"
    }, // Menyiapkan event listener untuk event 'user-logged-in'
    {
        "order": 4,
        "text": "    console.log(`Selamat datang, ${username}!`);"
    }, // Menampilkan pesan ketika event terjadi
    {
        "order": 5,
        "text": "});"
    }, // Menutup event listener
    {
        "order": 6,
        "text": "eventEmitter.emit('user-logged-in', 'Aldi');"
    } // Memicu event dengan parameter 'Aldi'


    ];
</script>
<script src="{{asset('script/urutkode.js')}}"></script>
@endsection