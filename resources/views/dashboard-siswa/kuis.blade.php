@extends('dashboard-siswa.layouts.main')

@section('container')
<form id="quizForm" method="POST" action="{{ route('siswa.submitKuis') }}">
    @csrf
    <input type="hidden" name="kuis_id" value="{{ $kuis->id }}">
    <input type="hidden" name="skor" id="skorInput">
    <input type="hidden" name="waktu" id="waktuInput">

    <div class="quiz-wrapper">
        <div class="question-card">
            <div class="top-bar">
                <h2>{{ $kuis->judul }}</h2>
                <div class="legend">
                    <div id="timer">10:00</div>
                    <button type="button" class="submit-button" onclick="submitQuiz()">Selesai</button>
                </div>
            </div>
            <div id="question-container" class="question-box">
                <!-- Soal akan dimuat lewat JS -->
            </div>
            <div class="nav-buttons">
                <button class="prev-button" type="button" onclick="prevQuestion()">&laquo; Sebelumnya</button>
                <button class="next-button" type="button" onclick="nextQuestion()">Selanjutnya &raquo;</button>
            </div>
        </div>
        <div class="question-nav-card">
            <h4>Nomor Soal</h4>
            <div id="question-nav">
                @foreach($kuis->soals as $index => $soal)
                    <button class="unanswered" type="button" onclick="jumpToQuestion({{ $index }})">{{ $index + 1 }}</button>
                @endforeach
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
    </div>
</form>

<script>
    const questions = @json($kuis->soals);
    let currentQuestion = 0;
    let userAnswers = new Array(questions.length).fill(null);

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
        Swal.fire({
            title: 'Selesai mengerjakan kuis?',
            text: "Jawaban kamu akan langsung dikirim dan tidak bisa diubah.",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Selesai',
            cancelButtonText: 'Belum'
        }).then((result) => {
            if (result.isConfirmed) {
            const skor = hitungSkor();
            document.getElementById("skorInput").value = skor;

            const elapsed = Math.floor((Date.now() - startTime) / 1000);
            const menit = Math.floor(elapsed / 60);
            const detik = elapsed % 60;
            const waktuPengerjaan = `${menit < 10 ? '0' : ''}${menit}:${detik < 10 ? '0' : ''}${detik}`;
            document.getElementById("waktuInput").value = waktuPengerjaan;

            document.getElementById("quizForm").submit();
            }
        });
        }

    function hitungSkor() {
        let skor = 0;
        questions.forEach((q, i) => {
            if (userAnswers[i] === q.jawaban_benar) {
                skor++;
            }
        });
        return Math.round((skor / questions.length) * 100);
    }

    let totalTime = 600; // Total waktu dalam detik (misal 10 menit)
    let startTime = Date.now(); // Waktu mulai (dalam milidetik)

    function startTimer() {
        const timerEl = document.getElementById("timer");
        const interval = setInterval(() => {
            let elapsed = Math.floor((Date.now() - startTime) / 1000); // Berapa detik berlalu
            let timeLeft = totalTime - elapsed; // Sisa waktu

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