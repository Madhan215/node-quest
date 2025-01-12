@extends('layouts.base')

@section('container-base-content')

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
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 4.3</div>
        </div>
        <div class="card-body">
            <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis berikut ini dengan baik dan benar!</p>
            <p class="fw-semibold bg-primary text-white p-2 rounded card-text">Pertanyaan 1 dari <span id="noSoal">1</span></p>
        </div>
    </div>
</div>
@endsection