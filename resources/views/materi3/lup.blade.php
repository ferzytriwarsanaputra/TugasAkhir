@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="card-custom">
    <div class="title-box">
        <span>3.2 Kaca Pembesar (Lup)</span>
    </div>
    <div class="reading-box">
        <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Buku">
        <strong>Ayo Membaca</strong>
    </div>
    <div class="content">
        <p>
            Kaca pembesar  atau lup, adalah alat optik sederhana yang memiliki satu lensa cembung. Alat ini digunakan untuk memperbesar objek kecil supaya kita bisa melihat detailnya dengan lebih jelas. Ketika cahaya melewati lensa cembung, cahaya tersebut akan dibelokkan dan berkumpul di satu titik, sehingga bayangan objek menjadi lebih besar. Kaca pembesar sering digunakan untuk kegiatan sehari-hari, seperti membaca tulisan kecil atau melihat detail pada suatu benda.
        </p>
        <figure class="text-center">
            <img src="/img/Materi3/optik2.png" alt="Kaca Pembesar (Lup)" class="img-fluid d-block mx-auto" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption><em>Gambar 3.2 Kaca Pembesar (Lup) (Sumber: Kemdikbud. 2017)</em></figcaption>
        </figure>        
        <p>
            Penggunaan kaca pembesar tidak terbatas pada kegiatan sehari-hari, tetapi juga digunakan dalam penelitian ilmiah untuk mengamati detail yang tidak terlihat oleh mata telanjang. Memahami cara kerja kaca pembesar membantu dalam berbagai aplikasi yang membutuhkan perbesaran.
        </p>
        <figure class="text-center">
            <img src="/img/Materi3/optik3.png" alt="(a) Pengamatan Menggunakan Lup dengan Mata Berakomodasi Maksimum, (b) Pengamatan Menggunakan Lup dengan Mata Tidak Berakomodasi" class="img-fluid d-block mx-auto" style="max-width: 40%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption><em>Gambar 3.3 (a) Pengamatan Menggunakan Lup dengan Mata Berakomodasi  Maksimum, (b) Pengamatan Menggunakan Lup dengan Mata Tidak Berakomodasi (Sumber: Kemdikbud. 2017)</em></figcaption>
        </figure>
        <p>
            (a) Pengamatan Menggunakan Lup dengan Mata Berakomodasi  Maksimum, <br>(b) Pengamatan Menggunakan Lup dengan Mata Tidak Berakomodasi
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
    <h5>Aktivitas 3.2</h5>
    <div class="question-container">
        <div class="alert alert-info mb-3">
            <strong>Petunjuk Pengerjaan:</strong>
            <ul>
                <li>Ada total <strong>5 soal isian singkat</strong> yang harus kamu jawab.</li>
                <li>Ketik jawaban singkat di kotak yang tersedia.</li>
                <li>Gunakan huruf kecil semua agar jawaban terbaca sistem.</li>
                <li>Jika jawaban benar, tombol <em>Lanjut</em> akan aktif.</li>
                <li>Jawaban salah dapat diperbaiki sebelum lanjut.</li>
            </ul>
        </div>
        
        <!-- Essay 1 -->
        <div class="question" id="soal1">
            <p>1. Kaca pembesar menggunakan jenis lensa ...</p>
            <input type="text" id="jawaban1" class="input-besar">
            <p id="hasil1"></p>
            <button class="cekJawaban nav-btn" onclick="cekJawabanEssay('jawaban1', 'cembung', 'hasil1', 'Kaca pembesar menggunakan lensa cembung untuk membentuk bayangan yang diperbesar.')">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Essay 2 -->
        <div class="question" id="soal2" style="display: none;">
            <p>2. Bayangan yang dibentuk kaca pembesar bersifat maya, tegak, dan ...</p>
            <input type="text" id="jawaban2" class="input-besar">
            <p id="hasil2"></p>
            <button class="cekJawaban nav-btn" onclick="cekJawabanEssay('jawaban2', 'diperbesar', 'hasil2', 'Bayangan yang dibentuk oleh lup bersifat maya, tegak, dan diperbesar.')">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Essay 3 -->
        <div class="question" id="soal3" style="display: none;">
            <p>3. Kaca pembesar digunakan untuk melihat benda-benda yang ...</p>
            <input type="text" id="jawaban3" class="input-besar">
            <p id="hasil3"></p>
            <button class="cekJawaban nav-btn" onclick="cekJawabanEssay('jawaban3', 'kecil', 'hasil3', 'Lup digunakan untuk melihat benda-benda kecil agar tampak lebih besar.')">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Essay 4 -->
        <div class="question" id="soal4" style="display: none;">
            <p>4. Jika mata tidak berakomodasi, bayangan dibentuk pada titik ...</p>
            <input type="text" id="jawaban4" class="input-besar">
            <p id="hasil4"></p>
            <button class="cekJawaban nav-btn" onclick="cekJawabanEssay('jawaban4', 'dekat', 'hasil4', 'Jika mata tidak berakomodasi, bayangan dibentuk pada titik dekat mata (Sn).')">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Essay 5 -->
        <div class="question" id="soal5" style="display: none;">
            <p>5. Nama lain dari kaca pembesar adalah ...</p>
            <input type="text" id="jawaban5" class="input-besar">
            <p id="hasil5"></p>
            <button class="cekJawaban nav-btn" onclick="cekJawabanEssay('jawaban5', 'lup', 'hasil5', 'Lup atau kaca pembesar merupakan alat optik sederhana.')">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

    </div>
</div>

<div class="navigation d-flex justify-content-between">
    <a class="nav-btn btn btn-primary" href="/materi3/kamera">Sebelumnya</a>
    <a class="nav-btn btn btn-primary" href="/materi3/mikroskop">Selanjutnya</a>
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
                        body: JSON.stringify({ latihan_ke: 7 })
                    })
                    .then(res => res.json())
                    .then(data => {
                        Swal.fire({
                            title: 'Berhasil!',
                            text: 'Hasil latihan telah disimpan.',
                            icon: 'success',
                            confirmButtonText: 'Lanjut ke Materi'
                        }).then(() => {
                            window.location.href = "/materi3/mikroskop";
                        });
                    })
                    .catch(err => {
                        Swal.fire('Gagal', 'Tidak dapat menyimpan hasil latihan. Silakan coba lagi.', 'error');
                    });
                }
            });
        }
    }

    function cekJawabanEssay(inputId, kunci, hasilId, penjelasan) {
        const input = document.getElementById(inputId).value.trim().toLowerCase();
        const hasil = document.getElementById(hasilId);
        const nomorSoal = inputId.replace("jawaban", "");
        const btnLanjut = document.querySelector(`#soal${nomorSoal} .lanjut-btn`);

        if (hasil.dataset.answered === "true") return;

        if (input === kunci) {
            hasil.innerHTML = `<span style="color:green">Jawaban Benar!</span><br><em>${penjelasan}</em>`;
            hasil.style.color = "green";
            hasil.dataset.answered = "true";
            btnLanjut.classList.remove("disabled");
            document.getElementById(inputId).setAttribute("disabled", true);
        } else {
            hasil.innerHTML = "Jawaban Salah! Silakan coba lagi.";
            hasil.style.color = "red";
        }
    }

    document.addEventListener("DOMContentLoaded", () => {
        showSoal(currentSoal);
    });

    function tampilkanGambar(imgElement) {
        const modalImg = document.getElementById('gambarModal');
        modalImg.src = imgElement.src;
        modalImg.alt = imgElement.alt;
    }
</script>
@endsection