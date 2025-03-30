@extends('layouts.base')

@section('container-base-content')
    <h2>3.3 Mempublikasikan Paket ke NPM</h2>

    <p class="lh-lg">
        Pengembang dapat membulikasikan projek yang mereka buat kedalam NPM. Sehingga projek yang dibuat dapat dibagikan.
        Berikut langkah-langkah dalam mempublikasikan projek Node:
    </p>

    <ol class="list-group list-group-numbered">
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100 ">
                <p class="m-0">Login atau buat akun di <a href="https://www.npmjs.com/">https://www.npmjs.com/</a></p>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100 ">
                <p class="m-0">Login di terminal dengan mengetikkan “npm login”, lalu akan diarahkan ke browser</p>

                <figure class="text-center">
                    <a href="{{ asset('img/bab3-3/no-42.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 28. Terminal mengarahkan untuk login akun NPM">
                        <img class="img-fluid d-block mx-auto my-2 shadow" src="{{ asset('img/bab3-3/no-42.png') }}"
                            alt="Gambar 28. Terminal mengarahkan untuk login akun NPM" style="max-height: 400px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 28. Terminal mengarahkan untuk login akun NPM
                    </figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100 ">
                <p class="m-0">Memasukkan Kode OTP</p>

                <figure class="text-center">
                    <a href="{{ asset('img/bab3-3/no-43.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 29. Masukkan Autentikasi NPM">
                        <img class="img-fluid d-block mx-auto my-2 shadow" src="{{ asset('img/bab3-3/no-43.png') }}"
                            alt="Gambar 29. Masukkan Autentikasi NPM" style="max-height: 400px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 29. Masukkan Autentikasi NPM</figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100 ">
                <p class="m-0">Jika sukses maka akan muncul notifikasi authentikasi sukses.</p>

                <figure class="text-center">
                    <a href="{{ asset('img/bab3-3/no-44.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 30. Autentikasi NPM Berhasil">
                        <img class="img-fluid d-block mx-auto my-2 shadow" src="{{ asset('img/bab3-3/no-44.png') }}"
                            alt="Gambar 30. Autentikasi NPM Berhasil" style="max-height: 300px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 30. Autentikasi NPM Berhasil</figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100 ">
                <p class="m-0">Dan pada terminal akan tampil output seperti berikut</p>

                <figure class="text-center">
                    <a href="{{ asset('img/bab3-3/no-45.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 31. Output pada Terminal setelah berhasil login NPM">
                        <img class="img-fluid d-block mx-auto my-2 shadow" src="{{ asset('img/bab3-3/no-45.png') }}"
                            alt="Gambar 31. Output pada Terminal setelah berhasil login NPM" style="max-height: 400px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 31. Output pada Terminal setelah berhasil login
                        NPM</figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100 ">
                <p class="m-0">Setelah login, kita perlu menambahkan user ke NPM dengan cara mengetikkan perintah “npm
                    adduser”</p>

                <figure class="text-center">
                    <a href="{{ asset('img/bab3-3/no-46.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 32. Menambahkan User NPM">
                        <img class="img-fluid d-block mx-auto my-2 shadow" src="{{ asset('img/bab3-3/no-46.png') }}"
                            alt="Gambar 32. Menambahkan User NPM" style="max-height: 400px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 32. Menambahkan User NPM</figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100 ">
                <p class="m-0">Untuk mempublikasikan projek anda, ketikkan perintah npm publish. Jika terjadi error, coba
                    rubah nama paket anda.</p>

                <figure class="text-center">
                    <a href="{{ asset('img/bab3-3/no-47.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 33. Publish paket NPM">
                        <img class="img-fluid d-block mx-auto my-2 shadow" src="{{ asset('img/bab3-3/no-47.png') }}"
                            alt="Gambar 33. Publish paket NPM" style="max-height: 400px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 33. Publish paket NPM</figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100 ">
                <p class="m-0">Paket telah berhasi dipublikasikan ke dalam NPM.</p>

                <figure class="text-center">
                    <a href="{{ asset('img/bab3-3/no-48.png') }}" data-fancybox="gallery"
                        data-caption="Gambar 34. Paket berhasil dipublikasikan ke NPM">
                        <img class="img-fluid d-block mx-auto my-2 shadow" src="{{ asset('img/bab3-3/no-48.png') }}"
                            alt="Gambar 34. Paket berhasil dipublikasikan ke NPM" style="max-height: 400px;">
                    </a>
                    <figcaption class="figure-caption text-center">Gambar 34. Paket berhasil dipublikasikan ke NPM
                    </figcaption>
                </figure>

            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto w-100 ">
                <p class="m-0">Paket telah berhasi dipublikasikan ke dalam NPM.</p>
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
