@extends('dashboard-guru.layouts.main')

@section('container')
@include('sweetalert::alert')

<!-- DataTables & Buttons CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">

<!-- jQuery & DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<!-- DataTables Buttons JS -->
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

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
                    <th style="display: none;">Kuis ID</th> {{-- kolom tersembunyi --}}
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($hasilKuis as $item)
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td>{{ $item->siswa->nama }}</td>
                    <td>{{ $item->siswa->nisn }}</td>
                    <td>{{ $item->siswa->kelas }}</td>
                    <td>{{ $item->hari }}, {{ $item->tanggal }}</td>
                    <td>{{ $item->waktu }}</td>
                    <td>{{ $item->skor }}</td>
                    <td style="display: none;">{{ $item->kuis_id }}</td> {{-- kolom untuk filtering --}}
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
            dom: '<"row mb-2"<"col-sm-6"l><"col-sm-6 text-end"Bf>>' +
                 'rt' +
                 '<"row mt-2"<"col-sm-6"i><"col-sm-6 text-end"p>>',
            buttons: [
                {
                    extend: 'excelHtml5',
                    text: 'Export Excel',
                    className: 'btn btn-success btn-sm'
                },
                {
                    extend: 'csvHtml5',
                    text: 'Export CSV',
                    className: 'btn btn-info btn-sm'
                },
                {
                    extend: 'pdfHtml5',
                    text: 'Export PDF',
                    className: 'btn btn-danger btn-sm',
                    orientation: 'landscape',
                    pageSize: 'A4'
                },
                {
                    extend: 'print',
                    text: 'Print',
                    className: 'btn btn-secondary btn-sm'
                }
            ]
        });

        // Filter kuis berdasarkan kuis_id
        // Filter berdasarkan Kuis ID (kolom tersembunyi)
        $('#filterKuis').on('change', function () {
            const selectedId = this.value;
            if (selectedId) {
                table.column(7).search('^' + selectedId + '$', true, false).draw();  // kolom ke-7 (index ke-7) = kuis_id tersembunyi
            } else {
                table.column(7).search('').draw();
            }
        });
    });
</script>
@endsection