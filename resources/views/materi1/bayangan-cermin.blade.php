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
        <figure class="text-center">
            <img src="/img/Materi1/bercermin.jpeg" alt="Melihat Bayangan di Cermin" class="img-fluid d-block mx-auto" style="max-width: 40%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption>Gambar 1.8 Bayangan dari Cermin datar (Sumber: haibunda.com)</figcaption>
        </figure>
        <p>
            Jika dua buah cermin datar saling membentuk sudut (α), banyaknya bayangan yang terbentuk dapat dirumuskan sebagai
            <br>n=((360°)/α)-1
            <br>Keterangan :
            <br>n = Jumlah bayangan
            <br>α= Besar sudut antar dua cermin
        </p>
        <figure class="text-center">
            <img src="/img/Materi1/1.png" alt="Pembentukan Bayangan pada Cermin Datar" class="img-fluid d-block mx-auto" style="max-width: 50%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption>Gambar 1.9 Pembentukan Bayangan pada Cermin Datar (Sumber: Kemdikbud. 2017)</figcaption>
        </figure>
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
        <figure class="text-center">
            <img src="/img/Materi1/senter.png" alt="Cermin cekung sebagai reflektor pada senter" class="img-fluid d-block mx-auto" style="max-width: 30%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption>Gambar 1.10 Cermin Cekung Sebagai Reflektor pada Senter (Sumber: kompas.com)</figcaption>
        </figure>
        <h6><br>1) Pemantulan sinar-sinar istimewa pada cermin cekung adalah sebagai berikut:</h6>
        <table cellpadding="10">
            <caption style="caption-side: top;">Tabel 1.1 Sinar Istimewa pada Cermin Cekung</caption>
            <tr>
                <th>Sinar Istimewa</th>
                <th>Diagram Sinar</th>
            </tr>
            <tr>
                <td>a. Sinar datang sejajar sumbu utama akan dipantulkan melalui titik fokus.</td>
                <td><img src="/img/Materi1/1a.png" alt="Sinar sejajar dipantulkan ke titik fokus" class="img-fluid d-block mx-auto" data-bs-toggle="modal"
                  data-bs-target="#modalGambar"
                  onclick="tampilkanGambar(this)"></td>
            </tr>
            <tr>
                <td>b. Sinar datang melalui titik fokus akan dipantulkan sejajar sumbu utama.</td>
                <td><img src="/img/Materi1/1b.png" alt="Sinar dari fokus dipantulkan sejajar" class="img-fluid d-block mx-auto" data-bs-toggle="modal"
                  data-bs-target="#modalGambar"
                  onclick="tampilkanGambar(this)"></td>
            </tr>
            <tr>
                <td>c. Sinar datang melalui titik pusat kelengkungan cermin akan dipantulkan kembali melalui titik tersebut.</td>
                <td><img src="/img/Materi1/1c.png" alt="Sinar ke pusat kelengkungan dipantulkan kembali ke asal" class="img-fluid d-block mx-auto" data-bs-toggle="modal"
                  data-bs-target="#modalGambar"
                  onclick="tampilkanGambar(this)"></td>
            </tr>
        </table>

        <h6><br>2) Pembentukan Bayangan oleh Cermin Cekung</h6>
        <p>• Benda berada pada jarak lebih dari R</p>
        <figure class="text-center">
            <img src="/img/Materi1/222.png" alt="Bayangan saat benda di luar R" class="img-fluid d-block mx-auto" style="max-width: 50%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption>Gambar 1.11 Pembentukan Bayangan jika Benda Berada pada Jarak Lebih dari R pada Cermin Cekung (Sumber: Kemdikbud. 2017)</figcaption>
        </figure>
        <p>Berdasarkan gambar tersebut, bayangan yang terbentuk bersifat nyata, terbalik, dan diperkecil.</p>
        <p>• Benda di titik fokus F</p>
        <figure class="text-center">
            <img src="/img/Materi1/22.png" alt="Bayangan pada titik fokus" class="img-fluid d-block mx-auto" style="max-width: 50%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption>Gambar 1.12 Pembentukan Bayangan jika Benda Berada pada Titik Fokus pada Cermin Cekung (Sumber: Kemdikbud. 2017)</figcaption>
        </figure>
        <p>Berdasarkan gambar tersebut, tidak terbentuk bayangan atau bayangan terletak di tempat yang jauh tak terhingga.</p>
        <p>• Benda di antara cermin dan F</p>
        <figure class="text-center">
            <img src="/img/Materi1/23.png" alt="Bayangan maya, tegak, diperbesar" class="img-fluid d-block mx-auto" style="max-width: 50%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption>Gambar 1.13 Pembentukan Bayangan jika Benda Berada di Antara Titik Fokus dan Cermin Cekung (Sumber: Kemdikbud. 2017)</figcaption>
        </figure>
        <p>Berdasarkan gambar tersebut bayangan yang terbentuk bersifat maya, tegak, dan diperbesar. Selain penggunaan diagram sinar dan tiga sinar istimewa, agar lebih mudah memahami letak benda dan letak bayangan, kamu dapat memahami pembagian nomor ruang pada cermin lengkung (Dalil Esbach).</p>
        <figure class="text-center">
            <img src="/img/Materi1/24.png" alt="Pembagian ruang menurut Dalil Esbach" class="img-fluid d-block mx-auto" style="max-width: 50%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption>Gambar 1.14 Pembagian Ruang pada Cermin Cekung menurut Dalil Esbach (Sumber: Kemdikbud. 2017)</figcaption>
        </figure>
        <p>Misalnya benda diletakkan pada jarak lebih dari M (ruang III), bayangan yang terbentuk akan berada pada jarak antara F dan M (ruang II). Hal ini disebabkan menurut dalil Esbach jumlah ruang benda dengan ruang bayangan adalah sama dengan 5 (R_benda+R_bayangan) = 5.</p>
        <h6>c. Cermin Cembung</h6>
        <p>
            Cermin cembung memiliki permukaan yang melengkung keluar. Bayangan yang terbentuk oleh cermin cembung selalu maya, tegak, dan lebih kecil dari objek aslinya. Cermin ini sering digunakan sebagai kaca spion pada kendaraan karena memberikan pandangan yang lebih luas.
        </p>
        <figure class="text-center">
            <img src="/img/Materi1/spion.png" alt="Cermin cembung pada spion mobil" class="img-fluid d-block mx-auto" style="max-width: 40%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption>Gambar 1.15 Cermin cembung pada spion mobil (Sumber: pinterest.com)</figcaption>
        </figure>
        <p>
            Pembentukan bayangan pada cermin cembung dapat menggunakan sinar-sinar istimewa, Pemantulan sinar-sinar istimewa pada cermin cembung adalah sebagai berikut :
        </p>
        <table cellpadding="10">
            <caption style="caption-side: top;">Tabel 1.2 Sinar Istimewa pada Cermin Cembung</caption>
            <tr>
                <th>Sinar Istimewa</th>
                <th>Diagram Sinar</th>
            </tr>
            <tr>
                <td>a. Sinar datang sejajar sumbu utama dipantulkan seolah-olah dari titik fokus (F).</td>
                <td><img src="/img/Materi1/2a.png" alt="Sinar sejajar dipantulkan dari fokus maya" class="img-fluid d-block mx-auto" data-bs-toggle="modal"
                  data-bs-target="#modalGambar"
                  onclick="tampilkanGambar(this)"></td>
            </tr>
            <tr>
                <td>b. Sinar yang datang menuju titik fokus (F) dipantulkan sejajar sumbu utama.</td>
                <td><img src="/img/Materi1/2b.png" alt="Sinar ke fokus dipantulkan sejajar" class="img-fluid d-block mx-auto" data-bs-toggle="modal"
                  data-bs-target="#modalGambar"
                  onclick="tampilkanGambar(this)"></td>
            </tr>
            <tr>
                <td>c. Sinar yang datang menuju titik pusat kelengkungan cermin seolah-olah dipantulkan berasal dari titik pusat kelengkungan tersebut.</td>
                <td><img src="/img/Materi1/2c.png" alt="Sinar ke pusat kelengkungan maya" class="img-fluid d-block mx-auto" data-bs-toggle="modal"
                  data-bs-target="#modalGambar"
                  onclick="tampilkanGambar(this)"></td>
            </tr>
        </table>
        <p><br>Contoh lukisan pembentukan bayangan pada cermin cembung sebagai berikut.</p>
        <figure class="text-center">
            <img src="/img/Materi1/333.png" alt="Bayangan maya, tegak, diperkecil oleh cermin cembung" class="img-fluid d-block mx-auto" style="max-width: 50%;" data-bs-toggle="modal"
            data-bs-target="#modalGambar"
            onclick="tampilkanGambar(this)">
            <figcaption>Gambar 1.16 Pembentukan Bayangan pada Cermin Cembung, Bayangan yang Terbentuk Bersifat Maya dan Tegak (Sumber: Kemdikbud. 2017)</figcaption>
        </figure>
        <p>Jika benda diletakkan di depan cermin cembung, maka bayangan yang terbentuk akan bersifat maya, tegak, dan diperkecil.</p>
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
    <h5>Aktivitas 1.2</h5>
    <div class="alert alert-info mb-3">
      <strong>Petunjuk Aktivitas:</strong>
      <ul class="mb-0">
        <li>Aktivitas ini terdiri dari <strong>5 soal</strong> yang harus dikerjakan secara berurutan.</li>
        <li>Setiap soal meminta kamu <strong>menarik gambar ke area jawaban yang sesuai</strong>.</li>
        <li>Klik tombol <em>Periksa</em> untuk mengecek jawabanmu.</li>
        <li>Jika jawaban benar, tombol <em>Lanjut</em> akan aktif untuk berpindah ke soal berikutnya.</li>
        <li>Jika jawaban salah, kamu harus mencoba lagi sampai menemukan jawaban yang benar.</li>
        <li>Setelah semua soal selesai, kamu akan diarahkan ke materi berikutnya.</li>
      </ul>
    </div>    
    <!-- Soal 1 -->
    <div class="question" id="soal1">
      <p>1. Tarik gambar jenis cermin yang dapat membentuk bayangan nyata dan terbalik.</p>
      <div class="drag-container">
        <img src="/img/Materi1/senter.png" alt="Cermin Cekung" class="drag-item" id="cekung" draggable="true" ondragstart="drag(event)" style="max-width: 300px;">
        <img src="/img/Materi1/bercermin.jpeg" alt="Cermin Datar" class="drag-item" id="datar" draggable="true" ondragstart="drag(event)" style="max-width: 300px;">
        <img src="/img/Materi1/spion.png" alt="Cermin Cembung" class="drag-item" id="cembung" draggable="true" ondragstart="drag(event)" style="max-width: 300px;">
      </div>
      <div class="drop-zone" id="drop1" ondrop="drop(event, 'drop1')" ondragover="allowDrop(event)">Lepaskan gambar di sini</div>
      <button onclick="cekDragDrop(1, 'cekung')" class="cekJawaban nav-btn">Periksa</button>
      <button id="lanjut1" class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
      <p id="hasil1"></p>
    </div>
  
    <!-- Soal 2 -->
    <div class="question" id="soal2" style="display:none">
      <p>2. Tarik gambar jenis cermin yang membentuk bayangan maya, tegak, dan diperkecil.</p>
      <div class="drag-container">
        <img src="/img/Materi1/senter.png" alt="Cermin Cekung" class="drag-item" id="cekung2" draggable="true" ondragstart="drag(event)" style="max-width: 300px;">
        <img src="/img/Materi1/bercermin.jpeg" alt="Cermin Datar" class="drag-item" id="datar2" draggable="true" ondragstart="drag(event)" style="max-width: 300px;">
        <img src="/img/Materi1/spion.png" alt="Cermin Cembung" class="drag-item" id="cembung2" draggable="true" ondragstart="drag(event)" style="max-width: 300px;">
      </div>
      <div class="drop-zone" id="drop2" ondrop="drop(event, 'drop2')" ondragover="allowDrop(event)">Lepaskan gambar di sini</div>
      <button onclick="cekDragDrop(2, 'cembung2')" class="cekJawaban nav-btn">Periksa</button>
      <button id="lanjut2" class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
      <p id="hasil2"></p>
    </div>
  
    <!-- Soal 3 -->
    <div class="question" id="soal3" style="display:none">
      <p>3. Pilih gambar sinar pantul yang sudut datangnya sama dengan sudut pantul.</p>
      <div class="drag-container">
        <img src="/img/Materi1/1a.png" alt="Sinar Benar" class="drag-item" id="sinar_benar" draggable="true" ondragstart="drag(event)" style="max-width: 300px;">
        <img src="/img/Materi1/1b.png" alt="Sinar Acak" class="drag-item" id="sinar_acak" draggable="true" ondragstart="drag(event)" style="max-width: 300px;">
        <img src="/img/Materi1/1c.png" alt="Sinar Salah" class="drag-item" id="sinar_salah" draggable="true" ondragstart="drag(event)" style="max-width: 300px;">
      </div>
      <div class="drop-zone" id="drop3" ondrop="drop(event, 'drop3')" ondragover="allowDrop(event)">Lepaskan gambar di sini</div>
      <button onclick="cekDragDrop(3, 'sinar_benar')" class="cekJawaban nav-btn">Periksa</button>
      <button id="lanjut3" class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
      <p id="hasil3"></p>
    </div>
  
    <!-- Soal 4 (diperbarui dengan pilihan lebih menipu) -->
    <div class="question" id="soal4" style="display:none">
      <p>4. Tarik gambar bayangan yang tegak dan sama besar dengan benda.</p>
      <div class="drag-container">
        <img src="/img/Materi1/bercermin.jpeg" alt="Bayangan Datar" class="drag-item" id="bayangan_datar" draggable="true" ondragstart="drag(event)" style="max-width: 300px;">
        <img src="/img/Materi1/senter.png" alt="Bayangan Cekung (maya diperbesar)" class="drag-item" id="bayangan_cekung2" draggable="true" ondragstart="drag(event)" style="max-width: 300px;">
        <img src="/img/Materi1/spion.png" alt="Bayangan Cembung (diperkecil)" class="drag-item" id="bayangan_cembung2" draggable="true" ondragstart="drag(event)" style="max-width: 300px;">
      </div>
      <div class="drop-zone" id="drop4" ondrop="drop(event, 'drop4')" ondragover="allowDrop(event)">Lepaskan gambar di sini</div>
      <button onclick="cekDragDrop(4, 'bayangan_datar')" class="cekJawaban nav-btn">Periksa</button>
      <button id="lanjut4" class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
      <p id="hasil4"></p>
    </div>
  
    <!-- Soal 5 -->
    <div class="question" id="soal5" style="display:none">
      <p>5. Tarik gambar posisi bayangan ke area jawaban.</p>
      <div class="drag-container">
        <img src="/img/Materi1/23.png" alt="Bayangan Maya" class="drag-item" id="bayangan_maya" draggable="true" ondragstart="drag(event)" style="max-width: 300px;">
        <img src="/img/Materi1/222.png" alt="Bayangan Nyata" class="drag-item" id="bayangan_nyata" draggable="true" ondragstart="drag(event)" style="max-width: 300px;">
        <img src="/img/Materi1/333.png" alt="Bayangan Salah" class="drag-item" id="bayangan_salah" draggable="true" ondragstart="drag(event)" style="max-width: 300px;">
      </div>
      <div class="drop-zone" id="drop5" ondrop="drop(event, 'drop5')" ondragover="allowDrop(event)">Lepaskan gambar di sini</div>
      <button onclick="cekDragDrop(5, 'bayangan_maya')" class="cekJawaban nav-btn">Periksa</button>
      <button id="lanjut5" class="cekJawaban lanjut-btn nav-btn disabled" onclick="nextSoal()">Lanjut</button>
      <p id="hasil5"></p>
    </div>
  </div>
  
  <script>
    let currentSoal = 1;
    const totalSoal = 5;
    
    function showSoal(index) {
      for (let i = 1; i <= totalSoal; i++) {
        const soal = document.getElementById(`soal${i}`);
        if (soal) soal.style.display = i === index ? "block" : "none";
      }
    }
    
    function nextSoal() {
      const btn = document.getElementById(`lanjut${currentSoal}`);
      btn.classList.add("disabled");
      btn.disabled = true;
    
      if (currentSoal === totalSoal) {
        Swal.fire({
          title: 'Selesai?',
          text: 'Apakah kamu yakin ingin menyelesaikan latihan ini dan lanjut ke materi berikutnya?',
          icon: 'question',
          showCancelButton: true,
          confirmButtonText: 'Ya, Lanjut',
          cancelButtonText: 'Belum'
        }).then((result) => {
          if (result.isConfirmed) {
            fetch('/simpan-hasil-latihan', {
              method: 'POST',
              headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
              },
              body: JSON.stringify({ latihan_ke: 2 })
            })
            .then(res => res.json())
            .then(data => {
              Swal.fire({
                title: 'Berhasil!',
                text: 'Latihan telah disimpan.',
                icon: 'success',
                timer: 1500,
                showConfirmButton: false
              }).then(() => {
                window.location.href = "/materi1/lensa";
              });
            })
            .catch(err => {
              Swal.fire('Error', 'Gagal menyimpan hasil latihan. Silakan coba lagi.', 'error');
              btn.disabled = false;
              btn.classList.remove("disabled");
            });
          } else {
            btn.disabled = false;
            btn.classList.remove("disabled");
          }
        });
      } else {
        currentSoal++;
        showSoal(currentSoal);
      }
    }
    
    function allowDrop(e) { e.preventDefault(); }
    function drag(e) { e.dataTransfer.setData("text", e.target.id); }
    
    function drop(e, targetId) {
      e.preventDefault();
      const id = e.dataTransfer.getData("text");
      const item = document.getElementById(id);
      const target = document.getElementById(targetId);
    
      if (target.children.length > 0) {
        const parent = target.parentElement.querySelector('.drag-container');
        if (parent) parent.appendChild(target.firstChild);
      }
    
      target.innerHTML = "";
      target.appendChild(item);
    }
    
    function cekDragDrop(nomor, kunciId) {
      const drop = document.getElementById(`drop${nomor}`);
      const hasil = document.getElementById(`hasil${nomor}`);
      const btnLanjut = document.getElementById(`lanjut${nomor}`);
      const anak = drop.children[0];
    
      if (anak && anak.id === kunciId) {
        hasil.innerHTML = "Jawaban Benar!";
        hasil.style.color = "green";
        document.querySelectorAll(`#soal${nomor} .drag-item`).forEach(i => i.setAttribute("draggable", false));
        btnLanjut.classList.remove("disabled");
        btnLanjut.disabled = false;
      } else {
        hasil.innerHTML = "Jawaban Salah! Silakan coba lagi.";
        hasil.style.color = "red";
      }
    }
    
    showSoal(currentSoal);

    function tampilkanGambar(imgElement) {
      const modalImg = document.getElementById('gambarModal');
      modalImg.src = imgElement.src;
      modalImg.alt = imgElement.alt;
  }
</script>
@endsection