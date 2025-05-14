@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="card-custom">
    <div class="title-box">
        <span><h5>3.2 Kaca Pembesar (Lup)</h5></span>
    </div>
    <div class="reading-box">
        <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Buku">
        <strong>Ayo Membaca</strong>
    </div>
    <div class="content">
        <p>
            Kaca pembesar  atau lup, adalah alat optik sederhana yang memiliki satu lensa cembung. Alat ini digunakan untuk memperbesar objek kecil supaya kita bisa melihat detailnya dengan lebih jelas. Ketika cahaya melewati lensa cembung, cahaya tersebut akan dibelokkan dan berkumpul di satu titik, sehingga bayangan objek menjadi lebih besar. Kaca pembesar sering digunakan untuk kegiatan sehari-hari, seperti membaca tulisan kecil atau melihat detail pada suatu benda.
        </p>
        <img src="/img/Materi3/optik2.png" alt="Kaca Pembesar (Lup)" class="img-fluid d-block mx-auto">
        <p>
            Penggunaan kaca pembesar tidak terbatas pada kegiatan sehari-hari, tetapi juga digunakan dalam penelitian ilmiah untuk mengamati detail yang tidak terlihat oleh mata telanjang. Memahami cara kerja kaca pembesar membantu dalam berbagai aplikasi yang membutuhkan perbesaran.
        </p>
        <img src="/img/Materi3/optik3.png" alt="(a) Pengamatan Menggunakan Lup dengan Mata Berakomodasi  Maksimum, (b) Pengamatan Menggunakan Lup dengan Mata Tidak Berakomodasi" class="img-fluid d-block mx-auto" style="max-width: 40%;">
        <p>
            (a) Pengamatan Menggunakan Lup dengan Mata Berakomodasi  Maksimum, <br>(b) Pengamatan Menggunakan Lup dengan Mata Tidak Berakomodasi
        </p>
    </div>
</div>

<!-- Navigasi Halaman -->
<div class="navigation">
    <a class="nav-btn" href="/materi3/kamera">Sebelumnya</a>
    <a class="nav-btn" href="/materi3/mikroskop">Selanjutnya</a>
</div>
@endsection