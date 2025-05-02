@extends('dashboard-guru.layouts.main')

@section('container')
<h3 class="text-center">Tambah Data Siswa</h3>
<div class="container">
    <div class="row justify-content-center mt-2">
        <div class="col-md-5">
            <a href="{{ route('dashboard-guru.akunSiswa') }}" class="btn btn-secondary">← Kembali</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5 border rounded mt-2">
            <form action="{{ route('dashboard-guru.akunSiswa.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama_input" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('namaInput') is-invalid @enderror" id="nama_input" name="namaInput" value="{{ old('namaInput') }}">
                    @error('namaInput')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                            
                    @enderror
                </div>                    
                <div class="mb-3">
                    <label for="nisn_input" class="form-label">NISN</label>
                    <input type="text" class="form-control @error('nisnInput') is-invalid @enderror" id="nisn_input" name="nisnInput" value="{{ old('nisnInput') }}">
                    @error('nisnInput')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                            
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="kelas_input" class="form-label">Kelas</label>
                    <input type="text" class="form-control @error('kelasInput') is-invalid @enderror" id="kelas_input" name="kelasInput" value="{{ old('kelasInput') }}">
                    @error('kelasInput')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                            
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sekolah_input" class="form-label">Sekolah</label>
                    <input type="text" class="form-control @error('sekolahInput') is-invalid @enderror" id="sekolah_input" name="sekolahInput" value="{{ old('sekolahInput') }}">
                    @error('sekolahInput')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                            
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_input" class="form-label">Password</label>
                    <input type="password" class="form-control @error('passwordInput') is-invalid @enderror" id="password_input" name="passwordInput">
                    @error('passwordInput')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                            
                    @enderror
                </div>                    
                <div class="mb-3">
                    <label for="passwordInput_confirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control @error('passwordInput_confirmation') is-invalid @enderror" id="passwordInput_confirmation" name="passwordInput_confirmation">
                    @error('passwordInput_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>                            
                    @enderror
                </div>                    

                <div class="row mx-2">
                    <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
