<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Badge;
use App\Models\Point;
use App\Models\Progress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        if ($progressNow == 32) {
            if ($evaluasiExists) {
                $progressCompleted = 32;
            } else
                (
                    $progressCompleted = 31
                );
        } else
            (
                $progressCompleted = $progressNow
            );

        $badges = Badge::leftJoin('badge_earned', function ($join) use ($userId) {
            $join->on('badges.id', '=', 'badge_earned.badge_id')
                ->where('badge_earned.user_id', '=', $userId);
        })
            ->select('badges.*', 'badge_earned.earned_at')
            ->get();


        // Data Dosen
        $dosen = User::where('role', 'dosen')->where('class_token', auth()->user()->class_token)->first();

        // dd($dosen);

        return view('content.dashboard', compact('totalPoints', 'progressCompleted', 'badges', 'dosen'));
    }

    public function leaderboard()
    {
        $classToken = auth()->user()->class_token; // Ambil class_token dari dosen yang login
        // Ambil total poin setiap user, diurutkan dari terbesar ke terkecil
        $leaderboard = User::where('users.role', 'mahasiswa')
            ->where('users.class_token', $classToken) // Hanya mahasiswa di kelas dosen
            ->select(
                'users.id',
                'users.name',
                'users.profile_photo'
            )
            ->selectRaw('(SELECT COALESCE(SUM(p.point_earned), 0) FROM points p WHERE p.user_id = users.id) as total_points') // Subquery untuk total poin
            ->leftJoin('badge_earned', 'users.id', '=', 'badge_earned.user_id')
            ->leftJoin('badges', 'badge_earned.badge_id', '=', 'badges.id')
            ->selectRaw('GROUP_CONCAT(DISTINCT badges.url) as badges') // Ambil hanya badge unik
            ->groupBy('users.id', 'users.name', 'users.profile_photo')
            ->orderByDesc('total_points')
            ->get();




        // dd($leaderboard);

        return view('content.leaderboard', compact('leaderboard'));
    }
    public function dataNilai()
    {
        $classToken = auth()->user()->class_token; // Ambil class_token dari dosen yang login
        $userId = auth()->user()->id; // Ambil class_token dari dosen yang login

        // Ambil data mahasiswa dan nilai kuis
        // Query dengan JOIN
        $mahasiswa = DB::table('users')
            ->where('users.role', 'mahasiswa')
            ->where('users.class_token', $classToken) // Hanya mahasiswa di kelas dosen
            ->where('users.id', $userId) // Hanya mahasiswa di kelas dosen
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


        return view('content.data-nilai', compact('mahasiswa'));
    }
}
