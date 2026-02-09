<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
    @hasSection('title')
        {{ config('app.name', 'NextNest') }} - @yield('title')
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

        <!-- Scripts -->
          <!-- Main Compiled CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/app-CEwZte8_.css') }}">

    <!-- Main Compiled JS (if you have one) -->
    <script src="{{ asset('build/assets/app-CiZ6hk-B.js') }}" defer></script>

    <script src="https://cdn.tailwindcss.com"></script>
    
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
