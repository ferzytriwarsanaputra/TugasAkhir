@extends('layouts.main')

@section('container')
<main class="container mt-5 px-4">
    <h1 class="text-center fw-bold mb-4">Materi Cahaya dan Alat Optik</h1>
    <div class="row g-4 py-5">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg border-0 h-100 bg-white text-center rounded-4">
                <div class="card-body d-flex flex-column align-items-center">
                    <h4 class="card-title fw-bold mt-3">Sifat Cahaya dan Proses Pembentukan Bayangan</h4>
                    <ul class="list-unstyled text-start">
                        <li>• Sifat-Sifat Cahaya</li>
                        <li>• Pembentukan Cahaya pada Cermin</li>
                        <li>• Lensa</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg border-0 h-100 bg-white text-center rounded-4">
                <div class="card-body d-flex flex-column align-items-center">
                    <h4 class="card-title fw-bold mt-3">Indra Penglihatan Manusia<br> dan Hewan</h4>
                    <ul class="list-unstyled text-start">
                        <li>• Indra Penglihatan Manusia</li>
                        <li>• Indra Penglihatan Serangga</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg border-0 h-100 bg-white text-center rounded-4">
                <div class="card-body d-flex flex-column align-items-center">
                    <h4 class="card-title fw-bold mt-3">Alat Optik Dalam Kehidupan Sehari-hari</h4>
                    <ul class="list-unstyled text-start">
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