<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="mx-auto py-12 px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="px-4 items-center">
            <h2
                class="bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text mb-4 text-4xl lg:text-5xl font-extrabold dark:text-white">
                Overview</h2>
            <p class="text-gray-600 dark:text-gray-300 text-base mb-2 leading-loose text-justify">
                Established in 2006 in Medan, with a strong focus on delivering information and communication
                technology solutions. we provide a wide range of technology
                products and services
                across multiple sectors—Business-to-Business (B2B), Government (B2G), and distribution to various
                regions.

                Backed by a dedicated and professional team, we are committed to be a trusted partner in
                supporting
                digital transformation in the modern era.
            </p>
        </div>

        <div class="mt-10 justify-center items-center lg:flex">
            <div class="text-center px-4 sm:px-6 lg:px-8 items-center justify-center lg:pr-5 lg:w-1/2 py-10 sm:py-16 lg:py-20 w-full max-w-full overflow-x-hidden"
                style="background-image: url({{ asset('img/corporate-team.jpg') }}); background-size:cover; background-position:center; background-repeat:no-repeat;">
                <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white mb-3">Vision</h3>
                <p class="text-white text-base italic">
                    To be a technology-driven company that simplifies and empowers business and life through innovative,
                    end-to-end solutions.
                </p>
            </div>

            <div class="text-center px-4 sm:px-6 lg:px-8 items-center justify-center lg:pr-5 lg:w-1/2 py-10 sm:py-16 lg:py-20 w-full max-w-full overflow-x-hidden"
                style="background-image: url({{ asset('img/b2g-team.jpg') }}); background-size:cover; background-position:center; background-repeat:no-repeat;">
                <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white mb-3">Mission</h3>
                <p class="text-white text-base italic">
                    To deliver efficient, integrated and smart solutions that enhance productivity and growth for our
                    partners and customers.
                </p>
            </div>
        </div>

    </div>

    <div style="background-image: url({{ asset('img/homepage-banner.jpg') }}); background-size:cover; background-position:center; background-repeat:no-repeat;"
        class="mt-10 mb-20 border border-slate-200 py-12 ">

        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row md:justify-between md:items-center gap-6 py-6">
            <h2 class="font-bold text-2xl sm:text-3xl text-white text-center md:text-left flex-1">GROW YOUR BUSINESS
                WITH US</h2>
            <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-end flex-1">
                <a href="/contact" target="_blank"
                    class="bg-white hover:bg-orange-400 inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-slate-800 hover:text-white rounded-full transition-colors duration-200">
                    <svg class="mr-1 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14.079 6.839a3 3 0 0 0-4.255.1M13 20h1.083A3.916 3.916 0 0 0 18 16.083V9A6 6 0 1 0 6 9v7m7 4v-1a1 1 0 0 0-1-1h-1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1Zm-7-4v-6H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h1Zm12-6h1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-1v-6Z" />
                    </svg>
                    Chat With Sales
                </a>
                <a href="https://drive.google.com/file/d/1dDG9zyxHBYwufe0TeLV7PTFjnjd4iqM6/view" target="_blank"
                    class="bg-white hover:bg-orange-400 inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-slate-800 hover:text-white rounded-full transition-colors duration-200">
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

    {{-- team --}}
    <div class=" bg-gradient-to-t from-gray-50 to-white pb-5">
        <div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl mb-10">
            <h2
                class="text-center bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text mb-4 text-4xl lg:text-5xl font-extrabold dark:text-white">
                Meet Our Team</h2>
            <p class="text-center text-gray-500 sm:text-lg dark:text-gray-400">Our team is a diverse group of
                professionals who are passionate about technology and dedicated to delivering exceptional solutions to
                our
                clients.</p>
        </div>

        <div class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <div
                class="pb-5 lg:pb-0 bg-gradient-to-t from-slate-100 to-white md:rounded-xl items-center md:grid md:grid-cols-2">
                <div class=" rounded-xl overflow-visible flex justify-center items-center w-full">
                    <img class="mx-auto w-4/6 max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl"
                        src="{{ asset('img/team/pak-rusli.png') }}" alt="dashboard image">
                </div>

                <div class="bg-white md:bg-transparent px-4 sm:px-8 md:px-10 py-10 md:py-0 text-center md:text-left">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl my-4 text-slate-800 font-bold dark:text-white">Rusli
                        Amin</h2>
                    <h2
                        class="mb-4 text-3xl sm:text-4xl lg:text-5xl tracking-tight font-extrabold bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text">
                        Company Founder
                    </h2>
                    <div class="my-4">
                        <p class=" text-gray-500 italic">
                            "Every Problem is a Gift – Without Problem We Would Not Grow"
                        </p>
                        <p class=" font-bold mt-1 text-gray-500 text-sm ">Anthony Robbins</p>
                    </div>
                    <hr class="w-4/6 my-4">
                    <p class=" text-gray-500 md:text-lg dark:text-gray-400">Friendly and humble person.
                        Always ready to assist in serving every input from all parties, aiming for mutual success.</p>

                </div>

            </div>
        </div>


        <div
            class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl grid gap-4 sm:gap-6 md:gap-5 mb-6 lg:mb-16 lg:grid-cols-3 md:grid-cols-2 md:text-left lg:text-left text-center justify-center md:justify-start lg:justify-start overflow-x-hidden">

            {{-- card foreach --}}
            @foreach ($members as $member)
                <div
                    class="hover:border-slate-300 transition-all duration-100 border border-slate-200 mt-10 items-center p-4 sm:p-5 gap-4 bg-white rounded-xl sm:flex dark:bg-gray-800 dark:border-gray-700 w-full overflow-x-hidden">

                    {{-- foto --}}
                    <div class="w-full md:w-1/3 flex justify-center items-center mb-2 md:mb-0">
                        <img class="mx-auto w-28 rounded-full object-cover max-w-full"
                            src="{{ asset('img/team/' . $member->image) }}" alt="{{ $member->name }}" width="100"
                            height="100">
                    </div>

                    {{-- info --}}
                    <div class="w-full md:w-2/3">

                        <h3 class="text-xl mb-2 font-bold tracking-tight text-gray-900">
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


    <div class="bg-gradient-to-b from-gray-50 to-white pb-20">
        <div class="text-center mx-auto max-w-7xl py-8 lg:pt-16 px-4 sm:px-6 lg:px-8">
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

</x-layout>
