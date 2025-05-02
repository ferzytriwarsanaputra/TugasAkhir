@extends('dashboard-guru.layouts.main')

@section('container')
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<main class="container mt-5 px-4">
    <h1 class="text-center fw-bold mb-4">PROGRES BELAJAR SISWA</h1>

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('dashboard-guru.hasil-belajar') }}" class="btn btn-secondary">← Kembali</a>
    </div>

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">NISN</th>
                <th scope="col">Kelas</th>
                <th scope="col">Progres</th>
            </tr>
        </thead>
        {{-- <tbody>
            @php $no = 1; @endphp
            @foreach ($siswa as $item)
            <tr>
                <th scope="row" class="text-center">{{ $no++ }}</th>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nisn }}</td>
                <td>{{ $item->kelas }}</td>
                <td>{{ $item->progres }}</td>
            </tr>
            @endforeach
        </tbody> --}}
    </table>
</main>
@endsection