<x-app-layout>
@section('title', 'Contact Preview')

<div class="flex h-[calc(100% - 81px)] bg-gray-100">
    <!-- Mobile sidebar overlay -->
    <div id="mobileSidebar" class="fixed inset-0 z-40 bg-black/50 hidden md:hidden"></div>
    

    <!-- Main Content -->
    <main class="flex-1 p-6 bg-gray-100 text-black min-h-screen">
        <!-- Hamburger Button for mobile -->
        <button id="mobileSidebarBtn" class="md:hidden mb-4 py-2 px-4 bg-gray-200 text-blue-400 rounded-lg">☰</button>

        @if($enquiry)
        <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">

            <div class="p-6 space-y-4">

                <h1 class="text-2xl font-bold text-gray-800">Contact Enquiry Details</h1>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <span class="text-sm text-gray-500">Name</span>
                        <p class="text-lg font-semibold text-gray-800">{{ $enquiry->name }}</p>
                    </div>

                    <div>
                        <span class="text-sm text-gray-500">Email</span>
                        <p class="text-lg font-semibold text-gray-800">{{ $enquiry->email }}</p>
                    </div>

                    <div>
                        <span class="text-sm text-gray-500">Phone</span>
                        <p class="text-lg font-semibold text-gray-800">{{ $enquiry->phone ?? 'N/A' }}</p>
                    </div>

                    <div>
                        <span class="text-sm text-gray-500">Subject</span>
                        <p class="text-lg font-semibold text-gray-800">{{ $enquiry->subject ?? '—' }}</p>
                    </div>

                    <div class="md:col-span-2">
                        <span class="text-sm text-gray-500">Message</span>
                        <p class="text-lg font-semibold text-gray-800">{{ $enquiry->message }}</p>
                    </div>

                    <div class="md:col-span-2">
                        <span class="text-sm text-gray-500">Status</span>
                        <p class="text-lg font-semibold text-gray-800">
                            @if($enquiry->status == 'new')
                                <span class="px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-full">New</span>
                            @elseif($enquiry->status == 'read')
                                <span class="px-2 py-1 text-xs font-semibold text-white bg-green-500 rounded-full">Read</span>
                            @else
                                <span class="px-2 py-1 text-xs font-semibold text-white bg-gray-500 rounded-full">Replied</span>
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <!-- Footer Actions -->
            <div class="border-t p-4 flex justify-center md:justify-end gap-3 bg-gray-50">
                <a href="{{ route('contactIndex') }}"
                   class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 transition">
                    ← Back
                </a>

                <a href="{{ route('contactUpdate', $enquiry->id) }}"
                   class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition">
                    ✏️ Edit
                </a>
            </div>

        </div>
        @endif

    </main>
</div>



</x-app-layout>
