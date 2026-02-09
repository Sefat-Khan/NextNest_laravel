<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;
use App\Models\Scholarship;

class SearchController extends Controller
{
    public function search(Request $request)
{
    $term = trim($request->get('q'));

    if (!$term) {
        return response()->json([]);
    }

    $results = collect();

    // Universities
    $universities = University::where('name', 'like', "%{$term}%")
        ->get()
        ->map(function ($u) {
            $info = $u->allInfos()->first();

            if (!$info) return null;

            return [
                'type' => 'University',
                'name' => $u->name,
                'url'  => route('study', $info->slug),
            ];
        })
        ->filter();

    // Scholarships
    $scholarships = Scholarship::where('name', 'like', "%{$term}%")
    ->get()
    ->map(function ($s) {
        $info = $s->allInfos()->first();
        if (!$info) return null; // skip if no linked AllInfo
        return [
            'type' => 'Scholarship',
            'name' => $s->name,
            'url' => route('study', $info->slug),
        ];
    })
    ->filter();

    return response()->json(
        $universities->merge($scholarships)->values()
    );
}

}
