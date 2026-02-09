@extends('layouts.common')
    


@section('title', 'Tour Package')

@section('content')



    <!--- hero section --->
    <section
      class="relative h-[250px] sm:h-[450px] lg:h-[504px] flex items-center md:items-end py-4 md:py-8 lg:py-16 px-8 text-center"
    >
      <!-- Blurred background -->
      
      <div
        class="absolute inset-0 bg-cover bg-center bg-no-repeat filter"
        style="background-image: url('/images/website_cover.png')"
      ></div>

      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>

      <div
        class="w-full h-full flex flex-col gap-2 justify-center items-center lg:items-start z-10 md:px-12"
      >
        <a
          href="{{route('work_permit')}}"
          class="text-[var(--secondary-color)] font-bold hover:text-white z-10"
          ><i class="fa-solid fa-angle-left"></i>Tour Package</a
        >

        <!-- Heading -->
        <h1
          class="about-title opacity-0 relative text-[40px] sm:text-[50px] md:text-[65px] font-bold text-white z-10"
        >
          Choose Your Destination
        </h1>
      </div>
    </section>
    <!--- end hero section --->

    <!--- study section --->
    <section
      class="relative pb-4 md:pb-8 lg:pb-16 pt-3 md:pt-6 lg:pt-12 px-8 text-center text-white bg-cover bg-no-repeat"
      style="background-image: url('/images/service.avif')"
    >
      <!-- Heading -->

      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>

      <h2
        class="text-2xl sm:text-3xl md:text-4xl lg:text-[55px] font-bold mb-8 translate-y-10 opacity-0 transition-all duration-500 ease-out"
      >
        Collect Your Tour Package In This Country
      </h2>

      <div class="px-2 md:px-[4rem] 2xl:px-[8rem]">
        <div
          class="relative flex flex-col items-start lg:items-center glassy-bg clip-container"
        >
          <div
            class="flex lg:flex-row flex-col-reverse items-center gap-0 card h-[400px] w-full"
          >
            <div
              class="lg:w-1/2 px-6 md:px-12 py-12 text-card text-center translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4 class="text-[20px] md:text-[24px] lg:text-[27px] font-bold">
                Dubai
              </h4>
              <!-- <div class="mt-3 px-4 md:px-6 lg:px-12">
                <ul
                  class="list-disc text-black flex flex-col gap-4 text-sm md:text-base"
                >
                  <li>
                    <p class="text-white ml-3">
                      Studying in Cyprus offers a once-in-a-lifetime experience
                      along with top-notch education.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Cyprus's internationally recognized programs and
                      affordable tuition are making it a popular choice for
                      international students.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      International students can easily adjust to Cyprus'
                      universities because they provide a variety of
                      English-taught programs and follow European educational
                      standards.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Students enjoy a vibrant, comfortable lifestyle full of
                      natural beauty and cultural diversity thanks to the
                      region's more than 300 sunny days.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Cyprus is renowned for being welcoming, safe, and
                      inclusive, making it the ideal location for international
                      students.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      In addition to earning useful experience and helping to
                      cover living expenses, students can work part-time jobs
                      while they are in school.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Discover magnificent beaches, historic sites, and
                      spectacular scenery—all easily accessible.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Learning in Cyprus is about developing, discovering, and
                      making memories that last a lifetime.
                    </p>
                  </li>
                </ul>
              </div> -->

              {{-- <p>
                The United Kingdom is one of the most sought-after destinations
                for higher education, offering globally recognized degrees and
                world-class teaching standards. From leading universities like
                Oxford and Cambridge to modern, research-driven institutions,
                the UK provides top-quality education across every field
                including business, engineering, medicine, law, and the arts.
              </p> --}}
            </div>
            <div
              class="lg:w-1/2 h-full image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('/images/UAE2.jpg')}}
                alt="canada"
                loading="lazy"
                class="h-full w-full object-cover"
              />
            </div>
          </div>
          <div
            class="flex lg:flex-row-reverse flex-col-reverse items-center gap-0 card h-[400px] w-full"
          >
            <div
              class="lg:w-1/2 px-6 md:px-12 py-12 text-card text-center translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4 class="text-[20px] md:text-[24px] lg:text-[27px] font-bold">
                Thailand
              </h4>
              <!-- <div class="mt-3 px-4 md:px-6 lg:px-12">
                <ul
                  class="list-disc text-black flex flex-col gap-4 text-sm md:text-base"
                >
                  <li>
                    <p class="text-white ml-3">
                      Studying in Cyprus offers a once-in-a-lifetime experience
                      along with top-notch education.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Cyprus's internationally recognized programs and
                      affordable tuition are making it a popular choice for
                      international students.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      International students can easily adjust to Cyprus'
                      universities because they provide a variety of
                      English-taught programs and follow European educational
                      standards.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Students enjoy a vibrant, comfortable lifestyle full of
                      natural beauty and cultural diversity thanks to the
                      region's more than 300 sunny days.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Cyprus is renowned for being welcoming, safe, and
                      inclusive, making it the ideal location for international
                      students.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      In addition to earning useful experience and helping to
                      cover living expenses, students can work part-time jobs
                      while they are in school.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Discover magnificent beaches, historic sites, and
                      spectacular scenery—all easily accessible.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Learning in Cyprus is about developing, discovering, and
                      making memories that last a lifetime.
                    </p>
                  </li>
                </ul>
              </div> -->

              {{-- <p>
                The United Kingdom is one of the most sought-after destinations
                for higher education, offering globally recognized degrees and
                world-class teaching standards. From leading universities like
                Oxford and Cambridge to modern, research-driven institutions,
                the UK provides top-quality education across every field
                including business, engineering, medicine, law, and the arts.
              </p> --}}
            </div>
            <div
              class="lg:w-1/2 h-full image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('/images/thailand.webp')}}
                alt="canada"
                loading="lazy"
                class="h-full w-full object-cover"
              />
            </div>
          </div>
          <div
            class="flex lg:flex-row flex-col-reverse items-center gap-0 card h-[400px] w-full"
          >
            <div
              class="lg:w-1/2 px-6 md:px-12 py-12 text-card text-center translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4 class="text-[20px] md:text-[24px] lg:text-[27px] font-bold">
                Malaysia
              </h4>
              <!-- <div class="mt-3 px-4 md:px-6 lg:px-12">
                <ul
                  class="list-disc text-black flex flex-col gap-4 text-sm md:text-base"
                >
                  <li>
                    <p class="text-white ml-3">
                      Studying in Cyprus offers a once-in-a-lifetime experience
                      along with top-notch education.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Cyprus's internationally recognized programs and
                      affordable tuition are making it a popular choice for
                      international students.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      International students can easily adjust to Cyprus'
                      universities because they provide a variety of
                      English-taught programs and follow European educational
                      standards.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Students enjoy a vibrant, comfortable lifestyle full of
                      natural beauty and cultural diversity thanks to the
                      region's more than 300 sunny days.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Cyprus is renowned for being welcoming, safe, and
                      inclusive, making it the ideal location for international
                      students.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      In addition to earning useful experience and helping to
                      cover living expenses, students can work part-time jobs
                      while they are in school.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Discover magnificent beaches, historic sites, and
                      spectacular scenery—all easily accessible.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Learning in Cyprus is about developing, discovering, and
                      making memories that last a lifetime.
                    </p>
                  </li>
                </ul>
              </div> -->

              {{-- <p>
                The United Kingdom is one of the most sought-after destinations
                for higher education, offering globally recognized degrees and
                world-class teaching standards. From leading universities like
                Oxford and Cambridge to modern, research-driven institutions,
                the UK provides top-quality education across every field
                including business, engineering, medicine, law, and the arts.
              </p> --}}
            </div>
            <div
              class="lg:w-1/2 h-full image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('/images/malaysia.webp')}}
                alt="canada"
                loading="lazy"
                class="h-full w-full object-cover"
              />
            </div>
          </div>
          <div
            class="flex lg:flex-row-reverse flex-col-reverse items-center gap-0 card h-[400px] w-full"
          >
            <div
              class="lg:w-1/2 px-6 md:px-12 py-12 text-card text-center translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4 class="text-[20px] md:text-[24px] lg:text-[27px] font-bold">
                China
              </h4>
              <!-- <div class="mt-3 px-4 md:px-6 lg:px-12">
                <ul
                  class="list-disc text-black flex flex-col gap-4 text-sm md:text-base"
                >
                  <li>
                    <p class="text-white ml-3">
                      Studying in Cyprus offers a once-in-a-lifetime experience
                      along with top-notch education.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Cyprus's internationally recognized programs and
                      affordable tuition are making it a popular choice for
                      international students.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      International students can easily adjust to Cyprus'
                      universities because they provide a variety of
                      English-taught programs and follow European educational
                      standards.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Students enjoy a vibrant, comfortable lifestyle full of
                      natural beauty and cultural diversity thanks to the
                      region's more than 300 sunny days.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Cyprus is renowned for being welcoming, safe, and
                      inclusive, making it the ideal location for international
                      students.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      In addition to earning useful experience and helping to
                      cover living expenses, students can work part-time jobs
                      while they are in school.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Discover magnificent beaches, historic sites, and
                      spectacular scenery—all easily accessible.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Learning in Cyprus is about developing, discovering, and
                      making memories that last a lifetime.
                    </p>
                  </li>
                </ul>
              </div> -->

              {{-- <p>
                The United Kingdom is one of the most sought-after destinations
                for higher education, offering globally recognized degrees and
                world-class teaching standards. From leading universities like
                Oxford and Cambridge to modern, research-driven institutions,
                the UK provides top-quality education across every field
                including business, engineering, medicine, law, and the arts.
              </p> --}}
            </div>
            <div
              class="lg:w-1/2 h-full image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('/images/china.webp')}}
                alt="canada"
                loading="lazy"
                class="h-full w-full object-cover"
              />
            </div>
          </div>
          <div
            class="flex lg:flex-row flex-col-reverse items-center gap-0 card h-[400px] w-full"
          >
            <div
              class="lg:w-1/2 px-6 md:px-12 py-12 text-card text-center translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4 class="text-[20px] md:text-[24px] lg:text-[27px] font-bold">
                Srilanka
              </h4>
              <!-- <div class="mt-3 px-4 md:px-6 lg:px-12">
                <ul
                  class="list-disc text-black flex flex-col gap-4 text-sm md:text-base"
                >
                  <li>
                    <p class="text-white ml-3">
                      Studying in Cyprus offers a once-in-a-lifetime experience
                      along with top-notch education.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Cyprus's internationally recognized programs and
                      affordable tuition are making it a popular choice for
                      international students.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      International students can easily adjust to Cyprus'
                      universities because they provide a variety of
                      English-taught programs and follow European educational
                      standards.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Students enjoy a vibrant, comfortable lifestyle full of
                      natural beauty and cultural diversity thanks to the
                      region's more than 300 sunny days.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Cyprus is renowned for being welcoming, safe, and
                      inclusive, making it the ideal location for international
                      students.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      In addition to earning useful experience and helping to
                      cover living expenses, students can work part-time jobs
                      while they are in school.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Discover magnificent beaches, historic sites, and
                      spectacular scenery—all easily accessible.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Learning in Cyprus is about developing, discovering, and
                      making memories that last a lifetime.
                    </p>
                  </li>
                </ul>
              </div> -->

              {{-- <p>
                The United Kingdom is one of the most sought-after destinations
                for higher education, offering globally recognized degrees and
                world-class teaching standards. From leading universities like
                Oxford and Cambridge to modern, research-driven institutions,
                the UK provides top-quality education across every field
                including business, engineering, medicine, law, and the arts.
              </p> --}}
            </div>
            <div
              class="lg:w-1/2 h-full image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('/images/srilanka.webp')}}
                alt="canada"
                loading="lazy"
                class="h-full w-full object-cover"
              />
            </div>
          </div>
          <div
            class="flex lg:flex-row-reverse flex-col-reverse items-center gap-0 card h-[400px] w-full"
          >
            <div
              class="lg:w-1/2 px-6 md:px-12 py-12 text-card text-center translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4 class="text-[20px] md:text-[24px] lg:text-[27px] font-bold">
                Maldives
              </h4>
              <!-- <div class="mt-3 px-4 md:px-6 lg:px-12">
                <ul
                  class="list-disc text-black flex flex-col gap-4 text-sm md:text-base"
                >
                  <li>
                    <p class="text-white ml-3">
                      Studying in Cyprus offers a once-in-a-lifetime experience
                      along with top-notch education.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Cyprus's internationally recognized programs and
                      affordable tuition are making it a popular choice for
                      international students.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      International students can easily adjust to Cyprus'
                      universities because they provide a variety of
                      English-taught programs and follow European educational
                      standards.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Students enjoy a vibrant, comfortable lifestyle full of
                      natural beauty and cultural diversity thanks to the
                      region's more than 300 sunny days.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Cyprus is renowned for being welcoming, safe, and
                      inclusive, making it the ideal location for international
                      students.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      In addition to earning useful experience and helping to
                      cover living expenses, students can work part-time jobs
                      while they are in school.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Discover magnificent beaches, historic sites, and
                      spectacular scenery—all easily accessible.
                    </p>
                  </li>
                  <li>
                    <p class="text-white ml-3">
                      Learning in Cyprus is about developing, discovering, and
                      making memories that last a lifetime.
                    </p>
                  </li>
                </ul>
              </div> -->

              {{-- <p>
                The United Kingdom is one of the most sought-after destinations
                for higher education, offering globally recognized degrees and
                world-class teaching standards. From leading universities like
                Oxford and Cambridge to modern, research-driven institutions,
                the UK provides top-quality education across every field
                including business, engineering, medicine, law, and the arts.
              </p> --}}
            </div>
            <div
              class="lg:w-1/2 h-full image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('/images/maldives.jpg')}}
                alt="canada"
                loading="lazy"
                class="h-full w-full object-cover"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- end study section --->

    <!--- uni section --->
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

    <!--- end uni section --->



    <!--- blog section --->
    <section
        class="relative text-center pb-4 md:pb-8 lg:pb-16 pt-4 md:pt-12 lg:pt-20 px-4 bg-cover bg-no-repeat text-white"
        style="background-image: url('{{ asset('images/our-service.jpg') }}')">
        <!-- Overlay to darken a bit for better readability -->
        <div class="absolute inset-0 bg-black/50"></div>
        <!-- Section Title -->
        <h2
            class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-[50px] font-extrabold mb-6 sm:mb-8 lg:mb-10 text-white leading-snug translate-y-10 opacity-0 transition-all duration-500 ease-out">
            Latest Blog Post
        </h2>

        <!-- Image -->
        <div class="lg:px-[3rem] 2xl:px-[12rem]">
            <div class="grid gap-8 justify-center sm:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 -->
                <div
                    class="flex flex-col items-start gap-3 shadow-lg glassy-bg transition-transform transform scale-0 opacity-0 duration-500">
                    <div class="card-clip w-full h-[250px]">
                        <img src={{ asset('images/monarch_event1.jpg') }} alt="event"
                            class="w-full h-full object-cover rounded-md" />
                    </div>
                    <div class="flex flex-col items-start gap-2 p-6 text-start">
                        <h5 class="text-[23px] font-bold mt-4">
                            Study Abroad 101: Your Pathway to Success
                        </h5>
                        <p class="text-base font-medium mt-2">
                            Discover new destinations and unforgettable experiences.
                            
                        </p>
                        <a href="{{ route('study_destination') }}" class="w-full">
                            <button class="btn-clip bg-white group px-4 py-2 mt-2 text-lg font-bold rounded w-full">
                                <span class="text-black group-hover:text-white">Read More</span>
                            </button>
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="flex flex-col items-start gap-3 shadow-lg glassy-bg transition-transform transform scale-0 opacity-0 duration-500">
                    <div class="card-clip w-full h-[250px]">
                        <img src={{ asset('images/monarch_alive.jpg') }} alt="event"
                            class="w-full h-full object-cover rounded-md" />
                    </div>
                    <div class="flex flex-col items-start gap-2 p-6 text-start">
                        <h5 class="text-[23px] font-bold mt-4">
                            Immigration 101: Your Pathway to a New Life
                        </h5>
                        <p class="text-base font-medium mt-2">
                            Guiding You Through Every Step of Your Immigration Journey
                        </p>
                        <a href="{{ route('study_destination') }}" class="w-full">
                            <button class="btn-clip bg-white group px-4 py-2 mt-2 text-lg font-bold rounded w-full">
                                <span class="text-black group-hover:text-white">Read More</span>
                            </button>
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="flex flex-col items-start gap-3 shadow-lg glassy-bg transition-transform transform scale-0 opacity-0 duration-500">
                    <div class="card-clip w-full h-[250px]">
                        <img src={{ asset('images/monarch_wind.jpg') }} alt="event"
                            class="w-full h-full object-cover rounded-md" />
                    </div>
                    <div class="flex flex-col items-start gap-2 p-6 text-start">
                        <h5 class="text-[23px] font-bold mt-4">
                            Explore the World: Your Ultimate Tour Guide
                        </h5>
                        <p class="text-base font-medium mt-2">
                            Planning Memorable Journeys & Unforgettable Experiences
                        </p>
                        <a href="{{ route('study_destination') }}" class="w-full">
                            <button class="btn-clip bg-white group px-4 py-2 mt-2 text-lg font-bold rounded w-full">
                                <span class="text-black group-hover:text-white">Read More</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--- end blog section --->



@endsection