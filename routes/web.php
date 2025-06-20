<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BadgeController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\EvaluasiController;
use App\Http\Controllers\TerminalController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContentBab1Controller;
use App\Http\Controllers\ContentBab2Controller;
use App\Http\Controllers\ContentBab3Controller;
use App\Http\Controllers\ContentBab4Controller;
use App\Http\Controllers\ContentBab5Controller;
use App\Http\Controllers\ContentBab6Controller;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;

// Auth Controller
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register.store');
Route::post('/login', [AuthController::class, 'login'])->name('login.auth');

// Update Nama dan Password
Route::post('/update-nama', [AuthController::class, 'updateName'])->name('update.nama');
Route::post('/update-password', [AuthController::class, 'updatePassword'])->name('update.auth');

// Update Foto Profil
Route::post('/update-profile-photo', [AuthController::class, 'updateProfilePhoto'])->name('profile.photo.update');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Untuk Admin
Route::get('/admin/register', function () {
    return view('admin.register');
})->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'register'])->name('register.admin.store');


// Home Controller
Route::get('/', [HomeController::class, 'beranda'])->name('beranda');
Route::get('/materi', [HomeController::class, 'materi'])->name('materi');
Route::get('/livenode', [HomeController::class, 'livenode'])->name('livenode');
Route::get('/perihal', [HomeController::class, 'perihal'])->name('perihal');

// Content Controller
Route::get('/start', [ContentController::class, 'start'])->name('start');

Route::middleware(['auth'])->group(function () {
    // Materi BAB 1
    Route::controller(ContentBab1Controller::class)->group(function () {
        Route::get('/pengenalan/javascript-runtime-nodejs', 'javascriptRuntimeNodejs')->name('bab1-1');
        Route::get('/pengenalan/pemrograman-sisi-klien-dan-sisi-server', 'pemrogramanSisiKlienDanSisiServer')->name('bab1-2');
        Route::get('/pengenalan/persiapan-belajar-nodejs', 'persiapanBelajarNodejs')->name('bab1-3');
        Route::get('/pengenalan/pemrograman-sinkronus-dan-asinkronus', 'pemrogramanSinkronusDanAsinkronus')->name('bab1-4');
        Route::get('/pengenalan/hubungan-nodejs-dengan-browser', 'hubunganNodejsDenganBrowser')->name('bab1-5');
        Route::get('/pengenalan/engine-v8', 'engineV8')->name('bab1-6');
        Route::get('/pengenalan/installasi-nodejs', 'installasiNodejs')->name('bab1-7');
        Route::get('/pengenalan/repl-read-evaluate-print-loop', 'replReadEvaluatePrintLoop')->name('bab1-8');
        Route::get('/pengenalan/membuat-projek-nodejs', 'membuatProjekNodejs')->name('bab1-9');
        Route::get('/pengenalan/kuis', 'kuis')->name('kuis-1');
    });

    // Materi BAB 2
    Route::controller(ContentBab2Controller::class)->group(function () {
        Route::get('/modul/pengertian-modul-pada-nodejs', 'pengertianModulPadaNodejs')->name('bab2-1');
        Route::get('/modul/fungsi-require', 'fungsiRequire')->name('bab2-2');
        Route::get('/modul/core-moduls', 'coreModuls')->name('bab2-3');
        Route::get('/modul/local-moduls', 'localModuls')->name('bab2-4');
        Route::get('/modul/kuis', 'kuis')->name('kuis-2');
    });

    // Materi BAB 3
    Route::controller(ContentBab3Controller::class)->group(function () {
        Route::get('/npm/npm', 'npm')->name('bab3-1');
        Route::get('/npm/mengelola-projek-dengan-npm', 'mengelolaProjekDenganNpm')->name('bab3-2');
        Route::get('/npm/mempublikasikan-paket-ke-npm', 'mempublikasikanPaketKeNpm')->name('bab3-3');
        Route::get('/npm/kuis', 'kuis')->name('kuis-3');
    });

    // Materi BAB 4
    Route::controller(ContentBab4Controller::class)->group(function () {
        Route::get('/modul-event/modul-event', 'modulEvent')->name('bab4-1');
        Route::get('/modul-event/fungsi-dan-manfaat-modul-event', 'fungsiDanManfaatModulEvent')->name('bab4-2');
        Route::get('/modul-event/contoh-kode-modul-event', 'contohKodeModulEvent')->name('bab4-3');
        Route::get('/modul-event/kuis', 'kuis')->name('kuis-4');
    });

    // Materi BAB 5
    Route::controller(ContentBab5Controller::class)->group(function () {
        Route::get('/modul-file-system/modul-file-system', 'moduleFileSystem')->name('bab5-1');
        Route::get('/modul-file-system/fungsi-dan-operasi-dasar-modul-file-system', 'fungsiDanOperasiDasarModulFileSystem')->name('bab5-2');
        Route::get('/modul-file-system/contoh-kode-modul-file-system', 'contohKodeModuleFileSystem')->name('bab5-3');
        Route::get('/modul-file-system/kuis', 'kuis')->name('kuis-5');
    });

    // Materi BAB 6
    Route::controller(ContentBab6Controller::class)->group(function () {
        Route::get('/modul-http/modul-http', 'modulHttp')->name('bab6-1');
        Route::get('/modul-http/fungsi-utama-modul-http', 'fungsiUtamaModulHttp')->name('bab6-2');
        Route::get('/modul-http/contoh-kode-penggunaan-modul-http', 'contohKodePenggunaanModulHttp')->name('bab6-3');
        Route::get('/modul-http/kuis', 'kuis')->name('kuis-6');
    });

    // Evaluasi

    Route::controller(EvaluasiController::class)->group(function () {
        Route::get('/evaluasi', 'index')->name('evaluasi');
    });

    // Menu Mahasiswa
    Route::controller(MahasiswaController::class)->group(function () {
        Route::get('/mahasiswa/dashboard', 'index')->name('mahasiswa.dashboard');
        Route::get('mahasiswa/leaderboard', [MahasiswaController::class, 'leaderboard'])->name('mahasiswa.leaderboard');
        Route::get('mahasiswa/data-nilai', [MahasiswaController::class, 'dataNilai'])->name('mahasiswa.data-nilai');

    });

    // Menu Dosen
    Route::controller(DosenController::class)->group(function () {
        Route::get('/dosen/dashboard', 'index')->name('dosen.dashboard');
        Route::get('/dosen/data-mahasiswa', 'dataMahasiswa')->name('dosen.data-mahasiswa');
        Route::get('/dosen/data-nilai', 'dataNilai')->name('dosen.data-nilai');
        Route::get('/dosen/export-nilai', 'exportNilai');
        Route::delete('/mahasiswa/{id}', 'destroy')->name('mahasiswa.destroy');
    });

    // Menu Admin

    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/dashboard', 'dashboard')->name('admin.dashboard');
        Route::get('/admin/reset-password', 'showResetPassword')->name('admin.reset.password');
        Route::post('/admin/reset-password/{id}', 'resetPassword');
        Route::get('/admin/data-kelas', 'dataKelas')->name('admin.data.kelas');
        Route::delete('/kelas/{id}', [AdminController::class, 'destroy'])->name('kelas.destroy');

    });

    // Halaman Reset Password
    Route::get('/reset-password', function () {
        return view('auth.reset-password');
    })->name('reset.password');

    // Halaman Rubah Nama
    Route::get('/change-name', function () {
        return view('auth.change-name');
    })->name('change.name');

    // Halaman Rubah foto Profil
    Route::get('/change-profil-photo', function () {
        return view('auth.change-profile');
    })->name('change.profile');

    // Point
    Route::controller(PointController::class)->group(function () {
        Route::post('/poinKuis', 'poinKuis');
        Route::post('/poinKuisNode', 'poinKuisNode');
        Route::post('/poinEvaluasi', 'poinEvaluasi');
    });

    // Badge
    Route::controller(BadgeController::class)->group(function () {
        Route::post('/badgeBab', 'poinKuis');
        Route::post('/badgeComplete', 'poinKuis');
        Route::post('/badgeTheFlash', 'poinKuis');
        Route::post('/badgePerfect', 'poinKuis');
    });

    // Sertifikat
    Route::controller(CertificateController::class)->group(function () {
        Route::get('/certificate/generate', 'generateCertificate')->name('certificate.generate');
        Route::get('/mahasiswa/certificate', 'showCertificate')->name('certificate.show');
        Route::get('/certificate/template', 'showTemplate')->name('certificate.template.show');
    });

    // Halaman Modul Ajar
    Route::get('/dosen/modul', function () {
        return view('content.modul');
    })->name('modul');

});

// ChatBot
Route::get('/chatbot', [ChatbotController::class, 'index'])->name('chatbot');
Route::post('/ask-chatbot', [ChatbotController::class, 'askChatbot']);

// Code
Route::get('/editor', function () {
    return view('home.editor');
})->name('editor');
Route::post('/run', [CodeController::class, 'runCode']);
Route::post('/execute', [CodeController::class, 'term']);

// Terminal
Route::get('/terminal', [TerminalController::class, 'index'])->name('terminal');
Route::post('/log-command', [TerminalController::class, 'logCommand']);
