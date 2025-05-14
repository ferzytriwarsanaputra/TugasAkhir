@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="card-custom">
    <div class="title-box">
        <span><h5>1.2 Pembentukan Bayangan Pada Cermin</h5></span>
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
    <h5>Latihan</h5>
    <div class="question-container">
        <!-- Soal 1 -->
        <div class="question" id="soal1">
            <p>1. Bayangan yang terbentuk pada cermin datar memiliki sifat sebagai berikut, kecuali...</p>
            <ul class="options" id="q1">
                <li onclick="pilihJawaban(this, 'q1')">Maya</li>
                <li onclick="pilihJawaban(this, 'q1')">Sama besar dengan objek</li>
                <li onclick="pilihJawaban(this, 'q1')">Terbaik terhadap objek</li>
                <li onclick="pilihJawaban(this, 'q1')">Tegak</li>
            </ul>
            <button class="cekJawaban" onclick="cekJawaban('q1', 'Maya', 'hasil1')">Cek Jawaban</button>
            <p id="hasil1"></p>
        </div>

        <!-- Soal 2 -->
        <div class="question" id="soal2" style="display: none;">
            <p>2. Pada cermin cekung, jika benda berada di antara titik fokus (F) dan cermin, maka bayangan yang terbentuk akan...</p>
            <input type="text" id="jawaban2">
            <button class="cekJawaban" onclick="cekEssay()">Cek Jawaban</button>
            <p id="hasil2"></p>
        </div>

        <!-- Soal 3 -->
        <div class="question" id="soal3" style="display: none;">
            <p>3. Pada cermin cekung, jika benda berada di antara titik fokus (F) dan cermin, maka bayangan yang terbentuk bersifat nyata dan terbalik.</p>
            <ul id="q3" class="list-unstyled">
                <li>
                    <input type="radio" name="q3" id="q3_benar" value="Benar">
                    <label for="q3_benar">Benar</label>
                </li>
                <li>
                    <input type="radio" name="q3" id="q3_salah" value="Salah">
                    <label for="q3_salah">Salah</label>
                </li>
            </ul>
            <button class="cekJawaban" onclick="cekPernyataan('q3', 'Salah', 'hasil3')">Cek Jawaban</button>
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
            <button class="cekJawaban" onclick="cekDragDrop()">Cek Jawaban</button>
            <p id="hasil4"></p>
        </div>

        <!-- Soal 5 -->
        <div class="question" id="soal5" style="display: none;">
            <p>5. Seorang siswa menyalakan lilin di depan cermin cekung dan menggeser lilin semakin jauh dari cermin. Bagaimana perubahan bayangan yang terbentuk saat lilin digeser menjauh dari cermin?</p>
            <ul class="options" id="q5">
                <li onclick="pilihJawaban(this, 'q5')">Bayangan tetap sama</li>
                <li onclick="pilihJawaban(this, 'q5')">Bayangan semakin kecil dan tetap terbalik</li>
                <li onclick="pilihJawaban(this, 'q5')">Bayangan semakin besar dan tetap tegak</li>
                <li onclick="pilihJawaban(this, 'q5')">Bayangan menjadi maya dan diperbesar</li>
            </ul>
            <button class="cekJawaban" onclick="cekJawaban('q5', 'Bayangan semakin kecil dan tetap terbalik', 'hasil5')">Cek Jawaban</button>
            <p id="hasil5"></p>
        </div>
    </div>
</div>

<!-- Navigasi Halaman -->
<div class="navigation">
    <a class="nav-btn" href="/materi1/sifat-cahaya">Sebelumnya</a>
    <a class="nav-btn" href="/materi1/lensa">Selanjutnya</a>
</div>

<script>
    function pilihJawaban(element, questionId) {
        let options = document.querySelectorAll(`#${questionId} li`);
        options.forEach(option => option.classList.remove("selected"));
        element.classList.add("selected");
    }

    function cekJawaban(questionId, correctAnswer, resultId) {
        let selectedOption = document.querySelector(`#${questionId} .selected`);
        let resultElement = document.getElementById(resultId);
        
        if (selectedOption) {
            let userAnswer = selectedOption.textContent;
            if (userAnswer === correctAnswer) {
                resultElement.innerHTML = "Jawaban Benar!";
                resultElement.style.color = "green";
            } else {
                resultElement.innerHTML = "Jawaban Salah! Jawaban yang benar: " + correctAnswer;
                resultElement.style.color = "red";
            }
        } else {
            resultElement.innerHTML = "Pilih salah satu jawaban!";
            resultElement.style.color = "red";
        }
    }

    function cekEssay() {
        let userAnswer = document.getElementById("jawaban2").value;
        let resultElement = document.getElementById("hasil2");

        if (userAnswer == "Maya, tegak, diperbesar") {
            resultElement.innerHTML = "Jawaban Benar!";
            resultElement.style.color = "green";
        } else {
            resultElement.innerHTML = "Jawaban Salah! Jawaban yang benar: Maya, tegak, diperbesar";
            resultElement.style.color = "red";
        }
    }

    function allowDrop(event) {
        event.preventDefault();
    }

    function drag(event) {
        event.dataTransfer.setData("text", event.target.id);
    }

    function drop(event, dropZoneId) {
        event.preventDefault();
        let data = event.dataTransfer.getData("text");
        let draggedElement = document.getElementById(data);
        let dropZone = document.getElementById(dropZoneId);
        
        if (dropZone.children.length > 0) {
            let existingItem = dropZone.children[0];
            document.getElementById("dragContainer").appendChild(existingItem);
        }

        dropZone.innerHTML = "";
        dropZone.appendChild(draggedElement);

        updateDragContainer();
    }

    function updateDragContainer() {
        let dragContainer = document.getElementById("dragContainer");
        let remainingItems = Array.from(dragContainer.children);

        dragContainer.style.display = remainingItems.length === 0 ? "none" : "block";
    }

    function cekDragDrop() {
        let drop1 = document.getElementById("drop1").children[0]?.id;
        let drop2 = document.getElementById("drop2").children[0]?.id;
        let drop3 = document.getElementById("drop3").children[0]?.id;
        let drop4 = document.getElementById("drop4").children[0]?.id;
        let resultElement = document.getElementById("hasil4");

        let benar = drop1 === "datar" && drop2 === "cekungluar" && drop3 === "cekungdalam" && drop4 === "cembung";
        if (benar) {
            resultElement.innerHTML = "Jawaban Benar!";
            resultElement.style.color = "green";
        } else {
            resultElement.innerHTML = "Jawaban Salah! Cermin Datar: Maya, tegak, sama besar. Cermin Cekung (diluar F): Nyata, terbalik, diperkecil. Cermin Cekung (didalam F): Maya, tegak, diperbesar. Cermin Cembung: Maya, tegak, diperkecil";
            resultElement.style.color = "red";
        }
    }

    function cekPernyataan(questionId, correctAnswer, resultId) {
        let options = document.querySelectorAll(`input[name="${questionId}"]:checked`);
        let resultElement = document.getElementById(resultId);

        if (options.length === 0) {
            resultElement.innerHTML = "Pilih salah satu jawaban!";
            resultElement.style.color = "orange";
            return;
        }

        let userAnswer = options[0].value;
        if (userAnswer === correctAnswer) {
            resultElement.innerHTML = "Jawaban Benar!";
            resultElement.style.color = "green";
        } else {
            resultElement.innerHTML = "Jawaban Salah! Jawaban yang benar: " + correctAnswer;
            resultElement.style.color = "red";
        }
    }

    let currentSoal = 1;
    const totalSoal = 5;

    function showSoal(index) {
        for (let i = 1; i <= totalSoal; i++) {
            document.getElementById(`soal${i}`).style.display = i === index ? "block" : "none";
        }
    }

    function prevSoal() {
        if (currentSoal > 1) {
            currentSoal--;
            showSoal(currentSoal);
        }
    }

    function nextSoal() {
        if (currentSoal < totalSoal) {
            currentSoal++;
            showSoal(currentSoal);
        }
    }

    showSoal(currentSoal);
</script>
@endsection