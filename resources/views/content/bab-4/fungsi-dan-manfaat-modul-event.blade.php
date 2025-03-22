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
<div class="p-0 p-md-3 my-4 my-md-2" id="aktivitas">
    <div class="card">
        <div class="p-3 d-flex align-items-center justify-content-between card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 4.2</div>
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
            <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis
                berikut ini dengan baik dan benar!</p>
            <p class="fw-semibold bg-primary text-white p-2 rounded card-text">
                Pertanyaan <span id="noSoal">1</span> dari <span id="totalSoal">1</span>
            </p>
            <div class="soal-container" style="height: 40vh; overflow-y: auto;">
                <p class="lh-lg" id="soal">Soal</p>
                <div class="mb-4" id="pilihanContainer"></div>
                <div id="penjelasan" hidden>
                    <div class="fade alert show" id="alertPenjelasan">
                        <div class="d-flex align-items-center mb-3">
                            <i class="me-2 bi fs-5" id="iconPenjelasan"></i>
                            <h6 class="fw-bold mb-0 mt-1" id="ketHasil"></h6>
                        </div>
                        <p class="mb-0" id="ketPenjelasan"></p>
                    </div>
                </div>
                <button class="btn btn-primary" id="btnNext">LANJUT</button>
            </div>
        </div>
    </div>
</div>

<script>
    let stepId = 21;
    const penjelasanSalah = "Bukan merupakan jawaban, ayo cari dong jawaban yang benar. Kamu pasti bisa kamu hebat jangan menyerah sampai titik ini";
    const bankSoal = [
    {
        soal: "Apa keuntungan menggunakan modul event dalam pengembangan aplikasi Node.js berbasis event-driven?",
        pilihan: [
            "Memungkinkan aplikasi untuk dijalankan secara sinkron dan menghindari penggunaan asinkron.",
            "Membantu mengelola event asinkron dengan cara yang efisien dan terstruktur, meningkatkan responsivitas aplikasi.",
            "Memudahkan pembuatan antarmuka pengguna tanpa memerlukan JavaScript.",
            "Memastikan aplikasi dapat berjalan dengan satu thread secara terus menerus tanpa gangguan."
        ],
        benar: 1,
        penjelasan: "Modul event membantu mengelola event asinkron dengan efisien, sehingga meningkatkan responsivitas dan performa aplikasi berbasis event-driven."
    },
    {
        soal: "Metode on dalam modul Event di Node.js digunakan untuk?",
        pilihan: [
            "Memicu event tertentu.",
            "Menambahkan listener untuk event tertentu.",
            "Menghapus listener dari event.",
            "Menangkap error dalam aplikasi."
        ],
        benar: 1,
        penjelasan: "Metode on digunakan untuk mendaftarkan listener ke event tertentu dalam EventEmitter."
    },
    {
        soal: "Apa fungsi dari metode emit dalam modul Event?",
        pilihan: [
            "Menghentikan event yang sedang berjalan.",
            "Menambahkan listener untuk event.",
            "Memicu atau memanggil event tertentu.",
            "Menangkap error dalam aplikasi."
        ],
        benar: 2,
        penjelasan: "Metode emit digunakan untuk memicu event yang telah didaftarkan sebelumnya, sehingga semua listener yang terkait akan dieksekusi."
    },
    {
        soal: "Kapan kita menggunakan metode once dalam modul Event?",
        pilihan: [
            "Saat kita ingin listener dieksekusi berulang kali.",
            "Saat kita ingin listener hanya dieksekusi sekali untuk event tersebut.",
            "Saat kita ingin menghapus listener dari event.",
            "Saat kita ingin memicu event baru."
        ],
        benar: 1,
        penjelasan: "Metode once digunakan jika kita ingin event listener hanya dieksekusi satu kali sebelum dihapus secara otomatis."
    },
    {
        soal: "Apa keuntungan dari menghapus listener yang tidak diperlukan lagi menggunakan removeListener?",
        pilihan: [
            "Mengurangi beban memori dan meningkatkan performa aplikasi.",
            "Menambahkan lebih banyak listener.",
            "Memperbanyak jumlah event yang bisa dipicu.",
            "Menggandakan jumlah listener untuk setiap event."
        ],
        benar: 0,
        penjelasan: "Menghapus listener yang tidak diperlukan membantu menghemat memori dan meningkatkan efisiensi aplikasi, terutama pada aplikasi yang menangani banyak event."
    }
];

</script>
@endsection