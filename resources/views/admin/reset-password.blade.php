@extends('layouts.base')

@section('container-base-content')
    <h1>Reset Password</h1>

    <!-- Input Search -->
    <input type="text" id="search-input" class="form-control mb-3" placeholder="Cari nama atau email...">

    <table class="table-primary" id="user-table">
        <thead>
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
@endsection
