@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="container-fluid">
    <div class="mb-4">
        <h2>Dashboard</h2>
        <!-- Profil Kamu -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
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
        <div class="col-md-8">
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
</div>
@endsection