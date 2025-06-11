@extends('dashboard-guru.layouts.main')

@section('container')
@include('sweetalert::alert')

<main class="container px-4">
    <h1 class="fw-bold mb-4">Atur KKM</h1>

    <table class="table table-bordered table-sm align-middle">
        <thead class="table-primary text-center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kuis</th>
                <th scope="col">KKM Saat Ini</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $kuis = [1, 2, 3, 4];
                $kkmMap = $kkmList->keyBy('kuis_id');
            @endphp

            @foreach ($kuis as $index => $id)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>{{ $id == 4 ? 'Evaluasi' : 'Kuis ' . $id }}</td>
                    <td class="text-center">
                        {{ $kkmMap[$id]->nilai_kkm ?? 'Belum diatur' }}
                    </td>
                    <td class="text-center">
                        <a href="{{ route('dashboard-guru.kkm.edit', $kkmMap[$id]->id ?? 0) }}" class="btn btn-primary btn-sm">Atur KKM</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection
