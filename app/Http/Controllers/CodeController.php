<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\Process\Process;

class CodeController extends Controller
{
    public function runCode(Request $request)
    {
        $nodePath = 'C:\Program Files\nodejs\node.exe';
        $code = $request->input('code');

        // Simpan kode ke file sementara
        $filename = public_path('code.js');
        file_put_contents($filename, $code);

        // Jalankan kode dengan Node.js
        $process = new Process([$nodePath, $filename]);
        $process->run();

        // Cek jika terjadi error
        if (!$process->isSuccessful()) {
            return response()->json([
                'output' => $process->getErrorOutput(), // Menampilkan error
                'status' => 'error'
            ], 400);
        }

        // Ambil output dari eksekusi
        return response()->json(['output' => $process->getOutput()]); // Kirim response JSON
    }

    public function term(Request $request)
    {
        $command = $request->input('command');

        // Cek apakah perintah adalah `php`
        if (strpos($command, 'php') === 0) {
            return response()->json(['output' => '⚠️ Perintah artisan tidak diizinkan!']);
        }

        // Amankan command untuk mencegah perintah berbahaya (opsional)
        $safeCommands = ['node', 'node -v', 'npm -v', 'echo', 'whoami', 'dir', 'cls', 'type', 'npm init'];
        $isSafe = false;
        foreach ($safeCommands as $allowed) {
            if (strpos($command, $allowed) === 0) {
                $isSafe = true;
                break;
            }
        }

        if ($command === 'clear' || $command === 'cls') {
            return response()->json(['output' => "\033[2J\033[H"]); // ANSI Escape untuk clear
        }

        if (!$isSafe) {
            return response()->json(['output' => 'Command tidak diizinkan'], 403);
        }

        // Jalankan perintah shell
        $output = shell_exec($command . ' 2>&1'); // Tangkap error juga

        return response()->json(['output' => $output]);
    }
}
