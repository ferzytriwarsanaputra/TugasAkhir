@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="card-custom">
    <div class="title-box">
        <span>2.2 Indra Penglihatan Serangga</span>
    </div>
    <div class="reading-box">
        <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Buku">
        <strong>Ayo Membaca</strong>
    </div>
    <div class="content">
        <p>
            Berbeda dengan manusia, serangga memiliki sistem penglihatan yang unik. Sebagian besar serangga memiliki mata majemuk, yang terdiri dari ribuan lensa kecil yang disebut ommatidia. Setiap ommatidium menangkap sebagian kecil dari lingkungan, dan otak serangga menggabungkan informasi ini untuk membentuk gambaran keseluruhan. Mata majemuk memungkinkan serangga mendeteksi gerakan dengan sangat cepat dan dari berbagai arah sekaligus, meskipun resolusi gambarnya lebih rendah dibandingkan dengan mata manusia.
        </p>
        <p>
            Mata majemuk sangat bermanfaat untuk kelangsungan hidup serangga, terutama dalam mendeteksi predator atau mencari makanan. Sebagai contoh, lalat dapat merespons ancaman dalam hitungan milidetik berkat mata majemuknya. Selain itu, serangga seperti lebah mampu melihat cahaya ultraviolet, yang membantu mereka dalam mencari bunga.
        </p>
        <figure class="text-center">
            <img src="/img/Materi2/mata6.png" alt="Mata Majemuk pada Mata Lalat" class="img-fluid d-block mx-auto" style="max-width: 50%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption><em>Gambar 2.6 Mata Majemuk pada Mata Lalat (Sumber: Kemdikbud. 2017)</em></figcaption>
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
    <h5>Aktivitas 2.2</h5>
    <div class="question-container">
        <div class="question" id="soal1">
            <p><strong>Petunjuk:</strong> Seret fungsi yang sesuai ke kolom "Fungsi" di sebelah nama bagian mata.</p>

            <div class="table-container">
                <table class="tabel-dragdrop">
                    <thead>
                        <tr>
                            <th>Bagian Mata</th>
                            <th>Fungsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lensa</td>
                            <td class="drop-zone" data-jawaban="faset" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                        </tr>
                        <tr>
                            <td>Kerucut kristalin</td>
                            <td class="drop-zone" data-jawaban="tembus" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                        </tr>
                        <tr>
                            <td>Sel penglihatan</td>
                            <td class="drop-zone" data-jawaban="peka" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                        </tr>
                        <tr>
                            <td>Sel pigmen</td>
                            <td class="drop-zone" data-jawaban="pisah" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h5 class="mt-2">Fungsi:</h5>
            <div id="dragContainer" class="drag-container">
                <div class="drag-item" id="tembus" draggable="true" ondragstart="drag(event)">Mengarahkan cahaya ke dalam omatidium, tembus cahaya</div>
                <div class="drag-item" id="peka" draggable="true" ondragstart="drag(event)">Mendeteksi atau peka terhadap cahaya</div>
                <div class="drag-item" id="faset" draggable="true" ondragstart="drag(event)">Menjadi permukaan depan dari faset mata majemuk</div>
                <div class="drag-item" id="pisah" draggable="true" ondragstart="drag(event)">Memisahkan omatidia dari omatidia lain di sekelilingnya</div>
            </div>

            <p id="hasil1"></p>
            <button class="cekJawaban nav-btn" onclick="cekDragTable()">Periksa</button>
            <button id="btnReset" class="cekJawaban nav-btn" onclick="resetJawaban()">Reset Jawaban</button>
            <a id="btnLanjut" class="cekJawaban nav-btn disabled" href="#" onclick="lanjutMateri(event)">Lanjut</a>
        </div>
    </div>
</div>

<!-- Navigasi Halaman -->
<div class="navigation d-flex justify-content-between">
    <a class="nav-btn btn btn-primary" href="/materi2/penglihatan-manusia">Sebelumnya</a>
</div>

<script>
    let sudahBenar = false;

    function allowDrop(e) {
        if (sudahBenar) return;
        e.preventDefault();
    }

    function drag(e) {
        if (sudahBenar) return;
        e.dataTransfer.setData("text", e.target.id);
    }

    function drop(e) {
        if (sudahBenar) return;
        e.preventDefault();
        const id = e.dataTransfer.getData("text");
        const dragged = document.getElementById(id);

        // Pastikan target adalah .drop-zone
        let target = e.target;
        while (target && !target.classList.contains("drop-zone")) {
            target = target.parentElement;
        }
        if (!target) return;

        const asal = dragged.parentElement;
        const sebelumnya = target.firstElementChild;

        if (asal === target) return;

        // Tukar isi jika sudah ada
        if (sebelumnya) {
            if (asal.id === "dragContainer") {
                document.getElementById("dragContainer").appendChild(sebelumnya);
            } else if (asal.classList.contains("drop-zone")) {
                asal.appendChild(sebelumnya);
            }
        }

        target.innerHTML = '';
        target.appendChild(dragged);
    }

    function cekDragTable() {
        const zones = document.querySelectorAll('.drop-zone');
        let benar = 0;

        zones.forEach(zone => {
            const isi = zone.querySelector('.drag-item');
            const jawaban = zone.getAttribute("data-jawaban");
            if (isi && isi.id === jawaban) {
                zone.style.backgroundColor = "#d4edda";
                benar++;
            } else {
                zone.style.backgroundColor = "#f8d7da";
            }
        });

        const hasil = document.getElementById("hasil1");
        const lanjut = document.getElementById("btnLanjut");
        const reset = document.getElementById("btnReset");

        if (benar === zones.length) {
            hasil.innerText = "Jawaban Benar! Semua pasangan sesuai 🎉";
            hasil.style.color = "green";
            sudahBenar = true;

            document.querySelectorAll('.drag-item').forEach(item => item.setAttribute("draggable", false));
            lanjut.classList.remove("disabled");
            lanjut.style.pointerEvents = "auto";
            lanjut.style.opacity = "1";

            // Nonaktifkan tombol reset
            reset.disabled = true;
            reset.classList.add("disabled");
            reset.style.opacity = "0.6";
        } else {
            hasil.innerText = `Jawaban Salah! ${benar} dari ${zones.length} benar.`;
            hasil.style.color = "red";

            // Aktifkan kembali tombol reset
            reset.disabled = false;
            reset.classList.remove("disabled");
            reset.style.opacity = "1";
        }
    }

    function resetJawaban() {
        const zones = document.querySelectorAll('.drop-zone');
        const dragContainer = document.getElementById('dragContainer');
        const hasil = document.getElementById('hasil1');
        const tombolLanjut = document.getElementById('btnLanjut');
        const tombolReset = document.getElementById('btnReset');

        zones.forEach(zone => {
            const isi = zone.querySelector('.drag-item');
            if (isi) dragContainer.appendChild(isi);
            zone.style.backgroundColor = "";
        });

        document.querySelectorAll('.drag-item').forEach(item => {
            item.setAttribute('draggable', true);
        });

        zones.forEach(zone => {
            zone.setAttribute('ondrop', 'drop(event)');
            zone.setAttribute('ondragover', 'allowDrop(event)');
        });

        // Reset status
        sudahBenar = false;
        hasil.innerText = "";
        tombolLanjut.classList.add("disabled");
        tombolLanjut.style.pointerEvents = "none";
        tombolLanjut.style.opacity = "0.6";

        // Aktifkan kembali tombol reset
        tombolReset.disabled = false;
        tombolReset.classList.remove("disabled");
        tombolReset.style.opacity = "1";
    }

    function lanjutMateri(event) {
        event.preventDefault();
        if (!sudahBenar) {
            Swal.fire('Belum selesai', 'Silakan periksa jawaban kamu terlebih dahulu.', 'warning');
            return;
        }

        Swal.fire({
            title: 'Latihan selesai!',
            text: 'Apakah kamu ingin melanjutkan ke materi berikutnya?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya, lanjut',
            cancelButtonText: 'Batal'
        }).then(result => {
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
                    Swal.fire('Berhasil!', 'Hasil latihan telah disimpan.', 'success')
                        .then(() => window.location.href = "/petunjuk/2");
                })
                .catch(() => {
                    Swal.fire('Gagal', 'Tidak dapat menyimpan hasil latihan. Coba lagi nanti.', 'error');
                });
            }
        });
    }

    document.addEventListener("DOMContentLoaded", () => {
        const lanjut = document.getElementById("btnLanjut");
        const reset = document.getElementById("btnReset");
        lanjut.classList.add("disabled");
        lanjut.style.pointerEvents = "none";
        lanjut.style.opacity = "0.6";
        reset.disabled = false;
        reset.classList.remove("disabled");
        reset.style.opacity = "1";
    });
    function tampilkanGambar(imgElement) {
        const modalImg = document.getElementById('gambarModal');
        modalImg.src = imgElement.src;
        modalImg.alt = imgElement.alt;
    }
</script>  
@endsection