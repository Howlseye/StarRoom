<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/login.scss', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    @if (Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register')
        <!-- Custom Login Layout -->
        <div class="login-wrapper">
            <div class="login-container">
                <div class="login-left">
                    <div class="illustration">🏨</div>
                    <div class="brand-logo">StarRoom</div>
                    <div class="brand-tagline">Your Perfect Stay Awaits</div>
                    <ul class="features">
                        <li>Easy Booking</li>
                        <li>Best Prices</li>
                        <li>24/7 Support</li>
                    </ul>
                </div>
                <div class="login-right">
                    {{ $slot }}
                </div>
            </div>
        </div>
    @else
        <!-- Default Guest Layout -->
        <div class="min-h-screen flex flex-col justify-center items-center bg-gray-100">
            <div class="w-full max-w-md px-6 py-4 bg-white shadow-md sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    @endif

</body>

</html>
