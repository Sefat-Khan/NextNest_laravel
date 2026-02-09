<x-app-layout>
@section('title', 'Contact Enquiries')

<div class="flex h-[calc(100% - 81px)] bg-gray-100">
    <!-- Mobile sidebar overlay -->
    <div id="mobileSidebar" class="fixed inset-0 z-40 bg-black/50 hidden md:hidden"></div>


    <!-- Main Content -->
    <main class="flex-1 p-4 md:p-6 bg-gray-100 text-black min-h-screen overflow-x-auto">

        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
            <h2 class="text-2xl font-bold">Contact Enquiries</h2>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-xl shadow overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-gray-200 text-black">
                    <tr>
                        <th class="p-3">ID</th>
                        <th class="p-3">Name</th>
                        <th class="p-3">Email</th>
                        <th class="p-3">Phone</th>
                        <th class="p-3">Status</th>
                        <th class="p-3 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y text-gray-800">
                    @forelse($enquiries as $enquiry)
                        <tr>
                            <td class="p-3">{{ $enquiry->id }}</td>
                            <td class="p-3">{{ $enquiry->name }}</td>
                            <td class="p-3">{{ $enquiry->email }}</td>
                            <td class="p-3">{{ $enquiry->phone ?? 'N/A' }}</td>
                            <td class="p-3">
                                @if($enquiry->status == 'new')
                                    <span class="px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded-full">New</span>
                                @elseif($enquiry->status == 'read')
                                    <span class="px-2 py-1 text-xs font-semibold text-white bg-green-500 rounded-full">Read</span>
                                @else
                                    <span class="px-2 py-1 text-xs font-semibold text-white bg-gray-500 rounded-full">Replied</span>
                                @endif
                            </td>
                            <td class="p-3 flex gap-2 items-center justify-center h-full mt-2">
                                <a href="{{ route('contactPreview', $enquiry->id) }}"
                                   class="text-white px-3 py-1 bg-orange-600 hover:bg-orange-500 transition-all duration-300 ease-in rounded-[5px] font-bold">
                                    Preview
                                </a>
                                <a href="{{ route('contactEdit', $enquiry->id) }}"
                                   class="text-white px-3 py-1 bg-green-600 hover:bg-green-500 transition-all duration-300 ease-in rounded-[5px] font-bold">
                                    Edit
                                </a>
                                <form action="{{ route('contactDestroy', $enquiry->id) }}" method="POST"
                                      onsubmit="return confirm('Are you sure?')" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="text-white px-3 py-1 bg-red-600 hover:bg-red-500 transition-all duration-300 ease-in rounded-[5px] font-bold">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-4 text-center text-gray-500">
                                No enquiries found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $enquiries->links() }}
        </div>
    </main>
</div>



</x-app-layout>
