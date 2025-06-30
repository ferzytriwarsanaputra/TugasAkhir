@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="card-custom">
    <div class="title-box">
        <span>1</span><span>Sifat Cahaya dan Proses Pembentukan Bayangan</span>
    </div>
    <div class="content">
        <h3>Tujuan Pembelajaran</h3>
        <ul>
            <li>Siswa mampu menjelaskan sifat-sifat cahaya, termasuk perambatan lurus, pemantulan, pembiasan, dan sifatnya sebagai gelombang elektromagnetik.</li>
            <li>Siswa mampu menganalisis proses pembentukan bayangan pada cermin datar, cermin cekung, dan cermin cembung.</li>
            <li>Siswa mampu mengidentifikasi jenis-jenis lensa serta menjelaskan bagaimana cahaya dipengaruhi oleh lensa dalam berbagai situasi kehidupan sehari-hari.</li>
        </ul>
    </div>
</div>
<div class="card-custom">
    <div class="title-box">
        <span>1.1 Sifat-Sifat Cahaya</span>
    </div>
    <div class="reading-box">
        <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Buku">
        <strong>Ayo Membaca</strong>
    </div>
    <div class="content">
        <p>
            Kamu perlu mengetahui dan memahami sifat-sifat cahaya agar dapat mengenali cahaya. Cahaya memiliki beberapa sifat, yaitu merambat lurus, dapat dipantulkan, dapat dibiaskan, dan merupakan gelombang elektromagnetik.
        </p>
        <h6>a. Cahaya Merambat Lurus</h6>
        <p>
            Cahaya merambat lurus dalam ruang yang serba sama. Apabila mengenai suatu benda, cahaya dapat diteruskan, diserap atau dipantulkan. Misalkan saja, kamu menyalakan lilin di tempat gelap, maka kamu akan melihat bahwa daerah yang ada di sekitar lilin tersebut akan terang.
        </p>
        <figure class="text-center">
            <img src="/img/Materi1/Pengamat.png" 
                alt="Set Percobaan Perambatan Cahaya"
                class="img-fluid d-block mx-auto"
                style="max-width: 80%; cursor:pointer;"
                data-bs-toggle="modal"
                data-bs-target="#modalGambar"
                onclick="tampilkanGambar(this)">
            <figcaption>Gambar 1.1 Set Percobaan Perambatan Cahaya</figcaption>
        </figure>        
        <h6>b. Cahaya dapat dipantulkan</h6>
        <p>
            Agar dapat melihat bayanganmu di cermin, cahaya harus terpantul mengenai cermin dan dipantulkan kembali oleh cermin ke dalam mata kamu. Pemantulan cahaya terjadi ketika cahaya mengenai suatu benda dan dipantulkan oleh benda tersebut.
        </p>
        <figure class="text-center">
            <img src="/img/Materi1/bercermin.jpeg"
                alt="Melihat Bayangan di Cermin"
                class="img-fluid d-block mx-auto"
                style="max-width: 40%; cursor:pointer;"
                data-bs-toggle="modal"
                data-bs-target="#modalGambar"
                onclick="tampilkanGambar(this)">
            <figcaption>Gambar 1.2 Melihat Bayangan di Cermin (Sumber: haibunda.com)</figcaption>
        </figure>        
        <p>
            Kita dapat melihat benda karena sebagian cahaya yang mengenai benda dipantulkan ke mata. Pemantulan yang terjadi dapat berupa pemantulan baur dan pemantulan teratur. Pemantulan teratur terjadi jika cahata dipantulkan oleh bidang yang tidak rata, seperti aspal, tembok yang tidak rata, batang kayu dan sebagainya. Pemantulan baur merupakan pemantulan yang arah sinar-sinar pantulnya tidak sama. Akan tetapi sudut pantulan cahaya besarnya selalu sama dengan sudut datang cahaya. Inilah yang menjadi dasar hukum pemantulan.
        </p>
        <h6>Hukum Pemantulan</h6>
        <p>
            1. Sinar datang, sinar pantul dan garis normal terletak pada satu bidang datar.<br>
            2. Sudut pantul (θ) sama dengan sudut datang (α)        
        </p>
        <div class="d-flex justify-content-center gap-4 flex-wrap">
            <figure style="max-width: 40%;">
                <img src="/img/Materi1/pemantulan cahaya.png" alt="Proses Pemantulan Cahaya" class="img-fluid" data-bs-toggle="modal"
                data-bs-target="#modalGambar"
                onclick="tampilkanGambar(this)">
                <figcaption class="text-center">Gambar 1.3 Proses Pemantulan Cahaya pada Cermin Datar (Sumber: Kemdikbud. 2017)</figcaption>
            </figure>
            <figure style="max-width: 40%;">
                <img src="/img/Materi1/2.png" alt="Ilustrasi Proses Pemantulan Cahaya" class="img-fluid" data-bs-toggle="modal"
                data-bs-target="#modalGambar"
                onclick="tampilkanGambar(this)">
                <figcaption class="text-center">Gambar 1.4 Ilustrasi Pemantulan Cahaya pada Cermin Datar</figcaption>
            </figure>
        </div>        
        <h6>c. Cahaya dapat dibiaskan</h6>
        <p>
            Apabila cahaya datang dari medium satu ke medium lain yang berbeda massa jenisnya (kerapatannya) maka akan dibelokan atau dibiaskan.
        </p>
        <p>
            Perhatikan Gambar 1.5 Cahaya di dalam gelas terisi air dan sendok tersebut mengalami pembelokkan. Pembelokkan ini disebut dengan pembiasan. Pembiasan cahaya adalah pembelokan gelombang cahaya yang disebabkan oleh suatu perubahan dalam kelajuan gelombang cahaya pada saat gelombang cahaya tersebut merabat dari suatu zat ke zat lainnya.
        </p>
        <div class="d-flex justify-content-center gap-4 flex-wrap">
            <figure style="max-width: 40%;">
                <img src="/img/Materi1/pembiasan.png" alt="Set Percobaan Pembiasan" class="img-fluid" data-bs-toggle="modal"
                data-bs-target="#modalGambar"
                onclick="tampilkanGambar(this)">
                <figcaption class="text-center">Gambar 1.5 Set Percobaan Pembiasan (Sumber: Kemdikbud. 2017)</figcaption>
            </figure>
            <figure style="max-width: 40%;">
                <img src="/img/Materi1/3.png" alt="Ilustrasi Pembelokkan Gelombang Cahaya" class="img-fluid" data-bs-toggle="modal"
                data-bs-target="#modalGambar"
                onclick="tampilkanGambar(this)">
                <figcaption class="text-center">Gambar 1.6 Ilustrasi Pembelokkan Gelombang Cahaya</figcaption>
            </figure>
        </div>        
        <h6>Hukum Pemantulan</h6>
        <p>
            1.	Cahaya datang dari medium yang renggang ke yang lebih rapat dapat dibiaskan mendekati garis normal<br>
            2.	Cahaya datang dari zat yang lebih rapat ke zat yang kurang rapat dibiaskan menjauhi garis normal<br>
            3.	Sinar datang, garis normal dan sinar bias terletak pada bidang datar.<br>
            4.	Cahaya sebagai Gelombang Elektromagnetik        
        </p>
        <h6>d. Cahaya merupakan Gelombang Elektromagnetik</h6>
        <p>
            Cahaya adalah gelombang elektromagnetik, artinya cahaya bisa bergerak tanpa perlu udara atau benda lain sebagai perantara. Berbeda dengan suara yang butuh udara untuk merambat, cahaya bisa berjalan di ruang hampa, seperti di luar angkasa.
        </p>
        <p>
            Bayangkan cahaya seperti gelombang di lautan, yang naik turun saat bergerak. Bedanya, gelombang cahaya terdiri dari dua bagian yang saling tegak lurus: satu bagian adalah medan listrik, dan yang lainnya medan magnet. Keduanya bergerak bersama-sama dengan sangat cepat—sekitar 300.000 km per detik di ruang hampa!
        </p>
        <figure class="text-center">
            <img src="/img/Materi1/elektromagnetik.png" alt="Spektrum Elektromagnetik" class="img-fluid d-block mx-auto" style="max-width: 100%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption>Gambar 1.7 Spektrum Elektromagnetik (Sumber: Kemdikbud. 2017)</figcaption>
        </figure>        
    </div>
</div>
<!-- Modal Gambar -->
<div class="modal fade" id="modalGambar" tabindex="-1" aria-labelledby="modalGambarLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-body p-0">
          <img id="gambarModal" src="" alt="" class="img-fluid w-100">
        </div>
      </div>
    </div>
  </div>
  
<div class="card-custom">
    <h5>Aktivitas 1.1</h5>
    <div class="question-container">

        <!-- Soal 1 -->
        <div class="question" id="soal1">
            <p class="petunjuk">Pilihlah satu jawaban yang paling benar.</p>
            <p>1. Saat cahaya menembus celah kecil pada jendela dan membentuk garis lurus di ruangan yang gelap, peristiwa ini menunjukkan sifat cahaya…</p>
            <ul class="options" id="q1">
                <li onclick="pilihJawaban(this, 'q1')">Dapat dipantulkan</li>
                <li onclick="pilihJawaban(this, 'q1')">Merambat lurus</li>
                <li onclick="pilihJawaban(this, 'q1')">Dapat dibiaskan</li>
                <li onclick="pilihJawaban(this, 'q1')">Sebagai gelombang elektromagnetik</li>
            </ul>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()" disabled>Lanjut</button>
            <p id="hasil1"></p>
        </div>

        <!-- Soal 2 -->
        <div class="question" id="soal2" style="display: none;">
            <p class="petunjuk">Pilihlah satu jawaban yang paling benar.</p>
            <p>2. Pasangan yang tepat antara jenis pemantulan dan contohnya ditunjukkan oleh pernyataan ...</p>
            <ul class="options" id="q2">
                <li onclick="pilihJawaban(this, 'q2')">Pemantulan teratur – cahaya dipantulkan oleh tembok kasar</li>
                <li onclick="pilihJawaban(this, 'q2')">Pemantulan baur – cahaya dipantulkan oleh cermin datar</li>
                <li onclick="pilihJawaban(this, 'q2')">Pemantulan teratur – cahaya dipantulkan oleh cermin datar</li>
                <li onclick="pilihJawaban(this, 'q2')">Pemantulan baur – cahaya dipantulkan oleh kaca bening</li>
            </ul>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()" disabled>Lanjut</button>
            <p id="hasil2"></p>
        </div>

        <!-- Soal 3 -->
        <div class="question" id="soal3" style="display: none;">
            <p class="petunjuk">Pilihlah satu jawaban yang paling benar.</p>
            <p>3. Sudut pantul cahaya jika sudut datangnya 30° berdasarkan hukum pemantulan adalah ...</p>
            <ul class="options" id="q3">
                <li onclick="pilihJawaban(this, 'q3')">15°</li>
                <li onclick="pilihJawaban(this, 'q3')">30°</li>
                <li onclick="pilihJawaban(this, 'q3')">45°</li>
                <li onclick="pilihJawaban(this, 'q3')">60°</li>
            </ul>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()" disabled>Lanjut</button>
            <p id="hasil3"></p>
        </div>

        <!-- Soal 4 -->
        <div class="question" id="soal4" style="display: none;">
            <p class="petunjuk">Pilihlah satu jawaban yang paling benar.</p>
            <p>4. Dasar kolam terlihat lebih dangkal daripada kedalaman sebenarnya karena peristiwa ...</p>
            <ul class="options" id="q4">
                <li onclick="pilihJawaban(this, 'q4')">Cahaya dipantulkan oleh air</li>
                <li onclick="pilihJawaban(this, 'q4')">Cahaya dibiaskan saat berpindah dari air ke udara</li>
                <li onclick="pilihJawaban(this, 'q4')">Cahaya merambat lurus dalam air</li>
                <li onclick="pilihJawaban(this, 'q4')">Cahaya merupakan gelombang elektromagnetik</li>
            </ul>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()" disabled>Lanjut</button>
            <p id="hasil4"></p>
        </div>

        <!-- Soal 5 -->
        <div class="question" id="soal5" style="display: none;">
            <p class="petunjuk">Pilihlah satu jawaban yang paling benar.</p>
            <p>5. Perbedaan antara cahaya dan suara dalam hal perambatan ditunjukkan oleh pernyataan ...</p>
            <ul class="options" id="q5">
                <li onclick="pilihJawaban(this, 'q5')">Cahaya membutuhkan udara sebagai medium perambatan</li>
                <li onclick="pilihJawaban(this, 'q5')">Cahaya dapat merambat tanpa memerlukan medium</li>
                <li onclick="pilihJawaban(this, 'q5')">Cahaya hanya bisa merambat dalam air</li>
                <li onclick="pilihJawaban(this, 'q5')">Cahaya tidak bisa merambat di luar angkasa</li>
            </ul>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()" disabled>Lanjut</button>
            <p id="hasil5"></p>
        </div>

    </div>
</div>

<!-- Navigasi Halaman -->
<div class="navigation d-flex justify-content-between">
    <a class="nav-btn btn btn-primary" href="dashboard-siswa">Sebelumnya</a>
    <a class="nav-btn btn btn-primary" href="/materi1/bayangan-cermin">Selanjutnya</a>
</div>

<script>
    let currentSoal = 1;

    const correctAnswer = {
        q1: "Merambat lurus",
        q2: "Pemantulan teratur – cahaya dipantulkan oleh cermin datar",
        q3: "30°",
        q4: "Cahaya dibiaskan saat berpindah dari air ke udara",
        q5: "Cahaya dapat merambat tanpa memerlukan medium"
    };

    const resultId = {
        q1: "hasil1",
        q2: "hasil2",
        q3: "hasil3",
        q4: "hasil4",
        q5: "hasil5"
    };

    function pilihJawaban(element, questionId) {
        let options = document.querySelectorAll(`#${questionId} li`);
        options.forEach(option => option.classList.remove("selected"));
        element.classList.add("selected");

        let resultElement = document.getElementById(resultId[questionId]);
        let userAnswer = element.textContent;

        if (userAnswer === correctAnswer[questionId]) {
            resultElement.innerHTML = "Jawaban Benar!";
            resultElement.style.color = "green";
            enableLanjut();
            options.forEach(option => {
                option.onclick = null;
                option.style.pointerEvents = "none";
            });
        } else {
            resultElement.innerHTML = "Jawaban Salah. Silakan baca ulang materinya dan coba lagi.";
            resultElement.style.color = "red";
        }
    }

    function enableLanjut() {
        let btn = document.querySelector(`#soal${currentSoal} .lanjut-btn`);
        if (btn) {
            btn.disabled = false;
            btn.classList.remove("disabled");
        }
    }

    function nextSoal() {
        if (currentSoal === 5) {
            Swal.fire({
                title: 'Latihan selesai!',
                text: 'Apakah kamu yakin ingin melanjutkan ke materi berikutnya?',
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
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({ latihan_ke: 1 })
                    })
                    .then(response => response.json())
                    .then(data => {
                        window.location.href = "/materi1/bayangan-cermin";
                    })
                    .catch(error => {
                        Swal.fire('Gagal', 'Terjadi kesalahan saat menyimpan. Coba lagi.', 'error');
                    });
                }
            });
            return;
        }

        document.getElementById(`soal${currentSoal}`).style.display = "none";
        currentSoal++;
        document.getElementById(`soal${currentSoal}`).style.display = "block";

        let currentBtn = document.querySelector(`#soal${currentSoal} .lanjut-btn`);
        if (currentBtn) {
            currentBtn.disabled = true;
            currentBtn.classList.add("disabled");
        }
    }
    function tampilkanGambar(imgElement) {
        const modalImg = document.getElementById('gambarModal');
        modalImg.src = imgElement.src;
        modalImg.alt = imgElement.alt;
    }
</script>
@endsection