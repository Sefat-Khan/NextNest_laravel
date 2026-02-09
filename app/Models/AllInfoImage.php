<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllInfoImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'study_info_id',
        'image',
    ];

    public function studyInfo()
    {
        return $this->belongsTo(AllInfo::class);
    }
}
