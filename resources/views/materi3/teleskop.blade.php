@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="card-custom">
    <div class="title-box">
        <span><h5>3.4 Teleskop</h5></span>
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
        <img src="/img/Materi3/optik6.png" alt="Teleskop Bias" class="img-fluid d-block mx-auto" style="max-width: 50%;">
        <p>
            Teleskop yang dibuat dengan lensa disebut teleskop pembias. Lensa dalam teleskop bias ini sama dengan lensa yang ada di kacamata, yaitu sama-sama bisa membelokkan cahaya yang melewatinya.
        </p>
        <p>
            Tapi, ada bedanya nih lensa di teleskop sama di kacamata. Kalau di kacamata, lensa membantu bikin objek yang elo lihat supaya nggak kelihatan buram lagi. Kalau di teleskop, lensa ini yang bikin elo bisa melihat objek yang jauh dengan lebih dekat. 
        </p>
        <img src="/img/Materi3/teleskop bias.png" alt="Cara Kerja Teleskop Bias dalam menangkap cahaya" class="img-fluid d-block mx-auto" style="max-width: 50%;">

        <h6>b. Teleskop Pantul</h6>
        <p>
            Pada teleskop pantul, lensa objektif digantikan dengan cermin cekung. Bayangan dari objek yang jauh terbentuk di dalam tabung teleskop ketika cahaya dipantulkan oleh cermin cekung. Cahaya dari objek yang jauh masuk ke salah satu ujung tabung dan dipantulkan oleh cermin lain di ujung satunya. Cahaya tersebut kemudian dipantulkan lagi dari cermin cekung ke cermin datar di dalam tabung. Cermin datar ini memantulkan cahaya ke lensa okuler, yang berfungsi untuk memperbesar gambar.
        </p>
        <img src="/img/Materi3/optik7.png" alt="Teleskop Pantul" class="img-fluid d-block mx-auto" style="max-width: 50%;">
        <p>
            Teleskop pemantul bisa mendapatkan hasil yang bagus walaupun menggunakan cermin yang tipis banget. Karena cara kerja teleskop pemantul yaitu cahaya terkonsentrasi dengan memantul dari cermin, jadi cermin nggak perlu dibuat tebal, hanya perlu dibuat dengan bentuk lengkung yang tepat.
        </p>
        <p>
            Ini juga alasan mengapa lebih banyak teleskop yang menggunakan cermin saat ini, karena cara membuatnya juga nggak begitu sulit. Apalagi cermin juga lebih mudah dibersihkan dan dipoles daripada lensa.
        </p>
        <img src="/img/Materi3/teleskop pantul.png" alt="Cara Kerja Teleskop Pantul dalam menangkap cahaya" class="img-fluid d-block mx-auto" style="max-width: 50%;">
    </div>
</div>

<!-- Navigasi Halaman -->
<div class="navigation">
    <a class="nav-btn" href="/materi3/mikroskop">Sebelumnya</a>
    <a class="nav-btn" href="/petunjuk/3">Selanjutnya</a>
</div>
@endsection