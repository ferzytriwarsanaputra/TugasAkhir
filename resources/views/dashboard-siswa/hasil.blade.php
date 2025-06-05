@extends('dashboard-siswa.layouts.main')

@section('container')
<div class="container-fluid">
    <div class="mb-4">
        <h2>Data Nilai</h2>
    </div>

    <table class="table table-bordered mt-3 text-center" style="border-radius: 8px; overflow: hidden;">
        <thead class="table-primary">
            <tr>
                <th>Kuis 1</th>
                <th>Kuis 2</th>
                <th>Kuis 3</th>
                <th>Evaluasi</th>
                <th>Rata-rata</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $nilai['kuis1'] }}</td>
                <td>{{ $nilai['kuis2'] }}</td>
                <td>{{ $nilai['kuis3'] }}</td>
                <td>{{ $nilai['evaluasi'] }}</td>
                <td>{{ $rataRata }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection