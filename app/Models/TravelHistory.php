<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelHistory extends Model
{
    use HasFactory;
    
    protected $guarded = null;

    protected $casts = [
        'date_time' => 'datetime',
    ];
}
