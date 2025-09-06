<nav class="bg-white border-b sticky top-0 z-50" x-data="{ isOpen: false }">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo left -->
            <div class="flex items-center h-full">
                <div class="shrink-0">
                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                        alt="Your Company" class="size-8" />
                </div>
            </div>
            <!-- Nav menu right -->
            <div class="hidden md:flex h-full items-center flex-1 justify-end">
                <div class="flex items-center space-x-4 h-full">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                    <x-nav-link href="/news" :active="request()->is('news')">News</x-nav-link>
                    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                    <x-nav-link href="/career" :active="request()->is('career')">Career</x-nav-link>
                </div>
            </div>
            <!-- Profile dropdown (optional, right of menu) -->
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <!-- Profile dropdown with Alpine.js -->
                    {{-- ...existing code... --}}
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
                    class="absolute top-16 left-0 w-full z-20 bg-white md:hidden">
                    <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3 border-y">
                        <x-m-nav-link href="/" :active="request()->is('/')">Home</x-m-nav-link>
                        <x-m-nav-link href="/about" :active="request()->is('about')">About</x-m-nav-link>
                        <x-m-nav-link href="/news" :active="request()->is('news')">News</x-m-nav-link>
                        <x-m-nav-link href="/contact" :active="request()->is('contact')">Contact</x-m-nav-link>
                        <x-m-nav-link href="/career" :active="request()->is('career')">Career</x-m-nav-link>
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
