<x-app-layout>
    @section('title', 'Offer Create')

    <div class="flex h-[calc(100% - 81px)] bg-gray-100">
       


        <!-- Main Content -->
                <!-- Main Content -->
       <main class="flex-1 p-6 bg-gray-100">
        
    <div class="max-w-4xl mx-auto bg-white text-black p-6 rounded-xl shadow">
        <h2 class="text-2xl font-bold mb-6">Create Offer</h2>

        <form action="{{ route('offerStore') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
<!-- Title 1 -->
            <div>
                <label for="title1" class="block font-medium mb-2">Title 1</label>
                <input type="text" name="title1" id="title1" value="{{ old('title1') }}"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       placeholder="Enter Offer Title">
                @error('title1')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Title 2 -->
            <div>
                <label for="title2" class="block font-medium mb-2">Title 2</label>
                <input type="text" name="title2" id="title2" value="{{ old('title2') }}"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       placeholder="Enter Offer Title">
                @error('title2')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            </div>
            

            <!-- Image -->
            <div>
                <label class="block font-medium mb-2">Offer Image</label>
                <label for="image"
                       class="cursor-pointer flex items-center justify-center w-full h-56 border-2 border-dashed border-gray-300 rounded-lg bg-gray-50 hover:bg-gray-100 transition">
                    <span id="mainImageText" class="text-gray-500">Click to upload image</span>
                    <img id="mainImagePreview" class="w-full h-full object-cover rounded-lg hidden" />
                </label>
                <input type="file" name="image" id="image" class="hidden">
                @error('image')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

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

            <!-- Offer List -->
            <div>
                <label for="offerInput" class="block font-medium mb-2">Offer</label>
                <div class="flex gap-2">
                    <input type="text" id="offerInput" placeholder="Enter Offer Title" class="w-full border rounded px-3 py-2">
                    <button type="button" id="addOfferBtn" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Add</button>
                </div>

                <ul id="offerList" class="mt-2 list-disc pl-5"></ul>

                <!-- Hidden inputs for each offer -->
                <div id="hiddenOffers"></div>
            </div>

            <!-- Submit -->
            <div class="flex justify-center md:justify-end">
                <a href="{{ route('offerIndex') }}" class="mr-3 px-4 py-2 rounded bg-gray-300 hover:bg-gray-400">Cancel</a>
                <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">Create</button>
            </div>
        </form>
    </div>
</main>

    </div>

    <!-- JavaScript -->
    <script>



    const offerInput = document.getElementById('offerInput');
    const addOfferBtn = document.getElementById('addOfferBtn');
    const offerList = document.getElementById('offerList');
    const hiddenOffers = document.getElementById('hiddenOffers');

    addOfferBtn.addEventListener('click', () => {
        const value = offerInput.value.trim();
        if (!value) return;

        // Create li
        const li = document.createElement('li');
        li.textContent = value;

        // Remove button
        const removeBtn = document.createElement('button');
        removeBtn.type = 'button';
        removeBtn.textContent = '×';
        removeBtn.className = 'ml-2 text-red-500';
        removeBtn.addEventListener('click', () => {
            offerList.removeChild(li);
            hiddenOffers.removeChild(hiddenInput);
        });
        li.appendChild(removeBtn);

        offerList.appendChild(li);

        // Create hidden input
        const hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'offers[]'; // array input
        hiddenInput.value = value;
        hiddenOffers.appendChild(hiddenInput);

        offerInput.value = '';
    });

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
