<?php

namespace App\Http\Controllers;

use App\Models\Point;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
            'point_earned' => $request->score, // 14 - 20
            'completed_at' => now(),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Anda mendapatkan ' . $request->score . ' Poin!'
        ]);
    }
}
