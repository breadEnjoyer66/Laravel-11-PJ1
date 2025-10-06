<!DOCTYPE html>
<html lang="en" class="h-full scroll-smooth bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <title>{{ $title }} | Primajaya Multi Technology</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        footer * {
            /* border: 1px solid gray; */
        }
    </style>
</head>

<body class="h-full">
    <a href="#top"
        class="z-10 fixed bottom-20 right-0 p-2 hover:pr-5 transition-all duration-200 rounded-l-xl bg-slate-800 hover:bg-primary-600 bg-opacity-70"
        id="back-to-top">
        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 6v13m0-13 4 4m-4-4-4 4" />
        </svg>

    </a>
    <div class="min-h-full" id="top">
        <x-navbar></x-navbar>

        <x-header>{{ $title }}</x-header>

        <main>
            {{ $slot }}
        </main>
    </div>

    <x-page-footer></x-page-footer>
</body>


</html>
