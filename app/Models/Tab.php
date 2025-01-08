<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class Tab extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'date',
        'name',
        'operator_id',
    ];

    protected static function booted()
    {
        static::creating(function ($tab) {
            // Verifica si el 'operator_id' corresponde a un usuario con 'role_id = 2'
            $user = User::find($tab->operator_id);

            if (!$user || $user->role_id != 2) {
                // Si el usuario no tiene role_id igual a 2, lanzamos una excepción
                throw new ValidationException('El usuario no tiene el rol requerido.');
            }
        });
    }
}

