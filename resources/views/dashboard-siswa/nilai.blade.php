@extends('dashboard-siswa.layouts.main')

@section('container')
<main class="container px-4">
    <div class="col-lg-8 mx-auto">
        <div class="bg-white rounded-4 shadow p-4 text-center border">

            <div class="text-white rounded-top py-2" style="background-color: #1363DF">
                <h4 class="m-0">
                    {{ $kuis_id == 4 ? 'HASIL EVALUASI AKHIR' : 'HASIL KUIS ' . $kuis_id }}
                </h4>
            </div>            

            <div class="text-muted text-center mt-3">
                <small>{{ $hari }}, {{ $tanggal }} | {{ $waktu }}</small>
            </div>                       

            <div class="bg-light rounded-3 p-4 my-3 border" style="border-color: #1363DF;">
                <i class="bi bi-award-fill" style="font-size: 60px; color:#1363DF;"></i>
                <h5 class="mt-3 mb-1 fw-bold">{{ $nama }}</h5>
                <p class="fs-5"><strong>Skor : {{ $skor }}</strong></p>
            </div>

            <p>
                @if ($status === 'memenuhi')
                    <span class="text-success">Selamat nilaimu memenuhi KKM! Silahkan pelajari materi selanjutnya</span>
                @else
                    <span class="text-danger">Maaf, nilaimu belum memenuhi KKM. Silakan pelajari kembali materinya ya!</span>
                @endif
            </p>

            <div class="mt-3">
                @if ($kuis_id == 1)
                    <a href="/materi2/penglihatan-manusia" class="btn btn-primary">Selesai Kuis</a>
                @elseif ($kuis_id == 2)
                    <a href="/materi3/kamera" class="btn btn-primary">Selesai Kuis</a>
                @elseif ($kuis_id == 3)
                    <a href="/petunjuk-evaluasi/4" class="btn btn-primary">Selesai Kuis</a>
                @else
                    <a href="/" class="btn btn-primary">Kembali ke Dashboard</a>
                @endif
            </div>

        </div>
    </div>
</main>
@endsection
