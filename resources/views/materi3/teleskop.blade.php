@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="card-custom">
    <div class="title-box">
        <span><h5>3.4 Teleskop</h5></span>
    </div>
    <div class="reading-box">
        <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Buku">
        <strong>Ayo Membaca</strong>
    </div>
    <div class="content">
        <p>
            Teleskop adalah alat yang digunakan untuk melihat benda-benda yang sangat jauh, seperti bintang, planet, dan galaksi. Ada dua jenis teleskop utama: teleskop refraktor, yang menggunakan lensa untuk mengumpulkan cahaya, dan teleskop reflektor, yang menggunakan cermin cekung. Teleskop membantu para astronom untuk mengamati benda-benda di luar angkasa dan mempelajari lebih dalam tentang alam semesta.
        </p>
        <p>
            Penggunaan teleskop sangat penting dalam ilmu astronomi. Dengan teleskop, kita bisa melihat jauh ke luar angkasa, mengamati benda langit, dan mendapatkan pemahaman yang lebih baik tentang alam semesta.
        </p>
        <h6>a. Teleskop Bias</h6>
        <p>
            Teleskop adalah alat optik yang membuat benda-benda jauh terlihat lebih dekat. Teleskop bias sederhana terdiri dari dua lensa cembung yang ada di dalam pipa. Lensa yang lebih besar disebut lensa objektif, sedangkan lensa yang lebih kecil adalah lensa okuler (lensa mata). Lensa objektif pertama-tama membentuk bayangan, kemudian bayangan itu diperbesar oleh lensa okuler. Lensa objektif pada teleskop bias lebih besar daripada diameter mata kita, jadi lebih banyak cahaya yang bisa masuk ke dalam lensa dan ke mata kita. Karena itu, bayangan yang terbentuk oleh teleskop akan lebih jelas dan objek yang terlihat jadi lebih detail dibandingkan dengan melihat langsung dengan mata.
        </p>
        <img src="/img/Materi3/optik6.png" alt="Teleskop Bias" class="img-fluid d-block mx-auto" style="max-width: 50%;">
        <p>
            Teleskop yang dibuat dengan lensa disebut teleskop pembias. Lensa dalam teleskop bias ini sama dengan lensa yang ada di kacamata, yaitu sama-sama bisa membelokkan cahaya yang melewatinya.
        </p>
        <p>
            Tapi, ada bedanya nih lensa di teleskop sama di kacamata. Kalau di kacamata, lensa membantu bikin objek yang elo lihat supaya nggak kelihatan buram lagi. Kalau di teleskop, lensa ini yang bikin elo bisa melihat objek yang jauh dengan lebih dekat. 
        </p>
        <img src="/img/Materi3/teleskop bias.png" alt="Cara Kerja Teleskop Bias dalam menangkap cahaya" class="img-fluid d-block mx-auto" style="max-width: 50%;">

        <h6>b. Teleskop Pantul</h6>
        <p>
            Pada teleskop pantul, lensa objektif digantikan dengan cermin cekung. Bayangan dari objek yang jauh terbentuk di dalam tabung teleskop ketika cahaya dipantulkan oleh cermin cekung. Cahaya dari objek yang jauh masuk ke salah satu ujung tabung dan dipantulkan oleh cermin lain di ujung satunya. Cahaya tersebut kemudian dipantulkan lagi dari cermin cekung ke cermin datar di dalam tabung. Cermin datar ini memantulkan cahaya ke lensa okuler, yang berfungsi untuk memperbesar gambar.
        </p>
        <img src="/img/Materi3/optik7.png" alt="Teleskop Pantul" class="img-fluid d-block mx-auto" style="max-width: 50%;">
        <p>
            Teleskop pemantul bisa mendapatkan hasil yang bagus walaupun menggunakan cermin yang tipis banget. Karena cara kerja teleskop pemantul yaitu cahaya terkonsentrasi dengan memantul dari cermin, jadi cermin nggak perlu dibuat tebal, hanya perlu dibuat dengan bentuk lengkung yang tepat.
        </p>
        <p>
            Ini juga alasan mengapa lebih banyak teleskop yang menggunakan cermin saat ini, karena cara membuatnya juga nggak begitu sulit. Apalagi cermin juga lebih mudah dibersihkan dan dipoles daripada lensa.
        </p>
        <img src="/img/Materi3/teleskop pantul.png" alt="Cara Kerja Teleskop Pantul dalam menangkap cahaya" class="img-fluid d-block mx-auto" style="max-width: 50%;">
    </div>
</div>

<div class="card-custom">
    <h5>Latihan</h5>
    <div class="question-container">
        <!-- Soal 1 -->
        <div class="question" id="soal1">
            <p>1. Apa perbedaan utama antara teleskop bias dan teleskop pantul?</p>
            <ul class="options" id="q1">
                <li onclick="pilihJawaban(this, 'q1', 'Teleskop bias menggunakan lensa, sedangkan teleskop pantul menggunakan cermin', 'hasil1')">
                    Teleskop bias menggunakan cermin, sedangkan teleskop pantul menggunakan lensa
                </li>
                <li onclick="pilihJawaban(this, 'q1', 'Teleskop bias menggunakan lensa, sedangkan teleskop pantul menggunakan cermin', 'hasil1')">
                    Teleskop bias menggunakan lensa, sedangkan teleskop pantul menggunakan cermin
                </li>                
                <li onclick="pilihJawaban(this, 'q1', 'Teleskop bias menggunakan lensa, sedangkan teleskop pantul menggunakan cermin', 'hasil1')">Teleskop bias menggunakan dua lensa cekung, sedangkan teleskop pantul menggunakan dua cermin cembung</li>
                <li onclick="pilihJawaban(this, 'q1', 'Teleskop bias menggunakan lensa, sedangkan teleskop pantul menggunakan cermin', 'hasil1')">Teleskop bias dan teleskop pantul bekerja dengan prinsip yang sama tanpa perbedaan</li>
            </ul>
            <p id="hasil1"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 2 -->
        <div class="question" id="soal2" style="display: none;">
            <p>2. Cocokkan jenis teleskop di kolom kiri dengan ciri khasnya di kolom kanan!</p>
            <div id="dragContainer" class="drag-container">
                <div class="drag-item" draggable="true" id="bias" ondragstart="drag(event)">Menggunakan cermin cekung sebagai pengumpul cahaya</div>
                <div class="drag-item" draggable="true" id="pantul" ondragstart="drag(event)">Menggunakan lensa cembung sebagai pengumpul cahaya</div>
            </div>
            <p>Teleskop Bias</p><div class="drop-zone" id="drop1" ondrop="drop(event, 'drop1')" ondragover="allowDrop(event)"></div>
            <p>Teleskop Pantul</p><div class="drop-zone" id="drop2" ondrop="drop(event, 'drop2')" ondragover="allowDrop(event)"></div>
            <p id="hasil2"></p>
            <button class="cekJawaban nav-btn" onclick="cekDragDrop()">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 3 -->
        <div class="question" id="soal3" style="display: none;">
            <p>3. Lensa yang berfungsi untuk memperbesar bayangan pada teleskop bias disebut <input type="text" id="jawaban3">.</p>
            <p id="hasil3"></p>
            <button class="cekJawaban nav-btn" onclick="cekJawaban3()">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 4 -->
        <div class="question" id="soal4" style="display: none;">
            <p>4. Perhatikan pernyataan berikut:</p>
            <p>"Teleskop pantul lebih sering digunakan dalam astronomi modern karena cermin lebih mudah dibuat dan lebih ringan dibandingkan lensa besar."</p>
            <ul id="q4" class="list-unstyled">
                <li><input type="radio" name="q4" value="Benar" onclick="cekPernyataan('q4', 'Benar', 'hasil4')"> Benar</li>
                <li><input type="radio" name="q4" value="Salah" onclick="cekPernyataan('q4', 'Benar', 'hasil4')"> Salah</li>
            </ul>
            <p id="hasil4"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 5 -->
        <div class="question" id="soal5" style="display: none;">
            <p>5. Lengkapi pernyataan berikut dengan kata yang tepat!</p>
            <p>Cahaya yang masuk ke teleskop pantul akan dipantulkan oleh <input type="text" id="jawaban5"> sebelum mencapai lensa okuler untuk diperbesar.
            </p>
            <p id="hasil5"></p>
            <button class="cekJawaban nav-btn" onclick="cekJawaban5()">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>
    </div>
</div>

<!-- Navigasi Halaman -->
<div class="navigation">
    <a class="nav-btn" href="/materi3/mikroskop">Sebelumnya</a>
    <a class="nav-btn" href="/petunjuk/3">Selanjutnya</a>
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
            // HANYA SIMPAN SAAT SOAL TERAKHIR SAJA (latihan ke-9)
            fetch('/simpan-hasil-latihan', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({ latihan_ke: 9 }) // ← latihan ke-9
            })
            .then(res => res.json())
            .then(data => {
                console.log(data.message);
                window.location.href = "/petunjuk/3"; // ← redirect setelah selesai
            })
            .catch(err => {
                console.error('Gagal simpan hasil latihan:', err);
                alert('Gagal menyimpan hasil latihan. Silakan coba lagi.');
            });
        }
    }

    function pilihJawaban(el, qid, kunci, hasilId) {
        const container = document.querySelector(`#${qid}`);
        const hasil = document.getElementById(hasilId);
        const btn = hasil.nextElementSibling;

        if (hasil.dataset.answered === "true") return;

        document.querySelectorAll(`#${qid} li`).forEach(li => li.classList.remove("selected"));
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

    function cekPernyataan(qid, kunci, hasilId) {
        const hasil = document.getElementById(hasilId);
        const btn = hasil.nextElementSibling;
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
            btn.classList.remove("disabled");
            document.querySelectorAll(`input[name="${qid}"]`).forEach(i => i.disabled = true);
        } else {
            hasil.innerHTML = `Jawaban Salah! Jawaban yang benar: ${kunci}`;
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
        const hasil = document.getElementById("hasil2");
        const btnLanjut = hasil.nextElementSibling.nextElementSibling;

        const jawabanBenar = {
            drop1: "pantul", // Teleskop Pantul → Menggunakan cermin
            drop2: "bias"    // Teleskop Bias → Menggunakan lensa
        };

        let benar = true;
        for (let key in jawabanBenar) {
            const child = document.getElementById(key).children[0];
            if (!child || child.id !== jawabanBenar[key]) {
                benar = false;
                break;
            }
        }

        if (benar) {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            hasil.dataset.answered = "true";
            btnLanjut.classList.remove("disabled");
            document.querySelectorAll(".drag-item").forEach(i => i.setAttribute("draggable", false));
        } else {
            hasil.innerHTML = "Jawaban Salah! Pastikan semua pasangan sudah benar.";
            hasil.style.color = "red";
        }
    }

    function cekJawaban3() {
        const hasil = document.getElementById("hasil3");
        const input = document.getElementById("jawaban3");
        const btnLanjut = hasil.nextElementSibling.nextElementSibling;

        if (hasil.dataset.answered === "true") return;

        const jawaban = input.value.trim().toLowerCase();
        const benar = jawaban.includes("okuler");

        if (benar) {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            hasil.dataset.answered = "true";
            input.disabled = true;
            btnLanjut.classList.remove("disabled");
        } else {
            hasil.innerHTML = "Jawaban Salah! Jawaban yang benar: okuler";
            hasil.style.color = "red";
        }
    }

    function cekJawaban5() {
        const hasil = document.getElementById("hasil5");
        const input = document.getElementById("jawaban5");
        const btnLanjut = hasil.nextElementSibling.nextElementSibling;

        if (hasil.dataset.answered === "true") return;

        const jawaban = input.value.trim().toLowerCase();
        const benar = jawaban.includes("cermin");

        if (benar) {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            hasil.dataset.answered = "true";
            input.disabled = true;
            btnLanjut.classList.remove("disabled");
        } else {
            hasil.innerHTML = "Jawaban Salah! Jawaban yang benar: cermin";
            hasil.style.color = "red";
        }
    }

    document.addEventListener("DOMContentLoaded", () => {
        showSoal(currentSoal);
    });
</script>
@endsection