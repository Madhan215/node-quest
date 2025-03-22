<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Point;
use App\Models\Progress;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {// Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 1;

        // Cek apakah progress sudah ada atau buat baru
        $progress = Progress::firstOrNew([
            'user_id' => $userId,
            'step_id' => $stepId,
        ]);

        // Hanya update jika belum selesai
        if (!$progress->completed) {
            $progress->completed = true;
            $progress->completed_at = Carbon::now('Asia/Makassar'); // Set waktu ke WITA hanya sekali
            $progress->save();
        }
        $userId = auth()->id(); // Ambil ID user yang sedang login

        // Ambil total poin user yang login
        $totalPoints = Point::where('user_id', $userId)->sum('point_earned');

        // Kalau point nya ada 29, harus selesai evaluasi (Dapat Point)
        $evaluasiExists = Point::where('user_id', $userId)->where('step_id', 32)->exists();

        // Progress Completed (32 Step)
        $progressNow = Progress::where('user_id', $userId)->count();

        if($progressNow == 32){
            if($evaluasiExists){
                $progressCompleted = 32;
            }else(
                $progressCompleted = 31
            );
        }
        

        // dd($progressCompleted);

        return view('content.dashboard', compact('totalPoints', 'progressCompleted'));
    }

    public function leaderboard()
    {
        // Ambil total poin setiap user, diurutkan dari terbesar ke terkecil
        $leaderboard = User::where('role', 'mahasiswa')
            ->select('users.id', 'users.name')
            ->selectRaw('COALESCE(SUM(points.point_earned), 0) as total_points') // COALESCE untuk user tanpa points
            ->leftJoin('points', 'users.id', '=', 'points.user_id')
            ->groupBy('users.id', 'users.name')
            ->orderByDesc('total_points')
            ->get();

        return view('content.leaderboard', compact('leaderboard'));
    }
}
