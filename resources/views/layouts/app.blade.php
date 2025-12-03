<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'StarRoom')</title>

    <!-- Vite Assets -->
    @vite(['resources/sass/.scss', 'resources/js/app.js'])

    <!-- Additional Styles -->
    @stack('styles')
</head>

<body class="@yield('body-class', '')">
    <!-- Skip to main content -->
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <!-- Main Content -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- Additional Scripts -->
    @stack('scripts')
</body>

</html>
