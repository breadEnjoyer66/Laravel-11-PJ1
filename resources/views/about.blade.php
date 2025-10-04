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



        <div class="mt-10 lg:flex">
            <!-- Vision -->
            <div class="text-center px-4 sm:px-6 lg:px-8 flex items-center justify-center 
                lg:w-1/2 w-full py-20 
                bg-cover bg-center bg-no-repeat"
                style="background-image: url('{{ asset('img/corporate-team.jpg') }}');">

                <div class="p-6 bg-black bg-opacity-40 rounded-2xl">
                    <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white mb-3">Vision</h3>
                    <p class="text-white opacity-90 text-lg italic max-w-lg mx-auto">
                        "To be a technology-driven company that simplifies and empowers business and life through
                        innovative, end-to-end solutions."
                    </p>
                </div>
            </div>

            <!-- Mission -->
            <div class="text-center px-4 sm:px-6 lg:px-8 flex items-center justify-center 
                lg:w-1/2 w-full py-20 
                bg-cover bg-center bg-no-repeat"
                style="background-image: url('{{ asset('img/b2g-team.jpg') }}');">

                <div class="p-6 bg-black bg-opacity-40 rounded-2xl">
                    <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white mb-3">Mission</h3>
                    <p class="text-white opacity-90 text-lg italic max-w-lg mx-auto">
                        "To deliver efficient, integrated and smart solutions that enhance productivity and growth for
                        our partners and customers."
                    </p>
                </div>
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
    <div class=" bg-gradient-to-t from-gray-50 to-white pb-16">
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
                    <img class="mx-auto w-7/12 max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl"
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
            class="mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl grid gap-4 sm:gap-6 md:gap-5 lg:grid-cols-3 md:grid-cols-2 md:text-left lg:text-left text-center justify-center md:justify-start lg:justify-start overflow-x-hidden">

            {{-- card foreach --}}
            @foreach ($members as $member)
                <div
                    class="transition-all duration-100 border border-slate-200 mt-10 items-center p-4 sm:p-5 gap-4 bg-white hover:bg-slate-50 rounded-xl sm:flex dark:bg-gray-800 dark:border-gray-700 w-full overflow-x-hidden">

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

    <div class="bg-slate-50 border">
        <div class="mx-auto max-w-7xl py-8 lg:pt-16 px-4 sm:px-6 lg:px-8">
            <h2
                class="pb-1 bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text mb-4 text-4xl lg:text-5xl font-extrabold text-center">
                History Overview</h2>
            <p class="text-center text-gray-500 sm:text-lg dark:text-gray-400">Our history is a testament to our
                commitment to
                excellence and innovation in the IT industry. Since our inception in 2006, we have consistently evolved
                to
                meet the changing needs of our clients and the market.</p>
            {{-- anchor --}}
            <div class="grid px-5 gap-8 py-10 lg:grid-cols-4 md:grid-cols-2 relative">
                <div class="items-center flex relative p-4 pl-16 rounded-2xl border bg-white">
                    <div
                        class="border-4 border-white absolute -top-4 -left-4 flex-shrink-0 flex justify-center items-center w-12 h-12 rounded-full bg-primary-100">
                        <svg class="w-7 h-7 text-slate-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5" />
                        </svg>
                    </div>
                    <div class="-ml-5">
                        <h3 class="text-3xl font-extrabold mb-2 text-gray-700">2007</h3>
                        <p class="italic text-gray-500 text-sm mb-2">Started business with HP Indonesia,
                        <p class="italic text-sm text-gray-500">Expanded sales area especially to Medan & Banda Aceh
                        </p>
                        </p>
                    </div>
                </div>

                <div class="items-center flex relative p-4 pl-16 rounded-2xl border bg-white">
                    <div
                        class="border-4 border-white absolute -top-4 -left-4 flex-shrink-0 flex justify-center items-center w-12 h-12 rounded-full bg-primary-100">
                        <svg class="w-7 h-7 text-slate-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5" />
                        </svg>
                    </div>
                    <div class="-ml-5">
                        <h3 class="text-3xl font-extrabold mb-2 text-gray-700">2009</h3>
                        <p class="italic text-gray-500 text-sm">Opened HP Authorized Store at Sun Plaza Medan
                        </p>
                    </div>
                </div>

                <div class="items-center flex relative p-4 pl-16 rounded-2xl border bg-white">
                    <div
                        class="border-4 border-white absolute -top-4 -left-4 flex-shrink-0 flex justify-center items-center w-12 h-12 rounded-full bg-primary-100">
                        <svg class="w-7 h-7 text-slate-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5" />
                        </svg>
                    </div>
                    <div class="-ml-5">
                        <h3 class="text-3xl font-extrabold mb-2 text-gray-700">2012</h3>
                        <p class="italic text-gray-500 text-sm mb-2">Became Sony Authorized Partner in Medan,
                        <p class="italic text-gray-500 text-sm">Expanded sales area & support service in Medan &
                            Aceh</p>

                        </p>
                    </div>
                </div>

                <div class="items-center flex relative p-4 pl-16 rounded-2xl border bg-white">
                    <div
                        class="border-4 border-white absolute -top-4 -left-4 flex-shrink-0 flex justify-center items-center w-12 h-12 rounded-full bg-primary-100">
                        <svg class="w-7 h-7 text-slate-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5" />
                        </svg>
                    </div>
                    <div class="-ml-5">
                        <h3 class="text-3xl font-extrabold mb-2"text-gray-700>2015</h3>
                        <p class="italic text-gray-500 mb-2 text-sm">Became Lenovo and Brother Authorized Partner
                        <p class="italic text-gray-500 text-sm">Appointed as HP and Brother Authorized Service
                            Centre in
                            Medan & Aceh</p>

                        </p>
                    </div>
                </div>

                <div class="items-center flex relative p-4 pl-16 rounded-2xl border bg-white">
                    <div
                        class="border-4 border-white absolute -top-4 -left-4 flex-shrink-0 flex justify-center items-center w-12 h-12 rounded-full bg-primary-100">
                        <svg class="w-7 h-7 text-slate-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5" />
                        </svg>
                    </div>
                    <div class="-ml-5">
                        <h3 class="text-3xl font-extrabold mb-2 text-gray-700">2017</h3>
                        <p class="italic text-gray-500 text-sm mb-2">Established Corporate & Government Divisions
                        </p>
                        <p class="italic text-gray-500 text-sm">Became trusted supplier for enterprise clients</p>
                    </div>

                </div>

                <div class="items-center flex relative p-4 pl-16 rounded-2xl border bg-white">
                    <div
                        class="border-4 border-white absolute -top-4 -left-4 flex-shrink-0 flex justify-center items-center w-12 h-12 rounded-full bg-primary-100">
                        <svg class="w-7 h-7 text-slate-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5" />
                        </svg>
                    </div>
                    <div class="-ml-5">
                        <h3 class="text-3xl font-extrabold mb-2 text-gray-700">2019</h3>
                        <p class="italic text-gray-500 text-sm mb-2">Opened Retail Store in Banda Aceh as Plaza IT
                        </p>
                        <p class="italic text-gray-500 text-sm mb-2">Became Asus Authorized Partner
                        </p>
                        <p class="italic text-gray-500 text-sm">Opened Asus Exclusive Store at Sun Plaza Medan</p>
                    </div>

                </div>

                <div class="items-center flex relative p-4 pl-16 rounded-2xl border bg-white">
                    <div
                        class="border-4 border-white absolute -top-4 -left-4 flex-shrink-0 flex justify-center items-center w-12 h-12 rounded-full bg-primary-100">
                        <svg class="w-7 h-7 text-slate-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5" />
                        </svg>
                    </div>
                    <div class="-ml-5">
                        <h3 class="text-3xl font-extrabold mb-2 text-gray-700">2021</h3>
                        <p class="italic text-gray-500 text-sm mb-2">Opened Plaza IT Store at Plaza Medan Fair
                            (Medan)
                        </p>

                        <p class="italic text-gray-500 text-sm">Kingston Authorized Reseller</p>
                    </div>

                </div>

                <div class="items-center flex relative p-4 pl-16 rounded-2xl border bg-white">
                    <div
                        class="border-4 border-white absolute -top-4 -left-4 flex-shrink-0 flex justify-center items-center w-12 h-12 rounded-full bg-primary-100">
                        <svg class="w-7 h-7 text-slate-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5" />
                        </svg>
                    </div>
                    <div class="-ml-5">
                        <h3 class="text-3xl font-extrabold mb-2 text-gray-700">2022</h3>
                        <p class="italic text-gray-500 text-sm mb-2">Awarded Blibli Best Seller - North Sumatra
                        </p>

                    </div>

                </div>

                <div class="items-center flex relative p-4 pl-16 rounded-2xl border bg-white">
                    <div
                        class="border-4 border-white absolute -top-4 -left-4 flex-shrink-0 flex justify-center items-center w-12 h-12 rounded-full bg-primary-100">
                        <svg class="w-7 h-7 text-slate-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5" />
                        </svg>
                    </div>
                    <div class="-ml-5">
                        <h3 class="text-3xl font-extrabold mb-2 text-gray-700">2023</h3>
                        <p class="italic text-gray-500 text-sm mb-2">Set up a Digital Signage Division (Plaza
                            Visual)
                        </p>

                    </div>

                </div>

                <div class="items-center flex relative p-4 pl-16 rounded-2xl border bg-white">
                    <div
                        class="border-4 border-white absolute -top-4 -left-4 flex-shrink-0 flex justify-center items-center w-12 h-12 rounded-full bg-primary-100">
                        <svg class="w-7 h-7 text-slate-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5" />
                        </svg>
                    </div>
                    <div class="-ml-5">
                        <h3 class="text-3xl font-extrabold mb-2 text-gray-700">2024</h3>
                        <p class="italic text-gray-500 text-sm mb-2">Appointed as Asus Authorized Service Centre
                        </p>
                        <p class="italic text-gray-500 text-sm mb-2">Became Apple, Xiaomi & Infinix Authorized
                            Retailer Partner
                        </p>

                    </div>

                </div>

                <div class="items-center flex relative p-4 pl-16 rounded-2xl border bg-white">
                    <div
                        class="border-4 border-white absolute -top-4 -left-4 flex-shrink-0 flex justify-center items-center w-12 h-12 rounded-full bg-primary-100">
                        <svg class="w-7 h-7 text-slate-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5" />
                        </svg>
                    </div>
                    <div class="-ml-5">
                        <h3 class="text-3xl font-extrabold mb-2 text-gray-700">2025</h3>
                        <p class="italic text-gray-500 text-sm mb-2">Became Hikvision Authorized Value Added
                            Solution Partner
                        </p>


                    </div>

                </div>

            </div>
        </div>



        <div class="bg-gradient-to-b from-gray-50 to-white pb-20">
            <div class="text-center mx-auto max-w-7xl py-8 lg:pt-16 px-4 sm:px-6 lg:px-8">
                <h2
                    class="bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text mb-4 text-4xl lg:text-5xl font-extrabold dark:text-white">
                    Our Clients</h2>
                <p class="text-gray-500 sm:text-lg dark:text-gray-400">Primajaya
                    Multi Technology has proven its expertise in delivering IT business solutions by partnering
                    with
                    top
                    and
                    leading companies.
                </p>
                <x-brands :brands="$brands"></x-brands>
            </div>
        </div>




        <div class="bg-gradient-to-b from-gray-50 to-white pb-32">
            <div class="text-center mx-auto max-w-7xl py-8 lg:pt-16 px-4 sm:px-6 lg:px-8">
                <h2
                    class="bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text mb-4 text-4xl lg:text-5xl font-extrabold dark:text-white">
                    Authorized Dealer For Top Brands</h2>
                <p class="text-gray-500 sm:text-lg dark:text-gray-400">We have had the privilege of working with a
                    diverse range of clients, from enterprises to government agencies. Our
                    client-centric approach ensures that we
                    understand their unique needs and deliver tailored solutions that drive success.
                </p>
                <img src="{{ asset('img/client-logo.jpg') }}" alt="client logos" class="mx-auto mt-10">
            </div>
        </div>

        <div class="bg-gradient-to-b from-white to-slate-50 pb-20 rounded-t-3xl -mt-14">
            <div class="text-center mx-auto max-w-7xl py-8 lg:pt-16 px-4 sm:px-6 lg:px-8">
                <h2
                    class="bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text mb-4 text-4xl lg:text-5xl font-extrabold dark:text-white">
                    Feedback From Our Clients</h2>
                <p class="text-gray-500 sm:text-lg dark:text-gray-400">Thank you to all our partners and clients for
                    trusting PJ-Tech as your IT solution provider.
                </p>

                <div class="grid lg:grid-cols-3 gap-8 mt-14">

                    {{-- anchor testimonial card --}}
                    <div class="shadow-md rounded-2xl p-6 bg-white">
                        <div class="flex items-center">
                            <img class="w-16 h-16 rounded-full object-cover"
                                src="{{ asset('img/testimonial/testimoni_paulus_.jpg') }}" alt="">
                            <div class="text-left ml-4">
                                <p class="font-semibold">Wakil Ketua II</p>
                                <p class="text-sm text-gray-500">STMIK & STIE Mikroskil</p>
                            </div>
                        </div>
                        <p class="mt-5 text-gray-700 italic text-left">"Primajaya Multi Technology adalah IT vendor
                            yang penuh
                            tanggung jawab, dari awal sampai selesai. Kita butuh vendor yang bisa dipercaya seperti
                            ini."</p>
                    </div>

                    <div class="shadow-md rounded-2xl p-6 bg-white">
                        <div class="flex items-center">
                            <img class="w-16 h-16 rounded-full object-cover"
                                src="{{ asset('img/testimonial/IT-Tolan-Tiga.jpeg') }}" alt="">
                            <div class="text-left ml-4">
                                <p class="font-semibold">Network Administrator</p>
                                <p class="text-sm text-gray-500">PT. Tolan Tiga Indonesia</p>
                            </div>
                        </div>

                        <p class="mt-4 text-gray-700 italic text-left">"PT. Primajaya Multi Technology dapat
                            menyediakan beragam
                            layanan & material IT yang kami butuhkan dengan harga yang sangat kompetitif & pelayanan
                            yang memuaskan. Recommended Vendor!"</p>
                    </div>

                    <div class="shadow-md rounded-2xl p-6 bg-white">
                        <div class="flex items-center">
                            <img class="w-16 h-16 rounded-full object-cover"
                                src="{{ asset('img/testimonial/PP-Dinas-Perpustakaan-e1608194414314.jpeg') }}"
                                alt="">
                            <div class="text-left ml-4">
                                <p class="font-semibold">Pejabat Pengadaan</p>
                                <p class="text-sm text-gray-500">Dinas Perpustakaan dan Arsip Provsu</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700 italic text-left">"Barang sesuai spesifikasi, service memuaskan,
                            harga
                            mantap, ketika ada komplain cepat respon… enak dan nyaman belanja di toko online PT.
                            Primajaya Multi Technology. Thanks."</p>
                    </div>

                    <div class="shadow-md rounded-2xl p-6 bg-white">
                        <div class="flex items-center">
                            <img class="w-16 h-16 rounded-full object-cover"
                                src="{{ asset('img/testimonial/UIN-Yusuf-Staff-Pengadaan.jpeg') }}" alt="">
                            <div class="text-left ml-4">
                                <p class="font-semibold">Staff Pengadaan</p>
                                <p class="text-sm text-gray-500">UIN Medan</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700 italic text-left">"Semua pengadaan via PT. Primajaya Multi
                            Technology selalu
                            memuaskan dan lancar tepat waktu."</p>
                    </div>

                    <div class="shadow-md rounded-2xl p-6 bg-white">
                        <div class="flex items-center">
                            <img class="w-16 h-16 rounded-full object-cover"
                                src="{{ asset('img/testimonial/Purchasing-Wilmar.jpg') }}" alt="">
                            <div class="text-left ml-4">
                                <p class="font-semibold">Purchasing Dept.
                                </p>
                                <p class="text-sm text-gray-500">Wilmar Group</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700 italic text-left">"Primajaya Multi Technology menawarkan cakupan
                            produk yang
                            luas dengan harga yang kompetitif. Dengan pelayanan yang memuaskan, Primajaya Multi
                            Technology merupakan vendor IT yang dapat kami andalkan"</p>
                    </div>

                    <div class="shadow-md rounded-2xl p-6 bg-white">
                        <div class="flex items-center">
                            <img class="w-16 h-16 rounded-full object-cover"
                                src="{{ asset('img/testimonial/IT-Manager-Hotel-Four-Points-by-Sheraton.jpeg') }}"
                                alt="">
                            <div class="text-left ml-4">
                                <p class="font-semibold">IT Manager
                                </p>
                                <p class="text-sm text-gray-500">Hotel Four Points by Sheraton</p>
                            </div>
                        </div>

                        <p class="mt-4 text-gray-700 italic text-left">"Sudah lama berlangganan dengan PJ Tech,
                            pelayanan dan
                            harga terbaik. Top👍"</p>


                    </div>

                    <div class="shadow-md rounded-2xl p-6 bg-white">
                        <div class="flex items-center">
                            <img class="w-16 h-16 rounded-full object-cover"
                                src="{{ asset('img/testimonial/PP-Pengadilan-Negeri-Simalungun.jpg') }}"
                                alt="">
                            <div class="text-left ml-4">
                                <p class="font-semibold">Pejabat Pengadaan</p>
                                <p class="text-sm text-gray-500">Pengadilan Negeri Simalungun</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700 italic text-left">"Barang lengkap, harga oke, respon cepat,
                            service
                            terpercaya, belanja nyaman. Kriteria seperti ini yang kami cari di antara penyedia dan
                            semuanya ada di PT. Primajaya Multi Technology."</p>
                    </div>

                    <div class="shadow-md rounded-2xl p-6 bg-white">
                        <div class="flex items-center">
                            <img class="w-16 h-16 rounded-full object-cover"
                                src="{{ asset('img/testimonial/testimoni_teguh.jpg') }}" alt="">
                            <div class="text-left ml-4">
                                <p class="font-semibold">Pejabat Pengadaan</p>
                                <p class="text-sm text-gray-500">Sekda Kab Tapsel</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700 italic text-left">"Pelayanan baik, ramah dan pengiriman cepat.
                            Barang sesuai
                            pesanan, sangat puas bekerja sama dengan Primajaya Multi Technology."</p>
                    </div>

                    <div class="shadow-md rounded-2xl p-6 bg-white">
                        <div class="flex items-center">
                            <img class="w-16 h-16 rounded-full object-cover"
                                src="{{ asset('img/testimonial/WhatsApp-Image-2022-03-26-at-14.08.23.jpg') }}"
                                alt="">
                            <div class="text-left ml-4">
                                <p class="font-semibold">Customer</p>
                                <p class="text-sm text-gray-500">HP Corner @Medan Fair</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700 italic text-left">"Senang banget beli laptop dapat hadiah mouse
                            plus lucky
                            spin headset gaming. Mana harga nga main-main lebih murah dibanding toko sebelah. Pantengin
                            terus promonya guys…"</p>
                    </div>
                    <div class="shadow-md rounded-2xl p-6 bg-white">
                        <div class="flex items-center">
                            <img class="w-16 h-16 rounded-full object-cover"
                                src="{{ asset('img/testimonial/WhatsApp-Image-2022-03-26-at-14.15.26.jpg') }}"
                                alt="">
                            <div class="text-left ml-4">
                                <p class="font-semibold">Customer</p>
                                <p class="text-sm text-gray-500">Asus Store @Sun Plaza</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700 italic text-left">"Original dan masih baru barangnya, bukan bekas
                            pajangan.
                            Dapat free mouse wireless logitech! Asus Store Sun Plaza memang lengkap dan mantapp. Masuk
                            ke list toko rekomendasi buat pembelian selanjutnya."</p>
                    </div>
                    <div class="shadow-md rounded-2xl p-6 bg-white">
                        <div class="flex items-center">
                            <img class="w-16 h-16 rounded-full object-cover"
                                src="{{ asset('img/testimonial/WhatsApp-Image-2022-03-28-at-15.09.18.jpg') }}"
                                alt="">
                            <div class="text-left ml-4">
                                <p class="font-semibold">Customer</p>
                                <p class="text-sm text-gray-500">Asus Store @Sun Plaza</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700 italic text-left">"Kalau belanja barang elektronik harusnya di
                            toko
                            resminya, aman dan bisa servis juga kalau rusak."</p>
                    </div>
                    <div class="shadow-md rounded-2xl p-6 bg-white">
                        <div class="flex items-center">
                            <img class="w-16 h-16 rounded-full object-cover"
                                src="{{ asset('img/testimonial/WhatsApp-Image-2022-03-26-at-14.28.57-2.jpg') }}"
                                alt="">
                            <div class="text-left ml-4">
                                <p class="font-semibold">Customer</p>
                                <p class="text-sm text-gray-500">Plaza IT @Banda Aceh</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700 italic text-left">"Beli Lenovo Legion free item bawaan plus dapat
                            lucky dip
                            free tas lagi. Keren nih promonya double hadiah. Adain promo terus yah min! Kemarin service
                            laptop kesini juga ramah & cepat."</p>
                    </div>
                    <div class="shadow-md rounded-2xl p-6 bg-white">
                        <div class="flex items-center">
                            <img class="w-16 h-16 rounded-full object-cover"
                                src="{{ asset('img/testimonial/WhatsApp-Image-2022-03-26-at-14.28.57-1.jpg') }}"
                                alt="">
                            <div class="text-left ml-4">
                                <p class="font-semibold">Customer</p>
                                <p class="text-sm text-gray-500">Showroom PJ</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700 italic text-left">"Adem belanja disini, AC nya sejuk, akhirnya
                            bisa beli
                            laptop setelah berdiskusi dengan salesnya."</p>
                    </div>
                    <div class="shadow-md rounded-2xl p-6 bg-white">
                        <div class="flex items-center">
                            <img class="w-16 h-16 rounded-full object-cover"
                                src="{{ asset('img/testimonial/WhatsApp-Image-2022-03-26-at-14.03.49.jpg') }}"
                                alt="">
                            <div class="text-left ml-4">
                                <p class="font-semibold">Customer</p>
                                <p class="text-sm text-gray-500">HP Corner @Medan Fair</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700 italic text-left">"Lumayan beli laptop dapat tambahan gratis
                            pouch,
                            itung-itung lebih oke dari segi harga sama barang free nya."</p>
                    </div>
                    <div class="shadow-md rounded-2xl p-6 bg-white">
                        <div class="flex items-center">
                            <img class="w-16 h-16 rounded-full object-cover"
                                src="{{ asset('img/testimonial/WhatsApp-Image-2022-03-26-at-14.28.57.jpg') }}"
                                alt="">
                            <div class="text-left ml-4">
                                <p class="font-semibold">Customer</p>
                                <p class="text-sm text-gray-500">Plaza IT @Banda Aceh</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700 italic text-left">"Yang buat senang pas belanja itu pelayanan
                            karyawan toko
                            dan harganya. Beruntung juga ternyata lagi promo dapat headset gaming."</p>
                    </div>
                    <div class="shadow-md rounded-2xl p-6 bg-white">
                        <div class="flex items-center">
                            <img class="w-16 h-16 rounded-full object-cover"
                                src="{{ asset('img/testimonial/WhatsApp-Image-2022-03-28-at-15.10.33.jpg') }}"
                                alt="">
                            <div class="text-left ml-4">
                                <p class="font-semibold">Customer</p>
                                <p class="text-sm text-gray-500">Showroom PJ</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700 italic text-left">"PJ-Tech has consistently provided excellent IT
                            solutions and support, helping us achieve our digital transformation goals efficiently."</p>
                    </div>
                    <div class="shadow-md rounded-2xl p-6 bg-white">
                        <div class="flex items-center">
                            <img class="w-16 h-16 rounded-full object-cover"
                                src="{{ asset('img/testimonial/WhatsApp-Image-2022-03-26-at-14.02.10-3.jpg') }}"
                                alt="">
                            <div class="text-left ml-4">
                                <p class="font-semibold">Customer</p>
                                <p class="text-sm text-gray-500">Showroom PJ</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700 italic text-left">"Rencana hunting 3 laptop buat anak-anak. Pas
                            sekali ada
                            promo lucky spin di toko, bawaan laptop udah ada free, dapat lagi tambahan gratis. Mantap
                            nih ya!"</p>
                    </div>

                </div>
            </div>
        </div>

</x-layout>
