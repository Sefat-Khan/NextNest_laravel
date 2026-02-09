@extends('layouts.common')
    

@section('title', 'Contact Us')

@section('content')

    <!--- hero section --->
    <section
      class="relative h-[250px] sm:h-[450px] lg:h-[504px] flex items-center md:items-end py-16 px-8 text-center"
    >
      <!-- Blurred background -->
      <div
        class="absolute inset-0 bg-cover bg-center bg-no-repeat filter"
        style="background-image: url('{{ asset('images/monarch_contact.jpg') }}')"
      ></div>

      <!-- Overlay to darken a bit for better readability -->
      <div class="absolute inset-0 bg-black/50"></div>

      <div class="flex flex-col gap-2 items-start z-10 md:px-12">
        <!-- Heading -->
        <h1
          class="about-title relative text-start text-[20px] sm:text-[25px] md:text-[38px] font-extrabold text-white z-10 opacity-0"
        >
          Whether you have a question about oversea education, scholarships,
          entry requirements, fees, or anything else, our counsellors are ready
          to help.
        </h1>
      </div>
    </section>
    <!--- end hero section --->

    <!--- map section --->
    <section class="pt-16 px-2 mb-2 text-center bg-white text-black">
      <div class="flex border-b border-x border-black w-full">
        <button
          id="head-btn"
          class="hover-btn w-full py-8 border-x cursor-pointer relative overflow-hidden"
        >
          <span class="relative z-10">BD Office</span>
        </button>

        <button
          id="sub-btn"
          class="hover-btn w-full py-8 border-x cursor-pointer relative overflow-hidden"
        >
          <span class="relative z-10">UK Office</span>
        </button>
      </div>
      <div id="head">
        <div class="flex flex-wrap items-center py-8 px-6 text-start gap-8">
          <div
            class="grow-0 shrink-0 basis-full lg:basis-[calc(15%-30px)] mb-8 md:mb-0"
          >
            <h3 class="text-[24px] font-semibold mb-6">
              Uttara Model Town, Dhaka
            </h3>
            <a
              href="https://www.google.com/maps/search/Plot-57,+R-13,+Sector-10,+Uttara+Model+Town,+Dhaka+-+1230/@23.8248606,90.373251,13.25z/data=!5m1!1e1?hl=en&entry=ttu&g_ep=EgoyMDI1MTIwOS4wIKXMDSoASAFQAw%3D%3D"
              class="p-3 bg-[var(--secondary-color)] btn-ani rounded-[0.5rem]"
            >
              <span class="text-white">Get Directions</span>
            </a>
          </div>
          <div class="basis-full lg:basis-[calc(30%-30px)] mt-4 lg:mt-8 md:mt-0">
            <h3 class="text-[10px] font-bold text-gray-400 mb-4 lg:mb-8">
              Address
            </h3>
            <a
              href="https://www.google.com/maps/search/Plot-57,+R-13,+Sector-10,+Uttara+Model+Town,+Dhaka+-+1230/@23.8248606,90.373251,13.25z/data=!5m1!1e1?hl=en&entry=ttu&g_ep=EgoyMDI1MTIwOS4wIKXMDSoASAFQAw%3D%3D"
              class="text-[18px] font-semibold cursor-pointer hover:text-[var(--secondary-color)] transition-all duration-300 ease-in"
              >Plot-57, R-13, Sector-10, Uttara Model Town, Dhaka - 1230</a
            >
          </div>
          <div
            class="basis-full lg:basis-[calc(20%-30px)] mt-4 lg:mt-8 md:mt-0"
          >
            <h3 class="text-[10px] font-bold text-gray-400 mb-4 lg:mb-8">
              Email
            </h3>
            <div class="flex flex-col gap-2 items-start">
              <a
                href=""
                class="text-[18px] font-extrabold cursor-pointer hover:text-[var(--secondary-color)] transition-all duration-300 ease-in"
                >info@nextnestbd.com</a
              >
              <a
                href=""
                class="text-[18px] font-extrabold cursor-pointer hover:text-[var(--secondary-color)] transition-all duration-300 ease-in"
                >nextnestbd@gmail.com</a
              >
            </div>
          </div>
          <div
            class="basis-full lg:basis-[calc(25%-30px)] mt-4 lg:mt-8 md:mt-0"
          >
            <h3 class="text-[10px] font-bold text-gray-400 mb-4 lg:mb-8">
              Call
            </h3>
            <div class="flex flex-col gap-2 items-start">
              <a
                href=""
                class="text-[18px] font-extrabold cursor-pointer hover:text-[var(--secondary-color)] transition-all duration-300 ease-in"
                >+880 1800 099 339</a
              >
              <a
                href=""
                class="text-[18px] font-extrabold cursor-pointer hover:text-[var(--secondary-color)] transition-all duration-300 ease-in"
                >+880 1974 288 502</a
              >
            </div>
          </div>
          <div class="basis-full lg:basis-[calc(5%-30px)]">
            <h3 class="text-[10px] font-bold text-gray-400 mb-4 lg:mb-8">
              Map
            </h3>

            <a
              href=""
              class="px-4 py-4 rounded-full bg-[var(--secondary-color)] text-white cursor-pointer"
              ><i class="fa-solid fa-arrow-up"></i
            ></a>
          </div>
        </div>
        <div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d34715.31480481773!2d90.34962520308544!3d23.854205774066124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sPlot-57%2C%20R-13%2C%20Sector-10%2C%20Uttara%20Model%20Town%2C%20Dhaka%20-%201230!5e0!3m2!1sen!2sus!4v1765628812698!5m2!1sen!2sus"
            width="100%"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
      <div id="sub" class="hidden">
        <div class="flex flex-wrap items-center py-8 px-6 text-start gap-8">
          <div
            class="grow-0 shrink-0 basis-full lg:basis-[calc(15%-30px)] mb-8 md:mb-0"
          >
            <h3 class="text-[24px] font-semibold mb-6">
              United Kingdom, Eh12 5pg
            </h3>
            <a
              href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d279.2864340363589!2d-3.234060198096852!3d55.94431990011065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887c7aca4d5a405%3A0x89107601fa4a3ae!2sThe%20Jeffrey%20Apartments%2C%2011-15%20Russell%20Gardens%2C%20Edinburgh%20EH12%205PG%2C%20UK!5e0!3m2!1sen!2sus!4v1765629280173!5m2!1sen!2sus"
              class="p-3 bg-[var(--secondary-color)] btn-ani rounded-[0.5rem]"
            >
              <span class="text-white">Get Directions</span>
            </a>
          </div>
          <div class="basis-full lg:basis-[calc(30%-30px)]">
            <h3 class="text-[10px] font-bold text-gray-400 mb-4 lg:mb-8">
              Address
            </h3>
            <a
              href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d279.2864340363589!2d-3.234060198096852!3d55.94431990011065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887c7aca4d5a405%3A0x89107601fa4a3ae!2sThe%20Jeffrey%20Apartments%2C%2011-15%20Russell%20Gardens%2C%20Edinburgh%20EH12%205PG%2C%20UK!5e0!3m2!1sen!2sus!4v1765629280173!5m2!1sen!2sus"
              class="text-[18px] font-semibold cursor-pointer hover:text-[var(--secondary-color)] transition-all duration-300 ease-in"
              >11-15 Russell Gardens, Edinburgh, United Kingdom, Eh12 5pg</a
            >
          </div>
          <div
            class="basis-full lg:basis-[calc(20%-30px)] mt-4 lg:mt-8 md:mt-0"
          >
            <h3 class="text-[10px] font-bold text-gray-400 mb-4 lg:mb-8">
              Email
            </h3>
            <a
              href=""
              class="text-[18px] font-extrabold cursor-pointer hover:text-[var(--secondary-color)] transition-all duration-300 ease-in"
              >info@uiecglobal.com</a
            >
          </div>
          <div
            class="basis-full lg:basis-[calc(25%-30px)] mt-4 lg:mt-8 md:mt-0"
          >
            <h3 class="text-[10px] font-bold text-gray-400 mb-4 lg:mb-8">
              Call
            </h3>
            <a
              href=""
              class="text-[18px] font-extrabold cursor-pointer hover:text-[var(--secondary-color)] transition-all duration-300 ease-in"
              >+8801896042989</a
            >
          </div>
          <div class="basis-full lg:basis-[calc(5%-30px)] mt-4 lg:mt-8 md:mt-0">
            <h3 class="text-[10px] font-bold text-gray-400 mb-4 lg:mb-8">
              Map
            </h3>
            <a
              href=""
              class="px-4 py-4 rounded-full bg-[var(--secondary-color)] text-white cursor-pointer"
              ><i class="fa-solid fa-arrow-up"></i
            ></a>
          </div>
        </div>
        <div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d279.2864340363589!2d-3.234060198096852!3d55.94431990011065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887c7aca4d5a405%3A0x89107601fa4a3ae!2sThe%20Jeffrey%20Apartments%2C%2011-15%20Russell%20Gardens%2C%20Edinburgh%20EH12%205PG%2C%20UK!5e0!3m2!1sen!2sus!4v1765629280173!5m2!1sen!2sus"
            width="100%"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </section>
    <!--- end map section --->




<!--- end contact form section --->

{{-- <style>
.input{
    @apply w-full border border-gray-300 rounded px-3 py-2 focus:ring-2 focus:ring-blue-500 outline-none;
}
</style> --}}


@endsection