@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="card-custom">
    <div class="title-box">
        <span><h5>3.2 Kaca Pembesar (Lup)</h5></span>
    </div>
    <div class="reading-box">
        <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Buku">
        <strong>Ayo Membaca</strong>
    </div>
    <div class="content">
        <p>
            Kaca pembesar  atau lup, adalah alat optik sederhana yang memiliki satu lensa cembung. Alat ini digunakan untuk memperbesar objek kecil supaya kita bisa melihat detailnya dengan lebih jelas. Ketika cahaya melewati lensa cembung, cahaya tersebut akan dibelokkan dan berkumpul di satu titik, sehingga bayangan objek menjadi lebih besar. Kaca pembesar sering digunakan untuk kegiatan sehari-hari, seperti membaca tulisan kecil atau melihat detail pada suatu benda.
        </p>
        <img src="/img/Materi3/optik2.png" alt="Kaca Pembesar (Lup)" class="img-fluid d-block mx-auto">
        <p>
            Penggunaan kaca pembesar tidak terbatas pada kegiatan sehari-hari, tetapi juga digunakan dalam penelitian ilmiah untuk mengamati detail yang tidak terlihat oleh mata telanjang. Memahami cara kerja kaca pembesar membantu dalam berbagai aplikasi yang membutuhkan perbesaran.
        </p>
        <img src="/img/Materi3/optik3.png" alt="(a) Pengamatan Menggunakan Lup dengan Mata Berakomodasi  Maksimum, (b) Pengamatan Menggunakan Lup dengan Mata Tidak Berakomodasi" class="img-fluid d-block mx-auto" style="max-width: 40%;">
        <p>
            (a) Pengamatan Menggunakan Lup dengan Mata Berakomodasi  Maksimum, <br>(b) Pengamatan Menggunakan Lup dengan Mata Tidak Berakomodasi
        </p>
    </div>
</div>

<div class="card-custom">
    <h5>Latihan</h5>
    <div class="question-container">
        <!-- Soal 1 -->
        <div class="question" id="soal1">
            <p>1. Apa fungsi utama kaca pembesar dalam kehidupan sehari-hari?</p>
            <ul class="options" id="q1">
                <li onclick="pilihJawaban(this, 'q1', 'Memperbesar objek agar detailnya lebih terlihat jelas', 'hasil1')">Memperkecil ukuran objek agar lebih mudah dipahami</li>
                <li onclick="pilihJawaban(this, 'q1', 'Memperbesar objek agar detailnya lebih terlihat jelas', 'hasil1')">Memperbesar objek agar detailnya lebih terlihat jelas</li>
                <li onclick="pilihJawaban(this, 'q1', 'Memperbesar objek agar detailnya lebih terlihat jelas', 'hasil1')">Mengubah warna objek agar lebih kontras</li>
                <li onclick="pilihJawaban(this, 'q1', 'Memperbesar objek agar detailnya lebih terlihat jelas', 'hasil1')">Menyerap cahaya untuk meningkatkan pencahayaan</li>
            </ul>
            <p id="hasil1"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 2 -->
        <div class="question" id="soal2" style="display: none;">
            <p>2. Apa jenis lensa yang digunakan pada kaca pembesar?</p>
            <input type="text" id="jawaban2">
            <p id="hasil2"></p>
            <button class="cekJawaban nav-btn" onclick="cekJawaban2()">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 3 -->
        <div class="question" id="soal3" style="display: none;">
            <p>3. Cocokkan istilah berikut dengan penjelasannya yang benar:</p>
            <div id="dragContainer" class="drag-container">
                <div class="drag-item" draggable="true" id="lup" ondragstart="drag(event)">Membantu melihat benda kecil lebih jelas</div>
                <div class="drag-item" draggable="true" id="cembung" ondragstart="drag(event)">Mengumpulkan cahaya dan memperbesar bayangan</div>
                <div class="drag-item" draggable="true" id="cekung" ondragstart="drag(event)">Menyebarkan cahaya dan membuat bayangan lebih</div>
            </div>
            <p>Lup</p><div class="drop-zone" id="drop1" ondrop="drop(event, 'drop1')" ondragover="allowDrop(event)"></div>
            <p>Lensa Cembung</p><div class="drop-zone" id="drop2" ondrop="drop(event, 'drop2')" ondragover="allowDrop(event)"></div>
            <p>Lensa Cekung</p><div class="drop-zone" id="drop3" ondrop="drop(event, 'drop3')" ondragover="allowDrop(event)"></div>
            <p id="hasil3"></p>
            <button class="cekJawaban nav-btn" onclick="cekDragDrop()">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 4 -->
        <div class="question" id="soal4" style="display: none;">
            <p>4. Apa fungsi utama kaca pembesar dalam kehidupan sehari-hari?</p>
            <input type="text" id="jawaban4">
            <p id="hasil4"></p>
            <button class="cekJawaban nav-btn" onclick="cekJawaban4()">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 5 -->
        <div class="question" id="soal5" style="display: none;">
            <p>5. Perhatikan pernyataan berikut:</p>
            <p>"Kaca pembesar menggunakan lensa cekung untuk memperbesar objek."</p>
            <ul id="q5" class="list-unstyled">
                <li><input type="radio" name="q5" value="Benar" onclick="cekPernyataan('q5', 'Salah', 'hasil5')"> Benar</li>
                <li><input type="radio" name="q5" value="Salah" onclick="cekPernyataan('q5', 'Salah', 'hasil5')"> Salah</li>
            </ul>
            <p id="hasil5"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>
    </div>
</div>

<div class="navigation">
    <a class="nav-btn" href="/materi3/kamera">Sebelumnya</a>
    <a class="nav-btn" href="/materi3/mikroskop">Selanjutnya</a>
</div>

<script>
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
            // HANYA SIMPAN SAAT SOAL TERAKHIR SAJA (latihan ke-7)
            fetch('/simpan-hasil-latihan', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({ latihan_ke: 7 }) // ← latihan ke-7
            })
            .then(res => res.json())
            .then(data => {
                console.log(data.message);
                window.location.href = "/materi3/mikroskop"; // ← redirect setelah selesai
            })
            .catch(err => {
                console.error('Gagal simpan hasil latihan:', err);
                alert('Gagal menyimpan hasil latihan. Silakan coba lagi.');
            });
        }
    }

    function pilihJawaban(el, qid, kunci, hasilId) {
        const container = document.getElementById(qid);
        const hasil = document.getElementById(hasilId);
        const btn = hasil.nextElementSibling;

        if (hasil.dataset.answered === "true") return;

        container.querySelectorAll("li").forEach(li => li.classList.remove("selected"));
        el.classList.add("selected");

        const userJawaban = el.textContent.trim();
        if (userJawaban === kunci) {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            hasil.dataset.answered = "true";
            btn.classList.remove("disabled");
            container.querySelectorAll("li").forEach(li => li.style.pointerEvents = "none");
        } else {
            hasil.innerHTML = `Jawaban Salah! Jawaban yang benar: ${kunci}`;
            hasil.style.color = "red";
        }
    }

    function cekJawaban2() {
        const hasil = document.getElementById("hasil2");
        const input = document.getElementById("jawaban2").value.trim().toLowerCase();
        const btnLanjut = document.querySelector("#soal2 .lanjut-btn");

        if (hasil.dataset.answered === "true") return;

        if (input === "lensa cembung") {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            hasil.dataset.answered = "true";
            btnLanjut.classList.remove("disabled");
            document.getElementById("jawaban2").setAttribute("disabled", true);
        } else {
            hasil.innerHTML = "Jawaban Salah! Jawaban yang benar: Lensa cembung";
            hasil.style.color = "red";
        }
    }

    function allowDrop(e) { e.preventDefault(); }

    function drag(e) {
        e.dataTransfer.setData("text", e.target.id);
    }

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
        const hasil = document.getElementById("hasil3");
        const btnLanjut = document.querySelector("#soal3 .lanjut-btn");

        if (hasil.dataset.answered === "true") return;

        const benar =
            document.getElementById("drop1").children[0]?.id === "lup" &&
            document.getElementById("drop2").children[0]?.id === "cembung" &&
            document.getElementById("drop3").children[0]?.id === "cekung";

        if (benar) {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            hasil.dataset.answered = "true";
            btnLanjut.classList.remove("disabled");
            document.querySelectorAll(".drag-item").forEach(i => i.setAttribute("draggable", false));
        } else {
            hasil.innerHTML = "Jawaban Salah! Pastikan semua pasangan sesuai jenis lensanya.";
            hasil.style.color = "red";
        }
    }

    function cekJawaban4() {
        const hasil = document.getElementById("hasil4");
        const input = document.getElementById("jawaban4").value.trim().toLowerCase();
        const btnLanjut = document.querySelector("#soal4 .lanjut-btn");

        if (hasil.dataset.answered === "true") return;

        if (input === "memperbesar objek agar detailnya lebih terlihat jelas") {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            hasil.dataset.answered = "true";
            btnLanjut.classList.remove("disabled");
            document.getElementById("jawaban4").setAttribute("disabled", true);
        } else {
            hasil.innerHTML = "Jawaban Salah! Jawaban yang benar: Memperbesar objek agar detailnya lebih terlihat jelas";
            hasil.style.color = "red";
        }
    }

    function cekPernyataan(qid, kunci, hasilId) {
        const hasil = document.getElementById(hasilId);
        const btnLanjut = hasil.nextElementSibling;

        if (hasil.dataset.answered === "true") return;

        const jawab = document.querySelector(`input[name="${qid}"]:checked`);
        if (!jawab) {
            hasil.textContent = "Pilih salah satu jawaban!";
            hasil.style.color = "orange";
            return;
        }

        if (jawab.value === kunci) {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            hasil.dataset.answered = "true";
            btnLanjut.classList.remove("disabled");
            document.querySelectorAll(`input[name="${qid}"]`).forEach(i => i.disabled = true);
        } else {
            hasil.innerHTML = `Jawaban Salah! Jawaban yang benar: ${kunci}. Lensa cekung tidak digunakan untuk memperbesar objek.`;
            hasil.style.color = "red";
        }
    }

    document.addEventListener("DOMContentLoaded", () => {
        showSoal(currentSoal);
    });
</script>
@endsection