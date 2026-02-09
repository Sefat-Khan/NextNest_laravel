@extends('layouts.common')
    

@section('title', 'Our Campus')

@section('content')

    <!--- hero section --->
    <section
      class="relative h-[250px] sm:h-[450px] lg:h-[504px] flex items-center md:items-end py-4 md:py-8 lg:py-16 px-8 text-center"
    >
      <!-- Blurred background -->
      <div
        class="absolute inset-0 bg-cover bg-center bg-no-repeat filter"
        style="background-image: url('{{ asset('images/graduate-student-portrait-graduation-ceremony.jpg') }}')"
      ></div>

      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>

      <div
        class="w-full h-full flex flex-col gap-2 justify-center items-center lg:items-start z-10 md:px-12"
      >
        <a
          href="{{route('university_pathway')}}"
          class="text-[var(--secondary-color)] font-bold hover:text-white z-10"
          ><i class="fa-solid fa-angle-left"></i>University Pathway</a
        >

        <!-- Heading -->
        <h1
          class="about-title opacity-0 relative text-[40px] sm:text-[50px] md:text-[65px] font-bold text-white z-10"
        >
          OUR CAMPUS
        </h1>
      </div>
    </section>
    <!--- end hero section --->

    <!--- info section --->
    <section
      class="relative flex flex-col items-center md:items-end py-4 md:py-8 lg:py-16 px-6 text-start"
    >
      <div
        class="lg:px-[3rem] 2xl:px-[7rem] container mx-auto flex-col flex lg:flex-row gap-10 card"
      >
        <div
          class="lg:w-[30%] text-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
        >
          <div
            id="more"
            class="w-full lg:hidden py-4 pl-4 mb-1 bg-black text-[17px] [clip-path:polygon(90%_0,100%_5%,100%_100%,10%_100%,0_95%,0_0)] font-bold text-white cursor-pointer"
          >
            <i
              id="icon"
              class="fa-solid fa-plus transition-transform duration-300"
            ></i>
            <span class="ml-3">More in This Section</span>
          </div>
          <div
            id="infoWrapper"
            class="smooth-toggle lg:max-h-none lg:opacity-100"
          >
            <div
              id="info"
              class="clip-container w-full flex flex-col gap-1 text-start text-white"
            >
              <a
                href="{{route('our_campus')}}"
                class="w-full py-4 pl-12 bg-[var(--secondary-color)] text-[17px] font-bold hover:bg-blue-800 cursor-pointer"
                >Accreditation
              </a>
              <a
                href="{{route('our_campus')}}"
                class="w-full py-4 pl-12 bg-[var(--secondary-color)] text-[17px] font-bold hover:bg-blue-800 cursor-pointer"
                >Visit Our Campus
              </a>
              <a
                href="{{route('our_campus')}}"
                class="w-full py-4 pl-12 bg-[var(--secondary-color)] text-[17px] font-bold hover:bg-blue-800 cursor-pointer"
                >How to Apply
              </a>
              <a
                href="{{route('our_campus')}}"
                class="w-full py-4 pl-12 bg-[var(--secondary-color)] text-[17px] font-bold hover:bg-blue-800 cursor-pointer"
                >Dimensions of a Monarch Education
              </a>
              <div class="group w-full">
                <span
                  id="lite"
                  class="w-full py-4 pl-4 bg-[var(--secondary-color)] text-[17px] font-bold flex gap-4 items-center cursor-pointer group-hover:bg-blue-800"
                >
                  <!-- Icon -->
                  <i
                    id="icon"
                    class="fa-solid fa-plus transition-transform duration-300"
                  ></i>
                  <span
                    >John G. Rangos Sr. Prizes for Students and Faculty</span
                  >
                </span>

                <ul
                  id="details"
                  class="w-full py-4 pl-12 mt-1 bg-[var(--secondary-color)] smooth-toggle hidden hover:bg-blue-600"
                >
                  <li>
                    <a href="{{route('our_campus')}}" class="text-sm font-bold block">
                      Rangos Prizes Video Pitches
                    </a>
                  </li>
                </ul>
              </div>

              <a
                href="{{route('our_campus')}}"
                class="w-full py-3 pl-12 bg-[var(--secondary-color)] text-[17px] font-bold hover:bg-blue-800 cursor-pointer"
                >Memberships and Affiliations
              </a>
              <a
                href="{{route('our_campus')}}"
                class="w-full py-3 pl-12 bg-[var(--secondary-color)] text-[17px] font-bold hover:bg-blue-800 cursor-pointer"
                >Financial Responsibility Agreement
              </a>
              <a
                href="{{route('our_campus')}}"
                class="w-full py-3 pl-12 bg-[var(--secondary-color)] text-[17px] font-bold hover:bg-blue-800 cursor-pointer"
                >University Assessment
              </a>
            </div>
          </div>
        </div>
        <div
          class="lg:w-[70%] flex flex-col gap-6 items-start image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
        >
          <p class="text-[14px]">
            Universal campus provides the ideal setting for both relaxation and
            exploration. Located just steps from the vibrant heart of downtown
            Pittsburgh, our park-like campus offers a tranquil escape with
            beautiful green spaces and breathtaking skyline views.
          </p>
          <p class="text-[14px]">
            Stroll through lush gardens and enjoy the peaceful surroundings as
            you head to class, and when you're ready to immerse yourself in the
            energy of the city, you’re just a short walk from a wealth of
            cultural, dining, and entertainment options. It’s the best of both
            worlds: a serene campus with the excitement of Pittsburgh at your
            doorstep.
          </p>
          <div class="">
            <img
              src={{asset('images/modern-school-building-design-min.jpg')}}
              alt="Modern School Building"
              loading="lazy"
            />
          </div>
          <a href="{{route('our_campus')}}"
            class="btn-clip self-center bg-[var(--secondary-color)] px-6 py-3 cursor-pointer"
          >
            <span class="text-white">View Campus Map</span>
          </a>
        </div>
      </div>

      <div
        class="lg:px-[3rem] 2xl:px-[7rem] container mx-auto flex-col flex gap-10 items-start lg:items-center mt-10"
      >
        <h2
          class="text-2xl sm:text-3xl md:text-4xl lg:text-[55px] text-center font-extrabold text-[var(--primary-color)] translate-y-10 opacity-0 transition-all duration-500 ease-out"
        >
          The Unique Charm of Universal Campus
        </h2>
        <div
          class="hidden lg:flex flex-col lg:flex-row gap-10 border-y border-[var(--secondary-color)] py-10 card"
        >
          <div
            class="lg:w-[30%] text-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
          >
            <div
              id="info"
              class="w-full clip-container flex flex-col gap-1 text-white"
            >
              <button
                id="safe"
                class="w-full py-4 pl-4 text-start bg-[var(--secondary-color)] text-[17px] font-bold hover:bg-blue-800 cursor-pointer"
              >
                A Serene, Safe, Lively Campus
              </button>
              <button
                id="city"
                class="w-full py-4 pl-4 text-start bg-white text-black text-[17px] font-bold hover:bg-blue-800 cursor-pointer"
              >
                Step Into the City
              </button>
            </div>
          </div>
          <div
            class="lg:w-[70%] image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
          >
            <div id="safe-info" class="w-full flex flex-col gap-6 items-start">
              <p class="text-[15px]">
                At Universal, life outside the classroom is just as exciting as
                the lessons inside. From vibrant events and lively student
                organizations to spaces where you can relax and recharge,
                there’s always something happening on campus.
              </p>
              <p class="text-[15px]">
                The Campus Link provides an up-to-date list of upcoming events
                and student organizations, so you can easily find ways to get
                involved. The Universal Program Council, a student-run
                organization, brings an array of entertainment to campus,
                including comedy shows, concerts, movies, and cultural events,
                ensuring there’s always something exciting to look forward to.
              </p>
              <p class="text-[15px]">
                For a fun and laid-back hangout, head to the Union NiteSpot,
                where you can enjoy entertainment with friends. If giving back
                is more your style, the Universal University Volunteers offer
                opportunities to participate in service projects that not only
                make a positive impact but also create lasting connections with
                your peers.
              </p>
              <p class="text-[15px]">
                The Universal Union serves as the central hub for socializing,
                grabbing a coffee at Starbucks, or taking care of student
                services like getting your ID card. For those seeking fitness
                and wellness, the Power Center is fully equipped with
                state-of-the-art fitness facilities and conference spaces.
                Sports fans can catch the action at the UPMC Cooper Fieldhouse,
                home to our basketball and volleyball teams.
              </p>
              <p class="text-[15px]">
                Whether you’re looking to stay active, relax, or get involved in
                the campus community, Universal offers a variety of ways to make
                the most of your college experience.
              </p>
            </div>
            <div
              id="city-info"
              class="w-full flex flex-col gap-6 items-start hidden"
            >
              <p class="text-[15px]">
                At Universal, students enjoy a unique balance of a dynamic
                campus life combined with the excitement and cultural offerings
                of downtown Pittsburgh. Just a short distance away from the
                university, you’ll find endless opportunities to explore,
                unwind, and experience the city's vibrant scene.
              </p>
              <p class="text-[15px]">
                Pittsburgh is a cultural haven, offering a rich array of Arts &
                Culture experiences. From the iconic Pittsburgh Symphony
                Orchestra to the cutting-edge Andy Warhol Museum, there’s no
                shortage of artistic inspiration. When the sun sets,
                Pittsburgh’s bustling nightlife comes alive with a variety of
                bars, clubs, and social spots to suit any mood.
              </p>
              <p class="text-[15px]">
                For sports enthusiasts, Pittsburgh's reputation as the "City of
                Champions" ensures a year-round calendar of exciting events and
                activities, from local sports games to outdoor fitness options.
                If you’re a nature lover, the Pittsburgh Zoo & PPG Aquarium
                offers a chance to explore diverse wildlife, including
                endangered species.
              </p>
              <p class="text-[15px]">
                For thrills, the historic Kennywood Park awaits with
                exhilarating rides and family-friendly fun, adding an extra
                layer of excitement to your college experience.
              </p>
              <p class="text-[15px]">
                Just a short walk from campus, you can dive into Pittsburgh's
                Cultural District, where Broadway performances, live music, and
                comedy shows await. For a taste of local dining and shopping,
                check out the SouthSide Works or Station Square, where a variety
                of restaurants, shops, and attractions are ready to explore.
              </p>
              <p class="text-[15px]">
                Pittsburgh's neighborhoods offer even more hidden gems,
                providing a blend of food, culture, and entertainment that adds
                to the charm of this vibrant city. Whether you’re looking to
                relax, stay active, or discover something new, Pittsburgh offers
                something for everyone.
              </p>
            </div>
          </div>
        </div>
        <div class="lg:hidden">
          <div
            id="info-mobile"
            class="w-full clip-container flex flex-col gap-1 text-start text-black"
          >
            <button
              id="safe-btn-mobile"
              class="w-full py-4 px-4 text-start bg-[var(--secondary-color)] text-[17px] font-bold hover:bg-blue-800 cursor-pointer"
            >
              <i
                id="safe-icon-mobile"
                class="fa-solid fa-plus transition-transform duration-300"
              ></i>
              <span class="ml-4 text-[16px] lg:text-[22px]"
                >A Serene, Safe, Lively Campus</span
              >
            </button>
            <div
              id="safe-content-mobile"
              class="smooth-toggle w-full flex flex-col items-start gap-6 p-4"
            >
              <p class="text-[15px] mt-4">
                At Universal, life outside the classroom is just as exciting as
                the lessons inside. From vibrant events and lively student
                organizations to spaces where you can relax and recharge,
                there’s always something happening on campus.
              </p>
              <p class="text-[15px]">
                The Campus Link provides an up-to-date list of upcoming events
                and student organizations, so you can easily find ways to get
                involved. The Universal Program Council, a student-run
                organization, brings an array of entertainment to campus,
                including comedy shows, concerts, movies, and cultural events,
                ensuring there’s always something exciting to look forward to.
              </p>
              <p class="text-[15px]">
                For a fun and laid-back hangout, head to the Union NiteSpot,
                where you can enjoy entertainment with friends. If giving back
                is more your style, the Universal University Volunteers offer
                opportunities to participate in service projects that not only
                make a positive impact but also create lasting connections with
                your peers.
              </p>
              <p class="text-[15px]">
                The Universal Union serves as the central hub for socializing,
                grabbing a coffee at Starbucks, or taking care of student
                services like getting your ID card. For those seeking fitness
                and wellness, the Power Center is fully equipped with
                state-of-the-art fitness facilities and conference spaces.
                Sports fans can catch the action at the UPMC Cooper Fieldhouse,
                home to our basketball and volleyball teams.
              </p>
              <p class="text-[15px] mb-4">
                Whether you’re looking to stay active, relax, or get involved in
                the campus community, Universal offers a variety of ways to make
                the most of your college experience.
              </p>
            </div>
            <button
              id="city-btn-mobile"
              class="w-full py-4 px-4 text-start bg-white text-black text-[17px] font-bold hover:bg-blue-800 cursor-pointer"
            >
              <i
                id="city-icon-mobile"
                class="fa-solid fa-plus transition-transform duration-300"
              ></i>
              <span class="ml-4 text-[16px] lg:text-[22px]"
                >Step Into the City</span
              >
            </button>
            <div
              id="city-content-mobile"
              class="smooth-toggle w-full flex flex-col items-start gap-6 p-4"
            >
              <p class="text-[15px] mt-4">
                At Universal, students enjoy a unique balance of a dynamic
                campus life combined with the excitement and cultural offerings
                of downtown Pittsburgh. Just a short distance away from the
                university, you’ll find endless opportunities to explore,
                unwind, and experience the city's vibrant scene.
              </p>
              <p class="text-[15px]">
                Pittsburgh is a cultural haven, offering a rich array of Arts &
                Culture experiences. From the iconic Pittsburgh Symphony
                Orchestra to the cutting-edge Andy Warhol Museum, there’s no
                shortage of artistic inspiration. When the sun sets,
                Pittsburgh’s bustling nightlife comes alive with a variety of
                bars, clubs, and social spots to suit any mood.
              </p>
              <p class="text-[15px]">
                For sports enthusiasts, Pittsburgh's reputation as the "City of
                Champions" ensures a year-round calendar of exciting events and
                activities, from local sports games to outdoor fitness options.
                If you’re a nature lover, the Pittsburgh Zoo & PPG Aquarium
                offers a chance to explore diverse wildlife, including
                endangered species.
              </p>
              <p class="text-[15px]">
                For thrills, the historic Kennywood Park awaits with
                exhilarating rides and family-friendly fun, adding an extra
                layer of excitement to your college experience.
              </p>
              <p class="text-[15px]">
                Just a short walk from campus, you can dive into Pittsburgh's
                Cultural District, where Broadway performances, live music, and
                comedy shows await. For a taste of local dining and shopping,
                check out the SouthSide Works or Station Square, where a variety
                of restaurants, shops, and attractions are ready to explore.
              </p>
              <p class="text-[15px] mb-4">
                Pittsburgh's neighborhoods offer even more hidden gems,
                providing a blend of food, culture, and entertainment that adds
                to the charm of this vibrant city. Whether you’re looking to
                relax, stay active, or discover something new, Pittsburgh offers
                something for everyone.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- end info section --->

@endsection