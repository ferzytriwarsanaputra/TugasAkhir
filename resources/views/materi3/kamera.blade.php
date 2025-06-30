@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="card-custom">
    <div class="title-box">
        <span>3</span> <span>Alat Optik dalam Kehidupan Sehari-hari</span>
    </div>
    <div class="content">
        <h3>Tujuan Pembelajaran</h3>
        <ul>
            <li>Siswa mampu menjelaskan prinsip kerja alat optik seperti kamera, kaca pembesar, mikroskop, dan teleskop berdasarkan konsep cahaya.</li>
            <li>Siswa mampu menganalisis cara cahaya berinteraksi dengan lensa dan cermin dalam berbagai alat optik.</li>
            <li>Siswa mampu menghubungkan prinsip kerja alat optik dengan penerapannya dalam kehidupan sehari-hari.</li>
        </ul>
    </div>
</div>
<div class="card-custom">
    <div class="title-box">
        <span>3.1 Kamera</span>
    </div>
    <div class="reading-box">
        <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Buku">
        <strong>Ayo Membaca</strong>
    </div>
    <div class="content">
        <p>
            Kamera adalah alat yang digunakan untuk mengambil gambar. Cara kerjanya mirip dengan mata manusia. Cahaya dari objek yang ingin difoto masuk melalui lensa kamera dan difokuskan pada sensor di dalam kamera. Sensor ini mengubah cahaya menjadi sinyal listrik yang kemudian diubah menjadi gambar digital. Kamera modern memiliki berbagai fitur, seperti zoom, fokus otomatis, dan stabilisasi gambar, yang membantu kita mengambil foto dengan jelas, meskipun pencahayaannya kurang baik.
        </p>
        <p>
            Kamera digunakan untuk banyak hal, dari foto sehari-hari hingga aplikasi ilmiah seperti mengambil gambar bintang atau benda mikroskopis. Memahami cara kerja kamera penting agar kita bisa menghasilkan foto yang bagus.
        </p>
        <figure class="text-center">
            <img src="/img/Materi3/optik1.png" alt="Pembentukan Bayangan pada Kamera Analog" class="img-fluid d-block mx-auto" style="max-width: 60%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption><em>Gambar 3.1 Pembentukan Bayangan pada Kamera Analog (Sumber: Kemdikbud. 2017)</em></figcaption>
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
    <h5>Aktivitas 3.1</h5>
    <div class="question-container">
        <div class="alert alert-info mb-3">
            <strong>Petunjuk Pengerjaan:</strong>
            <ul>
                <li>Ada total <strong>5 soal pernyataan</strong> yang harus kamu jawab.</li>
                <li>Pilih <em>Benar</em> atau <em>Salah</em> pada setiap pernyataan.</li>
                <li>Setelah menjawab, klik tombol <em>Lanjut</em> untuk menuju soal berikutnya.</li>
                <li>Perhatikan jawabanmu agar hasil latihan dapat tersimpan dengan benar.</li>
            </ul>
        </div>
        <!-- Soal 1 -->
        <div class="question" id="soal1">
            <p>1. Fungsi utama lensa pada kamera adalah untuk memfokuskan cahaya pada sensor kamera.</p>
            <ul id="q1" class="list-unstyled">
                <li><input type="radio" name="q1" value="Benar" onclick="cekPernyataan('q1', 'Benar', 'hasil1')"> Benar</li>
                <li><input type="radio" name="q1" value="Salah" onclick="cekPernyataan('q1', 'Benar', 'hasil1')"> Salah</li>
            </ul>
            <p id="hasil1"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 2 -->
        <div class="question" id="soal2" style="display: none;">
            <ul id="q2" class="list-unstyled">
                <li><input type="radio" name="q2" value="Benar" onclick="cekPernyataan('q2', 'Benar', 'hasil2')"> Benar</li>
                <li><input type="radio" name="q2" value="Salah" onclick="cekPernyataan('q2', 'Benar', 'hasil2')"> Salah</li>
            </ul>
            <p id="hasil2"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 3 -->
        <div class="question" id="soal3" style="display: none;">
            <ul id="q3" class="list-unstyled">
                <li><input type="radio" name="q3" value="Benar" onclick="cekPernyataan('q3', 'Benar', 'hasil3')"> Benar</li>
                <li><input type="radio" name="q3" value="Salah" onclick="cekPernyataan('q3', 'Benar', 'hasil3')"> Salah</li>
            </ul>
            <p id="hasil3"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 4 -->
        <div class="question" id="soal4" style="display: none;">
            <ul id="q4" class="list-unstyled">
                <li><input type="radio" name="q4" value="Benar" onclick="cekPernyataan('q4', 'Salah', 'hasil4')"> Benar</li>
                <li><input type="radio" name="q4" value="Salah" onclick="cekPernyataan('q4', 'Salah', 'hasil4')"> Salah</li>
            </ul>
            <p id="hasil4"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 5 -->
        <div class="question" id="soal5" style="display: none;">
            <ul id="q5" class="list-unstyled">
                <li><input type="radio" name="q5" value="Benar" onclick="cekPernyataan('q5', 'Benar', 'hasil5')"> Benar</li>
                <li><input type="radio" name="q5" value="Salah" onclick="cekPernyataan('q5', 'Benar', 'hasil5')"> Salah</li>
            </ul>
            <p id="hasil5"></p>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>
    </div>
</div>

<!-- Navigasi Halaman -->
<div class="navigation d-flex justify-content-between">
    <a class="nav-btn btn btn-primary" href="/materi2/penglihatan-serangga">Sebelumnya</a>
    <a class="nav-btn btn btn-primary" href="/materi3/lup">Selanjutnya</a>
</div>

<script>
    function cekPernyataan(qid, kunci, hasilId) {
        const jawab = document.querySelector(`input[name="${qid}"]:checked`);
        const hasil = document.getElementById(hasilId);
        const btn = hasil.nextElementSibling;

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
            hasil.dataset.answered = "true";
            document.querySelectorAll(`input[name="${qid}"]`).forEach(radio => radio.disabled = true);
        } else {
            hasil.innerHTML = `Jawaban Salah!`;
            hasil.style.color = "red";
        }
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
                        body: JSON.stringify({ latihan_ke: 6 })
                    })
                    .then(res => res.json())
                    .then(data => {
                        Swal.fire({
                            title: 'Berhasil!',
                            text: 'Hasil latihan telah disimpan.',
                            icon: 'success',
                            confirmButtonText: 'Lanjut ke Materi'
                        }).then(() => {
                            window.location.href = "/materi3/lup";
                        });
                    })
                    .catch(err => {
                        Swal.fire('Gagal', 'Tidak dapat menyimpan hasil latihan. Silakan coba lagi.', 'error');
                    });
                }
            });
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