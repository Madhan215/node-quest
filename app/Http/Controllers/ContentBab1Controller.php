<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Point;
use App\Models\Progress;
use Illuminate\Http\Request;

class ContentBab1Controller extends Controller
{
    public function javascriptRuntimeNodejs()
    {
        $prevUrl = null;
        $nextUrl = '/pengenalan/pemrograman-sisi-klien-dan-sisi-server';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 1;

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

        return view('content.bab-1.javascript-runtime-nodejs', compact('prevUrl', 'nextUrl', 'isCompleted'));
    }
    public function pemrogramanSisiKlienDanSisiServer()
    {
        $prevUrl = '/pengenalan/javascript-runtime-nodejs';
        $nextUrl = '/pengenalan/persiapan-belajar-nodejs';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 2;

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

        return view('content.bab-1.pemrograman-sisi-klien-dan-sisi-server', compact('prevUrl', 'nextUrl', 'isCompleted'));
    }
    public function persiapanBelajarNodejs()
    {
        $prevUrl = '/pengenalan/pemrograman-sisi-klien-dan-sisi-server';
        $nextUrl = '/pengenalan/pemrograman-sinkronus-dan-asinkronus';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 3;

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

        return view('content.bab-1.persiapan-belajar-nodejs', compact('prevUrl', 'nextUrl', 'isCompleted'));
    }

    public function pemrogramanSinkronusDanAsinkronus()
    {
        $prevUrl = '/pengenalan/persiapan-belajar-nodejs';
        $nextUrl = '/pengenalan/hubungan-nodejs-dengan-browser';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 4;

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

        return view('content.bab-1.pemrograman-sinkronus-dan-asinkronus', compact('prevUrl', 'nextUrl', 'isCompleted'));
    }
    public function hubunganNodejsDenganBrowser()
    {
        $prevUrl = '/pengenalan/pemrograman-sinkronus-dan-asinkronus';
        $nextUrl = '/pengenalan/engine-v8';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 5;

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

        return view('content.bab-1.hubungan-nodejs-dengan-browser', compact('prevUrl', 'nextUrl', 'isCompleted'));
    }
    public function engineV8()
    {
        $prevUrl = '/pengenalan/hubungan-nodejs-dengan-browser';
        $nextUrl = '/pengenalan/installasi-nodejs';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 6;

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

        return view('content.bab-1.engine-v8', compact('prevUrl', 'nextUrl', 'isCompleted'));
    }
    public function installasiNodejs()
    {
        $prevUrl = '/pengenalan/engine-v8';
        $nextUrl = '/pengenalan/repl-read-evaluate-print-loop';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 7;

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

        return view('content.bab-1.installasi-nodejs', compact('prevUrl', 'nextUrl', 'isCompleted'));
    }
    public function replReadEvaluatePrintLoop()
    {
        $prevUrl = '/pengenalan/installasi-nodejs';
        $nextUrl = '/pengenalan/membuat-projek-nodejs';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 8;

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

        return view('content.bab-1.repl-read-evaluate-print-loop', compact('prevUrl', 'nextUrl', 'isCompleted'));
    }
    public function membuatProjekNodejs()
    {
        $prevUrl = '/pengenalan/repl-read-evaluate-print-loop';
        $nextUrl = '/pengenalan/kuis';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 9;

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

        return view('content.bab-1.membuat-projek-nodejs', compact('prevUrl', 'nextUrl'));
    }
    public function kuis()
    {
        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 10;

        // Cek Aktivitas yang Complete
        $isCompleted = Point::where('user_id', $userId)
            ->where('step_id', $stepId)
            ->exists();

        // Data Kuis
        $dataKuis = Point::where('user_id', $userId)
            ->where('step_id', $stepId)->first();

        // dd($dataKuis->point_earned);

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
        return view('content.bab-1.kuis-1', compact('isCompleted', 'dataKuis'));
    }
}