<x-app-layout>
    @section('title', 'Offer Preview')

    <div class="flex h-[calc(100% - 81px)] bg-gray-100">
        


        <!-- Main Content -->
        <main class="flex-1 p-6 bg-gray-100 text-black min-h-screen">


    @if($offerInfo)
    <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">

        <!-- Header Image -->
        <div class="relative">
            <img 
                src="{{ asset('storage/' . $offerInfo->image) }}" 
                alt="{{ $offerInfo->title1 }}"
                class="w-full h-72 object-cover"
            />
            <div class="absolute inset-0 bg-black/30"></div>
            <h1 class="absolute bottom-6 left-6 text-3xl font-bold text-white">
                {{ $offerInfo->title1 }}
            </h1>
        </div>

        <!-- Content -->
        <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Left -->
            <div class="md:col-span-2 space-y-6">

                <!-- Title 1 -->
                <div>
                    <span class="text-sm text-gray-500">Title 1</span>
                    <p class="text-lg font-semibold text-gray-800">
                        {{ $offerInfo->title1 ?? '—' }}
                    </p>
                </div>

                <!-- Title 2 -->
                <div>
                    <span class="text-sm text-gray-500">Title 2</span>
                    <p class="text-lg font-semibold text-gray-800">
                        {{ $offerInfo->title2 ?? '—' }}
                    </p>
                </div>

                

                
            </div>

            <!-- Right -->
            <div>
                <!-- Universities -->
                <div>
                    <span class="text-sm text-gray-500 block mb-2">Offers</span>
                    <ul class="flex flex-wrap gap-2">
                        @if($offerInfo->offers)
                            @foreach($offerInfo->offers as $offer)
                                <li class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm">
                                    {{ $offer }}
                                </li>
                            @endforeach
                        @else
                            <li class="text-gray-400">No Offers</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Actions -->
        <div class="border-t p-4 flex justify-center md:justify-end gap-3 bg-gray-50">
            <a href="{{ route('offerIndex') }}"
               class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 transition">
                ← Back
            </a>

            <a href="{{ route('offerEdit', $offerInfo->id) }}"
               class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition">
                ✏️ Edit
            </a>
        </div>

    </div>
    @endif

</main>

    </div>


</x-app-layout>
