@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="card-custom">
    <div class="title-box">
        <span>3.3 Mikroskop</span>
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
        <figure class="text-center">
            <img src="/img/Materi3/optik4.png" alt="Mikroskop Cahaya" class="img-fluid d-block mx-auto" style="max-width: 60%;">
            <figcaption><em>Gambar 3.4 Mikroskop Cahaya (Sumber: Kemdikbud. 2017)</em></figcaption>
        </figure>
        <p>
            Lensa okuler dan lensa objektif pada mikroskop adalah lensa cembung yang memiliki titik fokus yang berbeda. Objek yang ingin diamati diletakkan di atas kaca objek dan disinari dari bawah. Cahaya masuk melalui lensa objektif dan membentuk bayangan nyata yang diperbesar. Bayangan ini menjadi lebih besar karena objek diletakkan antara jarak fokus pertama dan kedua lensa objektif. Kemudian, bayangan yang sudah diperbesar itu akan diperbesar lagi oleh lensa okuler, sehingga menghasilkan bayangan maya yang lebih besar. Dengan susunan lensa seperti ini, mikroskop bisa menghasilkan bayangan yang ratusan kali lebih besar dari objek aslinya.
        </p>
        <figure class="text-center">
            <img src="/img/Materi3/optik5.png" alt="Pembentukan Bayangan pada Mikroskop" class="img-fluid d-block mx-auto" style="max-width: 60%;">
            <figcaption><em>Gambar 3.5 Pembentukan Bayangan pada Mikroskop (Sumber: Kemdikbud. 2017)</em></figcaption>
        </figure>
    </div>
</div>

<div class="card-custom">
    <h5>Aktivitas 3.3</h5>
    <div class="question-container">
        <!-- Soal 1 -->
        <div class="question" id="soal1">
            <p><strong>Petunjuk:</strong> Pilih jawaban yang paling tepat terkait fungsi mikroskop dalam kehidupan sehari-hari.</p>
            <p>1. Mikroskop digunakan untuk melihat benda kecil agar...</p>
            <ul class="options" id="q1">
                <li onclick="pilihJawaban(this, 'q1', 'Memperbesar benda kecil agar terlihat lebih jelas', 'hasil1')">Memperkecil benda besar agar praktis</li>
                <li onclick="pilihJawaban(this, 'q1', 'Memperbesar benda kecil agar terlihat lebih jelas', 'hasil1')">Mengubah warna objek agar lebih menarik</li>
                <li onclick="pilihJawaban(this, 'q1', 'Memperbesar benda kecil agar terlihat lebih jelas', 'hasil1')">Memperbesar benda kecil agar terlihat lebih jelas</li>
                <li onclick="pilihJawaban(this, 'q1', 'Memperbesar benda kecil agar terlihat lebih jelas', 'hasil1')">Memantulkan cahaya dari atas</li>
            </ul>
            <p id="hasil1"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 2 -->
        <div class="question" id="soal2" style="display: none;">
            <p><strong>Petunjuk:</strong> Pilih dua lensa yang digunakan dalam mikroskop cahaya.</p>
            <p>2. Dua jenis lensa utama dalam mikroskop cahaya adalah...</p>
            <ul class="options" id="q2">
                <li onclick="pilihJawaban(this, 'q2', 'Lensa objektif dan lensa okuler', 'hasil2')">Lensa cembung dan lensa cekung</li>
                <li onclick="pilihJawaban(this, 'q2', 'Lensa objektif dan lensa okuler', 'hasil2')">Lensa prisma dan lensa kontak</li>
                <li onclick="pilihJawaban(this, 'q2', 'Lensa objektif dan lensa okuler', 'hasil2')">Lensa cekung dan cermin datar</li>
                <li onclick="pilihJawaban(this, 'q2', 'Lensa objektif dan lensa okuler', 'hasil2')">Lensa objektif dan lensa okuler</li>
            </ul>
            <p id="hasil2"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 3 -->
        <div class="question" id="soal3" style="display: none;">
            <p><strong>Petunjuk:</strong> Pilih sifat bayangan akhir yang dihasilkan mikroskop.</p>
            <p>3. Bayangan akhir dari mikroskop bersifat...</p>
            <ul class="options" id="q3">
                <li onclick="pilihJawaban(this, 'q3', 'Maya dan diperbesar', 'hasil3')">Nyata dan menyusut</li>
                <li onclick="pilihJawaban(this, 'q3', 'Maya dan diperbesar', 'hasil3')">Maya dan diperbesar</li>
                <li onclick="pilihJawaban(this, 'q3', 'Maya dan diperbesar', 'hasil3')">Maya dan berwarna</li>
                <li onclick="pilihJawaban(this, 'q3', 'Maya dan diperbesar', 'hasil3')">Nyata dan tegak</li>
            </ul>
            <p id="hasil3"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 4 -->
        <div class="question" id="soal4" style="display: none;">
            <p><strong>Petunjuk:</strong> Pilih jawaban yang paling tepat tentang fungsi lensa objektif.</p>
            <p>4. Lensa objektif dalam mikroskop berfungsi untuk...</p>
            <ul class="options" id="q4">
                <li onclick="pilihJawaban(this, 'q4', 'Memperbesar objek pertama kali', 'hasil4')">Meningkatkan fokus cahaya</li>
                <li onclick="pilihJawaban(this, 'q4', 'Memperbesar objek pertama kali', 'hasil4')">Memperbesar objek pertama kali</li>
                <li onclick="pilihJawaban(this, 'q4', 'Memperbesar objek pertama kali', 'hasil4')">Menyaring warna dari objek</li>
                <li onclick="pilihJawaban(this, 'q4', 'Memperbesar objek pertama kali', 'hasil4')">Menyalurkan cahaya ke mata</li>
            </ul>
            <p id="hasil4"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 5 -->
        <div class="question" id="soal5" style="display: none;">
            <p><strong>Petunjuk:</strong> Pilih pernyataan yang benar tentang mikroskop.</p>
            <p>5. Mikroskop sangat penting dalam ilmu pengetahuan karena...</p>
            <ul class="options" id="q5">
                <li onclick="pilihJawaban(this, 'q5', 'Membantu melihat detail yang tidak bisa dilihat oleh mata biasa', 'hasil5')">Memantulkan bayangan nyata ke cermin datar</li>
                <li onclick="pilihJawaban(this, 'q5', 'Membantu melihat detail yang tidak bisa dilihat oleh mata biasa', 'hasil5')">Memperkecil objek untuk dipelajari lebih mudah</li>
                <li onclick="pilihJawaban(this, 'q5', 'Membantu melihat detail yang tidak bisa dilihat oleh mata biasa', 'hasil5')">Membantu melihat detail yang tidak bisa dilihat oleh mata biasa</li>
                <li onclick="pilihJawaban(this, 'q5', 'Membantu melihat detail yang tidak bisa dilihat oleh mata biasa', 'hasil5')">Membantu menyerap cahaya dari mata manusia</li>
            </ul>
            <p id="hasil5"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>
    </div>
</div>

<div class="navigation d-flex justify-content-between">
    <a class="nav-btn btn btn-primary" href="/materi3/lup">Sebelumnya</a>
    <a class="nav-btn btn btn-primary" href="/materi3/teleskop">Selanjutnya</a>
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
            fetch('/simpan-hasil-latihan', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({ latihan_ke: 8 })
            })
            .then(res => res.json())
            .then(data => {
                Swal.fire({
                    title: 'Latihan Selesai!',
                    text: 'Kamu akan diarahkan ke materi berikutnya.',
                    icon: 'success',
                    confirmButtonText: 'Lanjutkan'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "/materi3/teleskop";
                    }
                });
            })
            .catch(err => {
                console.error('Gagal simpan hasil latihan:', err);
                Swal.fire('Oops!', 'Gagal menyimpan hasil latihan. Silakan coba lagi.', 'error');
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
            hasil.innerHTML = "Jawaban Salah!";
            hasil.style.color = "red";
        }
    }

    document.addEventListener("DOMContentLoaded", () => {
        showSoal(currentSoal);
    });
</script>
@endsection