<?php $title_1 = 'pb-2 bg-gradient-to-r from-orange-600 to-orange-500 text-transparent bg-clip-text mb-4 text-4xl lg:text-[2.7rem] font-extrabold'; ?>
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <section class="max-w-7xl mx-auto px-6 py-16 space-y-20">
        <!-- INTRO -->
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h1 class="{{ $title_1 }}">Warranty Information</h1>
                <p class="text-gray-600 leading-relaxed text-justify">
                    PT. Primajaya Multi Technology provides official manufacturer warranties for all products,
                    including HP, ASUS, and Lenovo laptops. We ensure peace of mind for every customer,
                    protecting you from factory defects and assisting you through every warranty claim process.
                </p>
                <p class="text-gray-600 leading-relaxed text-justify mt-4">
                    For
                    products listed with a specific warranty period (e.g., 1 year) but officially covered longer
                    by the manufacturer (e.g., 3 years), PT Primajaya Multi Technology assists in processing claims
                    according to the brand’s stated coverage. This ensures full benefit from the extended warranty.
                </p>
            </div>
            <div class="relative">
                <img src="{{ asset('img/warranty-1.jpg') }}" alt="Warranty Illustration"
                    class="rounded-2xl shadow-lg w-full h-80 object-cover">
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-t from-black/20 to-transparent"></div>
            </div>
        </div>

        <!-- ACCORDION SECTIONS -->
        <div x-data="{ open: null }" class="space-y-8">
            <!-- SERVICE OUT OF WARRANTY -->
            <div class="border rounded-2xl shadow-sm p-6 hover:shadow-md transition bg-white/50 backdrop-blur">
                <button @click="open === 1 ? open = null : open = 1" class="flex justify-between w-full items-center">
                    <h3 class="text-xl font-semibold text-gray-800">Service Out of Warranty</h3>
                    <span x-show="open !== 1" class="text-gray-500 text-2xl">+</span>
                    <span x-show="open === 1" class="text-gray-500 text-2xl">−</span>
                </button>
                <div x-show="open === 1" x-collapse class="mt-4 text-gray-600 leading-relaxed">
                    For products beyond their warranty period, services will be categorized as Out-of-Warranty
                    and subject to service charges. Damage caused by misuse or external factors is also excluded
                    from warranty coverage.
                    <br><br>
                    <em class="text-sm">Manufacturer warranties mainly cover factory defects within a specific
                        tolerance.</em>
                </div>
            </div>

            <!-- NOTEBOOK EXCHANGE GUARANTEE -->
            <div class="border rounded-2xl shadow-sm p-6 hover:shadow-md transition bg-white/50 backdrop-blur">
                <button @click="open === 2 ? open = null : open = 2" class="flex justify-between w-full items-center">
                    <h3 class="text-xl font-semibold text-gray-800">Notebook Exchange Guarantee</h3>
                    <span x-show="open !== 2" class="text-gray-500 text-2xl">+</span>
                    <span x-show="open === 2" class="text-gray-500 text-2xl">−</span>
                </button>
                <div x-show="open === 2" x-collapse class="mt-4 text-gray-600 leading-relaxed">
                    Customers are eligible for a one-time notebook exchange within 3 days of purchase if:
                    <ul class="list-disc ml-6 mt-2 space-y-1">
                        <li>The replacement notebook is of higher value.</li>
                        <li>The original notebook is in perfect condition (per our return policy).</li>
                        <li>An administrative fee of IDR 100,000 applies.</li>
                    </ul>
                    <p class="mt-2 text-sm italic">*Terms and conditions apply.</p>
                </div>
            </div>

            <!-- AFTER-SALES SERVICE -->
            <div class="border rounded-2xl shadow-sm p-6 hover:shadow-md transition bg-white/50 backdrop-blur">
                <button @click="open === 3 ? open = null : open = 3" class="flex justify-between w-full items-center">
                    <h3 class="text-xl font-semibold text-gray-800">After-Sales Service</h3>
                    <span x-show="open !== 3" class="text-gray-500 text-2xl">+</span>
                    <span x-show="open === 3" class="text-gray-500 text-2xl">−</span>
                </button>
                <div x-show="open === 3" x-collapse class="mt-4 text-gray-600 leading-relaxed">
                    <ul class="list-disc ml-6 space-y-1">
                        <li>7-Day Replacement Guarantee* for eligible purchases.</li>
                        <li>Free technical support for up to 1 year from purchase date.</li>
                        <li>Warranty claims processed per official manufacturer policy.</li>
                        <li>Visit-on-site service within 2 weeks of purchase.</li>
                    </ul>
                    <p class="mt-2 text-sm italic">*Terms and conditions apply.</p>
                </div>
            </div>
        </div>

        <!-- TERMS & CONDITIONS -->
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-3">Terms & Conditions</h2>
                <ul class="list-disc ml-6 text-gray-600 space-y-2">
                    <li>7-day replacement applies only to complete items (box, packaging, invoice).</li>
                    <li>Box must be clean and free of damage or writing.</li>
                    <li>Visit-on-site applies to printers, AIO PCs, and desktops within 8 km radius.</li>
                    <li>Visit-on-site scheduled within 2 × 24 hours.</li>
                </ul>
            </div>
            <div class="relative">
                <img src="{{ asset('img/service-center-int.jpg') }}" alt="Warranty Terms"
                    class="rounded-2xl shadow-md w-full h-80 object-cover">
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-t from-black/20 to-transparent"></div>
            </div>
        </div>

        <!-- WARRANTY POLICY -->
        <div class="bg-gray-50 rounded-3xl p-10 shadow-inner">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Warranty Policy</h2>
            <div class="mx-auto text-gray-600 leading-relaxed space-y-4">
                <ul class="list-disc list-inside space-y-2">
                    <li>Original invoice, warranty card, and Primajaya Total Care form required for claims.</li>
                    <li>14-day replacement available if all items are in perfect physical condition.</li>
                    <li>1–5 dead pixels considered normal per international standards.</li>
                    <li>Warranty void if seals are broken, items misused, or physically damaged.</li>
                    <li>Software and accessories not covered by warranty.</li>
                </ul>
                <p class="mt-6">
                    For more information, please
                    <a href="/contact" class="text-blue-600 hover:underline font-medium">contact us directly</a>.
                </p>
            </div>
        </div>
    </section>


</x-layout>
