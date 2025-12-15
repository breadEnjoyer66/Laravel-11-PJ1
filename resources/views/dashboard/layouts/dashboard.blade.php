<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>{{ $title }} | Dashboard PJ-Tech</title>
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .ck-editor__editable_inline {
            min-height: 300px;

            /* you can increase this value */
        }
    </style>
</head>

<body class="min-h-screen bg-gray-50 text-gray-800">
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <!-- Global toast container -->
        <div id="globalToast" class="fixed top-16 right-6 z-50 hidden">
            <div id="globalToastMessage" class="max-w-sm px-4 py-3 rounded shadow flex items-start space-x-3">
                <div class="flex-1" id="globalToastText"></div>
                <button id="globalToastClose" class="font-bold">&times;</button>
            </div>
        </div>
        <nav
            class="bg-white border-b border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
            <div class="flex flex-wrap justify-between items-center">
                <div class="flex justify-start items-center">
                    <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation"
                        aria-controls="drawer-navigation"
                        class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg aria-hidden="true" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Toggle sidebar</span>
                    </button>
                    <a href="/dashboard" class="flex items-center justify-between mr-4">
                        <span
                            class="hidden md:block self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Admin
                            Dashboard</span>
                    </a>

                </div>
                <div class="flex items-center lg:order-2">
                    <a href="/" class="hover:text-primary-500 hover:mr-2 duration-200">view site</a>

                    <button type="button"
                        class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="{{ asset('img/user-icon.png') }}" alt="user photo" />
                    </button>

                    <!-- Dropdown menu user -->
                    <div class="hidden z-50 my-4 w-56 text-base list-none bg-white divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl"
                        id="dropdown">
                        <div class="py-3 px-4">
                            <span
                                class="block text-sm font-semibold text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                            <span
                                class="block text-sm text-gray-900 truncate dark:text-white">{{ Auth::user()->email }}</span>
                        </div>
                        <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
                            <li>
                                <a href="{{ route('dashboard.profile.index') }}"
                                    class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">My
                                    profile</a>
                            </li>
                        </ul>
                        <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 w-full">
                                        Sign out
                                        <svg class="ml-2 w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                                        </svg>

                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>

        <!-- Sidebar -->

        <aside
            class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
            aria-label="Sidenav" id="drawer-navigation">
            <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">

                <ul class="space-y-2">
                    {{-- dashboard --}}
                    <li>
                        <a href="/dashboard"
                            class="flex items-center p-2 text-base text-gray-600 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="w-5 h-5 text-gray-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m7 10 1.99994 1.9999-1.99994 2M12 5v14M5 4h14c.5523 0 1 .44772 1 1v14c0 .5523-.4477 1-1 1H5c-.55228 0-1-.4477-1-1V5c0-.55228.44772-1 1-1Z" />
                            </svg>



                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>

                    {{-- berita --}}
                    <li>
                        <button type="button"
                            class="flex items-center p-2 w-full text-base text-gray-600 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="dropdown-news" data-collapse-toggle="dropdown-news">
                            <svg class="w-5 h-5 text-gray-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 13h3.439a.991.991 0 0 1 .908.6 3.978 3.978 0 0 0 7.306 0 .99.99 0 0 1 .908-.6H20M4 13v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-6M4 13l2-9h12l2 9M9 7h6m-7 3h8" />
                            </svg>


                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Berita</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-news" class="hidden">
                            <li>
                                <a href="/dashboard/news"
                                    class="flex items-center p-2 pl-11 w-full text-sm text-gray-500 rounded-lg transition duration-75 group hover:bg-gray-100">Semua
                                    Artikel</a>
                            </li>
                            <li>
                                <a href="/dashboard/news/create"
                                    class="flex items-center p-2 pl-11 w-full text-sm text-gray-500 rounded-lg transition duration-75 group hover:bg-gray-100">Buat
                                    Artikel</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-2 pl-11 w-full text-sm text-gray-500 rounded-lg transition duration-75 group hover:bg-gray-100">Categories</a>
                            </li>
                        </ul>
                    </li>

                    {{-- lamaran kerja --}}
                    <li>
                        <button type="button"
                            class="flex items-center p-2 w-full text-base text-gray-600 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="dropdown-lamaran" data-collapse-toggle="dropdown-lamaran">
                            <svg class="w-5 h-5 text-gray-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M14.7141 15h4.268c.4043 0 .732-.3838.732-.8571V3.85714c0-.47338-.3277-.85714-.732-.85714H6.71411c-.55228 0-1 .44772-1 1v4m10.99999 7v-3h3v3h-3Zm-3 6H6.71411c-.55228 0-1-.4477-1-1 0-1.6569 1.34315-3 3-3h2.99999c1.6569 0 3 1.3431 3 3 0 .5523-.4477 1-1 1Zm-1-9.5c0 1.3807-1.1193 2.5-2.5 2.5s-2.49999-1.1193-2.49999-2.5S8.8334 9 10.2141 9s2.5 1.1193 2.5 2.5Z" />
                            </svg>


                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Lamaran Kerja</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-lamaran" class="hidden">
                            <li>
                                <a href="{{ route('dashboard.job-applications.index') }}"
                                    class="flex items-center p-2 pl-11 w-full text-sm text-gray-500 rounded-lg transition duration-75 group hover:bg-gray-100">Form
                                    Masuk</a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard.open-positions.index') }}"
                                    class="flex items-center p-2 pl-11 w-full text-sm text-gray-500 rounded-lg transition duration-75 group hover:bg-gray-100">Posisi
                                    Tersedia</a>
                            </li>
                        </ul>
                    </li>


                    {{-- tambah admin --}}
                    <li>
                        <a href="{{ route('register') }}"
                            class="flex items-center p-2 w-full text-base text-gray-600 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <svg class="w-5 h-5 text-gray-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M16 12h4m-2 2v-4M4 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Tambah Admin</span></a>
                    </li>

                    {{-- Web Content --}}
                    <li>
                        <button type="button"
                            class="flex items-center p-2 w-full text-base text-gray-600 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="dropdown-web-content" data-collapse-toggle="dropdown-web-content">
                            <svg class="w-5 h-5 text-gray-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 15v3c0 .5523.44772 1 1 1h8v-8m-9 4v-4m0 4h9m-9-4V6c0-.55228.44772-1 1-1h16c.5523 0 1 .44772 1 1v4M3 11h11m6.25 5c0 1.2426-1.0073 2.25-2.25 2.25M20.25 16c0-1.2426-1.0073-2.25-2.25-2.25M20.25 16H21m-3 2.25c-1.2426 0-2.25-1.0074-2.25-2.25M18 18.25V19m-2.25-3c0-1.2426 1.0074-2.25 2.25-2.25M15.75 16H15m3-2.25V13m-1.591 1.409-.5303-.5303m4.2426 4.2426-.5303-.5303m-3.182 0-.5303.5303m4.2426-4.2426-.5303.5303" />
                            </svg>



                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Web Content</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-web-content" class="hidden">
                            <li>
                                <a href="{{ route('dashboard.awards.index') }}"
                                    class="flex items-center p-2 pl-11 w-full text-sm text-gray-500 rounded-lg transition duration-75 group hover:bg-gray-100">Awards
                                    & Certifications</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-2 pl-11 w-full text-sm text-gray-500 rounded-lg transition duration-75 group hover:bg-gray-100">Brand
                                    Partner</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-2 pl-11 w-full text-sm text-gray-500 rounded-lg transition duration-75 group hover:bg-gray-100">Team
                                    Member</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center p-2 pl-11 w-full text-sm text-gray-500 rounded-lg transition duration-75 group hover:bg-gray-100">Testimonies</a>
                            </li>
                        </ul>
                    </li>



                </ul>

            </div>

        </aside>


        <main class="p-4 md:ml-64 h-auto pt-16">
            {{-- content goes here --}}
            @yield('content')
        </main>
    </div>



    <!-- Alpine -->
    <script src="//unpkg.com/alpinejs" defer></script>

    @stack('scripts')

    <script>
        // Toast helper
        function showGlobalToast(message, timeout = 4000, type = 'success') {
            const container = document.getElementById('globalToast');
            const messageBox = document.getElementById('globalToastMessage');
            const text = document.getElementById('globalToastText');
            const close = document.getElementById('globalToastClose');

            // reset classes
            messageBox.className = 'max-w-sm px-4 py-3 rounded shadow flex items-start space-x-3';

            // apply type classes
            if (type === 'success') {
                messageBox.classList.add('bg-green-50', 'border', 'border-green-100', 'text-green-800');
            } else if (type === 'error') {
                messageBox.classList.add('bg-red-50', 'border', 'border-red-100', 'text-red-800');
            } else if (type === 'info') {
                messageBox.classList.add('bg-blue-50', 'border', 'border-blue-100', 'text-blue-800');
            }

            text.innerText = message;
            container.classList.remove('hidden');

            const hide = () => container.classList.add('hidden');
            const timer = setTimeout(hide, timeout);

            close.addEventListener('click', () => {
                clearTimeout(timer);
                hide();
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            // If there's a flash message, show it as a toast (supports success/error/info)
            @if (session('success'))
                showGlobalToast(@json(session('success')), 4000, 'success');
            @endif
            @if (session('error'))
                showGlobalToast(@json(session('error')), 6000, 'error');
            @endif
            @if (session('info'))
                showGlobalToast(@json(session('info')), 4000, 'info');
            @endif
        });
    </script>


</body>

</html>
