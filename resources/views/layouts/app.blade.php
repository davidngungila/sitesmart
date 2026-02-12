<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'SiteSmart - Construction Project Management System')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700&display=swap" rel="stylesheet" />
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>
<body>
    <!-- Mobile Overlay -->
    <div id="mobile-overlay" class="mobile-overlay"></div>
    
    <!-- Sidebar -->
    @include('partials.sidebar')
    
    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <!-- Top Header -->
        @include('partials.header')
        
        <!-- Content Wrapper -->
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>
    
    @stack('scripts')
</body>
</html>
