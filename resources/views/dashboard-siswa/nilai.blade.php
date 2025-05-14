@extends('dashboard-siswa.layouts.main')

@section('container')
<main class="container px-4">
    <div class="col-lg-8 mx-auto">
        <div class="bg-light rounded-4 shadow p-4 text-center">
            <h2 class="fs-4 mb-3 text-success">Selamat! Kamu telah menyelesaikan Kuis {{ $kuis_id }}</h2>
            <hr>
            <p><strong>Nama:</strong> {{ $nama }}</p>
            <p><strong>Hari:</strong> {{ $hari }}</p>
            <p><strong>Tanggal:</strong> {{ $tanggal }}</p>
            <p><strong>Waktu Pengerjaan:</strong> {{ $waktu }}</p>
            <p><strong>Skor:</strong> {{ $skor }}</p>
            <p><strong>KKM:</strong> {{ $kkm }}</p>
            <p><strong>Feedback:</strong>
                @if ($status === 'memenuhi')
                    <span class="text-success">Selamat! Kamu telah memenuhi KKM.</span>
                @else
                    <span class="text-danger">Maaf, kamu belum memenuhi KKM.</span>
                @endif
            </p>

            <div class="mt-4">
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
