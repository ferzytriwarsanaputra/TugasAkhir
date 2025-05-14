@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="card-custom">
    <div class="title-box">
        <span>3</span> <span>Alat Optik dalam Kehidupan Sehari-hari</span>
    </div>
    <div class="reading-box">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Tujuan Pembelajaran">
        <strong>Tujuan Pembelajaran</strong>
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
        <span><h5>3.1 Kamera</h5></span>
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
        <img src="/img/Materi3/optik1.png" alt="Pembentukan Bayangan pada Kamera Analog" class="img-fluid d-block mx-auto" style="max-width: 60%;">
    </div>
</div>

<!-- Navigasi Halaman -->
<div class="navigation">
    <a class="nav-btn" href="/materi2/penglihatan-serangga">Sebelumnya</a>
    <a class="nav-btn" href="/materi3/lup">Selanjutnya</a>
</div>
@endsection