<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Point;
use App\Models\Progress;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContentBab6Controller extends Controller
{
    public function modulHttp()
    {
        $prevUrl = null;
        $nextUrl = '/modul-http/fungsi-utama-modul-http';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 28;

        // Cek Aktivitas yang Complete
        $isCompleted = Point::where('user_id', $userId)
                        ->where('step_id', $stepId)
                        ->exists();

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

        return view('content.bab-6.modul-http',compact('prevUrl','nextUrl', 'isCompleted'));
    }
    public function fungsiUtamaModulHttp()
    {
        $prevUrl = '/modul-http/modul-http';
        $nextUrl = '/modul-http/contoh-kode-penggunaan-modul-http';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 29;

        // Cek Aktivitas yang Complete
        $isCompleted = Point::where('user_id', $userId)
                        ->where('step_id', $stepId)
                        ->exists();

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

        return view('content.bab-6.fungsi-utama-modul-http',compact('prevUrl','nextUrl', 'isCompleted'));
    }
    public function contohKodePenggunaanModulHttp()
    {
        $prevUrl = '/modul-http/fungsi-utama-modul-http';
        $nextUrl = '/modul-http/kuis';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 30;

        // Cek Aktivitas yang Complete
        $isCompleted = Point::where('user_id', $userId)
                        ->where('step_id', $stepId)
                        ->exists();

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

        return view('content.bab-6.contoh-kode-penggunaan-modul-http',compact('prevUrl','nextUrl', 'isCompleted'));
    }
    public function kuis(){

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 31;

        // Cek Aktivitas yang Complete
        $isCompleted = Point::where('user_id', $userId)
                        ->where('step_id', $stepId)
                        ->exists();

                        // Data Kuis
        $dataKuis = Point::where('user_id', $userId)
        ->where('step_id', $stepId)->first();

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
        
        return view('content.bab-6.kuis-6', compact('isCompleted', 'dataKuis'));
    }
}
