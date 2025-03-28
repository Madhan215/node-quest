<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Point extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'step_id', 'point_earned', 'completed_at'];

    public $timestamps = false; // Tidak perlu pakai timestamps

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Fungsi untuk mengambil nilai berdasarkan step kuis
    public function scopeByStepKuis($query, array $steps)
    {
        return $query->whereIn('step_id', $steps);
    }
}
