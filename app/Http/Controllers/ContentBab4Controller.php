<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Point;
use App\Models\Progress;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContentBab4Controller extends Controller
{
    public function modulEvent()
    {
        $prevUrl = null;
        $nextUrl = '/modul-event/fungsi-dan-manfaat-modul-event';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 20;

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

        return view('content.bab-4.modul-event',compact('prevUrl','nextUrl', 'isCompleted'));
    }
    public function fungsiDanManfaatModulEvent()
    {
        $prevUrl = '/modul-event/modul-event';
        $nextUrl = '/modul-event/contoh-kode-modul-event';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 21;

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

        return view('content.bab-4.fungsi-dan-manfaat-modul-event',compact('prevUrl','nextUrl', 'isCompleted'));
    }
    public function contohKodeModulEvent()
    {
        $prevUrl = '/modul-event/fungsi-dan-manfaat-modul-event';
        $nextUrl = '/modul-event/kuis';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 22;

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

        return view('content.bab-4.contoh-kode-modul-event',compact('prevUrl','nextUrl', 'isCompleted'));
    }
    public function kuis(){

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 23;

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
        
        return view('content.bab-4.kuis-4',compact('isCompleted', 'dataKuis'));
    }
}
