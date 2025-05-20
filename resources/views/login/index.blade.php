@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-center align-items-center py-5">
    <div class="card shadow-lg p-4" style="max-width: 800px; width: 100%;">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <img src="img/imguser.jpg" alt="Ilustrasi Login" class="img-fluid" style="max-width: 80%;">
            </div>

            <div class="col-md-6 p-4">
                <h2 class="text-center fw-bold text-dark mb-4">Login</h2>
                <form method="POST" action="{{ route('login.auth') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="identifier" class="form-label fw-semibold">NISN / NIP</label>
                        <input type="text" name="identifier" id="identifier" class="form-control @error('identifier') is-invalid @enderror" placeholder="Masukkan NISN atau NIP" autofocus value="{{ old('identifier') }}">
                        @error('identifier')
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
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
