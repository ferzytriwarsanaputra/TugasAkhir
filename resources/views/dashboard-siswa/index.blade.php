@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="container-fluid">
    <div class="mb-4">
        <h2>Dashboard</h2>
        <!-- Profil Kamu -->
    <div class="row justify-content-center mb-4">
        <div>
            <div class="card p-4 shadow-sm">
                <h5 class="fw-bold text-center mb-4">Profil Kamu</h5>
                <div class="d-flex align-items-center">
                    <div class="me-4">
                        <i class="bi bi-person-circle" style="font-size: 6rem; color: #6c757d;"></i>
                    </div>
                    <div>
                        <p class="mb-1"><strong>Role:</strong> Siswa</p>
                        <p class="mb-1"><strong>Nama:</strong> {{ auth()->user()->nama }}</p>
                        <p class="mb-1"><strong>NISN:</strong> {{ auth()->user()->nisn }}</p>
                        <p class="mb-1"><strong>Kelas:</strong> {{ auth()->user()->kelas }}</p>
                        <p class="mb-0"><strong>Sekolah:</strong> {{ auth()->user()->sekolah }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <!-- Progress Pembelajaran -->
    <div class="row justify-content-center">
        <div>
            <div class="card p-4 shadow-sm">
                <h5 class="fw-bold text-center mb-3">Progress Pembelajaran</h5>
                <div class="progress" style="height: 30px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                        role="progressbar"
                        style="width: {{ $progres }}%;"
                        aria-valuenow="{{ $progres }}"
                        aria-valuemin="0"
                        aria-valuemax="100">
                        <strong>{{ $progres }}%</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="alert alert-primary mt-4">
        <h5 class="fw-bold">📘 Informasi Progres Belajar</h5>
        <p>
            Progres belajar kamu dihitung dari dua bagian:
        </p>
        <ul>
            <li><strong>Latihan</strong>: menyelesaikan setiap latihan akan menambah progres. Total 9 latihan berkontribusi hingga <strong>40%</strong> dari progres belajar.</li>
            <li><strong>Kuis & Evaluasi</strong>: nilai (skor) yang kamu dapatkan akan menentukan tambahan progres. Jika skornya rendah, progresnya juga kecil.</li>
        </ul>
        <p>Berikut ini bobot setiap bagian:</p>
        <ul class="mb-2">
            <li>Kuis 1 → 20%</li>
            <li>Kuis 2 → 20%</li>
            <li>Kuis 3 → 20%</li>
            <li>Evaluasi → 40%</li>
        </ul>
        <p class="mb-0"><strong>Tip:</strong> Dapatkan skor tinggi untuk menaikkan progres dan capai 100% sebagai tanda kamu telah menyelesaikan seluruh pembelajaran!</p>
    </div>    
</div>
@endsection