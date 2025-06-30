@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="card-custom">
    <div class="title-box">
        <span>3.4 Teleskop</span>
    </div>
    <div class="reading-box">
        <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Buku">
        <strong>Ayo Membaca</strong>
    </div>
    <div class="content">
        <p>
            Teleskop adalah alat yang digunakan untuk melihat benda-benda yang sangat jauh, seperti bintang, planet, dan galaksi. Ada dua jenis teleskop utama: teleskop refraktor, yang menggunakan lensa untuk mengumpulkan cahaya, dan teleskop reflektor, yang menggunakan cermin cekung. Teleskop membantu para astronom untuk mengamati benda-benda di luar angkasa dan mempelajari lebih dalam tentang alam semesta.
        </p>
        <p>
            Penggunaan teleskop sangat penting dalam ilmu astronomi. Dengan teleskop, kita bisa melihat jauh ke luar angkasa, mengamati benda langit, dan mendapatkan pemahaman yang lebih baik tentang alam semesta.
        </p>
        <h6>a. Teleskop Bias</h6>
        <p>
            Teleskop adalah alat optik yang membuat benda-benda jauh terlihat lebih dekat. Teleskop bias sederhana terdiri dari dua lensa cembung yang ada di dalam pipa. Lensa yang lebih besar disebut lensa objektif, sedangkan lensa yang lebih kecil adalah lensa okuler (lensa mata). Lensa objektif pertama-tama membentuk bayangan, kemudian bayangan itu diperbesar oleh lensa okuler. Lensa objektif pada teleskop bias lebih besar daripada diameter mata kita, jadi lebih banyak cahaya yang bisa masuk ke dalam lensa dan ke mata kita. Karena itu, bayangan yang terbentuk oleh teleskop akan lebih jelas dan objek yang terlihat jadi lebih detail dibandingkan dengan melihat langsung dengan mata.
        </p>
        <figure class="text-center">
            <img src="/img/Materi3/optik6.png" alt="Teleskop Bias" class="img-fluid d-block mx-auto" style="max-width: 50%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption><em>Gambar 3.6 Teleskop Bias (Sumber: Kemdikbud. 2017)</em></figcaption>
        </figure>
        <p>
            Teleskop yang dibuat dengan lensa disebut teleskop pembias. Lensa dalam teleskop bias ini sama dengan lensa yang ada di kacamata, yaitu sama-sama bisa membelokkan cahaya yang melewatinya.
        </p>
        <p>
            Tapi, ada bedanya nih lensa di teleskop sama di kacamata. Kalau di kacamata, lensa membantu bikin objek yang elo lihat supaya nggak kelihatan buram lagi. Kalau di teleskop, lensa ini yang bikin elo bisa melihat objek yang jauh dengan lebih dekat. 
        </p>
        <figure class="text-center">
            <img src="/img/Materi3/teleskop bias.png" alt="Cara Kerja Teleskop Bias dalam menangkap cahaya" class="img-fluid d-block mx-auto" style="max-width: 50%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption><em>Gambar 3.7 Cara Kerja Teleskop Bias dalam menangkap cahaya</em></figcaption>
        </figure>

        <h6>b. Teleskop Pantul</h6>
        <p>
            Pada teleskop pantul, lensa objektif digantikan dengan cermin cekung. Bayangan dari objek yang jauh terbentuk di dalam tabung teleskop ketika cahaya dipantulkan oleh cermin cekung. Cahaya dari objek yang jauh masuk ke salah satu ujung tabung dan dipantulkan oleh cermin lain di ujung satunya. Cahaya tersebut kemudian dipantulkan lagi dari cermin cekung ke cermin datar di dalam tabung. Cermin datar ini memantulkan cahaya ke lensa okuler, yang berfungsi untuk memperbesar gambar.
        </p>
        <figure class="text-center">
            <img src="/img/Materi3/optik7.png" alt="Teleskop Pantul" class="img-fluid d-block mx-auto" style="max-width: 50%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption><em>Gambar 3.8 Teleskop Pantul (Sumber: Kemdikbud. 2017)</em></figcaption>
        </figure>
        <p>
            Teleskop pemantul bisa mendapatkan hasil yang bagus walaupun menggunakan cermin yang tipis banget. Karena cara kerja teleskop pemantul yaitu cahaya terkonsentrasi dengan memantul dari cermin, jadi cermin nggak perlu dibuat tebal, hanya perlu dibuat dengan bentuk lengkung yang tepat.
        </p>
        <p>
            Ini juga alasan mengapa lebih banyak teleskop yang menggunakan cermin saat ini, karena cara membuatnya juga nggak begitu sulit. Apalagi cermin juga lebih mudah dibersihkan dan dipoles daripada lensa.
        </p>
        <figure class="text-center">
            <img src="/img/Materi3/teleskop pantul.png" alt="Cara Kerja Teleskop Pantul dalam menangkap cahaya" class="img-fluid d-block mx-auto" style="max-width: 50%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption><em>Gambar 3.9 Cara Kerja Teleskop Pantul dalam menangkap cahaya (Sumber: Dokumen Penulis)</em></figcaption>
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
    <h5>Aktivitas 3.4</h5>
    <div class="question-container">
      <div class="alert alert-info mb-3">
        <strong>Petunjuk Pengerjaan:</strong>
        <ul class="mb-0">
            <li>Terdapat <strong>5 soal pilihan ganda</strong> dalam aktivitas ini.</li>
            <li>Bacalah setiap soal dengan cermat.</li>
            <li>Klik pada jawaban yang menurutmu paling tepat.</li>
            <li>Jika jawabanmu benar, tombol "Lanjut" akan aktif untuk berpindah ke soal berikutnya.</li>
            <li>Jika jawaban salah, coba pahami kembali materi sebelum melanjutkan.</li>
        </ul>
      </div>
      <!-- Soal 1 -->
      <div class="question" id="soal1">
        <p>1. Perbedaan utama antara teleskop bias dan teleskop pantul adalah...</p>
        <ul class="options" id="q1">
          <li onclick="pilihJawaban(this, 'q1', 'Teleskop bias menggunakan lensa, sedangkan teleskop pantul menggunakan cermin', 'hasil1')">
            Teleskop bias menggunakan cermin, sedangkan teleskop pantul menggunakan lensa
          </li>
          <li onclick="pilihJawaban(this, 'q1', 'Teleskop bias menggunakan lensa, sedangkan teleskop pantul menggunakan cermin', 'hasil1')">
            Teleskop bias menggunakan lensa, sedangkan teleskop pantul menggunakan cermin
          </li>
          <li onclick="pilihJawaban(this, 'q1', 'Teleskop bias menggunakan lensa, sedangkan teleskop pantul menggunakan cermin', 'hasil1')">
            Teleskop bias menggunakan dua lensa cekung, sedangkan teleskop pantul menggunakan dua cermin cembung
          </li>
          <li onclick="pilihJawaban(this, 'q1', 'Teleskop bias menggunakan lensa, sedangkan teleskop pantul menggunakan cermin', 'hasil1')">
            Teleskop bias dan teleskop pantul bekerja dengan prinsip yang sama tanpa perbedaan
          </li>
        </ul>
        <p id="hasil1"></p>
        <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
      </div>
  
      <!-- Soal 2 -->
      <div class="question" id="soal2" style="display:none">
        <p>2. Komponen utama yang memantulkan cahaya dalam teleskop pantul adalah ...</p>
        <ul class="options" id="q2">
          <li onclick="pilihJawaban(this, 'q2', 'Cermin cekung', 'hasil2')">Lensa cembung</li>
          <li onclick="pilihJawaban(this, 'q2', 'Cermin cekung', 'hasil2')">Cermin cembung</li>
          <li onclick="pilihJawaban(this, 'q2', 'Cermin cekung', 'hasil2')">Cermin datar</li>
          <li onclick="pilihJawaban(this, 'q2', 'Cermin cekung', 'hasil2')">Cermin cekung</li>
        </ul>
        <p id="hasil2"></p>
        <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
      </div>
  
      <!-- Soal 3 -->
      <div class="question" id="soal3" style="display:none">
        <p>3. Lensa yang berfungsi untuk memperbesar bayangan dalam teleskop bias adalah ...</p>
        <ul class="options" id="q3">
          <li onclick="pilihJawaban(this, 'q3', 'Lensa okuler', 'hasil3')">Lensa objektif</li>
          <li onclick="pilihJawaban(this, 'q3', 'Lensa okuler', 'hasil3')">Lensa cembung</li>
          <li onclick="pilihJawaban(this, 'q3', 'Lensa okuler', 'hasil3')">Lensa okuler</li>
          <li onclick="pilihJawaban(this, 'q3', 'Lensa okuler', 'hasil3')">Lensa cekung</li>
        </ul>
        <p id="hasil3"></p>
        <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
      </div>
  
      <!-- Soal 4 -->
      <div class="question" id="soal4" style="display:none">
        <p>4. Teleskop pantul lebih disukai dalam astronomi modern karena...</p>
        <ul class="options" id="q4">
          <li onclick="pilihJawaban(this, 'q4', 'Karena cermin lebih mudah dibuat dan lebih ringan daripada lensa besar', 'hasil4')">Karena lebih mahal dan kompleks</li>
          <li onclick="pilihJawaban(this, 'q4', 'Karena cermin lebih mudah dibuat dan lebih ringan daripada lensa besar', 'hasil4')">Karena memerlukan lebih banyak cahaya</li>
          <li onclick="pilihJawaban(this, 'q4', 'Karena cermin lebih mudah dibuat dan lebih ringan daripada lensa besar', 'hasil4')">Karena menghasilkan warna lebih tajam</li>
          <li onclick="pilihJawaban(this, 'q4', 'Karena cermin lebih mudah dibuat dan lebih ringan daripada lensa besar', 'hasil4')">Karena cermin lebih mudah dibuat dan lebih ringan daripada lensa besar</li>
        </ul>
        <p id="hasil4"></p>
        <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
      </div>
  
      <!-- Soal 5 -->
      <div class="question" id="soal5" style="display:none">
        <p>5. Proses pembentukan bayangan dalam teleskop pantul dimulai dengan cahaya yang dipantulkan oleh ...</p>
        <ul class="options" id="q5">
          <li onclick="pilihJawaban(this, 'q5', 'Cermin utama', 'hasil5')">Lensa okuler</li>
          <li onclick="pilihJawaban(this, 'q5', 'Cermin utama', 'hasil5')">Cermin utama</li>
          <li onclick="pilihJawaban(this, 'q5', 'Cermin utama', 'hasil5')">Lensa objektif</li>
          <li onclick="pilihJawaban(this, 'q5', 'Cermin utama', 'hasil5')">Cermin datar</li>
        </ul>
        <p id="hasil5"></p>
        <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
      </div>
    </div>
  </div>
  
  <script>
    let currentSoal = 1;
    const totalSoal = 5;
  
    function showSoal(n) {
      for (let i = 1; i <= totalSoal; i++) {
        document.getElementById(`soal${i}`).style.display = i === n ? 'block' : 'none';
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
                        window.location.href = "/petunjuk/3";
                    }
                });
            })
            .catch(err => {
                console.error('Gagal simpan hasil latihan:', err);
                Swal.fire('Oops!', 'Gagal menyimpan hasil latihan. Silakan coba lagi.', 'error');
            });
        }
  
    function pilihJawaban(el, qid, kunci, hasilId) {
      const container = document.getElementById(qid);
      const hasil = document.getElementById(hasilId);
      const btn = hasil.nextElementSibling;
  
      if (hasil.dataset.answered === "true") return;
  
      container.querySelectorAll("li").forEach(li => li.classList.remove("selected"));
      el.classList.add("selected");
  
      const userJawaban = el.textContent.trim();
      if (userJawaban === kunci) {
        hasil.innerHTML = "Jawaban Benar!";
        hasil.style.color = "green";
        hasil.dataset.answered = "true";
        btn.classList.remove("disabled");
        container.querySelectorAll("li").forEach(li => li.style.pointerEvents = "none");
      } else {
        hasil.innerHTML = "Jawaban Salah! Coba lagi.";
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