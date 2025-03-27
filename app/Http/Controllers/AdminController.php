<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PasswordResetsLog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function register(Request $request)
    {
        // Validasi input termasuk role
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Simpan user ke database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin',
            'class_token' => null,
        ]);

        return redirect()->route('login')->with('success', 'Registrasi Admin berhasil! Silakan login.');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function showResetPassword()
    {
        $users = User::with('passwordResetsLog')->get(); // Ambil semua user dengan relasi reset password
        return view('admin.reset-password', compact('users'));
    }

    public function resetPassword($id)
    {
        try {
            $user = User::findOrFail($id);
            $newPassword = strval(rand(100000, 999999)); // Konversi langsung ke string

            // Update atau buat log reset password
            PasswordResetsLog::updateOrCreate(
                ['user_id' => $user->id], // Cari berdasarkan user_id
                [
                    'new_password_hash' => $newPassword,
                    'user_changed_password' => 0, // Reset ke belum diubah oleh user
                ]
            );

            // Reset password user
            $user->update(['password' => Hash::make($newPassword)]);

            Log::info("Password berhasil direset untuk user ID: {$user->id}");

            return response()->json([
                'message' => "Password berhasil direset. Password baru: $newPassword",
            ]);

        } catch (\Exception $e) {
            // Simpan error ke laravel.log
            Log::error("Gagal mereset password untuk user ID: {$id}. Error: " . $e->getMessage());

            return response()->json([
                'message' => "Terjadi kesalahan saat mereset password.",
            ], 500);
        }
    }

    public function dataKelas()
    {
        // Ambil hanya user dengan role 'dosen' yang memiliki class_token
        $classes = User::select('id', 'name', 'class_token')
                        ->where('role', 'dosen') // Hanya user dengan role dosen
                        ->whereNotNull('class_token') // Pastikan class_token tidak null
                        ->get();
                        // dd($classes);
        return view('admin.data-kelas', compact('classes'));
    }

    public function destroy($id)
    {
        $dosen = User::where('id', $id)->where('role', 'dosen')->firstOrFail();
        $classToken = $dosen->class_token;

        if (!$classToken) {
            return response()->json(['message' => 'Kelas tidak ditemukan'], 404);
        }

        DB::transaction(function () use ($classToken) {
            // Hapus semua pengguna (dosen dan mahasiswa) yang memiliki class_token yang sama
            User::where('class_token', $classToken)->delete();
        });

        return response()->json(['message' => 'Kelas beserta dosen dan mahasiswa berhasil dihapus']);
    }
}
