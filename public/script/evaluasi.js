// Disini mulai script nya
let currentQuestionIndex = 0;
let score = 0;

function showElement(elementId) {
    document.getElementById(elementId).style.display = "block";
    setTimeout(() => document.getElementById(elementId).classList.add("show"), 10);
    if (elementId == 'result' || elementId == "instructions") {
        setTimeout(() => document.getElementById(elementId).classList.add("d-flex"), 10);
        setTimeout(() => document.getElementById(elementId).classList.add("align-items-center"), 10);
        setTimeout(() => document.getElementById(elementId).classList.add("justifiy-content-center"), 10);
        setTimeout(() => document.getElementById(elementId).classList.add("vh-100"), 10);
    }

}

function hideElement(elementId) {
    setTimeout(() => document.getElementById(elementId).style.display = "none", 100);
    setTimeout(() => document.getElementById(elementId).classList.remove("show"), 100);
    setTimeout(() => document.getElementById(elementId).classList.remove("d-flex"), 100);
    setTimeout(() => document.getElementById(elementId).classList.remove("align-items-center"), 100);
    setTimeout(() => document.getElementById(elementId).classList.remove("justify-content-center"), 100);
    setTimeout(() => document.getElementById(elementId).classList.remove("vh-100"), 100);


}

let timer; // Simpan interval timer sebagai variabel global
let count = 45 * 60; // Durasi awal 45 menit

function startQuiz() {
    
hideElement("instructions");
setTimeout(() => showElement("quiz"), 500);

// Reset timer jika sudah berjalan sebelumnya
if (timer) {
clearInterval(timer);
}

// Atur ulang waktu ke 45 menit saat restart
count = 45 * 60;
console.log('Timer dimulai...');

timer = setInterval(() => {
let minutes = String(Math.floor(count / 60)).padStart(2, '0');
let seconds = String(count % 60).padStart(2, '0');
timer_quiz.innerHTML = `${minutes}:${seconds}`;

count--;
if (count < 0) {
    clearInterval(timer);
    console.log('Timer selesai!');
    finishQuiz();
}
}, 1000);

question_type = questions[currentQuestionIndex].type;
loadQuestion(question_type);
}

function loadQuestion(type) {
    const questionData = questions[currentQuestionIndex];
    const questionId = questionData.id;

    document.getElementById("current-question").innerText = currentQuestionIndex + 1;
    document.getElementById("question-text").innerText = questionData.question;

    if (type === "multiple_choice") {
        let optionsHtml = "";
        questionData.options.forEach((option, index) => {
            const isChecked = questionData.userAnswer == index ? "checked" : "";
            optionsHtml += `
<li class='list-group-item d-flex align-items-center my-1'>
    <input type='radio' id='option${index}-${questionId}' name='answer-${questionId}' value='${index}' class='me-2 form-check-input' ${isChecked}
        onclick="saveAnswer(${questionId})">
    <label for='option${index}-${questionId}' class='w-100 mb-0 form-check-label'>${option}</label>
</li>
`;
        });
        document.getElementById("options-list").innerHTML = optionsHtml;
    } else if (type === "coding") {
        const savedAnswer = questionData.userAnswer || ""; // Ambil jawaban sebelumnya jika ada
        document.getElementById("options-list").innerHTML = `
    <textarea id="coding-answer-${questionId}" class="form-control mt-2" rows="10" placeholder="Tulis jawaban Anda di sini...">${savedAnswer}</textarea>
`;
    }
}

function saveAnswer(questionId) {
    const question = questions.find(q => q.id === questionId);
    if (!question) return; // Jika pertanyaan tidak ditemukan, hentikan fungsi

    if (question.type === "multiple_choice") {
        const selectedOption = document.querySelector(`input[name="answer-${questionId}"]:checked`);
        question.userAnswer = selectedOption ? selectedOption.value : null;
    } else if (question.type === "coding") {
        const codingAnswer = document.getElementById(`coding-answer-${questionId}`);
        question.userAnswer = codingAnswer ? codingAnswer.value : "";
    }

    console.log(`Jawaban tersimpan untuk soal ${questionId}:`, question.userAnswer);

    // Perbarui progress bar dan warna navigasi soal
    updateProgressBar();
    updateNavigationColor(questionId);
}

function goToQuestion(questionId) {
    console.log(questionId);
    currentQuestionIndex = questionId;
    updateNavigationButton();
    const questionDataGo = questions[questionId];

    document.getElementById("current-question").innerText = questionId + 1;
    document.getElementById("question-text").innerText = questionDataGo.question;

    let optionsHtml = "";
    questionDataGo.options.forEach((option, index) => {
        const isChecked = questionDataGo.userAnswer == index ? "checked" : "";
        optionsHtml += `
<li class='list-group-item d-flex align-items-center my-1'>
    <input type='radio' id='option${index}-${questionId}' name='answer-${questionId}' value='${index}' class='me-2 form-check-input' ${isChecked}
        onclick="saveAnswer(${questionId})">
    <label for='option${index}-${questionId}' class='w-100 mb-0 form-check-label'>${option}</label>
</li>
`;
    });
    document.getElementById("options-list").innerHTML = optionsHtml;
}


function updateNavigationColor(questionId) {
    const navItem = document.getElementById(`nav-question-${questionId + 1}`); // Sesuaikan ID tombol

    if (navItem) {
        const question = questions[questionId]; // Sesuaikan indeks array
        if (question && question.userAnswer !== null && question.userAnswer !== "") {
            navItem.classList.remove("btn-outline-primary");
            navItem.classList.add("btn-success"); // Warna hijau jika sudah dijawab
        } else {
            navItem.classList.remove("btn-success");
            navItem.classList.add("btn-outline-primary"); // Warna biru jika belum dijawab
        }
    }

}



function updateProgressBar() {
    const totalQuestions = questions.length; // Total jumlah soal
    const answeredQuestions = questions.filter(q => q.userAnswer !== null && q.userAnswer !== "").length;

    // Hitung persentase progress
    const progressPercentage = (answeredQuestions / totalQuestions) * 100;

    // Update tampilan progress bar
    const progressBar = document.getElementById("progress-bar");
    progressBar.style.width = `${progressPercentage}%`;
    progressBar.textContent = `${Math.round(progressPercentage)}%`;
}

function updateNavigationButton() {
    console.log("Update Tombol Navigasi", currentQuestionIndex);

    const prevButton = document.getElementById("btn-sebelumnya");
    const nextButton = document.getElementById("btn-berikutnya");

    // Disable tombol "Sebelumnya" jika di soal pertama
    prevButton.disabled = currentQuestionIndex === 0;

    // Disable tombol "Berikutnya" jika di soal terakhir
    nextButton.disabled = currentQuestionIndex === 19;

    // Debugging log
    console.log("Tombol Sebelumnya:", prevButton.disabled ? "Disabled" : "Enabled");
    console.log("Tombol Berikutnya:", nextButton.disabled ? "Disabled" : "Enabled");
}

function nextQuestion() {
    updateNavigationButton();
    saveAnswer(currentQuestionIndex);
    if (currentQuestionIndex < questions.length - 1) {
        currentQuestionIndex++;
        console.log(currentQuestionIndex)
        updateNavigationButton();
        question_type = questions[currentQuestionIndex].type;
        loadQuestion(question_type);
    }

}

function prevQuestion() {
    updateNavigationButton();
    saveAnswer(currentQuestionIndex);
    if (currentQuestionIndex > 0) {
        currentQuestionIndex--;
        updateNavigationButton();
        question_type = questions[currentQuestionIndex].type;
        loadQuestion(question_type);
    }
}

function checkAnswers() {
    let correctAnswers = 0;
    let totalQuestions = questions.length;

    // Cek jawaban
    questions.forEach(question => {
        if (question.type === "multiple_choice") {
            const selectedIndex = parseInt(question.userAnswer);
            if (selectedIndex == question.answer) {
                correctAnswers++;
                console.log("Index jawaban pengguna", selectedIndex);
                console.log("question.options[selectedIndex]", question.options[selectedIndex])
                console.log("question.answer", question.answer)
            }


        } else if (question.type === "coding") {
            if (question.answer.includes(question.userAnswer.trim())) {
                correctAnswers++;
            }
        }
    });

    // Hitung nilai
    let score = correctAnswers * 5;
    let incorrectAnswers = totalQuestions - correctAnswers;
    let isPassed = score >= 70;

    // Ambil waktu selesai
    let finishTime = new Date();
    let hariTanggal = finishTime.toLocaleDateString("id-ID", {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
    let jamSelesai = finishTime.toLocaleTimeString("id-ID");

    // Update tampilan hasil
    document.getElementById("result-date").innerText = `Hari & Tanggal: ${hariTanggal}`;
    document.getElementById("result-time").innerText = `Waktu: ${jamSelesai}`;
    let resultScore = document.getElementById("result-score");
    resultScore.innerText = score;
    document.getElementById("correct-answers").innerText = `Jawaban benar: ${correctAnswers}`;
    document.getElementById("incorrect-answers").innerText = `Jawaban salah: ${incorrectAnswers}`;

    // Tampilkan alert berdasarkan hasil
    let alertBox = document.getElementById("result-alert");
    if (isPassed) {
        resultScore.classList.remove("text-danger");
        resultScore.classList.add("text-success");
        alertBox.innerText = "Selamat, skor kamu memenuhi untuk dapat lanjut ke materi berikutnya";
        alertBox.classList.add("alert-success");
        alertBox.classList.remove("alert-danger");
        document.getElementById("btn_materi_berikutnya").style.display = "block";
        document.getElementById("btn_coba_lagi").style.display = "none";

        fetch('/poinEvaluasi', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({
                step_id: stepId,
                score: score
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
        resultScore.classList.remove("text-success");
        resultScore.classList.add("text-danger");
        alertBox.innerText = "Maaf, skor kamu belum cukup. Silakan coba lagi!";
        alertBox.classList.add("alert-danger");
        alertBox.classList.remove("alert-success");
        document.getElementById("btn_coba_lagi").style.display = "block";
        document.getElementById("btn_materi_berikutnya").style.display = "none";
    }
}


function confirmFinishQuiz() {
    Swal.fire({
        title: "Apakah Anda yakin ingin menyelesaikan kuis?",
        text: "Pastikan Anda telah menjawab semua pertanyaan dengan benar!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, Selesai!",
        cancelButtonText: "Batal"
    }).then((result) => {
        if (result.isConfirmed) {
            finishQuiz();
        }
    });
}

function finishQuiz() {
    saveAnswer(currentQuestionIndex);
    checkAnswers()
    hideElement("quiz");
    setTimeout(() => showElement("result"), 500);
    document.getElementById("score").innerText = score;
}

function restartQuiz() {
    currentQuestionIndex = 0;
    score = 0;

    updateNavigationButton();

    // Reset semua jawaban user
    questions.forEach(q => q.userAnswer = null);

    // Reset progress bar
    document.getElementById("progress-bar").style.width = "0%";
    document.getElementById("progress-bar").textContent = "0%";

    // Reset warna navigasi soal
    for (let i = 1; i <= questions.length; i++) {
        const navItem = document.getElementById(`nav-question-${i}`);
        if (navItem) {
            navItem.classList.remove("btn-success");
            navItem.classList.add("btn-outline-primary");
        }
    }

    // Uncheck semua pilihan jawaban
    document.querySelectorAll('input[type="radio"]').forEach(input => input.checked = false);

     // Reset timer saat restart
if (timer) {
clearInterval(timer);
}

    // Sembunyikan hasil dan tampilkan instruksi
    hideElement("result");
    setTimeout(() => showElement("instructions"), 500);
}