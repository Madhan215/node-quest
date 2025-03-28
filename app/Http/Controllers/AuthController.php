<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PasswordResetsLog;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validasi input termasuk role
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required|in:dosen,mahasiswa',
            'class_token' => 'required_if:role,mahasiswa|string|max:255|exists:users,class_token',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Jika user adalah dosen, buat class_token random
        $classToken = $request->role === 'dosen' ? strtoupper(Str::random(6)) : $request->class_token;

        // Simpan user ke database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'class_token' => $classToken,
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('beranda')->with('success', 'Login berhasil!');
        }

        return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'Logout berhasil!');
    }
    public function updateName(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->save();

        return redirect()->route('beranda')->with('success', 'Nama berhasil diperbarui.');
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6|confirmed',
        ], [
            'password.required' => 'Password baru harus diisi!',
            'password.min' => 'Password minimal 6 karakter!',
            'password.confirmed' => 'Konfirmasi password tidak cocok!',
        ]);

        $user = Auth::user(); // Ambil user yang sedang login

        if (!$user) {
            return redirect()->back()->with('error', 'User tidak ditemukan!');
        }

        // Update password di tabel users
        $user->update([
            'password' => Hash::make($request->password),
        ]);

        // Update log reset password
        PasswordResetsLog::where('user_id', $user->id)->update([
            'user_changed_password' => true,
        ]);

        return redirect()->route('login')->with('success', 'Password berhasil diperbarui! Silakan login kembali.');
    }

    public function updateProfilePhoto(Request $request)
    {
        $request->validate([
            'cropped_image' => 'required'
        ]);

        $user = Auth::user();

        // Hapus foto lama jika ada
        if ($user->profile_photo) {
            Storage::delete('public/' . $user->profile_photo);
        }

        // Konversi base64 ke file
        $imageData = $request->cropped_image;
        $image = str_replace('data:image/jpeg;base64,', '', $imageData);
        $image = str_replace(' ', '+', $image);
        $imageName = 'avatars/' . uniqid() . '.jpg';

        // Simpan ke storage
        Storage::disk('public')->put($imageName, base64_decode($image));

        // Simpan ke database
        $user->update(['profile_photo' => $imageName]);

        return redirect()->route('beranda')->with('success', 'Foto profil berhasil diperbarui!');
    }

}
