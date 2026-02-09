<x-app-layout>
@section('title', 'Offer')

    <div class="flex h-[calc(100% - 81px)] bg-gray-100">
        


        <!-- Main Content -->
        <main class="flex-1 p-4 md:p-6 bg-gray-100 text-black min-h-screen overflow-x-auto">

    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
        <!-- Left: Search & Filter -->
        <form method="GET" class="flex flex-col md:flex-row gap-3 w-full md:w-auto">
    <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}" ...>
    <select name="filter" ...>
        <option value="">All</option>
        <option value="active" {{ request('filter')=='active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ request('filter')=='inactive' ? 'selected' : '' }}>Inactive</option>
    </select>
    <button type="submit" class="bg-blue-600 text-white px-3 rounded">Apply</button>
</form>

<div class="flex flex-wrap justify-between items-center w-full md:w-auto gap-2">


<!-- Right: Create Button -->
        <a href="{{ route('offerCreate') }}" 
           class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
            ➕ Create Offer
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
        <!-- ID -->
        <th class="p-3 cursor-pointer">
            <a class="flex items-center gap-1"
               href="{{ route('offerIndex', array_merge(request()->all(), [
                    'sort' => 'id',
                    'direction' => ($currentSort === 'id' && $currentDirection === 'asc') ? 'desc' : 'asc'
               ])) }}">
                ID <span>{{ sortIcon('id', $currentSort, $currentDirection) }}</span>
            </a>
        </th>

        <!-- Image -->
        <th class="p-3">Image</th>

        <!-- Title 1 -->
<th class="p-3 cursor-pointer">
    <a class="flex items-center gap-1"
       href="{{ route('offerIndex', array_merge(request()->all(), [
            'sort' => 'title1',
            'direction' => ($currentSort === 'title1' && $currentDirection === 'asc') ? 'desc' : 'asc'
       ])) }}">
        Title 1 <span>{{ sortIcon('title1', $currentSort, $currentDirection) }}</span>
    </a>
</th>

<!-- Title 2 -->
<th class="p-3 cursor-pointer">
    <a class="flex items-center gap-1"
       href="{{ route('offerIndex', array_merge(request()->all(), [
            'sort' => 'title2',
            'direction' => ($currentSort === 'title2' && $currentDirection === 'asc') ? 'desc' : 'asc'
       ])) }}">
        Title 2 <span>{{ sortIcon('title2', $currentSort, $currentDirection) }}</span>
    </a>
</th>

        <!-- All Offer -->
        <th class="p-3">All Offer</th>

        <!-- Action -->
        <th class="p-3">Action</th>
    </tr>
</thead>
            <tbody class="divide-y text-gray-800">
                @foreach($offerInfos as $info)
                    <tr>
                        <td class="p-3">{{ $info->id }}</td>
                        <td class="p-3">
                            <img src="{{ asset('storage/' . $info->image) }}" alt="Image" class="w-12 h-12 rounded">
                        </td>
                        <td class="p-3">
                            {{$info->title1}}
                        </td>
                        <td class="p-3">{{ $info->title2 }}</td>
                        
                        <td class="p-3"><ul class="list-disc">
                            @if($info->offers)
                        @foreach($info->offers as $offer)
                    <li class="mt-1">
                        {{$offer}}</li>
                    @endforeach
                @endif</ul></td>
                        <td class="p-3 flex gap-2 items-center justify-center h-full mt-4">
                            <a href="{{ route('offerPreview', $info->id) }}" 
                               class="text-white px-3 py-1 bg-orange-600 hover:bg-orange-500 transition-all duration-300 ease-in rounded-[5px] font-bold">Preview</a>
                               <a href="{{ route('offerEdit', $info->id) }}" 
                               class="text-white px-3 py-1 bg-green-600 hover:bg-green-500 transition-all duration-300 ease-in rounded-[5px] font-bold">Edit</a>
                               <form action="{{ route('offerDestroy', $info->id) }}" method="POST" 
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
        {{ $offerInfos->links() }}
    </div>
</main>
    </div>



</x-app-layout>