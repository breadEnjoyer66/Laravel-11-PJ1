<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="mx-auto py-12 px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="mt-10 gap-5 flex flex-col justify-center items-center lg:grid lg:grid-cols-2">
            <div class="lg:mb-0 mb-20 flex items-start lg:pr-5">
                <img src="{{ asset('img/corporate-team.jpg') }}" alt="About Us" class="rounded-xl">
            </div>
            <div class="px-4 items-center">
                <h2
                    class="bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text mb-4 text-4xl lg:text-5xl font-extrabold dark:text-white">
                    Empowering Technology for
                    Business</h2>
                <p class="text-gray-600 dark:text-gray-300 text-base mb-2 leading-loose text-justify">
                    Established in 2006 in Medan, with a strong focus on delivering information and communication
                    technology solutions. With more than 19 years of experience, we provide a wide range of technology
                    products and services
                    across multiple sectors—Business-to-Business (B2B), Government (B2G), and distribution to various
                    regions.

                    Backed by a dedicated and professional team, we are committed to being a trusted partner in
                    supporting
                    digital transformation in the modern era.
                </p>
            </div>
        </div>
    </div>

    <div style="background-image: url({{ asset('img/homepage-banner.jpg') }}); background-size:cover; background-position:bottom"
        class="mt-10 mb-20 border border-slate-200 py-12 ">
        <div class="max-w-7xl flex justify-between items-center mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-bold text-3xl text-white">GROW YOUR BUSINESS WITH US</h2>
            <div class="flex gap-4 justify-between">
                <a href="/contact" target="_blank"
                    class="
                bg-white hover:bg-orange-400
                inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-slate-800 hover:text-white rounded-full">
                    <svg class="mr-1 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14.079 6.839a3 3 0 0 0-4.255.1M13 20h1.083A3.916 3.916 0 0 0 18 16.083V9A6 6 0 1 0 6 9v7m7 4v-1a1 1 0 0 0-1-1h-1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1Zm-7-4v-6H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h1Zm12-6h1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-1v-6Z" />
                    </svg>
                    Chat With Sales
                </a>
                <a href="https://drive.google.com/file/d/1dDG9zyxHBYwufe0TeLV7PTFjnjd4iqM6/view" target="_blank"
                    class="
                {{-- bg-gradient-to-r from-orange-400 to-orange-500 hover:bg-gradient-to-b  --}}
                bg-white hover:bg-orange-400
                inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-slate-800 hover:text-white rounded-full">
                    <svg class="w-5 h-5 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2m-8 1V4m0 12-4-4m4 4 4-4" />
                    </svg>

                    Download Company Profile
                </a>
            </div>
        </div>
    </div>

    <div class="bg-gradient-to-t from-gray-50 to-white pb-20">
        <div class="text-center mx-auto max-w-7xl py-8 lg:py-0 px-4 sm:px-6 lg:px-8">
            <h2
                class="bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text mb-4 text-4xl lg:text-5xl font-extrabold dark:text-white">
                Authorized Dealer For Top Brands</h2>
            <p class="text-gray-500 sm:text-lg dark:text-gray-400">With over 18 years of experience, PT. Primajaya
                Multi Technology has proven its expertise in delivering IT business solutions by partnering with top and
                leading companies.
            </p>
            <x-brands :brands="$brands"></x-brands>
        </div>
    </div>

    {{-- team --}}
    <div class=" bg-gradient-to-b from-gray-50 to-white">
        <div class="mx-auto py-12 px-4 sm:px-6 lg:px-8 max-w-7xl">
            <h2
                class="text-center bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text mb-4 text-4xl lg:text-5xl font-extrabold dark:text-white">
                Meet Our Team</h2>
            <p class="text-center text-gray-500 sm:text-lg dark:text-gray-400">Our team is a diverse group of
                professionals who are passionate about technology and dedicated to delivering exceptional solutions to
                our
                clients.</p>
        </div>

        <div
            class="mx-auto px-4 sm:px-6 gap-1 md:gap-5 lg:px-8 max-w-7xl grid mb-6 lg:mb-16 lg:grid-cols-3 md:grid-cols-2 md:text-left lg:text-left text-center justify-center md:justify-start lg:justify-start">

            {{-- card foreach --}}
            @foreach ($members as $member)
                <div
                    class=" hover:border-primary-300 transition-all duration-100 border-2 border-slate-200 mt-10 items-center p-5 gap-4 bg-white rounded-xl sm:flex dark:bg-gray-800 dark:border-gray-700">

                    {{-- foto --}}
                    <div class="w-full md:w-1/3">
                        <img class="mx-auto w-28 rounded-full object-cover"
                            src="{{ asset('img/team/' . $member->image) }}" alt="{{ $member->name }}" width="100"
                            height="100">
                    </div>

                    {{-- info --}}
                    <div class="w-full md:w-2/3">

                        <h3 class="text-xl font-bold tracking-tight text-gray-900">
                            <a href="">{{ $member->name }}</a>
                        </h3>
                        <span
                            class="bg-slate-200 px-2 py-[2px] rounded-lg text-slate-800 text-xs">{{ $member->position }}</span>
                        <p class="mt-2 font-light text-sm text-gray-500 dark:text-gray-400 italic">
                            "{{ $member->motto }}"</p>
                        <span class="text-sm font-semibold text-gray-500">- {{ $member->motto_by }}</span>
                    </div>
                </div>
            @endforeach


        </div>
    </div>

</x-layout>
