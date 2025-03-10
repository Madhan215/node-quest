@extends('layouts.main')

@section('container-editor')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- Terminal --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/xterm/css/xterm.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/xterm/lib/xterm.js"></script>
        <style>
            .terminal {
                scrollbar-width: thin;
                /* Untuk Firefox */
                scrollbar-color: #888 transparent;
                /* Warna thumb dan track */
            }

            /* Untuk Chrome, Edge, dan Safari */
            .terminal::-webkit-scrollbar {
                width: 4px;
                /* Lebar scrollbar lebih kecil */
                height: 4px;
                /* Scrollbar horizontal jika ada */
            }

            .terminal::-webkit-scrollbar-thumb {
                background: #666;
                /* Warna thumb */
                border-radius: 3px;
                /* Agar smooth */
            }

            .terminal::-webkit-scrollbar-thumb:hover {
                background: #444;
                /* Warna thumb saat hover */
            }

            .terminal::-webkit-scrollbar-track {
                background: transparent;
                /* Hilangkan track */
            }
        </style>
    </head>

    <div class="container mt-4">
        <div class="card shadow-lg border-0">
            <div class="card-header bg-primary text-white d-flex align-items-center justify-content-between ">
               
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="d-block fw-semibold"><i class="bi bi-terminal"></i> Node.js REPL Terminal</div>
                    </div> <button class="border text-white btn btn-outline-dark" onclick="clearOutput()"><i
                            class="bi bi-trash"></i></button>
                
            </div>
            <div class="card-body bg-light p-3">
                <div class="overflow-auto vh-75 border rounded p-2 bg-dark text-white terminal">
                    <div id="terminal-container"></div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.socket.io/4.7.2/socket.io.min.js"></script>

    {{-- Terminal Shell --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/xterm/lib/xterm.js"></script>

    <script>
        const socket = io("http://localhost:3000");
            const term = new Terminal({
                cursorBlink: true,
                fontSize: 14
            });
        document.addEventListener("DOMContentLoaded", function() {
            

            term.open(document.getElementById("terminal-container"));

            socket.on("output", (data) => {
                let cleanOutput = data.replace(/\r/g, "").replace(/\t/g,
                    "    "); // Hapus \r dan ganti \t dengan spasi
                let lines = cleanOutput.split("\n");

                lines = lines.map(line => line.trimStart()); // Hilangkan spasi di awal baris

                // Hapus prompt tambahan `>` di awal baris kecuali di prompt utama
                lines = lines.filter(line => !/^>\s*$/.test(line));

                lines.forEach(line => term.writeln(line));

                // Pastikan prompt `>` hanya muncul sekali di akhir
                if (!cleanOutput.trim().endsWith(">")) {
                    term.write("> ");
                }
            });

            // Menampilkan prompt awal
            function showPrompt() {
                term.write("\r\n> ");
            }

            let commandBuffer = "";
            let commandHistory = []; // Menyimpan riwayat perintah
            let historyIndex = -1; // Index untuk navigasi riwayat

            term.onData((data) => {
                if (data === "\r") { // Jika pengguna menekan Enter
                    term.writeln(""); // Baris baru
                    if (commandBuffer.trim() !== "") {
                        socket.emit("input", commandBuffer); // Kirim ke server
                    }
                    commandBuffer = ""; // Reset buffer
                    showPrompt();
                } else if (data === "\x7F") { // Backspace (ASCII 127)
                    if (commandBuffer.length > 0) {
                        commandBuffer = commandBuffer.slice(0, -1);
                        term.write("\b \b"); // Hapus karakter terakhir
                    }
                } else {
                    commandBuffer += data;
                    term.write(data); // Tampilkan input di terminal
                }
            });

            showPrompt(); // Tampilkan prompt pertama kali

            
            
        });
        function clearOutput() {
            term.clear();
            // Jika ingin tetap menampilkan prompt setelah cls:
            // term.writeln("Terminal Dibersihkan!");
        }
    </script>
@endsection
