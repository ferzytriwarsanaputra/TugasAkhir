@extends('dashboard-guru.layouts.main')

@section('container')
@include('sweetalert::alert')

<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<main class="container px-4">
    <h1 class="fw-bold mb-4">Hasil Kuis</h1>

    <!-- Filter Kuis -->
    <div class="mb-3">
        <label for="filterKuis" class="form-label fw-semibold">Pilih Nilai:</label>
        <select id="filterKuis" class="form-select form-select-sm w-auto d-inline-block">
            <option value="">Semua Kuis</option>
            <option value="1">Kuis 1</option>
            <option value="2">Kuis 2</option>
            <option value="3">Kuis 3</option>
            <option value="4">Evaluasi</option>
        </select>
    </div>

    <div class="table-responsive">
        <table id="hasilKuisTable" class="table table-bordered table-sm align-middle">
            <thead class="table-primary text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>NISN</th>
                    <th>Kelas</th>
                    <th>Hari, Tanggal</th>
                    <th>Waktu Selesai</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($hasilKuis as $item)
                <tr data-kuisid="{{ $item->kuis_id }}">
                    <td class="text-center">{{ $no++ }}</td>
                    <td>{{ $item->siswa->nama }}</td>
                    <td>{{ $item->siswa->nisn }}</td>
                    <td>{{ $item->siswa->kelas }}</td>
                    <td>{{ $item->hari }}, {{ $item->tanggal }}</td>
                    <td>{{ $item->waktu }}</td>
                    <td>{{ $item->skor }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

<script>
    $(document).ready(function () {
        const table = $('#hasilKuisTable').DataTable({
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
                }
            },
            dom: '<"row mb-2"<"col-sm-6"l><"col-sm-6 text-end"f>>' +  // Atas: dropdown + search sejajar
                 'rt' +  // Tabel utama
                 '<"row mt-2"<"col-sm-6"i><"col-sm-6 text-end"p>>'  // Bawah: info + pagination sejajar
        });

        // Filter kuis berdasarkan kuis_id
        $('#filterKuis').on('change', function () {
            const selectedId = this.value;
            table.rows().every(function () {
                const row = $(this.node());
                const kuisId = row.data('kuisid');
                if (!selectedId || kuisId == selectedId) {
                    row.show();
                } else {
                    row.hide();
                }
            });
        });
    });
</script>
@endsection