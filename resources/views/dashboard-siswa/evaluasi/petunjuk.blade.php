@extends('dashboard-siswa.layouts.main')

@section('container')
<main class="container px-4">
    <h1 class="text-center fw-bold mb-2">EVALUASI</h1>
    <div class="container col-lg-10 mx-auto">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="bg-light rounded-4 shadow p-4 h-100">
                    <h2 class="text-center" style="font-size: 1.25rem;">
                        <i class="bi bi-info-circle-fill me-2 text-primary"></i>
                        Petunjuk Pengerjaan Evaluasi
                    </h2>
                    <hr>
                    <ul>
                        <li>Jangan lupa berdoa sebelum mengerjakan.</li>
                        <li>Kuis ini terdiri dari 20 soal pilihan ganda.</li>
                        <li>Setiap soal memiliki bobot sebanyak 5 poin.</li>
                        <li>Waktu pengerjaan kuis selama 30 menit.</li>
                        <li>Jawablah soal evaluasi dengan benar dan tidak terburu-buru.</li>
                        <li>Ketika semua soal evaluasi selesai dijawab, silakan klik tombol <strong>"Selesai"</strong> untuk melihat hasil skor yang diperoleh.</li>
                        <li>Tekan <strong>"Mulai Kuis"</strong> untuk mulai mengerjakan evaluasi</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="bg-light rounded-4 shadow p-4 h-100">
                    <h2 class="text-center" style="font-size: 1.25rem;">
                        <i class="bi bi-person-circle me-2 text-success"></i>
                        Data Siswa
                    </h2>
                    <hr>
                    @auth
                        <p><strong>Nama:</strong> {{ auth()->user()->nama }}</p>
                        <p><strong>NISN:</strong> {{ auth()->user()->nisn }}</p>
                        <p><strong>Kelas:</strong> {{ auth()->user()->kelas }}</p>
                        <p><strong>Sekolah:</strong> {{ auth()->user()->sekolah }}</p>
                    @endauth
                    <p><strong>Materi:</strong> {{ $evaluasi->judul }}</p>
                    <div class="mt-4 d-flex justify-content-center gap-3 flex-wrap">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali ke Materi</a>
                        <a href="{{ route('mulai-kuis', ['kuis' => $evaluasi->id]) }}" class="btn btn-primary">Mulai Evaluasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection