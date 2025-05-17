<?php

namespace App\Http\Controllers;

use App\Models\Badge;
use App\Models\BadgeEarned;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function index()
    {
        return view('chatbot');
    }
    public function askChatbot(Request $request)
    {
        $question = $request->input('question');
        $kePrompt = $request->input('prompt');

        // Kirim pertanyaan ke API Flask
        $response = Http::post('https://chatbot-node-quest-production.up.railway.app/chatbot', [
            'question' => $question
        ]);

        $userId = auth()->id();
        $badgeRotelFriend = null;
        $status = 'error';

        // Dapat Badge Rotel Friend

        if ($kePrompt >= 3) {
            // Ini Badge nya
            $badgeRotelFriend = Badge::where('name', 'Rotel Friend')->first();

            // Mengetahui apakah sudah dapat atau belum
            $alreadyEarned = BadgeEarned::where('user_id', $userId)
                ->where('badge_id', $badgeRotelFriend->id)
                ->exists();

            // Jika belum, maka ini akan true karena pakai not.
            if (!$alreadyEarned) {
                BadgeEarned::create([
                    'user_id' => $userId,
                    'badge_id' => $badgeRotelFriend->id,
                    'earned_at' => now(),
                ]);

                // Kalau true tadai, ini akan success dan mendapatkan swal badge nya
                $status = 'success';
            }
        }

        return response()->json([
            'status' => $status,
            'response' => $response->json(),
            'name' => $badgeRotelFriend?->name,
            'info' => $badgeRotelFriend?->info,
            'url' => $badgeRotelFriend ? asset($badgeRotelFriend->url) : null,
        ]);
    }
}
