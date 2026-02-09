<x-app-layout>
    @section('title', 'Contact Edit')

    <div class="flex h-[calc(100% - 81px)] bg-gray-100">
        <div id="mobileSidebar" class="fixed inset-0 z-40 bg-black/50 hidden md:hidden"></div>

        <!-- Sidebar (unchanged) -->


        <!-- Main -->
        <main class="flex-1 p-6">
            <button id="mobileSidebarBtn" class="md:hidden mb-4 px-4 py-2 bg-gray-200 rounded">☰</button>

            <div class="max-w-4xl mx-auto bg-white p-6 rounded-xl shadow">
        <h2 class="text-2xl font-bold mb-6">Contact Enquiry</h2>

        <!-- READ ONLY DETAILS -->
        <div class="space-y-3 mb-6 text-gray-700">
            <p><strong>Name:</strong> {{ $enquiry->name }}</p>
            <p><strong>Email:</strong> {{ $enquiry->email }}</p>
            <p><strong>Phone:</strong> {{ $enquiry->phone ?? 'N/A' }}</p>
            <p><strong>Subject:</strong> {{ $enquiry->subject ?? 'N/A' }}</p>
            <p><strong>Message:</strong></p>
            <div class="p-3 bg-gray-100 rounded">
                {{ $enquiry->message }}
            </div>
        </div>

        <!-- STATUS UPDATE FORM -->
        <form action="{{ route('contactUpdate', $enquiry->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label class="block font-medium mb-1">Status</label>
            <select name="status" class="w-full border rounded px-3 py-2 mb-4">
                <option value="new" {{ $enquiry->status === 'new' ? 'selected' : '' }}>New</option>
                <option value="read" {{ $enquiry->status === 'read' ? 'selected' : '' }}>Read</option>
                <option value="replied" {{ $enquiry->status === 'replied' ? 'selected' : '' }}>Replied</option>
            </select>

            @error('status')
                <p class="text-red-500 text-sm mb-2">{{ $message }}</p>
            @enderror

            <div class="flex justify-end gap-3">
                <a href="{{ route('contactIndex') }}" class="px-4 py-2 bg-gray-300 rounded">
                    Back
                </a>
                <button class="px-4 py-2 bg-blue-600 text-white rounded">
                    Update Status
                </button>
            </div>
        </form>
    </div>
        </main>
    </div>


</x-app-layout>
