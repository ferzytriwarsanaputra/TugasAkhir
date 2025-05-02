@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="quiz-wrapper">
    <div class="question-nav-card">
        <h4>Nomor Soal</h4>
        <div id="question-nav">
            <button class="unanswered">1</button>
            <button class="unanswered">2</button>
            <button class="answered">3</button>
        </div>
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
    <div class="question-card">
        <div class="top-bar">
            <h2>EVALUASI</h2>
            <div class="legend">
                <div id="timer">10:00</div>
                <button class="submit-button" onclick="submitQuiz()">Selesai</button>
            </div>
        </div>
        <div id="question-container" class="question-box">
            <p>Apa warna langit pada siang hari?</p>
            <ul class="options">
                <li>Merah</li>
                <li>Biru</li>
                <li>Hijau</li>
                <li>Kuning</li>
            </ul>
        </div>
        <div class="nav-buttons">
            <button class="prev-button" onclick="prevQuestion()">&laquo; Sebelumnya</button>
            <button class="next-button" onclick="nextQuestion()">Selanjutnya &raquo;</button>
        </div>
    </div>
</div>
<script>
    const questions = [
        { question: "Apa wujud benda?", options: ["Padat", "Cair", "Gas", "Semua benar"], answer: 3 },
        { question: "Contoh benda gas?", options: ["Air", "Es", "Udara", "Kayu"], answer: 2 },
        { question: "Siapa penemu bola lampu?", options: ["Edison", "Newton", "Einstein", "Tesla"], answer: 0 },
        { question: "Apa wujud benda?", options: ["Padat", "Cair", "Gas", "Semua benar"], answer: 3 },
        { question: "Contoh benda gas?", options: ["Air", "Es", "Udara", "Kayu"], answer: 2 },
        { question: "Siapa penemu bola lampu?", options: ["Edison", "Newton", "Einstein", "Tesla"], answer: 0 },
        { question: "Apa wujud benda?", options: ["Padat", "Cair", "Gas", "Semua benar"], answer: 3 },
        { question: "Contoh benda gas?", options: ["Air", "Es", "Udara", "Kayu"], answer: 2 },
        { question: "Siapa penemu bola lampu?", options: ["Edison", "Newton", "Einstein", "Tesla"], answer: 0 },
        { question: "Apa wujud benda?", options: ["Padat", "Cair", "Gas", "Semua benar"], answer: 3 },
        { question: "Contoh benda gas?", options: ["Air", "Es", "Udara", "Kayu"], answer: 2 },
        { question: "Siapa penemu bola lampu?", options: ["Edison", "Newton", "Einstein", "Tesla"], answer: 0 },
        { question: "Apa wujud benda?", options: ["Padat", "Cair", "Gas", "Semua benar"], answer: 3 },
        { question: "Contoh benda gas?", options: ["Air", "Es", "Udara", "Kayu"], answer: 2 },
        { question: "Siapa penemu bola lampu?", options: ["Edison", "Newton", "Einstein", "Tesla"], answer: 0 },
        { question: "Apa wujud benda?", options: ["Padat", "Cair", "Gas", "Semua benar"], answer: 3 },
        { question: "Contoh benda gas?", options: ["Air", "Es", "Udara", "Kayu"], answer: 2 },
        { question: "Siapa penemu bola lampu?", options: ["Edison", "Newton", "Einstein", "Tesla"], answer: 0 },
        { question: "Apa wujud benda?", options: ["Padat", "Cair", "Gas", "Semua benar"], answer: 3 },
        { question: "Contoh benda gas?", options: ["Air", "Es", "Udara", "Kayu"], answer: 2 },
    ];

    let currentQuestion = 0;
    let userAnswers = new Array(questions.length).fill(null);

    function loadQuestion() {
        const qContainer = document.getElementById("question-container");
        qContainer.innerHTML = `<p><strong>Nomor ${currentQuestion + 1}</strong></p>
            <p>${questions[currentQuestion].question}</p>
            <ul class='options'>` + 
            questions[currentQuestion].options.map((opt, i) => 
            `<li onclick='selectAnswer(${i})' class='${userAnswers[currentQuestion] === i ? "answered" : ""}'>${opt}</li>`).join("") + 
            `</ul>`;
        
        document.getElementById("question-nav").innerHTML = questions.map((_, i) => 
            `<button class='${userAnswers[i] !== null ? "answered" : "unanswered"}' onclick='jumpToQuestion(${i})'>${i + 1}</button>`).join("");
    }

    function selectAnswer(index) {
        userAnswers[currentQuestion] = index;
        loadQuestion();
    }

    function nextQuestion() {
        if (currentQuestion < questions.length - 1) currentQuestion++;
        loadQuestion();
    }

    function prevQuestion() {
        if (currentQuestion > 0) currentQuestion--;
        loadQuestion();
    }

    function jumpToQuestion(index) {
        currentQuestion = index;
        loadQuestion();
    }

    function submitQuiz() {
        alert("Evaluasi selesai! Jawaban Anda telah dikumpulkan.");
    }

    loadQuestion();

    // let timeLeft = 600; // 10 minutes in seconds
    // function startTimer() {
    //     const timerElement = document.getElementById("timer");
    //     const timerInterval = setInterval(() => {
    //         let minutes = Math.floor(timeLeft / 60);
    //         let seconds = timeLeft % 60;
    //         timerElement.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
    //         if (timeLeft <= 0) {
    //             clearInterval(timerInterval);
    //             submitQuiz();
    //         }
    //         timeLeft--;
    //     }, 1000);
    // }
    // startTimer();
</script>
@endsection