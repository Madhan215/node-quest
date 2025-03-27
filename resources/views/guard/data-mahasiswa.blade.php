@extends('layouts.base')

@section('container-base-content')

<h1>Data Mahasiswa</h1>

<!-- Input Search -->
<input type="text" id="search-input" class="form-control mb-3" placeholder="Cari nama atau email...">

<div class="container mt-4">
    <table class="table table-bordered" id="user-table">
        <thead class="table-primary">
            <tr>
                <th class="text-center" style="width: 10%;">Peringkat</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Poin</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mahasiswa as $index => $mhs)
                <tr id="row-{{ $mhs->id }}">
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $mhs->name }}</td>
                    <td>{{ $mhs->email }}</td>
                    <td>{{ $mhs->total_poin }}</td>
                    <td>
                        <button class="btn btn-danger btn-sm" onclick="deleteMhs({{ $mhs->id }})">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data mahasiswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

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

@endsection