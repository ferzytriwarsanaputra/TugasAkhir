@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="card-custom">
    <div class="title-box">
        <span><h5>3.3 Mikroskop</h5></span>
    </div>
    <div class="reading-box">
        <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Buku">
        <strong>Ayo Membaca</strong>
    </div>
    <div class="content">
        <p>
            Mikroskop adalah alat yang digunakan untuk melihat benda yang sangat kecil, seperti sel atau mikroorganisme. Mikroskop cahaya, yang paling sering digunakan, memiliki dua lensa: lensa objektif dan lensa okuler. Lensa objektif pertama-tama memperbesar objek, lalu lensa okuler memperbesar bayangan yang dihasilkan oleh lensa objektif. Mikroskop memungkinkan kita melihat detail yang tidak bisa terlihat oleh mata biasa.
        </p>
        <p>
            Mikroskop sangat penting dalam ilmu pengetahuan untuk mempelajari hal-hal yang sangat kecil. Banyak penemuan dalam biologi, mikrobiologi, dan bidang lain sangat bergantung pada penggunaan mikroskop.
        </p>
        <img src="/img/Materi3/optik4.png" alt="Mikroskop Cahaya" class="img-fluid d-block mx-auto" style="max-width: 60%;">
        <p>
            Lensa okuler dan lensa objektif pada mikroskop adalah lensa cembung yang memiliki titik fokus yang berbeda. Objek yang ingin diamati diletakkan di atas kaca objek dan disinari dari bawah. Cahaya masuk melalui lensa objektif dan membentuk bayangan nyata yang diperbesar. Bayangan ini menjadi lebih besar karena objek diletakkan antara jarak fokus pertama dan kedua lensa objektif. Kemudian, bayangan yang sudah diperbesar itu akan diperbesar lagi oleh lensa okuler, sehingga menghasilkan bayangan maya yang lebih besar. Dengan susunan lensa seperti ini, mikroskop bisa menghasilkan bayangan yang ratusan kali lebih besar dari objek aslinya.
        </p>
        <img src="/img/Materi3/optik5.png" alt="Pembentukan Bayangan pada Mikroskop" class="img-fluid d-block mx-auto" style="max-width: 60%;">
    </div>
</div>

<div class="card-custom">
    <h5>Latihan</h5>
    <div class="question-container">
        <!-- Soal 1 -->
        <div class="question" id="soal1">
            <p>1. Apa fungsi utama mikroskop dalam kehidupan sehari-hari?</p>
            <ul class="options" id="q1">
                <li onclick="pilihJawaban(this, 'q1', 'Memperbesar benda kecil agar terlihat lebih jelas', 'hasil1')">
                    Memperbesar benda kecil agar terlihat lebih jelas
                </li>
                <li onclick="pilihJawaban(this, 'q1', 'Memperbesar benda kecil agar terlihat lebih jelas', 'hasil1')">
                    Mengubah warna objek agar lebih mudah diamati
                </li>                
                <li onclick="pilihJawaban(this, 'q1', 'Memperbesar benda kecil agar terlihat lebih jelas', 'hasil1')">Memperkecil benda besar agar lebih praktis diamati</li>
                <li onclick="pilihJawaban(this, 'q1', 'Memperbesar benda kecil agar terlihat lebih jelas', 'hasil1')">Memantulkan cahaya untuk menghasilkan bayangan baru</li>
            </ul>
            <p id="hasil1"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 2 -->
        <div class="question" id="soal2" style="display: none;">
            <p>2. Cocokkan bagian mikroskop dengan fungsinya!</p>
            <div id="dragContainer" class="drag-container">
                <div class="drag-item" draggable="true" id="okuler" ondragstart="drag(event)">Memegang objek yang akan diamati</div>
                <div class="drag-item" draggable="true" id="objektif" ondragstart="drag(event)">Memperbesar bayangan dari lensa objektif</div>
                <div class="drag-item" draggable="true" id="mikroskop" ondragstart="drag(event)">Memfokuskan cahaya ke objek</div>
                <div class="drag-item" draggable="true" id="cermin" ondragstart="drag(event)">Memperbesar objek pertama kali</div>
            </div>
            <p>Lensa Okuler</p><div class="drop-zone" id="drop1" ondrop="drop(event, 'drop1')" ondragover="allowDrop(event)"></div>
            <p>Lensa Objektif</p><div class="drop-zone" id="drop2" ondrop="drop(event, 'drop2')" ondragover="allowDrop(event)"></div>
            <p>Meja Mikroskop</p><div class="drop-zone" id="drop3" ondrop="drop(event, 'drop3')" ondragover="allowDrop(event)"></div>
            <p>Cermin</p><div class="drop-zone" id="drop4" ondrop="drop(event, 'drop4')" ondragover="allowDrop(event)"></div>
            <p id="hasil2"></p>
            <button class="cekJawaban nav-btn" onclick="cekDragDrop()">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 3 -->
        <div class="question" id="soal3" style="display: none;">
            <p>3. Sebutkan dua jenis lensa yang digunakan pada mikroskop dan fungsinya!</p>
            <input type="text" id="jawaban3">
            <p id="hasil3"></p>
            <button class="cekJawaban nav-btn" onclick="cekJawaban3()">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 4 -->
        <div class="question" id="soal4" style="display: none;">
            <p>4. Perhatikan pernyataan berikut:</p>
            <p>"Bayangan yang dihasilkan oleh mikroskop bersifat maya dan diperbesar."</p>
            <ul id="q4" class="list-unstyled">
                <li><input type="radio" name="q4" value="Benar" onclick="cekPernyataan('q4', 'Salah', 'hasil4')"> Benar</li>
                <li><input type="radio" name="q4" value="Salah" onclick="cekPernyataan('q4', 'Salah', 'hasil4')"> Salah</li>
            </ul>
            <p id="hasil4"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 5 -->
        <div class="question" id="soal5" style="display: none;">
            <p>5. Lengkapi pernyataan berikut dengan kata yang tepat!</p>
            <p>Lensa objektif pada mikroskop menghasilkan bayangan yang bersifat 
                <input type="text" id="jawaban5a"> dan 
                <input type="text" id="jawaban5b">.
            </p>
            <p id="hasil5"></p>
            <button class="cekJawaban nav-btn" onclick="cekJawaban5()">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>
    </div>
</div>

<!-- Navigasi Halaman -->
<div class="navigation">
    <a class="nav-btn" href="/materi3/lup">Sebelumnya</a>
    <a class="nav-btn" href="/materi3/teleskop">Selanjutnya</a>
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
            // HANYA SIMPAN SAAT SOAL TERAKHIR SAJA (latihan ke-8)
            fetch('/simpan-hasil-latihan', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({ latihan_ke: 8 }) // ← latihan ke-8
            })
            .then(res => res.json())
            .then(data => {
                console.log(data.message);
                window.location.href = "/materi3/teleskop"; // ← redirect setelah selesai
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
            drop1: "okuler",     // Lensa Okuler
            drop2: "objektif",   // Lensa Objektif
            drop3: "mikroskop",  // Meja Mikroskop
            drop4: "cermin"      // Cermin
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

        const jawaban = input.value.toLowerCase();
        const benar = jawaban.includes("objektif") && jawaban.includes("okuler");

        if (benar) {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            hasil.dataset.answered = "true";
            input.disabled = true;
            btnLanjut.classList.remove("disabled");
        } else {
            hasil.innerHTML = "Jawaban Salah! Contoh jawaban benar: Lensa objektif Memperbesar objek pertama kali, Lensa okuler Memperbesar bayangan yang dihasilkan oleh lensa objektif";
            hasil.style.color = "red";
        }
    }

    function cekJawaban5() {
        const hasil = document.getElementById("hasil5");
        const input1 = document.getElementById("jawaban5a");
        const input2 = document.getElementById("jawaban5b");
        const btnLanjut = hasil.nextElementSibling.nextElementSibling;

        if (hasil.dataset.answered === "true") return;

        const jawaban1 = input1.value.trim().toLowerCase();
        const jawaban2 = input2.value.trim().toLowerCase();

        const benar1 = ["nyata"];
        const benar2 = ["diperbesar"];

        if (benar1.includes(jawaban1) && benar2.includes(jawaban2)) {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            hasil.dataset.answered = "true";
            input1.disabled = true;
            input2.disabled = true;
            btnLanjut.classList.remove("disabled");
        } else {
            hasil.innerHTML = "Jawaban Salah! Jawaban yang benar: nyata dan terbalik";
            hasil.style.color = "red";
        }
    }

    document.addEventListener("DOMContentLoaded", () => {
        showSoal(currentSoal);
    });
</script>
@endsection