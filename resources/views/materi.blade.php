@extends('layouts.main')

@section('container')
<main class="container mt-2">
    <h1 class="text-center fw-bold mb-4">Materi Cahaya dan Alat Optik</h1>
    <div class="row g-4 py-5">

        <div class="col-md-6 col-lg-4">
            <div class="card card-custom shadow-lg border-0 h-100 bg-white text-center rounded-4">
                <div class="card-body d-flex flex-column align-items-center">
                    <i class="bi bi-lightbulb-fill fs-1 text-warning"></i>
                    <h4 class="card-title fw-bold mt-3 text-dark">Sifat Cahaya dan Proses Pembentukan Bayangan</h4>
                    <ul class="list-unstyled text-start text-secondary">
                        <li>• Sifat-Sifat Cahaya</li>
                        <li>• Pembentukan Cahaya pada Cermin</li>
                        <li>• Lensa</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card card-custom shadow-lg border-0 h-100 bg-white text-center rounded-4">
                <div class="card-body d-flex flex-column align-items-center">
                    <i class="bi bi-eye-fill fs-1 text-success"></i>
                    <h4 class="card-title fw-bold mt-3 text-dark">Indra Penglihatan Manusia dan Hewan</h4>
                    <ul class="list-unstyled text-start text-secondary">
                        <li>• Indra Penglihatan Manusia</li>
                        <li>• Indra Penglihatan Serangga</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card card-custom shadow-lg border-0 h-100 bg-white text-center rounded-4">
                <div class="card-body d-flex flex-column align-items-center">
                    <i class="bi bi-camera-fill fs-1 text-primary"></i>
                    <h4 class="card-title fw-bold mt-3 text-dark">Alat Optik dalam Kehidupan Sehari-hari</h4>
                    <ul class="list-unstyled text-start text-secondary">
                        <li>• Kamera</li>
                        <li>• Kaca Pembesar (Lup)</li>
                        <li>• Mikroskop</li>
                        <li>• Teleskop</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection