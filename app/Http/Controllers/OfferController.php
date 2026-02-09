<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    public function index(Request $request)
{
    $query = Offer::query();

    // Search
    if ($search = $request->input('search')) {
        $query->where(function ($q) use ($search) {
            $q->where('title1', 'like', "%{$search}%")
              ->orWhere('title2', 'like', "%{$search}%");
        });
    }

    // Filter
    if ($filter = $request->input('filter')) {
        $query->where('status', $filter);
    }

    // ✅ Sorting
    $sortField = $request->get('sort', 'id');
    $sortDirection = $request->get('direction', 'asc');

    $allowedSorts = ['id', 'title1', 'title2'];

    if (in_array($sortField, $allowedSorts)) {
        $query->orderBy($sortField, $sortDirection);
    }

    // Pagination
    $offerInfos = $query->paginate(8)->withQueryString();

    return view('admin.popup.index', compact('offerInfos'));
}

    public function create()
    {
        return view('admin.popup.create');
    }

    public function store(Request $request)
    {
        $request->validate([
    'title1' => 'required|string|max:255',
    'title2' => 'required|string|max:255',
    'status' => 'required|in:active,inactive',
    'offers' => 'nullable|array',
    'offers.*' => 'string|max:255', // each offer item
    'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
]);

$imagePath = null;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('offers', 'public');
    }

        $offer = new Offer();
        $offer->title1 = $request->title1;
        $offer->title2 = $request->title2;
        $offer->status = $request->status;
        $offer->offers = $request->offers; // JSON string
        $offer->image = $imagePath;
        $offer->save();
        

        return redirect()->route('offerIndex')->with('success', 'Offer created successfully.');
    }

    public function preview($id)
    {
        $offerInfo = Offer::findOrFail($id);
        return view('admin.popup.preview', compact('offerInfo'));
    }

    // Show edit form
    public function edit($id)
    {
        $offerInfo = Offer::findOrFail($id);
        return view('admin.popup.edit', compact('offerInfo'));
    }

    // Update offer
    public function update(Request $request, $id)
{
    $request->validate([
        'title1' => 'required|string|max:255',
        'title2' => 'required|string|max:255',
        'status' => 'required|in:active,inactive',
        'offers' => 'nullable|array',
        'offers.*' => 'string|max:255',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $offer = Offer::findOrFail($id);

    $data = [
        'title1' => $request->title1,
        'title2' => $request->title2,
        'status' => $request->status,
    ];

    if ($request->has('offers')) {
        $data['offers'] = $request->offers;
    }

    // ✅ Replace image only if new one uploaded
    if ($request->hasFile('image')) {

        // delete old image
        if ($offer->image && \Storage::disk('public')->exists($offer->image)) {
            \Storage::disk('public')->delete($offer->image);
        }

        $data['image'] = $request->file('image')->store('offers', 'public');
    }

    $offer->update($data);

    return redirect()->route('offerIndex')->with('success', 'Offer updated successfully.');
}

    // Delete offer
    public function destroy($id)
    {
        $offer = Offer::findOrFail($id);
        $offer->delete();

        return redirect()->route('offerIndex')->with('success', 'Offer deleted successfully.');
    }
}
