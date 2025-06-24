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
const quizKey = 'evaluasi_' + {{ $kuis->id }};
let userAnswers = JSON.parse(localStorage.getItem(quizKey)) || new Array(questions.length).fill(null);
let currentQuestion = parseInt(localStorage.getItem(quizKey + '_current')) || 0;
let totalTime = 1800; // 30 menit
let startTime = localStorage.getItem(quizKey + '_startTime') || Date.now();
localStorage.setItem(quizKey + '_startTime', startTime);

function loadQuestion() {
    const qContainer = document.getElementById("question-container");
    const opts = JSON.parse(questions[currentQuestion].options);
    const isEvaluasi = questions[currentQuestion].is_evaluasi;

    qContainer.innerHTML = `
        <p><strong>Nomor ${currentQuestion + 1}</strong> ${isEvaluasi ? '<span class="evaluasi-tag">Evaluasi</span>' : ''}</p>
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
    localStorage.setItem(quizKey, JSON.stringify(userAnswers));
    loadQuestion();
}

function nextQuestion() {
    if (currentQuestion < questions.length - 1) currentQuestion++;
    localStorage.setItem(quizKey + '_current', currentQuestion);
    loadQuestion();
}

function prevQuestion() {
    if (currentQuestion > 0) currentQuestion--;
    localStorage.setItem(quizKey + '_current', currentQuestion);
    loadQuestion();
}

function jumpToQuestion(index) {
    currentQuestion = index;
    localStorage.setItem(quizKey + '_current', currentQuestion);
    loadQuestion();
}

function submitQuiz() {
    Swal.fire({
        title: 'Evaluasi Selesai',
        text: 'Ini adalah evaluasi terakhir. Pastikan semua jawaban sudah benar sebelum dikirim.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, kirim!',
        cancelButtonText: 'Batal',
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
            localStorage.removeItem(quizKey);
            localStorage.removeItem(quizKey + '_startTime');
            localStorage.removeItem(quizKey + '_current');

            document.getElementById("quizForm").submit();
        }
    });
}

function hitungSkor() {
    let skor = 0;
    questions.forEach((q, i) => {
        if (userAnswers[i] === q.jawaban_benar) skor++;
    });
    return Math.round((skor / questions.length) * 100);
}

function startTimer() {
    const timerEl = document.getElementById("timer");
    const interval = setInterval(() => {
        let elapsed = Math.floor((Date.now() - startTime) / 1000);
        let timeLeft = totalTime - elapsed;

        if (timeLeft <= 0) {
            timerEl.textContent = "00:00";
            clearInterval(interval);
            submitQuiz();
            return;
        }

        let min = Math.floor(timeLeft / 60);
        let sec = timeLeft % 60;
        timerEl.textContent = `${min}:${sec < 10 ? '0' : ''}${sec}`;
    }, 1000);
}

loadQuestion();
startTimer();
</script>
@endsection