@extends('dashboard-guru.layouts.main')

@section('container')
<main class="container mt-5 px-4">
    <h1 class="text-center fw-bold mb-4">HASIL BELAJAR</h1>
    
    <div class="container col-lg-10 mx-auto">
        <div class="d-flex justify-content-start mb-3">
            <a href="{{ route('dashboard-guru.index') }}" class="btn btn-secondary">← Kembali</a>
        </div>

        <div class="bg-light rounded-4 shadow p-4">
            <div class="row justify-content-center g-4 py-3">
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="{{ route('dashboard-guru.progres') }}" class="text-decoration-none text-dark">
                        <div class="card shadow-sm border-0 h-100 bg-white text-center rounded-4 py-5">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <i class="bi bi-bar-chart display-3 text-primary mb-3"></i>
                                <h4 class="card-title fw-bold">Progres Belajar Siswa</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="{{ route('dashboard-guru.kkm') }}" class="text-decoration-none text-dark">
                        <div class="card shadow-sm border-0 h-100 bg-white text-center rounded-4 py-5">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <i class="bi bi-pencil display-3 text-success mb-3"></i>
                                <h4 class="card-title fw-bold">Atur KKM</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <a href="{{ route('dashboard-guru.hasil-kuis') }}" class="text-decoration-none text-dark">
                        <div class="card shadow-sm border-0 h-100 bg-white text-center rounded-4 py-5">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                <i class="bi bi-check-circle display-3 text-warning mb-3"></i>
                                <h4 class="card-title fw-bold">Hasil Kuis</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
