@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-center align-items-center py-5">
    <div class="card shadow-lg p-4" style="max-width: 800px; width: 100%;">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <img src="img/imguser.jpg" alt="Ilustrasi Login" class="img-fluid" style="max-width: 80%;">
            </div>

            <div class="col-md-6 p-4">
                <h2 class="text-center fw-bold text-dark mb-4">Login Siswa</h2>
                <form method="POST" action="{{ route('login.auth') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nisn" class="form-label fw-semibold">NISN</label>
                        <input type="text" name="nisn" id="nisn" class="form-control @error('nisn') is-invalid @enderror" placeholder="Masukkan NISN" autofocus value="{{ old('nisn') }}">
                        @error('nisn')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                            
                        @enderror
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary text-light text-decoration-none" type="submit">Login</button>
                    </div>
                    <div class="text-center mt-3">
                        <p class="text-muted">
                            Bukan Siswa? Beralih ke Halaman 
                            <a href="/login-guru" class="text-primary text-decoration-none">Guru</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection