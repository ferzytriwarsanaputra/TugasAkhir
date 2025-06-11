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
            <img src="/img/Materi1/Pengamat.png" alt="Set Percobaan Perambatan Cahaya" class="img-fluid d-block mx-auto" style="max-width: 80%;">
            <figcaption>Gambar 1.1 Set Percobaan Perambatan Cahaya</figcaption>
        </figure>        
        <h6>b. Cahaya dapat dipantulkan</h6>
        <p>
            Agar dapat melihat bayanganmu di cermin, cahaya harus terpantul mengenai cermin dan dipantulkan kembali oleh cermin ke dalam mata kamu. Pemantulan cahaya terjadi ketika cahaya mengenai suatu benda dan dipantulkan oleh benda tersebut.
        </p>
        <figure class="text-center">
            <img src="/img/Materi1/bercermin.jpeg" alt="Melihat Bayangan di Cermin" class="img-fluid d-block mx-auto" style="max-width: 40%;">
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
                <img src="/img/Materi1/pemantulan cahaya.png" alt="Proses Pemantulan Cahaya" class="img-fluid">
                <figcaption class="text-center">Gambar 1.3 Proses Pemantulan Cahaya pada Cermin Datar (Sumber: Kemdikbud. 2017)</figcaption>
            </figure>
            <figure style="max-width: 40%;">
                <img src="/img/Materi1/2.png" alt="Ilustrasi Proses Pemantulan Cahaya" class="img-fluid">
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
                <img src="/img/Materi1/pembiasan.png" alt="Set Percobaan Pembiasan" class="img-fluid">
                <figcaption class="text-center">Gambar 1.5 Set Percobaan Pembiasan (Sumber: Kemdikbud. 2017)</figcaption>
            </figure>
            <figure style="max-width: 40%;">
                <img src="/img/Materi1/3.png" alt="Ilustrasi Pembelokkan Gelombang Cahaya" class="img-fluid">
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
            <img src="/img/Materi1/elektromagnetik.png" alt="Spektrum Elektromagnetik" class="img-fluid d-block mx-auto" style="max-width: 100%;">
            <figcaption>Gambar 1.7 Spektrum Elektromagnetik (Sumber: Kemdikbud. 2017)</figcaption>
        </figure>        
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
            <p class="petunjuk">Seret dan cocokkan pernyataan dengan jenis pemantulannya yang sesuai.</p>
            <p>2. Cocokkan jenis pemantulan dengan contohnya:</p>
            <div id="dragContainer" class="drag-container">
                <div class="drag-item" draggable="true" id="cermin" ondragstart="drag(event)">Cahaya dipantulkan oleh cermin datar</div>
                <div class="drag-item" draggable="true" id="tembok" ondragstart="drag(event)">Cahaya dipantulkan oleh tembok kasar</div>
            </div>
            <p>Pemantulan Teratur:</p>
            <div class="drop-zone" id="drop1" ondrop="drop(event, 'drop1')" ondragover="allowDrop(event)"></div>
            <p>Pemantulan Baur:</p>
            <div class="drop-zone" id="drop2" ondrop="drop(event, 'drop2')" ondragover="allowDrop(event)"></div>

            <div style="display: flex; gap: 10px; align-items: center; margin-top: 10px;">
                <button class="cekJawaban nav-btn" onclick="cekDragDrop()">Periksa</button>
                <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()" disabled>Lanjut</button>
            </div>
            <p id="hasil2"></p>
        </div>

        <!-- Soal 3 -->
        <div class="question" id="soal3" style="display: none;">
            <p class="petunjuk">Isilah jawaban Anda dengan angka yang tepat (gunakan simbol ° jika perlu).</p>
            <p>3. Jika sudut datang cahaya ke sebuah cermin adalah 30°, maka berapakah sudut pantulnya berdasarkan hukum pemantulan?</p>
            <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 10px;">
                <input type="text" id="jawaban3">
                <button class="cekJawaban nav-btn" id="cekEssayBtn" onclick="cekEssay()">Periksa</button>
            </div>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()" disabled id="lanjutEssayBtn">Lanjut</button>
            <p id="hasil3"></p>
        </div>

        <!-- Soal 4 -->
        <div class="question" id="soal4" style="display: none;">
            <p class="petunjuk">Pilihlah satu jawaban yang paling benar.</p>
            <p>4. Saat melihat ke dalam kolam yang jernih, dasar kolam terlihat lebih dangkal daripada kedalaman sebenarnya. Fenomena ini terjadi karena…</p>
            <ul class="options" id="q4">
                <li onclick="pilihJawaban(this, 'q4')">Cahaya dipantulkan oleh air</li>
                <li onclick="pilihJawaban(this, 'q4')">Cahaya dibiaskan saat berpindah dari air ke udara</li>
                <li onclick="pilihJawaban(this, 'q4')">Cahaya merambat lurus dalam air</li>
                <li onclick="pilihJawaban(this, 'q4')">Cahaya merupakan gelombang elektronik</li>
            </ul>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()" disabled>Lanjut</button>
            <p id="hasil4"></p>
        </div>

        <!-- Soal 5 -->
        <div class="question" id="soal5" style="display: none;">
            <p class="petunjuk">Pilihlah satu jawaban yang paling benar.</p>
            <p>5. Cahaya matahari yang melewati tetesan air hujan dan membentuk pelangi adalah contoh dari peristiwa…</p>
            <ul class="options" id="q5">
                <li onclick="pilihJawaban(this, 'q5')">Interferensi cahaya</li>
                <li onclick="pilihJawaban(this, 'q5')">Dispersi cahaya</li>
                <li onclick="pilihJawaban(this, 'q5')">Refleksi cahaya</li>
                <li onclick="pilihJawaban(this, 'q5')">Difraksi cahaya</li>
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

    function pilihJawaban(element, questionId) {
        let options = document.querySelectorAll(`#${questionId} li`);
        options.forEach(option => option.classList.remove("selected"));
        element.classList.add("selected");

        let correctAnswer = {
            q1: "Merambat lurus",
            q4: "Cahaya dibiaskan saat berpindah dari air ke udara",
            q5: "Dispersi cahaya"
        }[questionId];

        let resultId = {
            q1: "hasil1",
            q4: "hasil4",
            q5: "hasil5"
        }[questionId];

        let resultElement = document.getElementById(resultId);
        let userAnswer = element.textContent;

        if (userAnswer === correctAnswer) {
            resultElement.innerHTML = "Jawaban Benar!";
            resultElement.style.color = "green";
            enableLanjut();  // ✅ hanya diaktifkan jika benar
            options.forEach(option => {
                option.onclick = null; // Matikan event klik
                option.style.pointerEvents = "none"; // Opsional: hindari interaksi
            });
        } else {
            resultElement.innerHTML = "Jawaban Salah! Jawaban yang benar: " + correctAnswer;
            resultElement.style.color = "red";
        }
    }

    function cekEssay() {
        let userAnswer = document.getElementById("jawaban3").value.trim();
        let resultElement = document.getElementById("hasil3");
        let lanjutBtn = document.getElementById("lanjutEssayBtn");
        let periksaBtn = document.getElementById("cekEssayBtn");

        if (userAnswer === "30") {
            resultElement.innerHTML = "Jawaban Benar!";
            resultElement.style.color = "green";
            lanjutBtn.disabled = false;
            lanjutBtn.classList.remove("disabled");

            // Nonaktifkan input dan tombol periksa
            document.getElementById("jawaban3").setAttribute("disabled", "true");
            periksaBtn.disabled = true;
            periksaBtn.classList.add("disabled");
        } else {
            resultElement.innerHTML = "Jawaban Salah! Jawaban yang benar: 30°";
            resultElement.style.color = "red";
        }
    }

        // Fungsi untuk mengizinkan item di-drag ke dalam drop zone
        function allowDrop(event) {
        event.preventDefault();  // Menghindari perilaku default browser
    }

    // Fungsi drag event handler
    function drag(event) {
        event.dataTransfer.setData("text", event.target.id);  // Set data ID item yang di-drag
    }

    function drop(event, dropZoneId) {
        event.preventDefault();
        let data = event.dataTransfer.getData("text");
        let draggedElement = document.getElementById(data);
        let dropZone = document.getElementById(dropZoneId);

        // Jika sudah ada item di zona drop, kembalikan ke kontainer drag
        if (dropZone.children.length > 0) {
            let existingItem = dropZone.children[0];
            document.getElementById("dragContainer").appendChild(existingItem);
        }

        // Pindahkan elemen ke zona drop
        dropZone.innerHTML = "";
        dropZone.appendChild(draggedElement);

    }

    // Fungsi untuk memeriksa apakah drag-drop sudah benar
    function cekDragDrop() {
        let drop1 = document.getElementById("drop1").children[0]?.id;
        let drop2 = document.getElementById("drop2").children[0]?.id;
        let resultElement = document.getElementById("hasil2");

        if (drop1 === "cermin" && drop2 === "tembok") {
            resultElement.innerHTML = "Jawaban Benar!";
            resultElement.style.color = "green";
            enableLanjut();  // Pindahkan ke sini agar hanya dipanggil jika sudah dijawab
            // Nonaktifkan drag & drop setelah benar
            document.querySelectorAll(".drag-item").forEach(item => {
                item.setAttribute("draggable", "false");
                item.style.cursor = "default";
            });
            document.querySelectorAll(".drop-zone").forEach(zone => {
                zone.ondrop = null;
                zone.ondragover = null;
            });
        } else if (drop1 || drop2) {
            resultElement.innerHTML = "Jawaban Salah! Pemantulan teratur terjadi pada cermin, dan pemantulan baur terjadi pada tembok kasar.";
            resultElement.style.color = "red";
        } else {
            resultElement.innerHTML = "Lengkapi semua kolom terlebih dahulu!";
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
                    // Kirim data latihan ke server
                    fetch('/simpan-hasil-latihan', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            latihan_ke: 1
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data.message);
                        window.location.href = "/materi1/bayangan-cermin";
                    })
                    .catch(error => {
                        console.error("Gagal menyimpan hasil latihan:", error);
                        Swal.fire('Gagal', 'Terjadi kesalahan saat menyimpan. Coba lagi.', 'error');
                    });
                }
            });

            return; // Stop agar tidak lanjut ke baris bawah
        }

        // Sembunyikan soal saat ini
        document.getElementById(`soal${currentSoal}`).style.display = "none";

        // Tambah nomor soal
        currentSoal++;

        // Tampilkan soal berikutnya
        if (document.getElementById(`soal${currentSoal}`)) {
            document.getElementById(`soal${currentSoal}`).style.display = "block";
        }

        // Reset tombol lanjut di soal baru
        let currentBtn = document.querySelector(`#soal${currentSoal} .lanjut-btn`);
        if (currentBtn) {
            currentBtn.disabled = true;
            currentBtn.classList.add("disabled");
        }
    }
</script>
@endsection