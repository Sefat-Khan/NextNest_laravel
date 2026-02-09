<x-app-layout>
    @section('title', 'All Info Create')
    <div class="flex h-[calc(100% - 81px)] bg-gray-100">
       


        <!-- Main Content -->
                <!-- Main Content -->
        <main class="flex-1 p-6 bg-gray-100">
        
    <div class="max-w-4xl mx-auto bg-white text-black p-6 rounded-xl shadow">
        <h2 class="text-2xl font-bold mb-6">Create Study Info</h2>

        <form action="{{ route('allInfoStore') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
                <!-- Name -->
                <div>
                    <label for="name" class="block font-medium mb-2">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                           class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           placeholder="Enter Study Info Name">
                    @error('name')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Slug -->
                <div>
                    <label for="slug" class="block font-medium mb-2">Slug</label>
                    <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                           class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           placeholder="Slug will be generated automatically">
                    @error('slug')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Description -->
                <div>
                    <label for="description" class="block font-medium mb-2">
                        Immigration Description
                    </label>

                    <textarea
                        name="description"
                        id="description"
                        rows="4"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Enter Study Info description"
                    >{{ old('description') }}</textarea>

                    @error('description')
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

            <!-- Images Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
                <!-- Main Image -->
                <div>
                    <label class="block font-medium mb-2">Main Image</label>

                    <label for="main_image"
                        class="cursor-pointer flex items-center justify-center w-full h-[270px] border-2 border-dashed border-gray-300 rounded-lg bg-gray-50 hover:bg-gray-100 transition">
                        <span id="mainImageText" class="text-gray-500">Click to upload image</span>
                        <img id="mainImagePreview"
                             class="w-full h-full object-cover rounded-lg hidden" />
                    </label>

                    <input type="file" name="main_image" id="main_image"
                           class="hidden" accept="image/*">

                    @error('main_image')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Additional Images -->
                <div>
                    <label class="block font-medium mb-2">Additional Images (Max 4)</label>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 items-center">
                        @for ($i = 0; $i < 4; $i++)
                        <div class="relative">
                            <label for="image_{{ $i }}"
                                class="cursor-pointer flex items-center justify-center w-full h-32 border-2 border-dashed border-gray-300 rounded-lg bg-gray-50 hover:bg-gray-100 transition overflow-hidden">
                                <span id="text_{{ $i }}" class="text-gray-400 text-sm">
                                    Click to upload
                                </span>
                                <img id="preview_{{ $i }}"
                                     class="absolute inset-0 w-full h-full object-cover hidden">
                            </label>

                            <input type="file"
                                   name="images[]"
                                   id="image_{{ $i }}"
                                   accept="image/*"
                                   class="hidden"
                                   onchange="previewImage(event, {{ $i }})">
                        </div>
                        @endfor
                    </div>

                    @error('images')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Tag -->
            <div>
                <label for="tag" class="block font-medium mb-2">Tag</label>
                <input type="text"
                       name="tag"
                       id="tag"
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       placeholder="Type country tag (UK, USA, Canada...)">
                @error('tag')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- University Selection -->
            <div class="text-black mt-4">
                <label class="block font-medium mb-2">Universities</label>

                <div id="universityCheckboxes"
     class="grid grid-cols-1 md:grid-cols-2 gap-4 max-h-60 overflow-y-auto border border-gray-300 rounded-lg p-4 bg-white shadow-sm">
    @foreach($universities as $university)
        <label class="flex items-center space-x-3 cursor-pointer p-2 rounded-lg hover:bg-blue-50 transition">
            <input type="checkbox"
                   name="universities[]"
                   value="{{ $university->id }}"
                   class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
            <span class="text-gray-700 font-medium">{{ $university->name }} <span class="text-gray-400">({{ $university->tag }})</span></span>
        </label>
    @endforeach
</div>

                @error('universities')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Scholarships -->
            <div id="scholarshipSection" class="hidden text-black">
                <label class="block font-medium mb-2">Scholarships</label>

                <div id="scholarshipCheckboxes"
                     class="grid grid-cols-1 md:grid-cols-2 gap-3 max-h-60 overflow-y-auto border rounded p-3">
                </div>
            </div>

            <!-- Submit -->
            <div class="flex justify-end">
                <a href="{{ route('allInfoIndex') }}" class="mr-3 px-4 py-2 rounded bg-gray-300 hover:bg-gray-400">Cancel</a>
                <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">Create</button>
            </div>
        </form>
    </div>
</main>

    </div>

    <!-- JavaScript for image previews -->
    <script>
        
        // Main image preview
        const mainInput = document.getElementById('main_image');
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

        // Additional images preview
function previewImage(event, index) {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function (e) {
        const preview = document.getElementById('preview_' + index);
        const text = document.getElementById('text_' + index);

        preview.src = e.target.result;
        preview.classList.remove('hidden');
        text.classList.add('hidden');
    };
    reader.readAsDataURL(file);
}

const tagInput = document.getElementById('tag');
const container = document.getElementById('universityCheckboxes');

tagInput.addEventListener('keyup', function () {
    const tag = this.value.toLowerCase().trim();

    fetch(`/universities?tag=${encodeURIComponent(tag)}`)
        .then(res => res.json())
        .then(data => {
            container.innerHTML = '';

            // ❗ If no tag typed, show all universities
            if (tag === '') {
                fetch('/universities')
                    .then(res => res.json())
                    .then(all => renderUniversities(all));
                return;
            }

            // ❗ No match → empty div
            if (data.length === 0) {
                return;
            }

            renderUniversities(data);
        });
});

function renderUniversities(universities) {
    universities.forEach(u => {
        container.innerHTML += `
            <label class="flex items-center space-x-2 cursor-pointer">
                <input type="checkbox"
                       name="universities[]"
                       value="${u.id}"
                       class="rounded text-blue-600 focus:ring-blue-500">
                <span>${u.name} (${u.tag})</span>
            </label>
        `;
    });
}

const scholarshipSection = document.getElementById('scholarshipSection');
const scholarshipContainer = document.getElementById('scholarshipCheckboxes');

container.addEventListener('change', () => {
    const selectedUniversities = Array.from(
        container.querySelectorAll('input[type="checkbox"]:checked')
    ).map(cb => cb.value);

    if (selectedUniversities.length === 0) {
        scholarshipSection.classList.add('hidden');
        scholarshipContainer.innerHTML = '';
        return;
    }

    fetch(`/scholarships-by-universities?universities[]=${selectedUniversities.join('&universities[]=')}`)
        .then(res => res.json())
        .then(data => {
            scholarshipContainer.innerHTML = '';

            if (data.length === 0) {
                scholarshipSection.classList.add('hidden');
                return;
            }

            scholarshipSection.classList.remove('hidden');

            data.forEach(s => {
                scholarshipContainer.innerHTML += `
                    <label class="flex items-center space-x-3 cursor-pointer p-2 rounded-lg hover:bg-blue-50 transition">
                        <input type="checkbox"
                               name="scholarships[]"
                               value="${s.id}"
                               class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
                        <span class="text-gray-700 font-medium">${s.name}</span>
                    </label>
                `;
            });
        });
});

//slug generator

const nameInput = document.getElementById('name');
const slugInput = document.getElementById('slug');

nameInput.addEventListener('input', () => {
    let slug = nameInput.value
        .toLowerCase()
        .trim()
        .replace(/[^\w\s-]/g, '')  // Remove invalid chars
        .replace(/\s+/g, '-')      // Replace spaces with -
        .replace(/--+/g, '-');     // Replace multiple - with single -
    slugInput.value = slug;
});
    </script>
   
</x-app-layout>
