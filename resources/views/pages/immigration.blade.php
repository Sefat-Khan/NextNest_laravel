@extends('layouts.common')

@section('title', 'Immigration Services')

@section('content')

<!-- Hero Section -->
<section
  class="relative h-[250px] sm:h-[450px] lg:h-[504px] flex items-center md:items-end py-4 md:py-8 lg:py-16 px-8"
>
  <!-- Background -->
  <div
    class="absolute inset-0 bg-cover bg-center bg-no-repeat filter"
    style="background-image: url('{{ asset('images/immigration.webp') }}')"
  ></div>
  <div class="absolute inset-0 bg-black/50"></div>

  <!-- Heading -->
  <h1
    class="relative text-[40px] sm:text-[50px] md:text-[65px] font-bold text-white z-10 ml-12 opacity-0"
  >
    IMMIGRATION SERVICES
  </h1>
</section>

<!-- Services Section -->
<section
  class="relative pb-4 md:pb-8 lg:pb-16 pt-4 md:pt-12 lg:pt-20 px-8 text-center text-white bg-cover bg-no-repeat"
  style="background-image: url('{{ asset('images/service.avif') }}')"
>
  <div class="absolute inset-0 bg-black/50"></div>
  <h2 class="text-xl sm:text-2xl md:text-4xl lg:text-[50px] font-bold translate-y-10 opacity-0 transition-all duration-500 ease-out mb-8">
    Helping You Navigate Global Immigration
  </h2>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <div class="glassy-bg bg_overlay relative p-6 rounded-xl group w-full text-white shadow-lg overflow-hidden transition-all duration-300">
      <h4 class="text-[22px] md:text-[25px] font-bold mb-2">Visa Consultation</h4>
      <p class="text-sm md:text-base font-semibold">Expert guidance for student, work, or family visas worldwide.</p>
    </div>
    <div class="glassy-bg bg_overlay relative p-6 rounded-xl group w-full text-white shadow-lg overflow-hidden transition-all duration-300">
      <h4 class="text-[22px] md:text-[25px] font-bold mb-2">Eligibility Assessment</h4>
      <p class="text-sm md:text-base font-semibold">We analyze your profile to find the most suitable immigration pathways.</p>
    </div>
    <div class="glassy-bg bg_overlay relative p-6 rounded-xl group w-full text-white shadow-lg overflow-hidden transition-all duration-300">
      <h4 class="text-[22px] md:text-[25px] font-bold mb-2">Application Support</h4>
      <p class="text-sm md:text-base font-semibold">End-to-end assistance with forms, documentation, and submission.</p>
    </div>
    <div class="glassy-bg bg_overlay relative p-6 rounded-xl group w-full text-white shadow-lg overflow-hidden transition-all duration-300">
      <h4 class="text-[22px] md:text-[25px] font-bold mb-2">Post-Visa Services</h4>
      <p class="text-sm md:text-base font-semibold">Pre-departure briefings, travel guidance, and settlement advice.</p>
    </div>
  </div>
</section>

<!-- Workflow Section -->
<section class="py-4 md:py-8 lg:py-16 px-8 text-center bg-white">
  <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-[var(--secondary-color)] translate-y-10 opacity-0 transition-all duration-500 ease-out mb-10">
    OUR IMMIGRATION PROCESS
  </h2>
  <div class="p-8 flex flex-col gap-8 overflow-visible">
    @foreach([
      ['01','Initial Consultation','We discuss your goals and immigration options.'],
      ['02','Eligibility Assessment','Analyze your profile to find suitable pathways.'],
      ['03','Documentation','Prepare all documents required for your visa application.'],
      ['04','Application Submission','Submit applications accurately and on time.'],
      ['05','Visa Follow-up','Track progress and communicate with authorities.'],
      ['06','Pre-Departure & Settlement','Guidance for travel, accommodation, and settling abroad.']
    ] as $step)
    <div class="flex {{ $loop->iteration % 2 == 0 ? 'flex-row-reverse' : '' }} lg:gap-[7rem] card text-white items-center">
      <div class="shadow-2xl w-[480px] px-6 py-4 flex flex-col md:flex-row gap-4 items-center md:items-start rounded-xl text-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out">
        <div class="w-1/2 btn-clip bg-[var(--secondary-color)] flex flex-col gap-2 -mt-8 h-fit pt-1">
          <span class="text-lg font-semibold">Step</span>
          <span class="text-[35px] font-bold">{{ $step[0] }}</span>
        </div>
        <div class="text-center md:text-start w-1/2">
          <h4 class="text-black text-[17px] font-bold">{{ $step[1] }}</h4>
          <p class="text-black text-[12px] mt-2">{{ $step[2] }}</p>
        </div>
      </div>
      <div class="w-[35px] h-[35px] rounded-full bg-[var(--primary-color)] justify-center items-center lg:flex hidden">
        <div class="w-[15px] h-[15px] rounded-full bg-white"></div>
      </div>
    </div>
    @endforeach
  </div>
</section>

<!-- Popular Destinations Section -->
<section class="text-center py-4 md:py-12 lg:py-20 px-4 text-white bg-white">
  <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-[55px] font-extrabold mb-8 text-[var(--secondary-color)] translate-y-10 opacity-0 transition-all duration-500 ease-out">
    Popular Immigration Destinations
  </h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 px-8">
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
  </div>
</section>

@endsection
