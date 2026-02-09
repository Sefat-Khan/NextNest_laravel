@extends('layouts.common')
    

@section('title', 'Our Students')

@section('content')

    <!--- hero section --->
    <section
      class="relative h-[250px] sm:h-[450px] lg:h-[504px] flex items-center md:items-end py-4 md:py-8 lg:py-16 px-8 text-center"
    >
      <!-- Blurred background -->
      <div
        class="absolute inset-0 bg-cover bg-center bg-no-repeat filter"
        style="background-image: url('{{ asset('images/study-australia-01[Recovered]-01(2).jpeg') }}')"
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
          OUR STUDENTS
        </h1>
      </div>
    </section>
    <!--- end hero section --->

    <!--- success card section --->
    <section class="py-4 md:py-8 lg:py-16 px-2 text-center bg-white text-black">
      <div
        class="lg:px-[1rem] 2xl:px-[3rem] container mx-auto flex-col flex gap-10 items-center"
      >
        <div>
          <div class="flex flex-wrap gap-10 py-3 px-2 justify-center">
            <div
              class="w-full md:w-[340px] clip-container transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/event-01.jpg')}}
                alt="event 01"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full md:w-[340px] clip-container transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/event-02.jpg')}}
                alt="event 02"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full md:w-[340px] clip-container transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/event-03.jpg')}}
                alt="event 03"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full md:w-[340px] clip-container transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/event-03.jpg')}}
                alt="event 04"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full md:w-[340px] clip-container transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/event-04.jpg')}}
                alt="event 05"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full md:w-[340px] clip-container transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/event-01.jpg')}}
                alt="event 06"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full md:w-[340px] clip-container transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/event-02.jpg')}}
                alt="event 07"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full md:w-[340px] clip-container transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/event-03.jpg')}}
               alt="event 08"
                loading="lazy"
                class="w-full object-cover"
              />
            </div>
            <div
              class="w-full md:w-[340px] clip-container transition-transform transform scale-0 opacity-0 duration-500"
            >
              <img
                src={{asset('images/event-04.jpg')}}
                alt="event 09"
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