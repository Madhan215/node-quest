<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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

        return view('content.bab-1.javascript-runtime-nodejs', compact('prevUrl', 'nextUrl'));
    }
    public function pemrogramanSisiKlienDanSisiServer()
    {
        $prevUrl = '/pengenalan/javascript-runtime-nodejs';
        $nextUrl = '/pengenalan/persiapan-belajar-nodejs';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 2;

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

        return view('content.bab-1.pemrograman-sisi-klien-dan-sisi-server', compact('prevUrl', 'nextUrl'));
    }
    public function persiapanBelajarNodejs()
    {
        $prevUrl = '/pengenalan/pemrograman-sisi-klien-dan-sisi-server';
        $nextUrl = '/pengenalan/pemrograman-sinkronus-dan-asinkronus';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 3;

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

        return view('content.bab-1.persiapan-belajar-nodejs', compact('prevUrl', 'nextUrl'));
    }

    public function pemrogramanSinkronusDanAsinkronus()
    {
        $prevUrl = '/pengenalan/persiapan-belajar-nodejs';
        $nextUrl = '/pengenalan/hubungan-nodejs-dengan-browser';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 4;

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

        return view('content.bab-1.pemrograman-sinkronus-dan-asinkronus', compact('prevUrl', 'nextUrl'));
    }
    public function hubunganNodejsDenganBrowser()
    {
        $prevUrl = '/pengenalan/pemrograman-sinkronus-dan-asinkronus';
        $nextUrl = '/pengenalan/engine-v8';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 5;

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

        return view('content.bab-1.hubungan-nodejs-dengan-browser', compact('prevUrl', 'nextUrl'));
    }
    public function engineV8()
    {
        $prevUrl = '/pengenalan/hubungan-nodejs-dengan-browser';
        $nextUrl = '/pengenalan/installasi-nodejs';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 6;

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

        return view('content.bab-1.engine-v8', compact('prevUrl', 'nextUrl'));
    }
    public function installasiNodejs()
    {
        $prevUrl = '/pengenalan/engine-v8';
        $nextUrl = '/pengenalan/repl-read-evaluate-print-loop';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 7;

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

        return view('content.bab-1.installasi-nodejs', compact('prevUrl', 'nextUrl'));
    }
    public function replReadEvaluatePrintLoop()
    {
        $prevUrl = '/pengenalan/installasi-nodejs';
        $nextUrl = '/pengenalan/membuat-projek-nodejs';

        // Simpan progress otomatis
        $userId = auth()->id();
        $stepId = 8;

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

        return view('content.bab-1.repl-read-evaluate-print-loop', compact('prevUrl', 'nextUrl'));
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
        
        return view('content.bab-1.kuis-1');
    }
}