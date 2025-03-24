<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Badge extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'url', 'info', 'how'];

    public function earnedByUsers() {
        return $this->belongsToMany(User::class, 'badge_earned')->withTimestamps();
    }
}
