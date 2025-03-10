<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Storage;

class TerminalController extends Controller
{
    protected static $nodeProcess = null;
    protected static $pipes = [];
    public function index()
    {
        return view('home.terminal');
    }

    public function logCommand(Request $request)
    {
        $command = $request->input('command');

        if (!$command) {
            return response()->json(['message' => 'Command kosong'], 400);
        }

        // Lokasi penyimpanan log
        $logPath = storage_path('logs/terminal.log');

        // Tulis log ke file
        file_put_contents($logPath, now() . " - Command: " . $command . PHP_EOL, FILE_APPEND);

        return response()->json(['message' => 'Log disimpan']);
    }


    public function executeNode(Request $request)
    {
        $command = $request->input('command');

        if (!self::$nodeProcess) {
            return response()->json(['output' => 'Node.js belum berjalan. Jalankan dulu.']);
        }

        fwrite(self::$pipes[0], $command . "\n");
        usleep(100000); // Tunggu output

        $output = stream_get_contents(self::$pipes[1]);

        return response()->json(['output' => $output]);
    }

}
