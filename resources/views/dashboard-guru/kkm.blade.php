@extends('dashboard-guru.layouts.main')

@section('container')
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<main class="container mt-5 px-4">
    <h1 class="text-center fw-bold mb-4">Atur KKM untuk Kuis</h1>

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('dashboard-guru.hasil-belajar') }}" class="btn btn-secondary">← Kembali</a>
        <!-- Jika Anda ingin menambah tombol untuk menambah kuis -->
    </div>

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kuis</th>
                <th scope="col">KKM Saat Ini</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($kkmList as $item)
            <tr>
                <th scope="row" class="text-center">{{ $no++ }}</th>
                <td>{{ $item->kuis_id }}</td> <!-- Tampilkan nama kuis -->
                <td>{{ $item->nilai_kkm }}</td> <!-- Tampilkan nilai KKM -->
                <td class="text-center">
                    <!-- Tombol untuk mengatur KKM -->
                    <a href="{{ route('dashboard-guru.kkm.edit', $item->id) }}" class="btn btn-primary btn-sm">Atur KKM</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection
