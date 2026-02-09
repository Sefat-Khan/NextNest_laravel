@extends('layouts.common')
    

@section('title', 'About Us')

@section('content')

    <!--- hero section --->
    <section
      class="relative h-[250px] sm:h-[450px] lg:h-[504px] flex items-center md:items-end py-4 md:py-8 lg:py-16 px-8"
    >
      <!-- Blurred background -->
      <div
        class="absolute inset-0 bg-cover bg-center bg-no-repeat filter"
        style="background-image: url('{{ asset('images/about_cover.jpg') }}')"
      ></div>

      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>

      <!-- Heading -->
      <h1
        class="about-title relative text-[40px] sm:text-[50px] md:text-[65px] font-bold text-white z-10 ml-12 opacity-0"
      >
        ABOUT NextNest Immigration
      </h1>
    </section>
    <!--- end hero section --->

    <!--- study section --->
    <section
      class="relative pb-4 md:pb-8 lg:pb-16 pt-4 md:pt-12 lg:pt-20 px-8 text-center text-white bg-cover bg-no-repeat"
      style="background-image: url('{{ asset('images/our-service.jpg') }}')"
    >
      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>
      <!-- Heading -->
      <div class="flex flex-col gap-1 items-center mb-4">
        <h2
          class="text-xl sm:text-2xl md:text-4xl lg:text-[50px] font-bold translate-y-10 opacity-0 transition-all duration-500 ease-out"
        >
          NextNest Immigration
        </h2>
        <h2
          class="text-xl sm:text-2xl md:text-4xl lg:text-[50px] font-bold translate-y-10 opacity-0 transition-all duration-500 ease-out mt-2"
        >
          – NextNest Immigration Makes It Possible
        </h2>
      </div>
      <div class="px-2 md:px-[4rem] 2xl:px-[8rem]">
        <div
          class="relative flex flex-col items-start lg:items-center glassy-bg clip-container"
        >
          <div
            class="flex lg:flex-row flex-col-reverse items-center gap-0 card"
          >
            <div
              class="lg:w-1/2 px-6 lg:px-12 py-4 text-card text-start translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4 class="text-[22px] md:text-[35px] font-bold">Our Story</h4>
              <p class="text-sm mt-6">
                Every big journey starts with a single decision! Sometimes, it's
                the decision to leave your comfort zone and chase a dream across
                oceans. At NEXTNEST IMMIGRATION LIMITED, we believe that every
                dream of studying or working abroad deserves a clear path and a
                trusted guide. Founded originally in the UK, we are more than a
                visa consultancy or immigration firm. We are a team of mentors,
                planners, and problem-solvers committed to turning aspirations
                into arrivals. We open doors to world-class education for
                students by unlocking opportunities at leading universities in
                the USA, Canada, the United Kingdom, Sweden, Finland, Malta, and
                Cyprus. We love to walk with you people through each step by
                finding the right program, perfecting your application, and
                ensuring your visa journey is smooth and stress-free. We connect
                talent with opportunity by opening gateways to new careers in
                Spain, Portugal, and Denmark. We would love to guide you through
                work permit processes so you can focus on building the life
                you've imagined.
              </p>
            </div>
            <div
              class="lg:w-1/2 h-full image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('images/event.jpg')}}
                alt="Universal Study Abroad student counseling session"
                loading="lazy"
                              class="h-full w-full object-cover"
                            />
                          </div>
                        </div>

                        <div
                          class="flex lg:flex-row-reverse flex-col-reverse items-center gap-0 lg:h-[380px] card"
                        >
                          <div
                            class="lg:w-1/2 px-6 lg:px-12 py-4 text-card text-start translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
                          >
                            <h4 class="text-[22px] md:text-[35px] font-bold">Mission</h4>
                            <p class="text-sm md:text-base mt-6">
                              To turn dreams of studying and working abroad into real,
                              life-changing journeys. If you wish to fly, we'll be your wings
                              for your Next Nest. We guide, support, and inspire each client
                              with honesty, care, and expertise, making sure every step toward
                              a new country feels less like a challenge and more like an
                              exciting beginning.
                            </p>
                          </div>
                          <div
                            class="lg:w-1/2 h-full image-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
                          >
                            <img
                              src={{asset('images/mission.jpg')}}
                              alt="Universal Study Abroad student Our Mission"
                loading="lazy"
                              class="h-full w-full object-cover"
                            />
                          </div>
                        </div>

                        <div
                          class="flex lg:flex-row flex-col-reverse items-center gap-0 lg:h-[380px] card"
                        >
                          <div
                            class="lg:w-1/2 px-6 lg:px-12 py-4 text-card text-start translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
                          >
                            <h4 class="text-[22px] md:text-[35px] font-bold">Vision</h4>
                            <p class="text-sm md:text-base mt-6">
                              To create a world where borders are not barriers but bridges,
                              connecting people to opportunities, cultures, and futures they
                              once only imagined. We aim to be the trusted hand that helps
                              every dreamer take flight.
                            </p>
                          </div>
                          <div
                            class="lg:w-1/2 h-full image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
                          >
                            <img
                              src={{asset('images/front-view-travel-agent-sitting-her-working-place-holding-toy-plane-agency-service-world-ope.jpg')}}
                              alt="Universal Study Abroad student Our Vision"
                loading="lazy"
                              class="h-full w-full object-cover"
                            />
                          </div>
                        </div>

                        <div
                          class="flex lg:flex-row-reverse flex-col-reverse items-center gap-0 card"
                        >
                          <div
                            class="lg:w-1/2 px-6 lg:px-12 py-4 text-card text-start translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
                          >
                            <h4 class="text-[22px] md:text-[35px] font-bold">Core Values</h4>
                            <p class="text-sm mt-6">
                              We combine deep knowledge of immigration policies with a
                              people-first philosophy. From the first consultation to your
                              arrival abroad, we provide personalized support. We understand
                              the challenges, excitement, and concerns of such a big move, and
                              we work to make the journey smooth and stress-free.
                            </p>
                            <div>
                              <h4 class="text-[19px] font-bold mt-2">
                                Our services include:
                              </h4>
                              <ul class="list-disc list-inside mt-2 text-sm md:px-4">
                                <li>Study and work visa guidance</li>
                                <li>Eligibility checks and strategic planning</li>
                                <li>Document preparation and application support</li>
                                <li>Interview training and settlement advice</li>
                              </ul>
                            </div>
                            <p class="text-sm mt-6">
                              We know this journey is about more than paperwork. It's about
                              futures, families, and new beginnings. So, you'll get expert
                              guidance and personal support every step of the way from our
                              end.
                            </p>
                            <p class="text-sm mt-6">
                              With NEXTNEST, you're not just moving countries. You're building
                              the life you deserve.
                            </p>
                          </div>
                          <div
                            class="lg:w-1/2 lg:h-[480px] image-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
                          >
                            <img
                              src={{asset('images/man-holding-earth-globe-bright-sky-setting.jpg')}}
                              alt="Universal Study Abroad student core values"
                loading="lazy"
                class="h-full w-full object-cover"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- end study section --->

    <!--- workflow section --->
    <section
      class="py-4 md:py-8 lg:py-16 px-8 text-center text-white bg-white"
    >
      <h2
        class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-[var(--secondary-color)] translate-y-10 opacity-0 transition-all duration-500 ease-out mb-10"
      >
        OUR WORKFLOW PROCESS
      </h2>
      <div class="p-8 flex flex-col gap-11 lg:gap-8 xl:gap-2 overflow-visible">
        <div class="flex lg:gap-[7.12rem] card items-center">
          <div
            class="shadow-xl w-[480px] px-6 py-4 flex md:flex-row flex-col gap-4 items-center md:items-start text-card rounded-xl translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
          >
            <div
              class="w-1/2 btn-clip bg-[var(--secondary-color)] flex flex-col gap-2 -mt-8 h-fit pt-1"
            >
              <span class="text-lg font-semibold">Step</span>
              <span class="text-[35px] font-bold">01</span>
            </div>
            <div class="text-center md:text-start w-1/2">
              <h4 class="text-black text-[17px] font-bold">
                Online Assessment
              </h4>
              <p class="text-black text-[12px] mt-2">
                You are requested to apply online
              </p>
            </div>
          </div>
          <div
            class="w-[35px] h-[35px] rounded-full bg-[var(--primary-color)] justify-center items-center hidden lg:stick lg:flex z-10"
          >
            <div class="w-[15px] h-[15px] rounded-full bg-white"></div>
          </div>
        </div>
        <div class="flex flex-row-reverse lg:gap-[7.12rem] card items-center">
          <div
            class="shadow-xl w-[480px] px-6 py-4 flex md:flex-row flex-col gap-4 items-center md:items-start rounded-xl text-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
          >
            <div
              class="w-1/2 btn-clip bg-[var(--secondary-color)] flex flex-col gap-2 -mt-8 h-fit pt-1"
            >
              <span class="text-lg font-semibold">Step</span>
              <span class="text-[35px] font-bold">02</span>
            </div>
            <div class="text-center md:text-start w-1/2">
              <h4 class="text-black text-[17px] font-bold">Invited to meet</h4>
              <p class="text-black text-[12px] mt-2">
                You are invited to our office for a quick meeting
              </p>
            </div>
          </div>
          <div
            class="w-[35px] h-[35px] rounded-full bg-[var(--primary-color)] justify-center items-center lg:stick lg:flex hidden"
          >
            <div class="w-[15px] h-[15px] rounded-full bg-white"></div>
          </div>
        </div>
        <div class="flex lg:gap-[7.12rem] card items-center">
          <div
            class="shadow-xl w-[480px] px-6 py-4 flex flex-col md:flex-row gap-4 items-center md:items-start rounded-xl text-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
          >
            <div
              class="w-1/2 btn-clip bg-[var(--secondary-color)] flex flex-col gap-2 -mt-8 h-fit pt-1"
            >
              <span class="text-lg font-semibold">Step</span>
              <span class="text-[35px] font-bold">03</span>
            </div>
            <div class="text-center md:text-start w-1/2">
              <h4 class="text-black text-[17px] font-bold">
                Application Process
              </h4>
              <p class="text-black text-[12px] mt-2">
                We start your appilcation process to desired institutes
              </p>
            </div>
          </div>
          <div
            class="w-[35px] h-[35px] rounded-full bg-[var(--primary-color)] justify-center items-center lg:stick lg:flex hidden"
          >
            <div class="w-[15px] h-[15px] rounded-full bg-white"></div>
          </div>
        </div>
        <div class="flex flex-row-reverse lg:gap-[7.12rem] card items-center">
          <div
            class="shadow-xl w-[480px] px-6 py-4 flex flex-col md:flex-row gap-4 items-center md:items-start rounded-xl text-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
          >
            <div
              class="w-1/2 btn-clip bg-[var(--secondary-color)] flex flex-col gap-2 -mt-8 h-fit pt-1"
            >
              <span class="text-lg font-semibold">Step</span>
              <span class="text-[35px] font-bold">04</span>
            </div>
            <div class="text-center md:text-start w-1/2">
              <h4 class="text-black text-[17px] font-bold">Visa Submitted</h4>
              <p class="text-black text-[12px] mt-2">
                Upon application approval, Visa process is initiated and
                launched.
              </p>
            </div>
          </div>
          <div
            class="w-[35px] h-[35px] rounded-full bg-[var(--primary-color)] justify-center items-center lg:stick lg:flex hidden"
          >
            <div class="w-[15px] h-[15px] rounded-full bg-white"></div>
          </div>
        </div>
        <div class="flex lg:gap-[7.12rem] card items-center mt-2">
          <div
            class="shadow-xl w-[480px] px-6 py-4 flex flex-col md:flex-row gap-4 items-center md:items-start rounded-xl text-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
          >
            <div
              class="w-1/2 btn-clip bg-[var(--secondary-color)] flex flex-col gap-2 -mt-8 h-fit pt-1"
            >
              <span class="text-lg font-semibold">Step</span>
              <span class="text-[35px] font-bold">05</span>
            </div>
            <div class="text-start w-1/2">
              <h4 class="text-black text-[17px] font-bold">Flights booked</h4>
              <p class="text-black text-[12px] mt-2">
                Ready to embark on your new journey, you start for your new
                destination.
              </p>
            </div>
          </div>
          <div
            class="w-[35px] h-[35px] rounded-full bg-[var(--primary-color)] justify-center items-center z-[2] lg:flex hidden"
          >
            <div class="w-[15px] h-[15px] rounded-full bg-white"></div>
          </div>
        </div>
      </div>
    </section>
    <!--- end workflow section --->

    <!--- our service section --->
    <section
      class="relative text-center pb-3 md:pb-6 lg:pb-12 pt-4 md:pt-12 lg:pt-20 px-4 text-white bg-cover bg-no-repeat"
      style="background-image: url('{{ asset('images/service.avif') }}')"
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
            loading="lazy"
            class="w-full"
          />
        </div>

        <!-- Service Card -->
        <div class="flex flex-col items-center gap-4 justify-center">
          <div
            class="bg_overlay relative p-6 rounded-xl group w-full max-w-[420px] glassy-bg text-white shadow-lg overflow-hidden transition-all duration-300"
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
            class="bg_overlay relative p-6 rounded-xl group glassy-bg w-full max-w-[420px] text-white shadow-lg overflow-hidden transition-all duration-300"
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

    <!--- our Destination section --->
    <section
      class="text-center py-4 md:py-12 lg:py-20 px-4 text-white bg-white"
    >
      <h2
        class="text-2xl sm:text-3xl md:text-4xl lg:text-[55px] font-extrabold mb-6 md:mb-8 lg:mb-10 text-[var(--secondary-color)] translate-y-10 opacity-0 transition-all duration-500 ease-out"
      >
        Choose Your Destination
      </h2>
      <div
        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 px-8"
      >
        {{-- @if($studyInfo)
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
        @endif --}}

        <div
          class="bg-white rounded-xl overflow-hidden shadow-lg transition-transform transform scale-0 opacity-0 duration-500 hover:-translate-y-[10px] cursor-pointer"
        >
          <div>
            <img
              src={{asset('images/banner-01.webp')}}
              alt="Malaysia"
              loading="lazy"
              class="w-full h-auto object-cover"
            />
          </div>
          <div class="bg-[var(--secondary-color)] px-4 py-2 text-center mt-2">
            <h3 class="text-[25px] font-bold text-white">MALAYSIA</h3>
          </div>
        </div>

        <div
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
        </div>

        <div
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
        </div>

        <div
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
        </div>

        <div
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
        </div>

        <div
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
        </div>

        <div
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
        </div>

        <div
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
        </div>

        <!-- Add more cards as needed -->
      </div>
    </section>

    <!--- end our Destination section --->

@endsection