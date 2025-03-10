<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function index(){
        return view('chatbot');
    }
    public function askChatbot(Request $request)
    {
        $question = $request->input('question');

        // Kirim pertanyaan ke API Flask
        $response = Http::post('http://127.0.0.1:5000/chatbot', [
            'question' => $question
        ]);

        return response()->json($response->json());
    }
}
