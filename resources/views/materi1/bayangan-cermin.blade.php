@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="card-custom">
    <div class="title-box">
        <span>1.2 Pembentukan Bayangan Pada Cermin</span>
    </div>
    <div class="reading-box">
        <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Buku">
        <strong>Ayo Membaca</strong>
    </div>
    <div class="content">
        <p>
          Cermin adalah alat optik yang memanfaatkan sifat pemantulan cahaya untuk membentuk bayangan. Ada tiga jenis cermin utama yang sering digunakan: cermin datar, cermin cekung, dan cermin cembung.
        </p>
        <h6>a. Cermin Datar</h6>
        <p>
          Cermin datar adalah jenis cermin yang paling sederhana. Bayangan yang terbentuk oleh cermin datar adalah tegak, sama besar dengan objek, dan bersifat maya, artinya bayangan terbentuk di belakang cermin. Bayangan ini tidak dapat ditangkap pada layar karena tidak nyata.
        </p>
        <img src="/img/Materi1/bercermin.jpeg" alt="Bayangan dari Cermin datar" class="img-fluid d-block mx-auto" style="max-width: 60%;">
        <p>
            Jika dua buah cermin datar saling membentuk sudut (α), banyaknya bayangan yang terbentuk dapat dirumuskan sebagai
            <br>n=((360°)/α)-1
            <br>Keterangan :
            <br>n = Jumlah bayangan
            <br>α= Besar sudut antar dua cermin
        </p>
        <img src="/img/Materi1/1.png" alt="Pembentukan Bayangan pada Cermin Datar" class="img-fluid d-block mx-auto" style="max-width: 50%;">
        <p>
            Dengan :
            <br>s = Jarak benda terhadap cermin
            <br>s` = Jarak bayangan terhadap cermin
            <br>Sifat bayangan yang akan terbentuk pada cermin datar adalah maya, sama besar dan sama jauh dengan bendanya, tegak, serta bersifat simetri dengan kesan terbalik.
        </p>

        <h6>b. Cermin Cekung</h6>
        <p>
            Cermin cekung memiliki permukaan yang melengkung ke dalam dan bersifat konvergen, seperti bagian dalam mangkuk. Cermin cekung dapat membentuk bayangan nyata dan terbalik jika objek berada di luar titik fokus. Namun, jika objek berada di antara cermin dan titik fokus, bayangan yang terbentuk akan maya, tegak, dan diperbesar. Cermin cekung digunakan dalam aplikasi seperti reflektor pada lampu sorot atau senter dan cermin rias.
        </p>
        <img src="/img/Materi1/senter.png" alt="Cermin cekung sebagai reflektor pada senter" class="img-fluid d-block mx-auto" style="max-width: 30%;">
        <h6><br>1) Pemantulan sinar-sinar istimewa pada cermin cekung adalah sebagai berikut :</h6>
        <table cellpadding="10">
            <tr>
                <th>Sinar Istimewa</th>
                <th>Diagram Sinar</th>
            </tr>
            <tr>
                <td>a. Sinar datang sejajar sumbu utama akan dipantulkan melalui titik fokus.</td>
                <td><img src="/img/Materi1/1a.png" alt="Cermin cekung sebagai reflektor pada senter" class="img-fluid d-block mx-auto"></td>
            </tr>
            <tr>
                <td>b. Sinar datang melalui titik fokus akan dipantulkan sejajar sumbu utama.</td>
                <td><img src="/img/Materi1/1b.png" alt="Cermin cekung sebagai reflektor pada senter" class="img-fluid d-block mx-auto"></td>
            </tr>
            <tr>
                <td>c. Sinar datang melalui titik pusat kelengkungan cermin akan dipantulkan melalui titik pusat kelengkungan cermin pula.</td>
                <td><img src="/img/Materi1/1c.png" alt="Cermin cekung sebagai reflektor pada senter" class="img-fluid d-block mx-auto"></td>
            </tr>
        </table>

        <h6><br>2) Pembentukan Bayangan oleh Cermin Cekung</h6>
        <p>• Benda berada pada jarak lebih dari R</p>
        <img src="/img/Materi1/222.png" alt="Pembentukan Bayangan jika Benda Berada pada Jarak Lebih dari R pada Cermin Cekung" class="img-fluid d-block mx-auto" style="max-width: 50%;">
        <p>Berdasarkan gambar tersebut, bayangan yang terbentuk bersifat nyata, terbalik, dan diperkecil.</p>
        <p>• Benda di titik fokus F</p>
        <img src="/img/Materi1/22.png" alt="Pembentukan Bayangan jika Benda Berada pada Titik Fokus pada Cermin Cekung" class="img-fluid d-block mx-auto" style="max-width: 50%;">
        <p>Berdasarkan gambar tersebut, tidak terbentuk bayangan atau bayangan terletak di tempat yang jauh tak terhingga.</p>
        <p>• Benda di antara cermin F</p>
        <img src="/img/Materi1/23.png" alt="Pembentukan Bayangan jika Benda Berada di Antara Titik Fokus dan Cermin Cekung" class="img-fluid d-block mx-auto" style="max-width: 50%;">
        <p>Berdasarkan gambar tersebut bayangan yang terbentuk bersifat maya, tegak, dan diperbesar. Selain penggunaan diagram sinar dan tiga sinar istimewa, agar lebih mudah memahami letak benda dan letak bayangan, kamu dapat memahami pembagian nomor ruang pada cermin lengkung (Dalil Esbach).</p>
        <img src="/img/Materi1/24.png" alt="Pembagian Ruang pada Cermin Cekung menurut Dalil Esbach" class="img-fluid d-block mx-auto" style="max-width: 50%;">
        <p>Misalnya benda diletakkan pada jarak lebih dari M (ruang III), bayangan yang terbentuk akan berada pada jarak antara F dan M (ruang II). Hal ini disebabkan menurut dalil Esbach jumlah ruang benda dengan ruang bayangan adalah sama dengan 5 (R_benda+R_bayangan) = 5.</p>
        <h6>c. Cermin Cembung</h6>
        <p>
            Cermin cembung memiliki permukaan yang melengkung keluar. Bayangan yang terbentuk oleh cermin cembung selalu maya, tegak, dan lebih kecil dari objek aslinya. Cermin ini sering digunakan sebagai kaca spion pada kendaraan karena memberikan pandangan yang lebih luas.
        </p>
        <img src="/img/Materi1/spion.png" alt="Cermin cembung pada spion mobil" class="img-fluid d-block mx-auto" style="max-width: 40%;">
        <p>
            Pembentukan bayangan pada cermin cembung dapat menggunakan sinar-sinar istimewa, Pemantulan sinar-sinar istimewa pada cermin cembung adalah sebagai berikut :
        </p>
        <table cellpadding="10">
            <tr>
                <th>Sinar Istimewa</th>
                <th>Diagram Sinar</th>
            </tr>
            <tr>
                <td>a. Sinar datang sejajar sumbu utama dipantulkan seolah-olah dari titik fokus (F).</td>
                <td><img src="/img/Materi1/2a.png" alt="Cermin cekung sebagai reflektor pada senter" class="img-fluid d-block mx-auto"></td>
            </tr>
            <tr>
                <td>b. Sinar yang datang menuju titik fokus (F) dipantulkan sejajar sumbu utama.</td>
                <td><img src="/img/Materi1/2b.png" alt="Cermin cekung sebagai reflektor pada senter" class="img-fluid d-block mx-auto"></td>
            </tr>
            <tr>
                <td>c. Sinar yang datang menuju titik pusat kelengkungan cermin seolah-olah dipantulkan berasal dari titik pusat kelengkungan tersebut.</td>
                <td><img src="/img/Materi1/2c.png" alt="Cermin cekung sebagai reflektor pada senter" class="img-fluid d-block mx-auto"></td>
            </tr>
        </table>
        <p><br>Contoh lukisan pembentukan bayangan pada cermin cembung sebagai berikut.</p>
        <img src="/img/Materi1/333.png" alt="Pembentukan Bayangan pada Cermin Cembung, Bayangan yang Terbentuk Bersifat Maya dan Tegak" class="img-fluid d-block mx-auto" style="max-width: 50%;">
        <p>Jika benda diletakkan di depan cermin cembung, maka bayangan yang terbentuk akan bersifat maya, tegak, dan diperkecil.</p>
    </div>
</div>
<div class="card-custom">
    <h5>Aktivitas 1.2</h5>
    <div class="question-container">
        <!-- Soal 1 -->
        <div class="question" id="soal1">
            <p>1. Bayangan yang terbentuk pada cermin datar memiliki sifat sebagai berikut, kecuali...</p>
            <ul class="options" id="q1">
                <li onclick="pilihJawaban(this, 'q1', 'Terbaik terhadap objek', 'hasil1', 'lanjut1')">Maya</li>
                <li onclick="pilihJawaban(this, 'q1', 'Terbaik terhadap objek', 'hasil1', 'lanjut1')">Sama besar dengan objek</li>
                <li onclick="pilihJawaban(this, 'q1', 'Terbaik terhadap objek', 'hasil1', 'lanjut1')">Terbaik terhadap objek</li>
                <li onclick="pilihJawaban(this, 'q1', 'Terbaik terhadap objek', 'hasil1', 'lanjut1')">Tegak</li>
            </ul>
            <button id="lanjut1" class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
            <p id="hasil1"></p>
        </div>

        <!-- Soal 2 -->
        <div class="question" id="soal2" style="display: none;">
            <p>2. Pada cermin cekung, jika benda berada di antara titik fokus (F) dan cermin, maka bayangan yang terbentuk akan...</p>
            <!-- Input + Tombol Periksa -->
            <div style="display: flex; gap: 10px; align-items: center;">
                <input type="text" id="jawaban2">
                <button onclick="cekEssayLangsung()" class="cekJawaban nav-btn">Periksa</button>
            </div>
            <button id="lanjut2" class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
            <p id="hasil2"></p>
        </div>

        <!-- Soal 3 -->
        <div class="question" id="soal3" style="display: none;">
            <p>3. Pada cermin cekung, jika benda berada di antara titik fokus (F) dan cermin, maka bayangan yang terbentuk bersifat nyata dan terbalik.</p>
            <ul id="q3" class="list-unstyled">
                <li>
                    <input type="radio" name="q3" id="q3_benar" value="Benar" onclick="cekPernyataanLangsung('q3', 'Salah', 'hasil3', 'lanjut3')">
                    <label for="q3_benar">Benar</label>
                </li>
                <li>
                    <input type="radio" name="q3" id="q3_salah" value="Salah" onclick="cekPernyataanLangsung('q3', 'Salah', 'hasil3', 'lanjut3')">
                    <label for="q3_salah">Salah</label>
                </li>
            </ul>
            <button id="lanjut3" class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
            <p id="hasil3"></p>
        </div>

        <!-- Soal 4 -->
        <div class="question" id="soal4" style="display: none;">
            <p>4. Cocokkan jenis cermin dengan sifat bayangannya!</p>
            <div id="dragContainer" class="drag-container">
                <div class="drag-item" draggable="true" id="datar" ondragstart="drag(event)">Maya, tegak, sama besar</div>
                <div class="drag-item" draggable="true" id="cekungluar" ondragstart="drag(event)">Nyata, terbalik, diperkecil</div>
                <div class="drag-item" draggable="true" id="cekungdalam" ondragstart="drag(event)">Nyata, tegak, diperbesar</div>
                <div class="drag-item" draggable="true" id="cembung" ondragstart="drag(event)">Maya, terbalik, diperkecil</div>
            </div>
            <p>Cermin Datar</p>
            <div class="drop-zone" id="drop1" ondrop="drop(event, 'drop1')" ondragover="allowDrop(event)"></div>
            <p>Cermin Cekung (diluar F)</p>
            <div class="drop-zone" id="drop2" ondrop="drop(event, 'drop2')" ondragover="allowDrop(event)"></div>
            <p>Cermin Cekung (didalam F)</p>
            <div class="drop-zone" id="drop3" ondrop="drop(event, 'drop3')" ondragover="allowDrop(event)"></div>
            <p>Cermin Cembung</p>
            <div class="drop-zone" id="drop4" ondrop="drop(event, 'drop4')" ondragover="allowDrop(event)"></div>
            <button onclick="cekDragDropLangsung()" class="cekJawaban nav-btn">Periksa</button>
            <button id="lanjut4" class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
            <p id="hasil4"></p>
        </div>

        <!-- Soal 5 -->
        <div class="question" id="soal5" style="display: none;">
            <p>5. Seorang siswa menyalakan lilin di depan cermin cekung dan menggeser lilin semakin jauh dari cermin. Bagaimana perubahan bayangan yang terbentuk saat lilin digeser menjauh dari cermin?</p>
            <ul class="options" id="q5">
                <li onclick="pilihJawaban(this, 'q5', 'Bayangan semakin kecil dan tetap terbalik', 'hasil5', 'lanjut5')">Bayangan tetap sama</li>
                <li onclick="pilihJawaban(this, 'q5', 'Bayangan semakin kecil dan tetap terbalik', 'hasil5', 'lanjut5')">Bayangan semakin kecil dan tetap terbalik</li>
                <li onclick="pilihJawaban(this, 'q5', 'Bayangan semakin kecil dan tetap terbalik', 'hasil5', 'lanjut5')">Bayangan semakin besar dan tetap tegak</li>
                <li onclick="pilihJawaban(this, 'q5', 'Bayangan semakin kecil dan tetap terbalik', 'hasil5', 'lanjut5')">Bayangan menjadi maya dan diperbesar</li>
            </ul>
            <button id="lanjut5" class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
            <p id="hasil5"></p>
        </div>
    </div>
</div>

<!-- Navigasi Halaman -->
<div class="navigation d-flex justify-content-between">
    <a class="nav-btn btn btn-primary" href="/materi1/sifat-cahaya">Sebelumnya</a>
    <a class="nav-btn btn btn-primary" href="/materi1/lensa">Selanjutnya</a>
</div>

<script>
    function pilihJawaban(element, questionId, correctAnswer, resultId, buttonId) {
        let options = document.querySelectorAll(`#${questionId} li`);

        let userAnswer = element.textContent;
        let resultElement = document.getElementById(resultId);
        let lanjutButton = document.getElementById(buttonId);

        if (userAnswer === correctAnswer) {
            resultElement.innerHTML = "Jawaban Benar!";
            resultElement.style.color = "green";
            options.forEach(option => option.style.pointerEvents = "none"); // Disable semua opsi
            lanjutButton.classList.remove("disabled");
        } else {
            resultElement.innerHTML = "Jawaban Salah! Jawaban yang benar: " + correctAnswer;
            resultElement.style.color = "red";
        }
    }

    function cekEssayLangsung() {
        let userAnswerInput = document.getElementById("jawaban2");
        let userAnswer = userAnswerInput.value.trim();
        let resultElement = document.getElementById("hasil2");
        let lanjutButton = document.getElementById("lanjut2");

        if (userAnswer.length === 0) {
            resultElement.innerHTML = "";
            lanjutButton.classList.add("disabled");
            return;
        }

        if (userAnswer.toLowerCase() === "maya, tegak, diperbesar") {
            resultElement.innerHTML = "Jawaban Benar!";
            resultElement.style.color = "green";
            userAnswerInput.disabled = true;
            lanjutButton.classList.remove("disabled");
        } else {
            resultElement.innerHTML = "Jawaban Salah! Jawaban yang benar: Maya, tegak, diperbesar";
            resultElement.style.color = "red";
            lanjutButton.classList.add("disabled");
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

    function cekDragDropLangsung() {
        const benar =
            document.getElementById("drop1").children[0]?.id === "datar" &&
            document.getElementById("drop2").children[0]?.id === "cekungluar" &&
            document.getElementById("drop3").children[0]?.id === "cekungdalam" &&
            document.getElementById("drop4").children[0]?.id === "cembung";

        const hasil = document.getElementById("hasil4");
        const btnLanjut = document.getElementById("lanjut4");

        if (benar) {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            document.querySelectorAll(".drag-item").forEach(i => i.setAttribute("draggable", false));
            btnLanjut.classList.remove("disabled");
        } else {
            hasil.innerHTML = "Jawaban Salah! Coba periksa kembali kecocokan antara jenis cermin dan sifat bayangannya.";
            hasil.style.color = "red";
        }
    }

    function cekPernyataanLangsung(questionId, correctAnswer, resultId, buttonId) {
        let selected = document.querySelector(`input[name="${questionId}"]:checked`);
        let resultElement = document.getElementById(resultId);
        let lanjutButton = document.getElementById(buttonId);

        if (!selected) {
            resultElement.innerHTML = "";
            lanjutButton.classList.add("disabled");

            return;
        }

        let userAnswer = selected.value;
        if (userAnswer === correctAnswer) {
            resultElement.innerHTML = "Jawaban Benar!";
            resultElement.style.color = "green";

            // Kunci pilihan
            let radios = document.querySelectorAll(`input[name="${questionId}"]`);
            radios.forEach(radio => radio.disabled = true);

            lanjutButton.classList.remove("disabled");
        } else {
            resultElement.innerHTML = "Jawaban Salah! Jawaban yang benar: " + correctAnswer;
            resultElement.style.color = "red";
            lanjutButton.classList.add("disabled");
        }
    }

    let currentSoal = 1;
    const totalSoal = 5;
    const latihanKe = 2; // ← ini kunci: latihan ke berapa
    let sedangMemproses = false;

    function showSoal(index) {
        for (let i = 1; i <= totalSoal; i++) {
            document.getElementById(`soal${i}`).style.display = i === index ? "block" : "none";
        }
    }

    function nextSoal() {
        if (sedangMemproses) return;
        sedangMemproses = true;

        const btn = document.getElementById(`lanjut${currentSoal}`);
        btn.classList.add("disabled");
        btn.disabled = true;

        if (currentSoal === totalSoal) {
            // Hanya simpan ke database jika soal terakhir
            fetch('/simpan-hasil-latihan', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({ latihan_ke: latihanKe }) // Kirim latihan ke-2
            })
            .then(res => res.json())
            .then(data => {
                console.log(data.message);
                window.location.href = "/materi1/lensa"; // Redirect setelah berhasil
            })
            .catch(err => {
                console.error('Gagal simpan hasil latihan:', err);
                alert('Gagal menyimpan hasil latihan. Silakan coba lagi.');
                btn.disabled = false;
                btn.classList.remove("disabled");
            })
            .finally(() => {
                sedangMemproses = false;
            });
        } else {
            // Kalau belum soal terakhir, hanya lanjutkan soal
            currentSoal++;
            showSoal(currentSoal);
            sedangMemproses = false;
        }
    }

    showSoal(currentSoal);
</script>
@endsection