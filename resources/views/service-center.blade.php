<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Service Center – Tailwind v3 + Alpine.js --}}
    <section x-data="{
        tab: 'service',
        faqs: [{ q: 'How do I submit a repair request?', a: 'Contact our service desk or visit any store. We will create a ticket and keep you updated via email/WhatsApp.' },
            { q: 'Do you support on-site repairs?', a: 'Yes. For enterprise & government clients we offer on-site troubleshooting, pick-up and return options.' },
            { q: 'What are the supported brands?', a: 'HP, Lenovo, ASUS, Brother (authorized partner) plus multi-brand out-of-warranty.' }
        ]
    }" class="bg-gradient-to-b from-gray-50 to-white">

        {{-- Page header / hero --}}
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-14">
            <div class="grid gap-8 md:grid-cols-2 items-center">
                <div>
                    <h1 class="text-4xl lg:text-5xl font-extrabold tracking-tight" style="color:#0F2748">Authorized
                        Service Center
                    </h1>
                    <p class="mt-4 text-gray-600">
                        Authorized repair & deployment partner for leading IT brands. Professional, trackable,
                        and SLA-oriented service for end users, enterprises, and public sector.
                    </p>

                    {{-- quick badges --}}
                    <div class="mt-6 flex flex-wrap items-center gap-3">
                        <span
                            class="inline-flex items-center rounded-full bg-orange-100 px-3 py-1 text-sm font-medium text-orange-700">
                            Authorized Service Partner
                        </span>
                        <span class="inline-flex items-center rounded-full bg-blue-100 px-3 py-1 text-sm font-medium"
                            style="color:#0F2748">
                            HP • Lenovo • ASUS • Brother
                        </span>
                    </div>
                </div>

                {{-- Placeholder hero image (replace src) --}}
                <div class="relative">
                    <img src="{{ asset('img/service-center-1.jpg') }}" alt="Service center"
                        class="w-full aspect-[16/10] object-cover rounded-2xl shadow-lg ring-1 ring-black/5">
                    <div class="absolute -bottom-4 -right-4 hidden sm:block">
                        <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?q=80&w=1170&auto=format&fit=crop"
                            class="w-40 aspect-[4/3] object-cover rounded-xl shadow-md ring-1 ring-black/5"
                            alt="">
                    </div>
                </div>
            </div>
        </div>

        {{-- Tabs --}}
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-12">
            <div class="flex flex-wrap gap-2">
                <button @click="tab='service'"
                    class="px-4 py-2 rounded-t-2xl border border-slate-200 bg-white text-sm font-medium shadow-sm -mb-px"
                    :class="tab === 'service' ? 'border-b-white text-gray-900' : 'text-gray-600 hover:bg-gray-50'">
                    Authorized Service Center
                </button>
                <button @click="tab='install'"
                    class="px-4 py-2 rounded-t-2xl border border-slate-200 bg-white text-sm font-medium shadow-sm -mb-px"
                    :class="tab === 'install' ? 'border-b-white text-gray-900' : 'text-gray-600 hover:bg-gray-50'">
                    Installation & Solutions
                </button>
                <button @click="tab='support'"
                    class="px-4 py-2 rounded-t-2xl border border-slate-200 bg-white text-sm font-medium shadow-sm -mb-px"
                    :class="tab === 'support' ? 'border-b-white text-gray-900' : 'text-gray-600 hover:bg-gray-50'">
                    Service Support
                </button>
            </div>

            <div class="rounded-2xl border border-slate-200 bg-white shadow-sm">
                {{-- Panel: Service Center --}}
                <div x-show="tab==='service'" x-transition.opacity class="p-6 sm:p-8 lg:p-10">
                    <div class="grid gap-10 lg:grid-cols-3">
                        {{-- left column --}}
                        <div class="lg:col-span-2">
                            <h3 class="text-2xl font-semibold mb-3" style="color:#0F2748">Hardware & Software Repairs
                            </h3>
                            <p class="text-gray-600 mb-6">
                                Full diagnostic and repair for Laptops, Desktops, Workstations, Servers, Printers
                                (Inkjet, LaserJet,
                                Plotter, Label) and Scanners. All handled by certified engineers with modern online
                                tracking.
                            </p>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-2">Laptop / PC</h4>
                                    <ul class="space-y-1 text-gray-600">
                                        <li>Keyboard, HDD/SSD, RAM, Motherboard</li>
                                        <li>LCD & Hinges, Cables, Battery, Adapter, Power Supply</li>
                                        <li>Top/Back Cover & other spare parts</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-2">Server</h4>
                                    <ul class="space-y-1 text-gray-600">
                                        <li>HDD/SSD, RAM, RAID Controller & Cards</li>
                                        <li>CPU, PSU, Motherboard & fans</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-2">Printer & Scanner</h4>
                                    <ul class="space-y-1 text-gray-600">
                                        <li>Printhead, Roller, Gear, Drum</li>
                                        <li>Ink, Toner, Panel/Display modules</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-2">Systems</h4>
                                    <ul class="space-y-1 text-gray-600">
                                        <li>OS & Driver Recovery</li>
                                        <li>Data migration & backup</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        {{-- right column placeholder image --}}
                        <div class="lg:pl-8">
                            <img src="{{ asset('img/service-center-int.jpg') }}" alt="Bench repair"
                                class="w-full aspect-[4/3] object-cover rounded-xl shadow ring-1 ring-black/5">
                        </div>
                    </div>
                </div>

                {{-- Panel: Installation & Solutions --}}
                <div x-show="tab==='install'" x-transition.opacity class="p-6 sm:p-8 lg:p-10">
                    <div class="grid gap-10 lg:grid-cols-3">
                        <div class="lg:col-span-2">
                            <h3 class="text-2xl font-semibold mb-3" style="color:#0F2748">Deployment, Cabling &
                                Integration</h3>
                            <p class="text-gray-600 mb-6">
                                Delivered by certified pre-sales and field engineers with strong enterprise & public
                                sector experience.
                                End-to-end scope from survey and design to handover and documentation.
                            </p>

                            <div class="grid sm:grid-cols-2 gap-6">
                                <ul class="space-y-2 text-gray-700">
                                    <li>• CCTV</li>
                                    <li>• UPS (APC, Eaton)</li>
                                    <li>• Fiber Optic, Splicing, OTDR</li>
                                    <li>• Servers & Networking (Cisco, Aruba, Ruijie, H3C, MikroTik, Zebra, Ubiquiti,
                                        Cambium)</li>
                                </ul>
                                <ul class="space-y-2 text-gray-700">
                                    <li>• Network Maintenance</li>
                                    <li>• Hospitality/Signage: Videowall & Videotron</li>
                                    <li>• Controllers & LED (Samsung, Lampro, Novastar)</li>
                                    <li>• And other brand solutions</li>
                                </ul>
                            </div>
                        </div>

                        <div class="lg:pl-8">
                            <img src="https://images.unsplash.com/photo-1559302504-64aae6ca6b6d?q=80&w=1637&auto=format&fit=crop"
                                alt="Network racks"
                                class="w-full aspect-[4/3] object-cover rounded-xl shadow ring-1 ring-black/5">
                        </div>
                    </div>
                </div>

                {{-- Panel: Service Support --}}
                <div x-show="tab==='support'" x-transition.opacity class="p-6 sm:p-8 lg:p-10">
                    <div class="grid gap-10 lg:grid-cols-3">
                        <div class="lg:col-span-2">
                            <h3 class="text-2xl font-semibold mb-3" style="color:#0F2748">Warranty & Managed Services
                            </h3>
                            <p class="text-gray-600 mb-6">
                                Centralized ticketing, spare-part claim for ink & toner, and Maintenance Contracts (SLA)
                                that keep your
                                operation running.
                            </p>
                            <ul class="grid sm:grid-cols-2 gap-4 text-gray-700">
                                <li class="flex items-start gap-3">
                                    <span class="mt-1 inline-block h-2.5 w-2.5 rounded-full bg-orange-500"></span>
                                    <div>
                                        <div class="font-semibold">Ink/Toner Claim Handling</div>
                                        <div class="text-gray-600">Official brand workflow & documentation.</div>
                                    </div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-1 inline-block h-2.5 w-2.5 rounded-full bg-orange-500"></span>
                                    <div>
                                        <div class="font-semibold">Maintenance Contract</div>
                                        <div class="text-gray-600">Preventive & corrective—custom SLA and reporting.
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="lg:pl-8">
                            <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=1200&auto=format&fit=crop"
                                alt="Helpdesk"
                                class="w-full aspect-[4/3] object-cover rounded-xl shadow ring-1 ring-black/5">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- CTA band --}}
        <div class="mt-14" style="background-color:#0F2748">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10 text-white">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                    <div>
                        <h3 class="text-2xl font-semibold">Need service or installation support?</h3>
                        <p class="text-white/80">Talk to our certified team—on-site, pick-up, or remote assistance.</p>
                    </div>
                    <a href="{{ url('/contact') }}"
                        class="inline-flex items-center rounded-lg bg-orange-500 hover:bg-orange-600 px-5 py-3 font-semibold shadow">
                        Book a Service
                    </a>
                </div>
            </div>
        </div>

        {{-- FAQ --}}
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
            <h3 class="text-2xl font-semibold mb-6" style="color:#0F2748">Frequently Asked Questions</h3>

            <div class="divide-y divide-slate-200 rounded-2xl border border-slate-200 bg-white shadow-sm">
                <template x-for="(f,i) in faqs" :key="i">
                    <div x-data="{ open: false }" class="p-5 sm:p-6">
                        <button @click="open=!open" class="w-full text-left flex items-center justify-between">
                            <span class="font-medium text-gray-900" x-text="f.q"></span>
                            <svg :class="open ? 'rotate-180' : ''" class="h-5 w-5 text-gray-500 transition"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" x-collapse class="mt-3 text-gray-600" x-text="f.a"></div>
                    </div>
                </template>
            </div>
        </div>
    </section>


</x-layout>
