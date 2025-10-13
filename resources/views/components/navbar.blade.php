<div class="hidden lg:block border-b border-slate-100 bg-white">
    <div class="mx-auto max-w-7xl flex justify-between py-2 items-center px-4 sm:px-6 lg:px-8">
        <a href="https://wa.me/6281380009898"
            class="text-sm text-gray-500 hover:text-blue-500 hover:underline duration-100 flex" target="_blank">
            <svg class="mr-1 w-[20px] h-[20px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z" />
            </svg>
            0813 8000 9898
        </a>

        <a href="mailto:corporate:pj-tech.com"
            class="text-sm text-gray-500 hover:text-blue-500 hover:underline duration-100 flex">
            <svg class="mr-1 w-[19px] h-[19px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                    d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
            </svg>

            corporate@pj-tech.com
        </a>
    </div>
</div>
<nav class="bg-white border-b sticky top-0 z-50" x-data="{ isOpen: false }">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-24 items-center justify-between">
            <!-- Logo left -->
            <div class="flex items-center h-full">
                <div class="shrink-0">
                    <a href="/"><img src="{{ asset('img/pmt-logo-blue.png') }}" alt="Primajaya Multi Technology"
                            class="size-24 md:size-28" /></a>
                </div>
            </div>
            <!-- Nav menu right -->
            <div class="hidden md:flex h-full items-center flex-1 justify-end">
                <div class="flex items-center space-x-4 h-full">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                    <x-nav-link href="/our-business" :active="request()->is('our-business')">Our Business</x-nav-link>
                    <x-nav-link href="/service-center" :active="request()->is('service-center')">Service Center</x-nav-link>
                    <x-nav-link href="/warranty" :active="request()->is('warranty')">Warranty</x-nav-link>
                    <x-nav-link href="/news" :active="request()->is('news')">News</x-nav-link>
                    {{-- <x-nav-link href="/career" :active="request()->is('career')">Career</x-nav-link> --}}
                    {{-- <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link> --}}
                    <a href="/contact"
                        class="flex gap-2 hover:mb-2 transition-all duration-250 bg-gradient-to-b from-yellow-500 to bg-orange-600 hover:bg-gradient-to-r rounded-xl py-4 px-5 font-semibold text-sm text-white">
                        <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.079 6.839a3 3 0 0 0-4.255.1M13 20h1.083A3.916 3.916 0 0 0 18 16.083V9A6 6 0 1 0 6 9v7m7 4v-1a1 1 0 0 0-1-1h-1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1Zm-7-4v-6H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h1Zm12-6h1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-1v-6Z" />
                        </svg>
                        Contact</a>
                </div>
            </div>


            <div class="-mr-2 flex md:hidden" x-data="{ open: false }">
                <!-- Mobile menu button -->
                <button @click="open = !open" type="button"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:text-gray-600 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg x-show="!open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                        data-slot="icon" aria-hidden="true" class="size-6">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <svg x-show="open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                        data-slot="icon" aria-hidden="true" class="size-6">
                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <!-- Mobile menu, show/hide based on menu state. -->
                <div x-show="open" @click.away="open = false" x-transition
                    class="absolute top-24 left-0 w-full z-20 bg-white border-t-2 border-primary-500 md:hidden">
                    <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3 border-y">
                        <x-m-nav-link href="/" :active="request()->is('/')">Home</x-m-nav-link>
                        <x-m-nav-link href="/about" :active="request()->is('about')">About</x-m-nav-link>
                        <x-m-nav-link href="/our-business" :active="request()->is('our-business')">Our Business</x-m-nav-link>
                        <x-m-nav-link href="/service-center" :active="request()->is('service-center')">Service Center</x-m-nav-link>
                        <x-m-nav-link href="/warranty" :active="request()->is('warranty')">Warranty</x-m-nav-link>
                        <x-m-nav-link href="/news" :active="request()->is('news')">News</x-m-nav-link>
                        <x-m-nav-link href="/contact" :active="request()->is('contact')">Contact</x-m-nav-link>
                        {{-- <x-m-nav-link href="/career" :active="request()->is('career')">Career</x-m-nav-link> --}}
                    </div>
                    {{-- <div class="border-t border-white/10 pt-4 pb-3">
                        <div class="flex items-center px-5">
                            <div class="shrink-0">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt=""
                                    class="size-10 rounded-full outline -outline-offset-1 outline-white/10" />
                            </div>
                            <div class="ml-3">
                                <div class="text-base/5 font-medium text-white">Tom Cook</div>
                                <div class="text-sm font-medium text-gray-400">tom@example.com</div>
                            </div>
                        </div>
                        <div class="mt-3 space-y-1 px-2">
                            <a href="#"
                                class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Your
                                profile</a>
                            <a href="#"
                                class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Settings</a>
                            <a href="#"
                                class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white">Sign
                                out</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

</nav>
