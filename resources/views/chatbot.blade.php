@extends('layouts.main')

@section('container')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .chat-container {
            margin: 20px;
            width: 300px;
            height: 400px;
            overflow-y: auto;
            scrollbar-width: thin;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            margin: auto;
            flex-direction: column;
            font-size: 15px;
        }

        .chat-header {
            color: #fff;
            padding-top: 10px;
            text-align: center;
        }

        .chat-body {
            flex: 1;
            padding: 10px;
            overflow-y: auto;
        }

        .chat-message {
            display: flex;
        }

        .user-message {
            justify-content: flex-end;
            /* Pesan pengguna di sebelah kanan */
        }

        .bot-message {
            justify-content: flex-start;
            /* Pesan bot di sebelah kiri */
        }

        .chat-name {
            font-weight: bold;
            display: block;
            font-size: 12px;
        }

        .user-message .chat-time {
            font-size: 10px;
            color: black;
            display: block;
            text-align: left;
        }

        .bot-message .chat-time {
            font-size: 10px;
            color: black;
            display: block;
            text-align: right;
        }

        .user-message .chat-bubble {
            background-color: lightblue;
            color: black;
            padding: 10px;
            border-radius: 10px;
            max-width: 70%;
            position: relative;
            margin: 5px 0;
        }

        .user-message .chat-bubble::after {
            content: "";
            position: absolute;
            right: -10px;
            top: 50%;
            width: 0;
            height: 0;
            border: 10px solid transparent;
            border-left-color: lightblue;
            border-right: 0;
            border-top: 0;
            margin-top: -5px;
        }

        /* Untuk pesan bot */
        .bot-message .chat-bubble {
            background-color: lightgreen;
            color: black;
            padding: 10px;
            border-radius: 10px;
            max-width: 70%;
            position: relative;
            margin: 5px 0;
        }

        .bot-message .chat-bubble::after {
            content: "";
            position: absolute;
            left: -10px;
            top: 50%;
            width: 0;
            height: 0;
            border: 10px solid transparent;
            border-right-color: lightgreen;
            border-left: 0;
            border-top: 0;
            margin-top: -5px;
        }

        .chat-bubble p {
            margin-bottom: 5px;
        }

        #user-input {
            flex: 1;
            padding: 10px;
            border: none;
            border-top: 1px solid #ddd;
        }

        button {
            padding: 10px 20px;
            border: none;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="chat-container">
        <div class="bg-primary chat-header">
            <p>Chatbot Node.js</p>
        </div>
        <div class="chat-body" id="chat-body">
            <!-- Pesan akan ditampilkan di sini -->
        </div>
        <div class="chat-footer d-flex">
            <input class="form-control me-2" type="text" id="user-input" placeholder="Ketik pesan Anda...">
            <button onclick="sendMessage()" class="btn btn-primary">Kirim</button>
        </div>
    </div>

    <script>
        const userInput = document.getElementById('user-input');
        const chatBody = document.getElementById('chat-body');
        const nowsds = new Date();

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
                    userName.textContent = 'NodeBot ' + response.confidence; // Bisa diganti sesuai user

                    // Membuat elemen waktu
                    const timeStamp = document.createElement('span');
                    timeStamp.className = 'chat-time';
                    timeStamp.textContent = now.getHours() + ':' + now.getMinutes();

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
                timeStamp.textContent = now.getHours() + ':' + now.getMinutes();

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
    </script>
@endsection
