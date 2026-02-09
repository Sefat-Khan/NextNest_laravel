@extends('layouts.common')
    

@section('title', 'Visa Success')

@section('content')

    <!--- hero section --->
    <section
      class="relative h-[250px] sm:h-[450px] lg:h-[504px] flex items-center md:items-end py-16 px-8 text-center"
    >
      <!-- Blurred background -->
      <div
        class="absolute inset-0 bg-cover bg-center bg-no-repeat filter"
        style="background-image: url('{{ asset('images/study-australia-01[Recovered]-01.jpg') }}')"
      ></div>

      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>

      <div
        class="w-full h-full flex flex-col gap-2 justify-center items-center lg:items-start z-10 md:px-12"
      >
        <a
          href="{{route('success_stories')}}"
          class="text-[var(--secondary-color)] font-bold hover:text-white z-10"
          ><i class="fa-solid fa-angle-left"></i>Success Stories</a
        >

        <!-- Heading -->
        <h1
          class="about-title opacity-0 relative text-[40px] sm:text-[50px] md:text-[65px] font-bold text-white z-10"
        >
          VISA SUCCESS
        </h1>
      </div>
    </section>
    <!--- end hero section --->

    <!--- success card section --->
    <section class="py-4 md:py-8 lg:py-16 px-2 text-center bg-white text-black">
      <div
        class="lg:px-[1rem] 2xl:px-[3rem] container mx-auto flex-col flex gap-5 lg:gap-10 items-center"
      >
        <div class="text-center">
          <h2
            class="text-[28px] sm:text-[35px] lg:text-[50px] font-black text-[var(--secondary-color)] translate-y-10 opacity-0 transition-all duration-700 ease-out"
          >
            PART OF OUR VISA SUCCESS
          </h2>
          <p class="mt-2 text-sm sm:text-base">
            #VisaSuccessStory Clients’ success? are our best awards! Part of our
            happy client who secured his ✈dream study visa!
          </p>
        </div>

        <div>
          <div class="flex flex-wrap gap-2 py-3 px-2 justify-center">
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-20.png')}}
                alt="visa 01"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-21.png')}}
                alt="visa 02"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-22.png')}}
                alt="visa 03"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-23.png')}}
                alt="visa 04"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-21.png')}}
                alt="visa 05"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-20.png')}}
                alt="visa 06"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-20.png')}}
                alt="visa 07"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-21.png')}}
                alt="visa 08"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-22.png')}}
                alt="visa 09"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-23.png')}}
                alt="visa 10"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-21.png')}}
                alt="visa 11"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-22.png')}}
                alt="visa 12"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-20.png')}}
                alt="visa 13"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-21.png')}}
                alt="visa 14"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-22.png')}}
                alt="visa 15"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-23.png')}}
                alt="visa 16"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-21.png')}}
                alt="visa 17"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-20.png')}}
                6
                alt="visa 18"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-20.png')}}
                alt="visa 19"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-21.png')}}
                alt="visa 20"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-22.png')}}
                alt="visa 21"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-23.png')}}
                alt="visa 22"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full sm:w-[170px] lg:w-[230px] transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/visa-copy-22.png')}}
                alt="visa 23"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- end success card section --->

@endsection