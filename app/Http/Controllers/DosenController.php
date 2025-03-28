<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Point;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DosenController extends Controller
{
    public function index()
    {
        // Ambil class_token dosen yang sedang login
        $classToken = auth()->user()->class_token;

        $progressData = DB::table('users')
            ->leftJoin('points', function ($join) {
                $join->on('users.id', '=', 'points.user_id')
                    ->where('points.step_id', '=', 32);
            })
            ->where('users.class_token', $classToken) // Filter berdasarkan kelas
            ->where('role', 'mahasiswa')
            ->selectRaw('COUNT(DISTINCT users.id) as total_mahasiswa, COUNT(DISTINCT points.user_id) as sudah_mengerjakan')
            ->first();

        $totalMahasiswa = $progressData->total_mahasiswa;
        $sudahMengerjakan = $progressData->sudah_mengerjakan;

        // dd($totalMahasiswa, $sudahMengerjakan);

        return view('guard.dashboard', compact('totalMahasiswa', 'sudahMengerjakan'));
    }
    public function dataMahasiswa()
    {
        // Ambil class_token dosen yang sedang login
        $classToken = auth()->user()->class_token;

        // Ambil semua mahasiswa yang memiliki class_token yang sama dengan dosen
        // $mahasiswa = User::where('users.class_token', $classToken) // Hanya mahasiswa di kelas dosen
        //     ->where('users.role', 'mahasiswa')
        //     ->leftJoin('points', 'users.id', '=', 'points.user_id') // Gabungkan dengan tabel points
        //     ->select('users.id', 'users.name', 'users.email')
        //     ->selectRaw('COALESCE(SUM(points.point_earned), 0) as total_poin') // Hitung total point_earned
        //     ->groupBy('users.id', 'users.name')
        //     ->orderByDesc('total_poin') // Urutkan dari nilai tertinggi
        //     ->get();

        $mahasiswa = User::where('users.class_token', $classToken) // Hanya mahasiswa di kelas dosen
            ->where('users.role', 'mahasiswa')
            ->leftJoin(
                DB::raw('(SELECT user_id, SUM(point_earned) as total_poin FROM points GROUP BY user_id) as points'),
                'users.id',
                '=',
                'points.user_id'
            ) // Ambil total nilai dari tabel points
            ->leftJoin(
                DB::raw('(SELECT user_id, COUNT(DISTINCT step_id) as steps_done FROM points WHERE point_earned > 0 GROUP BY user_id) as progress'),
                'users.id',
                '=',
                'progress.user_id'
            ) // Hitung jumlah step yang telah dikerjakan mahasiswa
            ->select(
                'users.id',
                'users.name',
                'users.email',
                'users.profile_photo',
                DB::raw('COALESCE(points.total_poin, 0) as total_poin'), // Total poin mahasiswa
                DB::raw("COALESCE((progress.steps_done / 29) * 100, 0) as progress") // Hitung progress
            )
            ->orderByDesc('total_poin') // Urutkan dari nilai tertinggi
            ->get();


        return view('guard.data-mahasiswa', compact('mahasiswa'));
    }
    public function dataNilai()
    {

        $classToken = auth()->user()->class_token; // Ambil class_token dari dosen yang login

        // Ambil data mahasiswa dan nilai kuis
        // Query dengan JOIN
        $mahasiswa = DB::table('users')
            ->where('users.role', 'mahasiswa')
            ->where('users.class_token', $classToken) // Hanya mahasiswa di kelas dosen
            ->leftJoin('points as kuis1', function ($join) {
                $join->on('users.id', '=', 'kuis1.user_id')
                    ->where('kuis1.step_id', '=', 10);
            })
            ->leftJoin('points as kuis2', function ($join) {
                $join->on('users.id', '=', 'kuis2.user_id')
                    ->where('kuis2.step_id', '=', 15);
            })
            ->leftJoin('points as kuis3', function ($join) {
                $join->on('users.id', '=', 'kuis3.user_id')
                    ->where('kuis3.step_id', '=', 19);
            })
            ->leftJoin('points as kuis4', function ($join) {
                $join->on('users.id', '=', 'kuis4.user_id')
                    ->where('kuis4.step_id', '=', 23);
            })
            ->leftJoin('points as kuis5', function ($join) {
                $join->on('users.id', '=', 'kuis5.user_id')
                    ->where('kuis5.step_id', '=', 27);
            })
            ->leftJoin('points as kuis6', function ($join) {
                $join->on('users.id', '=', 'kuis6.user_id')
                    ->where('kuis6.step_id', '=', 31);
            })
            ->leftJoin('points as evaluasi', function ($join) {
                $join->on('users.id', '=', 'evaluasi.user_id')
                    ->where('evaluasi.step_id', '=', 32);
            })
            ->select(
                'users.id',
                'users.name',
                'users.email',
                'users.profile_photo',
                DB::raw('COALESCE(kuis1.point_earned * 5, "-") as kuis1'),
                DB::raw('COALESCE(kuis2.point_earned * 5, "-") as kuis2'),
                DB::raw('COALESCE(kuis3.point_earned * 5, "-") as kuis3'),
                DB::raw('COALESCE(kuis4.point_earned * 5, "-") as kuis4'),
                DB::raw('COALESCE(kuis5.point_earned * 5, "-") as kuis5'),
                DB::raw('COALESCE(kuis6.point_earned * 5, "-") as kuis6'),
                DB::raw('COALESCE(evaluasi.point_earned, "-") as evaluasi'),
                DB::raw('
            COALESCE(kuis1.point_earned * 5, 0) + 
            COALESCE(kuis2.point_earned * 5, 0) + 
            COALESCE(kuis3.point_earned * 5, 0) + 
            COALESCE(kuis4.point_earned * 5, 0) + 
            COALESCE(kuis5.point_earned * 5, 0) + 
            COALESCE(kuis6.point_earned * 5, 0) + 
            COALESCE(evaluasi.point_earned, 0) 
            AS total_earned
        ')
            )
            ->get();

        // dd($mahasiswa);


        return view('guard.data-nilai', compact('mahasiswa'));

    }
    public function exportNilai()
    {
        $classToken = auth()->user()->class_token; // Ambil class_token dari dosen yang login

        // Ambil data mahasiswa dan nilai kuis
        // Query dengan JOIN
        $mahasiswa = DB::table('users')
            ->where('users.role', 'mahasiswa')
            ->where('users.class_token', $classToken) // Hanya mahasiswa di kelas dosen
            ->leftJoin('points as kuis1', function ($join) {
                $join->on('users.id', '=', 'kuis1.user_id')
                    ->where('kuis1.step_id', '=', 10);
            })
            ->leftJoin('points as kuis2', function ($join) {
                $join->on('users.id', '=', 'kuis2.user_id')
                    ->where('kuis2.step_id', '=', 15);
            })
            ->leftJoin('points as kuis3', function ($join) {
                $join->on('users.id', '=', 'kuis3.user_id')
                    ->where('kuis3.step_id', '=', 19);
            })
            ->leftJoin('points as kuis4', function ($join) {
                $join->on('users.id', '=', 'kuis4.user_id')
                    ->where('kuis4.step_id', '=', 23);
            })
            ->leftJoin('points as kuis5', function ($join) {
                $join->on('users.id', '=', 'kuis5.user_id')
                    ->where('kuis5.step_id', '=', 27);
            })
            ->leftJoin('points as kuis6', function ($join) {
                $join->on('users.id', '=', 'kuis6.user_id')
                    ->where('kuis6.step_id', '=', 31);
            })
            ->leftJoin('points as evaluasi', function ($join) {
                $join->on('users.id', '=', 'evaluasi.user_id')
                    ->where('evaluasi.step_id', '=', 32);
            })
            ->select(
                'users.id',
                'users.name',
                'users.email',
                DB::raw('COALESCE(kuis1.point_earned * 5, "-") as kuis1'),
                DB::raw('COALESCE(kuis2.point_earned * 5, "-") as kuis2'),
                DB::raw('COALESCE(kuis3.point_earned * 5, "-") as kuis3'),
                DB::raw('COALESCE(kuis4.point_earned * 5, "-") as kuis4'),
                DB::raw('COALESCE(kuis5.point_earned * 5, "-") as kuis5'),
                DB::raw('COALESCE(kuis6.point_earned * 5, "-") as kuis6'),
                DB::raw('COALESCE(evaluasi.point_earned, "-") as evaluasi'),
                DB::raw('
            COALESCE(kuis1.point_earned * 5, 0) + 
            COALESCE(kuis2.point_earned * 5, 0) + 
            COALESCE(kuis3.point_earned * 5, 0) + 
            COALESCE(kuis4.point_earned * 5, 0) + 
            COALESCE(kuis5.point_earned * 5, 0) + 
            COALESCE(kuis6.point_earned * 5, 0) + 
            COALESCE(evaluasi.point_earned, 0) 
            AS total_earned
        ')
            )
            ->get();

        // Ambil waktu sekarang dalam format Indonesia
        Carbon::setLocale('id');
        $tanggalSekarang = Carbon::now()->translatedFormat('l, d F Y H:i:s');

        $namaDosen = User::where('users.role', 'dosen')->where('class_token', $classToken)->first();

        // Generate PDF
        $pdf = Pdf::loadView('guard.export-nilai', compact('mahasiswa', 'namaDosen', 'tanggalSekarang'));

        // Unduh file PDF
        return $pdf->download($classToken . '_Nilai_Mahasiswa_' . $tanggalSekarang . '.pdf');

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
