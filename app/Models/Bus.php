<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'status',
    ];

    public function status() {
        return $this->belongsTo(BusStatus::class, 'status'); 
    }


    // public function status()
    // {
    //     return $this->belongsTo(Status::class);
    // }
}
