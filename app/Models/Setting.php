<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $guarded = null;

    const OFFICE_ADDRESS = 'office_address';
    const PHONE = 'phone';
}
