@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="card-custom">
    <div class="title-box">
        <span>3</span> <span>Alat Optik dalam Kehidupan Sehari-hari</span>
    </div>
    <div class="content">
        <h3>Tujuan Pembelajaran</h3>
        <ul>
            <li>Siswa mampu menjelaskan prinsip kerja alat optik seperti kamera, kaca pembesar, mikroskop, dan teleskop berdasarkan konsep cahaya.</li>
            <li>Siswa mampu menganalisis cara cahaya berinteraksi dengan lensa dan cermin dalam berbagai alat optik.</li>
            <li>Siswa mampu menghubungkan prinsip kerja alat optik dengan penerapannya dalam kehidupan sehari-hari.</li>
        </ul>
    </div>
</div>
<div class="card-custom">
    <div class="title-box">
        <span>3.1 Kamera</span>
    </div>
    <div class="reading-box">
        <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Buku">
        <strong>Ayo Membaca</strong>
    </div>
    <div class="content">
        <p>
            Kamera adalah alat yang digunakan untuk mengambil gambar. Cara kerjanya mirip dengan mata manusia. Cahaya dari objek yang ingin difoto masuk melalui lensa kamera dan difokuskan pada sensor di dalam kamera. Sensor ini mengubah cahaya menjadi sinyal listrik yang kemudian diubah menjadi gambar digital. Kamera modern memiliki berbagai fitur, seperti zoom, fokus otomatis, dan stabilisasi gambar, yang membantu kita mengambil foto dengan jelas, meskipun pencahayaannya kurang baik.
        </p>
        <p>
            Kamera digunakan untuk banyak hal, dari foto sehari-hari hingga aplikasi ilmiah seperti mengambil gambar bintang atau benda mikroskopis. Memahami cara kerja kamera penting agar kita bisa menghasilkan foto yang bagus.
        </p>
        <img src="/img/Materi3/optik1.png" alt="Pembentukan Bayangan pada Kamera Analog" class="img-fluid d-block mx-auto" style="max-width: 60%;">
    </div>
</div>

<div class="card-custom">
    <h5>Aktivitas 3.1</h5>
    <div class="question-container">
        <!-- Soal 1 -->
        <div class="question" id="soal1">
            <p>1. Apa fungsi utama lensa pada kamera?</p>
            <ul class="options" id="q1">
                <li onclick="pilihJawaban(this, 'q1', 'Memfokuskan cahaya pada sensor kamera', 'hasil1')">Menyerap cahaya agar gambar lebih terang</li>
                <li onclick="pilihJawaban(this, 'q1', 'Memfokuskan cahaya pada sensor kamera', 'hasil1')">Memfokuskan cahaya pada sensor kamera</li>
                <li onclick="pilihJawaban(this, 'q1', 'Memfokuskan cahaya pada sensor kamera', 'hasil1')">Mengubah cahaya menjadi sinyal listrik</li>
                <li onclick="pilihJawaban(this, 'q1', 'Memfokuskan cahaya pada sensor kamera', 'hasil1')">Menghasilkan warna pada gambar</li>
            </ul>
            <p id="hasil1"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 2 -->
        <div class="question" id="soal2">
            <p>2. Bagaimana kamera modern dapat tetap mengambil gambar yang jelas dalam kondisi pencahayaan rendah?</p>
            <ul class="options" id="q2">
                <li onclick="pilihJawaban(this, 'q2', 'Menggunakan sensor cahaya yang lebih besar', 'hasil2')">Menggunakan sensor cahaya yang lebih besar</li>
                <li onclick="pilihJawaban(this, 'q2', 'Menggunakan sensor cahaya yang lebih besar', 'hasil2')">Menghapus bayangan pada gambar</li>
                <li onclick="pilihJawaban(this, 'q2', 'Menggunakan sensor cahaya yang lebih besar', 'hasil2')">Mempercepat pergerakan lensa</li>
                <li onclick="pilihJawaban(this, 'q2', 'Menggunakan sensor cahaya yang lebih besar', 'hasil2')">Mengubah cahaya menjadi suara</li>
            </ul>
            <p id="hasil2"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 3 -->
        <div class="question" id="soal3" style="display: none;">
            <p>3. Pasangkan jenis lensa dengan fungsinya yang sesuai:</p>
            <div id="dragContainer" class="drag-container">
                <div class="drag-item" draggable="true" id="lensa" ondragstart="drag(event)">Memfokuskan cahaya pada sensor</div>
                <div class="drag-item" draggable="true" id="sensor" ondragstart="drag(event)">Mengubah cahaya menjadi sinyal digital</div>
                <div class="drag-item" draggable="true" id="apertur" ondragstart="drag(event)">Mengatur jumlah cahaya yang masuk</div>
                <div class="drag-item" draggable="true" id="shutter" ondragstart="drag(event)">Menentukan durasi cahaya masuk ke kamera</div>
            </div>
            <p>Lensa Kamera</p><div class="drop-zone" id="drop1" ondrop="drop(event, 'drop1')" ondragover="allowDrop(event)"></div>
            <p>Sensor Kamera</p><div class="drop-zone" id="drop2" ondrop="drop(event, 'drop2')" ondragover="allowDrop(event)"></div>
            <p>Apertur</p><div class="drop-zone" id="drop3" ondrop="drop(event, 'drop3')" ondragover="allowDrop(event)"></div>
            <p>Shutter</p><div class="drop-zone" id="drop4" ondrop="drop(event, 'drop4')" ondragover="allowDrop(event)"></div>
            <p id="hasil3"></p>
            <button class="cekJawaban nav-btn" onclick="cekDragDrop()">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 4 -->
        <div class="question" id="soal4" style="display: none;">
            <p>4. Perhatikan pernyataan berikut:</p>
            <p>"Semua kamera bekerja tanpa perlu adanya cahaya."</p>
            <ul id="q4" class="list-unstyled">
                <li><input type="radio" name="q4" value="Benar" onclick="cekPernyataan('q4', 'Salah', 'hasil4')"> Benar</li>
                <li><input type="radio" name="q4" value="Salah" onclick="cekPernyataan('q4', 'Salah', 'hasil4')"> Salah</li>
            </ul>
            <p id="hasil4"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 5 -->
        <div class="question" id="soal5" style="display: none;">
            <p>5.	Bagaimana cara kerja sensor kamera digital dalam menangkap gambar?</p>
            <ul class="options" id="q5">
                <li onclick="pilihJawaban(this, 'q5', 'Mempercepat pergerakan lensa', 'hasil5')">Menggunakan sensor cahaya yang lebih besar</li>
                <li onclick="pilihJawaban(this, 'q5', 'Mempercepat pergerakan lensa', 'hasil5')">Menghapus bayangan pada gambar</li>
                <li onclick="pilihJawaban(this, 'q5', 'Mempercepat pergerakan lensa', 'hasil5')">Mempercepat pergerakan lensa</li>
                <li onclick="pilihJawaban(this, 'q5', 'Mempercepat pergerakan lensa', 'hasil5')">Mengubah cahaya menjadi suara</li>
            </ul>
            <p id="hasil5"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>
    </div>
</div>

<!-- Navigasi Halaman -->
<div class="navigation">
    <a class="nav-btn" href="/materi2/penglihatan-serangga">Sebelumnya</a>
    <a class="nav-btn" href="/materi3/lup">Selanjutnya</a>
</div>

<script>
    function pilihJawaban(el, qid, kunci, hasilId) {
        const container = document.querySelector(`#${qid}`);
        const hasil = document.getElementById(hasilId);
        const btn = hasil.nextElementSibling;

        // Jika sudah benar, tidak bisa klik lagi
        if (hasil.dataset.answered === "true") return;

        document.querySelectorAll(`#${qid} li`).forEach(li => li.classList.remove("selected"));
        el.classList.add("selected");

        const userJawaban = el.textContent.trim();
        if (userJawaban === kunci) {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            btn.classList.remove("disabled");
            hasil.dataset.answered = "true";

            // Nonaktifkan semua opsi
            document.querySelectorAll(`#${qid} li`).forEach(li => {
                li.style.pointerEvents = "none";
            });
        } else {
            hasil.innerHTML = `Jawaban Salah! Jawaban yang benar: ${kunci}`;
            hasil.style.color = "red";
        }
    }

    function cekPernyataan(qid, kunci, hasilId) {
        const jawab = document.querySelector(`input[name="${qid}"]:checked`);
        const hasil = document.getElementById(hasilId);
        const btn = hasil.nextElementSibling;

        // Cegah aksi jika sudah dijawab
        if (hasil.dataset.answered === "true") return;

        if (!jawab) {
            hasil.textContent = "Pilih salah satu jawaban!";
            hasil.style.color = "orange";
            return;
        }

        if (jawab.value === kunci) {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            btn.classList.remove("disabled");
            hasil.dataset.answered = "true";

            // Nonaktifkan semua opsi radio
            document.querySelectorAll(`input[name="${qid}"]`).forEach(radio => {
                radio.disabled = true;
            });

        } else {
            hasil.innerHTML = `Jawaban Salah! Kamera butuh cahaya untuk menangkap gambar, karena tanpa cahaya, sensor tidak bisa merekam apa pun.`;
            hasil.style.color = "red";
        }
    }
    
    function allowDrop(e) { e.preventDefault(); }
    function drag(e) { e.dataTransfer.setData("text", e.target.id); }

    function drop(e, targetId) {
        e.preventDefault();
        const id = e.dataTransfer.getData("text");
        const target = document.getElementById(targetId);
        const item = document.getElementById(id);
        if (target.children.length > 0) {
            document.getElementById("dragContainer").appendChild(target.firstChild);
        }
        target.innerHTML = "";
        target.appendChild(item);
    }

    function cekDragDrop() {
        const benar =
            document.getElementById("drop1").children[0]?.id === "lensa" &&
            document.getElementById("drop2").children[0]?.id === "sensor" &&
            document.getElementById("drop3").children[0]?.id === "apertur" &&
            document.getElementById("drop4").children[0]?.id === "shutter";

        const hasil = document.getElementById("hasil3");
        const btnLanjut = hasil.nextElementSibling.nextElementSibling;

        if (benar) {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            hasil.dataset.answered = "true";
            document.querySelectorAll(".drag-item").forEach(i => i.setAttribute("draggable", false));
        } else {
            hasil.innerHTML = "Jawaban Salah! Pastikan semua pasangan sesuai dengan istilah kameranya.";
            hasil.style.color = "red";
        }

        btnLanjut.classList.remove("disabled");
    }

    let currentSoal = 1;
    const totalSoal = 5;

    function showSoal(n) {
        for (let i = 1; i <= totalSoal; i++) {
            document.getElementById(`soal${i}`).style.display = i === n ? "block" : "none";
        }
    }

    function nextSoal() {
        if (currentSoal < totalSoal) {
            currentSoal++;
            showSoal(currentSoal);
        } else {
            // HANYA SIMPAN SAAT SOAL TERAKHIR SAJA (latihan ke-6)
            fetch('/simpan-hasil-latihan', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({ latihan_ke: 6 }) // ← latihan ke-6
            })
            .then(res => res.json())
            .then(data => {
                console.log(data.message);
                window.location.href = "/materi3/lup"; // ← redirect setelah selesai
            })
            .catch(err => {
                console.error('Gagal simpan hasil latihan:', err);
                alert('Gagal menyimpan hasil latihan. Silakan coba lagi.');
            });
        }
    }

    document.addEventListener("DOMContentLoaded", () => {
        showSoal(currentSoal);
    });
</script>
@endsection