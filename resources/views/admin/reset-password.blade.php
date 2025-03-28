@extends('layouts.base')

@section('container-base-content')
    <h1>Reset Password</h1>

    <table class="table table-bordered" id="tableNilai">
        <thead class="table-primary">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Token Kelas</th>
                <th>Password Baru</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->class_token }}</td>
                    <td>
                        @php
                            $resetLog = $user->passwordResetsLog;
                            if ($user->id == 3) {
                                // dd($resetLog);
                            }

                        @endphp

                        @if ($resetLog)
                            @if ($resetLog->user_changed_password)
                                <span class="text-success">Password Telah Diubah Oleh User</span>
                            @else
                                <span class="text-primary">{{ $resetLog->new_password_hash }}</span>
                            @endif
                        @else
                            <span class="text-danger">Belum Reset</span>
                        @endif
                    </td>
                    <td>
                        <button onclick="confirmReset({{ $user->id }})" class="btn btn-warning"><i class="bi bi-arrow-counterclockwise"></i> Reset Password</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        function confirmReset(userId) {
            Swal.fire({
                title: "Reset Password?",
                text: "Apakah Anda yakin ingin mereset password user ini?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, Reset!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`/admin/reset-password/${userId}`, {
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": "{{ csrf_token() }}"
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            Swal.fire({
                                title: "Berhasil!",
                                text: data.message,
                                icon: "success",
                                confirmButtonText: "OK"
                            }).then(() => {
                                location.reload(); // Reload halaman setelah sukses reset password
                            });
                        })
                        .catch(error => {
                            Swal.fire({
                                title: "Gagal!",
                                text: "Terjadi kesalahan saat mereset password.",
                                icon: "error",
                                confirmButtonText: "OK"
                            });
                            console.error(error);
                        });
                }
            });
        }

    </script>

    {{-- Data Tables --}}
<link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
<script>
    $(document).ready(function () {
        $('#tableNilai').DataTable({
            scrollX: true,    // Tambahkan horizontal scrolling
            
            pageLength: 10,   // Jumlah data per halaman
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
            columnDefs: [
                { searchable: false, targets: [2, 3, 4] } // Matikan pencarian untuk kolom Peringkat (0), Poin (3), dan Tindakan (4)
            ]
    });
    });
</script>
@endsection
