{{-- Untuk tampilan home --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Node Quest</title>
    {{-- Font PT Sans --}}
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    {{-- Bootstrap Lokal --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- Highlight JS CSS --}}
    <link rel="stylesheet" href="{{ asset('css\node_modules\highlight.js\styles\github.css') }}">
    {{-- fav icon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icon-node-quest.ico') }}">

    {{-- CSS Chatbot --}}

    <link rel="stylesheet" href="{{ asset('css/chatbot.css') }}">


    {{-- Style Latihan --}}
    <style>
        /* Style Aktivitas */
        .pilihan {
            transition: transform 0.2s, background-color 0.2s;
            /* Transisi halus */
        }

        .pilihan:active {
            transform: scale(0.99);
            /* Mengubah ukuran elemen sedikit saat ditekan */
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    @if (request()->routeIs('kuis-*') || request()->routeIs('evaluasi') )
        @yield('container-kuis')
    @else
        <div class="min-vh-100 d-flex flex-column" style="position: relative; z-index: 1">
            <nav class="navbar navbar-expand-md sticky-top bg-white">
                <div class="py-2 mx-2 mx-sm-auto container">
                    <a class="navbar-brand" href="/"><span class="fw-bold text-primary">Node Quest</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="mx-auto navbar-nav">
                            <a class="nav-link {{ Route::is('beranda') ? 'active fw-semibold' : '' }}"
                                aria-current="page" href="/">Beranda</a>
                            <a class="nav-link {{ Route::is('materi') ? 'active fw-semibold' : '' }}"
                                href="/materi">Materi</a>
                            <a class="nav-link {{ Route::is('editor') ? 'active fw-semibold' : '' }}"
                                href="/editor">JS-Editor</a>
                            <a class="nav-link {{ Route::is('terminal') ? 'active fw-semibold' : '' }}"
                                href="/terminal">REPL</a>
                            <a class="nav-link {{ Route::is('perihal') ? 'active fw-semibold' : '' }}"
                                href="/perihal">Perihal</a>
                        </div>
                        <div class="gap-2 navbar-nav">
                            <a role="button" tabindex="0" class="btn btn-outline-primary" href="/daftar">DAFTAR</a>
                            <a role="button" tabindex="0" class="btn btn-primary" href="/masuk">MASUK</a>
                        </div>
                    </div>
                </div>
            </nav>
            <section>
                <div class="sticky-top" style="position: relative; z-index: 0">
                    @yield('container-base')
                </div>
            </section>
            @yield('container-editor')
            @if (request()->routeIs('beranda') ||
                    request()->routeIs('materi') ||
                    request()->routeIs('livenode') ||
                    request()->routeIs('perihal') ||
                    request()->routeIs('chatbot'))
                <section class="bg-white text-dark p-3 p-sm-5 mb-5 mb-sm-0 flex-grow-1">
                    <div class="container">
                        @yield('container')
                    </div>
                </section>
            @endif
        </div>
        <div id="chatbot-container">
            <button id="chatbot-toggle">
                <i class="bi bi-chat"></i>
            </button>
            <div id="chatbot-box">
                <div id="chatbot-header">
                    <div class="chatbot-header-content">
                        <img src="{{ asset('img/Rotel.png') }}" alt="Chatbot">
                        <span class="chatbot-title">Rotel</span>
                    </div>
                    <button id="chatbot-close">&times;</button>
                </div>
                <div id="chatbot-content"></div>
                <div id="chatbot-input-container">
                    <input type="text" id="chatbot-input" placeholder="Ketik pesan...">
                    <button id="chatbot-send" onclick="sendMessage()"><i class="bi bi-send"></i></button>
                </div>
                
            </div>
        </div>
        <script>
            document.getElementById("chatbot-toggle").addEventListener("click", function(event) {
                let chatbox = document.getElementById("chatbot-box");
                chatbox.style.display = (chatbox.style.display === "block") ? "none" : "block";
                event.stopPropagation(); // Mencegah event bubbling agar tidak langsung tertutup
            });

            document.getElementById("chatbot-close").addEventListener("click", function() {
                document.getElementById("chatbot-box").style.display = "none";
            });

            const userInput = document.getElementById('chatbot-input');
            const chatBody = document.getElementById('chatbot-content');

            function waktu_now() {
                const nows = new Date();
                let waktu_sekarang = nows.getHours() + ':' + nows.getMinutes();
                return waktu_sekarang;
            };

            const now = new Date();

            function waktu() {
                const sekarang = new Date();
                const tanggalIndonesia = sekarang.toLocaleDateString('id-ID', {
                    year: 'numeric',
                    month: 'numeric',
                    day: 'numeric'
                });
                const waktuIndonesia = sekarang.toLocaleTimeString('id-ID', {
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit'
                });

                return tanggalIndonesia + ' - ' + waktuIndonesia

            }

            // Tambahkan event listener untuk mendeteksi penekanan tombol
            userInput.addEventListener('keydown', function(event) {
                // Periksa apakah tombol yang ditekan adalah Enter
                if (event.key === 'Enter' || event.keyCode === 13) {
                    event.preventDefault(); // Mencegah aksi default (jika diperlukan)
                    sendMessage(); // Panggil fungsi untuk mengirim pesan
                }
            });

            function askChatbot(question) {
                console.log(question)
                $.ajax({
                    url: '/ask-chatbot',
                    type: 'POST',
                    data: {
                        question: question
                    },
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#response').text(response.response);
                        console.log(response.response)
                        // Tambahkan respons chatbot (contoh statis)
                        const pesanDiv = document.createElement('div');
                        pesanDiv.classList.add('chat-message', 'bot-message');

                        const userMessage = document.createElement('div');
                        userMessage.className = 'chat-bubble';

                        // Membuat elemen nama
                        const userName = document.createElement('span');
                        userName.className = 'chat-name';
                        // userName.textContent = 'NodeBot ' + response.confidence; // Bisa diganti sesuai user
                        userName.textContent = 'Rotel '; // Bisa diganti sesuai user

                        // Membuat elemen waktu
                        const timeStamp = document.createElement('span');
                        timeStamp.className = 'chat-time';
                        timeStamp.textContent = waktu_now();

                        // Menambahkan teks pesan
                        const messageText = document.createElement('p');
                        messageText.textContent = response.response;

                        // Menggabungkan elemen
                        userMessage.appendChild(userName);
                        userMessage.appendChild(messageText);
                        userMessage.appendChild(timeStamp);

                        // Menata posisi teks agar tetap rapi
                        userMessage.style.textAlign = 'left';

                        // Menambahkan ke dalam pesanDiv
                        pesanDiv.appendChild(userMessage);
                        chatBody.appendChild(pesanDiv);
                    },
                    error: function() {
                        $('#response').text("Terjadi kesalahan.");
                    }
                });
            }

            function sendMessage() {

                console.log(waktu())
                if (userInput.value.trim() !== '') {
                    // Tambahkan pesan pengguna ke chat body
                    const pesanDiv = document.createElement('div');
                    pesanDiv.classList.add('chat-message', 'user-message');

                    const userMessage = document.createElement('div');
                    userMessage.className = 'chat-bubble';

                    // Membuat elemen nama
                    const userName = document.createElement('span');
                    userName.className = 'chat-name';
                    userName.textContent = 'Kamu'; // Bisa diganti sesuai user

                    // Membuat elemen waktu
                    const timeStamp = document.createElement('span');
                    timeStamp.className = 'chat-time';
                    timeStamp.textContent = waktu_now();

                    // Menambahkan teks pesan
                    const messageText = document.createElement('p');
                    messageText.textContent = userInput.value;

                    // Menggabungkan elemen
                    userMessage.appendChild(userName);
                    userMessage.appendChild(messageText);
                    userMessage.appendChild(timeStamp);

                    // Menata posisi teks agar tetap rapi
                    userMessage.style.textAlign = 'right';

                    // Menambahkan ke dalam pesanDiv
                    pesanDiv.appendChild(userMessage);
                    chatBody.appendChild(pesanDiv);


                    // Kirim ke fungsi ask
                    askChatbot(userInput.value)



                    // Scroll ke bawah
                    chatBody.scrollTop = chatBody.scrollHeight;

                    // Kosongkan input pengguna
                    userInput.value = '';
                }
            }

            // ✅ Tambahkan event listener untuk menutup chatbot saat klik di luar
            document.addEventListener("click", function(event) {
                let chatbox = document.getElementById("chatbot-box");
                let toggleButton = document.getElementById("chatbot-toggle");

                // Jika chatbot terbuka dan klik terjadi di luar chatbot & tombolnya
                if (chatbox.style.display === "block" && !chatbox.contains(event.target) && event.target !==
                    toggleButton) {
                    chatbox.style.display = "none";
                }
            });
        </script>
        <footer class="d-flex justify-content-center align-items-center py-3">
            <div class="d-flex align-items-center">
                <span class="fw-bold text-primary me-2">Node Quest</span>
                <span class="text-muted">© 2025 PilkomMedia</span>
            </div>
        </footer>
    @endif

    {{-- Bootstrap JS --}}
    <script src="{{ asset('css\node_modules\bootstrap\dist\js\bootstrap.bundle.js') }}"></script>
    {{-- Sweet Alert --}}
    <script src="{{ asset('css/node_modules/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
    {{-- Highlight JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>
    {{-- Inisiasi Highlight JS --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            hljs.highlightAll();
        });
    </script>
    {{-- Script untuk Script Latihan --}}
    <script src="{{ asset('script/latihan.js') }}"></script>

</body>

</html>
