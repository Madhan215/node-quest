<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller;

class ContentBab2Controller extends Controller
{
    public function pengertianModulPadaNodejs()
    {
        $prevUrl = null;
        $nextUrl = '/modul/fungsi-require';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 11;

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

        return view('content.bab-2.pengertian-modul-pada-nodejs',compact('prevUrl','nextUrl'));
    }
    public function fungsiRequire()
    {
        $prevUrl = '/modul/pengertian-modul-pada-nodejs';
        $nextUrl = '/modul/core-moduls';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 12;

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

        return view('content.bab-2.fungsi-require',compact('prevUrl','nextUrl'));
    }
    public function coreModuls()
    {
        $prevUrl = '/modul/fungsi-require';
        $nextUrl = '/modul/local-moduls';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 13;

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

        return view('content.bab-2.core-moduls',compact('prevUrl','nextUrl'));
    }
    public function localModuls()
    {
        $prevUrl = '/modul/core-moduls';
        $nextUrl = '/modul/kuis';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 14;

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

        return view('content.bab-2.local-moduls',compact('prevUrl','nextUrl'));
    }
    public function kuis(){

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 15;

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
        
        return view('content.bab-2.kuis-2');
    }
}
