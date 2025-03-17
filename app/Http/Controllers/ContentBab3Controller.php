<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Progress;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContentBab3Controller extends Controller
{
    public function npm()
    {
        $prevUrl = null;
        $nextUrl = '/npm/mengelola-projek-dengan-npm';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 16;

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

        return view('content.bab-3.npm',compact('prevUrl','nextUrl'));
    }
    public function mengelolaProjekDenganNpm()
    {
        $prevUrl = '/npm/npm';
        $nextUrl = '/npm/mempublikasikan-paket-ke-npm';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 17;

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

        return view('content.bab-3.mengelola-projek-dengan-npm',compact('prevUrl','nextUrl'));
    }
    public function mempublikasikanPaketKeNpm()
    {
        $prevUrl = '/npm/mengelola-projek-dengan-npm';
        $nextUrl = '/npm/kuis';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 18;

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

        return view('content.bab-3.mempublikasikan-paket-ke-npm',compact('prevUrl','nextUrl'));
    }
    public function kuis(){

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 19;

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
        
        return view('content.bab-3.kuis-3');
    }
}
