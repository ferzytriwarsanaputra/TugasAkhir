@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="card-custom">
    <div class="title-box">
        <span><h5>1.3 Lensa</h5></span>
    </div>
    <div class="reading-box">
        <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Buku">
        <strong>Ayo Membaca</strong>
    </div>
    <div class="content">
        <p>
            Lensa adalah benda bening yang dibatasi oleh dua permukaan bidang lengkung atau benda bening yang dibatasi oleh satu bidang lengkung dan satu bidang datar. Berdasarkan bentuknya, lensa dibedakan menjadi dua yaitu lensa cembung dan lensa cekung.
        </p>
        <img src="/img/Materi1/lensa1.png" alt="Lensa cembung dan cekung pada benda" class="img-fluid d-block mx-auto" style="max-width: 60%;">
        <img src="/img/Materi1/lensa2.png" alt="Lensa Cembung dan Lensa Cekung" class="img-fluid d-block mx-auto" style="max-width: 60%;">
        <h6>a. Lensa Cembung</h6>
        <p>
            Lensa cembung merupakan jenis lensa yang memiliki bagian tengah lebih tebal dibandingkan bagian tepinya, dengan permukaan yang melengkung ke arah luar. Cahaya yang melewati lensa ini akan dibiaskan sehingga terkonsentrasi pada satu titik fokus. Lensa cembung banyak dimanfaatkan dalam berbagai perangkat optik seperti kamera, mikroskop, dan mata manusia. Selain itu, lensa cembung juga digunakan pada kacamata untuk membantu penglihatan penderita rabun dekat.
        </p>
        <img src="/img/Materi1/lensa3.jpg" alt="Lensa cembung pada lensa kamera" class="img-fluid d-block mx-auto" style="max-width: 30%;">
        <h6><br>1) Pemantulan sinar-sinar istimewa pada cermin cekung adalah sebagai berikut :</h6>
        <table cellpadding="10">
            <tr>
                <th>Sinar Istimewa</th>
                <th>Diagram Sinar</th>
            </tr>
            <tr>
                <td>a. Suatu sinar datang sejajar sumbu utama lensa akan dibiaskan menuju titik fokus aktif (F_1) di belakang lensa.</td>
                <td><img src="/img/Materi1/lensa1a.png" alt="Cermin cekung sebagai reflektor pada senter" class="img-fluid d-block mx-auto"></td>
            </tr>
            <tr>
                <td>b. Suatu sinar datang melalui titik fokus pasif (F_2)di depan lensa akan dibiaskan sejajar sumbu utama.</td>
                <td><img src="/img/Materi1/lensa1b.png" alt="Cermin cekung sebagai reflektor pada senter" class="img-fluid d-block mx-auto"></td>
            </tr>
            <tr>
                <td>c. Suatu sinar datang melalui pusat optik lensa (O) akan diteruskan tanpa dibiaskan.</td>
                <td><img src="/img/Materi1/lensa1c.png" alt="Cermin cekung sebagai reflektor pada senter" class="img-fluid d-block mx-auto"></td>
            </tr>
        </table>

        <h6><br>2)	Melukis Pembentukan Bayangan pada Lensa Cembung Menggunakan Diagram Sinar</h6>
        <p>
            Jika sebuah benda diletakkan di depan lensa cembung akan membentuk bayangan, seperti ditunjukkan pada Gambar.
        </p>
        <img src="/img/Materi1/lensa4.png" alt="Pembentukan Bayangan oleh Lensa Cembung" class="img-fluid d-block mx-auto" style="max-width: 60%;">
        <p>
            Pembentukan bayangan pada lensa cembung membutuhkan sekurang-kurangnya dua sinar istimewa. Sifat bayangan yang terbentuk pada lensa cembung bergantung pada posisi benda.
        </p>
        <h6>b. Lensa Cekung</h6>
        <p>
            Lensa cekung, dengan permukaan melengkung ke dalam, memiliki kemampuan untuk menyebarkan cahaya yang melewatinya. Sifat ini menjadikannya ideal untuk digunakan pada kacamata penderita rabun jauh (miopia), karena lensa cekung membantu memperbaiki fokus cahaya sehingga bayangan jatuh tepat pada retina. Berbeda dengan lensa cembung yang memfokuskan cahaya ke satu titik, lensa cekung menyebabkan cahaya menyebar, menghasilkan bayangan yang tampak lebih kecil dan lebih jauh dari aslinya.
        </p>
        <img src="/img/Materi1/lensa5.png" alt="Lensa cekung pada lubang intip pintu" class="img-fluid d-block mx-auto" style="max-width: 30%;">
        <p>
            Pada pembiasan lensa cekung juga berlaku sinar-sinar istimewa ketika kita hendak membuat bayangan pada lensa. Sinar-sinar istimewa pada pembiasan cahaya oleh lensa cekung.
        </p>
        <table cellpadding="10">
            <tr>
                <th>Sinar Istimewa</th>
                <th>Diagram Sinar</th>
            </tr>
            <tr>
                <td>Sinar datang sejajar sumbu utama lensa seolah-olah dibiaskan berasal dari titik fokus aktif(F)di depan lensa.</td>
                <td><img src="/img/Materi1/lensa2a.png" alt="Cermin cekung sebagai reflektor pada senter" class="img-fluid d-block mx-auto"></td>
            </tr>
            <tr>
                <td>Sinar datang seolah- olah menuju titik fokus pasif (F) di depan lensa akan dibiaskan sejajar sumbu utama.</td>
                <td><img src="/img/Materi1/lensa2b.png" alt="Cermin cekung sebagai reflektor pada senter" class="img-fluid d-block mx-auto"></td>
            </tr>
            <tr>
                <td>Sinar datang melalui pusat optik lensa (O)akan diteruskan tanpa dibiaskan.</td>
                <td><img src="/img/Materi1/lensa2c.png" alt="Cermin cekung sebagai reflektor pada senter" class="img-fluid d-block mx-auto"></td>
            </tr>
        </table>

        <p><br>
            Jika ketiga sinar istimewa yang berasal dari sebuah benda dilukiskan pada satu lensa, maka akan terbentuk bayangan benda
        </p>
        <img src="/img/Materi1/lensa6.png" alt="Pembentukan Bayangan oleh Lensa Cekung" class="img-fluid d-block mx-auto" style="max-width: 60%;">
        <p>
            Sifat bayangan yang dihasilkan oleh lensa cekung bergantung pada posisi benda dan dapat dianalisis menggunakan diagram sinar serta sinar-sinar istimewa. Selain itu, sifat-sifat bayangan ini juga dapat ditentukan dengan menerapkan Dalil Esbach, seperti halnya pada lensa cembung. Penting untuk diingat bahwa pada lensa cekung, benda yang berada di depan lensa akan selalu menghasilkan bayangan yang bersifat maya, tegak, diperkecil, dan terletak di depan lensa.
        </p>
    </div>
</div>
<div class="card-custom">
    <h5>Latihan</h5>
    <div class="question-container">
        <!-- Soal 1 -->
        <div class="question" id="soal1">
            <p>1. Lensa cekung digunakan dalam kacamata untuk membantu penderita rabun jauh. Hal ini karena lensa cekung memiliki sifat...</p>
            <ul class="options" id="q1">
                <li onclick="pilihJawaban(this, 'q1', 'Menyebarkan cahaya yang melewatinya', 'hasil1')">Mengumpulkan cahaya ke satu titik</li>
                <li onclick="pilihJawaban(this, 'q1', 'Menyebarkan cahaya yang melewatinya', 'hasil1')">Menyebarkan cahaya yang melewatinya</li>
                <li onclick="pilihJawaban(this, 'q1', 'Menyebarkan cahaya yang melewatinya', 'hasil1')">Membalik bayangan agar terlihat lebih besar</li>
                <li onclick="pilihJawaban(this, 'q1', 'Menyebarkan cahaya yang melewatinya', 'hasil1')">Mengurangi pembiasan cahaya</li>
            </ul>
            <p id="hasil1"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 2 -->
        <div class="question" id="soal2" style="display: none;">
            <p>2. Pasangkan jenis lensa dengan fungsinya yang sesuai:</p>
            <div id="dragContainer" class="drag-container">
                <div class="drag-item" draggable="true" id="cembung1" ondragstart="drag(event)">Digunakan pada kacamata untuk rabun jauh</div>
                <div class="drag-item" draggable="true" id="cekung1" ondragstart="drag(event)">Digunakan pada kamera untuk memfokuskan cahaya</div>
                <div class="drag-item" draggable="true" id="cembung2" ondragstart="drag(event)">Digunakan pada mikroskop untuk memperbesar objek</div>
                <div class="drag-item" draggable="true" id="cekung2" ondragstart="drag(event)">Digunakan pada lubang intip pintu</div>
            </div>
            <p>Lensa Cembung</p><div class="drop-zone" id="drop1" ondrop="drop(event, 'drop1')" ondragover="allowDrop(event)"></div>
            <p>Lensa Cekung</p><div class="drop-zone" id="drop2" ondrop="drop(event, 'drop2')" ondragover="allowDrop(event)"></div>
            <p>Lensa Cembung</p><div class="drop-zone" id="drop3" ondrop="drop(event, 'drop3')" ondragover="allowDrop(event)"></div>
            <p>Lensa Cekung</p><div class="drop-zone" id="drop4" ondrop="drop(event, 'drop4')" ondragover="allowDrop(event)"></div>
            <p id="hasil2"></p>
            <button class="cekJawaban nav-btn" onclick="cekDragDrop()">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 3 -->
        <div class="question" id="soal3" style="display: none;">
            <p>3. Pada cermin cekung, jika benda berada di antara titik fokus (F) dan cermin, maka bayangan yang terbentuk akan...</p>
            <input type="text" id="jawaban3">
            <p id="hasil3"></p>
            <button class="cekJawaban nav-btn" onclick="cekJawaban3()">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 4 -->
        <div class="question" id="soal4" style="display: none;">
            <p>4. Perhatikan pernyataan berikut:</p>
            <p>"Lensa cekung dapat menghasilkan bayangan nyata jika benda diletakkan cukup dekat dengan lensa."</p>
            <ul id="q4" class="list-unstyled">
                <li><input type="radio" name="q4" value="Benar" onclick="cekPernyataan('q4', 'Salah', 'hasil4')"> Benar</li>
                <li><input type="radio" name="q4" value="Salah" onclick="cekPernyataan('q4', 'Salah', 'hasil4')"> Salah</li>
            </ul>
            <p id="hasil4"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 5 -->
        <div class="question" id="soal5" style="display: none;">
            <p>5. Urutkan langkah-langkah melukis bayangan pada lensa cembung dari yang benar:</p>
            <ul id="sortable" class="sortable-list">
                <li class="sortable-item" draggable="true" id="step1">Sinar datang melalui titik fokus pasif → dibiaskan sejajar sumbu utama</li>
                <li class="sortable-item" draggable="true" id="step3">Sinar datang melalui pusat optik → diteruskan tanpa pembiasan</li>
                <li class="sortable-item" draggable="true" id="step2">Sinar datang sejajar sumbu utama → dibiaskan menuju titik fokus aktif</li>
            </ul>            
            <p id="hasil5"></p>
            <button class="cekJawaban nav-btn" onclick="cekUrutan()">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>
    </div>
</div>

<div class="navigation">
    <a class="nav-btn" href="/materi1/bayangan-cermin">Sebelumnya</a>
    <a class="nav-btn" href="/petunjuk/1">Selanjutnya</a>
</div>

<script>
    let currentSoal = 1;
    const totalSoal = 5;
    let sortableInstance;

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
            // HANYA SIMPAN SAAT SOAL TERAKHIR SAJA (latihan ke-3)
            fetch('/simpan-hasil-latihan', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({ latihan_ke: 3 }) // ← latihan ke-3
            })
            .then(res => res.json())
            .then(data => {
                console.log(data.message);
                window.location.href = "/petunjuk/1"; // ← redirect setelah selesai
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
            hasil.innerHTML = `Jawaban Salah! Jawaban yang benar: ${kunci}. Lensa cekung selalu menghasilkan bayangan maya.`;
            hasil.style.color = "red";
        }
    }

    function cekJawaban3() {
        const hasil = document.getElementById("hasil3");
        if (hasil.dataset.answered === "true") return;

        const jawaban = document.getElementById("jawaban3").value.trim().toLowerCase();
        const btnLanjut = hasil.nextElementSibling.nextElementSibling;

        if (jawaban === "nyata, terbalik, diperkecil") {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            hasil.dataset.answered = "true";
            btnLanjut.classList.remove("disabled");
            document.getElementById("jawaban3").setAttribute("disabled", true);
        } else {
            hasil.innerHTML = "Jawaban Salah! Jawaban yang benar: Nyata, terbalik, diperkecil";
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
            document.getElementById("drop1").children[0]?.id === "cembung1" &&
            document.getElementById("drop2").children[0]?.id === "cekung1" &&
            document.getElementById("drop3").children[0]?.id === "cembung2" &&
            document.getElementById("drop4").children[0]?.id === "cekung2";

        const hasil = document.getElementById("hasil2");
        const btnLanjut = hasil.nextElementSibling.nextElementSibling;

        if (benar) {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            hasil.dataset.answered = "true";
            document.querySelectorAll(".drag-item").forEach(i => i.setAttribute("draggable", false));
        } else {
            hasil.innerHTML = "Jawaban Salah! Pastikan semua pasangan sesuai jenis lensanya.";
            hasil.style.color = "red";
        }

        btnLanjut.classList.remove("disabled");
    }

    function cekUrutan() {
        const hasil = document.getElementById("hasil5");
        if (hasil.dataset.answered === "true") return;

        const urutan = [...document.querySelectorAll("#sortable .sortable-item")].map(i => i.id);
        const btnLanjut = hasil.nextElementSibling.nextElementSibling;

        if (JSON.stringify(urutan) === JSON.stringify(["step1", "step2", "step3"])) {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            hasil.dataset.answered = "true";
            btnLanjut.classList.remove("disabled");
            sortableInstance.option("disabled", true);
        } else {
            hasil.innerHTML = "Jawaban Salah! Urutan yang benar adalah:<br>1) Fokus pasif → sejajar<br>2) Sejajar → fokus aktif<br>3) Pusat optik → lurus";
            hasil.style.color = "red";
        }
    }

    document.addEventListener("DOMContentLoaded", () => {
        showSoal(currentSoal);

        const sortableList = document.getElementById("sortable");
        sortableInstance = Sortable.create(sortableList, { animation: 150 });

        // Acak urutan
        const items = Array.from(sortableList.children);
        for (let i = items.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            sortableList.appendChild(items[j]);
            items.splice(j, 1);
        }
    });
</script>
@endsection