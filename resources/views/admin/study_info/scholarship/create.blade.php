<x-app-layout>
    @section('title', 'Scholarship Create')

    <div class="flex h-[calc(100% - 81px)] bg-gray-100">
        


        <!-- Main Content -->
                <!-- Main Content -->
       <main class="flex-1 p-6 bg-gray-100">
      
    <div class="max-w-4xl mx-auto bg-white text-black p-6 rounded-xl shadow">
        
        <h2 class="text-2xl font-bold mb-6">Create Scholarship Info</h2>

        <form action="{{ route('scholarshipStore') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block font-medium mb-2">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       placeholder="Enter Scholarship Name">
                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Status & University -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
                <!-- Status -->
                <div>
                    <label for="status" class="block font-medium mb-2">Status</label>
                    <select name="status" id="status"
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="active" {{ old('status')=='active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('status')=='inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- University Dropdown -->
                <div>
                    <label for="university_id" class="block font-medium mb-2">University</label>
                    <select name="university_id" id="university_id"
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Select University</option>
                        @foreach($universities as $university)
                            <option value="{{ $university->id }}" {{ old('university_id') == $university->id ? 'selected' : '' }}>
                                {{ $university->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('university_id')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Amount & Deadline -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
                <!-- Amount -->
                <div>
                    <label for="amount" class="block font-medium mb-2">Amount</label>
                    <input type="number" name="amount" id="amount" value="{{ old('amount') }}"
                           class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           placeholder="Enter Scholarship Amount">
                    @error('amount')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Deadline -->
                <div>
                    <label for="deadline" class="block font-medium mb-2">Deadline</label>
                    <input type="date" name="deadline" id="deadline" value="{{ old('deadline') }}"
                           class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('deadline')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Submit -->
            <div class="flex justify-center md:justify-end">
                <a href="{{ route('scholarshipIndex') }}" class="mr-3 px-4 py-2 rounded bg-gray-300 hover:bg-gray-400">Cancel</a>
                <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">Create</button>
            </div>
        </form>
    </div>
</main>

    </div>

    <!-- JavaScript for image previews -->
    <script>
        
        // Main image preview
        const mainInput = document.getElementById('image');
const mainPreview = document.getElementById('mainImagePreview');
const mainText = document.getElementById('mainImageText');

mainInput.addEventListener('change', function () {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = e => {
            mainPreview.src = e.target.result;
            mainPreview.classList.remove('hidden');
            mainText.classList.add('hidden');
        };
        reader.readAsDataURL(file);
    }
});
    </script>
   
</x-app-layout>
