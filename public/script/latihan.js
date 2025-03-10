let currentSoal = 0;

const noSoal = document.getElementById("noSoal");
const totalSoal = document.getElementById("totalSoal");
const soal = document.getElementById("soal");
const pilihanContainer = document.getElementById("pilihanContainer");
const penjelasan = document.getElementById("penjelasan");
const btnNext = document.getElementById("btnNext");

// Bagian Penjelasan
const alertPenjelasan = document.getElementById("alertPenjelasan");
const iconPenjelasan = document.getElementById("iconPenjelasan");
let ketHasil = document.getElementById("ketHasil");
let ketPenjelasan = document.getElementById("ketPenjelasan");

// Mendapatkan panjang dari soal
totalSoal.textContent = bankSoal.length;

// Load soal
function loadSoal() {
    btnNext.disabled = true;
    pilihanContainer.innerHTML = "";

    const bank = bankSoal[currentSoal];
    noSoal.textContent = currentSoal + 1;
    soal.textContent = bank.soal;

    if (bank.input) {
        // Jika soal membutuhkan input, buat input text dan tombol periksa dalam satu container
const inputGroup = document.createElement("div");
inputGroup.className = "input-group mt-2"; // Menggunakan Bootstrap untuk sejajarkan elemen

const inputField = document.createElement("input");
inputField.type = "text";
inputField.className = "form-control";
inputField.placeholder = "Ketik jawaban Anda...";

// Tombol Periksa
const btnPeriksa = document.createElement("button");
btnPeriksa.textContent = "Periksa";
btnPeriksa.className = "btn btn-primary";
btnPeriksa.disabled = true; // Tombol nonaktif saat awal

// Menambahkan input dan tombol ke dalam div
inputGroup.appendChild(inputField);
inputGroup.appendChild(btnPeriksa);
pilihanContainer.appendChild(inputGroup);

// Aktifkan tombol jika ada teks dalam input
inputField.addEventListener("input", () => {
    btnPeriksa.disabled = inputField.value.trim() === "";
});

// Event saat tombol Periksa ditekan
btnPeriksa.addEventListener("click", () => {
    cekJawabanInput(inputField, bank.jawabanBenar);
    btnPeriksa.disabled = true; // Nonaktifkan tombol setelah ditekan
});

    } else {
        // Jika soal pilihan ganda, tampilkan pilihan jawaban
        bank.pilihan.forEach((pilihan, index) => {
            const pilihanDiv = document.createElement("div");
            pilihanDiv.className = "fade mb-2 p-2 ps-3 bg-light false alert alert-dark show pilihan";
            pilihanDiv.dataset.index = index;
            pilihanDiv.style.cursor = 'pointer';

            const pilihanText = document.createElement("p");
            pilihanText.className = "card-text";
            pilihanText.innerHTML = `<span class="me-2">${String.fromCharCode(65 + index)}.</span> ${pilihan}`;

            pilihanDiv.appendChild(pilihanText);
            pilihanContainer.appendChild(pilihanDiv);

            pilihanDiv.addEventListener("click", () => pilihJawaban(index, pilihanDiv));
        });
    }

    // Mengatur jika soal terakhir maka tombol lanjut berubah menjadi tombol selesai
    if (currentSoal == bankSoal.length - 1) {
        btnNext.innerHTML = "SELESAI";
    }
}

// Fungsi yang akan jalan saat tombol pilihan dipilih (a, b, c, d)
function pilihJawaban(index, pilihanDiv) {
    const soal = bankSoal[currentSoal];
    const semuaPilihan = document.querySelectorAll(".pilihan");

    penjelasan.hidden = false;

    semuaPilihan.forEach(div => {
        div.classList.add("bg-light");
        div.classList.add("alert-dark");
    });

    // Mengambil jawaban yang dipilih sesuai dengan index
    jawabanDipilih = bankSoal[currentSoal]['pilihan'][index];

    // Jika jawabannya benar maka akan dirubah warna menjadi hijau
    if (index === soal.benar) {
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
        alertPenjelasan.classList.remove("alert-danger");
        alertPenjelasan.classList.add("alert-success");
        iconPenjelasan.classList.remove("bi-x-circle");
        iconPenjelasan.classList.add("bi-check-circle");
        ketHasil.innerHTML = "BENAR";
        ketPenjelasan.innerHTML = bankSoal[currentSoal]['penjelasan'];

    } else {
        pilihanDiv.classList.remove("bg-light");
        pilihanDiv.classList.remove("alert-dark");
        pilihanDiv.classList.add("alert-danger");

        // Penjelasan
        alertPenjelasan.classList.add("alert-danger");
        iconPenjelasan.classList.add("bi-x-circle");
        ketHasil.innerHTML = "BELUM BENAR";
        ketPenjelasan.innerHTML = "Jawaban salah, coba lagi.";

        // Warna akan kembali saat 0.5 detik
        setTimeout(() => {
            pilihanDiv.classList.remove("alert-danger");
            pilihanDiv.classList.add("bg-light");
            pilihanDiv.classList.add("alert-dark");
        }, 500);
    }
}

// Fungsi untuk memeriksa jawaban inputan
function cekJawabanInput(inputField, jawabanBenar) {
    penjelasan.hidden = false;
    const jawabanUser = inputField.value.trim().toLowerCase(); // Normalisasi input
    if (jawabanBenar.some(jawaban => jawaban.toLowerCase() === jawabanUser)) {
        btnNext.disabled = false;
        ketHasil.innerHTML = "BENAR";
        ketPenjelasan.innerHTML = bankSoal[currentSoal]['penjelasan'];

        alertPenjelasan.classList.remove("alert-danger");
        alertPenjelasan.classList.add("alert-success");
        iconPenjelasan.classList.remove("bi-x-circle");
        iconPenjelasan.classList.add("bi-check-circle");
    } else {
        // Penjelasan
        alertPenjelasan.classList.add("alert-danger");
        iconPenjelasan.classList.add("bi-x-circle");
        ketHasil.innerHTML = "BELUM BENAR";
        ketPenjelasan.innerHTML = "Jawaban salah, coba lagi.";
        btnNext.disabled = true;
    }
}

// Event saat tombol lanjut di klik
btnNext.addEventListener("click", () => {
    currentSoal++;
    if (currentSoal < bankSoal.length) {
        penjelasan.hidden = true;
        loadSoal();
    } else {
        Swal.fire({
            title: "Selamat!",
            text: "Anda telah menyelesaikan semua soal!",
            icon: "success"
        });
    }
});

loadSoal();
