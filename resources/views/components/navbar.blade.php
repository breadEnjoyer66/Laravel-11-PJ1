<div class="border-b">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex justify-end py-2">
        <a href="" class="text-sm text-gray-400 hover:text-primary-400 flex">
            <svg class="mr-1 w-[19px] h-[19px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="none" viewBox="0 0 24 24">
                <path fill="currentColor" fill-rule="evenodd"
                    d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                    clip-rule="evenodd" />
                <path fill="currentColor"
                    d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
            </svg>
            0821 2935 5555
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
                            class="size-28" /></a>
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
                    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                    <x-nav-link href="/career" :active="request()->is('career')">Career</x-nav-link>
                </div>
            </div>
            <!-- Profile dropdown (optional, right of menu) -->

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
                    class="absolute top-24 left-0 w-full z-20 bg-white md:hidden">
                    <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3 border-y">
                        <x-m-nav-link href="/" :active="request()->is('/')">Home</x-m-nav-link>
                        <x-m-nav-link href="/about" :active="request()->is('about')">About</x-m-nav-link>
                        <x-m-nav-link href="/our-business" :active="request()->is('our-business')">Our Business</x-m-nav-link>
                        <x-m-nav-link href="/service-center" :active="request()->is('service-center')">Service Center</x-m-nav-link>
                        <x-m-nav-link href="/warranty" :active="request()->is('warranty')">Warranty</x-m-nav-link>
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
