<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
    @hasSection('title')
        @yield('title') - {{ config('app.name', 'NextNest') }}
    @else
        {{ config('app.name', 'NextNest') }}
    @endif
</title>

        <!-- Favicon -->
    @if(isset($fevicon) && $fevicon && file_exists(public_path('storage/' . $fevicon->image)))
        <link rel="icon" type="image/png" href="{{ asset('storage/' . $fevicon->image) }}?v={{ time() }}">
    @elseif(file_exists(public_path('images/favicon-default.png')))
        <link rel="icon" type="image/png" href="{{ asset('images/favicon-default.png') }}">
    @endif

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Tom Select CSS -->
        <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.bootstrap5.min.css" rel="stylesheet">

        <!-- Main Compiled CSS -->
        <link rel="stylesheet" href="{{ asset('build/assets/app-CEwZte8_.css') }}">

        <!-- Main Compiled JS (if you have one) -->
        <script src="{{ asset('build/assets/app-CiZ6hk-B.js') }}" defer></script>

        <!-- Tailwind -->

        <script src="https://cdn.tailwindcss.com"></script>

        

    </head>
<body class="font-sans antialiased">
    <div class="flex flex-col min-h-screen bg-white text-black">
        @Include('layouts.navigation')
        

        

        

        <div class="flex">
            <!-- Include Sidebar -->
        <aside class="fixed inset-y-0 left-0 w-64 bg-gray-200 text-[var(--secondary-color)] transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out z-50 md:static md:flex flex-col">
            <div class="px-6 py-6 text-2xl font-bold border-b border-white/20">
                NextNets
            </div>

            <nav class="flex-1 px-4 py-6 space-y-2">
                <!-- Dashboard Link -->
                <a href="{{ route('dashboard') }}"
                class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>

                <!-- Study Info Dropdown -->
                <div class="relative">
                    <button id="studyInfoBtn" class="w-full flex items-center px-4 py-2 rounded-lg bg-white/10 hover:bg-white/20 transition focus:outline-none">
                        📘 <span class="ml-3 flex-1 text-left">Study Info</span>
                        <svg class="w-4 h-4 ml-auto transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="studyDropdown" class="mt-2 w-full bg-white/10 rounded-lg shadow-lg overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
                        <div class="flex flex-col">
                            <a href="{{route('allInfoIndex')}}" class="px-4 py-2 hover:bg-white/20 transition">All Info</a>
                            <a href="{{route('universityIndex')}}" class="px-4 py-2 hover:bg-white/20 transition">University</a>
                            <a href="{{route('scholarshipIndex')}}" class="px-4 py-2 hover:bg-white/20 transition">Scholarship</a>
                        </div>
                    </div>
                </div>

                <!-- Other Links -->
                <a href="{{route('offerIndex')}}" class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 21H5a2 2 0 01-2-2v-4a2 2 0 012-2h4a2 2 0 012 2v4a2 2 0 01-2 2zM15 3h4a2 2 0 012 2v4a2 2 0 01-2 2h-4a2 2 0 01-2-2V5a2 2 0 012-2z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6M9 11h6"/>
                    </svg> <span class="ml-3">Offer</span>
                </a>

                <a href="{{route('contactIndex')}}" class="flex items-center px-4 py-2 rounded-lg hover:bg-white/20 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l9 6 9-6M21 8v10a2 2 0 01-2 2H5a2 2 0 01-2-2V8"/>
                    </svg> <span class="ml-3">Contact Info</span>
                </a>

                <!-- Settings Dropdown -->
                <div class="relative">
                    <button id="settingsBtn" class="w-full flex items-center px-4 py-2 rounded-lg bg-white/10 hover:bg-white/20 transition focus:outline-none">
                        ⚙️ <span class="ml-3 flex-1 text-left">Settings</span>
                        <svg class="w-4 h-4 ml-auto transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="settingsDropdown" class="mt-2 w-full bg-white/10 rounded-lg shadow-lg overflow-hidden max-h-0 transition-all duration-300 ease-in-out">
                        <div class="flex flex-col">
                            <a href="{{ route('feviconIndex') }}" class="px-4 py-2 hover:bg-white/20 transition flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M5 3v18h14V3H5zm12 16H7V5h10v14z"/>
                                    <path d="M12 7a5 5 0 100 10 5 5 0 000-10z"/>
                                </svg>
                                Fevicon
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </aside>

        <!-- Mobile sidebar overlay -->
        <div id="mobileSidebarOverlay" class="fixed inset-0 z-40 bg-black/50 hidden md:hidden"></div>
        <!-- Page Content -->
                <main class="flex-1 p-6">
                    <!-- Hamburger Button for mobile -->
                    <button id="mobileSidebarBtn" class="md:hidden mb-4 py-2 px-4 bg-gray-200 text-blue-400 rounded-lg">
                        ☰
                    </button>
                    @isset($header)
                        <header class="shadow bg-transparent mb-4">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endisset

                    {{ $slot }}
                </main>
        </div>
        
    </div>

    <!--- Javascript for slider --->

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                // Mobile sidebar toggle
                const mobileBtn = document.getElementById('mobileSidebarBtn');
                const sidebar = document.querySelector('aside');
                const overlay = document.getElementById('mobileSidebarOverlay');

                mobileBtn.addEventListener('click', () => {
                    sidebar.classList.toggle('-translate-x-full');
                    overlay.classList.toggle('hidden');
                });

                overlay.addEventListener('click', () => {
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('hidden');
                });

                // Dropdown toggle function
                const toggleDropdown = (btnId, dropdownId) => {
                    const btn = document.getElementById(btnId);
                    const dropdown = document.getElementById(dropdownId);

                    btn.addEventListener('click', () => {
                        if(dropdown.style.maxHeight && dropdown.style.maxHeight !== '0px') {
                            // Close
                            dropdown.style.maxHeight = '0px';
                            dropdown.style.opacity = 0;
                        } else {
                            // Open
                            dropdown.style.maxHeight = dropdown.scrollHeight + 'px';
                            dropdown.style.opacity = 1;
                        }
                        btn.querySelector('svg').classList.toggle('rotate-180');
                    });
                }

                toggleDropdown('studyInfoBtn', 'studyDropdown');
                toggleDropdown('settingsBtn', 'settingsDropdown');
            });
        </script>




</body>

</html>
