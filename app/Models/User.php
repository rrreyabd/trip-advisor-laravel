<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
    
    // Relasi One-to-Many dengan model Forum
    public function forum()
    {
        return $this->hasMany(Forum::class, 'user_id');
    }
    // Relasi One-to-Many dengan model comment
    public function comment()
    {
        return $this->hasMany(Comment::class, 'user_id');
    }
    // Relasi One-to-Many dengan model photo
    public function photo()
    {
        return $this->hasMany(Photo::class, 'user_id');
    }
    // Relasi One-to-Many dengan model favorite
    public function favorite()
    {
        return $this->hasMany(Favorite::class, 'user_id');
    }
    // Relasi One-to-Many dengan model reply
    public function reply()
    {
        return $this->hasMany(Reply::class, 'user_id');
    }
    // Relasi One-to-Many dengan model trip_plan
    public function trip_plan()
    {
        return $this->hasMany(Trip_plan::class, 'user_id');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
}
