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
            <h2>Kuis 1</h2>
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
        { question: "Sifat bayangan yang dibentuk oleh cermin datar adalah...", options: ["a. Nyata, tegak, dan lebih kecil dari benda", "b. Maya, tegak, dan sama besar dengan benda", "c. Nyata, terbalik, dan diperbesar", "d. Maya, terbalik, dan lebih kecil dari benda"], answer: 1 },
        { question: "Jika sebuah benda diletakkan di antara titik fokus (F) dan cermin cekung, bayangan yang terbentuk akan...", options: ["a. Nyata, tegak, dan diperbesar", "b. Maya, tegak, dan diperbesar", "c. Nyata, terbalik, dan diperkecil", "d. Maya, terbalik, dan sama besar dengan benda"], answer: 1 },
        { question: "Sebuah benda diletakkan di depan cermin cembung. Sifat bayangan yang terbentuk adalah...", options: ["a. Nyata, terbalik, diperbesar", "b. Maya, tegak, diperkecil", "c. Nyata, tegak, diperkecil", "d. Maya, terbalik, diperbesar"], answer: 1 },
        { question: "Jika dua buah cermin datar disusun membentuk sudut 60°, jumlah bayangan yang terbentuk adalah...", options: ["a. 5", "b. 6", "c. 7", "d. 8"], answer: 0 },
        { question: "Berikut ini adalah contoh penerapan cermin cekung dalam kehidupan sehari-hari, kecuali...", options: ["a. Cermin rias", "b.	Reflektor lampu sorot", "c.	Spion kendaraan", "d. Cermin di teleskop"], answer: 2 },
        { question: "Lensa cembung memiliki sifat sebagai berikut, kecuali...", options: ["a. Menyebabkan cahaya berkumpul di satu titik fokus", "b. Dapat digunakan sebagai kacamata untuk penderita rabun jauh", "c. Bayangan yang terbentuk selalu maya dan tegak", "d. Digunakan dalam kamera dan mikroskop"], answer: 2 },
        { question: "Jika sebuah benda diletakkan pada jarak yang lebih jauh dari titik fokus pada lensa cekung, maka bayangan yang terbentuk adalah...", options: ["a. Nyata, terbalik, diperbesar", "b. Maya, tegak, diperkecil", "c. Nyata, tegak, sama besar", "d. Maya, terbalik, diperbesar"], answer: 1 },
        { question: "Fungsi utama lensa cekung dalam kacamata adalah...", options: ["a.	Membantu penderita rabun dekat", "b. Memfokuskan cahaya pada retina", "c. Menyebarkan cahaya agar bayangan jatuh lebih jauh", "d.	Mengumpulkan cahaya agar lebih terang"], answer: 2 },
        { question: "Seorang siswa melihat melalui lensa cembung. Jika ia meletakkan objek di antara fokus (F) dan lensa, maka bayangan yang terlihat akan...", options: ["a.	Nyata, tegak, diperbesar", "b. Maya, tegak, diperbesar", "c. Nyata, terbalik, diperbesar", "d. Maya, terbalik, diperkecil"], answer: 1 },
        { question: "Lensa manakah yang digunakan pada kaca pembesar (lup)?", options: ["a.	Lensa cekung", "b. Lensa cembung", "c. Cermin cekung", "d. Cermin cembung"], answer: 1 },
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

    let timeLeft = 600; // 10 minutes in seconds
    function startTimer() {
        const timerElement = document.getElementById("timer");
        const timerInterval = setInterval(() => {
            let minutes = Math.floor(timeLeft / 60);
            let seconds = timeLeft % 60;
            timerElement.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                submitQuiz();
            }
            timeLeft--;
        }, 1000);
    }
    startTimer();
</script>
@endsection