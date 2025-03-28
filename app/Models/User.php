<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\PasswordResetsLog;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'class_token',
        'profile_photo'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function mahasiswa()
    {
        return $this->hasMany(User::class, 'class_token', 'class_token');
    }

    public function certificate()
    {
        return $this->hasOne(Certificate::class);
    }

    // app/Models/User.php
    public function passwordResetsLog()
    {
        return $this->hasOne(PasswordResetsLog::class);
    }
    public function profilePhotoUrl(): Attribute
    {
        return Attribute::get(
            fn() =>
            $this->profile_photo
            ? asset('storage/' . $this->profile_photo)
            : asset('img/avatars/default-avatar.png')
        );
    }
}
