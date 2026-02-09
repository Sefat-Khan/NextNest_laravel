<?php

namespace App\Http\Controllers;

use App\Models\AllInfo;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AllInfoController extends Controller
{
    public function index(Request $request)
    {
        $query = AllInfo::query();

        // Search
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Filter
        if ($request->has('filter') && $request->filter != '') {
            $query->where('status', $request->filter);
        }

        // Sort
        $sortField = $request->get('sort', 'id');
        $sortDirection = $request->get('direction', 'asc');
        $query->orderBy($sortField, $sortDirection);

        $studyInfos = $query->paginate(10)->withQueryString();

        return view('admin.study_info.all_info.index', compact('studyInfos'));
    }

    public function create()
    {
        $universities = University::all();
        return view('admin.study_info.all_info.create', [
    'universities' => $universities,
    'all_info' => null
]);;
    }

public function store(Request $request)
{
    // Validate inputs
    $validated = $request->validate([
    'name' => 'required|string|max:255',
    'slug' => 'required|string|max:255|unique:all_infos,slug',
    'tag' => 'nullable|string|max:255',
    'main_image' => 'required|image|max:6144',
    'images' => 'nullable|array|max:4',
    'images.*' => 'image|max:5120',
    'description' => 'nullable|string|min:15',
    'status' => 'required|in:active,inactive',
    'universities' => 'nullable|array',
    'universities.*' => 'exists:universities,id',
    'scholarships' => 'nullable|array',
    'scholarships.*' => 'exists:scholarships,id',
]);

    $data = [
        'name' => $validated['name'],
        'slug' => $validated['slug'],
        'tag' => $validated['tag'] ?? null,
        'description' => $validated['description'],
        'status' => $validated['status'],
    ];

    // Store main image
   if ($request->file('main_image')) {
    $file = $request->file('main_image');

    if ($file->isValid()) {
        $path = $file->store('study_infos', 'public');

        if (!$path) {
            return back()->withErrors(['main_image' => 'Image upload failed'])->withInput();
        }

        $data['main_image'] = $path;
    } else {
        return back()->withErrors(['main_image' => 'Invalid image file'])->withInput();
    }
}

    // Create AllInfo record
    $allInfo = AllInfo::create($data);

    // Store additional images if any
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            if ($image->isValid()) {
                $allInfo->images()->create([
                    'image' => $image->store('study_infos', 'public')
                ]);
            }
        }
    }

    // Attach universities
if (!empty($validated['universities'])) {
    $allInfo->universities()->sync($validated['universities']);
}

if (!empty($validated['scholarships'])) {
    $allInfo->scholarships()->sync($validated['scholarships']);
}

    return redirect()->route('allInfoIndex')->with('success', 'Study Info created successfully.');
}

    public function preview($id)
    {
        $all_info = AllInfo::findOrFail($id);
        return view('admin.study_info.all_info.preview', compact('all_info'));
    }

    public function edit($id)
    {
        $all_info = AllInfo::with(['universities', 'scholarships'])->findOrFail($id);
    $universities = University::all();

    return view('admin.study_info.all_info.edit', compact(
        'all_info',
        'universities'
    ));
    }

    public function update(Request $request, $id)
    {
        $all_info = AllInfo::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'tag' => 'nullable|string|max:255',
            'main_image' => $all_info->main_image ? 'nullable|image' : 'required|image',
            'images' => 'nullable|array|max:4',
            'images.*' => 'image|max:5120',
            'description' => 'nullable|string|min:15',
            'status' => 'required|in:active,inactive',
            'universities' => 'nullable|array',
            'universities.*' => 'exists:universities,id',
            'scholarships' => 'nullable|array',
            'scholarships.*' => 'exists:scholarships,id',
        ]);

        // Main image
if ($request->hasFile('main_image')) {
    if ($all_info->main_image) {
        Storage::disk('public')->delete($all_info->main_image);
    }

    $data['main_image'] = $request->file('main_image')
        ->store('study_infos', 'public');
}

// Additional images (REPLACE OLD)
if ($request->hasFile('images')) {

    // Delete old images from storage + DB
    foreach ($all_info->images as $oldImage) {
        Storage::disk('public')->delete($oldImage->image);
        $oldImage->delete();
    }

    // Store new images
    foreach ($request->file('images') as $img) {
        $all_info->images()->create([
            'image' => $img->store('study_infos', 'public')
        ]);
    }
}

if (!empty($data['universities'])) {
    $all_info->universities()->sync($data['universities']);
} else {
    $all_info->universities()->detach();
}

if (!empty($data['scholarships'])) {
    $all_info->scholarships()->sync($data['scholarships']);
} else {
    $all_info->scholarships()->detach();
}

        
        $all_info->update($data);

        return redirect()->route('allInfoIndex')
    ->with('success', 'Study Info updated successfully.');
    }

    public function destroy($id)
    {
        $all_info = AllInfo::findOrFail($id);
        $all_info->delete();
        return redirect()->route('allInfoIndex')->with('success', 'Study Info deleted successfully.');
    }
}
