@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="card-custom">
    <div class="title-box">
        <span>1.3 Lensa</span>
    </div>
    <div class="reading-box">
        <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Buku">
        <strong>Ayo Membaca</strong>
    </div>
    <div class="content">
        <p>
            Lensa adalah benda bening yang dibatasi oleh dua permukaan bidang lengkung atau benda bening yang dibatasi oleh satu bidang lengkung dan satu bidang datar. Berdasarkan bentuknya, lensa dibedakan menjadi dua yaitu lensa cembung dan lensa cekung.
        </p>
        <figure class="text-center">
            <img src="/img/Materi1/lensa1.png" alt="Lensa cembung dan cekung pada benda" class="img-fluid d-block mx-auto" style="max-width: 60%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption><em>Gambar 1.17 Lensa cembung dan cekung pada benda (Sumber: pinterest.com)</em></figcaption>
        </figure>
        <figure class="text-center">
            <img src="/img/Materi1/lensa2.png" alt="Lensa Cembung dan Lensa Cekung" class="img-fluid d-block mx-auto" style="max-width: 60%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption><em>Gambar 1.18 Lensa Cembung dan Lensa Cekung (Sumber: Kemdikbud. 2017)</em></figcaption>
        </figure>
        <h6>a. Lensa Cembung</h6>
        <p>
            Lensa cembung merupakan jenis lensa yang memiliki bagian tengah lebih tebal dibandingkan bagian tepinya, dengan permukaan yang melengkung ke arah luar. Cahaya yang melewati lensa ini akan dibiaskan sehingga terkonsentrasi pada satu titik fokus. Lensa cembung banyak dimanfaatkan dalam berbagai perangkat optik seperti kamera, mikroskop, dan mata manusia. Selain itu, lensa cembung juga digunakan pada kacamata untuk membantu penglihatan penderita rabun dekat.
        </p>
        <figure class="text-center">
            <img src="/img/Materi1/lensa3.jpg" alt="Lensa cembung pada lensa kamera" class="img-fluid d-block mx-auto" style="max-width: 30%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption><em>Gambar 1.19 Lensa cembung pada lensa kamera (Sumber: pinterest.com)</em></figcaption>
        </figure>
        <h6><br>1) Pemantulan sinar-sinar istimewa pada lensa cembung adalah sebagai berikut:</h6>
        <figure>
            <figcaption class="text-center"><em>Tabel 1.3 Sinar Istimewa pada Lensa Cembung</em></figcaption>
            <table cellpadding="10">
                <tr>
                    <th>Sinar Istimewa</th>
                    <th>Diagram Sinar</th>
                </tr>
                <tr>
                    <td>a. Sinar datang sejajar sumbu utama akan dibiaskan menuju titik fokus aktif (F<sub>1</sub>) di belakang lensa.</td>
                    <td>
                        <figure class="text-center">
                            <img src="/img/Materi1/lensa1a.png" alt="Sinar sejajar ke F1" class="img-fluid d-block mx-auto" data-bs-toggle="modal"
                            data-bs-target="#modalGambar"
                            onclick="tampilkanGambar(this)">
                        </figure>
                    </td>
                </tr>
                <tr>
                    <td>b. Sinar datang melalui titik fokus pasif (F<sub>2</sub>) akan dibiaskan sejajar sumbu utama.</td>
                    <td>
                        <figure class="text-center">
                            <img src="/img/Materi1/lensa1b.png" alt="Sinar dari F2 ke sejajar" class="img-fluid d-block mx-auto" data-bs-toggle="modal"
                            data-bs-target="#modalGambar"
                            onclick="tampilkanGambar(this)">
                        </figure>
                    </td>
                </tr>
                <tr>
                    <td>c. Sinar datang melalui pusat optik (O) akan diteruskan tanpa pembiasan.</td>
                    <td>
                        <figure class="text-center">
                            <img src="/img/Materi1/lensa1c.png" alt="Sinar melalui pusat optik" class="img-fluid d-block mx-auto" data-bs-toggle="modal"
                            data-bs-target="#modalGambar"
                            onclick="tampilkanGambar(this)">
                        </figure>
                    </td>
                </tr>
            </table>
        </figure>

        <h6><br>2)	Melukis Pembentukan Bayangan pada Lensa Cembung Menggunakan Diagram Sinar</h6>
        <p>
            Jika sebuah benda diletakkan di depan lensa cembung akan membentuk bayangan, seperti ditunjukkan pada Gambar.
        </p>
        <figure class="text-center">
            <img src="/img/Materi1/lensa4.png" alt="Pembentukan Bayangan oleh Lensa Cembung" class="img-fluid d-block mx-auto" style="max-width: 60%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption><em>Gambar 1.20 Pembentukan Bayangan oleh Lensa Cembung (Sumber: Kemdikbud. 2017)</em></figcaption>
        </figure>
        <p>
            Pembentukan bayangan pada lensa cembung membutuhkan sekurang-kurangnya dua sinar istimewa. Sifat bayangan yang terbentuk pada lensa cembung bergantung pada posisi benda.
        </p>
        <h6>b. Lensa Cekung</h6>
        <p>
            Lensa cekung, dengan permukaan melengkung ke dalam, memiliki kemampuan untuk menyebarkan cahaya yang melewatinya. Sifat ini menjadikannya ideal untuk digunakan pada kacamata penderita rabun jauh (miopia), karena lensa cekung membantu memperbaiki fokus cahaya sehingga bayangan jatuh tepat pada retina. Berbeda dengan lensa cembung yang memfokuskan cahaya ke satu titik, lensa cekung menyebabkan cahaya menyebar, menghasilkan bayangan yang tampak lebih kecil dan lebih jauh dari aslinya.
        </p>
        <figure class="text-center">
            <img src="/img/Materi1/lensa5.png" alt="Lensa cekung pada lubang intip pintu" class="img-fluid d-block mx-auto" style="max-width: 30%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption><em>Gambar 1.21 Lensa cekung pada lubang intip pintu (Sumber: canva.com)</em></figcaption>
        </figure>
        <p>
            Pada pembiasan lensa cekung juga berlaku sinar-sinar istimewa ketika kita hendak membuat bayangan pada lensa. Sinar-sinar istimewa pada pembiasan cahaya oleh lensa cekung.
        </p>
        <figure>
            <figcaption class="text-center"><em>Tabel 1.4 Sinar Istimewa pada Lensa Cekung</em></figcaption>
            <table cellpadding="10">
                <tr>
                    <th>Sinar Istimewa</th>
                    <th>Diagram Sinar</th>
                </tr>
                <tr>
                    <td>Sinar datang sejajar sumbu utama seolah-olah dibiaskan berasal dari titik fokus aktif (F) di depan lensa.</td>
                    <td>
                        <figure class="text-center">
                            <img src="/img/Materi1/lensa2a.png" alt="Sinar sejajar pada lensa cekung" class="img-fluid d-block mx-auto" data-bs-toggle="modal"
                            data-bs-target="#modalGambar"
                            onclick="tampilkanGambar(this)">
                        </figure>
                    </td>
                </tr>
                <tr>
                    <td>Sinar datang seolah-olah menuju titik fokus pasif (F) akan dibiaskan sejajar sumbu utama.</td>
                    <td>
                        <figure class="text-center">
                            <img src="/img/Materi1/lensa2b.png" alt="Sinar menuju fokus cekung" class="img-fluid d-block mx-auto" data-bs-toggle="modal"
                            data-bs-target="#modalGambar"
                            onclick="tampilkanGambar(this)">
                        </figure>
                    </td>
                </tr>
                <tr>
                    <td>Sinar datang melalui pusat optik (O) akan diteruskan tanpa pembiasan.</td>
                    <td>
                        <figure class="text-center">
                            <img src="/img/Materi1/lensa2c.png" alt="Sinar lurus lensa cekung" class="img-fluid d-block mx-auto" data-bs-toggle="modal"
                            data-bs-target="#modalGambar"
                            onclick="tampilkanGambar(this)">
                        </figure>
                    </td>
                </tr>
            </table>
        </figure>

        <p><br>
            Jika ketiga sinar istimewa yang berasal dari sebuah benda dilukiskan pada satu lensa, maka akan terbentuk bayangan benda
        </p>
        <figure class="text-center">
            <img src="/img/Materi1/lensa6.png" alt="Pembentukan Bayangan oleh Lensa Cekung" class="img-fluid d-block mx-auto" style="max-width: 60%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption><em>Gambar 1.22 Pembentukan Bayangan oleh Lensa Cekung (Sumber: Kemdikbud. 2017)</em></figcaption>
        </figure>
        <p>
            Sifat bayangan yang dihasilkan oleh lensa cekung bergantung pada posisi benda dan dapat dianalisis menggunakan diagram sinar serta sinar-sinar istimewa. Selain itu, sifat-sifat bayangan ini juga dapat ditentukan dengan menerapkan Dalil Esbach, seperti halnya pada lensa cembung. Penting untuk diingat bahwa pada lensa cekung, benda yang berada di depan lensa akan selalu menghasilkan bayangan yang bersifat maya, tegak, diperkecil, dan terletak di depan lensa.
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
    <h5>Aktivitas 1.3</h5>
    <div class="question-container">
        <!-- Soal 1: Checkbox Bayangan Lensa Cekung -->
        <div class="question" id="soal1">
            <div class="petunjuk"><strong>Petunjuk:</strong> Pilih semua jawaban yang benar!</div>
            <p>1. Ciri-ciri bayangan yang dihasilkan oleh lensa cekung adalah ...</p>
            <ul class="options checkbox-style">
                <label><input type="checkbox" name="q1" value="Maya"> Maya</label><br>
                <label><input type="checkbox" name="q1" value="Nyata"> Nyata</label><br>
                <label><input type="checkbox" name="q1" value="Tegak"> Tegak</label><br>
                <label><input type="checkbox" name="q1" value="Terbalik"> Terbalik</label><br>
                <label><input type="checkbox" name="q1" value="Diperkecil"> Diperkecil</label>
            </ul>            
            <p id="hasil1"></p>
            <button class="cekJawaban nav-btn" onclick="cekCheckbox('q1', ['Maya', 'Tegak', 'Diperkecil'], 'hasil1', this)">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>

        <!-- Soal 2: Checkbox Fungsi Lensa Cembung -->
        <div class="question" id="soal2" style="display: none;">
            <div class="petunjuk"><strong>Petunjuk:</strong> Pilih semua jawaban yang benar!</div>
            <p>2. Fungsi dari lensa cembung adalah ...</p>
            <ul class="options checkbox-style">
                <label><input type="checkbox" name="q2" value="Kaca pembesar"> Kaca pembesar</label><br>
                <label><input type="checkbox" name="q2" value="Mikroskop"> Mikroskop</label><br>
                <label><input type="checkbox" name="q2" value="Kamera"> Kamera</label><br>
                <label><input type="checkbox" name="q2" value="Lubang intip pintu"> Lubang intip pintu</label><br>
                <label><input type="checkbox" name="q2" value="Kacamata rabun dekat"> Kacamata rabun dekat</label>
            </ul>            
            <p id="hasil2"></p>
            <button class="cekJawaban nav-btn" onclick="cekCheckbox('q2', ['Kaca pembesar', 'Mikroskop', 'Kamera'], 'hasil2', this)">Periksa</button>
            <button class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
        </div>
    </div>
</div>

<div class="navigation d-flex justify-content-between">
    <a class="nav-btn btn btn-primary" href="/materi1/bayangan-cermin">Sebelumnya</a>
    <a class="nav-btn btn btn-primary" href="/petunjuk/1">Selanjutnya</a>
</div>

<script>
    let currentSoal = 1;
    const totalSoal = 2;

    function showSoal(n) {
        for (let i = 1; i <= totalSoal; i++) {
            const soal = document.getElementById(`soal${i}`);
            if (soal) soal.style.display = i === n ? "block" : "none";
        }
    }

    function nextSoal() {
        if (currentSoal < totalSoal) {
            currentSoal++;
            showSoal(currentSoal);
        } else {
            Swal.fire({
                title: 'Latihan selesai!',
                text: 'Apakah kamu yakin ingin melanjutkan ke materi selanjutnya?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya, lanjut',
                cancelButtonText: 'Kembali'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch('/simpan-hasil-latihan', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        },
                        body: JSON.stringify({ latihan_ke: 3 })
                    })
                    .then(res => res.json())
                    .then(data => {
                        console.log(data.message);
                        Swal.fire({
                            title: 'Berhasil!',
                            text: 'Data latihan kamu telah disimpan.',
                            icon: 'success',
                            confirmButtonText: 'Lanjut ke Materi'
                        }).then(() => {
                            window.location.href = "/petunjuk/1";
                        });
                    })
                    .catch(err => {
                        console.error('Gagal simpan hasil latihan:', err);
                        Swal.fire('Error', 'Gagal menyimpan hasil latihan. Silakan coba lagi.', 'error');
                    });
                }
            });
        }
    }

    function cekCheckbox(name, kunci, hasilId, tombol) {
        const hasil = document.getElementById(hasilId);
        const btnLanjut = tombol.nextElementSibling;
        const checkboxes = document.querySelectorAll(`input[name="${name}"]`);
        const dipilih = Array.from(checkboxes).filter(c => c.checked).map(c => c.value);

        const benar = kunci.every(k => dipilih.includes(k)) && dipilih.every(d => kunci.includes(d));

        if (benar) {
            hasil.innerHTML = "Jawaban Benar!";
            hasil.style.color = "green";
            hasil.dataset.answered = "true";
            btnLanjut.classList.remove("disabled");
            checkboxes.forEach(cb => cb.disabled = true);
        } else {
            hasil.innerHTML = `Jawaban Salah! Jawaban yang benar: ${kunci.join(", ")}`;
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection