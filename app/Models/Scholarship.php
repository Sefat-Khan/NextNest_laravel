<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'university_id',
        'amount',
        'deadline',
        'status',
    ];

    protected $casts = [
        'deadline' => 'date',
        'amount' => 'decimal:2',
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function allInfos()
{
    return $this->belongsToMany(AllInfo::class, 'all_info_scholarship');
}
}
