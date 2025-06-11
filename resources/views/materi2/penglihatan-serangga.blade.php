@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="card-custom">
    <div class="title-box">
        <span>2.2 Indra Penglihatan Serangga</span>
    </div>
    <div class="reading-box">
        <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Buku">
        <strong>Ayo Membaca</strong>
    </div>
    <div class="content">
        <p>
            Berbeda dengan manusia, serangga memiliki sistem penglihatan yang unik. Sebagian besar serangga memiliki mata majemuk, yang terdiri dari ribuan lensa kecil yang disebut ommatidia. Setiap ommatidium menangkap sebagian kecil dari lingkungan, dan otak serangga menggabungkan informasi ini untuk membentuk gambaran keseluruhan. Mata majemuk memungkinkan serangga mendeteksi gerakan dengan sangat cepat dan dari berbagai arah sekaligus, meskipun resolusi gambarnya lebih rendah dibandingkan dengan mata manusia.
        </p>
        <p>
            Mata majemuk sangat bermanfaat untuk kelangsungan hidup serangga, terutama dalam mendeteksi predator atau mencari makanan. Sebagai contoh, lalat dapat merespons ancaman dalam hitungan milidetik berkat mata majemuknya. Selain itu, serangga seperti lebah mampu melihat cahaya ultraviolet, yang membantu mereka dalam mencari bunga.
        </p>
        <figure class="text-center">
            <img src="/img/Materi2/mata6.png" alt="Mata Majemuk pada Mata Lalat" class="img-fluid d-block mx-auto" style="max-width: 50%;">
            <figcaption><em>Gambar 2.6 Mata Majemuk pada Mata Lalat (Sumber: Kemdikbud. 2017)</em></figcaption>
        </figure>        
    </div>
</div>

<div class="card-custom">
    <h5>Aktivitas 2.2</h5>
    <div class="question-container">
        <!-- Soal 1 -->
        <div class="question" id="soal1">
            <p><strong>Petunjuk:</strong> Pilih satu jawaban yang paling tepat.</p>
            <p>1. Apa yang menjadi ciri khas mata majemuk pada serangga?</p>
            <ul class="options" id="q1">
                <li onclick="pilihJawaban(this, 'q1', 'Terdiri dari banyak lensa kecil (ommatidia)', 'hasil1')">Memiliki satu lensa besar</li>
                <li onclick="pilihJawaban(this, 'q1', 'Terdiri dari banyak lensa kecil (ommatidia)', 'hasil1')">Terdiri dari banyak lensa kecil (ommatidia)</li>
                <li onclick="pilihJawaban(this, 'q1', 'Terdiri dari banyak lensa kecil (ommatidia)', 'hasil1')">Dapat melihat lebih jelas daripada mata manusia</li>
                <li onclick="pilihJawaban(this, 'q1', 'Terdiri dari banyak lensa kecil (ommatidia)', 'hasil1')">Tidak bisa mendeteksi gerakan</li>
            </ul>
            <p id="hasil1"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 2 -->
        <div class="question" id="soal2" style="display: none;">
            <p><strong>Petunjuk:</strong> Bacalah pernyataan lalu pilih Benar atau Salah.</p>
            <p>2. Perhatikan pernyataan berikut:</p>
            <p>"Mata majemuk pada serangga membantu mereka melihat dengan resolusi yang lebih tinggi dibandingkan manusia."</p>
            <ul id="q2" class="list-unstyled">
                <li><input type="radio" name="q2" value="Benar" onclick="cekPernyataan('q2', 'Salah', 'hasil2')"> Benar</li>
                <li><input type="radio" name="q2" value="Salah" onclick="cekPernyataan('q2', 'Salah', 'hasil2')"> Salah</li>
            </ul>
            <p id="hasil2"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 3 -->
        <div class="question" id="soal3" style="display: none;">
            <p><strong>Petunjuk:</strong> Ketik jawaban singkat pada kolom yang tersedia.</p>
            <p>3. Apa nama bagian kecil pada mata majemuk yang membantu serangga melihat?</p>
            <input type="text" id="jawaban3">
            <p id="hasil3"></p>
            <button class="cekJawaban nav-btn" onclick="cekJawaban3()">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 4 -->
        <div class="question" id="soal4" style="display: none;">
            <p><strong>Petunjuk:</strong> Seret dan jatuhkan jawaban ke kolom yang sesuai.</p>
            <p>4. Cocokkan serangga dengan manfaat mata majemuknya!</p>
            <div id="dragContainer" class="drag-container">
                <div class="drag-item" draggable="true" id="lalat" ondragstart="drag(event)">Dapat mendeteksi gerakan dengan cepat</div>
                <div class="drag-item" draggable="true" id="lebah" ondragstart="drag(event)">Dapat melihat cahaya ultraviolet untuk mencari bunga</div>
            </div>
            <p>Lalat</p><div class="drop-zone" id="drop1" ondrop="drop(event, 'drop1')" ondragover="allowDrop(event)"></div>
            <p>Lebah</p><div class="drop-zone" id="drop2" ondrop="drop(event, 'drop2')" ondragover="allowDrop(event)"></div>
            <p id="hasil4"></p>
            <button class="cekJawaban nav-btn" onclick="cekDragDrop()">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 5 -->
        <div class="question" id="soal5" style="display: none;">
            <p><strong>Petunjuk:</strong> Pilih jawaban yang paling tepat dari daftar pilihan.</p>
            <p>5. Mengapa mata majemuk penting bagi serangga?</p>
            <ul class="options" id="q5">
                <li onclick="pilihJawaban(this, 'q5', 'Membantu mereka mendeteksi gerakan dengan cepat', 'hasil5')">Membantu mereka mendeteksi gerakan dengan cepat</li>
                <li onclick="pilihJawaban(this, 'q5', 'Membantu mereka mendeteksi gerakan dengan cepat', 'hasil5')">Membuat penglihatan mereka lebih tajam dari manusia</li>
                <li onclick="pilihJawaban(this, 'q5', 'Membantu mereka mendeteksi gerakan dengan cepat', 'hasil5')">Membantu mereka melihat di dalam gelap total</li>
                <li onclick="pilihJawaban(this, 'q5', 'Membantu mereka mendeteksi gerakan dengan cepat', 'hasil5')">Mengurangi kepekaan terhadap cahaya</li>
            </ul>
            <p id="hasil5"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>
    </div>
</div>

<!-- Navigasi Halaman -->
<div class="navigation d-flex justify-content-between">
    <a class="nav-btn btn btn-primary" href="/materi2/penglihatan-manusia">Sebelumnya</a>
    <a class="nav-btn btn btn-primary" href="/petunjuk/2">Selanjutnya</a>
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

            // Tandai sebagai sudah dijawab benar
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

        // Cegah menjawab ulang jika sudah benar
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

            // Tandai sebagai sudah dijawab benar
            hasil.dataset.answered = "true";

            // Nonaktifkan semua radio button
            document.querySelectorAll(`input[name="${qid}"]`).forEach(input => {
                input.disabled = true;
            });
        } else {
            hasil.innerHTML = `Jawaban Salah! Jawaban yang benar: ${kunci}. Mata majemuk serangga tidak sejelas mata manusia, resolusinya lebih rendah, hanya bagus untuk mendeteksi gerakan.`;
            hasil.style.color = "red";
        }
    }

    function cekJawaban3() {
        const jawaban = document.getElementById("jawaban3").value.trim().toLowerCase();
        const hasil = document.getElementById("hasil3");
        const btnLanjut = hasil.nextElementSibling.nextElementSibling; // karena ada 2 tombol sekarang

        if (jawaban === "ommatidium") {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            btnLanjut.classList.remove("disabled");
        } else {
            hasil.innerHTML = "Jawaban Salah! Jawaban yang benar: ommatidium";
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
        const benar = document.getElementById("drop1").children[0]?.id === "lalat" &&
                    document.getElementById("drop2").children[0]?.id === "lebah";

        const hasil = document.getElementById("hasil4");
        const btnLanjut = hasil.nextElementSibling.nextElementSibling;

        if (benar) {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            hasil.dataset.answered = "true";

            // Nonaktifkan drag
            document.querySelectorAll(".drag-item").forEach(item => item.setAttribute("draggable", false));
        } else {
            hasil.innerHTML = "Jawaban Salah! Pastikan mata majemuk lalat dan lebah dipasangkan dengan fungsi yang benar.";
            hasil.style.color = "red";
        }

        // Aktifkan tombol Lanjut setelah diperiksa
        btnLanjut.classList.remove("disabled");
    }

    function cekUrutan() {
        const urutan = [...document.querySelectorAll("#sortable .sortable-item")].map(i => i.id);
        const hasil = document.getElementById("hasil5");
        const btnLanjut = hasil.nextElementSibling.nextElementSibling;

        if (JSON.stringify(urutan) === JSON.stringify(["step1", "step2", "step3"])) {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            hasil.dataset.answered = "true";

            // Nonaktifkan drag
            document.querySelectorAll(".sortable-item").forEach(item => item.setAttribute("draggable", false));
        } else {
            hasil.innerHTML = "Jawaban Salah! Urutan yang benar adalah:<br>1) Fokus pasif → sejajar<br>2) Sejajar → fokus aktif<br>3) Pusat optik → lurus";
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
            // Konfirmasi Swal sebelum menyimpan dan redirect
            Swal.fire({
                title: 'Latihan selesai!',
                text: 'Apakah kamu ingin melanjutkan ke materi berikutnya?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya, lanjut',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch('/simpan-hasil-latihan', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        },
                        body: JSON.stringify({ latihan_ke: 5 }) // ← latihan ke-5
                    })
                    .then(res => res.json())
                    .then(data => {
                        console.log(data.message);
                        Swal.fire({
                            title: 'Berhasil!',
                            text: 'Hasil latihan telah disimpan.',
                            icon: 'success',
                            confirmButtonText: 'Lanjut ke Materi'
                        }).then(() => {
                            window.location.href = "/petunjuk/2"; // ← redirect setelah selesai
                        });
                    })
                    .catch(err => {
                        console.error('Gagal simpan hasil latihan:', err);
                        Swal.fire('Gagal', 'Tidak dapat menyimpan hasil latihan. Coba lagi nanti.', 'error');
                    });
                }
            });
        }
    }

    document.addEventListener("DOMContentLoaded", () => {
    showSoal(currentSoal);

    // Inisialisasi SortableJS
    Sortable.create(document.getElementById("sortable"), {
        animation: 150
    });

    // Acak urutan soal no 5
    const sortableList = document.getElementById("sortable");
    const items = Array.from(sortableList.children);
    for (let i = items.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        sortableList.appendChild(items[j]);
        items.splice(j, 1);
    }
});
</script>
@endsection