@extends('layouts.main')

@section('container-editor')
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net;">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Terminal --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/xterm/css/xterm.css">
    <style>
        #terminal-container {
            height: 100%;
            background: black;
            padding: 10px;
            overflow: hidden;
        }

        .terminal .xterm-viewport::-webkit-scrollbar {
            width: 6px;
            /* Lebar scrollbar */
        }

        .terminal .xterm-viewport::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.2);
            /* Warna thumb */
            border-radius: 4px;
        }

        .terminal .xterm-viewport::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.1);
            /* Warna track */
        }
    </style>

    <!-- CodeMirror CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/theme/dracula.min.css">

    <!-- CodeMirror JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/javascript/javascript.min.js"></script>

    <!-- Auto Close Brackets & Tags -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/addon/edit/closebrackets.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/addon/edit/closetag.min.js"></script>

    <div class="g-0 flex-grow-1 border-bottom row h-100">
        <div class="d-flex flex-column col-md-8">
            <form id="editorForm" action="/run" method="POST">
                @csrf
                <div class="rounded-0 border-0 h-100 card">
                    <div
                        class="d-flex align-items-center justify-content-between bg-white rounded-0 border-top border-bottom border-end card-header">
                        <div class="d-flex align-items-center justify-content-center text-primary">
                            <div class="d-block fw-semibold"><i class="bi bi-code-slash"></i> JS EDITOR</div>
                        </div>
                        <div class="d-flex-gap-2">
                            <button type="submit" class="btn btn-primary" onclick="simpan()">
                                <i class="bi bi-floppy"></i> SIMPAN
                            </button>
                        </div>
                    </div>
                    <div class="p-0 border-end card-body h-100">
                        <textarea name="code" id="code"></textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="bg-danger d-flex flex-column col-md-4">
            <div class="rounded-0 border-0 flex-grow-1 card">
                <div
                    class="d-flex align-items-center justify-content-between bg-white rounded-0 border-top border-bottom border-end card-header">
                    <div class="d-flex align-items-center justify-content-center text-primary">
                        <div class="d-block fw-semibold"><i class="bi bi-terminal"></i> TERMINAL</div>
                    </div> <button class="border btn btn-outline-dark" onclick="clearOutput()"><i
                            class="bi bi-trash"></i></button>
                </div>
                <div class="bg-light p-0 card-body">
                    <div class="m-0 h-100 text-muted overflow-auto">
                        {{-- <pre id="output"></pre> --}}
                        <div id="terminal-container" class="terminal"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
                lineNumbers: true,
                mode: "javascript",
                theme: "dracula",
                autoCloseBrackets: true, // Auto-close brackets
                autoCloseTags: true, // Auto-close HTML tags
                viewportMargin: Infinity, // Memastikan tinggi penuh
                lineWrapping: true
            });

            editor.setSize(null, 900)

            let output = document.getElementById('output');

            $("#editorForm").submit(function(event) {
                event.preventDefault();

                editor.save(); // Paksa textarea diperbarui sebelum submit

                let formData = {
                    _token: $("input[name='_token']").val(),
                    code: editor.getValue() // Mengambil nilai langsung dari CodeMirror
                };

                $.ajax({
                    url: $(this).attr("action"),
                    type: $(this).attr("method"),
                    data: formData,
                    success: function(response) {
                        $("#output").html(
                            "<pre class='text-success'>" + response.output.replaceAll("\n",
                                "<br>") + "</pre>"
                        );
                    },
                    error: function(xhr) {
                        $("#output").html(
                            "<pre class='text-danger'>" + xhr.responseJSON.output
                            .replaceAll("\n", "<br>") + "</pre>"
                        );
                    }
                });
            });
        });
    </script>

    {{-- Terminal --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/xterm/lib/xterm.js"></script>

    <script>
        const term = new Terminal({
            cursorBlink: true,
            fontSize: 14
        });

        term.open(document.getElementById('terminal-container'));

        term.writeln("Ketik perintah dan tekan Enter.");
        term.write("> ");

        let commandBuffer = "";

        term.onKey(e => {
            const key = e.key;
            const charCode = key.charCodeAt(0);

            if (charCode === 13) { // Enter ditekan
                term.writeln(""); // Baris baru

                // Simpan log ke file
                fetch('/log-command', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                        body: JSON.stringify({
                            command: commandBuffer
                        })
                    })
                    .then(response => response.json())
                    .then(data => console.log("Log berhasil:", data.message))
                    .catch(error => console.error("Log gagal:", error));

                // Kirim command ke server Laravel untuk dieksekusi
                fetch('/execute', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                        body: JSON.stringify({
                            command: commandBuffer
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        const cleanOutput = data.output.replace(/\r/g, "").replace(/\t/g, "    ");
                        const lines = cleanOutput.split("\n");

                        lines.forEach(line => term.writeln(line.trimStart())); // Trim spasi di awal
                        console.log(data.output);
                        term.write("> "); // Kembalikan prompt
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        term.writeln("Terjadi kesalahan!");
                    });

                commandBuffer = ""; // Reset buffer
            } else if (charCode === 127) { // Backspace
                if (commandBuffer.length > 0) {
                    commandBuffer = commandBuffer.slice(0, -1);
                    term.write("\b \b");
                }
            } else {
                commandBuffer += key;
                term.write(key);
            }
        });

        function clearOutput() {
            term.clear();
            // Jika ingin tetap menampilkan prompt setelah cls:
            // term.writeln("Terminal Dibersihkan!");
        }
    </script>

    {{-- Sweet Alert --}}

    <script>
        function simpan() {
            Swal.fire({
                title: "Berhasil Menyimpan",
                text: "Jalankan di terminal dengan perintah 'node code'",
                icon: "success"
            });
        }
    </script>
@endsection
