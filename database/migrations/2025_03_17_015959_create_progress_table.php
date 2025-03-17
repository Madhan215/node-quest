<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // ID mahasiswa
            $table->integer('step_id'); // Mengacu pada step di tabel chapters
            $table->boolean('completed')->default(false); // Status selesai atau tidak
            $table->timestamp('completed_at')->nullable(); // Waktu penyelesaian
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('progress');
    }
};
