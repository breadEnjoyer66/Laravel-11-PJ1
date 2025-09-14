<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Hero Section -->
    {{-- Full-width hero (spans entire viewport) --}}
    <x-slot:full>

        <div
            class="grid max-w-screen-xl px-4 py-12 sm:px-6 lg:px-12 mx-auto lg:gap-8 xl:gap-0 lg:pb-24 lg:pt-20 lg:grid-cols-12">

            <div class="mr-auto place-self-center lg:col-span-7 pt-10">
                <a href="/about"
                    class="inline-flex justify-normal items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700"
                    role="alert">
                    <span class="text-xs bg-primary-600 rounded-full text-white px-4 py-1.5 mr-3">Learn
                        more</span> <span class="text-sm font-medium">Primajaya Multi Technology</span>
                    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <h1
                    class="text-gray-900 mb-4 font-extrabold tracking-tight leading-none text-4xl md:text-4xl lg:text-5xl dark:text-white">
                    Empowering Technology For Business</h1>
                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                    Providing
                    computers, laptops, servers, and network solutions for corporations, government, and
                    institutions.
                </p>
                <div
                    class="flex flex-col mb-4 lg:mb-8 space-y-4 sm:flex-row sm:justify-start sm:space-y-0 sm:space-x-4">
                    <a href="/contact"
                        class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-full bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                        Chat with sales
                        <svg class="ml-1.5 w-6 h-6 text-white dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.079 6.839a3 3 0 0 0-4.255.1M13 20h1.083A3.916 3.916 0 0 0 18 16.083V9A6 6 0 1 0 6 9v7m7 4v-1a1 1 0 0 0-1-1h-1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1Zm-7-4v-6H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h1Zm12-6h1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-1v-6Z" />
                        </svg>
                    </a>
                </div>
                <div class="flex flex-row">
                    <div class="bg-white text-gray-900 shadow-lg p-5 mr-2 rounded-xl">
                        <h2 class="text-2xl font-extrabold text-gray-800">18+</h2>
                        <p class="text-base text-gray-400">Years of experience</p>
                    </div>
                    <div class="bg-white text-gray-900 shadow-lg p-5 mr-2 rounded-xl">
                        <h2 class="text-2xl font-extrabold text-gray-800">100+</h2>
                        <p class="text-base text-gray-400">Satisfied clients</p>
                    </div>
                    <div class="bg-white text-gray-900 shadow-lg p-5 mr-2 rounded-xl">
                        <h2 class="text-2xl font-extrabold text-gray-800">50+</h2>
                        <p class="text-base text-gray-400">Brand partners</p>
                    </div>
                </div>
            </div>

            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex ">
                <img class="object-contain" src="{{ asset('img/hero-image-2.png') }}" alt="product-banner">
            </div>

        </div>
        <hr class="">
    </x-slot:full>


    <!-- Why Choose Us Section -->
    <div class="my-20 mx-auto max-w-screen-xl">
        <x-why-us></x-why-us>
    </div>
    <!-- end why choose us section -->

    <!-- About Our Company Briefly -->
    <div class="flex flex-col justify-center mx-auto max-w-screen-xl lg:py-16 lg:grid lg:grid-cols-2 my-20">
        <div class="lg:mb-0 mb-20">
            <img src="{{ asset('img/intan-felicia.png') }}" alt="About Us" class=" mx-auto w-4/6">
        </div>
        <div class="">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">About us</h2>
            <p class="text-gray-600 dark:text-gray-300 text-base mb-2 leading-loose text-justify">
                <span class="font-semibold text-primary-700 dark:text-primary-400">PT Primajaya Multi
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
                class="py-2.5 px-5 text-base font-medium text-center text-white rounded-full bg-primary-500 hover:bg-primary-600">Learn
                more &raquo;</a>
        </div>
    </div>
    <!-- End About Our Company Briefly -->


    @php
        $tabs = [
            [
                'id' => 'tab1',
                'title' => 'Business to Business (B2B)',
                'img' => asset('img/corporate-team-bw.jpg'),
                'heading' => 'Business to Business (B2B)',
                'desc' =>
                    'We specialize in B2B solutions, providing products and services exclusively to corporate and government clients. Our commitment is to support your organization’s technology and information needs with reliable, high-quality offerings. We prioritize building strong, long-term partnerships grounded in business ethics and trust.',
            ],
            [
                'id' => 'tab2',
                'title' => 'Business to Government (B2G)',
                'img' => asset('img/tab-Business to Government (B2G).jpg'),
                'heading' => 'Business to Government (B2G)',
                'desc' =>
                    'We participate in B2G (business-to-government), a specialized variation of B2B. This concept enables businesses and government institutions to use centralized online platforms to exchange information and conduct transactions more efficiently than traditional manual processes.',
            ],
            [
                'id' => 'tab3',
                'title' => 'Distribution',
                'img' => asset('img/tab-cloud.jpg'),
                'heading' => 'Distribution',
                'desc' =>
                    'We also engage in distribution activities, delivering products from manufacturers to consumers to ensure wide product availability. Our distribution focuses on technology and information-related goods, and we guarantee secure delivery to distributors or end customers.',
            ],
            [
                'id' => 'tab4',
                'title' => 'Offline Retail',
                'img' => asset('img/tab-hardware.jpg'),
                'heading' => 'Offline Retail',
                'desc' =>
                    'We serve end customers directly through our offline retail branches located in Medan and Banda Aceh. Our stores offer a wide selection of genuine hardware and technology products, providing personalized service and expert support to meet your needs.',
            ],
            [
                'id' => 'tab5',
                'title' => 'Online Retail',
                'img' => asset('img/tab-support.jpg'),
                'heading' => 'Online Retail',
                'desc' =>
                    'We also offer purchasing through online platforms and have been active for over 5 years on several leading marketplaces in Indonesia. All our products sold on these marketplaces come with official warranties. We ensure timely delivery and use quality packaging to prevent damage during shipping.',
            ],
        ];
    @endphp


    <div x-data="{
        tab: '{{ $tabs[0]['id'] }}',
        height: 0,
        setHeight() {
            this.$nextTick(() => {
                let el = this.$refs.tabContent.querySelector('[x-show]');
                if (el) {
                    this.height = el.offsetHeight;
                }
            });
        }
    }" x-init="setHeight()" x-watch="tab" @tab-changed.window="setHeight()"
        class="max-w-screen-xl mx-auto my-20 text-center">
        <div class="">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                Our Business Network</h2>
            <p class="text-gray-500 sm:text-xl dark:text-gray-400">We offer a wide range of services to
                meet your technology needs. Explore our key offerings below.</p>
        </div>
        <div class="flex flex-wrap gap-2 my-12 justify-center">
            @foreach ($tabs as $t)
                <button @click="tab = '{{ $t['id'] }}'; setHeight();"
                    :class="tab === '{{ $t['id'] }}' ? 'bg-primary-500 text-white font-bold' :
                        'bg-gray-200 hover:bg-blue-300 text-gray-500'"
                    class="px-5 py-2 rounded-full hover:scale-105 duration-300" type="button">
                    {{ $t['title'] }}
                </button>
            @endforeach
        </div>
        <div class="relative bg-white dark:bg-gray-900 rounded-xl overflow-hidden transition-all duration-300"
            x-ref="tabContent" :style="'min-height:' + height + 'px;'">
            @foreach ($tabs as $t)
                <div x-show="tab === '{{ $t['id'] }}'" x-transition:enter="transition-opacity duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity duration-200 absolute inset-0"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    class="flex flex-col md:flex-row items-stretch w-full" style="will-change: opacity;">
                    <div class="md:w-1/3 w-full flex items-center justify-center bg-gray-50 dark:bg-gray-800">
                        <img src="{{ $t['img'] }}" alt="{{ $t['title'] }}"
                            class="max-h-60 object-cover rounded-2xl w-full h-56 md:h-72">
                    </div>
                    <div class="md:w-2/3 text-justify w-full p-8 lg:px-20 flex flex-col justify-center">
                        <h3 class="text-2xl font-bold mb-3 text-gray-900 dark:text-white">{{ $t['heading'] }}</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-lg">{{ $t['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mb-8 lg:mb-16">
                <h2 class="text-center mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our
                    clients</h2>
                <p class="text-center text-gray-500 sm:text-xl dark:text-gray-400">Over 18 years helping businesses,
                    government, and
                    institutions. Providing solutions to step forward with technology.</p>
            </div>
            <div class="text-center space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div class="bg-gradient-to-b from-white to-gray-100 rounded-xl px-5 py-10 shadow-md">
                    <div
                        class="mx-auto flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Service & hospitality</h3>
                    <p class="text-gray-500 dark:text-gray-400">Plan it, create it, launch it. Collaborate seamlessly
                        with all the organization and hit your marketing goals every month with our marketing plan.</p>
                </div>
                <div class="bg-gradient-to-b from-white to-gray-100 rounded-xl px-5 py-10 shadow-md">
                    <div
                        class="mx-auto flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">End user retailing</h3>
                    <p class="text-gray-500 dark:text-gray-400">Protect your organization, devices and stay compliant
                        with our structured workflows and custom permissions made for you.</p>
                </div>
                <div class="bg-gradient-to-b from-white to-gray-100 rounded-xl px-5 py-10 shadow-md">
                    <div
                        class="mx-auto flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path
                                d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Manufacture</h3>
                    <p class="text-gray-500 dark:text-gray-400">Auto-assign tasks, send Slack messages, and much more.
                        Now power up with hundreds of new templates to help you get started.</p>
                </div>
                <div class="bg-gradient-to-b from-white to-gray-100 rounded-xl px-5 py-10 shadow-md">
                    <div
                        class="mx-auto flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Education</h3>
                    <p class="text-gray-500 dark:text-gray-400">Audit-proof software built for critical financial
                        operations like month-end close and quarterly budgeting.</p>
                </div>
                <div class="bg-gradient-to-b from-white to-gray-100 rounded-xl px-5 py-10 shadow-md">
                    <div
                        class="mx-auto flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Consumer goods</h3>
                    <p class="text-gray-500 dark:text-gray-400">Craft beautiful, delightful experiences for both
                        marketing and product with real cross-company collaboration.</p>
                </div>
                <div class="bg-gradient-to-b from-white to-gray-100 rounded-xl px-5 py-10 shadow-md">
                    <div
                        class="mx-auto flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">E-procurement</h3>
                    <p class="text-gray-500 dark:text-gray-400">Keep your company’s lights on with customizable,
                        iterative, and structured workflows built for all efficient teams and individual.</p>
                </div>

                <div class="bg-gradient-to-b from-white to-gray-100 rounded-xl px-5 py-10 shadow-md">
                    <div
                        class="mx-auto flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Agribusiness</h3>
                    <p class="text-gray-500 dark:text-gray-400">Keep your company’s lights on with customizable,
                        iterative, and structured workflows built for all efficient teams and individual.</p>
                </div>
            </div>
        </div>
    </section>

</x-layout>
