<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Progress;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContentBab5Controller extends Controller
{
    public function moduleFileSystem()
    {
        $prevUrl = null;
        $nextUrl = '/modul-file-system/fungsi-dan-operasi-dasar-modul-file-system';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 24;

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
        
        return view('content.bab-5.modul-file-system',compact('prevUrl','nextUrl'));
    }
    public function fungsiDanOperasiDasarModulFileSystem()
    {
        $prevUrl = '/modul-file-system/modul-file-system';
        $nextUrl = '/modul-file-system/contoh-kode-modul-file-system';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 25;

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

        return view('content.bab-5.fungsi-dan-operasi-dasar-modul-file-system',compact('prevUrl','nextUrl'));
    }
    public function contohKodeModuleFileSystem()
    {
        $prevUrl = '/modul-file-system/fungsi-dan-operasi-dasar-modul-file-system';
        $nextUrl = '/modul-file-system/kuis';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 26;

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

        return view('content.bab-5.contoh-kode-modul-file-system',compact('prevUrl','nextUrl'));
    }
    public function kuis(){

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 27;

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
        
        return view('content.bab-5.kuis-5');
    }
}
