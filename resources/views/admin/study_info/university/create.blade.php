<x-app-layout>
    @section('title', 'University Create')

    <div class="flex h-[calc(100% - 81px)] bg-gray-100">
      

        <!-- Main Content -->
                <!-- Main Content -->
        <main class="flex-1 p-6 bg-gray-100">
            
    <div class="max-w-4xl mx-auto bg-white text-black p-6 rounded-xl shadow">

        <h2 class="text-2xl font-bold mb-6">Create University Info</h2>

        <form action="{{ route('universityStore') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
<!-- Name -->
            <div>
                <label for="name" class="block font-medium mb-2">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       placeholder="Enter University Name">
                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Area Name -->
            <div>
                <label for="area" class="block font-medium mb-2">Area Name</label>
                <input type="text" name="area" id="area" value="{{ old('area') }}"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       placeholder="Enter University Area Name">
                @error('area')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            </div>
            

            

            <!-- Main Image -->
            <div>
                <label class="block font-medium mb-2">University Image</label>
                <label for="image"
                       class="cursor-pointer flex items-center justify-center w-full h-56 border-2 border-dashed border-gray-300 rounded-lg bg-gray-50 hover:bg-gray-100 transition">
                    <span id="mainImageText" class="text-gray-500">Click to upload image</span>
                    <img id="mainImagePreview" class="w-full h-full object-cover rounded-lg hidden" />
                </label>
                <input type="file" name="image" id="image" class="hidden" accept="image/*">
                @error('image')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

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

<!-- Tag -->
            <div>
                <label for="tag" class="block font-medium mb-2">Tag</label>
                <input type="text" name="tag" id="tag" value="{{ old('tag') }}"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       placeholder="Enter University Country Tag (UK, USA, Canada, Australia etc.)">
                @error('tag')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            </div>

            

            <!-- Submit -->
            <div class="flex justify-center md:justify-end">
                <a href="{{ route('universityIndex') }}" class="mr-3 px-4 py-2 rounded bg-gray-300 hover:bg-gray-400">Cancel</a>
                <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">Create</button>
            </div>
        </form>
    </div>
</main>

    </div>

    <!-- JavaScript for image previews -->
    <script>
        
        // Main image preview
        document.addEventListener('DOMContentLoaded', function () {
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
        });
    </script>
   
</x-app-layout>
