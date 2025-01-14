@extends('layouts.base')

@section('container-base-content')
    <h1 class="mb-2">Pengenalan Node.js</h1>
    <div class="p-0 p-md-3 my-4 my-md-2">
        <div class="card">
            <div class="p-3 d-flex align-items-center card-header">
                <div class="mb-0 h6 fw-semibold card-title">
                    <i class="bi bi-book"></i> Tujuan Pembelajaran
                </div>
            </div>
            <div class="card-body">
                <p class="m-0 card-text">
                    Setelah menyelesaikan materi pada bab ini, mahasiswa diharapkan mampu
                </p>
                <ul class="list-group list-group-flush">
                    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                        <div class="d-flex align-items-start">
                            <span class="h5 me-2 mb-0 p-0">•</span>
                            Mengenal Javascript Runtime Node.js
                        </div>
                    </li>
                    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                        <div class="d-flex align-items-start">
                            <span class="h5 me-2 mb-0 p-0">•</span>
                            Melakukan installasi Node.js
                        </div>
                    </li>
                    <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
                        <div class="d-flex align-items-start">
                            <span class="h5 me-2 mb-0 p-0">•</span>
                            Menggunakan Editor Window Node.js REPL
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <h2>1.1 Javascript Runtime Node.js</h2>
    <p class="lh-lg">
        Node.js merupakan Runtime Environment JavaScript, bukan sebuah bahasa pemrograman. Node.js bersifat Open Source dan
        Cross Platform. Node JS Menjalankan mesin JavaScript V8, inti dari Google Chrome, di luar browser. Ini membuat
        aplikasi node menjadi sangat populer.

    </p>

    <p class="lh-lg">
        Node.js diciptakan oleh Ryan Dahl pada tahun 2009. Karena pada awalnya dia ingin membuat web server menggunakan
        event loop, bukan menggunakan thread. Dia sudah mencoba membuat dengan berbagai bahasa seperti C, Lua, dan Haskell.
        Oleh karena itu dia menciptakan Node.js yang membuat Bahasa Pemrograman JavaScript bisa berjalan pada sisi server.
    </p>

    <p class="lh-lg">
        Node JS berjalan dalam single process, tanpa membuat thread baru dalam setiap permintaan. NodeJs menyediakan
        serangkaian asynchronous I/O primitives dalam library yang mencegah kode javascript dari blocking. Secara umum
        pustaka pada node js ditulis dengan paradigma non-blocking, sehingga proses yang membutuhkan waktu lama (seperti
        mengakses penyimpanan atau jaringan) tidak akan menghentikan eksekusi program lain.
    </p>

    <p class="lh-lg">
        Hal ini memungkinkan node js untuk menangani ribuan koneksi secara bersamaan dengan satu server tanpa menimbulkan
        beban mengelola konkurensi thread, yang dapat menimbulkan sumber bug yang signifikan.
    </p>

    <p class="lh-lg">
        Node.js memiliki keunggulan bagi programmer frontend yang menulis dengan bahasa JavaScript untuk web dalam browser
        kini mereka dapat menuliskan kode pada sisi server tanpa perlu mempelajari bahasa baru.
    </p>

    <p class="lh-lg">
        Node.js, dapat menggunakan standar versi ECMAScript baru, karena pengguna tidak perlu menunggu untuk memperbarui
        browser, cukup dengan mengubah versi dari Node.js.
    </p>

    <div class="p-0 p-md-3 my-4 my-md-2" id="aktivitas">
        <div class="card">
            <div class="p-3 d-flex align-items-center card-header">
                <div class="mb-0 h6 fw-semibold card-title">Aktivitas 1.1</div>
            </div>
            <div class="card-body">
                <p class="small mb-3 card-text">Untuk menguji pemahaman kamu pada materi diatas, kerjakanlah kuis-kuis
                    berikut ini dengan baik dan benar!</p>
                <p class="fw-semibold bg-primary text-white p-2 rounded card-text">
                    Pertanyaan <span id="noSoal">1</span> dari <span id="totalSoal">1</span>
                </p>
                <p class="lh-lg" id="soal">Soal</p>
                <div class="mb-4" id="pilihanContainer"></div>
                <div id="penjelasan" hidden>
                    <div class="fade alert show" id="alertPenjelasan">
                        <div class="d-flex align-items-center mb-3">
                            <i class="me-2 bi fs-3" id="iconPenjelasan"></i>
                            <h6 class="fw-bold mb-0 mt-1" id="ketHasil"></h6>
                        </div>
                        <p class="mb-0" id="ketPenjelasan"></p>
                    </div>
                </div>
                <button class="btn btn-primary" id="btnNext">LANJUT</button>
            </div>
        </div>
    </div>

    <script>
        const salah = "Bukan merupakan jawaban";
        const bankSoal = [{
                soal: "Soal nomor 1",
                pilihan: ["A.", "B.", "C.", "D."],
                benar: 1,
                penjelasan: ""
            },
            {
                soal: "Soal nomor 2",
                pilihan: ["A.", "B.", "C.", "D."],
                benar: 3,
                penjelasan: ""
            },
            {
                soal: "Soal nomor 3",
                pilihan: ["A.", "B.", "C.", "D."],
                benar: 0,
                penjelasan: ""
            },
            {
                soal: "Soal nomor 4",
                pilihan: ["A.", "B.", "C.", "D."],
                benar: 2,
                penjelasan: ""
            },
            {
                soal: "Soal nomor 5",
                pilihan: ["A.", "B.", "C.", "D."],
                benar: 1,
                penjelasan: ""
            }
        ]


        let currentSoal = 0;

        const noSoal = document.getElementById("noSoal");
        const totalSoal = document.getElementById("totalSoal");
        const soal = document.getElementById("soal");
        const pilihanContainer = document.getElementById("pilihanContainer");
        const penjelasan = document.getElementById("penjelasan");
        const btnNext = document.getElementById("btnNext");

        // Penjelasan
        const alertPenjelasan = document.getElementById("alertPenjelasan");
        const iconPenjelasan = document.getElementById("iconPenjelasan");
        const ketHasil = document.getElementById("ketHasil");
        const ketPenjelasan = document.getElementById("ketPenjelasan");

        totalSoal.textContent = bankSoal.length;

        function loadSoal() {
            btnNext.disabled = true;
            pilihanContainer.innerHTML = "";

            const bank = bankSoal[currentSoal];
            noSoal.textContent = currentSoal + 1;
            soal.textContent = bank.soal;

            bank.pilihan.forEach((pilihan, index) => {
                const pilihanDiv = document.createElement("div");
                pilihanDiv.className = "fade mb-2 p-2 ps-3 bg-light false alert alert-dark show pilihan";
                pilihanDiv.dataset.index = index;

                const pilihanText = document.createElement("p");
                pilihanText.className = "card-text";
                pilihanText.innerHTML = `<span class="me-2">${String.fromCharCode(65 + index)}.</span> ${pilihan}`;

                pilihanDiv.appendChild(pilihanText);
                pilihanContainer.appendChild(pilihanDiv);

                pilihanDiv.addEventListener("click", () => pilihJawaban(index, pilihanDiv));
            })
        }

        function pilihJawaban(index, pilihanDiv) {
            const soal = bankSoal[currentSoal];
            const semuaPilihan = document.querySelectorAll(".pilihan");

            penjelasan.hidden = false;

            semuaPilihan.forEach(div => {
                div.classList.add("bg-light");
                div.classList.add("alert-dark");
            });

            if (index === soal.benar) {
                console.log('Pilihan benar');
                pilihanDiv.classList.remove("bg-light");
                pilihanDiv.classList.remove("alert-dark");
                pilihanDiv.classList.add("alert-primary");
                btnNext.disabled = false;
                // Disable all other options
                semuaPilihan.forEach(div => {
                    if (div !== pilihanDiv) {
                        div.style.pointerEvents = "none"; // Disable clicking
                        div.style.opacity = "0.5"; // Dim other options
                    }
                });

                // Penjelasan
                alertPenjelasan.classList.add("alert-success");
                iconPenjelasan.classList.add("bi-check-circle");
                ketHasil.innerHTML = "BENAR";
                ketPenjelasan = "Penjelasan"


            } else {
                console.log('Pilihan salah');
                pilihanDiv.classList.remove("bg-light");
                pilihanDiv.classList.remove("alert-dark");
                pilihanDiv.classList.add("alert-danger");

                // Penjelasan
                alertPenjelasan.classList.add("alert-danger");
                iconPenjelasan.classList.add("bi-x-circle");
                ketHasil.innerHTML = "BELUM BENAR";
                ketPenjelasan = "Penjelasan"

                setTimeout(() => {
                    pilihanDiv.classList.remove("alert-danger");
                    pilihanDiv.classList.add("bg-light");
                    pilihanDiv.classList.add("alert-dark");
                }, 500);
            }
        }

        btnNext.addEventListener("click", () => {
            currentSoal++;
            if (currentSoal < bankSoal.length) {
                loadSoal();
            } else {
                alert("Anda telah menyelesaikan semua soal!");
                btnNext.disabled = true;
            }
        });

        loadSoal();
    </script>
@endsection
