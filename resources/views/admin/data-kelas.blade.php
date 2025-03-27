@extends('layouts.base')

@section('container-base-content')

<h1>Data Kelas</h1>

<table class="table table-bordered">
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
                <td>{{ $class->name }}</td>
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

@endsection
