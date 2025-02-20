<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyAssignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'tab_id', 
        'operator_id', 
        'assignment_date'];

    public function tab()
    {
        return $this->belongsTo(Tab::class);
    }

    public function operador()
    {
        return $this->belongsTo(User::class, 'operator_id');
    }
}
