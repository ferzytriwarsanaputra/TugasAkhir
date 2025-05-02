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
            <h2>Kuis 3</h2>
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
        { question: "Kamera bekerja dengan prinsip dasar yang mirip dengan mata manusia. Bagian kamera yang berfungsi seperti retina pada mata manusia adalah…", options: ["a. Lensa", "b. Diafragma", "c. Sensor atau film", "d. Viewfinder"], answer: 3 },
        { question: "Bagaimana cara kerja kaca pembesar (lup) dalam memperbesar objek?", options: ["a. Menggunakan lensa cekung untuk membalik bayangan", "b. Menggunakan lensa cembung untuk membentuk bayangan nyata dan terbalik", "c. Menggunakan lensa cembung untuk memperbesar bayangan maya dan tegak", "d.	Menggunakan dua lensa untuk memperbesar bayangan secara bertahap"], answer: 2 },
        { question: "Bagian utama pada mikroskop yang pertama kali memperbesar objek adalah…", options: ["a. Lensa objektif", "b. Lensa okuler", "c. Diafragma", "d. Cermin pemantul"], answer: 0 },
        { question: "Perbedaan utama antara teleskop bias dan teleskop pantul adalah…", options: ["a. Teleskop bias menggunakan cermin, sedangkan teleskop pantul menggunakan lensa", "b. Teleskop bias menggunakan lensa, sedangkan teleskop pantul menggunakan cermin", "c. Teleskop bias digunakan untuk melihat benda kecil, sedangkan teleskop pantul untuk benda besar", "d. Teleskop bias membiaskan cahaya, sedangkan teleskop pantul memantulkan cahaya"], answer: 3 },
        { question: "Saat menggunakan kamera, cahaya masuk melalui lensa dan difokuskan ke sensor. Bagian yang mengatur jumlah cahaya yang masuk ke sensor disebut…", options: ["a. Lensa", "b. Sensor", "c. Diafragma", "d. Cermin"], answer: 2 },
        { question: "Mengapa teleskop pantul lebih banyak digunakan oleh para astronom dibandingkan teleskop bias?", options: ["a. Teleskop pantul lebih ringan dan lebih mudah dibuat daripada teleskop bias", "b. Teleskop pantul lebih murah dibandingkan teleskop bias", "c. Teleskop pantul menghasilkan bayangan yang lebih kecil", "d. Teleskop pantul dapat menggunakan cermin yang lebih besar untuk menangkap lebih banyak cahaya"], answer: 0 },
        { question: "Saat menggunakan mikroskop, objek yang diamati diletakkan di atas…", options: ["a. Lensa objektif", "b. Lensa okuler", "c. Meja objek", "d. Cermin pantul"], answer: 3 },
        { question: "8.	Kamera digital saat ini lebih banyak digunakan daripada kamera analog karena…", options: ["a. Tidak memerlukan lensa untuk memfokuskan cahaya", "b. Menggunakan sensor digital yang lebih praktis dibandingkan film", "c. Tidak memerlukan sumber cahaya untuk mengambil gambar", "d. Hasil gambar dapat langsung dilihat dan diedit dengan mudah"], answer: 2 },
        { question: "Apa fungsi lensa okuler pada mikroskop?", options: ["a. Memfokuskan cahaya ke sensor", "b. Memperbesar bayangan yang telah dibentuk oleh lensa objektif", "c. Mengatur jumlah cahaya yang masuk", "d. Membentuk bayangan akhir yang dapat diamati oleh mata"], answer: 0 },
        { question: "Jika seseorang menggunakan kaca pembesar untuk melihat objek kecil, maka bayangan yang terbentuk akan…", options: ["a.	Nyata, terbalik, dan diperkecil", "b. Nyata, tegak, dan diperbesar", "c. Maya, tegak, dan diperbesar", "d. Maya, terbalik, dan diperbesar"], answer: 3 },
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