const http = require("http");
const { Server } = require("socket.io");
const { spawn } = require("child_process");

const server = http.createServer();
const io = new Server(server, {
    cors: {
        origin: "*", // Pastikan sesuai dengan domain Laravel
        methods: ["GET", "POST"]
    }
});

io.on("connection", (socket) => {
    console.log("Client connected:", socket.id);

    // Jalankan REPL Node.js sebagai child process
    const repl = spawn("node", ["-i"], { stdio: ["pipe", "pipe", "pipe"] });

    // Kirim output dari REPL ke client
    repl.stdout.on("data", (data) => {
        socket.emit("output", data.toString());
    });

    repl.stderr.on("data", (data) => {
        socket.emit("output", "Error: " + data.toString());
    });

    // Terima perintah dari client dan kirim ke REPL
    socket.on("input", (cmd) => {
        repl.stdin.write(cmd + "\n");
    });

    socket.on("disconnect", () => {
        console.log("Client disconnected:", socket.id);
        repl.kill();
    });
});

server.listen(3000, () => {
    console.log("WebSocket Server running on http://localhost:3000");
});
