@extends('dashboard-guru.layouts.main')

@section('container')
<main class="container px-4">

    <h1 class="fw-bold mb-4">Dashboard Guru</h1>

    <div class="card mb-4 shadow-sm border rounded-4">
        <div class="card-body d-flex align-items-center gap-3">
            <div class="d-flex align-items-center justify-content-center bg-success-subtle rounded-circle" style="width: 70px; height: 70px;">
                <i class="bi bi-person-circle fs-1 text-success"></i>
            </div>
            <div class="flex-grow-1">
                <p class="mb-1"><strong>Role:</strong> {{ ucfirst($guru->role) }}</p>
                <p class="mb-1"><strong>Nama:</strong> {{ $guru->nama }}</p>
                <p class="mb-0"><strong>NIP:</strong> {{ $guru->nip }}</p>
            </div>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-12 col-md-6">
            <div class="card shadow-sm border bg-light rounded-4 h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <i class="bi bi-people-fill fs-2 text-primary"></i>
                    <div>
                        <h6 class="card-title mb-1">Jumlah Siswa</h6>
                        <p class="mb-0 fw-semibold">{{ $jumlahSiswa }} Orang</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card shadow-sm border bg-light rounded-4 h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <i class="bi bi-bar-chart-fill fs-2 text-success"></i>
                    <div>
                        <h6 class="card-title mb-1">Progress Siswa</h6>
                        <p class="mb-0 fw-semibold">{{ $jumlahSiswaSelesai }}/{{ $jumlahSiswa }} Selesai</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection