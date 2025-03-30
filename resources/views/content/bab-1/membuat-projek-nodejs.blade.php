@extends('layouts.base')

@section('container-base-content')
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <!-- Fancybox JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

    <h2>1.9 Membuat Projek Node.js</h2>
    <p class="lh-lg">
        Program node.js dapat dijalankan pada terminal, dengan cara menjalankan file JavaScript tersebut melalu terminal,
        berikut program sederhana untuk menjalankan Node.js
    </p>
    <ol class="list-group list-group-numbered">
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Buat program yang menampilkan “Hello World”</div>

                <figure class="text-center">
                    <a href="{{ asset('img/bab1-8/no-23.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 25. Program Javascript menampilkan Hello World">
                        <img class="img-fluid d-block mx-auto my-2 shadow" src="{{ asset('img/bab1-8/no-23.png') }}"
                            alt="Gambar 25. Program Javascript menampilkan Hello World" style="max-height: 400px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 25. Program Javascript menampilkan Hello World
                    </figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100">
                <div>Dengan menggunakan terminal tulis “node nama_file”</div>

                <figure class="text-center">
                    <a href="{{ asset('img/bab1-8/no-24.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 26. Menjalankan Program Javasript dengan Node.js">
                        <img class="img-fluid d-block mx-auto my-2 shadow" src="{{ asset('img/bab1-8/no-24.png') }}"
                            alt="Gambar 26. Menjalankan Program Javasript dengan Node.js" style="max-height: 400px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 26. Menjalankan Program Javasript dengan Node.js
                    </figcaption>
                </figure>

            </div>
        </li>
    </ol>

    <script>
        Fancybox.bind("[data-fancybox]", {
            Toolbar: true, // Tampilkan toolbar
            animated: true, // Animasi transisi
        });
    </script>
@endsection
