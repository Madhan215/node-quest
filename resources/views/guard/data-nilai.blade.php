@extends('layouts.base')

@section('container-base-content')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mb-0">Data Nilai</h1>
        @if (!$mahasiswa->isEmpty())
            <a href="/dosen/export-nilai" class="btn btn-primary"><i class="bi bi-download"></i> Export</a>
        @endif
    </div>
    @if ($mahasiswa->isEmpty())
        <div class="alert alert-warning text-center mt-2" role="alert">
            ⚠️ Tidak ada mahasiswa yang tersedia.
        </div>
    @else
        <table class="table table-bordered" id="tableNilai">
            <thead class="table-primary">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Kuis 1</th>
                    <th>Kuis 2</th>
                    <th>Kuis 3</th>
                    <th>Kuis 4</th>
                    <th>Kuis 5</th>
                    <th>Kuis 6</th>
                    <th>Evaluasi</th>
                    <th>Rata-rata</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mhs)
                    <tr>
                        <td> <img
                                src="{{ $mhs->profile_photo ? asset('storage/' . $mhs->profile_photo) : asset('img/avatars/default-avatar.png') }}"
                                alt="Profile Photo" class="rounded-circle border border-primary ms-1"
                                style="width: 25px; height: 25px;">
                            {{ $mhs->name }}</td>
                        <td>{{ $mhs->email }}</td>
                        <td>{{ $mhs->kuis1 }}</td>
                        <td>{{ $mhs->kuis2 }}</td>
                        <td>{{ $mhs->kuis3 }}</td>
                        <td>{{ $mhs->kuis4 }}</td>
                        <td>{{ $mhs->kuis5 }}</td>
                        <td>{{ $mhs->kuis6 }}</td>
                        <td>{{ $mhs->evaluasi }}</td>
                        <td>{{ $mhs->total_earned / 7 }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {{-- Data Tables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#tableNilai').DataTable({
                scrollX: true, // Tambahkan horizontal scrolling

                pageLength: 10, // Jumlah data per halaman
                language: {
                    search: "Cari:", // Label input pencarian
                    lengthMenu: "Tampilkan _MENU_ data per halaman",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    infoEmpty: "Tidak ada data yang tersedia",
                    infoFiltered: "(disaring dari _MAX_ data keseluruhan)",
                    zeroRecords: "Tidak ditemukan data yang sesuai",
                    paginate: {
                        first: "Pertama",
                        last: "Terakhir",
                        next: "Berikutnya",
                        previous: "Sebelumnya"
                    }
                },
                emptyTable: "Tidak ada data yang tersedia",
                columnDefs: [{
                        searchable: false,
                        targets: [2, 3, 4, 5, 6, 7, 8, 9]
                    } // Matikan pencarian untuk kolom Peringkat (0), Poin (3), dan Tindakan (4)
                ]
            });
        });
    </script>
@endsection
