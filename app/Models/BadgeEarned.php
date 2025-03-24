<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BadgeEarned extends Model
{
    use HasFactory;

    protected $table = 'badge_earned';
    protected $fillable = ['user_id', 'badge_id', 'earned_at'];

    public $timestamps = false; // Tidak perlu pakai timestamps

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function badge() {
        return $this->belongsTo(Badge::class);
    }
}
