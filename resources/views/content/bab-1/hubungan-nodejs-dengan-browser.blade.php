@extends('layouts.base')

@section('container-base-content')

<h2>1.4 Hubungan Node.js dengan Browser</h2>
<p class="lh-lg">
    Browser dan Node.js menggunakan bahasa pemrograman yang sama, yaitu JavaScript. Namun, membangun aplikasi di Browser dan Node.js memiliki perbedaan. Ada beberapa perbedaan yang membuat pengguna harus menyesuaikan pengalaman pengembangan di antara keduanya.
</p>
<p class="lh-lg">
    Dari sudut pendang seorang Front End yang menggunakan JavaScript, kehadiran Node memberikan keuntungan yang sangat besar. Kemudahan dalam membangun sebuah aplikasi dengan menggabungkan sistem front end dan back end dalam satu bahasa.
</p>
<div class="card">
    <p class="text-primary text-center card-title h4">
        Yang berubah adalah ekosistemnya.
    </p>
</div>
<p class="lh-lg mt-2">
    Di browser, umumnya programmer hanya berinterkasi dengan menggunakan DOM (Document Object Model), atau API seperti Cookies. Dan hal tersebut tidak ada di dalam Node.js, karena dalam node tidak memiliki dokumen, window, dan semua objek yang disediakan oleh browser. Dan di browser tidak memiliki API yang disediakan dalam node seperti modul file sistem.
</p>
<p class="lh-lg">
    Perbedaan besar lainnya adalah, dengan Node.js dapat mengendalikan lingkungan pengembangan. Dapat menggunakan versi Node.js mana yang digunakan dalam pengembangan aplikasi. Dibandingkan dengan browser yang tidak memiliki kemampuan untuk mengatur browser yang digunakan oleh pengunjung web.
</p>
<p class="lh-lg">
    Dengan menggunakan node, memungkinkan programmer untuk menggunakan JavaScript ES2015+ yang lebih modern. Karena perkembangan JavaScript begitu cepat, namun browser cenderung menggunakan ES dengan versi yang lebih lama. Programmer dapat menggunakan Kompiler Babel untuk menyesuaikan kode agar kompetibel dengan ES5 sebelum mengirimkannya ke Browser, tetapi di Node.js tidak memerlukan itu.
</p>
<p class="lh-lg">
    Perbedaan lainnya adalah Node.js mendukung sistem modul CommonJS dan ES (sejak Node.js v12), sementara di browser standar Modul ES sedang dalam implementasi. Yang berarti Programmer dapat menggunakan fungsi require() dan import di node.js, sementara impor memiliki keterbatasan di browser.
</p>
<div class="p-0 p-md-3 my-4 my-md-2">
    <div class="card">
        <div class="p-3 d-flex align-items-center card-header">
            <div class="mb-0 h6 fw-semibold card-title">Aktivitas 1.4</div>
        </div>
        <div class="card-body">
            <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis berikut ini dengan baik dan benar!</p>
            <p class="fw-semibold bg-primary text-white p-2 rounded card-text">Pertanyaan 1 dari <span id="noSoal">1</span></p>
        </div>
    </div>
</div>
@endsection