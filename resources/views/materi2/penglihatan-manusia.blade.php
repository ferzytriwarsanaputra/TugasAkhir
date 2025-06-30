@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="card-custom">
    <div class="title-box">
        <span>2</span> <span>Indra Penglihatan Manusia dan Hewan</span>
    </div>
    <div class="content">
        <h3>Tujuan Pembelajaran</h3>
        <ul>
            <li>Siswa mampu menjelaskan proses kerja indra penglihatan manusia dalam menangkap dan memproses cahaya.</li>
            <li>Siswa mampu menjelaskan cara kerja mata majemuk pada serangga dalam menangkap cahaya dan mendeteksi lingkungan.</li>
        </ul>
    </div>
</div>
<div class="card-custom">
    <div class="title-box">
        <span>2.1 Indra Penglihatan Manusia</span>
    </div>
    <div class="reading-box">
        <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Buku">
        <strong>Ayo Membaca</strong>
    </div>
    <div class="content">
        <p>
            Mata manusia adalah alat optik alami yang sangat kompleks, memungkinkan kita menangkap cahaya dan membentuk bayangan yang dapat dilihat. Struktur utama mata terdiri dari kornea, lensa, pupil, iris, retina, dan saraf optik. Cahaya memasuki mata melalui kornea dan pupil, lalu difokuskan oleh lensa ke retina. Retina, yang dipenuhi sel-sel fotoreseptor, mengubah cahaya menjadi sinyal listrik yang dikirim ke otak melalui saraf optik. Otak kemudian memproses sinyal ini menjadi gambar yang kita lihat.
        </p>
        <p>
            Mata juga memiliki kemampuan adaptasi luar biasa untuk melihat dalam kondisi terang maupun gelap. Pupil akan mengecil saat terkena cahaya terang dan membesar dalam kegelapan. Selain itu, lensa mata mampu berubah bentuk untuk memfokuskan cahaya dari objek dekat maupun jauh, dalam proses yang disebut akomodasi. Gangguan pada bagian-bagian mata dapat menyebabkan masalah penglihatan, seperti miopia (rabun jauh) atau hipermetropia (rabun dekat).
        </p>
        <h6>a. Bagian-bagian Mata Manusia</h6>
        <p>
            Mata adalah organ penglihatan pada manusia yang berbentuk bulat dan terdiri atas beberapa bagian dengan fungsi masing-masing. Mata dilapisi oleh tiga jaringan berbeda. Lapisan terluar disebut sklera, yang membentuk kornea. Lapisan tengah adalah koroid, yang membentuk iris. Sementara itu, lapisan terdalam adalah retina.
        </p>

        <div id="diagram-container" class="position-relative my-3">
            <h5>🔍 Arahkan kursor ke titik kuninb untuk membaca penjelasan bagian mata</h5>
            <img src="/img/Materi2/mata1.png" width="500" alt="Diagram Mata" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption><em>Gambar 2.1 Bagian-bagian Mata (Sumber: Kemdikbud. 2017)</em></figcaption>
          
            <!-- Titik Interaktif dengan tooltip penjelasan lengkap -->
            <div class="hotspot" style="top:173px; left:15px;"
                 data-bs-toggle="tooltip"
                 title="Kornea: Lapisan bening di bagian depan mata yang membantu memfokuskan cahaya."></div>
          
            <div class="hotspot" style="top:143px; left:40px;"
                 data-bs-toggle="tooltip"
                 title="Iris: Bagian berwarna dari mata yang mengatur besar kecilnya pupil."></div>
          
            <div class="hotspot" style="top:205px; left:20px;"
                 data-bs-toggle="tooltip"
                 title="Pupil: Lubang di tengah iris yang mengatur jumlah cahaya yang masuk ke mata."></div>
          
            <div class="hotspot" style="top:275px; left:55px;"
                 data-bs-toggle="tooltip"
                 title="Lensa: Membiaskan cahaya agar bayangan jatuh tepat di retina."></div>
          
            <div class="hotspot" style="top:153px; left:365px;"
                 data-bs-toggle="tooltip"
                 title="Retina: Lapisan di belakang mata tempat bayangan terbentuk dan diubah menjadi sinyal saraf."></div>
          
            <div class="hotspot" style="top:310px; left:390px;"
                 data-bs-toggle="tooltip"
                 title="Saraf Optik: Mengirimkan sinyal dari retina ke otak agar kita dapat melihat."></div>
          </div>

        <h6>1) Kornea</h6>
        <p>
            Mata memiliki bentuk menyerupai bola dengan diameter sekitar 2,5 cm. Bagian terluar mata dikenal sebagai sklera, yaitu lapisan putih yang menyatu dengan bagian bening di depan mata yang disebut kornea. Kornea adalah jalan masuk cahaya ke dalam mata. Lapisan luar kornea bersifat kuat dan transparan, berfungsi untuk melindungi area sensitif di belakangnya serta membantu memfokuskan cahaya pada retina.
        </p>
        <h6>2) Iris Atau Selaput Pelangi</h6>
        <p>
            Setelah cahaya melewati kornea, ia akan menuju pupil, yang merupakan lubang hitam tempat cahaya masuk ke mata. Pupil dikelilingi oleh iris, bagian berwarna pada mata yang terletak tepat di belakang kornea. Warna mata seseorang sebenarnya berasal dari warna iris. Iris mengatur jumlah cahaya yang masuk ke mata dengan mengubah ukuran pupil, tergantung pada intensitas cahaya di sekitarnya.
        </p>
        <h6>3) Lensa Mata</h6>
        <p>
            Cahaya yang telah melewati pupil kemudian bergerak ke lensa mata. Lensa mata berbentuk bikonveks (cembung di kedua sisi), mirip dengan lensa pada kaca pembesar. Lensa ini bersifat fleksibel dan kecembungannya dapat diubah dengan bantuan otot siliar, sehingga mempermudah proses pemfokusan cahaya.
        </p>
        <figure class="text-center">
            <img src="/img/Materi2/mata2.png" alt="Perubahan Kecembungan Lensa Mata" class="img-fluid d-block mx-auto" style="max-width: 60%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption><em>Gambar 2.2 Perubahan Kecembungan Lensa Mata Ketika Melihat Benda Jauh dan Dekat (Sumber: Kemdikbud. 2017)</em></figcaption>
        </figure>
        <p>
            Saat melihat benda yang berada jauh, otot siliaris pada mata akan rileks. Kondisi ini membuat lensa mata menjadi lebih datar, sehingga mata dapat melihat tanpa proses akomodasi. Sebaliknya, ketika melihat benda yang dekat, otot siliaris akan berkontraksi, menyebabkan lensa mata menjadi lebih cembung. Dalam kondisi ini, mata disebut sedang berakomodasi maksimum. Dengan kemampuan mengubah kecembungan lensa, mata dapat menangkap bayangan yang jelas, baik dari benda yang jauh maupun dekat, yang kemudian diproyeksikan ke retina. Oleh karena itu, kita patut bersyukur kepada Tuhan atas karunia berupa lensa mata yang memungkinkan kita melihat benda dengan jelas, terlepas dari jaraknya.
        </p>
        <h6>4) Retina</h6>
        <p>
            Cahaya yang melewati lensa akan menghasilkan bayangan yang ditangkap oleh retina. Retina adalah lapisan saraf di bagian belakang mata yang sangat sensitif terhadap cahaya (fotoreseptor). Retina memiliki dua jenis sel fotoreseptor, yaitu sel batang dan sel kerucut. Sel kerucut berfungsi untuk melihat warna, namun membutuhkan cahaya yang lebih terang dibandingkan sel batang. Sebaliknya, sel batang aktif di kondisi cahaya redup dan hanya dapat mendeteksi sinar tanpa warna. Jumlah sel batang di retina sekitar 125 juta, sedangkan sel kerucut, yang mampu menangkap cahaya terang dan warna, berjumlah sekitar 6,5 hingga 7 juta.
        </p>
        <figure class="text-center">
            <img src="/img/Materi2/mata3.png" alt="Sel Batang dan Kerucut" class="img-fluid d-block mx-auto" style="max-width: 50%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption><em>Gambar 2.3 Sel Batang dan Kerucut pada Retina (Sumber: Kemdikbud. 2017)</em></figcaption>
        </figure>
        <p>
            Ketika sel kerucut menyerap cahaya, reaksi kimia akan terjadi, menghasilkan impuls saraf yang kemudian diteruskan ke otak melalui saraf mata. Sel batang, yang aktif dalam kondisi redup, mengandung pigmen bernama rodopsin, yaitu gabungan antara vitamin A dan protein. Saat terkena cahaya terang, rodopsin akan terurai dan kembali terbentuk dalam kondisi gelap. Proses pembentukan ulang rodopsin membutuhkan waktu yang disebut adaptasi gelap atau adaptasi rodopsin, yang menyebabkan mata kesulitan melihat sementara waktu. Inilah alasan pentingnya vitamin A untuk menjaga kesehatan mata. Sel kerucut memiliki pigmen iodopsin, gabungan antara retinin dan opsin, dengan tiga jenis sel kerucut yang masing-masing sensitif terhadap warna merah, biru, dan hijau. Kombinasi sensitivitas ini memungkinkan kita melihat berbagai spektrum warna.
        </p>
        <h6>b. Gangguan pada Indra Penglihat</h6>
        <h6>1) Rabun Dekat</h6>
        <p>
            Penderita rabun dekat mengalami kesulitan melihat benda yang berada pada jarak dekat (sekitar 30 cm) dengan jelas. Hal ini terjadi karena bayangan benda jatuh di belakang retina, sehingga gambar yang terbentuk pada retina tampak kabur. Untuk mengatasi masalah ini, penderita dapat menggunakan kacamata berlensa positif. Lensa cembung pada kacamata membantu mengumpulkan cahaya sebelum masuk ke mata, memungkinkan kornea dan lensa mata membentuk bayangan yang tajam tepat di retina.
        </p>
        <figure class="text-center">
            <img src="/img/Materi2/mata4.png" alt="Rabun Dekat" class="img-fluid d-block mx-auto" style="max-width: 60%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption><em>Gambar 2.4 Perubahan Fokus Sinar pada Rabun Dekat (Sumber: Kemdikbud. 2017)</em></figcaption>
        </figure>
        <h6>2) Rabun Jauh</h6>
        <p>
            Penderita rabun jauh kesulitan melihat benda yang berada pada jarak jauh (tak terhingga) dengan jelas. Ini disebabkan oleh bayangan yang jatuh di depan retina, seperti yang terlihat pada gambar. Untuk membantu mengatasi masalah ini, penderita rabun jauh dapat menggunakan kacamata dengan lensa negatif. Lensa cekung pada kacamata akan menyebarkan cahaya sebelum cahaya masuk ke mata, sehingga bayangan yang jelas dapat terbentuk di retina.
        </p>
        <figure class="text-center">
            <img src="/img/Materi2/mata5.png" alt="Rabun Jauh" class="img-fluid d-block mx-auto" style="max-width: 60%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption><em>Gambar 2.5 Perubahan Fokus Sinar pada Rabun Jauh (Sumber: Kemdikbud. 2017)</em></figcaption>
        </figure>
        <h6>3) Buta Warna</h6>
        <p>
            Buta warna adalah kelainan mata yang terjadi akibat ketidakmampuan sel-sel kerucut di mata untuk mendeteksi warna tertentu. Kondisi ini bersifat diwariskan. Terdapat dua jenis buta warna: total dan sebagian. Pada buta warna total, penderita hanya dapat melihat warna hitam dan putih, sementara pada buta warna sebagian, penderita tidak dapat melihat warna tertentu seperti merah, hijau, atau biru. Hal ini berkaitan dengan fungsi sel kerucut yang telah dijelaskan sebelumnya.
        </p>
        <h6>4) Presbiopi</h6>
        <p>
            Presbiopi, yang juga dikenal sebagai rabun jauh dan dekat atau rabun tua, adalah kelainan mata yang umumnya dialami oleh orang yang sudah lanjut usia. Kondisi ini menyebabkan penderita kesulitan melihat dengan jelas baik benda yang berada jauh maupun yang dekat, karena daya akomodasi mata berkurang. Untuk mengatasi masalah ini, penderita biasanya menggunakan kacamata rangkap, yaitu kacamata dengan lensa cembung dan cekung. Pada kacamata bifokal, lensa negatif berfungsi seperti pada kacamata untuk miopi, sementara lensa positif berfungsi seperti pada kacamata untuk hipermetropi.
        </p>
        <h6>5) Astigmatisma</h6>
        <p>
            Astigmatisma, yang juga disebut sebagai silinder, adalah gangguan mata yang terjadi karena adanya kelainan dalam pembentukan bayangan pada lensa. Hal ini disebabkan oleh cacat pada lensa yang tidak dapat memfokuskan garis vertikal dan horizontal secara bersamaan, sehingga menyebabkan penglihatan yang kabur. Untuk mengatasi masalah ini, penderita dapat menggunakan lensa silindris.
        </p>
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
    <h5>Aktivitas 2.1</h5>
    <div class="question-container">
        <!-- Soal 1 -->
        <div class="question" id="soal1">
            <p><strong>Petunjuk:</strong> Pilih satu jawaban yang paling benar.</p>
            <p>1. Bayangan yang terbentuk pada retina mata manusia bersifat...</p>
            <ul class="options" id="q1">
                <li onclick="pilihJawaban(this, 'q1', 'Terbalik dan nyata', 'hasil1')">Tegak dan nyata</li>
                <li onclick="pilihJawaban(this, 'q1', 'Terbalik dan nyata', 'hasil1')">Terbalik dan nyata</li>
                <li onclick="pilihJawaban(this, 'q1', 'Terbalik dan nyata', 'hasil1')">Tegak dan maya</li>
                <li onclick="pilihJawaban(this, 'q1', 'Terbalik dan nyata', 'hasil1')">Terbalik dan nyata</li>
            </ul>
            <p id="hasil1"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 2 -->
        <div class="question" id="soal2" style="display: none;">
            <p><strong>Petunjuk:</strong> Pilih satu jawaban yang paling benar.</p>
            <p>2. Bagian mata yang mengatur jumlah cahaya yang masuk ke mata adalah...</p>
            <ul class="options" id="q2">
                <li onclick="pilihJawaban(this, 'q2', 'Iris', 'hasil2')">Kornea</li>
                <li onclick="pilihJawaban(this, 'q2', 'Iris', 'hasil2')">Retina</li>
                <li onclick="pilihJawaban(this, 'q2', 'Iris', 'hasil2')">Iris</li>
                <li onclick="pilihJawaban(this, 'q2', 'Iris', 'hasil2')">Pupil</li>
            </ul>
            <p id="hasil2"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 3 -->
        <div class="question" id="soal3" style="display: none;">
            <p><strong>Petunjuk:</strong> Pilih satu jawaban yang paling benar.</p>
            <p>3. Gangguan penglihatan yang disebabkan oleh bayangan jatuh di depan retina disebut...</p>
            <ul class="options" id="q3">
                <li onclick="pilihJawaban(this, 'q3', 'Rabun jauh', 'hasil3')">Rabun dekat</li>
                <li onclick="pilihJawaban(this, 'q3', 'Rabun jauh', 'hasil3')">Rabun jauh</li>
                <li onclick="pilihJawaban(this, 'q3', 'Rabun jauh', 'hasil3')">Presbiopi</li>
                <li onclick="pilihJawaban(this, 'q3', 'Rabun jauh', 'hasil3')">Astigmatisma</li>
            </ul>
            <p id="hasil3"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 4 -->
        <div class="question" id="soal4" style="display: none;">
            <p><strong>Petunjuk:</strong> Pilih satu jawaban yang paling benar.</p>
            <p>4. Sel batang pada retina berfungsi untuk...</p>
            <ul class="options" id="q4">
                <li onclick="pilihJawaban(this, 'q4', 'Melihat dalam gelap atau cahaya redup', 'hasil4')">Melihat warna dalam cahaya terang</li>
                <li onclick="pilihJawaban(this, 'q4', 'Melihat dalam gelap atau cahaya redup', 'hasil4')">Melihat dalam gelap atau cahaya redup</li>
                <li onclick="pilihJawaban(this, 'q4', 'Melihat dalam gelap atau cahaya redup', 'hasil4')">Membentuk pupil</li>
                <li onclick="pilihJawaban(this, 'q4', 'Melihat dalam gelap atau cahaya redup', 'hasil4')">Memfokuskan cahaya ke retina</li>
            </ul>
            <p id="hasil4"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 5 -->
        <div class="question" id="soal5" style="display: none;">
            <p><strong>Petunjuk:</strong> Pilih satu jawaban yang paling benar.</p>
            <p>5. Mekanisme penglihatan pada serangga berbeda dengan manusia karena...</p>
            <ul class="options" id="q5">
                <li onclick="pilihJawaban(this, 'q5', 'Serangga memiliki mata majemuk (kompleks) yang terdiri dari banyak unit penglihatan', 'hasil5')">Serangga tidak memiliki retina</li>
                <li onclick="pilihJawaban(this, 'q5', 'Serangga memiliki mata majemuk (kompleks) yang terdiri dari banyak unit penglihatan', 'hasil5')">Serangga menggunakan mata lensa tunggal</li>
                <li onclick="pilihJawaban(this, 'q5', 'Serangga memiliki mata majemuk (kompleks) yang terdiri dari banyak unit penglihatan', 'hasil5')">Serangga memiliki mata majemuk (kompleks) yang terdiri dari banyak unit penglihatan</li>
                <li onclick="pilihJawaban(this, 'q5', 'Serangga memiliki mata majemuk (kompleks) yang terdiri dari banyak unit penglihatan', 'hasil5')">Serangga tidak membutuhkan cahaya untuk melihat</li>
            </ul>
            <p id="hasil5"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>
    </div>
</div>

<!-- Navigasi Halaman -->
<div class="navigation d-flex justify-content-between">
    <a class="nav-btn btn btn-primary" href="/materi1/lensa">Sebelumnya</a>
    <a class="nav-btn btn btn-primary" href="/materi2/penglihatan-serangga">Selanjutnya</a>
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
                        body: JSON.stringify({ latihan_ke: 4 })
                    })
                    .then(res => res.json())
                    .then(data => {
                        Swal.fire({
                            title: 'Berhasil!',
                            text: 'Hasil latihan telah disimpan.',
                            icon: 'success',
                            confirmButtonText: 'Lanjut ke Materi'
                        }).then(() => {
                            window.location.href = "/materi2/penglihatan-serangga";
                        });
                    })
                    .catch(err => {
                        Swal.fire('Gagal', 'Tidak dapat menyimpan hasil latihan. Coba lagi nanti.', 'error');
                    });
                }
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
            hasil.innerHTML = "Jawaban Salah! Coba perhatikan kembali materi.";
            hasil.style.color = "red";
        }
    }
    
    document.addEventListener("DOMContentLoaded", () => {
        showSoal(currentSoal);
    });

    document.addEventListener('DOMContentLoaded', function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.forEach(function (tooltipTriggerEl) {
            new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
    function tampilkanGambar(imgElement) {
        const modalImg = document.getElementById('gambarModal');
        modalImg.src = imgElement.src;
        modalImg.alt = imgElement.alt;
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection