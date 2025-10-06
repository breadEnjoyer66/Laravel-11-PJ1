<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Hero Section -->
    <div class="lg:py-20"
        style="background-image: url({{ asset('img/homepage-banner.jpg') }}); background-size:cover; background-position:bottom">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 grid py-12 lg:gap-8 xl:gap-0 lg:pb-24 lg:pt-20">

            <div class="pt-10 max-w-3xl">
                <h1 class="text-white mb-4 font-extrabold tracking-normal text-5xl md:text-5xl lg:text-6xl">
                    Empowering Technology For Business
                </h1>
                <p class="mb-8 text-md font-normal text-blue-200 lg:text-lg dark:text-gray-900">
                    Providing
                    computers, laptops, servers, and network solutions for corporations, government, and
                    institutions.
                </p>
                <div class="flex flex-col mb-4 lg:mb-8 space-y-4 sm:flex-row sm:justify-start sm:space-y-0 sm:space-x-4">
                    <a href="/contact"
                        class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-full bg-gradient-to-r from-orange-400 to-orange-500 hover:bg-gradient-to-b focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
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
    <hr class="mb-20">

    <x-why-us></x-why-us>

    <!-- About Our Company Briefly -->
    <div
        class="mx-auto max-w-7xl px-6 lg:px-8 py-12 sm:px-6 flex flex-col justify-center gap-10 items-center lg:grid lg:grid-cols-2">
        <div class="flex items-center lg:pr-5">
            <img src="{{ asset('img/intan-felicia-about-blue.png') }}" alt="About Us"
                class="h-[88%] align-middle px-5 ml-5">
        </div>
        <div class="px-4 items-center">
            <h2
                class="pb-2 bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text mb-4 text-4xl lg:text-[2.7rem] font-extrabold">
                About us</h2>
            <p class="text-gray-600 dark:text-gray-300 text-base mb-6 leading-loose text-justify">
                <span class="font-semibold text-orange-500 dark:text-orange-300">PT Primajaya Multi
                    Technology</span>
                was established in 2006 in Medan, with a strong focus on delivering information and communication
                technology solutions. With more than 19 years of experience, we provide a wide range of technology
                products and services
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

    <x-business-network></x-business-network>

    <x-clientele></x-clientele>

    <x-awards :awards="$awards"></x-awards>


    <div class="bg-gradient-to-t from-gray-50 to-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 py-8 lg:py-16 sm:px-6 ">
            <h2
                class="bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text mb-4 text-4xl lg:text-5xl font-extrabold">
                Our Brand Partner</h2>
            <p class="text-gray-500 sm:text-lg dark:text-gray-400">With over 18 years of experience, PT. Primajaya
                Multi Technology has proven its expertise in delivering IT business solutions by partnering with top and
                leading companies.
            </p>
            <x-brands :brands="$brands"></x-brands>
        </div>
    </div>

    <div class="bg-gray-50">
        <x-visit></x-visit>
    </div>


</x-layout>
