<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\University;

class UniversityController extends Controller
{
    public function index(Request $request)
    {
        $query = University::query();

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

        $university = $query->paginate(8)->withQueryString();

        return view('admin.study_info.university.index', compact('university'));
    }

    public function create()
    {
        return view('admin.study_info.university.create');
    }

public function store(Request $request)
{
    // Validate inputs
    $validated = $request->validate([
    'name' => 'required|string|max:255',
    'area' => 'required|string|max:255',
    'image' => 'required|image|max:4096',
    'status' => 'required|in:active,inactive',
    'tag' => 'required'
]);

// force lowercase


    $data = [
        'name' => $validated['name'],
        'area' => $validated['area'],
        'status' => $validated['status'],
        'tag' => strtolower($validated['tag']),
    ];

    // Store main image
   if ($request->file('image')) {
    $file = $request->file('image');

    if ($file->isValid()) {
        $path = $file->store('study_infos', 'public');

        if (!$path) {
            return back()->withErrors(['image' => 'Image upload failed'])->withInput();
        }

        $data['image'] = $path;
    } else {
        return back()->withErrors(['image' => 'Invalid image file'])->withInput();
    }
}

    // Create AllInfo record
    $university = University::create($data);

    return redirect()->route('universityIndex')->with('success', 'University created successfully.');
}

    public function preview($id)
    {
        $university = University::findOrFail($id);
        return view('admin.study_info.university.preview', compact('university'));
    }

    public function edit($id)
    {
        $university = University::findOrFail($id);
        return view('admin.study_info.university.edit', compact('university'));
    }

    public function update(Request $request, $id)
    {
        $university = University::findOrFail($id);

       $validated = $request->validate([
    'name' => 'required|string|max:255',
    'area' => 'required|string|max:255',
    'image' => 'nullable|image|max:4096',
    'status' => 'required|in:active,inactive',
    'tag' => 'required'
]);

$data = [
        'name' => $validated['name'],
        'area' => $validated['area'],
        'status' => $validated['status'],
        'tag' => strtolower($validated['tag']),
    ];

        // Main image
if ($request->hasFile('image')) {
    if ($university->image) {
        Storage::disk('public')->delete($university->image);
    }

    $data['image'] = $request->file('image')
        ->store('study_infos', 'public');
}

        
        $university->update($data);

        return redirect()->route('universityIndex')
    ->with('success', 'University updated successfully.');
    }

    public function destroy($id)
{
    $university = University::findOrFail($id);

    if ($university->image) {
        Storage::disk('public')->delete($university->image);
    }

    $university->delete();

    return redirect()
        ->route('universityIndex')
        ->with('success', 'University deleted successfully.');
}
}
