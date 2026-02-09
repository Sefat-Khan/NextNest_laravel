<x-app-layout>
    @section('title', 'All Info Preview')

    <div class="flex h-[calc(100% - 81px)] bg-gray-100">
        


        <!-- Main Content -->
        <main class="flex-1 p-6 bg-gray-100 text-black min-h-screen">
        

    @if($all_info)
    <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">

        <!-- Header Image -->
        <div class="relative">
            <img 
                src="{{ asset('storage/' . $all_info->main_image) }}" 
                alt="{{ $all_info->name }}"
                class="w-full h-72 object-cover"
            />
            <div class="absolute inset-0 bg-black/30"></div>
            <h1 class="absolute bottom-6 left-6 text-3xl font-bold text-white">
                {{ $all_info->name }}
            </h1>
        </div>

        <!-- Content -->
        <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Left: Info -->
            <div class="md:col-span-2 space-y-6">

                <!-- Tag -->
                <div>
                    <span class="text-sm text-gray-500">Tag</span>
                    <p class="text-lg font-semibold text-gray-800">
                        {{ $all_info->tag ?? '—' }}
                    </p>
                </div>

                <!-- Universities -->
                <div>
                    <span class="text-sm text-gray-500 block mb-2">Universities</span>
                    <ul class="flex flex-wrap gap-2">
                        @if($all_info->universities)
                            @foreach($all_info->universities as $university)
                                <li class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm">
                                    {{ $university->name }}
                                </li>
                            @endforeach
                        @else
                            <li class="text-gray-400">No universities</li>
                        @endif
                    </ul>
                </div>

                <!-- Scholarships -->
                <div>
                    <span class="text-sm text-gray-500 block mb-2">Scholarships</span>
                    <ul class="flex flex-wrap gap-2">
                        @if($all_info->scholarships)
                            @foreach($all_info->scholarships as $scholarship)
                                <li class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm">
                                    {{ $scholarship->name }}
                                </li>
                            @endforeach
                        @else
                            <li class="text-gray-400">No scholarships</li>
                        @endif
                    </ul>
                </div>
            </div>

            <!-- Right: Gallery -->
            <div>
                <span class="text-sm text-gray-500 block mb-3">Gallery</span>

                @if($all_info->images && count($all_info->images))
                <div class="grid grid-cols-2 gap-3">
                    @foreach($all_info->images as $image)
                        <img 
                            src="{{ asset('storage/' . ($image->image ?? $image)) }}" 
                            class="w-full h-32 object-cover rounded-lg shadow hover:scale-105 transition"
                        />
                    @endforeach
                </div>
                @else
                    <p class="text-gray-400">No additional images</p>
                @endif
            </div>
        </div>

        <!-- Footer Actions -->
        <div class="border-t p-4 flex justify-center md:justify-end gap-3 bg-gray-50">
            <a href="{{ route('allInfoIndex') }}"
               class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 transition">
                ← Back
            </a>

            <a href="{{ route('allInfoEdit', $all_info->id) }}"
               class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition">
                ✏️ Edit
            </a>
        </div>

    </div>
    @endif

</main>

    </div>


</x-app-layout>
