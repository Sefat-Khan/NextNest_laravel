<x-app-layout>
    @section('title', 'All Info Edit')

    <div class="flex h-[calc(100% - 81px)] bg-gray-100">
       

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-gray-100">
           
            <div class="max-w-4xl mx-auto bg-white text-black p-6 rounded-xl shadow">
                <h2 class="text-2xl font-bold mb-6">Update Study Info</h2>

                <form action="{{ route('allInfoUpdate', $all_info->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
                <!-- Name -->
                <div>
                        <label for="name" class="block font-medium mb-2">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $all_info->name) }}"
                               class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                               placeholder="Enter Study Info Name">
                        @error('name')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                <!-- Slug -->
                <div>
                    <label for="slug" class="block font-medium mb-2">Slug</label>
                    <input type="text" name="slug" id="slug" value="{{ old('slug', $all_info->slug) }}"
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
                    >{{ old('description', $info->description ?? '') }}</textarea>

                    @error('description')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                    
                    

                    <!-- Status -->
                    <div>
                        <label for="status" class="block font-medium mb-2">Status</label>
                        <select name="status" id="status" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="active" {{ old('status', $all_info->status) == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status', $all_info->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
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
                               class="relative cursor-pointer flex items-center justify-center w-full h-[270px] border-2 border-dashed border-gray-300 rounded-lg bg-gray-50 hover:bg-gray-100 transition overflow-hidden">
                            <span id="mainText" class="text-gray-400 {{ $all_info->main_image ? 'hidden' : '' }}">Click to upload image</span>
                            <img id="mainPreview"
                                 src="{{ $all_info->main_image ? asset('storage/'.$all_info->main_image) : '' }}"
                                 class="absolute inset-0 w-full h-full object-cover {{ $all_info->main_image ? '' : 'hidden' }}">
                        </label>
                        <input type="file" name="main_image" id="main_image" accept="image/*" class="hidden">
                        @error('main_image')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Additional Images -->
                    <div>
                        <label class="block font-medium mb-2">Additional Images (Max 4)</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            @for ($i = 0; $i < 4; $i++)
                                @php $image = $all_info->images[$i] ?? null; @endphp
                                <div class="relative">
                                    <label for="image_{{ $i }}" class="relative cursor-pointer flex items-center justify-center w-full h-32 border-2 border-dashed border-gray-300 rounded-lg bg-gray-50 hover:bg-gray-100 transition overflow-hidden">
                                        <span id="text_{{ $i }}" class="text-gray-400 text-sm {{ $image ? 'hidden' : '' }}">Click to upload</span>
                                        <img id="preview_{{ $i }}" src="{{ $image ? asset('storage/'.$image->image) : '' }}" class="absolute inset-0 w-full h-full object-cover {{ $image ? '' : 'hidden' }}">
                                    </label>
                                    <input type="file" name="images[]" id="image_{{ $i }}" accept="image/*" class="hidden" onchange="previewAdditional(event, {{ $i }})">
                                </div>
                            @endfor
                        </div>
                        @error('images')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
            </div>

                    <!-- Main Image -->
                    

                    <!-- Tag -->
                    <div>
                        <label for="tag" class="block font-medium mb-2">Tag</label>
                        <input type="text" name="tag" id="tag" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                               placeholder="Type country tag (UK, USA, Canada...)" value="{{ old('tag', $all_info->tag) }}">
                        @error('tag')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- University Selection -->
                    <div>
                        <label class="block font-medium mb-2">Universities</label>
                        <div id="universityCheckboxes" class="grid grid-cols-1 md:grid-cols-2 gap-3 max-h-60 overflow-y-auto border rounded p-3 bg-white">
                            @foreach($universities as $university)
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox" name="universities[]" value="{{ $university->id }}"
                                           class="rounded text-blue-600 focus:ring-blue-500"
                                           {{ $all_info->universities->contains($university->id) ? 'checked' : '' }}>
                                    <span>{{ $university->name }} ({{ $university->tag }})</span>
                                </label>
                            @endforeach
                        </div>
                        @error('universities')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Scholarships -->
                    <div id="scholarshipSection" class="hidden">
                        <label class="block font-medium mb-2">Scholarships</label>
                        <div id="scholarshipCheckboxes" class="grid grid-cols-1 md:grid-cols-2 gap-3 max-h-60 overflow-y-auto border rounded p-3"></div>
                    </div>

                    <!-- Submit -->
                    <div class="flex justify-end">
                        <a href="{{ route('allInfoIndex') }}" class="mr-3 px-4 py-2 rounded bg-gray-300 hover:bg-gray-400">Cancel</a>
                        <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">Update</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script>
        
        // Main image preview
        document.getElementById('main_image').addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = function (e) {
                const preview = document.getElementById('mainPreview');
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                document.getElementById('mainText').classList.add('hidden');
            };
            reader.readAsDataURL(file);
        });

        // Additional images preview
        function previewAdditional(event, index) {
            const file = event.target.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = function (e) {
                const preview = document.getElementById('preview_' + index);
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                document.getElementById('text_' + index).classList.add('hidden');
            };
            reader.readAsDataURL(file);
        }

        // University filtering by tag
        const tagInput = document.getElementById('tag');
        const container = document.getElementById('universityCheckboxes');

        tagInput.addEventListener('keyup', function () {
            const tag = this.value.toLowerCase().trim();

            fetch(`/universities?tag=${encodeURIComponent(tag)}`)
                .then(res => res.json())
                .then(data => {
                    container.innerHTML = '';

                    // If no tag, show all
                    if(tag === '') {
                        fetch('/universities')
                            .then(res => res.json())
                            .then(all => renderUniversities(all, @json($all_info->universities->pluck('id'))));
                        return;
                    }

                    renderUniversities(data, @json($all_info->universities->pluck('id')));
                });
        });

        function renderUniversities(universities, selectedIds = []) {
            universities.forEach(u => {
                container.innerHTML += `
                    <label class="flex items-center space-x-2 cursor-pointer">
                        <input type="checkbox"
                               name="universities[]"
                               value="${u.id}"
                               class="rounded text-blue-600 focus:ring-blue-500"
                               ${selectedIds.includes(u.id) ? 'checked' : ''}>
                        <span>${u.name} (${u.tag})</span>
                    </label>
                `;
            });
        }

        // Scholarships
        const scholarshipSection = document.getElementById('scholarshipSection');
        const scholarshipContainer = document.getElementById('scholarshipCheckboxes');

        function loadScholarships(selectedUniversityIds, selectedScholarshipIds = []) {
            if(selectedUniversityIds.length === 0) {
                scholarshipSection.classList.add('hidden');
                scholarshipContainer.innerHTML = '';
                return;
            }

            fetch(`/scholarships-by-universities?universities[]=${selectedUniversityIds.join('&universities[]=')}`)
                .then(res => res.json())
                .then(data => {
                    scholarshipContainer.innerHTML = '';
                    if(data.length === 0) {
                        scholarshipSection.classList.add('hidden');
                        return;
                    }

                    scholarshipSection.classList.remove('hidden');
                    data.forEach(s => {
                        scholarshipContainer.innerHTML += `
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="checkbox"
                                       name="scholarships[]"
                                       value="${s.id}"
                                       class="rounded text-blue-600 focus:ring-blue-500"
                                       ${selectedScholarshipIds.includes(s.id) ? 'checked' : ''}>
                                <span>${s.name}</span>
                            </label>
                        `;
                    });
                });
        }

        // On page load: pre-check scholarships
        document.addEventListener('DOMContentLoaded', () => {
            const selectedUniversityIds = Array.from(container.querySelectorAll('input[type="checkbox"]:checked')).map(cb => cb.value);
            const selectedScholarshipIds = @json($all_info->scholarships->pluck('id'));
            loadScholarships(selectedUniversityIds, selectedScholarshipIds);
        });

        // Trigger scholarship load on university change
        container.addEventListener('change', () => {
            const selectedUniversityIds = Array.from(container.querySelectorAll('input[type="checkbox"]:checked')).map(cb => cb.value);
            loadScholarships(selectedUniversityIds);
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
