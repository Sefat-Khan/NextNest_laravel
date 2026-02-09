@extends('layouts.common')
    

@section('title', 'Home')

@section('content')
    <div class="">
            <!--- hero section --->
    <section
      class="relative w-full min-h-[450px] h-[70vh] md:h-screen overflow-hidden"
    >
      <!-- Swiper -->
      <div class="swiper-container h-full">
        <div class="swiper-wrapper h-full">
          <div
            class="swiper-slide h-full bg-cover bg-center"
            style="background-image: url('{{asset('images/10178983_18288947-01.jpg')}}')"
          ></div>

          <div
            class="swiper-slide h-full bg-cover bg-center"
            style="
              background-image: url('{{asset('images/student-life-classmates-posing-front-university-smiling-camera.jpg')}}');
            "
          ></div>
        </div>
      </div>

      <!-- STATIC CONTENT -->
      <div class="absolute inset-0 z-10 flex flex-col pointer-events-auto">
        <!-- CENTER CONTENT -->
        <div class="flex-1 flex items-center justify-center text-center px-4">
          <div
            class="text-white flex flex-col gap-6 md:gap-8 items-center pointer-events-auto max-w-3xl"
          >
            <h1
              class="text-2xl sm:text-3xl md:text-4xl xl:text-6xl font-bold leading-tight"
            >
              Your Study Abroad Dream
            </h1>

            <form class="w-full max-w-[500px]" onsubmit="return false;">
              <div class="relative">
                <div
                  class="bg-white/15 backdrop-blur-xl rounded-full px-4 py-3 flex gap-3 items-center text-white"
                >
                  <input
                    id="globalSearch"
                    type="search"
                    placeholder="Search Everything"
                    class="flex-1 bg-transparent outline-none ring-0 focus:outline-none focus:ring-0 text-white p-2 appearance-none shadow-none"
                    autocomplete="off"
                  />
                  <i class="fa-solid fa-magnifying-glass"></i>
                </div>

                <!-- Results -->
                <div
                  id="searchResults"
                  class="absolute top-full mt-2 w-full h-[150px] md:h-[220px] lg:h-[160px] bg-white text-black rounded-xl shadow-lg hidden z-50 overflow-y-auto"
                ></div>
              </div>
            </form>
          </div>
        </div>
        <!-- BOTTOM ICON BAR -->
        <div
          class="w-full bg-black/40 backdrop-blur-sm border-t border-white/30 pointer-events-auto"
        >
          <!-- PEER CHECKBOX (MUST BE FIRST) -->
          <input type="checkbox" id="menuToggle" class="peer hidden" />

          <!-- MOBILE TOGGLE -->
          <div
            class="md:hidden px-4 py-3 flex justify-between items-center text-white"
          >
            <span class="font-semibold">Explore</span>

            <label for="menuToggle" class="cursor-pointer">
              <i class="fa-solid fa-bars text-2xl"></i>
            </label>
          </div>

          <!-- MOBILE MENU -->
          <div
            class="md:hidden max-h-0 overflow-hidden peer-checked:max-h-[500px] transition-all duration-300 ease-in-out bg-black/60"
          >
            <div class="flex flex-col gap-4 px-6 py-4 text-white text-sm">
              <a href="{{route('study_destination')}}" class="flex items-center gap-3">
                <i class="fa-solid fa-graduation-cap"></i> Courses
              </a>
              <a href="{{route('study_destination')}}" class="flex items-center gap-3">
                <i class="fa-solid fa-school"></i> Uni & Colleges
              </a>
              <a href="{{route('study_destination')}}" class="flex items-center gap-3">
                <i class="fa-solid fa-dollar-sign"></i> Scholarships
              </a>
              <a href="{{route('english_test')}}" class="flex items-center gap-3">
                <i class="fa-solid fa-medal"></i> Apprenticeships
              </a>
              <a href="{{route('our_students')}}" class="flex items-center gap-3">
                <i class="fa-solid fa-ticket"></i> Events
              </a>
              <a href="{{route('university_pathway')}}" class="flex items-center gap-3">
                <i class="fa-solid fa-book-bookmark"></i> Subject guides
              </a>
              <a href="{{route('university_pathway')}}" class="flex items-center gap-3">
                <i class="fa-solid fa-gear"></i> Industry guides
              </a>
            </div>
          </div>

          <!-- DESKTOP ICON BAR -->
          <div class="hidden md:block">
            <div
              class="max-w-7xl mx-auto px-4 py-4 grid grid-cols-7 gap-4 text-white text-base"
            >
              <a
                href="{{route('study_destination')}}"
                class="group flex flex-col gap-2 items-center"
              >
                <i class="fa-solid fa-graduation-cap text-2xl"></i>
                <span class="group-hover:underline">Courses</span>
              </a>

              <a
                href="{{route('study_destination')}}"
                class="group flex flex-col gap-2 items-center"
              >
                <i class="fa-solid fa-school text-2xl"></i>
                <span class="group-hover:underline">Uni & Colleges</span>
              </a>

              <a
                href="{{route('study_destination')}}"
                class="group flex flex-col gap-2 items-center"
              >
                <i class="fa-solid fa-dollar-sign text-2xl"></i>
                <span class="group-hover:underline">Scholarships</span>
              </a>

              <a
                href="{{route('english_test')}}"
                class="group flex flex-col gap-2 items-center"
              >
                <i class="fa-solid fa-medal text-2xl"></i>
                <span class="group-hover:underline">Apprenticeships</span>
              </a>

              <a
                href="{{route('our_students')}}"
                class="group flex flex-col gap-2 items-center"
              >
                <i class="fa-solid fa-ticket text-2xl"></i>
                <span class="group-hover:underline">Events</span>
              </a>

              <a
                href="{{route('university_pathway')}}"
                class="group flex flex-col gap-2 items-center"
              >
                <i class="fa-solid fa-book-bookmark text-2xl"></i>
                <span class="group-hover:underline">Subject guides</span>
              </a>

              <a
                href="{{route('university_pathway')}}"
                class="group flex flex-col gap-2 items-center"
              >
                <i class="fa-solid fa-gear text-2xl"></i>
                <span class="group-hover:underline">Industry guides</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- end hero section --->

    <!--- study section --->
    <section
      class="flex flex-col gap-8 justify-center items-center pb-4 md:pb-8 lg:pb-16 pt-4 md:pt-12 lg:pt-20 px-4"
    >
      <div class="text-center">
        <h3
          class="text-lg sm:text-xlg md:text-xl lg:text-2xl xl:text-[38px] font-bold leading-snug text-gray-700 translate-y-10 opacity-0 transition-all duration-500 ease-out"
        >
          Turn your Leave for abroad dreams into reality with
        </h3>

        <h2
          class="mt-2 sm:mt-3 text-2xl md:text-4xl lg:text-5xl xl:text-[60px] font-extrabold text-[var(--primary-color)] leading-tight sm:leading-tight lg:leading-none translate-y-10 opacity-0 transition-all duration-500 ease-out delay-150"
        >
          NextNest LEAVE ABROAD
        </h2>
      </div>

      <!-- Responsive Grid -->
      <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-[1300px]"
      >
        <!-- Card 1 -->
        <div
          class="border border-[var(--secondary-color)] shadow-lg overflow-hidden transition-transform transform scale-0 opacity-0 duration-500 card-clip"
        >
          <img
            src={{asset('images/1.png')}}
            alt="student"
            class="w-full h-[260px] object-cover"
          />
          <div class="p-6 text-start">
            <h5 class="text-2xl font-bold mb-2 uppercase">Study Destination</h5>
            <a href="{{route('home')}}"
              class="mt-3 bg-[var(--primary-color)] group btn-clip uppercase cursor-pointer px-6 py-2 rounded-md font-semibold transition text-[20px]"
            >
              <span class="text-white"
                >Learn More</span
              >
            </a>
          </div>
        </div>

        <!-- Duplicate cards OR dynamic cards later -->
        <div
          class="border border-[var(--secondary-color)] shadow-lg card-clip overflow-hidden transition-transform transform scale-0 opacity-0 duration-500 card-clip"
        >
          <img
            src={{asset('images/2.png')}}
            alt="student"
            class="w-full h-[260px] object-cover"
          />
          <div class="p-6 text-start">
            <h5 class="text-2xl font-bold mb-2 uppercase">Work Permit</h5>
            <a href="{{route('home')}}"
              class="mt-3 bg-[var(--primary-color)] group btn-clip uppercase cursor-pointer px-6 py-2 rounded-md font-semibold transition text-[20px]"
            >
              <span class="text-white"
                >Learn More</span
              >
            </a>
          </div>
        </div>

        <div
          class="border border-[var(--secondary-color)] shadow-lg card-clip overflow-hidden transition-transform transform scale-0 opacity-0 duration-500 card-clip"
        >
          <img
            src={{asset('images/3.png')}}
            alt="student"
            class="w-full h-[260px] object-cover"
          />
          <div class="p-6 text-start">
            <h5 class="text-2xl font-bold mb-2 uppercase">Tour Package</h5>
            <a href="{{route('home')}}"
              class="mt-3 bg-[var(--primary-color)] group btn-clip uppercase cursor-pointer px-6 py-2 rounded-md font-semibold transition text-[20px]"
            >
              <span class="text-white"
                >Learn More</span
              >
            </a>
          </div>
        </div>
      </div>
    </section>

    <!--- end study section --->

    <!--- our service section --->
    <section
      id="our-services"
      class="relative text-center pb-3 md:pb-6 lg:pb-12 pt-4 md:pt-12 lg:pt-20 px-4 text-white bg-cover bg-no-repeat"
      style="background-image: url('{{ asset('images/our-service.jpg') }}')"
    >
      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>
      <h2
        class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-[56px] font-extrabold mb-4 sm:mb-6 lg:mb-10 leading-tight sm:leading-tight translate-y-10 opacity-0 transition-all duration-500 ease-out"
      >
        Focus On Our Services
      </h2>

      <div
        class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 lg:gap-10 items-center"
      >
        <!-- Image -->
        <div class="flex justify-center">
          <img
            src={{asset('images/Team-601-01-01-01-02.png')}}
            alt="team"
            class="w-full"
          />
        </div>

        <!-- Service Card -->
        <div class="flex flex-col items-center gap-4 justify-center">
          <div
            class="bg_overlay relative p-6 rounded-xl group glassy-bg w-full max-w-[420px] text-white shadow-lg overflow-hidden transition-all duration-300"
          >
            <h4
              class="text-[22px] md:text-[25px] font-bold mb-2 transition-colors duration-500 group-hover:text-white"
            >
              Personalized Consultation
            </h4>
            <p
              class="text-sm md:text-base font-semibold transition-colors duration-500 group-hover:text-white"
            >
              We help you find the best university and course based on your
              career goals.
            </p>
          </div>
          <div
            class="bg_overlay relative p-6 rounded-xl group glassy-bg w-full max-w-[420px] text-white shadow-lg overflow-hidden transition-all duration-300"
          >
            <h4
              class="text-[22px] md:text-[25px] font-bold mb-2 transition-colors duration-500 group-hover:text-white"
            >
              Application Processing
            </h4>
            <p
              class="text-sm md:text-base font-semibold transition-colors duration-500 group-hover:text-white"
            >
              Expert assistance in submitting university applications and
              securing admissions
            </p>
          </div>
          <div
            class="bg_overlay relative p-6 rounded-xl group glassy-bg w-full max-w-[420px] text-white shadow-lg overflow-hidden transition-all duration-300"
          >
            <h4
              class="text-[22px] md:text-[25px] font-bold mb-2 transition-colors duration-500 group-hover:text-white"
            >
              Visa Assistance
            </h4>
            <p
              class="text-sm md:text-base font-semibold transition-colors duration-500 group-hover:text-white"
            >
              Guidance in preparing student visa applications, ensuring
              compliance and success.
            </p>
          </div>
          <div
            class="bg_overlay relative p-6 rounded-xl glassy-bg w-full max-w-[420px] text-white shadow-lg overflow-hidden transition-all duration-300"
          >
            <h4
              class="text-[22px] md:text-[25px] font-bold mb-2 transition-colors duration-500 group-hover:text-white"
            >
              Pre-Departure & Post-Arrival Support
            </h4>
            <p
              class="text-sm md:text-base font-semibold transition-colors duration-500 group-hover:text-white"
            >
              Assistance with accommodation, travel, and settlement in your
              chosen country.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--- end our service section --->

    <!--- different section --->
    <section
      class="text-center pb-4 md:pb-8 lg:pb-16 pt-4 md:pt-12 lg:pt-20 px-4 bg-white"
    >
      <!-- Section Title -->
      <h2
        class="text-xl sm:text-2xl md:text-4xl lg:text-5xl xl:text-[56px] font-extrabold text-[var(--secondary-color)] mb-6 sm:mb-8 lg:mb-10 leading-tight translate-y-10 opacity-0 transition-all duration-500 ease-out"
      >
        What Makes Us Different
      </h2>

      <!-- Image -->
      <div class="flex justify-center">
        <img
          src={{asset('images/Team-01-01.jpg')}}
          alt="team"
          class="w-full h-auto object-cover rounded-lg"
        />
      </div>
    </section>

    <!--- end different section --->

    <!--- future section --->
    <section
      class="relative text-center pb-4 md:pb-8 lg:pb-16 pt-4 md:pt-12 lg:pt-20 px-4 bg-cover bg-no-repeat text-white"
      style="background-image: url('{{ asset('images/our-service.jpg') }}')"
    >
      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>
      <div class="px-2 md:px-[4rem] 2xl:px-[8rem]">
        <div
          class="relative glassy-bg flex flex-col lg:flex-row gap-6 items-start lg:items-center card"
          style="
            clip-path: polygon(95% 0, 100% 5%, 100% 100%, 5% 100%, 0 95%, 0 0);
            border: 1px solid white;
          "
        >
          <!-- Text Content -->
          <div
            class="w-full lg:w-2/5 text-start pr-4 pl-4 md:pl-8 pt-4 lg:pt-0 text-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
          >
            <h2
              class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-[48px] font-extrabold mb-4 leading-snug text-white"
            >
              Find Your Future
            </h2>
            <p
              class="text-sm sm:text-base md:text-lg lg:text-xl mb-6 leading-relaxed"
            >
              At Universal, we’re honored to support your talents and
              aspirations. Here, you'll uncover your strengths and learn how
              they can make a positive impact on the world. Your dreams are
              bold, and so are ours—dive into your possibilities and take the
              first step toward your bright future.
            </p>
            <a href="{{route('home')}}"
              class="px-4 sm:px-6 py-2 border border-white btn-clip text-black bg-white rounded group cursor-pointer transition text-sm sm:text-base"
            >
              <span class="text-black group-hover:text-white">
                Explore All Programs
              </span>
            </a>
          </div>

          <!-- Image / Programs -->
          <div
            class="w-full lg:w-3/5 grid grid-cols-1 md:grid-cols-2"
          >
            <!-- Top div: full width on mobile, span 2 on md+ -->
            <div
              class="text-center h-48 sm:h-64 md:h-80 md:col-span-2 bg-cover bg-no-repeat p-4 sm:p-6 flex flex-col justify-end items-start rounded"
              style="background-image: url('{{ asset('images/monarch_undergraduate.jpg') }}')"
            >
              <h3
                class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-[30px] font-semibold mb-2 text-white"
              >
                Undergraduate Programs
              </h3>
              <a href="{{route('home')}}"
                class="px-3 sm:px-4 py-1 sm:py-2 border border-white btn-clip group rounded bg-white cursor-pointer transition text-xs sm:text-sm md:text-base"
              >
                <span class="text-black group-hover:text-white"
                  >Find Your Major</span
                >
              </a>
            </div>

            <!-- Bottom left div -->
            <div
              class="text-start h-48 sm:h-64 md:h-80 bg-cover bg-no-repeat p-4 sm:p-6 flex flex-col justify-end items-start rounded"
              style="background-image: url('{{ asset('images/monarch_graduate.jpg') }}')"
            >
              <h3
                class="text-lg sm:text-xl md:text-2xl lg:text-[28px] xl:text-[32px] font-extrabold mb-2 text-white"
              >
                Graduate Programs
              </h3>
              <a href="{{route('home')}}"
                class="px-3 sm:px-4 py-1 sm:py-2 border border-white btn-clip group rounded bg-white cursor-pointer transition text-xs sm:text-sm md:text-base"
              >
                <span class="text-black group-hover:text-white"
                  >Find Your Major</span
                >
              </a>
            </div>

            <!-- Bottom right div -->
            <div
              class="text-start h-48 sm:h-64 md:h-80 bg-cover bg-no-repeat p-4 sm:p-6 flex flex-col justify-end items-start rounded"
              style="background-image: url('{{ asset('images/immigration_bg.webp') }}')"
            >
            <!-- Overlay to darken a bit for better readability -->
            <div class="absolute inset-0 bg-black/50"></div>
              <h3
                class="text-lg sm:text-xl md:text-2xl lg:text-[28px] xl:text-[32px] font-extrabold mb-2 text-white"
              >
                Immigration Programs
              </h3>
              <a href="{{route('home')}}"
                class="px-3 sm:px-4 py-1 sm:py-2 border border-white btn-clip group rounded bg-white cursor-pointer transition text-xs sm:text-sm md:text-base"
              >
                <span class="text-black group-hover:text-white"
                  >Find Your Major</span
                >
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--- end future section --->

    <!--- destination section --->
    <section
      class="text-center pb-4 md:pb-8 lg:pb-16 pt-4 md:pt-12 lg:pt-20 px-4 bg-white"
    >
      <!-- Section Title -->
      <h2
        class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-[50px] font-extrabold mb-6 sm:mb-8 lg:mb-10 text-[var(--secondary-color)] leading-snug translate-y-10 opacity-0 transition-all duration-500 ease-out"
      >
        Choose Your Destination
      </h2>

      <!-- Image -->
      <div class="flex justify-center">
        <img
          src={{asset('images/Global-Offices-Map-2024.png')}}
          alt="team"
          class="w-full h-auto object-cover rounded-lg"
        />
      </div>
    </section>

    <!--- end destination section --->

    <!--- events section --->
    <section
      class="relative text-center pb-4 md:pb-8 lg:pb-16 pt-4 md:pt-12 lg:pt-20 px-4 bg-cover bg-no-repeat text-white"
      style="background-image: url('{{ asset('images/service.avif') }}')"
    >
      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>
      <!-- Section Title -->
      <h2
        class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-[50px] font-extrabold mb-6 sm:mb-8 lg:mb-10 leading-snug translate-y-10 opacity-0 transition-all duration-500 ease-out"
      >
        Events
      </h2>

      <!-- Slider Container -->
      <div class="w-full max-w-6xl mx-auto px-4 py-4 md:py-6 lg:py-10">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div
              class="swiper-slide p-6 w-[300px] sm:w-[380px] glassy-bg card-clip text-white text-start"
            >
              <div class="card-clip">
                <img
                  src={{asset('images/world-wide-shipping-concept-with-package-boxes-world-globe-map-express-delivery-concept-fast-shipping-3d-rendering.jpg')}}
                  alt="world"
                  class="w-full h-48 object-cover rounded-md"
                />
              </div>
              <div class="mt-4 flex flex-col gap-3 justify-center items-start">
                <!-- <h5 class="text-lg font-semibold">
                  International Application Day
                </h5>
                <div class="flex flex-col gap-1 text-sm">
                  <span class="flex items-center gap-2"
                    ><i
                      class="fa-solid fa-calendar mr-1 text-[var(--secondary-color)]"
                    ></i
                    >Event Date: 07/02/2025</span
                  >
                  <span class="flex items-center gap-2"
                    ><i
                      class="fa-solid fa-clock mr-1 text-[var(--secondary-color)]"
                    ></i
                    >Event Time: 10:00 AM - 06:00 PM</span
                  >
                  <span class="flex items-center gap-2"
                    ><i
                      class="fa-solid fa-location-arrow text-[var(--secondary-color)]"
                    ></i
                    >Event Venue: Dhaka Office: Lift-13, 759 Delvistaa Fuljhuri,
                    Satmosjid Road, Dhanmondi, Dhaka-1205.</span
                  >
                  <span class="flex items-center gap-2"
                    ><i
                      class="fa-solid fa-location-dot text-[var(--secondary-color)]"
                    ></i
                    >Event Location: Dhaka</span
                  >
                </div> -->
                <a href="{{route('home')}}"
                  class="self-center bg-[var(--secondary-color)] btn-clip border border-[var(--primary-color)] px-8 py-3 text-xl font-bold mt-4 cursor-pointer"
                >
                  <span class="text-white">Register</span>
                </a>
              </div>
            </div>

            <!-- Slide 2 -->
            <div
              class="swiper-slide p-6 w-[300px] sm:w-[380px] glassy-bg card-clip text-white text-start"
            >
              <div class="card-clip">
                <img
                  src={{asset('images/group-people-with-their-arms-up-air(1).jpg')}}
                  alt="world"
                  class="w-full h-48 object-cover rounded-md"
                />
              </div>
              <div class="mt-4 flex flex-col gap-3 justify-center items-start">
                <!-- <h5 class="text-lg font-semibold">
                  International Application Day
                </h5>
                <div class="flex flex-col gap-1 text-sm">
                  <span class="flex items-center gap-2"
                    ><i
                      class="fa-solid fa-calendar mr-1 text-[var(--secondary-color)]"
                    ></i
                    >Event Date: 07/02/2025</span
                  >
                  <span class="flex items-center gap-2"
                    ><i
                      class="fa-solid fa-clock mr-1 text-[var(--secondary-color)]"
                    ></i
                    >Event Time: 10:00 AM - 06:00 PM</span
                  >
                  <span class="flex items-center gap-2"
                    ><i
                      class="fa-solid fa-location-arrow text-[var(--secondary-color)]"
                    ></i
                    >Event Venue: Dhaka Office: Lift-13, 759 Delvistaa Fuljhuri,
                    Satmosjid Road, Dhanmondi, Dhaka-1205.</span
                  >
                  <span class="flex items-center gap-2"
                    ><i
                      class="fa-solid fa-location-dot text-[var(--secondary-color)]"
                    ></i
                    >Event Location: Dhaka</span
                  >
                </div> -->
                <a href="{{route('home')}}"
                  class="self-center bg-[var(--secondary-color)] btn-clip border border-[var(--primary-color)] shadow-lg px-8 py-3 text-xl font-bold mt-4 cursor-pointer"
                >
                  <span class="text-white">Register</span>
                </a>
              </div>
            </div>

            <!-- Slide 3 -->
            <div
              class="swiper-slide p-6 w-[300px] sm:w-[380px] glassy-bg card-clip text-white text-start"
            >
              <div class="card-clip">
                <img
                  src={{asset('images/independence-hall-philadelphia-pennsylvania-usa.jpg')}}
                  alt="world"
                  class="w-full h-48 object-cover rounded-md"
                />
              </div>
              <div class="mt-4 flex flex-col gap-3 justify-center items-start">
                <!-- <h5 class="text-lg font-semibold">
                  International Application Day
                </h5>
                <div class="flex flex-col gap-1 text-sm">
                  <span class="flex items-center gap-2"
                    ><i
                      class="fa-solid fa-calendar mr-1 text-[var(--secondary-color)]"
                    ></i
                    >Event Date: 07/02/2025</span
                  >
                  <span class="flex items-center gap-2"
                    ><i
                      class="fa-solid fa-clock mr-1 text-[var(--secondary-color)]"
                    ></i
                    >Event Time: 10:00 AM - 06:00 PM</span
                  >
                  <span class="flex items-center gap-2"
                    ><i
                      class="fa-solid fa-location-arrow text-[var(--secondary-color)]"
                    ></i
                    >Event Venue: Dhaka Office: Lift-13, 759 Delvistaa Fuljhuri,
                    Satmosjid Road, Dhanmondi, Dhaka-1205.</span
                  >
                  <span class="flex items-center gap-2"
                    ><i
                      class="fa-solid fa-location-dot text-[var(--secondary-color)]"
                    ></i
                    >Event Location: Dhaka</span
                  >
                </div> -->
                <a href="{{route('home')}}"
                  class="self-center bg-[var(--secondary-color)] btn-clip border border-[var(--primary-color)] px-8 py-3 text-xl font-bold mt-4 cursor-pointer"
                >
                  <span class="text-white">Register</span>
                </a>
              </div>
            </div>

            <!-- Slide 4 -->
            <div
              class="swiper-slide p-6 w-[300px] sm:w-[380px] glassy-bg card-clip text-white text-start"
            >
              <div class="card-clip">
                <img
                  src={{asset('images/young-female-student-robe-celebrating-her-graduation.jpg')}}
                  alt="world"
                  class="w-full h-48 object-cover rounded-md"
                />
              </div>
              <div class="mt-4 flex flex-col gap-3 justify-center items-start">
                <!-- <h5 class="text-lg font-semibold">
                  International Application Day
                </h5>
                <div class="flex flex-col gap-1 text-sm">
                  <span class="flex items-center gap-2"
                    ><i
                      class="fa-solid fa-calendar mr-1 text-[var(--secondary-color)]"
                    ></i
                    >Event Date: 07/02/2025</span
                  >
                  <span class="flex items-center gap-2"
                    ><i
                      class="fa-solid fa-clock mr-1 text-[var(--secondary-color)]"
                    ></i
                    >Event Time: 10:00 AM - 06:00 PM</span
                  >
                  <span class="flex items-center gap-2"
                    ><i
                      class="fa-solid fa-location-arrow text-[var(--secondary-color)]"
                    ></i
                    >Event Venue: Dhaka Office: Lift-13, 759 Delvistaa Fuljhuri,
                    Satmosjid Road, Dhanmondi, Dhaka-1205.</span
                  >
                  <span class="flex items-center gap-2"
                    ><i
                      class="fa-solid fa-location-dot text-[var(--secondary-color)]"
                    ></i
                    >Event Location: Dhaka</span
                  >
                </div> -->
                <a href="{{route('home')}}"
                  class="self-center bg-[var(--secondary-color)] btn-clip brder border-[var(--primary-color)] px-8 py-3 text-xl font-bold mt-4 cursor-pointer"
                >
                  <span class="text-white">Register</span>
                </a>
              </div>
            </div>

            <!-- Add more slides as needed -->
          </div>

          <!-- Navigation Arrows -->
          <div class="swiper-button-next text-[var(--primary-color)]"></div>
          <div class="swiper-button-prev text-[var(--primary-color)]"></div>
        </div>
      </div>
    </section>

    <!--- end events section --->

    <!--- blog section --->
    <section
      class="relative text-center pb-4 md:pb-8 lg:pb-16 pt-4 md:pt-12 lg:pt-20 px-4 bg-cover bg-no-repeat text-white"
      style="background-image: url('{{ asset('images/our-service.jpg') }}')"
    >
      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>
      <!-- Section Title -->
      <h2
        class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-[50px] font-extrabold mb-6 sm:mb-8 lg:mb-10 text-white leading-snug translate-y-10 opacity-0 transition-all duration-500 ease-out"
      >
        Latest Blog Post
      </h2>

      <!-- Image -->
      <div class="lg:px-[3rem] 2xl:px-[12rem]">
        <div class="grid gap-8 justify-center sm:grid-cols-2 lg:grid-cols-3">
          <!-- Card 1 -->
          <div
            class="flex flex-col items-start gap-3 shadow-lg glassy-bg transition-transform transform scale-0 opacity-0 duration-500"
          >
            <div class="card-clip w-full h-[250px]">
              <img
                src={{asset('images/monarch_event1.jpg')}}
                alt="event"
                class="w-full h-full object-cover rounded-md"
              />
            </div>
            <div class="flex flex-col items-start gap-2 p-6 text-start">
              <h5 class="text-[23px] font-bold mt-4">
                Study Abroad 101: Your Pathway to Success
              </h5>
              <p class="text-base font-medium mt-2">
                  Discover new destinations and unforgettable experiences.
                  
              </p>
              <a href="{{route('home')}}" class="w-full">
              <button
                class="btn-clip bg-white group px-4 py-2 mt-2 text-lg font-bold rounded w-full"
              >
                <span class="text-black group-hover:text-white">Read More</span>
              </button>
              </a>
            </div>
          </div>

          <!-- Card 2 -->
          <div
            class="flex flex-col items-start gap-3 shadow-lg glassy-bg transition-transform transform scale-0 opacity-0 duration-500"
          >
            <div class="card-clip w-full h-[250px]">
              <img
                src={{asset('images/monarch_alive.jpg')}}
                alt="event"
                class="w-full h-full object-cover rounded-md"
              />
            </div>
            <div class="flex flex-col items-start gap-2 p-6 text-start">
              <h5 class="text-[23px] font-bold mt-4">
                  Immigration 101: Your Pathway to a New Life
              </h5>
              <p class="text-base font-medium mt-2">
                  Guiding You Through Every Step of Your Immigration Journey
              </p>
              <a href="{{route('home')}}" class="w-full">
              <button
                class="btn-clip bg-white group px-4 py-2 mt-2 text-lg font-bold rounded w-full"
              >
                <span class="text-black group-hover:text-white">Read More</span>
              </button>
              </a>
            </div>
          </div>

          <!-- Card 3 -->
          <div
            class="flex flex-col items-start gap-3 shadow-lg glassy-bg transition-transform transform scale-0 opacity-0 duration-500"
          >
            <div class="card-clip w-full h-[250px]">
              <img
                src={{asset('images/monarch_wind.jpg')}}
                alt="event"
                class="w-full h-full object-cover rounded-md"
              />
            </div>
            <div class="flex flex-col items-start gap-2 p-6 text-start">
              <h5 class="text-[23px] font-bold mt-4">
                  Explore the World: Your Ultimate Tour Guide
              </h5>
              <p class="text-base font-medium mt-2">
                  Planning Memorable Journeys & Unforgettable Experiences
              </p>
              <a href="{{route('home')}}" class="w-full">
              <button
                class="btn-clip bg-white group px-4 py-2 mt-2 text-lg font-bold rounded w-full"
              >
                <span class="text-black group-hover:text-white">Read More</span>
              </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--- end blog section --->
    </div>
@endsection
