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