@extends('dashboard-siswa.layouts.main')

@section('container')
<main class="container px-4">
    <div class="col-lg-8 mx-auto">
        <div class="bg-white rounded-4 shadow p-4 text-center border">

            <div class="text-white rounded-top py-2" style="background-color: #1363DF">
                <h4 class="m-0">
                    {{ $kuisId == 4 ? 'HASIL EVALUASI AKHIR' : 'HASIL KUIS ' . $kuisId }}
                </h4>                
            </div>            

            <div class="text-muted text-center mt-3">
                <small>{{ $hari }}, {{ $tanggal }} | {{ $waktu }}</small>
            </div>                       

            <div class="bg-light rounded-3 p-4 my-3 border" style="border-color: #1363DF;">
                <i class="bi bi-award-fill" style="font-size: 60px; color:#1363DF;"></i>
                <h5 class="mt-3 mb-1 fw-bold">{{ $nama }}</h5>
                <p class="fs-5"><strong>Skor : {{ $skor }}</strong></p>
            </div>

            <p>
                @if ($skor == 100)
                    <span class="text-success">Skor kamu sempurna! Tidak perlu mengulang kuis. Silakan lanjut ke materi berikutnya.</span>
                @elseif ($status === 'memenuhi')
                    <span class="text-success">Selamat nilaimu memenuhi KKM! Silakan pelajari materi selanjutnya.</span>
                @else
                    <span class="text-danger">Maaf, nilaimu belum memenuhi KKM. Silakan pelajari kembali materi dan ulangi kuis ini!</span>
                @endif
            </p>

            <div class="mt-3">
                @if ($skor == 100)
                    {{-- Skor sempurna: hanya tombol lanjut --}}
                    @if ($kuisId == 1)
                        <a href="/materi2/penglihatan-manusia" class="btn btn-primary">Lanjut ke Materi</a>
                    @elseif ($kuisId == 2)
                        <a href="/materi3/kamera" class="btn btn-primary">Lanjut ke Materi</a>
                    @elseif ($kuisId == 3)
                        <a href="/petunjuk-evaluasi/4" class="btn btn-primary">Lanjut ke Evaluasi Akhir</a>
                    @elseif ($kuisId == 4)
                        <a href="/" class="btn btn-primary">Kembali ke Dashboard</a>
                    @endif
            
                @elseif ($status === 'memenuhi')
                    {{-- Skor di atas KKM tapi tidak sempurna: dua tombol --}}
                    <div class="d-flex justify-content-center gap-2 flex-wrap">
                        @if ($kuisId == 1)
                            <a href="/materi2/penglihatan-manusia" class="btn btn-primary">Lanjut ke Materi</a>
                        @elseif ($kuisId == 2)
                            <a href="/materi3/kamera" class="btn btn-primary">Lanjut ke Materi</a>
                        @elseif ($kuisId == 3)
                            <a href="/petunjuk-evaluasi/4" class="btn btn-primary">Lanjut ke Evaluasi Akhir</a>
                        @elseif ($kuisId == 4)
                            <a href="/" class="btn btn-primary">Kembali ke Dashboard</a>
                        @endif
                    
                        @if ($kuisId == 4)
                            <a href="/evaluasi" class="btn btn-outline-danger">Ulangi Evaluasi</a>
                        @else
                            <a href="/kuis/{{ $kuisId }}" class="btn btn-outline-danger">Ulangi Kuis</a>
                        @endif
                    </div>                   
                @else
                    {{-- Skor di bawah KKM: tombol materi dan ulangi --}}
                    <div class="d-flex justify-content-center gap-2 flex-wrap">
                        @if ($kuisId == 1)
                            <a href="/materi1/sifat-cahaya" class="btn btn-outline-primary">Pelajari Materi</a>
                        @elseif ($kuisId == 2)
                            <a href="/materi2/penglihatan-manusia" class="btn btn-outline-primary">Pelajari Materi</a>
                        @elseif ($kuisId == 3)
                            <a href="/materi3/kamera" class="btn btn-outline-primary">Pelajari Materi</a>
                        @endif
                    
                        @if ($kuisId == 4)
                            <a href="/evaluasi" class="btn btn-danger">Ulangi Evaluasi</a>
                        @else
                            <a href="/kuis/{{ $kuisId }}" class="btn btn-danger">Ulangi Kuis</a>
                        @endif
                    </div>                    
                @endif
            </div>            
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
@endsection