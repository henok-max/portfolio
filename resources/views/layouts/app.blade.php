<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Scripts -->
</head>

<body class="font-sans antialiased bg-gradient-to-br from-gray-50 to-blue-50">
    <div class="flex flex-col min-h-screen">
        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="shadow-sm bg-white/80 backdrop-blur-md">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold text-gray-900">{{ $header }}</h1>
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main class="flex-1" style="scroll-margin-top: 6rem">
            <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="space-y-16">
                    @yield('content')
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="mt-24 text-white bg-gradient-to-r from-blue-600 to-purple-600">
            <div class="px-4 py-8 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-sm text-center opacity-90">
                    <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>

                </div>
            </div>
        </footer>
    </div>
    <script src="https://unpkg.com/alpinejs" defer></script>

</body>

</html>