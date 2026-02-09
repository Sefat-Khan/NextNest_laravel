<?php

namespace App\Http\Controllers;

use App\Models\Fevicon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeviconController extends Controller
{
    public function index()
    {
        $fevicon = Fevicon::latest()->first();
        return view('admin.settings.feviconAdd', compact('fevicon'));
    }

    public function store(Request $request)
    {
        $request->validate([
    'image' => 'required|image|mimes:png,jpg,jpeg,ico,svg|max:2048',
]);

        $file = $request->file('image');

        if ($file && $file->isValid()) {
            // Store new image
            $path = $file->store('fevicons', 'public'); // store in storage/app/public/fevicons

            // Get existing favicon
            $fevicon = Fevicon::latest()->first();

            if ($fevicon) {
                // Delete old image if exists
                if ($fevicon && $fevicon->image && Storage::disk('public')->exists($fevicon->image)) {
    Storage::disk('public')->delete($fevicon->image);
}
                $fevicon->update(['image' => $path]);
            } else {
                Fevicon::create(['image' => $path]);
            }

            return redirect()->back()->with('success', 'Favicon updated successfully!');
        }

        return redirect()->back()->withErrors(['image' => 'Invalid image file']);
    }
}

