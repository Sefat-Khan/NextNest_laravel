<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    // Allow mass assignment
    protected $fillable = [
        'title1',
        'title2',
        'status',
        'offers',
        'image',
    ];

    // Cast offers to array automatically
    protected $casts = [
        'offers' => 'array',
    ];
}
