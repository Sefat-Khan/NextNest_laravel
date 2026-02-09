<x-app-layout>
    @section('title', 'Scholarship Preview')

    <div class="flex h-[calc(100% - 81px)] bg-gray-100">
       

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-gray-100 text-black min-h-screen">
           

    @if($scholarship)
    <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">

        <!-- Header Image -->
        <div class="relative">
            <img 
                src="{{ asset('storage/' . $scholarship->university->image) }}" 
                alt="{{ $scholarship->university->name }}"
                class="w-full h-72 object-cover"
            />
            <div class="absolute inset-0 bg-black/30"></div>
            <h1 class="absolute bottom-6 left-6 text-3xl font-bold text-white">
                {{ $scholarship->university->name }}
            </h1>
        </div>

        <!-- Content -->
        <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Left -->
            <div class="md:col-span-2 space-y-6">

                <!-- Name -->
                <div>
                    <span class="text-sm text-gray-500">Name</span>
                    <p class="text-lg font-semibold text-gray-800">
                        {{ $scholarship->name ?? '—' }}
                    </p>
                </div>

                

                
            </div>

            <!-- Right -->
            <div>
                <!-- Amount -->
                <div>
                    <span class="text-sm text-gray-500">Amount</span>
                    <p class="text-lg font-semibold text-gray-800">
                        {{ $scholarship->amount ?? '—' }}
                    </p>
                </div>
                <!-- Deadline -->
                <div>
                    <span class="text-sm text-gray-500">Deadline</span>
                    <p class="text-lg font-semibold text-gray-800">
                        {{ $scholarship->deadline ?? '—' }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Footer Actions -->
        <div class="border-t p-4 flex justify-center md:justify-end gap-3 bg-gray-50">
            <a href="{{ route('scholarshipIndex') }}"
               class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 transition">
                ← Back
            </a>

            <a href="{{ route('scholarshipEdit', $scholarship->id) }}"
               class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition">
                ✏️ Edit
            </a>
        </div>

    </div>
    @endif

</main>

    </div>

    <!-- Dropdown Toggle Script -->

</x-app-layout>
