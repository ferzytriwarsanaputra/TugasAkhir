@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="container-fluid mt-4">
    <div class="card shadow p-4">
        <div class="text-center mb-4">
            <h2>Selamat Datang, {{ auth()->user()->nama }}</h2>
            <p>Berikut adalah data dirimu sebelum memulai pembelajaran.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <td>{{ auth()->user()->nama }}</td>
                    </tr>
                    <tr>
                        <th>NISN</th>
                        <td>{{ auth()->user()->nisn }}</td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>{{ auth()->user()->kelas }}</td>
                    </tr>
                    <tr>
                        <th>Sekolah</th>
                        <td>{{ auth()->user()->sekolah }}</td>
                    </tr>
                </table>
                <div class="text-center mt-4">
                    <a href="/materi1/sifat-cahaya" class="btn btn-primary">
                        Mulai Belajar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
