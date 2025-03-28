<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid black; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Data Nilai Mahasiswa</h2>
    <h3 style="text-align: center;">Node Quest</h3>
    <p>Nama Dosen : {{$namaDosen->name}}</p>
    <p>Kode Kelas : {{auth()->user()->class_token}}</p>
    <table>
        <thead>
            <tr>
                <th>No</th>
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
            @php
                $no = 1
            @endphp
            @foreach ($mahasiswa as $mhs)
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $mhs->name }}</td>
                <td>{{ $mhs->email }}</td>
                <td>{{ $mhs->kuis1 }}</td>
                <td>{{ $mhs->kuis2 }}</td>
                <td>{{ $mhs->kuis3 }}</td>
                <td>{{ $mhs->kuis4 }}</td>
                <td>{{ $mhs->kuis5 }}</td>
                <td>{{ $mhs->kuis6 }}</td>
                <td>{{ $mhs->evaluasi }}</td>
                <td><strong>{{ $mhs->total_earned / 7 }}</strong></td>
            </tr>
            @php
                $no++
            @endphp
            @endforeach
        </tbody>
    </table>
    <p style="text-align: right;">Waktu Export : {{$tanggalSekarang}}</p>
</body>
</html>
