@extends('layouts.base')

@section('container-base-content')
    <h1>Data Kelas</h1>

    <table class="table table-bordered" id="tableNilai">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Dosen</th>
                <th>Kode Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($classes as $index => $class)
                <tr id="row-{{ $class->id }}">
                    <td>{{ $index + 1 }}</td>
                    <td><img src="{{ $class->profilePhotoUrl }}" alt="Profile Photo"
                            class="rounded-circle border border-primary ms-1" style="width: 25px; height: 25px;">
                        {{ $class->name }}</td>
                    <td>{{ $class->class_token }}</td>
                    <td>
                        <button class="btn btn-danger btn-sm" onclick="deleteClass({{ $class->id }})">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data kelas</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <script>
        function deleteClass(classId) {
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Kelas ini akan dihapus! (Kelas tidak dapat dikembalikan lagi!)",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`/kelas/${classId}`, {
                            method: "DELETE",
                            headers: {
                                "X-CSRF-TOKEN": "{{ csrf_token() }}"
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            Swal.fire("Berhasil!", data.message, "success");
                            document.getElementById(`row-${classId}`).remove();
                        })
                        .catch(error => {
                            console.error(error);
                            Swal.fire("Error!", "Terjadi kesalahan saat menghapus kelas.", "error");
                        });
                }
            });
        }
    </script>

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
                    targets: [0, 3]
                }]
            });
        });
    </script>
@endsection
