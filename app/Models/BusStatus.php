<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_name',
    ];

    // Definir la relación con los usuarios
    // public function users()
    // {
    //     return $this->hasMany(User::class);
    // }

    public function buses() {
        return $this->hasMany(Bus::class, 'status');
    }
}
