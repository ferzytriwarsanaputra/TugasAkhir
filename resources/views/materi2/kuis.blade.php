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
            <h2>Kuis 2</h2>
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
        { question: "Bagian mata yang berfungsi untuk mengatur jumlah cahaya yang masuk ke mata adalah…", options: ["a. Kornea", "b. Retina", "c. Iris", "d. Lensa"], answer: 2 },
        { question: "Bayangan yang ditangkap oleh retina berbentuk…", options: ["a. Sejati dan tegak", "b. Sejati dan terbalik", "c. Maya dan tegak", "d. Maya dan terbalik"], answer: 1 },
        { question: "Seseorang yang mengalami kesulitan melihat benda jauh mengalami kelainan yang disebut…", options: ["a.	Miopi", "b.	Hipermetropi", "c. Astigmatisma", "d. Presbiopi"], answer: 0 },
        { question: "Bagian mata yang berfungsi sebagai tempat jatuhnya bayangan dan memiliki sel batang serta sel kerucut adalah…", options: ["a. Lensa", "b. Pupil", "c. Retina", "d. Kornea"], answer: 2 },
        { question: "Sel kerucut dalam retina berfungsi untuk…", options: ["a.	Melihat dalam kondisi gelap", "b.	Membantu mata dalam menyesuaikan fokus", "c. Membedakan warna", "d.	Menjaga bentuk bola mata"], answer: 2 },
        { question: "6.	Mata majemuk pada serangga tersusun dari unit-unit kecil yang disebut…", options: ["a. Rodopsin", "b. Ommatidium", "c. Retina", "d.	Sklera"], answer: 1 },
        { question: "7.	Keunggulan mata majemuk dibandingkan mata manusia adalah…", options: ["a. Mampu menangkap gerakan dengan sangat cepat", "b.	Memiliki resolusi lebih tinggi", "c. Dapat melihat dalam gelap total", "d.	Bisa menyesuaikan fokus seperti lensa mata manusia"], answer: 0 },
        { question: "8.	Lebah memiliki kemampuan khusus dalam penglihatannya, yaitu…", options: ["a. Melihat dengan resolusi tinggi", "b. Melihat cahaya ultraviolet", "c. Melihat dalam kondisi gelap", "d. Melihat warna seperti manusia"], answer: 1 },
        { question: "9.	Mengapa lalat sulit ditangkap dengan tangan manusia?", options: ["a. Karena mereka memiliki penglihatan yang lebih tajam", "b. Karena mereka dapat melihat dalam gelap", "c. Karena mata majemuk mereka mendeteksi gerakan sangat cepat", "d. Karena mereka memiliki lebih banyak sel kerucut dibandingkan manusia"], answer: 2 },
        { question: "10.	Apa kelemahan utama mata majemuk serangga dibandingkan mata manusia?", options: ["a. Tidak dapat menangkap gerakan", "b. Resolusi penglihatannya lebih rendah", "c.	Tidak dapat melihat warna", "d.	Tidak dapat melihat ke berbagai arah"], answer: 1 },
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