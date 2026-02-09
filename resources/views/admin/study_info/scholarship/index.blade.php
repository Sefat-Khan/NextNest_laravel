<x-app-layout>
@section('title', 'Scholarship')

    <div class="flex h-[calc(100% - 81px)] bg-gray-100">
        <!-- Mobile sidebar overlay -->
        <div id="mobileSidebar" class="fixed inset-0 z-40 bg-black/50 hidden md:hidden"></div>


        <!-- Main Content -->
        <main class="flex-1 p-4 md:p-6 bg-gray-100 text-black min-h-screen overflow-x-auto">

    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
        <!-- Left: Search & Filter -->
        <form method="GET" class="flex flex-col md:flex-row gap-3 w-full md:w-auto">
            <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}"
                class="px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-400 flex-1 min-w-0">
            <select name="filter" class="px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-400">
                <option value="">All</option>
                <option value="active" {{ request('filter')=='active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ request('filter')=='inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition font-medium">
                Apply
            </button>
        </form>

<div class="flex flex-wrap justify-between items-center w-full md:w-auto gap-2">


<!-- Right: Create Button -->
        <a href="{{ route('scholarshipCreate') }}" 
           class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
            ➕ Create Scholarship
        </a>
</div>
        
    </div>

    <!-- Table -->
    <div class="bg-white rounded-xl shadow overflow-x-auto">
        <table class="w-full text-left text-sm">
            @php
    $currentSort = request('sort');
    $currentDirection = request('direction', 'asc');

    function sortIcon($field, $currentSort, $currentDirection) {
        if ($currentSort !== $field) {
            return '';
        }
        return $currentDirection === 'asc' ? '▲' : '▼';
    }
@endphp
            <thead class="bg-gray-200 text-black">
                <tr>
                    <th class="p-3 cursor-pointer">
    <a class="flex items-center gap-1"
       href="{{ route('scholarshipIndex', array_merge(request()->all(), [
            'sort' => 'id',
            'direction' => ($currentSort === 'id' && $currentDirection === 'asc') ? 'desc' : 'asc'
       ])) }}">
        ID <span>{{ sortIcon('id', $currentSort, $currentDirection) }}</span>
    </a>
</th>

                    
                    <th class="p-3 cursor-pointer">
    <a class="flex items-center gap-1"
       href="{{ route('scholarshipIndex', array_merge(request()->all(), [
            'sort' => 'name',
            'direction' => ($currentSort === 'name' && $currentDirection === 'asc') ? 'desc' : 'asc'
       ])) }}">
        Name <span>{{ sortIcon('name', $currentSort, $currentDirection) }}</span>
    </a>
</th>
<th class="p-3 cursor-pointer">
    <a class="flex items-center gap-1"
       href="{{ route('scholarshipIndex', array_merge(request()->all(), [
            'sort' => 'university',
            'direction' => ($currentSort === 'university' && $currentDirection === 'asc') ? 'desc' : 'asc'
       ])) }}">
        University <span>{{ sortIcon('university', $currentSort, $currentDirection) }}</span>
    </a>
</th>
<th class="p-3 cursor-pointer">
    <a class="flex items-center gap-1"
       href="{{ route('scholarshipIndex', array_merge(request()->all(), [
            'sort' => 'amount',
            'direction' => ($currentSort === 'amount' && $currentDirection === 'asc') ? 'desc' : 'asc'
       ])) }}">
        Amount <span>{{ sortIcon('amount', $currentSort, $currentDirection) }}</span>
    </a>
</th>
<th class="p-3 cursor-pointer">
    <a class="flex items-center gap-1"
       href="{{ route('scholarshipIndex', array_merge(request()->all(), [
            'sort' => 'deadline',
            'direction' => ($currentSort === 'deadline' && $currentDirection === 'asc') ? 'desc' : 'asc'
       ])) }}">
        Deadline <span>{{ sortIcon('deadline', $currentSort, $currentDirection) }}</span>
    </a>
</th>
                    <th class="p-3 text-center">Action</th>
                    
                </tr>
            </thead>
            <tbody class="divide-y text-gray-800">
                @foreach($scholarship as $info)
                    <tr>
                        <td class="p-3">{{ $info->id }}</td>
                        
                        <td class="p-3">{{ $info->name }}</td>
                        <td class="p-3">
    {{ $info->university->name ?? 'N/A' }}
</td>

<td class="p-3">
    {{ number_format($info->amount) }}
</td>

<td class="p-3">
    {{ \Carbon\Carbon::parse($info->deadline)->format('d M Y') }}
</td>
                        <td class="p-3 flex gap-2 items-center justify-center h-full mt-2">
                            <a href="{{ route('scholarshipPreview', $info->id) }}" 
                               class="text-white px-3 py-1 bg-orange-600 hover:bg-orange-500 transition-all duration-300 ease-in rounded-[5px] font-bold">Preview</a>
                               <a href="{{ route('scholarshipEdit', $info->id) }}" 
                               class="text-white px-3 py-1 bg-green-600 hover:bg-green-500 transition-all duration-300 ease-in rounded-[5px] font-bold">Edit</a>
                               <form action="{{ route('scholarshipDestroy', $info->id) }}" method="POST" 
                                  onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white px-3 py-1 bg-red-600 hover:bg-red-500 transition-all duration-300 ease-in rounded-[5px] font-bold">Delete</button>
                            </form>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $scholarship->links() }}
    </div>
</main>
    </div>

 
</x-app-layout>