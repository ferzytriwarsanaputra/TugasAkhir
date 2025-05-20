@extends('dashboard-guru.layouts.main')

@section('container')
<main class="container mt-5 px-4">
    <h1 class="text-center fw-bold mb-4">PROGRES BELAJAR SISWA</h1>

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('dashboard-guru.hasil-belajar') }}" class="btn btn-secondary">← Kembali</a>
    </div>
    
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark text-center">
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>NISN</th>
                <th>Kelas</th>
                <th>Progres</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($progres as $item)
            <tr>
                <td class="text-center">{{ $no++ }}</td>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['nisn'] }}</td>
                <td>{{ $item['kelas'] }}</td>
                <td>
                    <div class="progress" style="height: 25px;">
                        <div class="progress-bar" role="progressbar" style="width: {{ $item['progres'] }}%;" aria-valuenow="{{ $item['progres'] }}" aria-valuemin="0" aria-valuemax="100">
                            {{ $item['progres'] }}%
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection