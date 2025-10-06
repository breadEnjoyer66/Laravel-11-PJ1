<?php $title_1 = 'pb-2 bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text mb-4 text-4xl lg:text-[2.7rem] font-extrabold'; ?>
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <section class="bg-gradient-to-b from-gray-50 to-white" x-data="{ open: null }">

        {{-- Page header --}}
        <div class="mx-auto max-w-7xl px-6 lg:px-8 sm:px-6 pt-14">
            <div class="">
                <h1 class="{{ $title_1 }}">
                    Our Business Network
                </h1>
                <p class="mt-4 text-gray-600 text-justify">
                    PT Primajaya Multi Technology has built a comprehensive business network, ranging from private
                    enterprises, government institutions, and distribution channels, to retail and online marketplaces.
                </p>
            </div>
        </div>

        {{-- Content Accordions --}}
        <div class="mx-auto max-w-7xl px-6 lg:px-8 sm:px-6 mt-8 space-y-6">

            {{-- Template item --}}
            @php
                $items = [
                    [
                        'id' => 1,
                        'title' => 'Business to Business (B2B)',
                        'emoji' => '🏢',
                        'img' => 'img/corporate-team.jpg',
                        'desc' =>
                            'We provide a wide range of technology products and services to support the needs of private enterprises. By upholding business ethics, we maintain long-term, mutually beneficial relationships. We also help companies improve efficiency, reduce operational costs, and accelerate digital transformation.',
                    ],
                    [
                        'id' => 2,
                        'title' => 'Business to Government (B2G)',
                        'emoji' => '🏛️',
                        'img' => 'img/b2g-team.jpg',
                        'desc' =>
                            'As a Government partner, we are registered in the INAPROC Electronic Catalog system. We are ready to serve the needs of Government Institutions and State-Owned Enterprises (SOEs) through efficient and transparent digital solutions. Our focus is to support government programs in developing technology infrastructure and strengthening digital governance.',
                    ],
                    [
                        'id' => 3,
                        'title' => 'Distribution',
                        'emoji' => '🚚',
                        'img' => 'img/gudang.jpg',
                        'desc' =>
                            'We operate an integrated distribution system that reaches various regions. Our products are delivered to dealers and end customers with fast shipping and reliable service. Through a modern logistics system, we ensure the supply chain remains efficient and dependable.',
                    ],
                    [
                        'id' => 4,
                        'title' => 'Retail',
                        'emoji' => '🛒',
                        'img' => 'img/retail.jpg',
                        'desc' =>
                            'We operate several IT Plaza Stores in Medan and Banda Aceh to provide easy access for customers. Our retail stores are designed as one-stop solutions where customers can find the latest products along with trusted after-sales services.',
                    ],
                    [
                        'id' => 5,
                        'title' => 'Online',
                        'emoji' => '💻',
                        'img' => 'img/online-store.jpg',
                        'desc' =>
                            'We have been active for more than six years across leading marketplace platforms in Indonesia, such as Tokopedia, Shopee, Bli-bli and many more! Offering officially licensed products with on-time delivery. Supported by a robust e-commerce system, customers can shop easily, safely, and conveniently from anywhere.',
                    ],
                    [
                        'id' => 6,
                        'title' => 'Rental',
                        'emoji' => '📦',
                        'img' => 'img/rental.jpg',
                        'desc' =>
                            'We provide IT product rental services such as laptops, PCs, printers, and other devices. This rental service is flexible, available for both short-term and long-term needs, making it ideal for events, projects, or temporary operational requirements.',
                    ],
                ];
            @endphp

            <div class="rounded-2xl border border-slate-200 bg-white shadow-sm overflow-hidden">
                @foreach ($items as $item)
                    <div class="border-b border-slate-200 last:border-b-0">
                        <button @click="open === {{ $item['id'] }} ? open = null : open = {{ $item['id'] }}"
                            class="w-full flex justify-between items-center p-6 text-left focus:outline-none">
                            <div class="flex items-center gap-4">
                                <h2 class="text-xl font-semibold text-[#0F2748]">
                                    {{ $item['title'] }}
                                </h2>
                            </div>

                            {{-- Expand / Collapse Icons --}}
                            <svg x-show="open !== {{ $item['id'] }}" class="w-5 h-5 text-slate-500" fill="none"
                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                            </svg>
                            <svg x-show="open === {{ $item['id'] }}" class="w-5 h-5 text-slate-500" fill="none"
                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4" />
                            </svg>
                        </button>

                        <div x-show="open === {{ $item['id'] }}" x-collapse.duration.300ms
                            class="items-center px-6 pb-6 flex flex-col lg:flex-row gap-6 bg-white">
                            <img src="{{ $item['img'] }}" alt="placeholder"
                                class="rounded-lg shadow-md w-full lg:w-1/3 object-cover">
                            <div class="">
                                <h3 class="text-lg font-semibold text-[#0F2748]">{{ $item['title'] }}</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    {{ $item['desc'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        {{-- CTA --}}
        <div class="mt-16" style="background-color:#0F2748">
            <div
                class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10 text-white text-center md:text-start lg:flex justify-between items-center">
                <div class="">
                    <h3 class="text-2xl font-semibold">Partner with Us</h3>
                    <p class="mt-2 text-white/80">Discover how our network can empower your business, government, or
                        distribution needs.</p>
                </div>
                <div class="mt-6 lg:mt-0">
                    <a href="{{ url('/contact') }}"
                        class="items-center rounded-lg bg-orange-500 hover:bg-orange-600 px-6 py-3 font-semibold shadow">
                        Get in Touch
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="relative bg-gradient-to-b from-white to-gray-50 py-16 overflow-hidden">
        <div class="mx-auto max-w-7xl px-6 lg:px-8" x-show="visible" x-transition.opacity.duration.1000ms>
            <!-- Header -->
            <h2 class="{{ $title_1 }}">Plaza Visual</h2>
            <p class="text-lg text-gray-600 mx-auto mb-12">
                <span class="font-semibold text-gray-800">Plaza Visual</span> is our dedicated division focusing on
                <span class="font-semibold">Digital Signage Solutions</span>,
                including Hospitality TV, Videowall, Videotron, Interactive Displays, and more.
                As an <span class="font-semibold">Authorized Samsung Display Partner</span>, we ensure genuine products
                and top-tier visual quality.
            </p>

            <!-- Grid layout -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Videowall -->
                <div
                    class="group relative bg-white shadow-sm rounded-2xl border border-gray-100 hover:shadow-md transition">
                    <div class="flex items-center justify-center p-2">
                        <img src="{{ asset('img/videowall.jpg') }}" alt="Video Wall" class="rounded-xl">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-2">Video Wall</h3>
                        <p class="text-gray-600 leading-relaxed text-justify">
                            A combination of multiple large display panels with high brightness and durability,
                            ideal for meeting rooms, public areas, or information displays that require crisp and
                            impactful
                            visuals.
                        </p>
                    </div>
                </div>

                <!-- Videotron -->
                <div
                    class="group relative bg-white shadow-sm rounded-2xl border border-gray-100 hover:shadow-md transition">
                    <div class="flex items-center justify-center p-2">
                        <img src="{{ asset('img/videotron.jpg') }}" alt="Videotron" class="rounded-xl">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Videotron</h3>
                        <p class="text-gray-600 leading-relaxed text-justify">
                            Customizable large LED displays with modern LED technology — perfect for advertising,
                            events, or
                            indoor/outdoor installations.
                            Our featured brand, <span class="font-semibold">Lampro by Unilumin</span>, ensures excellent
                            visual quality and reliability.
                        </p>
                    </div>
                </div>

                <!-- TV Signage -->
                <div
                    class="group relative bg-white shadow-sm rounded-2xl border border-gray-100 hover:shadow-md transition">
                    <div class="flex items-center justify-center p-2">
                        <img src="{{ asset('img/tv-signage.jpg') }}" alt="TV Signage" class="rounded-xl">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">TV Signage & Hospitality TV</h3>
                        <p class="text-gray-600 leading-relaxed text-justify">
                            High-durability TVs with centralized content management systems — ideal for hotels,
                            hospitals,
                            cafés,
                            supermarkets, offices, and any venue needing modern digital information or advertising
                            displays.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="bg-white">
        <div class="mx-auto max-w-7xl py-12 lg:pt-20 px-6 lg:px-8">

            {{-- Section Title --}}

            <h2 class="{{ $title_1 }}">
                Sales & Distribution
            </h2>
            <p class="text-lg text-gray-600 text-left">
                We provide a wide range of IT products to support Distribution, Retail, Private Enterprises, and
                Government Institutions. As an official Sub Distributor / Master Dealer, we work with leading global
                brands, including:
            </p>

            {{-- Content Grid --}}
            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 text-left">

                <div class="p-6 bg-slate-50 rounded-xl shadow-sm hover:shadow-md transition flex flex-col items-start">
                    <h3 class="text-xl font-semibold text-[#0F2748]">HP (Hewlett Packard)</h3>
                    <p class="mt-2 text-gray-600 text-sm">
                        Laptop, PC, Workstation, Server, Printer, Scanner, Plotter, Ink, Toner, Accessories (Mouse,
                        Keyboard, Headset, Speaker, etc.)
                    </p>
                </div>

                <div class="p-6 bg-slate-50 rounded-xl shadow-sm hover:shadow-md transition flex flex-col items-start">
                    <h3 class="text-xl font-semibold text-[#0F2748]">Lenovo</h3>
                    <p class="mt-2 text-gray-600 text-sm">Laptop, PC, Workstation, Server</p>
                </div>

                <div class="p-6 bg-slate-50 rounded-xl shadow-sm hover:shadow-md transition flex flex-col items-start">
                    <h3 class="text-xl font-semibold text-[#0F2748]">Asus</h3>
                    <p class="mt-2 text-gray-600 text-sm">Laptop, PC, Workstation, Server</p>
                </div>

                <div class="p-6 bg-slate-50 rounded-xl shadow-sm hover:shadow-md transition flex flex-col items-start">
                    <h3 class="text-xl font-semibold text-[#0F2748]">Brother</h3>
                    <p class="mt-2 text-gray-600 text-sm">
                        Inkjet Printer, LaserJet Printer, Label Printer, Scanner, Ink and Toner
                    </p>
                </div>

                <div class="p-6 bg-slate-50 rounded-xl shadow-sm hover:shadow-md transition flex flex-col items-start">
                    <h3 class="text-xl font-semibold text-[#0F2748]">APC UPS</h3>
                    <p class="mt-2 text-gray-600 text-sm">Power Backup, Server Rack</p>
                </div>

                <div class="p-6 bg-slate-50 rounded-xl shadow-sm hover:shadow-md transition flex flex-col items-start">
                    <h3 class="text-xl font-semibold text-[#0F2748]">Synology</h3>
                    <p class="mt-2 text-gray-600 text-sm">
                        Hybrid Storage Server, NAS (Network Attached Storage), Storage Manager
                    </p>
                </div>

                <div class="p-6 bg-slate-50 rounded-xl shadow-sm hover:shadow-md transition flex flex-col items-start">
                    <h3 class="text-xl font-semibold text-[#0F2748]">Samsung</h3>
                    <p class="mt-2 text-gray-600 text-sm">
                        Mobile, Display Solutions, IoT, Home Appliances
                    </p>
                </div>

                <div class="p-6 bg-slate-50 rounded-xl shadow-sm hover:shadow-md transition flex flex-col items-start">
                    <h3 class="text-xl font-semibold text-[#0F2748]">Networking & Security</h3>
                    <p class="mt-2 text-gray-600 text-sm">
                        Cisco, Aruba, Ruijie, H3C, Mikrotik, Zebra, Ubiquiti, Cambium
                    </p>
                </div>

                <div class="p-6 bg-slate-50 rounded-xl shadow-sm hover:shadow-md transition flex flex-col items-start">
                    <h3 class="text-xl font-semibold text-[#0F2748]">Server & Storage</h3>
                    <p class="mt-2 text-gray-600 text-sm">
                        HP Enterprise, Lenovo, Dell, Cisco, Hikvision, Fortinet
                    </p>
                </div>

                <div class="p-6 bg-slate-50 rounded-xl shadow-sm hover:shadow-md transition flex flex-col items-start">
                    <h3 class="text-xl font-semibold text-[#0F2748]">Videotron</h3>
                    <p class="mt-2 text-gray-600 text-sm">
                        Unilumin, Qiangli, Novastar, Huidu, ColorLight
                    </p>
                </div>

                <div class="p-6 bg-slate-50 rounded-xl shadow-sm hover:shadow-md transition flex flex-col items-start">
                    <h3 class="text-xl font-semibold text-[#0F2748]">Mobile</h3>
                    <p class="mt-2 text-gray-600 text-sm">
                        Apple, Xiaomi, Infinix, Realme
                    </p>
                </div>

            </div>
        </div>
    </section>

</x-layout>
