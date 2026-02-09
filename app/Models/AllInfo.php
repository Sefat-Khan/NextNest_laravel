<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AllInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'tag', 
        'main_image',
        'description',
        'status',
    ];

    public function images()
{
    return $this->hasMany(AllInfoImage::class);
}

public function universities()
{
    return $this->belongsToMany(University::class, 'all_info_university');
}

public function scholarships()
{
    return $this->belongsToMany(Scholarship::class, 'all_info_scholarship');
}

}