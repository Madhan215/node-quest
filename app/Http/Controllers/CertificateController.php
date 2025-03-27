<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function generateCertificate()
    {
        $userId = auth()->id();

        $now = Carbon::now()->locale('id')->translatedFormat('d F Y');

        $data = [
            'name' => auth()->user()->name,
            'score' => rand(70, 100), // Simulasi nilai
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

        return redirect()->route('certificate.show', $userId);
    }

    public function showCertificate()
    {
        $userId = auth()->id();

        $certificate = Certificate::where('user_id', $userId)->first();

        if (!$certificate) {
            return view('certificates.show', ['certificate' => null]);
        }

        return view('certificates.show', compact('certificate'));
    }

    public function showTemplate()
    {
        $name = 'Mahasiswa';
        $score = '440';
        $completion_date = '26 Maret 2025';
        return view('certificates.template', compact('name', 'score', 'completion_date'));
    }

}
