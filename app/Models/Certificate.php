<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'file_path',
        'score',
        'completion_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
