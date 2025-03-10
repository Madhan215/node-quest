import './bootstrap';
import io from "socket.io-client";

const socket = io("http://localhost:3000");

socket.on("connect", () => {
    console.log("Connected to WebSocket:", socket.id);
});

socket.on("message", (msg) => {
    console.log("Received message:", msg);
});

function sendMessage(msg) {
    socket.emit("message", msg);
}

window.sendMessage = sendMessage; // Bisa dipanggil dari browser
