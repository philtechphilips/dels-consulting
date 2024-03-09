<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ getenv('APP_NAME') }} | Web Application - UI/UX - Career</title>
    <meta name="description"
        content="We power the world with energy and innovation by embracing a future with clean energy, efficiency, and progress to illuminate a brighter tomorrow.">
    <meta name="keywords"
        content="Maryson Energy, Exceptional energy solutions, Gas Energy, Power Energy, Maryson, Energy, Power.">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("styles/global.css")}}">
    <link rel="icon" type="image/png" href="{{ asset("assets/images/Maryson Logo.png") }}" sizes="any">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite('resources/css/app.css')
 <!-- Styles -->
</head>
<body>
    <div id="app">
        <main class="bg-[#F5F5F7]">
            @include('includes.navbar')
            @yield('content')
            @include('includes.footer')
        </main>
    </div>

     {{-- Swiper JS --}}
     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
     {{-- Swiper JS --}}

     @yield("script")
</body>
</html>
