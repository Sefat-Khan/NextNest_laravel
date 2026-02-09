<?php

// app/Http/Controllers/ContactEnquiryController.php
namespace App\Http\Controllers;

use App\Models\ContactEnquiry;
use Illuminate\Http\Request;

class ContactEnquiryController extends Controller
{
    /** FRONTEND SUBMIT */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:50',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        ContactEnquiry::create($validated);

        return back()->with('success', 'Thank you! We will contact you soon.');
    }

    /** ADMIN LIST */
    public function index()
    {
        $enquiries = ContactEnquiry::latest()->paginate(10);
        return view('admin.contact.index', compact('enquiries'));
    }

    /** ADMIN PREVIEW */
    public function show($id)
    {
        $enquiry = ContactEnquiry::findOrFail($id);
        $enquiry->update(['status' => 'read']);

        return view('admin.contact.preview', compact('enquiry'));
    }

    public function edit($id)
    {
        $enquiry = ContactEnquiry::findOrFail($id);
        return view('admin.contact.edit', compact('enquiry'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:new,read,replied',
        ]);

        ContactEnquiry::findOrFail($id)->update($validated);

        return redirect()
            ->route('contactIndex')
            ->with('success', 'Status updated successfully');
    }

    /** ADMIN DELETE */
    public function destroy($id)
    {
        ContactEnquiry::findOrFail($id)->delete();
        return back()->with('success', 'Deleted successfully');
    }
}

