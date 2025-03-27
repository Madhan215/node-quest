<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Badge;
use App\Models\Point;
use App\Models\BadgeEarned;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PointController extends Controller
{
    public function poinKuis(Request $request)
    {
        // return response()->json(['request_data' => $request->all()], 200);

        $request->validate([
            'step_id' => 'required|integer',
        ]);

        // dd($request);

        $userId = auth()->id();

        // Cek apakah user sudah menyelesaikan step ini
        $existingPoint = Point::where('user_id', $userId)
            ->where('step_id', $request->step_id)
            ->first();

        if ($existingPoint) {
            return response()->json([
                'status' => 'error',
                'message' => 'Anda sudah mendapatkan poin untuk step ini.'
            ], 400);
        }

        // Tambahkan poin
        Point::create([
            'user_id' => $userId,
            'step_id' => $request->step_id,
            'point_earned' => 10, // Default 10 poin untuk kuis
            'completed_at' => now(),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Anda mendapatkan 10 Poin!'
        ]);
    }
    public function poinKuisNode(Request $request)
    {

        $request->validate([
            'step_id' => 'required|integer',
            'score' => 'required|integer',
            'timer' => 'required|integer'
        ]);

        Log::info('Request Data:', $request->all());


        // dd($request);

        $userId = auth()->id();

        // Cek apakah user sudah menyelesaikan step ini
        $existingPoint = Point::where('user_id', $userId)
            ->where('step_id', $request->step_id)
            ->first();

        if ($existingPoint) {
            return response()->json([
                'status' => 'error',
                'message' => 'Anda sudah mendapatkan poin untuk step ini.'
            ], 400);
        }

        // Mendapatkan Badge
        // Kuis 1 pada Step 10
        // Kuis 2 pada Step 15
        // Kuis 3 pada Step 19
        // Kuis 4 pada Step 23
        // Kuis 5 pada Step 27
        // Kuis 6 pada Step 31

        $stepKuis = [10, 15, 19, 23, 27, 31];

        $badgeNames = [
            10 => 'Knowledge',
            15 => 'Module',
            19 => 'NPM',
            23 => 'Event',
            27 => 'File System',
            31 => 'HTTP'
        ];

        if (in_array($request->step_id, $stepKuis)) {
            $badge_name = $badgeNames[$request->step_id]; // Ambil nama badge sesuai step_id

            $badge = Badge::where('name', $badge_name)->first(); // Menggunakan first() agar tidak return collection

            if (!$badge) {
                Log::info("Badge tidak ditemukan untuk: " . $badge_name);
                Log::info("Badge : " . $badge);
            } else {
                Log::info("Badge ditemukan: ", ['id' => $badge->id, 'name' => $badge->name]);

                BadgeEarned::create([
                    'user_id' => $userId,
                    'badge_id' => $badge->id,
                    'earned_at' => now(),
                ]);
            }
        }

        // Tambahkan poin
        Point::create([
            'user_id' => $userId,
            'step_id' => $request->step_id,
            'point_earned' => $request->score, // 14 - 20
            'completed_at' => now(),
        ]);

        // The Flash (Selesai kurang dari 10 Menit)
        $flash = false;
        $flashName = '';
        $flashInfo = '';
        $flashUrl = '';
        if ($request->timer >= 1200) {
            $badgeFlash = Badge::where('name', 'The Flash')->first();

            // Cek apakah user sudah punya badge ini
            $alreadyEarned = BadgeEarned::where('user_id', $userId)
                ->where('badge_id', $badgeFlash->id)
                ->exists();

            if (!$alreadyEarned) {
                BadgeEarned::create([
                    'user_id' => $userId,
                    'badge_id' => $badgeFlash->id,
                    'earned_at' => now(),
                ]);

                $flash = true;
                $flashName = $badgeFlash->name;
                $flashInfo = $badgeFlash->info;
                $flashUrl = $badgeFlash->url;
            }
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Anda mendapatkan ' . $request->score . ' Poin!',
            'name' => $badge->name, // Kirim nama badge
            'info' => $badge->info, // Kirim nama badge
            'url' => asset($badge->url), // URL gambar badge

            // Untuk flash
            'flash' => $flash,
            'flashName' => $flashName,
            'flashInfo' => $flashInfo,
            'flashUrl' => asset($flashUrl),
        ]);
    }
    public function poinEvaluasi(Request $request)
    {
        // return response()->json(['request_data' => $request->all()], 200);

        $request->validate([
            'step_id' => 'required|integer',
            'score' => 'required|integer',
        ]);

        // dd($request);

        $userId = auth()->id();

        // Cek apakah user sudah menyelesaikan step ini
        $existingPoint = Point::where('user_id', $userId)
            ->where('step_id', $request->step_id)
            ->first();

        if ($existingPoint) {
            return response()->json([
                'status' => 'error',
                'message' => 'Anda sudah mendapatkan poin untuk step ini.'
            ], 400);
        }

        // Tambahkan poin
        Point::create([
            'user_id' => $userId,
            'step_id' => $request->step_id,
            'point_earned' => $request->score, // 70 - 100
            'completed_at' => now(),
        ]);

        // Dapat Badge 100%

        $badgeBeginner = Badge::where('name', 'beginner')->first();

        BadgeEarned::create([
            'user_id' => $userId,
            'badge_id' => $badgeBeginner->id,
            'earned_at' => now(),
        ]);

        // Badge Max Perfect Point

        $totalPoints = Point::where('user_id', $userId)->sum('point_earned');

        Log::info("Total Points : " . $totalPoints);

        $perfect = false;
        $perfectName = '';
        $perfectInfo = '';
        $perfectUrl = '';

        if ($totalPoints == 440) {
            $badgePerfect = Badge::where('name', 'Perfect Max Point')->first();

            BadgeEarned::create([
                'user_id' => $userId,
                'badge_id' => $badgePerfect->id,
                'earned_at' => now(),
            ]);

            Log::info("Badge Perfect Max Point: " . $badgePerfect);

            $perfect = true;
            $perfectName = $badgePerfect->name;
            $perfectInfo = $badgePerfect->info;
            $perfectUrl = $badgePerfect->url;

        }

        // Generate Sertifikat

        $now = Carbon::now()->locale('id')->translatedFormat('d F Y');

        $data = [
            'name' => auth()->user()->name,
            'score' => $totalPoints, // Simulasi nilai
            'completion_date' => $now,
        ];

        // Buat PDF dengan mode Landscape
        $pdf = Pdf::loadView('certificates.template', $data)
            ->setPaper('a4', 'landscape'); // Atur ukuran kertas dan orientasi

        // Simpan ke dalam folder storage/app/public/certificates
        $fileName = 'Sertifikat Keahlian Dasar NodeJS_' . auth()->user()->name . '_' . $now . '.pdf';
        $filePath = 'certificates/' . $fileName;
        Storage::disk('public')->put($filePath, $pdf->output());

        // Simpan ke database
        Certificate::create([
            'user_id' => $userId,
            'file_path' => $filePath,
            'score' => $data['score'],
            'completion_date' => now(),
        ]);


        return response()->json([
            'status' => 'success',
            'message' => 'Anda mendapatkan ' . $request->score . ' Poin!',
            'name' => $badgeBeginner->name, // Kirim nama badge
            'info' => $badgeBeginner->info, // Kirim nama badge
            'url' => asset($badgeBeginner->url), // URL gambar badge

            // Untuk Max Perfect Point
            'perfect' => $perfect,
            'perfectName' => $perfectName,
            'perfectInfo' => $perfectInfo,
            'perfectUrl' => asset($perfectUrl),
        ]);
    }
}
