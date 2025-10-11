<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Primajaya Dashboard' }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex min-h-screen items-center">
        {{-- Optional navbar --}}
        <main class="flex-grow container mx-auto p-6">
            @yield('content')

            <footer class="text-center py-4 text-gray-500 text-sm">
                &copy; {{ date('Y') }} PT Primajaya Multi Technology
            </footer>
        </main>


    </div>
</body>

</html>
