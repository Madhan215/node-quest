<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Point;
use App\Models\Progress;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EvaluasiController extends Controller
{
    public function index()
    {
        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 32;

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
        return view('content.evaluasi', compact('isCompleted', 'dataKuis'));
    }
}
