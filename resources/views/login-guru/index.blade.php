@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-center align-items-center py-5">
    <div class="card shadow-lg p-4" style="max-width: 800px; width: 100%;">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <img src="img/imguser.jpg" alt="Ilustrasi Login" class="img-fluid" style="max-width: 80%;">
            </div>
            <div class="col-md-6 p-4">
                <h2 class="text-center fw-bold text-dark mb-4">Login Guru</h2>
                <form method="POST" action="/login">
                    @csrf
                    <div class="mb-3">
                        <label for="nis" class="form-label fw-semibold">NISN</label>
                        <input type="text" name="nisn" id="nisn" class="form-control" placeholder="Masukkan NISN">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password">
                    </div>
                    <div class="d-grid">
                        <a href="/" class="btn btn-primary text-light text-decoration-none">Login</a>
                    </div>
                    <div class="text-center mt-3">
                        <p class="text-muted">
                            Bukan Guru? Beralih ke Halaman 
                            <a href="/login-siswa" class="text-primary text-decoration-none">Siswa</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection