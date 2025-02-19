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
        'name',
    ];
}

