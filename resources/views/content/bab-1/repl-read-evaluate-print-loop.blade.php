@extends('layouts.base')

@section('container-base-content')

<h2>1.7 REPL (Read, Evaluate, Print, Loop)</h2>
<p class="lh-lg">
    REPL merupakan singkatan dari Read Evaluate Print Loop. Ini merupakan lingkungan bahasa pemrograman yang berjalan di konsol window, cara kerjanya adalah mengambil ekspresi tunggal sebagai input dari pengguna dan mengembalikan hasilnya ke konsol setelah eksekusi. Sesi REPL berguna untuk pengujian atau debugging kode JavaScript secara cepat dan sederhana. Berikut cara untuk masuk kedalam REPL:
</p>
<ol class="list-group list-group-numbered">
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto w-100">
            <div>Untuk masuk pada sesi REPL, ketikkan perintah “node” pada Terminal:</div>
            <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{asset('img/bab1-7/no-17.png')}}" alt="Website Nodejs.org">  
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto w-100">
            <div>Maka, akan masuk pada REPL dan menunggu untuk menerima perintah dari pengguna</div>
            <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{asset('img/bab1-7/no-18.png')}}" alt="Website Nodejs.org">  
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto w-100">
            <div>Mulai dengan input untuk menampilkan hello world dan ketik enter untuk menjalankan</div>
            <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{asset('img/bab1-7/no-19.png')}}" alt="Website Nodejs.org">  
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto w-100">
            <div>Pada kode diatas REPL membaca (Read) kode yang dimasukkan pengguna, lalu melakukan evaluasi (Evaluate), mencatak (Print) hasilnya, lalu kembali menunggu inputan dari pengguna untuk memasukkan bari kode lainnya. Node akan mengulang (Loop) ketiga langkah tersebut untuk setiap baris kode yang di jalankan dalam REPL hingga keluar pada sesi tersebut. Dari situlah konsep nama REPL dibuat.</div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto w-100">
            <div>Node secara otomatis mencetak hasil dari baris kode JavaScript mana pun tanpa perlu memberi instruksi untuk melakukannya. Misalnya, ketik baris berikut dan tekan enter:</div>
            <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{asset('img/bab1-7/no-20.png')}}" alt="Website Nodejs.org">  
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto w-100">
            <div>Dalam beberapa kondisi, kode yang dimasukkan memerlukan beberapa baris. Misalnya, ingin membuat sebuah fungsi yang menghasilkan angka acak, dalam sesi REPL, tekan enter lalu ketikkan kode pada baris selanjutnya.</div>
            <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{asset('img/bab1-7/no-21.png')}}" alt="Website Nodejs.org">  
            <div>Node REPL memiliki kepintaran untuk mengetahui bahwa kode tersebut belum selesai, dan akan masuk ke dalam mode multi-line agar pengguna dapat melanjutkan pengetikkan kodenya. Untuk menyelesaikan cukup dengan menutuf definisi fungsi tersebut lalu tekan enter.</div>
            <img class="d-block mx-auto img-fluid my-2 p-4 shadow" src="{{asset('img/bab1-7/no-22.png')}}" alt="Website Nodejs.org"> 
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto w-100">
            <div>Anda dapat keluar dari prompt REPL dengan mengetik .exit dan tekan tombol Enter.</div>
        </div>
    </li>
</ol>
<p class="fw-bold text-primary mt-2">
    Command dot REPL
</p>
<p class="lh-lg">
    REPL memiliki beberapa perintah khusus, semuanya dimulai dengan titik. Perintah-perintah tersebut adalah:
</p>
<ul class="list-group list-group-flush">
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1 fw-semibold">.help</p>
                Menunjukkan bantuan perintah command dot.
            </div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1 fw-semibold">.editor</p>
                Mengaktifkan mode editor, untuk menulis kode JavaScript dengan mode multi-line dengan mudah. Setelah Anda berada dalam mode ini, tekan ctrl-D untuk menjalankan kode yang Anda tulis.
            </div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1 fw-semibold">.break</p>
                Saat memasukkan ekspresi multi-line, memasukkan perintah .break akan membatalkan input selanjutnya. Sama seperti menekan ctrl-C.
            </div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1 fw-semibold">.clear</p>
                Menyetel ulang konteks REPL ke objek kosong dan menghapus ekspresi multi-line yang sedang dimasukkan.
            </div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1 fw-semibold">.load</p>
                Memuat file JavaScript, relatif terhadap direktori kerja saat ini
            </div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1 fw-semibold">.save</p>
                Menyimpan semua yang Anda masukkan dalam sesi REPL ke dalam file (sebutkan nama file).
            </div>
        </div>
    </li>
    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
        <div class="d-flex align-items-start">
            <span class="h5 me-2 mb-0 p-0">•</span>
            <div>
                <p class="mb-1 fw-semibold">.exit</p>
                Keluar dari sesi REPL (sama seperti menekan ctrl-C dua kali).
            </div>
        </div>
    </li>
</ul>
<div class="p-0 p-md-3 my-4 my-md-2">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 1.7</div>
        </div>
        <div class="card-body">
            <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis berikut ini dengan baik dan benar!</p>
            <p class="fw-semibold bg-primary text-white p-2 rounded card-text">Pertanyaan 1 dari <span id="noSoal">1</span></p>
        </div>
    </div>
</div>
@endsection