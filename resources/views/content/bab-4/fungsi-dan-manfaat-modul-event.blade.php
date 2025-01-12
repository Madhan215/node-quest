@extends('layouts.base')

@section('container-base-content')

<h2>4.2 Fungsi dan Manfaat Modul Event</h2>

<p class="lh-lg">
    Modul Event memiliki kemampuan untuk menangani event secara efisien, yang menjadikan modul ini sebagai komponen utama dalam pengembangan aplikasi Node.js berbasis event-driven, berikut beberapa fungsi dan manfaat utama dari modul event:
</p>
<ol class="list-group list-group-numbered">
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto ">
            <p class="m-0">Menambahkan Listener untuk Event (on)</p>
            <p class="lh-lg">
                EventEmitter digunakan untuk menambahkan event tertentu menggunakan metode on. Listener ini akan dipanggil ketika event tersebut di picu. Listener dapat digunakan untuk menjalankan sejumlah tugas atau proses, seperti respon pada intup data, menjalankan logika aplikasi berdasarkan tindakan yang dilakukan, dan lain-lain.
                <pre class="border rounded"><code class="javascript m-0 pt-1 pb-1">const EventEmitter = require('events');
const myEmitter = new EventEmitter();

// Menambahkan listener untuk event 'data-received'
myEmitter.on('data-received', (data) => {
  console.log(`Data diterima: ${data}`);
});</code></pre>
            </p>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto ">
            <p class="m-0">Memicu Event (emit)</p>
            <p class="lh-lg">
                Metode emit pada EventEmitter berguna untuk memicu atau menjalankan event yang telah didefinisikan sebelumnya. Ketika event tersebut dipicu, semua listener yang telah didaftarkan akan dieksekusi secara berurutan. Sehingga, memungkinkan aplikasi untuk mengatur flow secara dinamis. Contohnya pada saat dalam sistem notifikasi, kita dapat memicu event ‘notification’ ketika ada pesan yang masuk, sehingga user mendapatkan notifikasi real-time.
                <pre class="border rounded"><code class="javascript m-0 pt-1 pb-1">// Memicu event 'data-received'
myEmitter.emit('data-received', 'Pesan baru untuk Anda');</code></pre>
            </p>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto ">
            <p class="m-0">Menghapus Listener untuk Event (removeListener)</p>
            <p class="lh-lg">
                removeListener digunakan untuk menghapus listener dari sebuah event, sehingga dapat mengelola konsumsi memori serta dapat meningkatkan performa, terutama pada aplikasi yang memiliki banyak listener aktif. Contohnya setelah user logout atau ketika sesi selesai.
                <pre class="border rounded"><code class="javascript m-0 pt-1 pb-1">const listener = (data) => console.log(`Data diterima: ${data}`);

// Menambahkan dan kemudian menghapus listener
myEmitter.on('data-received', listener);
myEmitter.removeListener('data-received', listener);
</code></pre>
            </p>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto ">
            <p class="m-0">Menggunakan event sekali saja (once)</p>
            <p class="lh-lg">
                Terkadang, kita ingin listener yang hanya merespon satu kali ketika dipicu, seperti event startup atau load. Dengan menggunakan fungsi once, memungkinkan listener dijalankan hanya satu kali ketika event pertama telah dipicu. Setelah itu, listener tersebut akan dihapus secara otomatis.
                <pre class="border rounded"><code class="javascript m-0 pt-1 pb-1">// Menambahkan listener yang hanya berjalan sekali
myEmitter.once('first-load', () => {
    console.log('Inisialisasi pertama kali dijalankan.');
});

// Memicu event 'first-load' dua kali (listener akan dieksekusi hanya sekali)
myEmitter.emit('first-load');
myEmitter.emit('first-load');
</code></pre>
            </p>
        </div>
    </li>
</ol>
<p class="lh-lg">
    Dengan adanya fungsi-fungsi diatas, memungkinkan pengembangan membuat aplikasi yang responsif dan efisien. Dengan pemanfaatan Modul Event ini sangat sesuai untuk pengembangan aplikasi web, sistem monitoring, dan aplikasi real-time lainnya. Karena sistem event-driven programming memungkinkan kita untuk menjaga alur asinkron yang menghindari dari blocking atau penundaan yang tidak perlu dalam pemrosesan.
</p>
<div class="p-0 p-md-3 my-4 my-md-2">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 4.2</div>
        </div>
        <div class="card-body">
            <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis berikut ini dengan baik dan benar!</p>
            <p class="fw-semibold bg-primary text-white p-2 rounded card-text">Pertanyaan 1 dari <span id="noSoal">1</span></p>
        </div>
    </div>
</div>
@endsection