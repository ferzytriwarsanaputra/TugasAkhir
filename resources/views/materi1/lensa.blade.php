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
                <li onclick="pilihJawaban(this, 'q1')">Mengumpulkan cahaya ke satu titik</li>
                <li onclick="pilihJawaban(this, 'q1')">Menyebarkan cahaya yang melewatinya</li>
                <li onclick="pilihJawaban(this, 'q1')">Membalik bayangan agar terlihat lebih besar</li>
                <li onclick="pilihJawaban(this, 'q1')">Mengurangi pembiasan cahaya</li>
            </ul>
            <button class="cekJawaban" onclick="cekJawaban('q1', 'Menyebarkan cahaya yang melewatinya', 'hasil1')">Cek Jawaban</button>
            <p id="hasil1"></p>
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
            <p>Lensa Cembung</p>
            <div class="drop-zone" id="drop1" ondrop="drop(event, 'drop1')" ondragover="allowDrop(event)"></div>
            <p>Lensa Cekung</p>
            <div class="drop-zone" id="drop2" ondrop="drop(event, 'drop2')" ondragover="allowDrop(event)"></div>
            <p>Lensa Cembung</p>
            <div class="drop-zone" id="drop3" ondrop="drop(event, 'drop3')" ondragover="allowDrop(event)"></div>
            <p>Lensa Cekung</p>
            <div class="drop-zone" id="drop4" ondrop="drop(event, 'drop4')" ondragover="allowDrop(event)"></div>
            <button class="cekJawaban" onclick="cekDragDrop()">Cek Jawaban</button>
            <p id="hasil2"></p>
        </div>

        <!-- Soal 3 -->
        <div class="question" id="soal3" style="display: none;">
            <p>3. Pada cermin cekung, jika benda berada di antara titik fokus (F) dan cermin, maka bayangan yang terbentuk akan...</p>
            <input type="text" id="jawaban3">
            <button class="cekJawaban" onclick="cekEssay()">Cek Jawaban</button>
            <p id="hasil3"></p>
        </div>

        <!-- Soal 4 -->
        <div class="question" id="soal4" style="display: none;">
            <p>4. Perhatikan pernyataan berikut:</p>
            <p>"Lensa cekung dapat menghasilkan bayangan nyata jika benda diletakkan cukup dekat dengan lensa."</p>
            <p>Apakah pernyataan ini benar atau salah?</p>
            <ul id="q4" class="list-unstyled">
                <li>
                    <input type="radio" name="q4" id="q4_benar" value="Benar">
                    <label for="q4_benar">Benar</label>
                </li>
                <li>
                    <input type="radio" name="q4" id="q4_salah" value="Salah">
                    <label for="q4_salah">Salah</label>
                </li>
            </ul>
            <button class="cekJawaban" onclick="cekPernyataan('q4', 'Salah', 'hasil4')">Cek Jawaban</button>
            <p id="hasil4"></p>
        </div>

        <!-- Soal 5 -->
        <div class="question" id="soal5" style="display: none;">
            <p>5. Urutkan langkah-langkah melukis bayangan pada lensa cembung menggunakan sinar istimewa dari yang benar!</p>
            <ul id="sortable" class="sortable-list">
                <li class="sortable-item" draggable="true" id="step1">
                    <span class="step-number">1</span> Sinar datang melalui titik fokus pasif → dibiaskan sejajar sumbu utama
                </li>
                <li class="sortable-item" draggable="true" id="step2">
                    <span class="step-number">2</span> Sinar datang sejajar sumbu utama → dibiaskan menuju titik fokus aktif
                </li>
                <li class="sortable-item" draggable="true" id="step3">
                    <span class="step-number">3</span> Sinar datang melalui pusat optik → diteruskan tanpa pembiasan
                </li>
            </ul>
            <button class="cekJawaban" onclick="cekUrutan()">Cek Jawaban</button>
            <p id="hasil5"></p>
        </div>
    </div>

    <!-- Navigasi Soal -->
    <div class="navigation">
        <button class="nav-btn" onclick="prevSoal()">Sebelumnya</button>
        <button class="nav-btn" onclick="nextSoal()">Berikutnya</button>
    </div>
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
        let userAnswer = document.getElementById("jawaban3").value;
        let resultElement = document.getElementById("hasil3");

        if (userAnswer == "Nyata, terbalik, diperkecil") {
            resultElement.innerHTML = "Jawaban Benar!";
            resultElement.style.color = "green";
        } else {
            resultElement.innerHTML = "Jawaban Salah! Jawaban yang benar: Nyata, terbalik, diperkecil";
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
        let resultElement = document.getElementById("hasil2");

        let benar = drop1 === "cembung1" && drop2 === "cekung1" && drop3 === "cembung2" && drop4 === "cekung2";
        if (benar) {
            resultElement.innerHTML = "Jawaban Benar!";
            resultElement.style.color = "green";
        } else {
            resultElement.innerHTML = "Jawaban Salah! Lensa Cembung: Digunakan pada kacamata untuk rabun jauh. Lensa Cekung: Digunakan pada kamera untuk memfokuskan cahaya. Lensa Cekung: Digunakan pada mikroskop untuk memperbesar objek. Lensa Cekung: Digunakan pada lubang intip pintu";
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
            resultElement.innerHTML = "Jawaban Salah! Jawaban yang benar: " + correctAnswer + ", Lensa cekung selalu menghasilkan bayangan maya, tegak, dan diperkecil, tidak peduli seberapa dekat benda diletakkan.";
            resultElement.style.color = "red";
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        let sortableList = document.getElementById("sortable");
        let items = sortableList.querySelectorAll(".sortable-item");

        items.forEach(item => {
            item.addEventListener("dragstart", dragStart);
            item.addEventListener("dragover", dragOver);
            item.addEventListener("drop", drop);
        });

        function dragStart(event) {
            event.dataTransfer.setData("text/plain", event.target.id);
            event.target.classList.add("dragging");
        }

        function dragOver(event) {
            event.preventDefault();
            let draggingItem = document.querySelector(".dragging");
            let items = Array.from(sortableList.children);
            let afterElement = items.find(item => {
                let rect = item.getBoundingClientRect();
                return event.clientY < rect.bottom;
            });

            if (afterElement) {
                sortableList.insertBefore(draggingItem, afterElement);
            } else {
                sortableList.appendChild(draggingItem);
            }
        }

        function drop(event) {
            event.preventDefault();
            let id = event.dataTransfer.getData("text");
            let draggedElement = document.getElementById(id);
            draggedElement.classList.remove("dragging");
        }
    });

    function cekUrutan() {
        let listItems = document.querySelectorAll("#sortable .sortable-item");
        let correctOrder = ["step1", "step2", "step3"];
        let userOrder = Array.from(listItems).map(item => item.id);
        let resultElement = document.getElementById("hasil5");

        if (JSON.stringify(userOrder) === JSON.stringify(correctOrder)) {
            resultElement.innerHTML = "Jawaban Benar!";
            resultElement.style.color = "green";
        } else {
            resultElement.innerHTML = "Jawaban Salah! Urutan yang benar adalah:<br>1) Sinar datang melalui titik fokus pasif → dibiaskan sejajar sumbu utama<br>2) Sinar datang sejajar sumbu utama → dibiaskan menuju titik fokus aktif<br>3) Sinar datang melalui pusat optik → diteruskan tanpa pembiasan.";
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