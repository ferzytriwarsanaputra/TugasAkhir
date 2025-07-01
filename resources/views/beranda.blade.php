@extends('layouts.main')

@section('container')
<div class="row align-items-center py-5">
    <div class="col-md-6">
        <h1 class="fw-bold display-4">CAHAYA & ALAT OPTIK</h1>
        <h2 class="text-muted">IPA Kelas VIII SMP</h2>

        <p class="fs-5">  
            "Bagaimana cahaya bisa membentuk bayangan dan membantu kita melihat?
            <strong>Yuk, kita pelajari!</strong>
        </p>

        <div class="d-flex align-items-center mt-4 gap-2 flex-wrap">
            @if(Auth::check())
                @if(Auth::user()->role == 'guru')
                    <a href="{{ url('/dashboard-guru') }}" class="btn btn-secondary">Halaman Guru</a>
                    <a href="{{ url('/dashboard-siswa') }}" class="btn btn-outline-primary">Halaman Materi</a>
                @elseif(Auth::user()->role == 'siswa')
                    <a href="{{ url('/dashboard-siswa') }}" class="btn btn-primary">Mulai Belajar</a>
                @endif
            @else
                <a href="{{ url('/login') }}" class="btn btn-primary">Mulai Belajar</a>
            @endif
        </div>        
    </div>
    
    <div class="col-md-6 text-center">
        <img src="img/img.png" alt="Ilustrasi Perubahan Wujud Benda" class="img-fluid" style="max-width: 80%;">
    </div>
</div>
@endsection