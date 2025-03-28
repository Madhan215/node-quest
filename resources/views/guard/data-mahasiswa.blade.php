@extends('layouts.base')

@section('container-base-content')
    <h1>Data Mahasiswa</h1>

    @if ($mahasiswa->isEmpty())
        <div class="alert alert-warning text-center" role="alert">
            ⚠️ Tidak ada mahasiswa yang tersedia.
        </div>
    @else
        <div class="mt-4">
            <table class="table table-bordered" id="tableNilai">
                <thead class="table-primary">
                    <tr>
                        <th class="text-center">Peringkat</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Progress</th>
                        <th>Poin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mahasiswa as $index => $mhs)
                        <tr id="row-{{ $mhs->id }}">
                            <td>{{ $index + 1 }}</td>
                            <td><img src="{{ $mhs->profilePhotoUrl }}" alt="Profile Photo"
                                    class="rounded-circle border border-primary ms-1" style="width: 25px; height: 25px;">
                                {{ $mhs->name }}</td>
                            <td>{{ $mhs->email }}</td>
                            <td class="text-center align-middle">
                                <div class="progress mx-auto" style="height: 15px">
                                    <div class="progress-bar bg-success d-flex align-items-center justify-content-center"
                                        role="progressbar" style="width: {{ $mhs->progress }}%;"
                                        aria-valuenow="{{ $mhs->progress }}" aria-valuemin="0" aria-valuemax="100">
                                        {{ round($mhs->progress, 2) }}%
                                    </div>
                                </div>
                            </td>
                            <td>{{ $mhs->total_poin }}</td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="deleteMhs({{ $mhs->id }})">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data mahasiswa.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    @endif
    <script>
        function deleteMhs(mhsId) {
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Mahasiswa ini akan dihapus! (Mahasiswa tidak dapat dikembalikan lagi!)",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`/mahasiswa/${mhsId}`, {
                            method: "DELETE",
                            headers: {
                                "X-CSRF-TOKEN": "{{ csrf_token() }}"
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            Swal.fire("Berhasil!", data.message, "success");
                            document.getElementById(`row-${mhsId}`).remove();
                        })
                        .catch(error => {
                            console.error(error);
                            Swal.fire("Error!", "Terjadi kesalahan saat menghapus mahasiswa.", "error");
                        });
                }
            });
        }

        // Fitur Searching
        document.getElementById('search-input').addEventListener('keyup', function() {
            let searchValue = this.value.toLowerCase();
            let rows = document.querySelectorAll("#user-table tbody tr");

            rows.forEach(row => {
                let name = row.children[0].textContent.toLowerCase();
                let email = row.children[1].textContent.toLowerCase();

                if (name.includes(searchValue) || email.includes(searchValue)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
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
                        targets: [0, 3, 4, 5]
                    } // Matikan pencarian untuk kolom Peringkat (0), Poin (3), dan Tindakan (4)
                ]
            });
        });
    </script>
@endsection
