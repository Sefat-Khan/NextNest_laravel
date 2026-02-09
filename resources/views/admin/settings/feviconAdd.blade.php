<x-app-layout>
@section('title', 'Fevicon')

    <div class="flex h-[calc(100% - 81px)] bg-gray-100">
        

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-cover bg-no-repeat" style="background-color: url('{{asset('public/images/our-service.jpg')}}')">

            <div class="max-w-2xl mx-auto p-6 bg-white text-black rounded-xl shadow">
                <h2 class="text-2xl font-bold mb-4">Favicon Management</h2>

                @if(session('success'))
                    <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('feviconStore') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
                    @csrf

                    <div>
                        <label class="block font-medium mb-2">Upload Favicon</label>

                        <label for="image" class="cursor-pointer flex items-center justify-center w-full h-[270px] border-2 border-dashed border-gray-300 rounded-lg bg-gray-50 hover:bg-gray-100 transition">
                            <span id="mainImageText" class="text-gray-500 @if($fevicon) hidden @endif">Click to upload image</span>
                            <img id="mainImagePreview"
                                 class="w-full h-full object-contain md:object-cover rounded-lg @if(!$fevicon) hidden @endif"
                                 @if($fevicon) src="{{ Storage::url($fevicon->image) }}" @endif
                            />
                        </label>

                        <input type="file" name="image" id="image" class="hidden" accept="image/*">

                        @error('image')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 self-center">
                        @if($fevicon) Update @else Upload @endif
                    </button>
                </form>
            </div>
        </main>
    </div>

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