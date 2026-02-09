<?php

namespace App\Http\Controllers;

use App\Models\AllInfo;
use Illuminate\Http\Request;

class StudyController extends Controller
{
public function show($slug)
{
    $study = AllInfo::where('slug', $slug)->firstOrFail();
    return view('pages.study', compact('study'));
}
}
