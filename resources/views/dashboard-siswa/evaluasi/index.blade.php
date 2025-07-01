@extends('dashboard-siswa.layouts.main')

@section('container')
<form id="quizForm" method="POST" action="{{ route('evaluasi.submit') }}">
    @csrf
    <input type="hidden" name="kuis_id" value="{{ $kuis->id }}">
    <input type="hidden" name="skor" id="skorInput">
    <input type="hidden" name="waktu" id="waktuInput">

    <div class="quiz-wrapper">
        <div class="question-card">
            <div class="top-bar">
                <h2>{{ $kuis->judul }}</h2>
                <div class="legend">
                    <div id="timer">30:00</div>
                    <button type="button" class="submit-button" onclick="submitQuiz()">Selesai</button>
                </div>
            </div>
            <div id="question-container" class="question-box"></div>
            <div class="nav-buttons">
                <button class="prev-button" type="button" onclick="prevQuestion()">« Sebelumnya</button>
                <button class="next-button" type="button" onclick="nextQuestion()">Selanjutnya »</button>
            </div>
        </div>
        <div class="question-nav-card">
            <h4>Nomor Soal</h4>
            <div id="question-nav"></div>
            <div class="question-legend">
                <h6>Keterangan:</h6>
                <div class="legend-text">
                    <div class="legend-box unanswered-box">Putih</div> = Belum Dijawab
                </div>
                <div class="legend-text">
                    <div class="legend-box answered-box">Hijau</div> = Sudah Dijawab
                </div>
            </div>
        </div>
    </div>
</form>

<style>
button.prev-button.disabled,
button.next-button.disabled {
    opacity: 0.5;
    cursor: not-allowed;
    pointer-events: none;
}
</style>

<script>
const questions = @json($kuis->soals);
const kuisId = {{ $kuis->id }};
const answerKey = `evaluasiUserAnswers_${kuisId}`;
const currentKey = `evaluasiCurrentQuestion_${kuisId}`;
const timeKey = `evaluasiStartTime_${kuisId}`;
let userAnswers = new Array(questions.length).fill(null);
let currentQuestion = 0;
let totalTime = 1800; // 30 menit
let startTime;

// Ambil dari localStorage jika ada
const savedAnswers = localStorage.getItem(answerKey);
if (savedAnswers) userAnswers = JSON.parse(savedAnswers);

const savedCurrent = localStorage.getItem(currentKey);
if (savedCurrent) currentQuestion = parseInt(savedCurrent);

const navigationType = performance.getEntriesByType('navigation')[0].type;
if (navigationType === 'navigate') {
    localStorage.setItem(timeKey, Date.now());
}
startTime = parseInt(localStorage.getItem(timeKey));

function saveProgress() {
    localStorage.setItem(answerKey, JSON.stringify(userAnswers));
    localStorage.setItem(currentKey, currentQuestion);
}

function loadQuestion() {
    const qContainer = document.getElementById("question-container");
    const opts = JSON.parse(questions[currentQuestion].options);

    qContainer.innerHTML = `
        <p><strong>Nomor ${currentQuestion + 1}</strong></p>
        <p>${questions[currentQuestion].soal}</p>
        <ul class="options">
            ${opts.map((opt, i) => `
                <li onclick="selectAnswer(${i})" class="${userAnswers[currentQuestion] === i ? 'answered' : ''}">${opt}</li>
            `).join("")}
        </ul>
    `;

    const nav = document.getElementById("question-nav");
    nav.innerHTML = questions.map((_, i) => `
        <button class="${userAnswers[i] !== null ? 'answered' : 'unanswered'}" type="button" onclick="jumpToQuestion(${i})">${i + 1}</button>
    `).join("");

    const prevBtn = document.querySelector(".prev-button");
    const nextBtn = document.querySelector(".next-button");
    prevBtn.classList.toggle("disabled", currentQuestion === 0);
    nextBtn.classList.toggle("disabled", currentQuestion === questions.length - 1);
}

function selectAnswer(index) {
    userAnswers[currentQuestion] = index;
    saveProgress();
    loadQuestion();
}

function nextQuestion() {
    if (currentQuestion < questions.length - 1) {
        currentQuestion++;
        saveProgress();
        loadQuestion();
    }
}

function prevQuestion() {
    if (currentQuestion > 0) {
        currentQuestion--;
        saveProgress();
        loadQuestion();
    }
}

function jumpToQuestion(index) {
    currentQuestion = index;
    saveProgress();
    loadQuestion();
}

function hitungSkor() {
    let skor = 0;
    questions.forEach((q, i) => {
        if (userAnswers[i] === parseInt(q.jawaban_benar)) skor++;
    });
    return Math.round((skor / questions.length) * 100);
}

function submitQuiz() {
    Swal.fire({
        title: 'Selesaikan Evaluasi?',
        text: "Jawaban kamu akan dikirim dan tidak bisa diubah.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, Kirim',
        cancelButtonText: 'Belum',
    }).then((result) => {
        if (result.isConfirmed) {
            const skor = hitungSkor();
            document.getElementById("skorInput").value = skor;

            const elapsed = Math.floor((Date.now() - startTime) / 1000);
            const menit = Math.floor(elapsed / 60);
            const detik = elapsed % 60;
            const waktuPengerjaan = `${menit < 10 ? '0' : ''}${menit}:${detik < 10 ? '0' : ''}${detik}`;
            document.getElementById("waktuInput").value = waktuPengerjaan;

            // Bersihkan localStorage
            localStorage.removeItem(answerKey);
            localStorage.removeItem(currentKey);
            localStorage.removeItem(timeKey);

            document.getElementById("quizForm").submit();
        }
    });
}

function startTimer() {
    const timerEl = document.getElementById("timer");
    const interval = setInterval(() => {
        const elapsed = Math.floor((Date.now() - startTime) / 1000);
        const timeLeft = totalTime - elapsed;

        if (timeLeft <= 0) {
            timerEl.textContent = "00:00";
            clearInterval(interval);
            submitQuiz();
            return;
        }

        const min = Math.floor(timeLeft / 60);
        const sec = timeLeft % 60;
        timerEl.textContent = `${min < 10 ? '0' : ''}${min}:${sec < 10 ? '0' : ''}${sec}`;
    }, 1000);
}

loadQuestion();
startTimer();
</script>
@endsection