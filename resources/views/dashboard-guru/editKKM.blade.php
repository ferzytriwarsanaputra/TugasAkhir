@extends('dashboard-guru.layouts.main')

@section('container')
<main class="container px-4">
    @php
        $namaKuis = match($kkm->kuis_id) {
            1 => 'Kuis 1',
            2 => 'Kuis 2',
            3 => 'Kuis 3',
            4 => 'Evaluasi',
            default => 'Kuis Tidak Diketahui'
        };
    @endphp

    <h1 class="fw-bold mb-4">Atur Nilai KKM untuk {{ $namaKuis }}</h1>

    <div class="mb-3">
        <a href="{{ route('dashboard-guru.kkm') }}" class="btn btn-sm btn-secondary">← Kembali ke Daftar KKM</a>
    </div>

    <form action="{{ route('dashboard-guru.kkm.update', $kkm->id) }}" method="POST" class="mt-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nilai_kkm" class="form-label fw-semibold">Nilai Kriteria Ketuntasan Minimal (KKM)</label>
            <input 
                type="number" 
                class="form-control" 
                id="nilai_kkm" 
                name="nilai_kkm" 
                value="{{ $kkm->nilai_kkm }}" 
                placeholder="Masukkan nilai KKM antara 0–100" 
                min="0" 
                max="100" 
                required
            >
            <div class="form-text">Nilai KKM menentukan batas kelulusan untuk kuis ini.</div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</main>
@endsection