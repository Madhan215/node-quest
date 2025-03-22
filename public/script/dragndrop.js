const draggables = document.querySelectorAll(".draggable");
const dropzones = document.querySelectorAll(".dropzone");
const checkBtn = document.getElementById("checkBtn");
const resultText = document.getElementById("result");
const alertPenjelasan = document.getElementById("alertPenjelasan");
const iconPenjelasan = document.getElementById("iconPenjelasan");
let ketHasil = document.getElementById("ketHasil");

let draggedElement = null;

// Drag & Drop untuk Desktop
draggables.forEach((draggable) => {
    draggable.addEventListener("dragstart", (e) => {
        e.dataTransfer.setData("text", e.target.id);
        draggedElement = e.target;
    });
});

// Drag & Drop untuk HP (Touch)
draggables.forEach((draggable) => {
    draggable.addEventListener("touchstart", (e) => {
        draggedElement = e.target;
    });

    draggable.addEventListener("touchmove", (e) => {
        e.preventDefault();
        const touchLocation = e.targetTouches[0];
        draggedElement.style.position = "absolute";
        draggedElement.style.left = touchLocation.clientX + "px";
        draggedElement.style.top = touchLocation.clientY + "px";
    });

    draggable.addEventListener("touchend", (e) => {
        draggedElement.style.position = "relative";
    });
});

// Drop Area untuk Desktop & HP
dropzones.forEach((dropzone) => {
    dropzone.addEventListener("dragover", (e) => {
        e.preventDefault();
    });

    dropzone.addEventListener("drop", (e) => {
        e.preventDefault();
        const itemId = e.dataTransfer.getData("text");
        const item = document.getElementById(itemId);
        dropzone.appendChild(item);
    });

    dropzone.addEventListener("touchend", (e) => {
        if (draggedElement) {
            dropzone.appendChild(draggedElement);
        }
    });
});

// Validasi Jawaban saat tombol "Periksa" ditekan
checkBtn.addEventListener("click", () => {
    // Pastikan alert muncul
    alertPenjelasan.classList.add("show");
    alertPenjelasan.classList.remove("fade"); // Hapus sementara fade agar muncul langsung

    const correctFrontend = ["html", "css", "js"];
    const correctBackend = ["php", "mysql", "python"];

    const frontendItems = Array.from(
        document.getElementById("frontend").children
    ).map((item) => item.id);
    const backendItems = Array.from(
        document.getElementById("backend").children
    ).map((item) => item.id);

    let correctCount = 0;

    frontendItems.forEach((item) => {
        if (correctFrontend.includes(item)) correctCount++;
    });

    backendItems.forEach((item) => {
        if (correctBackend.includes(item)) correctCount++;
    });

    if (correctCount === 6) {
        // resultText.textContent = "✅ Semua jawaban benar!";
        // resultText.style.color = "green";
        ketHasil.innerHTML = "BENAR";
        alertPenjelasan.classList.remove("alert-danger");
        alertPenjelasan.classList.add("alert-success");
        iconPenjelasan.classList.remove("bi-x-circle");
        iconPenjelasan.classList.add("bi-check-circle");

        var completeElement = document.getElementById("completeJS");
        var nextButton = document.getElementById("nextButton");

        if (completeElement) {
            completeElement.style.display = "";
            nextButton.classList.remove("disabled");
        }

        fetch("/poinKuis", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken,
            },
            body: JSON.stringify({
                step_id: stepId,
            }),
        })
            .then((response) => response.json())
            .then((data) => {
                Swal.fire({
                    title: data.status === "success" ? "Selamat!" : "Oops!",
                    text: data.message,
                    icon: data.status === "success" ? "success" : "error",
                });
            })
            .catch((error) => {
                Swal.fire({
                    title: "Oops!",
                    text: "Terjadi kesalahan, silakan coba lagi.",
                    icon: "error",
                });
            });
    } else {
        // resultText.textContent = "❌ Masih ada yang salah, coba lagi!";
        // resultText.style.color = "red";
        ketHasil.innerHTML = "BELUM BENAR";
        alertPenjelasan.classList.add("alert-danger");
        iconPenjelasan.classList.add("bi-x-circle");

        // Setelah 5 detik, sembunyikan dengan efek fade-out
        setTimeout(() => {
            alertPenjelasan.classList.add("fade"); // Tambahkan fade agar efek hilangnya smooth
            alertPenjelasan.classList.remove("show"); // Hilangkan elemen
        }, 3000); // 5000ms = 5 detik
    }
});
