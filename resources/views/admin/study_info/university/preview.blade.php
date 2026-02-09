<x-app-layout>
    @section('title', 'University Preview')

    <div class="flex h-[calc(100% - 81px)] bg-gray-100">
       

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-gray-100 text-black min-h-screen">
            

    @if($university)
    <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">

        <!-- Header Image -->
        <div class="relative">
            <img 
                src="{{ asset('storage/' . $university->image) }}" 
                alt="{{ $university->name }}"
                class="w-full h-72 object-cover"
            />
            <div class="absolute inset-0 bg-black/30"></div>
            <h1 class="absolute bottom-6 left-6 text-3xl font-bold text-white">
                {{ $university->name }}
            </h1>
        </div>

        <!-- Content -->
        <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Left -->
            <div class="md:col-span-2 space-y-6">

                <!-- Tag -->
                <div>
                    <span class="text-sm text-gray-500">Tag</span>
                    <p class="text-lg font-semibold text-gray-800">
                        {{ $university->tag ?? '—' }}
                    </p>
                </div>

                

                
            </div>

            <!-- Right -->
            <div>
                <!-- Area -->
                <div>
                    <span class="text-sm text-gray-500">Area</span>
                    <p class="text-lg font-semibold text-gray-800">
                        {{ $university->area ?? '—' }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Footer Actions -->
        <div class="border-t p-4 flex justify-center md:justify-end gap-3 bg-gray-50">
            <a href="{{ route('universityIndex') }}"
               class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 transition">
                ← Back
            </a>

            <a href="{{ route('universityEdit', $university->id) }}"
               class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition">
                ✏️ Edit
            </a>
        </div>

    </div>
    @endif

</main>

    </div>


</x-app-layout>
