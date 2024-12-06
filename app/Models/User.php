<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
        'identification',
        'role_id',
        'status',
        'license_expiration',
        'bus_code',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'identification',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function status() {
        return $this->belongsTo(Status::class, 'status'); 
    }


    // public function status()
    // {
    //     return $this->belongsTo(Status::class);
    // }

} 