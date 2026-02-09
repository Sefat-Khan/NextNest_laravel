@extends('layouts.common')

@section('title', 'Visa Consulting')

@section('content')

<!-- Hero Section -->
<section
    class="relative h-[250px] sm:h-[450px] lg:h-[504px] flex items-center md:items-end py-4 md:py-8 lg:py-16 px-8"

    >
   
    <div
        class="absolute inset-0 bg-cover bg-center bg-no-repeat filter"
        style="background-image: url('{{ asset('images/visa.jpg') }}')"
    ></div>
    <div class="absolute inset-0 bg-black/50"></div>
    <h1 class="relative text-[40px] sm:text-[50px] md:text-[65px] font-bold text-white z-10 ml-12 opacity-0">
        VISA CONSULTING
    </h1>
</section>
<!-- End Hero Section -->

<!-- About Visa Consulting Section -->
<section
    class="relative pb-4 md:pb-8 lg:pb-16 pt-4 md:pt-12 lg:pt-20 px-8 text-center text-white bg-cover bg-no-repeat"
    style="background-image: url('{{ asset('images/our-service.jpg') }}')"
>

    <div class="absolute inset-0 bg-black/50"></div>
    <div class="flex flex-col gap-1 items-center mb-4">
        <h2 class="text-xl sm:text-2xl md:text-4xl lg:text-[50px] font-bold translate-y-10 opacity-0 transition-all duration-500 ease-out">
            NextNest Immigration Visa Services
        </h2>
        <h2 class="text-xl sm:text-2xl md:text-4xl lg:text-[50px] font-bold translate-y-10 opacity-0 transition-all duration-500 ease-out mt-2">
            – Your Trusted Visa Partner Abroad
        </h2>
    </div>
    <div class="px-2 md:px-[4rem] 2xl:px-[8rem]">
        <div class="relative flex flex-col items-start lg:items-center glassy-bg clip-container">
            <div class="flex lg:flex-row flex-col-reverse items-center gap-0 card">
                <div class="lg:w-1/2 px-6 lg:px-12 py-4 text-card text-start translate-x-[-50px] opacity-0 transition-all duration-500 ease-out">
                    <h4 class="text-[22px] md:text-[35px] font-bold">Our Visa Consulting</h4>
                    <p class="text-sm mt-6">
                        We help you navigate the complex world of visas for studying, working, or settling abroad. From eligibility checks to document preparation and interview guidance, our expert team ensures a smooth visa application process.
                    </p>
                </div>
                <div class="lg:w-1/2 h-full image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out">
                    <img
                        src="{{ asset('images/visa_consault.jpg') }}"
                        alt="Visa Consulting"
                        loading="lazy"
                        class="h-full w-full object-cover"
                    />
                </div>
            </div>

            <div class="flex lg:flex-row-reverse flex-col-reverse items-center gap-0 card">
                <div class="lg:w-1/2 px-6 lg:px-12 py-4 text-card text-start translate-x-[50px] opacity-0 transition-all duration-500 ease-out">
                    <h4 class="text-[22px] md:text-[35px] font-bold">Our Mission</h4>
                    <p class="text-sm md:text-base mt-6">
                        To provide personalized visa solutions that simplify global mobility. We aim to turn the stressful visa process into a seamless experience, guiding clients with accuracy, transparency, and care.
                    </p>
                </div>
                <div class="lg:w-1/2 h-full image-card translate-x-[-50px] opacity-0 transition-all duration-500 ease-out">
                    <img
                        src="{{ asset('images/visa_mission.avif') }}"
                        alt="Visa Mission"
                        loading="lazy"
                        class="h-full w-full object-cover"
                    />
                </div>
            </div>

            <div class="flex lg:flex-row flex-col-reverse items-center gap-0 card">
                <div class="lg:w-1/2 px-6 lg:px-12 py-4 text-card text-start translate-x-[-50px] opacity-0 transition-all duration-500 ease-out">
                    <h4 class="text-[22px] md:text-[35px] font-bold">Our Services</h4>
                    <ul class="list-disc list-inside mt-4 text-sm md:px-4">
                        <li>Study & Work Visa Guidance</li>
                        <li>Eligibility Checks & Strategic Planning</li>
                        <li>Document Preparation & Review</li>
                        <li>Interview Preparation</li>
                        <li>Pre-Departure & Settlement Support</li>
                    </ul>
                    <p class="text-sm mt-6">
                        We provide end-to-end support to ensure your visa application is handled professionally and efficiently, giving you peace of mind.
                    </p>
                </div>
                <div class="lg:w-1/2 h-full image-card translate-x-[50px] opacity-0 transition-all duration-500 ease-out">
                    <img
                        src="{{ asset('images/visa-services.webp') }}"
                        alt="Visa Services"
                        loading="lazy"
                        class="h-full w-full object-cover"
                    />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Visa Section -->

<!-- Workflow Section -->
<section class="py-4 md:py-8 lg:py-16 px-8 text-center text-white bg-white">
    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-[var(--secondary-color)] translate-y-10 opacity-0 transition-all duration-500 ease-out mb-10">
        OUR VISA PROCESS
    </h2>
    <div class="p-8 flex flex-col gap-11 lg:gap-8 xl:gap-2 overflow-visible">

        @foreach([
            ['01', 'Online Assessment', 'Submit your visa application online'],
            ['02', 'Document Review', 'We check all documents for compliance'],
            ['03', 'Application Submission', 'We submit to the relevant embassy'],
            ['04', 'Interview Preparation', 'Prepare you for visa interviews'],
            ['05', 'Visa Approval & Support', 'Receive your visa and pre-departure guidance']
        ] as $step)
            <div class="flex {{ $loop->iteration % 2 == 0 ? 'flex-row-reverse' : '' }} lg:gap-[7.12rem] card items-center">
                <div class="shadow-2xl w-[480px] px-6 py-4 flex md:flex-row flex-col gap-4 items-center md:items-start text-card rounded-xl translate-x-{{ $loop->iteration % 2 == 0 ? '[50px]' : '[-50px]' }} opacity-0 transition-all duration-500 ease-out">
                    <div class="w-1/2 btn-clip bg-[var(--secondary-color)] flex flex-col gap-2 -mt-8 h-fit pt-1">
                        <span class="text-lg font-semibold">Step</span>
                        <span class="text-[35px] font-bold">{{ $step[0] }}</span>
                    </div>
                    <div class="text-center md:text-start w-1/2">
                        <h4 class="text-black text-[17px] font-bold">{{ $step[1] }}</h4>
                        <p class="text-black text-[12px] mt-2">{{ $step[2] }}</p>
                    </div>
                </div>
                <div class="w-[35px] h-[35px] rounded-full bg-[var(--primary-color)] justify-center items-center lg:stick lg:flex hidden">
                    <div class="w-[15px] h-[15px] rounded-full bg-white"></div>
                </div>
            </div>
        @endforeach

    </div>
</section>
<!-- End Workflow Section -->

<!-- Visa Services Section -->
<section class="relative text-center pb-3 md:pb-6 lg:pb-12 pt-4 md:pt-12 lg:pt-20 px-4 text-white bg-cover bg-no-repeat" style="background-image: url('{{ asset('images/service.avif') }}')">
    <div class="absolute inset-0 bg-black/50"></div>
    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-[56px] font-extrabold mb-4 sm:mb-6 lg:mb-10 leading-tight sm:leading-tight translate-y-10 opacity-0 transition-all duration-500 ease-out">
        OUR VISA SERVICES
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 lg:gap-10 items-center">

        <!-- Image -->
        <div class="flex justify-center">
            <img src="{{ asset('images/visa_team.webp') }}" alt="team" loading="lazy" class="w-full"/>
        </div>

        <!-- Service Cards -->
        <div class="flex flex-col items-center gap-4 justify-center">
            @foreach([
                ['Student Visa', 'Guidance and processing for studying abroad'],
                ['Work Visa', 'Support for employment-based visas'],
                ['Family Visa', 'Assistance with family sponsorship applications'],
                ['Pre-Departure Support', 'Advice on travel, accommodation, and settlement']
            ] as $service)
                <div class="bg_overlay relative p-6 rounded-xl group glassy-bg w-full max-w-[420px] text-white shadow-lg overflow-hidden transition-all duration-300">
                    <h4 class="text-[22px] md:text-[25px] font-bold mb-2 transition-colors duration-500 group-hover:text-white">{{ $service[0] }}</h4>
                    <p class="text-sm md:text-base font-semibold transition-colors duration-500 group-hover:text-white">{{ $service[1] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Visa Services Section -->

@endsection
