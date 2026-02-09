@extends('layouts.common')
    

@section('title', 'Success Stories')

@section('content')

    <!--- hero section --->
    <section
      class="relative h-[250px] sm:h-[450px] lg:h-[504px] flex items-center md:items-end py-4 md:py-8 lg:py-16 px-8 text-center"
    >
      <!-- Blurred background -->
      <div
        class="absolute inset-0 bg-cover bg-center bg-no-repeat filter"
        style="background-image: url('{{ asset('images/success-stories-01.jpg') }}')"
      ></div>

      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>

      <div
        class="w-full h-full flex flex-col gap-2 justify-center items-center lg:items-start z-10 md:px-12"
      >
        <a
          href="{{route('home')}}"
          class="text-[var(--secondary-color)] font-bold hover:text-white z-10"
          ><i class="fa-solid fa-angle-left"></i>Success Stories</a
        >

        <!-- Heading -->
        <h1
          class="about-title opacity-0 relative text-[40px] sm:text-[50px] md:text-[65px] font-bold text-white z-10"
        >
          SUCCESS STORIES
        </h1>
      </div>
    </section>
    <!--- end hero section --->

    <!--- success card section --->
    <section
      class="relative bg-[url('images/service.avif')] bg-cover bg-no-repeat"
      style="background-image: url('{{ asset('images/service.avif') }}')"
    >
      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>
      <div
        class="lg:px-[3rem] 2xl:px-[7rem] container mx-auto flex-col flex lg:flex-row gap-10"
      >
        <div>
          <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 py-16 px-8"
          >
            <!-- Card 1 -->
            <div
              class="card-clip glassy-bg transition-transform transform scale-0 opacity-0 duration-500 text-center"
            >
              <div class="overflow-hidden">
                <img
                  src={{asset('images/woman-holding-passport-passport.jpg')}}
                  alt="Success Story 1"
                  loading="lazy"
                  class="w-full h-64 object-cover"
                />
              </div>
              <div class="p-6 flex flex-col items-center gap-2 text-white">
                <h4 class="text-[28px] lg:text-[50px] font-black">
                  VISA SUCCESS
                </h4>
                <a
                  href="{{route('visa_success')}}"
                  class="btn-clip text-[22px] w-fit px-6 py-3 glassy-bg font-bold"
                >
                  <span class="text-white">VIEW MORE</span>
                </a>
              </div>
            </div>

            <!-- Card 2 -->
            <div
              class="card-clip glassy-bg transition-transform transform scale-0 opacity-0 duration-500 text-center"
            >
              <div class="overflow-hidden">
                <img
                  src={{asset('images/visa-success-01.jpg')}}
                  alt="Success Story 2"
                  loading="lazy"
                  class="w-full h-64 object-cover"
                />
              </div>
              <div class="p-6 flex flex-col items-center gap-2 text-white">
                <h4 class="text-[28px] lg:text-[50px] font-black">
                  OUR STUDENTS
                </h4>
                <a
                  href="{{route('our_students')}}"
                  class="btn-clip text-[22px] w-fit px-6 py-3 glassy-bg font-bold"
                >
                  <span class="text-white">VIEW MORE</span>
                </a>
              </div>
            </div>

            <!-- Card 3 -->
            <div
              class="card-clip glassy-bg transition-transform transform scale-0 opacity-0 duration-500 text-center"
            >
              <div class="overflow-hidden">
                <img
                  src={{asset('images/multinational-graduates-male-female-celebrating-graduation-university-campus-removing-their.jpg')}}
                  alt="Success Story 3"
                  loading="lazy"
                  class="w-full h-64 object-cover"
                />
              </div>
              <div class="p-6 flex flex-col items-center gap-2 text-white">
                <h4 class="text-[28px] lg:text-[50px] font-black px-6">
                  OUR EVENTS
                </h4>
                <a
                  href="{{route('our_students')}}"
                  class="btn-clip text-[22px] w-fit px-6 py-3 glassy-bg font-bold"
                >
                  <span class="text-white">VIEW MORE</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- end success card section --->

    <!--- success info section --->
    <section class="py-4 md:py-8 lg:py-16 px-8 text-center bg-white text-black">
      <div
        class="lg:px-[3rem] 2xl:px-[7rem] container mx-auto flex-col flex lg:flex-row items-center lg:justify-center gap-[2rem] md:gap-[4rem] lg:gap-[8rem] 2xl:gap-[12rem] card"
      >
        <div
          class="text-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
        >
          <h3
            class="text-[22px] md:text-[32px] lg:text-[40px] text-start font-bold text-[var(--secondary-color)]"
          >
            Get in Touch with Us
          </h3>
        </div>
        <div
          class="py-8 pl-8 w-full lg:w-[800px] text-start bg-[var(--secondary-color)] image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
          style="
            clip-path: polygon(
              0% 0%,
              calc(100% - 24px) 0%,
              100% 24px,
              100% 100%,
              24px 100%,
              0% calc(100% - 24px)
            );
          "
        >
          <h3
            class="text-[22px] lg:text-[32px] 2xl:text-[40px] font-bold text-white"
          >
            Research and Innovation Hub
          </h3>
        </div>
      </div>
    </section>
    <!--- end success info section --->

@endsection