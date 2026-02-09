@extends('layouts.common')
    

@section('title', 'Study Destination')

@section('content')

    <!--- hero section --->
    <section
      class="relative h-[250px] sm:h-[450px] lg:h-[504px] flex items-center md:items-end py-4 md:py-8 lg:py-16 px-8 text-center"
    >
      <!-- Blurred background -->
      <div
        class="absolute inset-0 bg-cover bg-center bg-no-repeat filter"
        style="background-image: url('{{ asset('images/study-destination.jpg') }}')"
      ></div>

      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>

      <div
        class="w-full h-full flex flex-col gap-2 justify-center items-center lg:items-start z-10 md:px-12"
      >
        <a
          href="{{route('home')}}"
          class="text-[var(--secondary-color)] font-bold hover:text-white z-10"
          ><i class="fa-solid fa-angle-left"></i>Study Abroad</a
        >

        <!-- Heading -->
        <h1
          class="about-title opacity-0 relative text-[40px] sm:text-[50px] md:text-[65px] font-bold text-white z-10"
        >
          CHOOSE YOUR DESTINATION
        </h1>
      </div>
    </section>
    <!--- end hero section --->

    <!--- our Destination section --->
    <section
      class="text-center py-4 md:py-12 lg:py-20 px-4 text-white bg-white"
    >
      <div
        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-8"
      >
      @if($studyInfo)
      @foreach($studyInfo as $study)

        <a
          href="{{route('study', $study->slug)}}"
          class="bg-white rounded-xl overflow-hidden shadow-lg transition-transform transform scale-0 opacity-0 duration-500 hover:-translate-y-[10px] cursor-pointer"
        >
          <div>
            <img
              src={{ Storage::url($study->main_image) }}
              alt={{$study->name}}
              loading="lazy"
              class="w-full h-[350px] object-cover"
            />
          </div>
          <div class="bg-[var(--secondary-color)] px-4 py-2 text-center mt-2">
            <h3 class="text-[25px] font-bold text-white">{{ $study->name }}</h3>
          </div>
        </a>

        
        @endforeach
        @endif

        {{-- <a
          href="{{route('study_destination')}}"
          class="bg-white rounded-xl overflow-hidden shadow-lg transition-transform transform scale-0 opacity-0 duration-500 hover:-translate-y-[10px] cursor-pointer"
        >
          <div>
            <img
              src={{asset('images/banner-02.webp')}}
              alt="Malaysia"
              loading="lazy"
              class="w-full h-auto object-cover"
            />
          </div>
          <div class="bg-[var(--secondary-color)] px-4 py-2 text-center mt-2">
            <h3 class="text-[25px] font-bold text-white">MALAYSIA</h3>
          </div>
        </a>

        <a
          href="{{route('study_destination')}}"
          class="bg-white rounded-xl overflow-hidden shadow-lg transition-transform transform scale-0 opacity-0 duration-500 hover:-translate-y-[10px] cursor-pointer"
        >
          <div>
            <img
              src={{asset('images/banner-03.webp')}}
              alt="Canada"
              loading="lazy"
              class="w-full h-auto object-cover"
            />
          </div>
          <div class="bg-[var(--secondary-color)] px-4 py-2 text-center mt-2">
            <h3 class="text-[25px] font-bold text-white">CANADA</h3>
          </div>
        </a>

        <a
          href="{{route('study_destination')}}"
          class="bg-white rounded-xl overflow-hidden shadow-lg transition-transform transform scale-0 opacity-0 duration-500 hover:-translate-y-[10px] cursor-pointer"
        >
          <div>
            <img
              src={{asset('images/banner-04.webp')}}
              alt="USA"
              loading="lazy"
              class="w-full h-auto object-cover"
            />
          </div>
          <div class="bg-[var(--secondary-color)] px-4 py-2 text-center mt-2">
            <h3 class="text-[25px] font-bold text-white">USA</h3>
          </div>
        </a>

        <a
          href="{{route('study_destination')}}"
          class="bg-white rounded-xl overflow-hidden shadow-lg transition-transform transform scale-0 opacity-0 duration-500 hover:-translate-y-[10px] cursor-pointer"
        >
          <div>
            <img
              src={{asset('images/banner-07.webp')}}
              alt="Australia"
              loading="lazy"
              class="w-full h-auto object-cover"
            />
          </div>
          <div class="bg-[var(--secondary-color)] px-4 py-2 text-center mt-2">
            <h3 class="text-[25px] font-bold text-white">AUSTRALIA</h3>
          </div>
        </a>

        <a
          href="{{route('study_destination')}}"
          class="bg-white rounded-xl overflow-hidden shadow-lg transition-transform transform scale-0 opacity-0 duration-500 hover:-translate-y-[10px] cursor-pointer"
        >
          <div>
            <img
              src={{asset('images/banner-05.webp')}}
              alt="UK"
              loading="lazy"
              class="w-full h-auto object-cover"
            />
          </div>
          <div class="bg-[var(--secondary-color)] px-4 py-2 text-center mt-2">
            <h3 class="text-[25px] font-bold text-white">UK</h3>
          </div>
        </a>

        <a
          href="{{route('study_destination')}}"
          class="bg-white rounded-xl overflow-hidden shadow-lg transition-transform transform scale-0 opacity-0 duration-500 hover:-translate-y-[10px] cursor-pointer"
        >
          <div>
            <img
              src={{asset('images/banner-06.webp')}}
              alt="Europe"
              loading="lazy"
              class="w-full h-auto object-cover"
            />
          </div>
          <div class="bg-[var(--secondary-color)] px-4 py-2 text-center mt-2">
            <h3 class="text-[25px] font-bold text-white">EUROPE</h3>
          </div>
        </a>

        <a
          href="{{route('study_destination')}}"
          class="bg-white rounded-xl overflow-hidden shadow-lg transition-transform transform scale-0 opacity-0 duration-500 hover:-translate-y-[10px] cursor-pointer"
        >
          <div>
            <img
              src={{asset('images/banner-08.webp')}}
              alt="New Zealand"
              loading="lazy"
              class="w-full h-auto object-cover"
            />
          </div>
          <div class="bg-[var(--secondary-color)] px-4 py-2 text-center mt-2">
            <h3 class="text-[25px] font-bold text-white">NEW ZEALAND</h3>
          </div>
        </a> --}}

        <!-- Add more cards as needed -->
      </div>
    </section>

    <!--- end our Destination section --->

    <!--- study section --->
    <section
      class="relative pb-4 md:pb-8 lg:pb-16 pt-6 md:pt-12 lg:pt-20 px-8 text-center text-white bg-cover bg-no-repeat"
      style="background-image: url('{{ asset('images/our-service.jpg') }}')"
    >
      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>
      <!-- Section Heading -->
      <h2
        class="text-3xl sm:text-4xl md:text-[55px] lg:text-[65px] font-bold mb-10 translate-y-10 opacity-0 transition-all duration-500 ease-out"
      >
        Study Abroad in 4 Easy Steps
      </h2>

      <div class="px-2 md:px-[4rem] 2xl:px-[8rem]">
        <div
          class="relative flex flex-col items-start lg:items-center glassy-bg clip-container"
        >
          <!-- Step 1 -->
          <div
            class="flex lg:flex-row flex-col-reverse items-center lg:h-[380px] card"
          >
            <div
              class="lg:w-1/2 px-6 lg:px-12 py-4 text-card text-start translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4 class="text-2xl md:text-3xl lg:text-[35px] font-bold">
                Free Consultation
              </h4>
              <p class="text-base mt-3">
                Start your journey with a free consultation! Our expert advisors
                will guide you through university options, admission
                requirements, and scholarship opportunities in Dubai. We assess
                your academic background and career goals to find the best fit
                for you.
              </p>
              <a href="{{route('study_destination')}}">
                <button
                class="px-6 md:px-8 py-2 mt-6 btn-clip glassy-bg group cursor-pointer text-[15px] md:text-[25px] font-bold"
              >
                <span class="text-[var(--primary-color)] group-hover:text-white"
                  >Learn More</span
                >
              </button>
              </a>
              
            </div>
            <div
              class="lg:w-1/2 h-full image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('images/businessman-businesswoman-review-documents-desk-min.jpg')}}
                alt="Free Consultation"
                loading="lazy"
                class="h-full w-full object-cover"
              />
            </div>
          </div>

          <!-- Step 2 -->
          <div
            class="flex lg:flex-row-reverse flex-col-reverse items-center lg:h-[380px] card"
          >
            <div
              class="lg:w-1/2 px-6 lg:px-12 py-4 text-card text-start translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4 class="text-2xl md:text-3xl lg:text-[35px] font-bold">
                Application & Admission
              </h4>
              <p class="text-base mt-3">
                Once you've chosen your dream university, we handle the entire
                application process for you. Our team ensures all documents,
                from transcripts to personal statements, are perfectly prepared
                and submitted on time.
              </p>
              <a href="{{route('study_destination')}}">
              <button
                class="px-6 md:px-8 py-2 mt-6 btn-clip glassy-bg group cursor-pointer text-[15px] md:text-[25px] font-bold"
              >
                <span class="text-[var(--primary-color)] group-hover:text-white"
                  >Embark on the Challenge</span
                >
              </button>
              </a>
            </div>
            <div
              class="lg:w-1/2 h-full image-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('images/18968-min.jpg')}}
                alt="Application & Admission"
                loading="lazy"
                class="h-full w-full object-cover"
              />
            </div>
          </div>

          <!-- Step 3 -->
          <div
            class="flex lg:flex-row flex-col-reverse items-center lg:h-[380px] card"
          >
            <div
              class="lg:w-1/2 px-6 lg:px-12 py-4 text-card text-start translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4 class="text-2xl md:text-3xl lg:text-[35px] font-bold">
                Visa & Travel Assistance
              </h4>
              <p class="text-base mt-3">
                Got accepted? Now, let's secure your student visa! We provide
                complete visa support, from application submission to approval.
                Plus, we help with travel arrangements, airport pick-up, and
                accommodation in Dubai.
              </p>
              <a href="{{route('study_destination')}}">
              <button
                class="px-6 md:px-8 py-2 mt-6 btn-clip glassy-bg group cursor-pointer text-[15px] md:text-[25px] font-bold"
              >
                <span class="text-[var(--primary-color)] group-hover:text-white"
                  >Learn More & Apply</span
                >
              </button>
              </a>
            </div>
            <div
              class="lg:w-1/2 h-full image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('images/9134-min.jpg')}}
                alt="Visa & Travel Assistance"
                loading="lazy"
                class="h-full w-full object-cover"
              />
            </div>
          </div>

          <!-- Step 4 -->
          <div
            class="flex lg:flex-row-reverse flex-col-reverse items-center card"
          >
            <div
              class="lg:w-1/2 px-6 lg:px-12 py-4 text-card text-start translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4 class="text-2xl md:text-3xl lg:text-[35px] font-bold">
                Arrival & Settlement
              </h4>
              <p class="text-base mt-3">
                Welcome to Dubai! We make your transition easy with orientation
                sessions, part-time job guidance, and student support services
                to help you adjust to your new academic and social life.
              </p>
              <a href="{{route('study_destination')}}">
              <button
                class="px-6 md:px-8 py-2 mt-6 btn-clip glassy-bg group cursor-pointer text-[15px] md:text-[25px] font-bold"
              >
                <span class="text-[var(--primary-color)] group-hover:text-white"
                  >Visit the Library</span
                >
              </button>
              </a>
            </div>
            <div
              class="lg:w-1/2 image-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('images/handsome-man-showing-right-direction-showplace-female-tourists-front-skyscrapers(1)-min.jpg')}}
                alt="Arrival & Settlement"
                loading="lazy"
                class="h-full w-full object-cover"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- end study section --->

    <!--- start section --->
    <section
      class="pb-4 md:pb-8 lg:pb-16 pt-6 md:pt-12 lg:pt-20 px-8 text-center text-black bg-white"
    >
      <div
        class="relative flex flex-col items-start lg:items-center"
        style="
          clip-path: polygon(95% 0, 100% 5%, 100% 100%, 5% 100%, 0 95%, 0 0);
          background: transparent;
        "
      >
        <div
          class="flex lg:flex-row-reverse flex-col-reverse items-center lg:h-[380px] card"
        >
          <!-- Text Content -->
          <div
            class="lg:w-1/2 px-6 lg:px-12 py-4 text-card text-start translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
          >
            <h4
              class="text-2xl md:text-4xl lg:text-[40px] font-bold text-[var(--secondary-color)]"
            >
              Ready to Start Your Study Abroad Journey?
            </h4>
            <p class="text-sm md:text-base mt-3">
              Your dream university in Dubai is just a few steps away! Whether
              you're looking for top-ranked universities, scholarships, visa
              support, or part-time job opportunities, we're here to guide you
              every step of the way.
            </p>
            <a href="{{route('study_destination')}}">
            <button
              class="px-6 md:px-8 py-2 mt-6 btn-clip bg-[var(--secondary-color)] cursor-pointer text-[15px] md:text-[25px] font-bold"
            >
              <span class="text-white">Learn More</span>
            </button>
            </a>
          </div>

          <!-- Image -->
          <div
            class="lg:w-1/2 h-full image-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
          >
            <img
              src={{asset('images/businessman-businesswoman-review-documents-desk-min.jpg')}}
              alt="Universal Study Abroad student counseling session"
      loading="lazy"
              class="h-full w-full object-cover"
            />
          </div>
        </div>
      </div>
    </section>
    <!--- end start section --->

@endsection