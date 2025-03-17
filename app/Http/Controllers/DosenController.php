<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DosenController extends Controller
{
    public function index()
    {
        return view('guard.dashboard');
    }
    public function dataMahasiswa()
    {
        // Ambil class_token dosen yang sedang login
        $classToken = auth()->user()->class_token;

        // Ambil semua mahasiswa yang memiliki class_token yang sama dengan dosen
        $mahasiswa = User::where('class_token', $classToken)->where('role', 'mahasiswa')->get();

        return view('guard.data-mahasiswa', compact('mahasiswa'));
    }
}
