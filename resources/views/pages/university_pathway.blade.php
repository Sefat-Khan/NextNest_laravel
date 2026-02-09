@extends('layouts.common')
    

@section('title', 'University Pathway')

@section('content')

    <!--- hero section --->
    <section
      class="relative h-[250px] sm:h-[450px] lg:h-[504px] flex items-center md:items-end py-4 md:py-8 lg:py-16 px-8 text-center"
    >
      <!-- Blurred background -->
      <div
        class="absolute inset-0 bg-cover bg-center bg-no-repeat filter"
        style="background-image: url('{{ asset('images/study-australia-01.jpg') }}')"
      ></div>

      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>

      <div
        class="w-full h-full flex flex-col gap-2 justify-center items-center lg:items-start z-10 md:px-12"
      >
        <a
          href="{{route('home')}}"
          class="text-[var(--secondary-color)] font-bold hover:text-white z-10"
          ><i class="fa-solid fa-angle-left"></i>University Pathways</a
        >

        <!-- Heading -->
        <h1
          class="about-title opacity-0 relative text-[40px] sm:text-[50px] md:text-[65px] font-bold text-white z-10"
        >
          UNIVERSITY PATHWAYS
        </h1>
      </div>
    </section>
    <!--- end hero section --->

    <!--- Achieve section --->
    <section
      class="relative flex flex-col items-center md:items-end py-4 md:py-8 lg:py-16 px-8 text-center"
    >
      <div class="px-8 md:px-[6rem] 2xl:px-[14rem] text-start">
        <div class="flex flex-col gap-4">
          <h3
            class="text-[24px] sm:text-[28px] md:text-[32px] lg:text-[35px] font-bold text-[var(--secondary-color)] translate-y-10 opacity-0 transition-all duration-700 ease-out"
          >
            Achieve More: Your Hub for Growth
          </h3>
          <div class="text-start">
            <h5 class="text-[23px]">A Meaningful Place</h5>
            <p class="mt-6 text-sm md:text-base">
              Your environment shapes your journey, and at Universal, our
              community is built to help you thrive. Here, you’ll forge lasting
              friendships, explore new interests, challenge yourself, and expand
              your personal horizons beyond the classroom. We believe in
              learning together, and we understand the importance of balancing
              the rigors of academics with experiences that foster personal
              growth, helping you become not just a successful student, but a
              well-rounded individual.
            </p>
          </div>
        </div>
        <div class="flex md:flex-row flex-col gap-6 mt-6 card">
          <div
            class="md:w-[30%] h-full image-card translate-x-[-50px] opacity-0 transition-all duration-700 ease-out"
          >
            <img
              src={{asset('images/universal-welving.jpg')}}
              alt="universe"
              loading="lazy"
              class="w-full h-full object-cover"
            />
          </div>
          <div
            class="text-start md:w-[70%] pr-8 text-card translate-x-[50px] opacity-0 transition-all duration-700 ease-out"
          >
            <h5 class="text-[23px] font-semibold">Get Involved</h5>
            <p class="mt-4 text-sm md:text-base">
              At Universal, your experience goes beyond the classroom. Whether
              you participate in a student organization, stay active at the
              Power Center, receive personalized tutoring for challenging
              courses, or utilize the Center for Career Development for job
              placement assistance, every opportunity to get involved enhances
              your time here.
            </p>
            <p class="mt-4 text-sm md:text-base">
              Life at Universal is designed to equip you for
              success—academically, personally, and professionally. With a focus
              on both your academic aspirations and personal growth, Universal
              provides the space and support to help you achieve your bigger
              goals, both in and out of the classroom.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--- end Achieve section --->

    <!--- study section --->
    <section
      class="relative pb-4 md:pb-8 lg:pb-16 pt-4 md:pt-12 lg:pt-20 px-8 text-center text-white bg-cover bg-no-repeat"
      style="background-image: url('{{ asset('images/our-service.jpg') }}')"
    >
      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>
      <!-- Heading -->

      <h2
        class="text-2xl sm:text-3xl md:text-4xl lg:text-[55px] font-bold translate-y-10 opacity-0 transition-all duration-500 ease-out"
      >
        Your community, your opportunities
      </h2>

      <div class="px-2 md:px-[4rem] 2xl:px-[8rem]">
        <div
          class="relative flex flex-col items-start lg:items-center glassy-bg clip-container mt-4"
        >
          <div
            class="flex lg:flex-row flex-col-reverse items-center gap-0 lg:h-[380px] card"
          >
            <div
              class="lg:w-1/2 px-12 py-4 text-start text-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4
                class="text-[24px] sm:text-[28px] md:text-[32px] lg:text-[35px] font-bold"
              >
                Living
              </h4>
              <p class="text-sm md:text-base mt-3 md:mt-6">
                At Universal, we offer housing options that support your
                academic journey, which is why we refer to them as Living
                Learning Centers. With a variety of on-campus housing and dining
                choices, you’ll find the perfect living environment that
                encourages both your personal growth and academic success.
              </p>
            </div>
            <div
              class="lg:w-1/2 h-full image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('images/quebec-city-skyline-with-chateau-frontenac-sunset-viewed-from-hill-min.jpg')}}
                alt="Living"
                loading="lazy"
                class="h-full w-full object-cover"
              />
            </div>
          </div>

          <div
            class="flex lg:flex-row-reverse flex-col-reverse items-center gap-0 lg:h-[380px] card"
          >
            <div
              class="lg:w-1/2 px-12 py-4 text-start text-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4
                class="text-[24px] sm:text-[28px] md:text-[32px] lg:text-[35px] font-bold"
              >
                Wellbeing
              </h4>
              <p class="text-sm md:text-base mt-3 md:mt-6">
                We support your overall wellbeing by offering resources to
                nurture your spiritual growth, no matter your faith background.
                In addition, you'll have access to mental health services and
                wellness programs to help you thrive. Build meaningful
                connections and prioritize your health, both mentally and
                spiritually, as you navigate your university experience.
              </p>
            </div>
            <div
              class="lg:w-1/2 h-full image-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('images/group-people-sit-grass-look-sunset-min.jpg')}}
                alt="Wellbeing"
                loading="lazy"
                class="h-full w-full object-cover"
              />
            </div>
          </div>

          <div
            class="flex lg:flex-row flex-col-reverse items-center gap-0 lg:h-[380px] card"
          >
            <div
              class="lg:w-1/2 px-12 py-4 text-start text-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4
                class="text-[24px] sm:text-[28px] md:text-[32px] lg:text-[35px] font-bold"
              >
                Safety and Support
              </h4>
              <p class="text-sm md:text-base mt-3 md:mt-6">
                Universal is committed to providing the support you need to
                succeed both academically and personally. Our dedicated offices
                are here to assist with your day-to-day needs, while our Public
                Safety department builds strong relationships with students to
                ensure a secure and welcoming campus community. You can always
                count on us for guidance, assistance, and peace of mind.
              </p>
            </div>
            <div
              class="lg:w-1/2 h-full image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src={{asset('images/front-view-social-distance-concept-min.jpg')}}
                alt="Safety and Support"
                loading="lazy"
                class="h-full w-full object-cover"
              />
            </div>
          </div>

          <div
            class="flex lg:flex-row-reverse flex-col-reverse items-center gap-0 card"
          >
            <div
              class="lg:w-1/2 px-12 py-8 text-start text-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
            >
              <h4
                class="text-[24px] sm:text-[28px] md:text-[32px] lg:text-[35px] font-bold"
              >
                Having Fun
              </h4>
              <p class="text-sm md:text-base mt-3 md:mt-6">
                At Universal, there’s always something exciting to do. With over
                280 student organizations, vibrant Greek life, the dynamic city
                of Pittsburgh at your doorstep, and the energy of NCAA Division
                1 athletics, you'll never run out of ways to have fun and make
                memories. Whether you're pursuing your passions or exploring new
                ones, Universal offers a lively and engaging campus experience.
              </p>
            </div>
            <div
              class="lg:w-1/2 lg:h-[480px] image-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
            >
              <img
                src="images/four-friends-are-taking-selfie-front-toronto-skyline-they-are-all-smiling-wearing-sunglasses-min.jpg"
                alt="Having Fun"
                loading="lazy"
                class="h-full w-full object-cover"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- end study section --->

    <!--- our service section --->
    <section
      class="text-center pb-3 md:pb-6 lg:pb-12 pt-4 md:pt-12 lg:pt-20 px-4 text-black bg-white"
    >
      <div class="lg:px-[2rem] xl:px-[6rem]">
        <div
          class="text-start px-16 py-12 bg-[var(--secondary-color)] clip-container-m"
        >
          <h5 class="text-[20px] md:text-[30px] font-bold mb-6 text-white">
            "After a day of classes or exams, I like to go to the racquetball
            court at the Power Center. You can play and get your energy out. It
            feels really good."
          </h5>
          <span class=""
            ><i class="text-[15px] md:text-[20px] font-bold text-black"
              >Bhoomika Sripathi</i
            ></span
          >
        </div>
        <div
          class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center clip-container mt-6 card"
        >
          <!-- Image -->
          <div
            class="flex justify-center h-full image-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
          >
            <img
              src={{asset('images/students-walking-campus-pathway-towards.jpg')}}
              alt="University Campus"
              loading="lazy"
              class="w-full h-full ovject-cover"
            />
          </div>

          <!-- Service Card -->
          <div
            class="flex flex-col items-center gap-4 justify-center text-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
          >
            <div class="lg:px-6 xl:px-12 py-6 text-start">
              <h4
                class="text-[22px] sm:text-[25px] md:text-[27px] lg:text-[30px] text-center md:text-start font-bold text-[var(--secondary-color)]"
              >
                Discover the Thrill of Campus Life Beyond Academics
              </h4>
              <div class="mt-3 flex flex-col gap-4">
                <p class="text-sm sm:text-base">
                  College is about more than just studying—it’s a place to grow,
                  connect, and experience new things. Our club sports provide
                  the perfect opportunity to stay active, have fun, and make
                  lasting memories. Whether you're looking to enhance your
                  current skills or try something new, there's a spot for you in
                  our diverse range of club sports. Join a team, participate in
                  practices and matches, and take part in local and regional
                  tournaments. Embrace the excitement and camaraderie that comes
                  with being part of something bigger than yourself.
                </p>
                <a href="{{route('university_pathway')}}"
                  class="px-8 py-2 mt-2 btn-clip bg-[var(--secondary-color)] cursor-pointer text-[15px] md:text-[20px] font-bold"
                >
                  <span class="text-white"
                    >Choose Your Sport & Get Started</span
                  >
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--- end our service section --->

    <!--- card section --->
    <section
      class="relative text-center pb-3 md:pb-6 lg:pb-12 pt-4 md:pt-12 lg:pt-20 px-4 text-black bg-[url('images/group-people-are-planting-trees-with-city-skyline-soft-focus-them-min.jpg')] bg-cover bg-no-repeat"
      style="background-image: url('{{ asset('images/group-people-are-planting-trees-with-city-skyline-soft-focus-them-min.jpg') }}')"
    >
      <div class="absolute inset-0 bg-black/70"></div>
      <div class="relative z-10">
        <h2
          class="text-[28px] sm:text-[40px] md:text-[50px] lg:text-[55px] font-bold text-[var(--secondary-color)] translate-y-10 opacity-0 transition-all duration-500 ease-out"
        >
          What kind of student are you?
        </h2>
        <p class="mt-4 text-sm sm:text-base text-white">
          Depending on why you're here, you may need different information.
        </p>
      </div>
      <!-- Slider Container -->
      <div class="relative z-10 w-full max-w-6xl mx-auto px-4 py-5 lg:py-10">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div
              class="swiper-slide p-8 w-[300px] sm:w-[380px] glassy-bg card-clip text-white text-start"
              style="height: 444px"
            >
              <div class="flex flex-col items-start w-full h-full">
                <div class="flex flex-col gap-3">
                  <h5 class="text-[22px] sm:text-[25px] font-semibold">
                    Graduate Student Life
                  </h5>
                  <hr class="w-[25%] h-[3px] bg-[var(--secondary-color)]" />
                  <p class="text-sm">
                    Graduate student life involves balancing rigorous academics
                    with personal well-being. Students engage in advanced
                    coursework, research, and professional development while
                    managing responsibilities like work and family. Effective
                    time management and self-care are essential for success.
                  </p>
                </div>
                <a
                  href="{{route('home')}}"
                  class="self-center glassy-bg text-white btn-clip px-8 py-3 text-sm sm:text-base xl:text-lg font-bold mt-auto cursor-pointer"
                >
                  <span class="text-white">Grad student life</span>
                </a>
              </div>
            </div>

            <!-- Slide 2 -->
            <div
              class="swiper-slide p-8 w-[300px] sm:w-[380px] h-[444px] glassy-bg card-clip text-white text-start"
              style="height: 444px"
            >
              <div class="flex flex-col items-start w-full h-full">
                <div class="flex flex-col gap-3">
                  <h5 class="text-[22px] sm:text-[25px] font-semibold">
                    International Student
                  </h5>
                  <hr class="w-[25%] h-[3px] bg-[var(--secondary-color)]" />
                  <p class="text-sm">
                    International students enrich campuses with diverse
                    perspectives but often face challenges such as language
                    barriers, cultural adjustments, and homesickness. Support
                    services and community engagement are vital for a successful
                    academic experience.
                  </p>
                </div>
                <a
                  href="{{route('home')}}"
                  class="self-center glassy-bg text-white btn-clip px-8 py-3 text-sm sm:text-base xl:text-lg font-bold mt-auto cursor-pointer"
                >
                  <span class="text-white">International student life</span>
                </a>
              </div>
            </div>

            <!-- Slide 3 -->
            <div
              class="swiper-slide p-8 w-[300px] sm:w-[380px] h-[444px] glassy-bg card-clip text-white text-start"
              style="height: 444px"
            >
              <div class="flex flex-col items-start w-full h-full">
                <div class="flex flex-col gap-3">
                  <h5 class="text-[22px] sm:text-[25px] font-semibold">
                    Parents and Families
                  </h5>
                  <hr class="w-[25%] h-[3px] bg-[var(--secondary-color)]" />
                  <p class="text-sm">
                    Family engagement in education significantly enhances
                    student achievement, behavior, and overall school
                    environment. Active collaboration between parents, families,
                    and educators fosters a supportive learning atmosphere,
                    promoting children's academic and social development.
                  </p>
                </div>
                <a
                  href="{{route('home')}}"
                  class="self-center glassy-bg text-white btn-clip px-8 py-3 text-sm sm:text-base xl:text-lg font-bold mt-auto cursor-pointer"
                >
                  <span class="text-white">Resources for Families</span>
                </a>
              </div>
            </div>

            <!-- Slide 4 -->
            <div
              class="swiper-slide p-8 w-[300px] sm:w-[380px] glassy-bg card-clip text-white text-start"
              style="height: 444px"
            >
              <div class="flex flex-col items-start w-full h-full">
                <div class="flex flex-col gap-3">
                  <h5 class="text-[22px] sm:text-[25px] font-semibold">
                    First-time Undergraduate Student
                  </h5>
                  <hr class="w-[25%] h-[3px] bg-[var(--secondary-color)]" />
                  <p class="text-sm">
                    First-time undergraduate students often face challenges such
                    as adjusting to a new academic environment, managing time
                    effectively, and building a social network. Utilizing campus
                    resources and seeking support can enhance their college
                    experience.
                  </p>
                </div>
                <a
                  href="{{route('home')}}"
                  class="self-center glassy-bg text-white btn-clip px-8 py-3 text-sm sm:text-base xl:text-lg font-bold mt-auto cursor-pointer"
                >
                  <span class="text-white">First-Year Experience</span>
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
    <!--- end card section --->

    <!--- growth section --->
    <section
      class="text-center pb-3 md:pb-6 lg:pb-12 pt-4 md:pt-12 lg:pt-20 px-4 text-black bg-white"
    >
      <div class="lg:px-[2rem] xl:px-[6rem]">
        <div
          class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center clip-container mt-6 card"
        >
          <!-- Image -->
          <div
            class="flex justify-center h-full image-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out"
          >
            <img
              src={{asset('images/conducting-business-investing-with-focus-sustainability-emphasizing-ecosystem-within-organization-company-represented-as-double-exposure-image-min.jpg')}}
              alt="Believe in Yourself"
              loading="lazy"
              class="w-full h-full object-cover"
            />
          </div>

          <!-- Service Card -->
          <div
            class="flex flex-col items-center gap-4 justify-center text-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out"
          >
            <div class="lg:px-6 xl:px-12 py-6 text-start">
              <h4
                class="text-[22px] sm:text-[25px] md:text-[27px] lg:text-[30px] text-center md:text-start font-bold text-[var(--secondary-color)]"
              >
                GROWING TOGETHER—SHAPING THE FUTURE
              </h4>
              <div class="mt-3 flex flex-col gap-4">
                <p class="text-sm sm:text-base">
                  At Universal, students come from diverse cultures,
                  experiences, and perspectives, creating a vibrant global
                  community. As you immerse yourself in this environment, you’ll
                  develop essential life skills that will shape you into a
                  responsible, compassionate individual and a positive influence
                  in society. Our community is built on shared values and
                  guidelines that support personal growth, collaboration, and
                  respect for one another, helping you become the best version
                  of yourself.
                </p>
                <a href="{{route('university_pathway')}}"
                  class="px-8 py-2 mt-6 btn-clip bg-[var(--secondary-color)] text-white cursor-pointer text-[15px] md:text-[25px] font-bold"
                >
                  <span class="text-white">Student Handbook</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--- end growth section --->

@endsection