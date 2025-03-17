<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Progress extends Model
{
    use HasFactory;

    protected $table = 'progress';
    protected $fillable = ['user_id', 'step_id', 'completed', 'completed_at'];

    public $timestamps = false; // Tidak perlu pakai timestamps

    // Relasi ke user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
