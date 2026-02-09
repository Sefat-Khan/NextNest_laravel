<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use App\Models\University;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function index(Request $request)
    {
        $query = Scholarship::with('university');

        // Search
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Filter by status
        if ($request->has('filter') && $request->filter != '') {
            $query->where('status', $request->filter);
        }

        // Sorting
    $sortField = $request->get('sort', 'id');
    $sortDirection = $request->get('direction', 'asc');

    // Sort by university name
    if ($sortField === 'university') {
        $query->join('universities', 'scholarships.university_id', '=', 'universities.id')
              ->orderBy('universities.name', $sortDirection)
              ->select('scholarships.*');
    } else {
        // Allowed sortable fields
        $allowedSorts = ['id', 'name', 'amount', 'deadline'];

        if (in_array($sortField, $allowedSorts)) {
            $query->orderBy($sortField, $sortDirection);
        }
    }

    // Pagination → 7 per page ✅
    $scholarship = $query->paginate(7)->withQueryString();

        return view('admin.study_info.scholarship.index', compact('scholarship'));
    }

    public function create()
    {
        $universities = University::where('status', 'active')->get();
        return view('admin.study_info.scholarship.create', compact('universities'));
    }

    public function store(Request $request)
    {
        // Validate inputs
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'university_id' => 'required|exists:universities,id',
            'amount' => 'nullable|numeric|min:0',
            'deadline' => 'required|date',
            'status' => 'required|in:active,inactive',
        ]);

        Scholarship::create($validated);

        return redirect()->route('scholarshipIndex')->with('success', 'Scholarship created successfully.');
    }

    public function preview($id)
    {
        $scholarship = Scholarship::with('university')->findOrFail($id);
        return view('admin.study_info.scholarship.preview', compact('scholarship'));
    }

    public function edit($id)
    {
        $scholarship = Scholarship::findOrFail($id);
        $universities = University::where('status', 'active')->get();
        return view('admin.study_info.scholarship.edit', compact('scholarship', 'universities'));
    }

    public function update(Request $request, $id)
    {
        $scholarship = Scholarship::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'university_id' => 'required|exists:universities,id',
            'amount' => 'nullable|numeric|min:0',
            'deadline' => 'required|date',
            'status' => 'required|in:active,inactive',
        ]);

        $scholarship->update($data);

        return redirect()->route('scholarshipIndex')->with('success', 'Scholarship updated successfully.');
    }

    public function destroy($id)
    {
        $scholarship = Scholarship::findOrFail($id);
        $scholarship->delete();
        return redirect()->route('scholarshipIndex')->with('success', 'Scholarship deleted successfully.');
    }
}
