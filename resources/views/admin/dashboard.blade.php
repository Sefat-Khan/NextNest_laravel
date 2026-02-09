<x-app-layout>
   @section('title', 'Dashboard')

    <div class="flex h-[calc(100% - 81px)] bg-gray-100">

        


        <!-- Main Content -->
        <main class="flex-1 p-6 bg-cover bg-no-repeat"
           style="background-color: url('{{asset('public/images/our-service.jpg')}}')" >

           

            <!-- Stats Cards -->
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-xl shadow p-5 text-black">
                    <h4 class="text-gray-500 text-sm">Study Info</h4>
                    <p class="text-3xl font-bold mt-2">{{ $studyInfo->count() }}</p>
                </div>

               
                <div class="bg-white rounded-xl shadow p-5 text-black">
                    <h4 class="text-gray-500 text-sm">Universities</h4>
                    <p class="text-3xl font-bold mt-2">{{ $universityCount }}</p>
                </div>
                

                
                <div class="bg-white rounded-xl shadow p-5 text-black">
                    <h4 class="text-gray-500 text-sm">Scholarships</h4>
                    <p class="text-3xl font-bold mt-2">{{ $scholarshipCount }}</p>
                </div>
               
            </div>
            

            <!-- Content Grid -->
            <div class="w-full">
    <!-- Recent Applications -->
    <div class="bg-gray-200 rounded-xl shadow p-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 w-full">
            <!-- Recent Universities -->
            <div class="bg-white p-4 rounded-[0.5rem] text-black overflow-x-auto">
                <h3 class="text-lg font-semibold mb-4 text-center">Recent Universities</h3>
                <table class="w-full text-left text-sm min-w-[400px]">
                    <thead>
                        <tr class="text-gray-500 border-b">
                            <th class="pb-3">University Name</th>
                            <th class="pb-3">Area</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y text-black">
                        @forelse($recentUniversities as $university)
                        <tr>
                            <td class="py-3">{{ $university->name }}</td>
                            <td>{{ $university->area }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2" class="py-3 text-center text-gray-500">
                                No universities found
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Recent Scholarships -->
            <div class="bg-white p-4 rounded-[0.5rem] text-black overflow-x-auto">
                <h3 class="text-lg font-semibold mb-4 text-center">Recent Scholarships</h3>
                <table class="w-full text-left text-sm min-w-[400px]">
                    <thead>
                        <tr class="text-gray-500 border-b">
                            <th class="pb-3">Scholarship Name</th>
                            <th class="pb-3">University Name</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y text-black">
                        @forelse($recentScholarships as $scholarship)
                        <tr>
                            <td class="py-3">{{ $scholarship->name }}</td>
                            <td>{{ $scholarship->university->name }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2" class="py-3 text-center text-gray-500">
                                No scholarships found
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
        </main>
    </div>

    
</x-app-layout>