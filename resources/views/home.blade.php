<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Hero Section -->
    {{-- Full-width hero (spans entire viewport) --}}

    <div class="lg:py-20"
        style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.644), rgba(54, 58, 63, 0.37)), url('{{ asset('img/notebook-background.jpeg') }}'); background-size: cover; background-position: center;">
        <div
            class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 grid py-12 lg:gap-8 xl:gap-0 lg:pb-24 lg:pt-20 lg:grid-cols-12">

            <div class="mr-auto place-self-center lg:col-span-7 pt-10">
                <h1 class="text-white mb-4 font-bold leading-none text-4xl md:text-4xl lg:text-6xl">
                    Empowering Technology For Business</h1>
                <p class="mb-8 text-md font-normal text-gray-300 lg:text-lg dark:text-gray-400">
                    Providing
                    computers, laptops, servers, and network solutions for corporations, government, and
                    institutions.
                </p>
                <div class="flex flex-col mb-4 lg:mb-8 space-y-4 sm:flex-row sm:justify-start sm:space-y-0 sm:space-x-4">
                    <a href="/contact"
                        class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-full bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
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
        class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex flex-col justify-center lg:py-16 lg:grid lg:grid-cols-2 my-20">
        <div class="lg:mb-0 mb-20 flex items-center">
            <img src="{{ asset('img/intan-felicia-about-blue.png') }}" alt="About Us"
                class="h-[88%] align-middle px-5 ml-5">
        </div>
        <div class="px-4">
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


    {{-- @php
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
        class="w-screen my-20 text-center">
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
    </div> --}}

    <div x-data="{
        active: 0,
        slides: [{
                img: '{{ asset('img/corporate-team-bw.jpg') }}',
                title: 'Innovative Solutions',
                desc: 'We deliver cutting-edge technology solutions tailored for your business needs.'
            },
            {
                img: '{{ asset('img/carousel-2.jpg') }}',
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
    }" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 flex items-center justify-center">


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

</x-layout>
