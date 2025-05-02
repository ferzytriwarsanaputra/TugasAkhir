@extends('dashboard-guru.layouts.main')

@section('container')
<main class="container mt-5 px-4">
    <h1 class="text-center fw-bold mb-4">HASIL KUIS</h1>

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
                <th scope="col">Hari, Tanggal</th>
                <th scope="col">Waktu Selesai</th>
                <th scope="col">Nilai</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($hasilKuis as $item)
            <tr>
                <th scope="row" class="text-center">{{ $no++ }}</th>
                <td>{{ $item->siswa->nama }}</td> <!-- Menampilkan nama siswa -->
                <td>{{ $item->siswa->nisn }}</td> <!-- Menampilkan NISN -->
                <td>{{ $item->siswa->kelas }}</td> <!-- Menampilkan kelas siswa -->
                <td>{{ $item->hari }}, {{ $item->tanggal }}</td> <!-- Menampilkan hari dan tanggal -->
                <td>{{ $item->waktu }}</td> <!-- Menampilkan waktu selesai -->
                <td>{{ $item->skor }}</td> <!-- Menampilkan skor -->
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection
