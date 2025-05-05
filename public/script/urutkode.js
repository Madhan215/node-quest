const leftBox = document.getElementById("leftBox");
const rightBox = document.getElementById("rightBox");
const checkBtn = document.getElementById("checkBtn");
const resetBtn = document.getElementById("resetBtn");
const alertPenjelasan = document.getElementById("alertPenjelasan");
const iconPenjelasan = document.getElementById("iconPenjelasan");
let ketHasil = document.getElementById("ketHasil");

// Inisialisasi audio
// Inisialisasi audio
// const soundBenar = document.getElementById("soundBenar");
// const soundSalah = document.getElementById("soundSalah");
// const soundPoin = document.getElementById("soundPoin");
// const soundError = document.getElementById("soundError");

function buatDraggable() {
    leftBox.innerHTML = '<p class="text-center fw-bold">Kode Acak</p>';
    rightBox.innerHTML =
        '<p class="text-center fw-bold">Susun Kode di Sini</p>';

    let shuffled = [...kodeUrutan].sort(() => Math.random() - 0.5);
    shuffled.forEach(({ order, text }) => {
        let item = document.createElement("div");
        item.classList.add("drag-item");
        item.setAttribute("draggable", "true");
        item.setAttribute("data-order", order);
        item.innerText = text;
        leftBox.appendChild(item);

        item.addEventListener("dragstart", (e) => {
            e.dataTransfer.setData("order", order);
            setTimeout(() => item.classList.add("dragging"), 0);
        });

        item.addEventListener("dragend", () => {
            item.classList.remove("dragging");
        });
    });
}

document.querySelectorAll(".dropzone").forEach((zone) => {
    zone.addEventListener("dragover", (e) => {
        e.preventDefault();
        const afterElement = getDragAfterElement(rightBox, e.clientY);
        const dragged = document.querySelector(".dragging");

        if (afterElement == null) {
            rightBox.appendChild(dragged);
        } else {
            rightBox.insertBefore(dragged, afterElement);
        }
    });

    zone.addEventListener("drop", (e) => {
        e.preventDefault();
        const order = e.dataTransfer.getData("order");
        const item = document.querySelector(
            `.drag-item[data-order='${order}']`
        );

        if (item) {
            if (rightBox.contains(item)) return; // Mencegah duplikasi elemen

            rightBox.appendChild(item);
        }
    });
});

// Fungsi untuk mencari elemen yang berada di bawah posisi drop
function getDragAfterElement(container, y) {
    const draggableElements = [
        ...container.querySelectorAll(".drag-item:not(.dragging)"),
    ];

    return draggableElements.reduce(
        (closest, child) => {
            const box = child.getBoundingClientRect();
            const offset = y - box.top - box.height / 2;
            return offset < 0 && offset > closest.offset
                ? {
                      offset,
                      element: child,
                  }
                : closest;
        },
        {
            offset: Number.NEGATIVE_INFINITY,
        }
    ).element;
}

checkBtn.addEventListener("click", () => {
    // Pastikan alert muncul
    alertPenjelasan.classList.add("show");
    alertPenjelasan.classList.remove("fade"); // Hapus

    let urutanUser = Array.from(rightBox.children)
        .filter((item) => item.classList.contains("drag-item"))
        .map((item) => item.dataset.order);

    let benar =
        JSON.stringify(urutanUser) ===
        JSON.stringify(kodeUrutan.map((k) => k.order.toString()));

    if (benar) {
        checkBtn.disabled = true;
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
                if (data.status === "success") {
                    soundPoin.play();
                } else {
                    soundError.play();
                }

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
        soundSalah.play();
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

resetBtn.addEventListener("click", buatDraggable);

buatDraggable(); // Inisialisasi pertama kali
