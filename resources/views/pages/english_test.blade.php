
    @extends('layouts.common')
    

    @section('title', 'English Test')

    @section('content')

    <!--- hero section --->
    <section
      class="relative h-[250px] sm:h-[450px] lg:h-[504px] flex items-center md:items-end py-4 md:py-8 lg:py-16 px-8"
    >
      <!-- Blurred background -->
      <div
        class="absolute inset-0 bg-cover bg-center bg-no-repeat filter"
        style="background-image: url('{{asset('images/academic-01.jpg')}}')"
      ></div>

      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>

      <div
        class="w-full h-full flex flex-col gap-2 justify-center items-center lg:items-start z-10 md:px-12"
      >
        <a
          href="{{route('english_test')}}"
          class="text-[var(--secondary-color)] font-bold hover:text-white z-10"
          ><i class="fa-solid fa-angle-left"></i>ENGLISH TEST PREPARATION</a
        >

        <!-- Heading -->
        <h1
          class="about-title relative text-[40px] sm:text-[50px] md:text-[65px] font-bold text-white z-10 opacity-0"
        >
          ENGLISH TEST PREPARATION
        </h1>
      </div>
    </section>
    <!--- end hero section --->

    <!--- our service section --->
    <section
      class="text-center pb-3 md:pb-6 lg:pb-12 pt-4 md:pt-12 lg:pt-20 px-4 text-black bg-white"
    >
      <div class="lg:px-[3rem] 2xl:px-[12rem]">
        <div
          id="ielts"
          class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center"
        >
          <!-- Image -->
          <div
            class="flex justify-center"
          >
            <img
              src={{asset('images/universal-2.png')}}
              alt="IELTS"
              loading="lazy"
              class="w-full rounded-md"
            />
          </div>

          <!-- Service Card -->
          <div
            class="flex flex-col items-center justify-center text-card"
          >
            <div class="px-6 md:px-12 py-4 md:py-6 lg:py-12 text-start">
              <h4
                class="text-[22px] md:text-[26px] lg:text-[30px] font-bold text-[var(--secondary-color)]"
              >
                IELTS (International English Language Testing System)
              </h4>

              <div class="mt-3 px-2 md:px-6 lg:px-12 flex flex-col gap-4">
                <ul
                  class="list-disc text-black flex flex-col gap-3 text-sm md:text-base"
                >
                  <li class="ml-3">
                    Conducting Body: British Council, IDP: IELTS Australia, and
                    Cambridge Assessment English
                  </li>
                  <li class="ml-3">
                    Acceptance: Universities and institutions in the UK, USA,
                    Canada, Australia, and worldwide
                  </li>
                  <li class="ml-3">
                    Types of Exam: IELTS Academic, IELTS General Training, and
                    IELTS UKVI
                  </li>
                  <li class="ml-3">
                    Mode of Exam: Paper-based and Computer-based
                  </li>
                  <li class="ml-3">
                    Skills Tested: English reading, writing, speaking, and
                    listening skills
                  </li>
                </ul>

                <a href="{{route('english_test')}}"
                  class="px-8 py-2 mt-6 btn-clip bg-[var(--secondary-color)] text-white cursor-pointer text-[15px] md:text-[25px] font-bold"
                >
                  <span>Know more</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--- end our service section --->

    <!--- study section --->
    <section
      class="relative pb-4 md:pb-8 lg:pb-16 pt-3 md:pt-6 lg:pt-12 px-8 text-center text-white bg-cover bg-no-repeat"
       style="background-image: url('{{ asset('images/service.avif') }}')"
       >
      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>
      <div class="lg:px-[3rem] 2xl:px-[12rem]">
        <div
          class="relative flex flex-col items-start lg:items-center glassy-bg clip-container"
        >
          <!-- TOEFL Section -->
          <div
            id="toefl"
            class="flex lg:flex-row flex-col-reverse items-center gap-6 card"
          >
            <div
              class="lg:w-1/2 px-6 md:px-12 py-4 md:py-6 lg:py-12 text-start text-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4 class="text-[22px] md:text-[26px] lg:text-[30px] font-bold">
                TOEFL (Test of English as a Foreign Language)
              </h4>
              <div class="mt-3 px-2 md:px-6 lg:px-12 flex flex-col gap-4">
                <ul
                  class="list-disc flex flex-col gap-3 text-sm md:text-base text-white"
                >
                  <li class="ml-3">
                    Conducting Body: Educational Testing Service (ETS)
                  </li>
                  <li class="ml-3">
                    Acceptance: Universities and institutions in the USA,
                    Canada, Australia, UK, and globally
                  </li>
                  <li class="ml-3">
                    Types of Exam: TOEFL iBT, TOEFL Essentials, and TOEFL PBT
                    (Paper-based Test)
                  </li>
                  <li class="ml-3">
                    Mode of Exam: Online (Internet-based and Home Edition) and
                    Paper-based (limited locations)
                  </li>
                  <li class="ml-3">
                    Skills Tested: English reading, writing, speaking, and
                    listening skills
                  </li>
                </ul>
                <a href="{{route('english_test')}}"
                  class="px-8 py-2 mt-6 btn-clip glassy-bg group cursor-pointer text-[15px] md:text-[25px] font-bold"
                >
                  <span class="text-white group-hover:text-white"
                    >Know More</span
                  >
                </a>
              </div>
            </div>

            <div
              class="lg:w-1/2 image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('images/universal-5.png')}}
                alt="TOEFL"
                loading="lazy"
                class="h-full w-full object-cover rounded-md"
              />
            </div>
          </div>

          <!-- PTE Section -->
          <div
            id="pte"
            class="flex lg:flex-row-reverse flex-col-reverse items-center gap-6 card mt-8"
          >
            <div
              class="lg:w-1/2 px-6 md:px-12 py-4 md:py-6 lg:py-12 text-start text-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4 class="text-[22px] md:text-[26px] lg:text-[30px] font-bold">
                PTE (Pearson Test of English)
              </h4>
              <div class="mt-3 px-2 md:px-6 lg:px-12 flex flex-col gap-4">
                <ul
                  class="list-disc flex flex-col gap-3 text-sm md:text-base text-white"
                >
                  <li class="ml-3">Conducting Body: Pearson PLC Group</li>
                  <li class="ml-3">
                    Acceptance: Universities in the UK, Australia, New Zealand,
                    and other countries
                  </li>
                  <li class="ml-3">Types of Exam: PTE Academic and PTE UKVI</li>
                  <li class="ml-3">Mode of Exam: Online</li>
                  <li class="ml-3">
                    Skills Tested: English reading, writing, speaking, and
                    listening skills
                  </li>
                </ul>
                <a href="{{route('english_test')}}"
                  class="px-8 py-2 mt-6 btn-clip glassy-bg group cursor-pointer text-[15px] md:text-[25px] font-bold"
                >
                  <span class="text-white group-hover:text-white"
                    >Know More</span
                  >
                </a>
              </div>
            </div>

            <div
              class="lg:w-1/2 image-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('images/universal-1.png')}}
                alt="PTE"
                loading="lazy"
                class="h-full w-full object-cover rounded-md"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- end study section --->

    <!--- study2 section --->
    <section
      class="pb-4 md:pb-8 lg:pb-16 pt-3 md:pt-6 lg:pt-12 px-8 text-center text-[var(--secondary-color)] bg-white"
    >
      <div class="lg:px-[3rem] 2xl:px-[12rem]">
        <div class="relative flex flex-col items-start lg:items-center">
          <!-- Duolingo English Test -->
          <div
            id="duolingo"
            class="flex lg:flex-row flex-col-reverse items-center gap-6 card"
          >
            <div
              class="lg:w-1/2 px-6 md:px-12 py-4 md:py-6 lg:py-12 text-card text-start translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4 class="text-[22px] md:text-[26px] lg:text-[30px] font-bold">
                Duolingo English Test (DET)
              </h4>
              <div class="mt-3 px-2 md:px-6 lg:px-12 flex flex-col gap-4">
                <ul
                  class="list-disc flex flex-col gap-3 text-sm md:text-base text-[var(--secondary-color)]"
                >
                  <li class="ml-3">Conducting Body: Duolingo</li>
                  <li class="ml-3">
                    Acceptance: Universities and institutions in the USA, UK,
                    Canada, Australia, and other countries
                  </li>
                  <li class="ml-3">Types of Exam: Duolingo English Test</li>
                  <li class="ml-3">Mode of Exam: Online (at home)</li>
                  <li class="ml-3">
                    Skills Tested: English reading, writing, speaking, and
                    listening skills
                  </li>
                </ul>
                <a href="{{route('english_test')}}"
                  class="px-8 py-2 mt-6 btn-clip bg-[var(--secondary-color)] group cursor-pointer text-[15px] md:text-[25px] font-bold"
                >
                  <span class="text-white">Know More</span>
                </a>
              </div>
            </div>

            <div
              class="lg:w-1/2 image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('images/universal-8.png')}}
                alt="Duolingo English Test"
                loading="lazy"
                class="h-full w-full object-cover rounded-md"
              />
            </div>
          </div>

          <!-- Cambridge English Exams -->
          <div
            id="cambridge"
            class="flex lg:flex-row-reverse flex-col-reverse items-center gap-6 card mt-8"
          >
            <div
              class="lg:w-1/2 px-6 md:px-12 py-4 md:py-6 lg:py-12 text-card text-start translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4 class="text-[22px] md:text-[26px] lg:text-[30px] font-bold">
                Cambridge English Exams (CAE, CPE, FCE, PET, KET)
              </h4>
              <div class="mt-3 px-2 md:px-6 lg:px-12 flex flex-col gap-4">
                <ul
                  class="list-disc flex flex-col gap-3 text-sm md:text-base text-[var(--secondary-color)]"
                >
                  <li class="ml-3">
                    Conducting Body: Cambridge Assessment English
                  </li>
                  <li class="ml-3">
                    Acceptance: Universities and organizations in the UK,
                    Europe, and globally
                  </li>
                  <li class="ml-3">
                    Types of Exam: C1 Advanced (CAE), C2 Proficiency (CPE), B2
                    First (FCE), B1 Preliminary (PET), A2 Key (KET)
                  </li>
                  <li class="ml-3">
                    Mode of Exam: Paper-based and Computer-based
                  </li>
                  <li class="ml-3">
                    Skills Tested: English reading, writing, speaking, and
                    listening skills
                  </li>
                </ul>
                <a href="{{route('english_test')}}"
                  class="px-8 py-2 mt-6 btn-clip bg-[var(--secondary-color)] group cursor-pointer text-[15px] md:text-[25px] font-bold"
                >
                  <span class="text-white">Know More</span>
                </a>
              </div>
            </div>

            <div
              class="lg:w-1/2 image-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('images/WebsitEvent-03-06.png')}}
                alt="Cambridge English Exams"
                loading="lazy"
                class="h-full w-full object-cover rounded-md"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- end study2 section --->

    <!--- study3 section --->
    <section
      class="relative pb-4 md:pb-8 lg:pb-16 pt-3 md:pt-6 lg:pt-12 px-8 text-center text-white bg-cover bg-no-repeat"
      style="background-image: url('{{ asset('images/service.avif') }}')">
      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>
      <div class="lg:px-[3rem] 2xl:px-[12rem]">
        <div
          class="relative flex flex-col glassy-bg clip-container items-start lg:items-center"
        >
          <!-- Password Skills Plus Test -->
          <div
            id="password"
            class="flex lg:flex-row flex-col-reverse items-center gap-6 card"
          >
            <div
              class="lg:w-1/2 px-6 md:px-12 py-4 md:py-6 lg:py-12 text-card text-start translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4 class="text-[22px] md:text-[26px] lg:text-[30px] font-bold">
                Password Skills Plus Test
              </h4>
              <div class="mt-3 px-2 md:px-6 lg:px-12 flex flex-col gap-4">
                <ul
                  class="list-disc flex flex-col gap-3 text-sm md:text-base text-white"
                >
                  <li class="ml-3">
                    Conducting Body: Password English Language Testing Ltd
                  </li>
                  <li class="ml-3">
                    Acceptance: Universities and institutions in the UK and
                    other countries
                  </li>
                  <li class="ml-3">Types of Exam: Password Skills Plus</li>
                  <li class="ml-3">Mode of Exam: Online</li>
                  <li class="ml-3">
                    Skills Tested: English reading, writing, speaking, and
                    listening skills
                  </li>
                </ul>
                <a href="{{route('english_test')}}"
                  class="px-8 py-2 mt-6 btn-clip glassy-bg group cursor-pointer text-[15px] md:text-[25px] font-bold"
                >
                  <span class="text-white group-hover:text-white"
                    >Know More</span
                  >
                </a>
              </div>
            </div>

            <div
              class="lg:w-1/2 image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('images/WebsitEvent-03-05.png')}}
                alt="Password Skills Plus Test"
                loading="lazy"
                class="h-full w-full object-cover rounded-md"
              />
            </div>
          </div>

          <!-- Michigan English Test -->
          <div
            id="michigan"
            class="flex lg:flex-row-reverse flex-col-reverse items-center gap-6 card mt-8"
          >
            <div
              class="lg:w-1/2 px-6 md:px-12 py-4 md:py-6 lg:py-12 text-card text-start translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4 class="text-[22px] md:text-[26px] lg:text-[30px] font-bold">
                Michigan English Test (MET, ECCE, ECPE)
              </h4>
              <div class="mt-3 px-2 md:px-6 lg:px-12 flex flex-col gap-4">
                <ul
                  class="list-disc flex flex-col gap-3 text-sm md:text-base text-white"
                >
                  <li class="ml-3">
                    Conducting Body: Michigan Language Assessment (Cambridge
                    Assessment + University of Michigan)
                  </li>
                  <li class="ml-3">
                    Acceptance: Universities and institutions in the USA and
                    globally
                  </li>
                  <li class="ml-3">
                    Types of Exam: MET (Michigan English Test), ECCE, ECPE
                  </li>
                  <li class="ml-3">
                    Mode of Exam: Paper-based and Computer-based
                  </li>
                  <li class="ml-3">
                    Skills Tested: English reading, writing, speaking, and
                    listening skills
                  </li>
                </ul>
                <a href="{{route('english_test')}}"
                  class="px-8 py-2 mt-6 btn-clip glassy-bg group cursor-pointer text-[15px] md:text-[25px] font-bold"
                >
                  <span class="text-white group-hover:text-white"
                    >Know More</span
                  >
                </a>
              </div>
            </div>

            <div
              class="lg:w-1/2 image-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('images/WebsitEvent-03-07.png')}}
                alt="Michigan English Test"
                loading="lazy"
                class="h-full w-full object-cover rounded-md"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- end study3 section --->

    <!--- study4 section --->
    <section
      class="pb-4 md:pb-8 lg:pb-16 pt-3 md:pt-6 lg:pt-12 px-8 text-center text-[var(--secondary-color)] bg-white"
    >
      <div class="lg:px-[3rem] 2xl:px-[12rem]">
        <div class="relative flex flex-col items-start lg:items-center">
          <!-- iTEP -->
          <div
            id="itep"
            class="flex lg:flex-row flex-col-reverse items-center gap-6 card"
          >
            <div
              class="lg:w-1/2 px-6 md:px-12 py-4 md:py-6 lg:py-12 text-card text-start translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4 class="text-[22px] md:text-[26px] lg:text-[30px] font-bold">
                ITEP (International Test of English Proficiency)
              </h4>
              <div class="mt-3 px-2 md:px-6 lg:px-12 flex flex-col gap-4">
                <ul
                  class="list-disc flex flex-col gap-3 text-sm md:text-base text-[var(--secondary-color)]"
                >
                  <li class="ml-3">
                    Conducting Body: International Test of English Proficiency
                    (iTEP)
                  </li>
                  <li class="ml-3">
                    Acceptance: Universities, colleges, and businesses worldwide
                  </li>
                  <li class="ml-3">
                    Types of Exam: iTEP Academic, iTEP Business, iTEP SLATE,
                    iTEP Hospitality
                  </li>
                  <li class="ml-3">
                    Mode of Exam: Online and test center-based
                  </li>
                  <li class="ml-3">
                    Skills Tested: English reading, writing, speaking, and
                    listening
                  </li>
                </ul>
                <a href="{{route('english_test')}}"
                  class="px-8 py-2 mt-6 btn-clip bg-[var(--secondary-color)] cursor-pointer text-[15px] md:text-[25px] font-bold"
                >
                  <span class="text-white">Know More</span>
                </a>
              </div>
            </div>
            <div
              class="lg:w-1/2 image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('images/universal-9.png')}}
                alt="iTEP Test"
                loading="lazy"
                class="h-full w-full object-cover rounded-md"
              />
            </div>
          </div>

          <!-- Anglia Examinations -->
          <div
            id="anglia"
            class="flex lg:flex-row-reverse flex-col-reverse items-center gap-6 card mt-8"
          >
            <div
              class="lg:w-1/2 px-6 md:px-12 py-4 md:py-6 lg:py-12 text-card text-start translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4 class="text-[22px] md:text-[26px] lg:text-[30px] font-bold">
                Anglia Examinations
              </h4>
              <div class="mt-3 px-2 md:px-6 lg:px-12 flex flex-col gap-4">
                <ul
                  class="list-disc flex flex-col gap-3 text-sm md:text-base text-[var(--secondary-color)]"
                >
                  <li class="ml-3">
                    Conducting Body: Anglia Examinations England
                  </li>
                  <li class="ml-3">
                    Acceptance: Universities and institutions worldwide
                  </li>
                  <li class="ml-3">
                    Types of Exam: General English, Business English, Young
                    Learners, Advanced English
                  </li>
                  <li class="ml-3">Mode of Exam: Paper-based and Online</li>
                  <li class="ml-3">
                    Skills Tested: English reading, writing, speaking, and
                    listening
                  </li>
                </ul>
                <a href="{{route('english_test')}}"
                  class="px-8 py-2 mt-6 btn-clip bg-[var(--secondary-color)] cursor-pointer text-[15px] md:text-[25px] font-bold"
                >
                  <span class="text-white">Know More</span>
                </a>
              </div>
            </div>
            <div
              class="lg:w-1/2 image-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('images/WebsitEvent-03-03.png')}}
                alt="Anglia Exams"
                loading="lazy"
                class="h-full w-full object-cover rounded-md"
              />
            </div>
          </div>

          <!-- SAT -->
          <div
            id="sat"
            class="flex lg:flex-row flex-col-reverse items-center gap-6 mt-8"
          >
            <div
              class="lg:w-1/2 px-6 md:px-12 py-4 md:py-6 lg:py-12 text-card text-start"
            >
              <h4 class="text-[22px] md:text-[26px] lg:text-[30px] font-bold">
                SAT (Scholastic Assessment Test) - Evidence-Based Reading and
                Writing (EBRW)
              </h4>
              <div class="mt-3 px-2 md:px-6 lg:px-12 flex flex-col gap-4">
                <ul
                  class="list-disc flex flex-col gap-3 text-sm md:text-base text-[var(--secondary-color)]"
                >
                  <li class="ml-3">Conducting Body: College Board</li>
                  <li class="ml-3">
                    Acceptance: Universities in the USA, Canada, and globally
                  </li>
                  <li class="ml-3">Types of Exam: SAT EBRW</li>
                  <li class="ml-3">
                    Mode of Exam: Paper-based and Digital (starting 2024)
                  </li>
                  <li class="ml-3">
                    Skills Tested: Reading comprehension, grammar, vocabulary,
                    and analytical writing
                  </li>
                </ul>
                <a href="{{route('english_test')}}"
                  class="px-8 py-2 mt-6 btn-clip bg-[var(--secondary-color)] cursor-pointer text-[15px] md:text-[25px] font-bold"
                >
                  <span class="text-white">Know More</span>
                </a>
              </div>
            </div>
            <div
              class="lg:w-1/2"
            >
              <img
                src={{asset('images/WebsitEvent-03-04.png')}}
                alt="SAT Test"
                loading="lazy"
                class="h-full w-full object-cover rounded-md"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- end study4 section --->

    @endsection

   