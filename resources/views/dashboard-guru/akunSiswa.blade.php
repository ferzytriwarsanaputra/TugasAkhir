@extends('dashboard-guru.layouts.main')

@section('container')
@include('sweetalert::alert')

<main class="container mt-5 px-4">
    <h1 class="text-center fw-bold mb-4">AKUN SISWA</h1>

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('dashboard-guru.index') }}" class="btn btn-secondary">← Kembali</a>
        <a href="{{ route('dashboard-guru.tambahSiswa') }}" class="btn btn-success">Tambah Akun</a>
    </div>

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NISN</th>
                <th scope="col">Kelas</th>
                <th scope="col">Sekolah</th>
                <th scope="col">Password</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($users as $item)
            <tr>
                <th scope="row" class="text-center">{{ $no++ }}</th>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nisn }}</td>
                <td>{{ $item->kelas }}</td>
                <td>{{ $item->sekolah }}</td>
                <td>{{ $item->password }}</td>
                <td class="text-center">
                    <a href="{{ route('dashboard-guru.siswa.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('dashboard-guru.siswa.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection