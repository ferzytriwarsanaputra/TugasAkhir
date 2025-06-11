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
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<main class="container px-4">
    <h1 class="fw-bold mb-4">Akun Siswa</h1>

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('dashboard-guru.tambahSiswa') }}" class="btn btn-success">Tambah Akun</a>
    </div>

    <div class="table-responsive">
        <table id="akunSiswaTable" class="table table-bordered table-sm align-middle">
            <thead class="table-primary text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NISN</th>
                    <th>Kelas</th>
                    <th>Sekolah</th>
                    <th>Status Belajar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $item)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nisn }}</td>
                    <td>{{ $item->kelas }}</td>
                    <td>{{ $item->sekolah }}</td>
                    <td class="text-center">
                        @if ($item->selesai)
                            <span class="badge bg-success">Selesai</span>
                        @else
                            <span class="badge bg-warning text-dark">Belum Selesai</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <a href="{{ route('dashboard-guru.siswa.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>

                        <!-- Tombol Hapus pakai SweetAlert -->
                        <form action="{{ route('dashboard-guru.siswa.destroy', $item->id) }}" method="POST" class="d-inline form-hapus">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm btn-konfirmasi">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

<script>
    $(document).ready(function () {
        $('#akunSiswaTable').DataTable({
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

        // SweetAlert konfirmasi hapus
        $('.btn-konfirmasi').click(function (e) {
            e.preventDefault();
            let form = $(this).closest('.form-hapus');

            Swal.fire({
                title: 'Yakin hapus?',
                text: "Data siswa akan dihapus secara permanen.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
@endsection