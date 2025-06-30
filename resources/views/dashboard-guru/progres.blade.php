@extends('dashboard-guru.layouts.main')

@section('container')

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<main class="container px-4">
    <h1 class="fw-bold mb-4">Progres Belajar Siswa</h1>

    <div class="table-responsive">
        <table id="progresTable" class="table table-bordered table-sm align-middle">
            <thead class="table-primary text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>NISN</th>
                    <th>Kelas</th>
                    <th>Progres</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($progres as $index => $item)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['nisn'] }}</td>
                    <td>{{ $item['kelas'] }}</td>
                    <td>
                        @php
                            $progress = $item['progres'];
                            $progressColor = 'bg-danger';
                            if ($progress >= 80) {
                                $progressColor = 'bg-success';
                            } elseif ($progress >= 50) {
                                $progressColor = 'bg-warning';
                            }
                        @endphp
                        <div class="progress" style="height: 25px;">
                            <div class="progress-bar {{ $progressColor }} progress-bar-striped progress-bar-animated" 
                                 role="progressbar"
                                 style="width: {{ $progress }}%;" 
                                 aria-valuenow="{{ $progress }}" 
                                 aria-valuemin="0" 
                                 aria-valuemax="100">
                                {{ $progress == 100 ? 'Selesai' : $progress . '%' }}
                            </div>
                        </div>
                    </td>                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="alert alert-primary mt-4">
        <h5 class="fw-bold"><i class="bi bi-info-circle-fill me-2"></i>Informasi Perhitungan Progres Siswa</h5>
        <p>
            Progres belajar siswa dihitung berdasarkan <strong>aktivitas yang telah dikerjakan</strong> dan <strong>nilai (skor)</strong> yang diperoleh dari kuis dan evaluasi.
        </p>
        <ul>
            <li><strong>Latihan</strong> terdiri dari 9 aktivitas. Setiap latihan yang diselesaikan menambah progres sebesar <code>40% ÷ 9 ≈ 4.44%</code>.</li>
            <li><strong>Kuis & Evaluasi</strong> memberikan kontribusi maksimal 60%, yang dihitung berdasarkan skor masing-masing:</li>
        </ul>
        <table class="table table-sm table-bordered w-auto">
            <thead class="table-light">
                <tr><th>Komponen</th><th>Bobot</th><th>Rumus Hitung</th></tr>
            </thead>
            <tbody>
                <tr><td>Kuis 1</td><td>20%</td><td>(skor ÷ 100) × 20</td></tr>
                <tr><td>Kuis 2</td><td>20%</td><td>(skor ÷ 100) × 20</td></tr>
                <tr><td>Kuis 3</td><td>20%</td><td>(skor ÷ 100) × 20</td></tr>
                <tr><td>Evaluasi</td><td>40%</td><td>(skor ÷ 100) × 40</td></tr>
            </tbody>
        </table>
        <p class="mb-0"><strong>Catatan:</strong> Progres 100% hanya bisa dicapai jika seluruh latihan diselesaikan dan semua skor kuis & evaluasi bernilai sempurna (100).</p>
    </div>    
</main>

<script>
    $(document).ready(function () {
        $('#progresTable').DataTable({
            language: {
                search: "Cari:",
                lengthMenu: "Tampilkan _MENU_ data per halaman",
                zeroRecords: "Data tidak ditemukan",
                info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                infoEmpty: "Data tidak tersedia",
                infoFiltered: "(difilter dari total _MAX_ data)",
                paginate: {
                    first: "Awal",
                    last: "Akhir",
                    next: "Berikutnya",
                    previous: "Sebelumnya"
                },
            }
        });
    });
</script>

@endsection