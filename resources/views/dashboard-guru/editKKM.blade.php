@extends('dashboard-guru.layouts.main')

@section('container')
<main class="container mt-5 px-4">
    <h1 class="text-center fw-bold mb-4">Atur KKM untuk Kuis: {{ $kkm->kuis->nama }}</h1>

    <div class="d-flex justify-content-start mb-3">
        <a href="{{ route('dashboard-guru.kkm') }}" class="btn btn-secondary">← Kembali</a>
    </div>

    <form action="{{ route('dashboard-guru.kkm.update', $kkm->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nilai_kkm" class="form-label">Nilai KKM</label>
            <input type="number" class="form-control" id="nilai_kkm" name="nilai_kkm" value="{{ $kkm->nilai_kkm }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update KKM</button>
    </form>
</main>
@endsection
