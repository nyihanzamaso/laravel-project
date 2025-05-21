<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable= [
        'location', 
        'status',
        'owner',
        'phone',
        'email',
        'industry',
    ];
}
