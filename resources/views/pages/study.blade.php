@extends('layouts.common')

@php
    $studyBg = $study->images->get(0) ? Storage::url($study->images->get(0)->image) : '/images/our-service.jpg';
    $uniBg = $study->images->get(1) ? Storage::url($study->images->get(1)->image) : '/images/service.avif';
    $scholarBg = $study->images->get(2) ? Storage::url($study->images->get(2)->image) : '/images/our-service.jpg';
    $blogBg = $study->images->get(3) ? Storage::url($study->images->get(3)->image) : '/images/service.avif';
@endphp

@section('title', $study->name)

@section('content')

    @if ($study)

        <!--- hero section --->
        <section
            class="relative h-[250px] sm:h-[450px] lg:h-[504px] flex items-center md:items-end py-4 md:py-8 lg:py-16 px-8 text-center">
            <!-- Blurred background -->

            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat filter"
                style="background-image: url('{{ $study->main_image ? Storage::url($study->main_image) : '/images/website_cover.png' }}')">
            </div>

            <!-- Overlay to darken a bit for better readability -->
            <div class="absolute inset-0 bg-black/50"></div>

            <div class="w-full h-full flex flex-col gap-2 justify-center items-center lg:items-start z-10 md:px-12">
                <a href="{{ route('study_destination') }}"
                    class="text-[var(--secondary-color)] font-bold hover:text-white z-10"><i
                        class="fa-solid fa-angle-left"></i>Study Destination</a>

                <!-- Heading -->
                <h1
                    class="about-title opacity-0 relative text-[40px] sm:text-[50px] md:text-[65px] font-bold text-white z-10">
                    {{ $study->name }}
                </h1>
            </div>
        </section>
        <!--- end hero section --->

        <!--- study section --->
        <section
            class="relative pb-4 md:pb-8 lg:pb-16 pt-3 md:pt-6 lg:pt-12 px-8 text-center text-white bg-cover bg-no-repeat"
            style="background-image: url('{{ asset($studyBg) }}')">
            <!-- Heading -->

            <!-- Overlay to darken a bit for better readability -->
            <div class="absolute inset-0 bg-black/50"></div>

            <h2
                class="text-2xl sm:text-3xl md:text-4xl lg:text-[55px] font-bold mb-8 translate-y-10 opacity-0 transition-all duration-500 ease-out">
                Study Abroad in 4 Easy Steps
            </h2>

            <div class="px-2 md:px-[4rem] 2xl:px-[8rem]">
                <div class="relative flex flex-col items-start lg:items-center glassy-bg clip-container">
                    <div class="flex lg:flex-row flex-col-reverse items-center gap-0 card">
                        <div
                            class="lg:w-1/2 px-6 md:px-12 py-12 text-card text-start translate-x-[-50px] opacity-0 transition-all duration-500 ease-out">
                            <h4 class="text-[20px] md:text-[24px] lg:text-[27px] font-bold">
                                {{ $study->name }} — Step Into Global Excellence
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

                            <p>
                                {{$study->description}}
                            </p>
                        </div>
                        <div
                            class="lg:w-1/2 h-[400px] image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out">
                            <img src={{ asset('images/pretty-designer-working-computer.jpg') }}
                                alt="Step Into Global Excellence" loading="lazy" class="h-full w-full object-cover" />
                        </div>
                    </div>
                    <div class="flex lg:flex-row-reverse flex-col-reverse items-center gap-0 card">
                        <div
                            class="lg:w-1/2 px-6 md:px-12 py-12 text-card text-start translate-x-[50px] opacity-0 transition-all duration-500 ease-out">
                            <h4 class="text-[20px] md:text-[24px] lg:text-[27px] font-bold">
                                Academic & Language Requirements:
                            </h4>
                            <!-- <div class="mt-3 flex flex-col gap-4 text-sm md:text-base">
                                    <p>
                                      The affordable tuition and living expenses in Cyprus are among
                                      the biggest advantages of selecting the country for higher
                                      education. Cyprus offers much more economical study options
                                      without sacrificing quality when compared to other European
                                      study destinations. International students can live a pleasant
                                      life at a reduced cost while receiving a top-notch education
                                      at affordable tuition rates. Cyprus's low cost of living and
                                      excellent academic opportunities make it the ideal destination
                                      for students seeking a top-notch education and a real return
                                      on their investment.
                                    </p>
                                    <p>
                                      Here’s an overview of the average study costs in Cyprus,
                                      depending on the program and institution:
                                    </p>
                                    <ul
                                      class="list-disc text-black flex flex-col gap-4 px-6 lg:px-12 text-sm md:text-base"
                                    >
                                      <li>
                                        <p class="text-white ml-3">
                                          Undergraduate (Bachelor’s) Degree: €3,500 – €8,000 per
                                          year
                                        </p>
                                      </li>
                                      <li>
                                        <p class="text-white ml-3">
                                          Postgraduate (Master’s) Degree: €4,000 – €10,000 per year
                                        </p>
                                      </li>
                                      <li>
                                        <p class="text-white ml-3">
                                          Doctoral (PhD) Programs: €7,000 – €13,000 per year
                                        </p>
                                      </li>
                                      <li>
                                        <p class="text-white ml-3">
                                          English Language Courses: Around €150 – €250 per week,
                                          depending on duration
                                        </p>
                                      </li>
                                    </ul>
                                    <p>
                                      In comparison to many other European nations, students need
                                      between €400 and €800 per month to cover housing, food,
                                      transportation, and personal expenses.
                                    </p>
                                  </div> -->
                            Applicants generally need 12 years of schooling for undergraduate
                            programs and a relevant bachelor's degree for master's. IELTS
                            6.0–6.5 is commonly required (no band below 5.5).
                        </div>
                        <div
                            class="lg:w-1/2 lg:h-[400px] image-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out">
                            <img src={{ asset('images/closeup-woman-student-counting-us-dollar-banknotes-money-with-happy-library.jpg') }}
                                alt="Academic & Language Requirements" loading="lazy" class="h-full w-full object-cover" />
                        </div>
                    </div>
                    <div class="flex lg:flex-row flex-col-reverse items-center gap-0 card">
                        <div
                            class="lg:w-1/2 px-6 md:px-12 py-12 text-card text-start translate-x-[-50px] opacity-0 transition-all duration-500 ease-out">
                            <h4 class="text-[20px] md:text-[24px] lg:text-[27px] font-bold">
                                Document Checklist:
                            </h4>
                            <div class="mt-3 flex flex-col gap-4 text-sm md:text-base">
                                <!-- <p>
                                      Planning to study in Cyprus? Getting your student visa is a
                                      straightforward process — and with the right guidance, you can
                                      complete it without stress. Cyprus welcomes international
                                      students warmly, but there are a few important steps you’ll
                                      need to follow to ensure a smooth journey.
                                    </p>
                                    <p>
                                      To apply for a Cyprus student visa, you must first receive an
                                      offer or acceptance letter from a recognized university or
                                      college in Cyprus. You’ll also need to show proof of your
                                      financial ability to cover tuition fees and living expenses
                                      during your stay. In some cases, you may be asked to attend an
                                      interview or provide additional documents for verification.
                                    </p>
                                    <p>
                                      Here’s a simple breakdown of how the process usually works:
                                    </p> -->
                                <ul class="list-disc text-white flex flex-col gap-4 px-6 lg:px-12">
                                    <li>
                                        <p class="text-white ml-3">
                                            Academic transcripts & certificates
                                        </p>
                                    </li>
                                    <li>
                                        <p class="text-white ml-3">Passport copy</p>
                                    </li>
                                    <li>
                                        <p class="text-white ml-3">SOP & LORs</p>
                                    </li>
                                    <li>
                                        <p class="text-white ml-3">IELTS/PTE/TOEFL report</p>
                                    </li>
                                    <li>
                                        <p class="text-white ml-3">CV/Resume (for master's)</p>
                                    </li>
                                    <li>
                                        <p class="text-white ml-3">Proof of funds</p>
                                    </li>
                                </ul>
                                <!-- <p>
                                      👉 Tip: If you’re under 18, your parents or legal guardians
                                      can assist with the visa process, and some universities even
                                      help arrange pre-departure briefings and airport pickups.
                                    </p> -->
                            </div>
                        </div>
                        <div
                            class="lg:w-1/2 lg:h-[400px] image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out">
                            <img src={{ asset('images/152-min.jpg') }} alt="Document Checklist" loading="lazy"
                                class="h-full w-full object-cover" />
                        </div>
                    </div>
                    <div class="flex lg:flex-row-reverse flex-col-reverse items-center gap-0 card">
                        <div
                            class="lg:w-1/2 px-6 md:px-12 py-12 text-card text-start translate-x-[50px] opacity-0 transition-all duration-500 ease-out">
                            <h4 class="text-[20px] md:text-[24px] lg:text-[27px] font-bold">
                                Job Opportunities:
                            </h4>
                            <!-- <div class="mt-3 flex flex-col gap-4 text-sm md:text-base">
                                    <p>
                                      Heading to Cyprus for your studies is exciting, but your
                                      health should never take a back seat. Overseas Student Health
                                      Cover (OSHC) is a must-have for every international student.
                                      It ensures you’re protected from unexpected medical expenses
                                      and is often required for your student visa.
                                    </p>
                                    <p>
                                      With OSHC, you can access doctor visits, hospital treatments,
                                      and emergency care without worrying about high costs. If your
                                      family is joining you, they can be covered too. Plans usually
                                      cost around €400–€600 per year, making it a smart investment
                                      for peace of mind.
                                    </p>
                                    <p>
                                      Studying abroad is already a big adventure — let OSHC take
                                      care of your health, so you can focus on learning, exploring,
                                      and enjoying life in Cyprus.
                                    </p>
                                  </div> -->
                            <p>
                                Students can work 20 hours per week during term and full-time
                                during breaks. The Graduate Route visa allows 2 years (3 years
                                for PhD) of post-study work. Start your {{$study->name}} journey with NextNest
                                today!
                            </p>
                        </div>
                        <div
                            class="lg:w-1/2 lg:h-[400px] image-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out">
                            <img src={{ asset('images/joyful-medical-team-looking-terrestrial-globe.jpg') }}
                                alt="Job Opportunities" loading="lazy" class="h-full w-full object-cover" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--- end study section --->

        <!--- uni section --->
        <section class="relative text-center py-4 md:py-12 lg:py-20 px-4 text-white bg-cover bg-no-repeat"
            style="background-image: url('{{ asset($uniBg) }}')">
            <!-- Overlay to darken a bit for better readability -->
            <div class="absolute inset-0 bg-black/50"></div>
            <h2
                class="text-2xl sm:text-3xl md:text-4xl lg:text-[55px] font-extrabold mb-6 md:mb-8 lg:mb-10 translate-y-10 opacity-0 transition-all duration-500 ease-out">
                Choose Your University or College
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 px-8">

                @if ($study->universities->count())
                    @foreach ($study->universities as $university)
                        <a href="{{ route('study', $study->slug) }}" id="{{ $university->id }}"
                            class="glassy-bg rounded-xl h-[450px] overflow-hidden shadow-lg transition-transform transform scale-0 opacity-0 duration-500 hover:-translate-y-[10px] cursor-pointer">
                            <div class="h-[75%]">
                                <img src="{{ Storage::url($university->image) }}" alt="{{ $university->name }}"
                                    loading="lazy" class="w-full h-full object-cover" />
                            </div>
                            <div class="h-[25%] bg-transparent px-4 py-2 flex flex-col items-center gap-2 mt-2">
                                <h3 class="text-[20px] font-extrabold text-white">
                                    {{ $university->name }}
                                </h3>
                                <p class="text-sm md:text-base font-semibold">{{ $university->area }}</p>
                            </div>
                        </a>
                    @endforeach
                @endif

                <!-- Add more cards as needed -->
            </div>
        </section>

        <!--- end uni section --->

        <!--- scholarship section --->
        <section
            class="relative text-center pb-4 md:pb-8 lg:pb-16 pt-4 md:pt-12 lg:pt-20 px-4 text-white bg-cover bg-no-repeat"
            style="background-image: url('{{ asset($scholarBg) }}')">
            <!-- Overlay to darken a bit for better readability -->
            <div class="absolute inset-0 bg-black/50"></div>
            <!-- Section Title -->
            <h2
                class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-[50px] font-extrabold mb-6 sm:mb-8 lg:mb-10 leading-snug translate-y-10 opacity-0 transition-all duration-500 ease-out">
                All Scholarships Available
            </h2>

            <!-- Slider Container -->
            <div class="w-full max-w-6xl mx-auto px-4 py-4 md:py-6 lg:py-10">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper text-white">
                        @if ($study->scholarships->count())
                            @foreach ($study->scholarships as $scholarship)
                                <div id="{{ $scholarship->id }}"
                                    class="swiper-slide p-6 w-[300px] sm:w-[380px] glassy-bg card-clip text-start"
                                    style="height: 270px">
                                    <h5 class="text-xl font-bold mt-2">
                                        {{ $scholarship->name }}
                                    </h5>
                                    <div>
                                        <dt class="font-semibold text-[18px] mt-2">
                                            Funding application deadline:
                                        </dt>
                                        <dd class="font-semibold">{{ $scholarship->deadline }}</dd>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-[18px] mt-2">
                                            {{ $scholarship->university->name }}
                                        </p>
                                        <span class="font-semibold">{{ $scholarship->amount }}</span>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        <!-- Add more slides as needed -->
                    </div>

                    <!-- Navigation Arrows -->
                    <div class="swiper-button-next text-[var(--primary-color)]"></div>
                    <div class="swiper-button-prev text-[var(--primary-color)]"></div>
                </div>
            </div>
        </section>
        <!--- end scholarship section --->

        <!--- blog section --->
        <section
            class="relative text-center pb-4 md:pb-8 lg:pb-16 pt-4 md:pt-12 lg:pt-20 px-4 bg-cover bg-no-repeat text-white"
            style="background-image: url('{{ asset($blogBg) }}')">
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

    @endif

@endsection
