<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'area',
        'image',
        'status',
        'tag',
    ];

    public function scholarships()
    {
        return $this->hasMany(Scholarship::class);
    }

    public function allInfos()
{
    return $this->belongsToMany(AllInfo::class, 'all_info_university');
}
}
