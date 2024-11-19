<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Admin') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @yield('styles')
    </head>
    <body  data-theme="light" class="font-sans antialiased dark:bg-black">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('admin.layouts.navigation')
            <!-- Page Content -->
            <main>
                
                @yield('content')
            </main>
        </div>

        @stack('scripts')
    </body>
</html>
