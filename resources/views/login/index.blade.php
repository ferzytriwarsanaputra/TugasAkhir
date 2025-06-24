@extends('layouts.main')

@section('container')
<div class="container d-flex justify-content-center align-items-center py-5">
    <div class="card shadow rounded-4 p-3 p-md-4 w-100" style="max-width: 900px; max-height: 90vh; overflow-y: auto;">
        <div class="row g-0 align-items-center">
            {{-- Gambar Login --}}
            <div class="col-md-6 text-center">
                <img src="{{ asset('img/imguser.jpg') }}" alt="Login Illustration"
                    class="img-fluid w-100 px-3 py-3" style="object-fit: contain;">
            </div>

            {{-- Form Login --}}
            <div class="col-md-6">
                <div class="px-3 py-4">
                    <h3 class="text-center fw-bold text-dark mb-4">Login</h3>

                    <form method="POST" action="{{ route('login.auth') }}">
                        @csrf

                        {{-- NISN / NIP --}}
                        <div class="mb-3">
                            <label for="identifier" class="form-label">NISN / NIP</label>
                            <input type="text" name="identifier" id="identifier"
                                class="form-control @error('identifier') is-invalid @enderror"
                                placeholder="Masukkan NISN atau NIP" autofocus value="{{ old('identifier') }}">
                            @error('identifier')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" name="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Masukkan Password">
                                <span class="input-group-text bg-white">
                                    <i class="bi bi-eye-slash" id="togglePassword" style="cursor: pointer;"></i>
                                </span>
                                @error('password')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Tombol Login --}}
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-box-arrow-in-right me-1"></i> Login
                            </button>
                        </div>
                    </form>

                    <div class="text-center mt-3">
                        <small class="text-muted">Lupa password? Hubungi Guru</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Script Show/Hide Password --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;

            this.classList.toggle('bi-eye');
            this.classList.toggle('bi-eye-slash');
        });
    });
</script>
@endsection