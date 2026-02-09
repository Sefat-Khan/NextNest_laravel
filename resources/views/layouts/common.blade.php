<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Primary Meta Tags -->
    <title>
        @if (View::hasSection('title'))
            @yield('title') - {{ config('app.name', 'NextNest') }}
        @else
            {{ config('app.name', 'NextNest') }}
        @endif
    </title>

    <!-- Meta Description & Keywords -->
    @php
        $metaDescription = View::hasSection('meta_description')
            ? View::yieldContent('meta_description')
            : 'NextNets offers study abroad consultation, English test preparation, and university pathways.';
        $metaKeywords = View::hasSection('meta_keywords')
            ? View::yieldContent('meta_keywords')
            : 'study abroad, IELTS, TOEFL, university, scholarships, student services';
    @endphp
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="keywords" content="{{ $metaKeywords }}">
    <meta name="robots" content="index, follow">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Social Sharing -->
    <meta property="og:title" content="@yield('og_title', config('app.name'))" />
    <meta property="og:description" content="@yield('og_description', $metaDescription)" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="@yield('og_image', asset('images/nextnetslogo.png'))" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('twitter_title', config('app.name'))" />
    <meta name="twitter:description" content="@yield('twitter_description', $metaDescription)" />
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/nextnetslogo.png'))" />

    <!-- Favicon -->
    @php
        $faviconPath =
            isset($fevicon) && $fevicon && file_exists(public_path('storage/' . $fevicon->image))
                ? asset('storage/' . $fevicon->image) . '?v=' . time()
                : (file_exists(public_path('images/favicon-default.png'))
                    ? asset('images/favicon-default.png')
                    : '');
    @endphp
    @if ($faviconPath)
        <link rel="icon" type="image/png" href="{{ $faviconPath }}">
    @endif

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- Main Compiled CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/app-CEwZte8_.css') }}">

    <!-- Main Compiled JS (if you have one) -->
    <script src="{{ asset('build/assets/app-CiZ6hk-B.js') }}" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Structured Data for SEO -->
    @php
        $jsonLd = [
            '@context' => 'https://schema.org',
            '@type' => 'EducationalOrganization',
            'name' => config('app.name'),
            'url' => url('/'),
            'logo' => asset('images/nextnetslogo.png'),
            'description' => $metaDescription,
            'founder' => [
                '@type' => 'Person',
                'name' => 'NextNets Founder Name',
            ],
            'foundingDate' => '2020-01-01',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Plot-57, R-13, Sector-10, Uttara Model Town',
                'addressLocality' => 'Dhaka',
                'addressRegion' => 'Dhaka Division',
                'postalCode' => '1230',
                'addressCountry' => 'BD',
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'contactType' => 'customer support',
                'email' => 'info@nextnets.com',
                'telephone' => '+880123456789',
            ],
            'sameAs' => [
                'https://facebook.com/YourPage',
                'https://twitter.com/YourPage',
                'https://linkedin.com/company/YourPage',
                'https://instagram.com/YourPage',
            ],
        ];
    @endphp

    <script type="application/ld+json">
        @json($jsonLd, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE)
    </script>
</head>

<body>
    <div class="min-h-screen bg-gray-100">

        <!-- Promo Popup -->
        <section id="promoPopup"
            class="fixed inset-0 z-[999] flex items-center justify-center bg-black/70 backdrop-blur-md hidden">
            @if ($offersData)
                <div class="relative w-[92%] max-w-[960px] h-[80%] sm:h-[440px] lg:h-[520px] bg-cover bg-center bg-no-repeat flex flex-col justify-center items-center text-center rounded-2xl shadow-[0_20px_60px_rgba(0,0,0,0.6)] overflow-hidden animate-popup"
                    style="background-image: url('{{ asset('storage/' . $offersData->image) }}')">
                    <!-- Dark overlay -->
                    <div class="absolute inset-0 bg-black/10"></div>

                    <!-- Content -->
                    <div class="relative z-10 px-4 sm:px-8 max-w-3xl">
                        <h2
                            class="text-2xl sm:text-3xl lg:text-6xl font-extrabold text-white leading-tight drop-shadow-lg">
                            {{ $offersData->title1 }}
                        </h2>

                        <h4 class="mt-2 text-base sm:text-xl lg:text-3xl font-semibold text-gray-200 drop-shadow-lg">
                            {{ $offersData->title2 }}
                        </h4>

                        <ul class="mt-4 sm:mt-6 space-y-2 text-left mx-auto max-w-md text-gray-100">
                            @if ($offersData->offers)
                                @foreach ($offersData->offers as $offer)
                                    <li class="flex items-start gap-2">
                                        <span class="text-[var(--secondary-color)] mt-1 drop-shadow-lg">✔</span>
                                        <span class="font-medium drop-shadow-lg">{{ $offer }}</span>
                                    </li>
                                @endforeach
                            @endif

                        </ul>

                        <!-- CTA -->
                        <a href="/offer"
                            class="inline-block mt-6 sm:mt-8 bg-[var(--secondary-color)] text-white px-8 py-3 rounded-xl font-bold text-lg shadow-lg hover:scale-105 hover:shadow-xl transition-all duration-300">
                            Unlock Offer
                        </a>
                    </div>

                    <!-- Close Button -->
                    <button id="popupClose"
                        class="absolute top-4 right-4 z-20 w-10 h-10 cursor-pointer flex items-center justify-center rounded-full bg-white/20 text-white text-2xl hover:bg-white hover:text-black transition"
                        aria-label="Close popup">
                        &times;
                    </button>
                </div>
            @endif
        </section>

        <header id="mainHeader" class="fixed top-0 left-0 z-50 transition-all duration-500 ease w-full">
            <div id="upper-header"
                class="hidden xl:flex justify-between items-center py-1 bg-[var(--primary-color)] mx-auto w-full px-2 sm:px-6 lg:px-8">
                <div class="">
                    <a href=""><i
                            class="fa-brands fa-square-facebook text-[20px] text-white hover:text-blue-700 transition-all duration-200"></i></a>
                    <a href=""><i
                            class="fa-brands fa-square-linkedin text-[20px] text-white hover:text-blue-700 transition-all duration-200"></i></a>
                    <a href=""><i
                            class="fa-brands fa-square-x-twitter text-[20px] text-white hover:text-blue-700 transition-all duration-200"></i></a>
                    <a href=""><i
                            class="fa-brands fa-square-instagram text-[20px] text-white hover:text-blue-700 transition-all duration-200"></i></a>
                    <a href=""><i
                            class="fa-brands fa-square-youtube text-[20px] text-white hover:text-blue-700 transition-all duration-200"></i></a>
                </div>
                <div class="py-2">
                    <a href="{{ route('study_destination') }}"
                        class="px-8 py-2 cursor-pointer text-white rounded-full text-[15px] font-bold bg-[var(--secondary-color)] hover:bg-[var(--secondary-color)]/50 transition-all duration-300">
                        Find Destination
                    </a>
                    <button
                        class="openContactModal px-8 py-2 btn-ani cursor-pointer rounded-[0.5rem] ml-4 text-[15px] font-bold bg-white group transition-all duration-300">
                        <span class="text-black group-hover:text-white">Book An Appointment</span>
                    </button>
                </div>
            </div>

            <!--- desktop header --->
            <nav class="relative w-full bg-transparent">
                <!-- Overlay to darken a bit for better readability -->
                <div class="absolute inset-0 bg-black/50"></div>
                <div
                    class="pointer-events-none absolute inset-0 bg-gradient-to-r from-white/30 via-white/10 to-white/30 opacity-70">
                </div>
                <div class="mx-auto w-full px-2 sm:px-6 xl:px-8 flex justify-between items-center">
                    <div class="relative flex w-full items-center justify-between">
                        <!-- Logo -->
                        <a href="{{ route('home') }}" class="flex shrink-0 items-center w-[120px] py-4 cursor-pointer">
                            <img src={{ asset('images/nextnetslogo.png') }} alt="NextNets Logo" loading="lazy"
                                class="w-full" />
                        </a>

                        <!-- Mobile Menu Button -->
                        <button id="mobileMenuBtn" class="xl:hidden text-3xl text-white">
                            <i class="fa-solid fa-bars"></i>
                        </button>

                        <!-- Desktop Menu -->
                        <div class="hidden xl:block">
                            <div class="flex space-x-4 items-center text-[15px] uppercase font-bold">
                                <a href="{{ route('about') }}"
                                    class="transition-all duration-300 ease-in glassy-link">About Us</a>

                                <!-- Study Destination -->
                                <div class="group relative">
                                    <a href="{{ route('study_destination') }}"
                                        class="flex items-center cursor-pointer glassy-link gap-1 transition">
                                        Study Destination
                                        <i class="fa-solid fa-angle-down text-sm"></i>
                                    </a>

                                    <div
                                        class="absolute left-0 top-full z-50 px-2 py-2 w-[17rem] glassy-bg lg:[clip-path:polygon(90%_0,100%_5%,100%_100%,10%_100%,0_95%,0_0)] shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform scale-y-0 origin-top group-hover:scale-y-100">
                                        <!-- Overlay to darken a bit for better readability -->
                                        <div class="absolute inset-0 bg-black/50"></div>

                                        <ul class="py-2 text-[14px] font-bold text-white">
                                            @if ($studyInfo)
                                                @foreach ($studyInfo as $study)
                                                    @if ($study->tag !== 'Europe')
                                                        @if ($study->id < 10)
                                                            <li>
                                                                <a href="{{ route('study', $study->slug) }}"
                                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">
                                                                    {{ $study->name }}
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endif


                                            <li class="desktop-dropdown relative">
                                                <button type="button"
                                                    class="flex items-center text-lg gap-1 text-ani w-fit pl-4 py-2 my-1">
                                                    Europe
                                                    <i
                                                        class="fa-solid fa-angle-down transition-transform duration-300"></i>
                                                </button>

                                                <!-- Europe Submenu -->
                                                <ul
                                                    class="desktop-submenu max-h-0 overflow-hidden opacity-0
                                transition-all duration-300 ease-in-out
                                glassy-bg shadow-lg rounded-lg ml-4 mt-1">
                                                    @foreach ($europeStudy as $study)
                                                        <li>
                                                            <a href="{{ route('study', $study->slug) }}"
                                                                class="block pl-4 py-2 hover:text-[var(--secondary-color)] transition">
                                                                {{ $study->name }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>

                                            @if ($studyInfo)
                                                @foreach ($studyInfo as $study)
                                                    @if ($study->tag !== 'Europe')
                                                        @if ($study->id > 10)
                                                            <li>
                                                                <a href="{{ route('study', $study->slug) }}"
                                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">
                                                                    {{ $study->name }}
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endif




                                        </ul>

                                    </div>
                                </div>

                                <!-- Work Permit -->
                                <div class="group relative">
                                    <a href="{{ route('work_permit') }}"
                                        class="flex items-center cursor-pointer glassy-link gap-1 transition">
                                        Work Permit
                                        <i class="fa-solid fa-angle-down text-sm"></i>
                                    </a>

                                    <div
                                        class="absolute left-0 top-full z-50 px-2 py-2 w-[17rem] glassy-bg lg:[clip-path:polygon(90%_0,100%_5%,100%_100%,10%_100%,0_95%,0_0)] shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform scale-y-0 origin-top group-hover:scale-y-100">
                                        <!-- Overlay to darken a bit for better readability -->
                                        <div class="absolute inset-0 bg-black/50"></div>

                                        <ul class="py-2 text-[14px] font-bold text-white">

                                            <li>
                                                <a href="{{ route('work_permit') }}"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">
                                                    Canada
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('work_permit') }}"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">
                                                    UK
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('work_permit') }}"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">
                                                    UAE
                                                </a>
                                            </li>

                                            <li class="desktop-dropdown relative">
                                                <button type="button"
                                                    class="flex items-center text-lg gap-1 text-ani w-fit pl-4 py-2 my-1">
                                                    Europe
                                                    <i
                                                        class="fa-solid fa-angle-down transition-transform duration-300"></i>
                                                </button>

                                                <!-- Europe Submenu -->
                                                <ul
                                                    class="desktop-submenu max-h-0 overflow-hidden opacity-0
                                transition-all duration-300 ease-in-out
                                glassy-bg shadow-lg rounded-lg ml-4 mt-1">

                                                    <li>
                                                        <a href="{{ route('work_permit') }}"
                                                            class="block pl-4 py-2 hover:text-[var(--secondary-color)] transition">
                                                            Spain
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('work_permit') }}"
                                                            class="block pl-4 py-2 hover:text-[var(--secondary-color)] transition">
                                                            Portugal
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('work_permit') }}"
                                                            class="block pl-4 py-2 hover:text-[var(--secondary-color)] transition">
                                                            Denmark
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('work_permit') }}"
                                                            class="block pl-4 py-2 hover:text-[var(--secondary-color)] transition">
                                                            Servia
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('work_permit') }}"
                                                            class="block pl-4 py-2 hover:text-[var(--secondary-color)] transition">
                                                            Hungary
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('work_permit') }}"
                                                            class="block pl-4 py-2 hover:text-[var(--secondary-color)] transition">
                                                            Finland
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('work_permit') }}"
                                                            class="block pl-4 py-2 hover:text-[var(--secondary-color)] transition">
                                                            Sweden
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>



                                        </ul>

                                    </div>
                                </div>

                                <!-- Tour Package -->
                                <div class="group relative">
                                    <a href="{{ route('work_permit') }}"
                                        class="flex items-center cursor-pointer glassy-link gap-1 transition">
                                        Tour Package
                                        <i class="fa-solid fa-angle-down text-sm"></i>
                                    </a>

                                    <div
                                        class="absolute left-0 top-full z-50 px-2 py-2 w-[17rem] glassy-bg lg:[clip-path:polygon(90%_0,100%_5%,100%_100%,10%_100%,0_95%,0_0)] shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform scale-y-0 origin-top group-hover:scale-y-100">
                                        <!-- Overlay to darken a bit for better readability -->
                                        <div class="absolute inset-0 bg-black/50"></div>

                                        <ul class="py-2 text-[14px] font-bold text-white">

                                            <li>
                                                <a href="{{ route('tour_package') }}"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">
                                                    Dubai
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('tour_package') }}"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">
                                                    Thailand
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('tour_package') }}"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">
                                                    Malaysia
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('tour_package') }}"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">
                                                    China
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('tour_package') }}"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">
                                                    Srilanka
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('tour_package') }}"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">
                                                    Maldives
                                                </a>
                                            </li>


                                        </ul>

                                    </div>
                                </div>

                                <!-- Our Services -->
                                <div class="group relative">
                                    <a href="{{ route('home') }}#our-services"
                                        class="flex items-center cursor-pointer glassy-link gap-1 transition">
                                        Services
                                        <i class="fa-solid fa-angle-down text-sm"></i>
                                    </a>

                                    <div
                                        class="absolute left-0 top-full z-50 px-2 w-[17rem] glassy-bg lg:[clip-path:polygon(90%_0,100%_5%,100%_100%,10%_100%,0_95%,0_0)] shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform scale-y-0 origin-top group-hover:scale-y-100">
                                        <!-- Overlay to darken a bit for better readability -->
                                        <div class="absolute inset-0 bg-black/50"></div>
                                        <ul class="py-2 text-[14px] uppercase font-bold text-white">

                                            <li>
                                                <a href="{{ route('visa_consulting') }}"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">Visa
                                                    Consulting</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('immigration') }}"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">Immigration
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Success Stories -->
                                {{-- <div class="group relative">
                  <a
                    href="{{route('success_stories')}}"
                    class="flex items-center cursor-pointer glassy-link gap-1 transition"
                  >
                    Success Stories
                    <i class="fa-solid fa-angle-down text-sm"></i>
                  </a>

                  <div
                    class="absolute left-0 top-full z-50 px-2 w-[17rem] glassy-bg lg:[clip-path:polygon(90%_0,100%_5%,100%_100%,10%_100%,0_95%,0_0)] shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform scale-y-0 origin-top group-hover:scale-y-100"
                  >
                    <!-- Overlay to darken a bit for better readability -->
                    <div class="absolute inset-0 bg-black/50"></div>
                    <ul class="py-2 text-[14px] uppercase font-bold text-white">
                      <li>
                        <a
                          href="{{route('visa_success')}}"
                          class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer"
                          >Visa Success</a
                        >
                      </li>
                      <li>
                        <a
                          href="{{route('our_students')}}"
                          class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer"
                          >Our Students</a
                        >
                      </li>
                      <li>
                        <a
                          href="{{route('our_students')}}"
                          class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer"
                          >Our Events</a
                        >
                      </li>
                    </ul>
                  </div>
                </div> --}}

                                <!-- English Test -->
                                <div class="group relative">
                                    <a href="{{ route('english_test') }}"
                                        class="flex items-center cursor-pointer glassy-link gap-1 transition">
                                        English Test <i class="fa-solid fa-angle-down text-sm"></i>
                                    </a>

                                    <div
                                        class="absolute left-0 top-full z-50 px-2 w-[17rem] glassy-bg lg:[clip-path:polygon(90%_0,100%_5%,100%_100%,10%_100%,0_95%,0_0)] shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform scale-y-0 origin-top group-hover:scale-y-100">
                                        <!-- Overlay to darken a bit for better readability -->
                                        <div class="absolute inset-0 bg-black/50"></div>
                                        <ul class="py-2 text-[14px] text-white uppercase font-bold">
                                            <li>
                                                <a href="{{ route('english_test') }}#ielts"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">IELTS</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('english_test') }}#toefl"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">TOEFL</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('english_test') }}#pte"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">PTE</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('english_test') }}#duolingo"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">Duolingo</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('english_test') }}#cambridge"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">Cambridge</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('english_test') }}#password"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">Password</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('english_test') }}#michigan"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">Michigan</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('english_test') }}#itep"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">ITEP</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('english_test') }}#anglia"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">Anglia</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('english_test') }}#sat"
                                                    class="block text-ani w-fit pl-4 py-2 my-1 cursor-pointer">SAT</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Contact -->
                                <a href="{{ route('contact') }}"
                                    class="cursor-pointer glassy-link transition">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <!-- Mobile Menu -->
                <div id="mobileMenu"
                    class="xl:hidden glassy-bg shadow-lg w-full max-w-[360px]
                fixed top-0 right-0 z-50
                transform translate-x-full
                transition-transform duration-300 ease-in-out">
                    <div class="flex justify-end p-4">
                        <button id="mobileMenuClose" class="text-white text-2xl hover:text-red-400 transition"
                            aria-label="Close menu">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <ul class="flex flex-col py-4 px-4 space-y-3 text-[17px] text-white font-semibold">
                        <li>
                            <a href={{ route('about') }}
                                class="hover:text-blue-700 transition-all duration-300 ease-in">About Us</a>
                        </li>

                        <!-- Study Destination -->
                        <li class="mobile-dropdown">
                            <button type="button"
                                class="flex justify-between w-full hover:text-blue-700 transition-all duration-300 ease-in">
                                Study Destination <i class="fa-solid fa-angle-down"></i>
                            </button>
                            <ul
                                class="mobile-submenu max-h-0 overflow-hidden opacity-0
                        transition-all duration-300 ease-in-out
                        space-y-2 bg-transparent text-white text-[16px]">
                                @if ($studyInfo)
                                    @foreach ($studyInfo as $study)
                                        @if ($study->tag !== 'Europe')
                                            @if ($study->id < 10)
                                                <li class="border-b border-white pl-4">
                                                    <a href="{{ route('study', $study->slug) }}"
                                                        id="{{ $study->id }}"
                                                        class="hover:text-blue-900">{{ $study->name }}</a>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                @endif

                                <li class="mobile-dropdown border-b border-white pl-4">
                                    <button type="button"
                                        class="flex justify-between w-full py-2 hover:text-blue-700">
                                        Europe <i class="fa-solid fa-angle-down"></i>
                                    </button>

                                    <ul
                                        class="mobile-submenu max-h-0 overflow-hidden opacity-0
                          transition-all duration-300 ease-in-out pl-4">
                                        @foreach ($europeStudy as $study)
                                            <li class="py-1">
                                                <a href="{{ route('study', $study->slug) }}"
                                                    class="hover:text-blue-900">
                                                    {{ $study->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                                @if ($studyInfo)
                                    @foreach ($studyInfo as $study)
                                        @if ($study->tag !== 'Europe')
                                            @if ($study->id > 10)
                                                <li class="border-b border-white pl-4">
                                                    <a href="{{ route('study', $study->slug) }}"
                                                        id="{{ $study->id }}"
                                                        class="hover:text-blue-900">{{ $study->name }}</a>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                @endif

                            </ul>
                        </li>

                        <!-- Work Permit -->
                        <li class="mobile-dropdown">
                            <button type="button"
                                class="flex justify-between w-full hover:text-blue-700 transition-all duration-300 ease-in">
                                Work Permit <i class="fa-solid fa-angle-down"></i>
                            </button>
                            <ul
                                class="mobile-submenu max-h-0 overflow-hidden opacity-0
                        transition-all duration-300 ease-in-out
                        space-y-2 bg-transparent text-white text-[16px]">

                                <li class="border-b border-white pl-4">
                                    <a href="{{ route('work_permit') }}" class="hover:text-blue-900">Canada</a>
                                </li>

                                <li class="border-b border-white pl-4">
                                    <a href="{{ route('work_permit') }}" class="hover:text-blue-900">UK</a>
                                </li>

                                <li class="border-b border-white pl-4">
                                    <a href="{{ route('work_permit') }}" class="hover:text-blue-900">UAE</a>
                                </li>


                                <li class="mobile-dropdown border-b border-white pl-4">
                                    <button type="button"
                                        class="flex justify-between w-full py-2 hover:text-blue-700">
                                        Europe <i class="fa-solid fa-angle-down"></i>
                                    </button>

                                    <ul
                                        class="mobile-submenu max-h-0 overflow-hidden opacity-0
                          transition-all duration-300 ease-in-out pl-4">

                                        <li class="py-1">
                                            <a href="{{ route('work_permit') }}" class="hover:text-blue-900">
                                                Spain
                                            </a>
                                        </li>

                                        <li class="py-1">
                                            <a href="{{ route('work_permit') }}" class="hover:text-blue-900">
                                                Portugal
                                            </a>
                                        </li>

                                        <li class="py-1">
                                            <a href="{{ route('work_permit') }}" class="hover:text-blue-900">
                                                Denmark
                                            </a>
                                        </li>

                                        <li class="py-1">
                                            <a href="{{ route('work_permit') }}" class="hover:text-blue-900">
                                                Servia
                                            </a>
                                        </li>

                                        <li class="py-1">
                                            <a href="{{ route('work_permit') }}" class="hover:text-blue-900">
                                                Hungary
                                            </a>
                                        </li>

                                        <li class="py-1">
                                            <a href="{{ route('work_permit') }}" class="hover:text-blue-900">
                                                Finland
                                            </a>
                                        </li>

                                        <li class="py-1">
                                            <a href="{{ route('work_permit') }}" class="hover:text-blue-900">
                                                Sweden
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </li>

                        <!-- Tour package -->
                        <li class="mobile-dropdown">
                            <button type="button"
                                class="flex justify-between w-full hover:text-blue-700 transition-all duration-300 ease-in">
                                Tour Package <i class="fa-solid fa-angle-down"></i>
                            </button>
                            <ul
                                class="mobile-submenu max-h-0 overflow-hidden opacity-0
                        transition-all duration-300 ease-in-out
                        space-y-2 bg-transparent text-white text-[16px]">

                                <li class="border-b border-white pl-4">
                                    <a href="{{ route('tour_package') }}" class="hover:text-blue-900">Dubai</a>
                                </li>

                                <li class="border-b border-white pl-4">
                                    <a href="{{ route('tour_package') }}" class="hover:text-blue-900">Thailand</a>
                                </li>

                                <li class="border-b border-white pl-4">
                                    <a href="{{ route('tour_package') }}" class="hover:text-blue-900">Malaysia</a>
                                </li>

                                <li class="border-b border-white pl-4">
                                    <a href="{{ route('tour_package') }}" class="hover:text-blue-900">China</a>
                                </li>

                                <li class="border-b border-white pl-4">
                                    <a href="{{ route('tour_package') }}" class="hover:text-blue-900">Srilanka</a>
                                </li>

                                <li class="border-b border-white pl-4">
                                    <a href="{{ route('tour_package') }}" class="hover:text-blue-900">Maldives</a>
                                </li>


                            </ul>
                        </li>

                        <!-- Services -->
                        <li class="mobile-dropdown">
                            <button type="button"
                                class="flex justify-between w-full hover:text-blue-700 transition-all duration-300 ease-in">
                                Services <i class="fa-solid fa-angle-down"></i>
                            </button>
                            <ul
                                class="mobile-submenu max-h-0 overflow-hidden opacity-0
                        transition-all duration-300 ease-in-out
                        space-y-2 bg-transparent text-white text-[16px]">
                                <li class="border-b border-white pl-4">
                                    <a href="{{ route('home') }}#our-services" class="hover:text-blue-900">Our
                                        Services</a>
                                </li>
                                <li class="border-b border-white pl-4">
                                    <a href={{ route('visa_consulting') }} class="hover:text-blue-900">Visa
                                        Consulting</a>
                                </li>
                                <li class=" pl-4">
                                    <a href={{ route('immigration') }} class="hover:text-blue-900">Immigration</a>
                                </li>
                            </ul>
                        </li>

                        <!-- ✅ Success Stories (ADDED) -->
                        {{-- <li class="mobile-dropdown">
              <button
                type="button"
                class="flex justify-between w-full hover:text-blue-700 transition-all duration-300 ease-in"
              >
                Success Stories <i class="fa-solid fa-angle-down"></i>
              </button>
              <ul
                class="mobile-submenu max-h-0 overflow-hidden opacity-0
                        transition-all duration-300 ease-in-out
                        space-y-2 bg-transparent text-white text-[16px]"
              >
                <li class="border-b border-white pl-4">
                  <a href={{route('visa_success')}} class="hover:text-blue-900"
                    >Visa Success</a
                  >
                </li>
                <li class="border-b border-white pl-4">
                  <a href={{route('our_students')}} class="hover:text-blue-900"
                    >Our Students</a
                  >
                </li>
                <li class="pl-4">
                  <a href={{route('our_students')}} class="hover:text-blue-900"
                    >Our Events</a
                  >
                </li>
              </ul>
            </li> --}}

                        <!-- English Test -->
                        <li class="mobile-dropdown">
                            <button type="button"
                                class="flex justify-between w-full hover:text-blue-700 transition-all duration-300 ease-in">
                                English Test <i class="fa-solid fa-angle-down"></i>
                            </button>
                            <ul
                                class="mobile-submenu max-h-0 overflow-hidden opacity-0
                        transition-all duration-300 ease-in-out
                        space-y-2 bg-transparent text-white text-[16px]">
                                <li class="border-b border-white pl-4">
                                    <a href="{{ route('english_test') }}#ielts" class="hover:text-blue-900">IELTS</a>
                                </li>
                                <li class="border-b border-white pl-4">
                                    <a href="{{ route('english_test') }}#toefl" class="hover:text-blue-900">TOEFL</a>
                                </li>
                                <li class="border-b border-white pl-4">
                                    <a href="{{ route('english_test') }}#pte" class="hover:text-blue-900">PTE</a>
                                </li>
                                <li class="border-b border-white pl-4">
                                    <a href="{{ route('english_test') }}#duolingo"
                                        class="hover:text-blue-900">Duolingo</a>
                                </li>
                                <li class="border-b border-white pl-4">
                                    <a href="{{ route('english_test') }}#cambridge"
                                        class="hover:text-blue-900">Cambridge</a>
                                </li>
                                <li class="border-b border-white pl-4">
                                    <a href="{{ route('english_test') }}#password"
                                        class="hover:text-blue-900">Password</a>
                                </li>
                                <li class="border-b border-white pl-4">
                                    <a href="{{ route('english_test') }}#michigan"
                                        class="hover:text-blue-900">Michigan</a>
                                </li>
                                <li class="border-b border-white pl-4">
                                    <a href="{{ route('english_test') }}#itep" class="hover:text-blue-900">ITEP</a>
                                </li>
                                <li class="border-b border-white pl-4">
                                    <a href="{{ route('english_test') }}#anglia"
                                        class="hover:text-blue-900">Anglia</a>
                                </li>
                                <li class="pl-4">
                                    <a href="{{ route('english_test') }}#sat" class="hover:text-blue-900">SAT</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href='{{ route('contact') }}'
                                class="hover:text-blue-700 transition-all duration-300 ease-in">Contact</a>
                        </li>
                        <li>
                            <div class="py-2 flex flex-col items-start">
                                <a href="{{ route('study_destination') }}"
                                    class="px-8 py-2 cursor-pointer text-white rounded-full text-[15px] font-bold bg-[var(--secondary-color)] hover:bg-[var(--secondary-color)]/50 transition-all duration-300">
                                    Find Destination
                                </a>
                                <button
                                    class="openContactModal px-8 py-2 btn-ani cursor-pointer rounded-[0.5rem] mt-4 text-[15px] font-bold bg-white group transition-all duration-300">
                                    <span class="text-black group-hover:text-white">Book An Appointment</span>
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <!--- footer section --->
        <section
            class="text-start pb-4 md:pb-8 lg:pb-16 pt-4 md:pt-12 lg:pt-20 px-8 md:px-6 bg-gradient-to-r from-gray-700 to-[var(--secondary-color)] text-white grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
            <!-- Logo and Social -->
            <div class="flex flex-col items-start gap-4">
                <div class="w-[200px]">
                    <a href="{{ route('home') }}">
                        <img src={{ asset('images/nextnetslogo.png') }} alt="NextNets Logo" loading="lazy"
                            class="w-full" />
                    </a>
                </div>
                <div class="flex gap-4 mt-2">
                    <a href="#"><i
                            class="fa-brands fa-square-facebook text-[30px] text-white hover:text-blue-300 transition-all duration-200"></i></a>
                    <a href="#"><i
                            class="fa-brands fa-square-linkedin text-[30px] text-white hover:text-blue-300 transition-all duration-200"></i></a>
                    <a href="#"><i
                            class="fa-brands fa-square-x-twitter text-[30px] text-white hover:text-blue-300 transition-all duration-200"></i></a>
                    <a href="#"><i
                            class="fa-brands fa-square-instagram text-[30px] text-white hover:text-blue-300 transition-all duration-200"></i></a>
                    <a href="#"><i
                            class="fa-brands fa-square-youtube text-[30px] text-white hover:text-blue-300 transition-all duration-200"></i></a>
                </div>
            </div>

            <!-- Contact Us -->
            <div class="flex flex-col items-start gap-4">
                <h5 class="text-[25px] font-bold">CONTACT US</h5>
                <span class="flex gap-4 items-center text-white">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Plot 57, Road 13, Sector 10, Uttara Model Town, Dhaka</span>
                </span>
                <div class="flex flex-col gap-2 items-start">
                    <span><i class="fa-solid fa-phone mr-2"></i>+8801800099339</span>
                    <!-- <span><i class="fa-solid fa-phone mr-2"></i>+8801894935767</span> -->
                    <span><i class="fa-solid fa-envelope mr-3"></i>info@nextnestbd.com</span>
                    <a href="{{ route('contact') }}"
                        class="cursor-pointer hover:underline hover:underline-offset-4 transition-all duration-300">
                        <i class="fa-solid fa-arrows-turn-right mr-2"></i>Contact Us
                    </a>
                </div>
            </div>

            <!-- Quick Link -->
            <div class="flex flex-col items-start gap-4">
                <h5 class="text-[25px] font-bold">QUICK LINK</h5>
                <div class="flex flex-col gap-2 items-start">
                    <a href="{{ route('about') }}"
                        class="hover:underline hover:underline-offset-4 transition-all duration-300 cursor-pointer">About
                        Us</a>
                    <a href="{{ route('english_test') }}"
                        class="hover:underline hover:underline-offset-4 transition-all duration-300 cursor-pointer">English
                        Test</a>
                    <a href="{{ route('our_students') }}"
                        class="hover:underline hover:underline-offset-4 transition-all duration-300 cursor-pointer">Our
                        Event</a>
                    <a href="{{ route('visa_success') }}"
                        class="hover:underline hover:underline-offset-4 transition-all duration-300 cursor-pointer">Visa
                        Success</a>
                    <a href="{{ route('success_stories') }}"
                        class="hover:underline hover:underline-offset-4 transition-all duration-300 cursor-pointer">Success
                        Stories</a>
                    <a href="{{ route('study_destination') }}"
                        class="hover:underline hover:underline-offset-4 transition-all duration-300 cursor-pointer">Study
                        Destination</a>
                    <a href="{{ route('university_pathway') }}"
                        class="hover:underline hover:underline-offset-4 transition-all duration-300 cursor-pointer">University
                        Pathway</a>
                </div>
            </div>

            <!-- Study Destinations -->
            <div class="flex flex-col items-start gap-4">
                <h5 class="text-[25px] font-bold">STUDY DESTINATIONS</h5>

                <div class="flex flex-col gap-2 items-start" id="studyList">
                    @foreach ($studyInfo as $index => $study)
                        <a href="{{ route('study', $study->slug) }}" id="study-{{ $study->id }}"
                            class="study-item hover:underline hover:underline-offset-4
                    transition-all duration-300 cursor-pointer
                    {{ $index >= 5 ? 'hidden' : '' }}">
                            {{ $study->name }}
                        </a>
                    @endforeach
                </div>

                @if (count($studyInfo) > 5)
                    <button id="toggleStudy" class="text-sm font-semibold text-white hover:underline">
                        See More
                    </button>
                @endif
            </div>

        </section>

        <!--- end footer section --->

        <!-- Back to Top Button -->
        <button id="backToTop"
            class="hidden fixed bottom-6 right-6 bg-[#3498DB] text-white px-4 py-3 rounded-full shadow-lg transition-all duration-300 hover:bg-[#6CC5FF] hover:shadow-xl cursor-pointer z-50">
            ↑
        </button>

        <!-- Contact Form Modal -->

        <div id="contactModal" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 hidden p-4">
            <div
                class="bg-white w-full max-w-3xl p-6 sm:p-8 rounded-xl relative shadow-lg overflow-y-auto max-h-[90vh]">
                <!-- Close Button -->
                <button id="closeContactModal"
                    class="absolute top-4 right-4 text-gray-500 hover:text-red-500 text-2xl">
                    &times;
                </button>

                <h2 class="text-2xl sm:text-3xl font-bold mb-6 text-center">Send Us a Message</h2>

                <form action="{{ route('contactSubmit') }}" method="POST"
                    class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @csrf
                    <!-- Name -->
                    <div class="w-full">
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Your Name*"
                            class="input w-full p-3 border rounded-md focus:ring-2 focus:ring-[var(--secondary-color)]"
                            required>
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="w-full">
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Your Email*"
                            class="input w-full p-3 border rounded-md focus:ring-2 focus:ring-[var(--secondary-color)]"
                            required>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Phone -->
                    <div class="w-full">
                        <input type="text" name="phone" value="{{ old('phone') }}"
                            placeholder="Phone Number"
                            class="input w-full p-3 border rounded-md focus:ring-2 focus:ring-[var(--secondary-color)]">
                        @error('phone')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Subject -->
                    <div class="w-full">
                        <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Subject"
                            class="input w-full p-3 border rounded-md focus:ring-2 focus:ring-[var(--secondary-color)]">
                        @error('subject')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Message -->
                    <div class="md:col-span-2 w-full">
                        <textarea name="message" rows="5" placeholder="Your Message*"
                            class="input w-full p-3 border rounded-md focus:ring-2 focus:ring-[var(--secondary-color)]" required>{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit -->
                    <div class="md:col-span-2 text-center mt-2">
                        <button type="submit"
                            class="px-6 py-3 bg-[var(--secondary-color)] text-white rounded-lg hover:opacity-90 w-full sm:w-auto">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- JavaScript for desktop menu -->

    <script>
        document.querySelectorAll(".desktop-dropdown").forEach(item => {
            const btn = item.querySelector("button");
            const submenu = item.querySelector(".desktop-submenu");
            const icon = btn.querySelector("i");

            btn.addEventListener("click", () => {
                const isOpen = submenu.classList.contains("open");

                // Close all other desktop dropdowns
                document.querySelectorAll(".desktop-submenu").forEach(menu => {
                    menu.classList.remove("open");
                    menu.style.maxHeight = null;
                    menu.style.opacity = "0";
                });

                document.querySelectorAll(".desktop-dropdown i").forEach(i => {
                    i.style.transform = "rotate(0deg)";
                });

                // Toggle current
                if (!isOpen) {
                    submenu.classList.add("open");
                    submenu.style.maxHeight = submenu.scrollHeight + "px";
                    submenu.style.opacity = "1";
                    icon.style.transform = "rotate(180deg)";
                }
            });
        });
    </script>


    <!-- JavaScript for menu -->
    <script>
        const mobileMenuBtn = document.getElementById("mobileMenuBtn");
        const mobileMenu = document.getElementById("mobileMenu");
        const menuOverlay = document.getElementById("menuOverlay");
        const mobileMenuClose = document.getElementById("mobileMenuClose");

        function openMenu() {
            mobileMenu.classList.remove("translate-x-full");

        }

        function closeMenu() {
            mobileMenu.classList.add("translate-x-full");

        }

        mobileMenuBtn.addEventListener("click", openMenu);
        mobileMenuClose.addEventListener("click", closeMenu);


        document.querySelectorAll(".mobile-dropdown").forEach((item) => {
            const btn = item.querySelector("button");
            const submenu = item.querySelector(".mobile-submenu");

            btn.addEventListener("click", () => {
                submenu.classList.toggle("open");
            });
        });
    </script>



    <!-- JavaScript for header -->

    <script>
        let lastScroll = 0;
        const header = document.getElementById("mainHeader");
        const upperHeader = document.getElementById("upper-header");
        const nav = header.querySelector("nav");

        window.addEventListener("scroll", () => {
            const currentScroll = window.pageYOffset;
            const pageWidth = window.innerWidth;

            if (currentScroll > lastScroll && currentScroll > 300) {
                // Scrolling Down → Hide Header
                upperHeader.classList.add("upper-hide");
                header.classList.add("header-hide");
                header.classList.remove("header-show");
            } else {
                upperHeader.classList.add("upper-hide");
                header.classList.add("header-show");
                if (pageWidth >= 1280) {
                    nav.classList.add("margin");
                }

                header.classList.remove("header-hide");
            }

            if (currentScroll === 0) {
                upperHeader.classList.add("upper-show");
                nav.classList.remove("margin");
            } else {
                upperHeader.classList.remove("upper-show");
            }

            lastScroll = currentScroll;
        });
    </script>

    <!-- JavaScript for hero -->

    <script>
        window.addEventListener("load", () => {
            document.querySelector(".about-title").classList.add("show");
        });
    </script>

    <!-- JavaScript for back to top -->

    <script>
        const backToTopBtn = document.getElementById("backToTop");

        window.addEventListener("scroll", () => {
            const scrollPos = window.scrollY;
            const docHeight =
                document.documentElement.scrollHeight - window.innerHeight;

            // Show when user scrolls 20%
            if (scrollPos > docHeight * 0.2) {
                backToTopBtn.classList.remove("hidden");
                backToTopBtn.classList.add("flex");
            } else {
                backToTopBtn.classList.add("hidden");
                backToTopBtn.classList.remove("flex");
            }
        });

        // Smooth scroll to top
        backToTopBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>

    <!-- JavaScript for swiper -->

    <script>
        // Initialize Swiper
        var swiper = new Swiper(".swiper-container", {
            loop: true,
            speed: 1000,
            parallax: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            on: {
                init: function() {
                    requestAnimationFrame(() => {
                        document
                            .querySelector(".swiper-container")
                            .classList.remove("opacity-0");
                    });
                    animateScale(this.slides[this.activeIndex]);
                },
                slideChangeTransitionStart: function() {
                    animateScale(this.slides[this.activeIndex]);
                },
            },
        });

        function animateScale(slide) {
            const inner = slide.querySelector(".slide-inner");
            if (!inner) return;

            // Clear previous timeout
            if (inner.scaleTimeout) clearTimeout(inner.scaleTimeout);

            // Reset transition instantly
            inner.style.transition = "none";
            inner.style.transform = "scale(1.1)";

            // Trigger reflow so browser notices the change
            inner.offsetHeight;

            // Start from scale 1.1
            inner.style.transition = "transform 5s ease";
            inner.style.transform = "scale(1.1)";

            // Slowly scale back to normal (scale 1) after a tiny delay to trigger transition
            inner.scaleTimeout = setTimeout(() => {
                inner.style.transform = "scale(1)";
            }, 50); // slight delay to ensure transition triggers
        }

        // Apply initial scale 1.1 to all slides so first slide is ready
        document.querySelectorAll(".slide-inner").forEach((inner) => {
            inner.style.transform = "scale(1.1)";
        });
    </script>

    <!-- Initialize Swiper -->
    <script>
        const mySwiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: false,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                },
            },
        });
    </script>

    <!-- JavaScript for div card -->

    <script>
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove(
                            "translate-y-10",
                            "opacity-0",
                            "scale-0"
                        );
                        entry.target.classList.add(
                            "translate-y-0",
                            "opacity-100",
                            "scale-100"
                        );
                    }
                });
            }, {
                threshold: 0.1, // Trigger when 30% of the element is visible
            }
        );

        // Animate headings
        document.querySelectorAll("h2, h3").forEach((el) => observer.observe(el));

        // Animate cards
        document.querySelectorAll(".grid > div").forEach((el, index) => {
            el.style.transitionDelay = `${index * 20}ms`; // Stagger animation
            observer.observe(el);
        });
    </script>

    <!-- JavaScript for vertical card -->

    <script>
        const observer2 = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove(
                            "translate-x-[-50px]",
                            "translate-x-[50px]",
                            "translate-y-10",
                            "opacity-0"
                        );
                        entry.target.classList.add(
                            "translate-x-0",
                            "translate-y-0",
                            "opacity-100"
                        );
                    }
                });
            }, {
                threshold: 0.1
            }
        );

        // Animate all cards (text and image)
        document
            .querySelectorAll(".card .text-card, .card .image-card")
            .forEach((el, index) => {
                el.style.transitionDelay = `${index * 20}ms`; // stagger effect
                observer2.observe(el);
            });
    </script>

    <!-- JavaScript for promo popup -->

    <script>
        const popup = document.getElementById("promoPopup");
        const closeBtn = document.getElementById("popupClose");

        // Show popup only if not closed in this session
        if (!sessionStorage.getItem("promoClosed")) {
            setTimeout(() => {
                popup.classList.remove("hidden");
            }, 800); // slight delay feels premium
        }

        closeBtn.addEventListener("click", () => {
            popup.classList.add("hidden");
            sessionStorage.setItem("promoClosed", "true");
        });
    </script>

    <!-- JavaScript for map -->

    <script>
        window.addEventListener("DOMContentLoaded", () => {
            const headBtn = document.getElementById("head-btn");
            const subBtn = document.getElementById("sub-btn");
            const headSection = document.getElementById("head");
            const subSection = document.getElementById("sub");

            window.addEventListener("load", () => {
                headSection.style.display = "block";
                subSection.style.display = "none";
                headBtn.classList.add("active");
            });

            headBtn.addEventListener("click", () => {
                headSection.style.display = "block";
                subSection.style.display = "none";
                headBtn.classList.add("active");
                subBtn.classList.remove("active");
            });

            subBtn.addEventListener("click", () => {
                headSection.style.display = "none";
                subSection.style.display = "block";
                subBtn.classList.add("active");
                headBtn.classList.remove("active");
            });
        });
    </script>

    <!-- JavaScript for details -->
    <script>
        // Main dropdown
        window.addEventListener("DOMContentLoaded", () => {
            const more = document.getElementById("more");
            const info = document.getElementById("infoWrapper");
            const mainIcon = more.querySelector("i");

            more.addEventListener("click", () => {
                info.classList.toggle("open");

                if (info.classList.contains("open")) {
                    mainIcon.classList.replace("fa-plus", "fa-minus");
                    mainIcon.style.transform = "rotate(180deg)";
                } else {
                    mainIcon.classList.replace("fa-minus", "fa-plus");
                    mainIcon.style.transform = "rotate(0deg)";
                }
            });

            // Inner accordion
            const lite = document.getElementById("lite");
            const details = document.getElementById("details");
            const innerIcon = lite.querySelector("i");

            lite.addEventListener("click", () => {
                details.classList.toggle("open");

                if (details.classList.contains("open")) {
                    innerIcon.classList.replace("fa-plus", "fa-minus");
                    innerIcon.style.transform = "rotate(180deg)";
                    details.classList.remove("hidden");
                } else {
                    innerIcon.classList.replace("fa-minus", "fa-plus");
                    innerIcon.style.transform = "rotate(0deg)";
                    details.classList.add("hidden");
                }
            });
        });
    </script>

    <!-- JavaScript for safe and city info -->
    <script>
        // Desktop buttons
        window.addEventListener("DOMContentLoaded", () => {
            window.addEventListener("DOMContentLoaded", () => {
                const safeBtn = document.getElementById("safe");
                const cityBtn = document.getElementById("city");
                const safeInfo = document.getElementById("safe-info");
                const cityInfo = document.getElementById("city-info");
                showInfo(safeBtn, cityBtn, safeInfo, cityInfo);

                function showInfo(safeBtn, cityBtn, safeInfo, cityInfo) {
                    safeBtn.addEventListener("click", () => {
                        // Show Safe info
                        safeInfo.classList.remove("hidden");
                        cityInfo.classList.add("hidden");

                        // Button colors
                        safeBtn.classList.add("bg-[var(--primary-color)]", "text-white");
                        safeBtn.classList.remove("bg-white", "text-black");

                        cityBtn.classList.remove("bg-[var(--primary-color)]", "text-white");
                        cityBtn.classList.add("bg-white", "text-black");
                    });

                    cityBtn.addEventListener("click", () => {
                        // Show City info
                        cityInfo.classList.remove("hidden");
                        safeInfo.classList.add("hidden");

                        // Button colors
                        cityBtn.classList.add("bg-[var(--primary-color)]", "text-white");
                        cityBtn.classList.remove("bg-white", "text-black");

                        safeBtn.classList.remove("bg-[var(--primary-color)]", "text-white");
                        safeBtn.classList.add("bg-white", "text-black");
                    });
                }
            });
        });
    </script>

    <!-- JavaScript for mobile safe and city info -->
    <script>
        window.addEventListener("DOMContentLoaded", () => {
            const safeBtnM = document.getElementById("safe-btn-mobile");
            const cityBtnM = document.getElementById("city-btn-mobile");

            const safeContent = document.getElementById("safe-content-mobile");
            const cityContent = document.getElementById("city-content-mobile");

            const safeIcon = document.getElementById("safe-icon-mobile");
            const cityIcon = document.getElementById("city-icon-mobile");

            function closeAll() {
                safeContent.classList.remove("open");
                cityContent.classList.remove("open");

                safeIcon.classList.replace("fa-minus", "fa-plus");
                cityIcon.classList.replace("fa-minus", "fa-plus");

                safeBtnM.classList.remove("bg-[var(--primary-color)]", "text-white");
                safeBtnM.classList.add("bg-[var(--secondary-color)]", "text-black");

                cityBtnM.classList.remove("bg-[var(--primary-color)]", "text-white");
                cityBtnM.classList.add("bg-white", "text-black");
            }

            safeBtnM.addEventListener("click", () => {
                const isOpen = safeContent.classList.contains("open");
                closeAll();
                if (!isOpen) {
                    safeContent.classList.add("open");
                    safeIcon.classList.replace("fa-plus", "fa-minus");
                    safeBtnM.classList.add("bg-[var(--primary-color)]", "text-white");
                    safeBtnM.classList.remove(
                        "bg-[var(--secondary-color)]",
                        "text-black"
                    );
                }
            });

            cityBtnM.addEventListener("click", () => {
                const isOpen = cityContent.classList.contains("open");
                closeAll();
                if (!isOpen) {
                    cityContent.classList.add("open");
                    cityIcon.classList.replace("fa-plus", "fa-minus");
                    cityBtnM.classList.add("bg-[var(--primary-color)]", "text-white");
                    cityBtnM.classList.remove("bg-white", "text-black");
                }
            });
        });
    </script>

    <!-- JavaScript for a card -->

    <script>
        const observer3 = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove(
                            "translate-y-10",
                            "opacity-0",
                            "scale-0"
                        );
                        entry.target.classList.add(
                            "translate-y-0",
                            "opacity-100",
                            "scale-100"
                        );
                    }
                });
            }, {
                threshold: 0.1, // Trigger when 30% of the element is visible
            }
        );

        // Animate headings
        document.querySelectorAll("h2, h3").forEach((el) => observer3.observe(el));

        // Animate cards
        document.querySelectorAll(".grid > a").forEach((el, index) => {
            el.style.transitionDelay = `${index * 20}ms`; // Stagger animation
            observer3.observe(el);
        });
    </script>

    <!-- JavaScript for flex card -->

    <script>
        const observer4 = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove(
                            "translate-y-10",
                            "opacity-0",
                            "scale-0"
                        );
                        entry.target.classList.add(
                            "translate-y-0",
                            "opacity-100",
                            "scale-100"
                        );
                    }
                });
            }, {
                threshold: 0.1, // Trigger when 30% of the element is visible
            }
        );

        // Animate headings
        document.querySelectorAll("h2, h3").forEach((el) => observer4.observe(el));

        // Animate cards
        document.querySelectorAll(".flex > div").forEach((el, index) => {
            el.style.transitionDelay = `${index * 1}ms`; // Stagger animation
            observer4.observe(el);
        });
    </script>

    <!-- Javascript for search -->

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const input = document.getElementById('globalSearch');
            const resultsBox = document.getElementById('searchResults');

            if (!input || !resultsBox) return;

            let controller;

            input.addEventListener('input', async function() {
                const q = this.value.trim();

                if (q.length < 1) {
                    resultsBox.classList.add('hidden');
                    resultsBox.innerHTML = '';
                    return;
                }

                if (controller) controller.abort();
                controller = new AbortController();

                try {
                    const res = await fetch(`/search?q=${encodeURIComponent(q)}`, {
                        signal: controller.signal
                    });

                    if (!res.ok) throw new Error('Search failed');

                    const data = await res.json();

                    console.log(data);

                    resultsBox.innerHTML = '';

                    if (!data.length) {
                        resultsBox.innerHTML =
                            `<div class="p-3 text-sm text-gray-500">No results found</div>`;
                        resultsBox.classList.remove('hidden');
                        return;
                    }

                    data.forEach(item => {
                        resultsBox.innerHTML += `
                              <a href="${item.url}"
                                class="block px-4 py-3 text-start hover:bg-gray-100 border-b last:border-0">
                                  <span class="text-xs text-gray-500">${item.type}</span><br>
                                  <span class="font-semibold">${item.name}</span>
                              </a>
                          `;
                    });

                    resultsBox.classList.remove('hidden');

                } catch (err) {
                    if (err.name !== 'AbortError') {
                        console.error(err);
                        resultsBox.classList.add('hidden');
                    }
                }
            });

            document.addEventListener('click', e => {
                if (!e.target.closest('form')) {
                    resultsBox.classList.add('hidden');
                }
            });
        });
    </script>

    <!-- JavaScript for study list toggle -->

    <script>
        document.getElementById("toggleStudy")?.addEventListener("click", function() {
            const hiddenItems = document.querySelectorAll(".study-item.hidden");
            const btn = this;

            if (hiddenItems.length > 0) {
                hiddenItems.forEach(item => item.classList.remove("hidden"));
                btn.textContent = "See Less";
            } else {
                document.querySelectorAll(".study-item").forEach((item, index) => {
                    if (index >= 5) item.classList.add("hidden");
                });
                btn.textContent = "See More";
            }
        });
    </script>


    <!-- Javascript for booking -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('contactModal');
            const openBtns = document.querySelectorAll('.openContactModal');
            const closeBtn = document.getElementById('closeContactModal');

            openBtns.forEach(openBtn => {
                openBtn.addEventListener('click', () => {
                    modal.classList.remove('hidden');
                });
            });

            closeBtn.addEventListener('click', () => {
                modal.classList.add('hidden');
            });

            // Close when clicking outside the modal content
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html>
