@extends('layouts.base')

@section('container-base-content')
    <h2>1.3 Persiapan Belajar Node.js</h2>
    <p class="lh-lg">
        Sebagai seorang pemula, sulit mencapai di titik mana seorang programmer percaya diri dengan kemampuan programming
        nya. Saat belajar membuat kode, programmer mungkin juga bingung sampai mana batasan mereka dalam belajar JavaScript.
        Begitu pula dengan Node.js, dan sebaliknya. Oleh karena itu, dalam mempelajari Node.js diperlukan pengetahuan
        mendasar yang akan mendukung pembelajaran.
    </p>
    <div class="lh-lg">
        Berikut hal mendasar yang sebaiknya dipelajari sebelum mempelajari Node.js lebih mendalam, menurut situs resmi dari
        Node.js:
    </div>
    <ul class="list-group list-group-flush">
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex align-items-start">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1">Struktur Leksikal</p>
                    Merupakan dasar dari sintaks dalam tata bahasa suatu bahasa pemrograman, mencakup karakter, kata kunci,
                    simbol, literal, dan operator yang dapat digunakan. Misalnya syarat dalam penulisan variabel, aturan
                    dalam penggunaan tanda kurung, dan titik koma.
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1">Tipe Data</p>
                    Tipe data merupakan jenis nilai yang disimpan dalam suatu veriabel. Contoh tipe data dasar yang ada
                    dalam JavaScript mencakup:
                    <table class="table table-borderless">
                        <tr>
                            <td class="text-dark">Number</td>
                            <td class="text-dark">: angka, seperti 21, 3.14</td>
                        </tr>
                        <tr>
                            <td class="text-dark">String</td>
                            <td class="text-dark">: teks, seperti "Hello World"</td>
                        </tr>
                        <tr>
                            <td class="text-dark">Boolean</td>
                            <td class="text-dark">: nilai benar atau salah, true atau false"</td>
                        </tr>
                        <tr>
                            <td class="text-dark">Array</td>
                            <td class="text-dark">: menyimpan beberapa nilai dalam urutan tertentu"</td>
                        </tr>
                    </table>
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex align-items-start">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1">Ekpresi</p>
                    Merupakan suatu kombinasi nilai, variabel, operator, dan fungsi yang menghasilkan suatu nilai baru.
                    Contoh dari ekspresi sederhana ini adalah 5 + 2 yang menghasilkan nilai 7.
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex align-items-start">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1">Class</p>
                    Merupakan template yang digunakan untuk membuat objek. Class umumnya digunakan dalam Pemrograman
                    Berbasis Objek (Object Oriented Programming). Class mendukung metode construct, method, getter, setter,
                    inheritence, dan lainnya. Berikut contoh kodenya:
                    <pre class="border rounded"><code class="javascript m-0 pt-1 pb-1">class Person {
    constructor(name) {
        this.name = name;
    }
    greet() {
        console.log(`Hallo, ${this.name}!`);
    }
}</code></pre>
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1">Variabel</p>
                    Variabel merupakan tempat yang digunakan untuk menyimpan data agar dapat diakses dan dimanipulasi. Dalam
                    JavaScript, variabel dideklerasikan menggunakan var, let, atau const. Contohnya let umur = 22
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1">Fungsi</p>
                    Fungsi merupakan blok kode yang dapat dijalankan kembali untuk mengerjakan instruksi tertentu. Dalam
                    JavaScript, fungsi dideklerasikan dengan kata kunci function atau menggunakan arrow function.
                    <pre class="border rounded"><code class="javascript m-0 pt-1 pb-1">function sum(a, b) {
    return a + b;
}</code></pre>
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1">Operator this</p>
                    Operator this merupakan referensi terhadap objek saat ini. Yang menunjukkan kepada konteks dari jalannya
                    program tersebut.
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1">Fungsi Arrow</p>
                    Merupakan sintaks ringkas untuk mendifinisikan fungsi dengan menggunakan simbol ( => ). Contoh
                    <code class="javascript">
                        const sum = (a, b) => a + b;
                    </code>
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1">Perulangan</p>
                    Perulangan merupakan cara untuk mengeksekusi kode secara berulang. Javascript memiliki beberapa jenis
                    fungsi perulangan diantaranya for, while, dan do … while.
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1">Scope</p>
                    Merupakan suatu area dimana variabel atau fungsi dapat diakses. Javascript memiliki beberapa tipe scope,
                    diantaranya:
                    <table class="table table-borderless mb-0">
                        <tr>
                            <td class="text-dark">
                                <p class="me-6">Scope Global</p>
                            </td>
                            <td class="text-dark">
                                <p>: Variabel yang dapat diakses dimana saja.</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-dark">
                                <p class="me-6">Scope lokal</p>
                            </td>
                            <td class="text-dark">
                                <p>: Variabel yang hanya dapat diakses dalam fungsi atau blok tempat variabel tersebut
                                    dideklerasikan.</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1">Array</p>
                    Array merupakan tipe daya yang dapat menyimpan beberapa nilai dalam urutan tertentu. Setiap elemen
                    didalam array diakses menggunakan indeks dari 0 dan seterusnya sesuai dengan jumlah elemen yang ada
                    dalam array tersebut. Contoh:
                    <code class="javascript">
                        let buah = [“apel”, “pisang”, “semangka”]
                    </code>
                </div>
            </div>
        </li>
        <li class="text-dark m-0 p-0 border-0 ms-3 mt-2 list-group-item">
            <div class="d-flex">
                <span class="h5 me-2 mb-0 p-0">•</span>
                <div>
                    <p class="mb-1">Templat Literals</p>
                    Templat literal merupakan cara penulisan string yang memungkinkan penyisipan suatu variabel dengan
                    menggunakan tanda backtick (`) dan interpolasi ${interpolasi}
                </div>
            </div>
        </li>
    </ul>
    <p class="lh-lg mt-2">
        Dengan pemahaman terhadap konsep tersebut, Anda akan siap untuk mengembangkan kemampuan di Node.js.
    </p>

    <div class="p-0 p-md-3 my-4 my-md-2">
        <div class="card">
            <div class="p-3 d-flex align-items-center justify-content-between card-header">
                <div class="mb-0 h6 fw-semibold card-title">Aktivitas 1.3</div>
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
                <p class="mb-3 card-text">
                    Untuk menguji pemahaman kamu pada materi diatas, tentukan topik mana saja yang perlu dipelajari dalam
                    melanjutkan pembelajaran Node.js. Beri centang (<i class="bi bi-check"></i>) pada topik yang sesuai.
                </p>
                <form id="quizForm">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="tipeData">
                        <label class="form-check-label" for="tipeData">Tipe Data</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="array">
                        <label class="form-check-label" for="array">Array</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="dom">
                        <label class="form-check-label" for="dom">DOM</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="variabel">
                        <label class="form-check-label" for="variabel">Variabel</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="json">
                        <label class="form-check-label" for="json">JSON</label>
                    </div>

                    <button type="button" class="btn btn-success mt-3" id="checkBtn">Periksa</button>

                    <div class="alert mt-3" id="feedbackBox"></div>
                </form>
            </div>
        </div>
    </div>
    <script>
        let stepId = 3;
        document.getElementById('checkBtn').addEventListener('click', () => {
            // Topik yang benar dalam Node.js
            const correctTopics = ["tipeData", "array", "variabel", "json"];

            let selectedTopics = [];
            document.querySelectorAll('.form-check-input:checked').forEach((checkbox) => {
                selectedTopics.push(checkbox.id);
            });

            let feedbackBox = document.getElementById('feedbackBox');

            if (JSON.stringify(selectedTopics.sort()) === JSON.stringify(correctTopics.sort())) {
                feedbackBox.className = "alert alert-success mt-3";
                feedbackBox.innerHTML =
                    "✅ Jawaban benar! Topik yang dipilih sesuai untuk melanjutkan pembelajaran Node.js.";

                    var completeElement = document.getElementById("completeJS");
        var nextButton = document.getElementById("nextButton");

        if (completeElement) {
            completeElement.style.display = "";
            nextButton.classList.remove("disabled");
        }
                    
                fetch('/poinKuis', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            step_id: stepId
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        Swal.fire({
                            title: data.status === "success" ? "Selamat!" : "Oops!",
                            text: data.message,
                            icon: data.status === "success" ? "success" : "error",
                        });
                    })
                    .catch(error => {
                        Swal.fire({
                            title: "Oops!",
                            text: "Terjadi kesalahan, silakan coba lagi.",
                            icon: "error",
                        });
                    });
            } else {
                feedbackBox.className = "alert alert-danger mt-3";
                feedbackBox.innerHTML =
                    "❌ Jawaban kurang tepat. Topik yang sesuai: Tipe Data, Array, Variabel, JSON.";
                setTimeout(() => {
                    feedbackBox.classList.add('fade'); // Tambahkan fade agar efek hilangnya smooth
                    feedbackBox.classList.remove('show'); // Hilangkan elemen
                }, 3000); // 5000ms = 5 detik
            }

            feedbackBox.classList.add('show');
            feedbackBox.classList.remove('fade'); // Hapus 

            // Sembunyikan feedback setelah 5 detik

        });
    </script>
@endsection
