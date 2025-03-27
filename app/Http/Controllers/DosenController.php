<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DosenController extends Controller
{
    public function index()
    {
        return view('guard.dashboard');
    }
    public function dataMahasiswa()
    {
        // Ambil class_token dosen yang sedang login
        $classToken = auth()->user()->class_token;

        // Ambil semua mahasiswa yang memiliki class_token yang sama dengan dosen
        $mahasiswa = User::where('users.class_token', $classToken) // Hanya mahasiswa di kelas dosen
        ->where('users.role', 'mahasiswa')
        ->leftJoin('points', 'users.id', '=', 'points.user_id') // Gabungkan dengan tabel points
        ->select('users.id', 'users.name', 'users.email')
        ->selectRaw('COALESCE(SUM(points.point_earned), 0) as total_poin') // Hitung total point_earned
        ->groupBy('users.id', 'users.name')
        ->orderByDesc('total_poin') // Urutkan dari nilai tertinggi
        ->get();


        return view('guard.data-mahasiswa', compact('mahasiswa'));
    }
    public function destroy($id)
    {
        // Cari mahasiswa berdasarkan ID
        $student = User::where('id', $id)->where('role', 'mahasiswa')->first();

        if (!$student) {
            return response()->json(['message' => 'Mahasiswa tidak ditemukan atau bukan mahasiswa'], 404);
        }

        DB::transaction(function () use ($student) {
            $student->delete();
        });

        return response()->json(['message' => 'Mahasiswa berhasil dihapus']);
    }
}
