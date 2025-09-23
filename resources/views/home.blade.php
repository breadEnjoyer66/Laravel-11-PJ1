<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Hero Section -->
    {{-- Full-width hero (spans entire viewport) --}}

    <div class="lg:py-20"
        style="background-image: url({{ asset('img/bg-products.jpg') }}); background-size:cover; background-position:bottom">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 grid py-12 lg:gap-8 xl:gap-0 lg:pb-24 lg:pt-20">

            <div class="pt-10 max-w-3xl">
                <h1 class="text-gray-900 mb-4 font-extrabold tracking-normal text-5xl md:text-5xl lg:text-6xl">
                    Empowering Technology For Business
                </h1>
                <p class="mb-8 text-md font-normal text-gray-600 lg:text-lg dark:text-gray-200">
                    Providing
                    computers, laptops, servers, and network solutions for corporations, government, and
                    institutions.
                </p>
                <div class="flex flex-col mb-4 lg:mb-8 space-y-4 sm:flex-row sm:justify-start sm:space-y-0 sm:space-x-4">
                    <a href="/contact"
                        class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-full bg-gradient-to-r from-orange-400 to-orange-600 hover:bg-gradient-to-b focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                        Chat with sales
                        <svg class="ml-1.5 w-6 h-6 text-white dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.079 6.839a3 3 0 0 0-4.255.1M13 20h1.083A3.916 3.916 0 0 0 18 16.083V9A6 6 0 1 0 6 9v7m7 4v-1a1 1 0 0 0-1-1h-1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1Zm-7-4v-6H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h1Zm12-6h1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-1v-6Z" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- <div class="hidden lg:mt-0 lg:col-span-5 lg:flex ">
                <img class="object-contain" src="{{ asset('img/hero-image-2.png') }}" alt="product-banner">
            </div> --}}

        </div>
    </div>
    <hr class="">

    <!-- Why Choose Us Section -->
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-20">
        <x-why-us></x-why-us>
    </div>
    <!-- end why choose us section -->

    <!-- About Our Company Briefly -->
    <div
        class="mx-auto max-w-7xl flex flex-col justify-center gap-10 items-center lg:py-16 lg:grid lg:grid-cols-2 my-20">
        <div class="lg:mb-0 mb-20 flex items-center">
            <img src="{{ asset('img/intan-felicia-about-blue.png') }}" alt="About Us"
                class="h-[88%] align-middle px-5 ml-5">
        </div>
        <div class="px-4 items-center">
            <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">About us</h2>
            <p class="text-gray-600 dark:text-gray-300 text-base mb-2 leading-loose text-justify">
                <span class="font-semibold text-orange-500 dark:text-orange-300">PT Primajaya Multi
                    Technology</span>
                was established in 2006 in Medan, with a strong focus on delivering information and communication
                technology solutions.
            </p>
            <p class="mb-7 text-gray-600 dark:text-gray-300 text-base leading-loose text-justify">
                With more than 19 years of experience, we provide a wide range of technology products and services
                across multiple sectors—Business-to-Business (B2B), Government (B2G), and distribution to various
                regions.

                Backed by a dedicated and professional team, we are committed to being a trusted partner in supporting
                digital transformation in the modern era.
            </p>
            <a href="/about"
                class="py-2.5 px-5 text-base font-medium text-center text-white rounded-full bg-gradient-to-r from-orange-400 to-orange-600 hover:bg-gradient-to-b">Learn
                more &raquo;</a>
        </div>
    </div>
    <!-- End About Our Company Briefly -->



    <div x-data="{
        active: 0,
        slides: [{
                img: '{{ asset('img/corporate-team.jpg') }}',
                title: 'Innovative Solutions',
                desc: 'We deliver cutting-edge technology solutions tailored for your business needs.'
            },
            {
                img: '{{ asset('img/b2g-team.jpg') }}',
                title: 'Expert Team',
                desc: 'Our experienced professionals ensure reliable service and support.'
            },
            {
                img: '{{ asset('img/carousel-3.jpg') }}',
                title: 'Trusted Partnerships',
                desc: 'Building long-term relationships with our clients and partners.'
            }
        ],
        next() { this.active = (this.active + 1) % this.slides.length },
        prev() { this.active = (this.active - 1 + this.slides.length) % this.slides.length }
    }" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pb-16 flex items-center justify-center">


        <div class="relative w-full flex flex-row rounded-none overflow-hidden">

            <!-- Left: Image -->
            <div class="w-1/2 flex items-center justify-center">

                <img :src="slides[active].img" alt="" class="object-cover w-full h-96">

            </div>
            <!-- Right: Content -->
            <div class="w-1/2 flex flex-col justify-center items-start p-10 bg-slate-800">
                <h2 class="text-3xl font-bold mb-4 text-white" x-text="slides[active].title"></h2>
                <p class="text-lg text-gray-300" x-text="slides[active].desc"></p>
                <div class="mt-8 flex gap-4">
                    <button @click="prev"
                        class="px-4 py-2 rounded-full bg-primary-500 text-white hover:bg-primary-600">
                        &laquo; Prev
                    </button>
                    <button @click="next"
                        class="px-4 py-2 rounded-full bg-primary-500 text-white hover:bg-primary-600">
                        Next &raquo;
                    </button>
                </div>
            </div>
        </div>
    </div>

    <x-clientele></x-clientele>

    <x-awards :awards="$awards"></x-awards>

    <x-brands :brands="$brands"></x-brands>

    <!-- Visit Us Section -->
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
        <h2 class="mb-6 text-3xl font-bold text-gray-900 dark:text-white">Visit Us</h2>
        <div class="rounded-lg overflow-hidden shadow-lg">
            <!-- Replace the src below with your Google Maps embed link -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0020883337747!2d98.70227601129302!3d3.5869945502885305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131b3db01ca4b%3A0x3a57c21c70dfccb0!2sPT.%20Primajaya%20Multi%20Technology%20(Plaza%20IT)!5e0!3m2!1sen!2sid!4v1758623908082!5m2!1sen!2sid"
                class="w-full h-96" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


</x-layout>
