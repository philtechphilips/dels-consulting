<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ getenv('APP_NAME') }} | Web Application - UI/UX - Career</title>
    <meta name="description"
        content="We power the world with energy and innovation by embracing a future with clean energy, efficiency, and progress to illuminate a brighter tomorrow.">
    <meta name="keywords" content="Dels, Dels Consulting, Website, Mobile App, Digital Marketing, SEO, Consultant">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('/images/DELS Main Logo.png') }}" sizes="any">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset("css/mod-swiper.css") }}">
    <link rel="stylesheet" href="{{ asset("css/mod-swiper-3.css") }}">

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

    {{-- Toggle Mobile Navigation  --}}
    <script>
        const toggleButton = document.querySelectorAll('.menuButton');
        const menu = document.getElementById('menu');

        toggleButton.forEach(function(button) {
            button.addEventListener('click', function() {
                menu.classList.toggle('translate-x-[500px]');
            })
        });
    </script>
    {{-- Toggle Mobile Navigation --}}


    {{-- Active Page --}}
    <script>
        var currentPage = window.location.pathname;

        document.querySelectorAll('.list li').forEach(function(li) {

            var link = li.querySelector('a');
            console.log(link)
            if (link.getAttribute('href') === currentPage) {
                li.querySelector('a').style.color = '#0454CB';
            } else {
                li.querySelector('a').style.color = '#828282';
            }
        });
    </script>
    {{-- Active Page --}}

    {{-- Service Dropdown --}}
    <script>
        const toggleDropdown = () => {
            const dropdown = document.getElementById("service_dropdown");
            dropdown.classList.toggle("service-hidden");
        }
    </script>
    {{-- Service Dropdown --}}

      <!-- Accordion Script -->
      <script>
        const accordions = document.getElementsByClassName("accordion");

        for (let i = 0; i < accordions.length; i++) {
            accordions[i].addEventListener("click", function() {
                this.classList.toggle("active");
                const icon = this.querySelector(".accordion-top i");
                if (this.classList.contains("active")) {
                    icon.classList.replace("ri-arrow-down-s-line", "ri-arrow-up-s-line");
                } else {
                    icon.classList.replace("ri-arrow-up-s-line", "ri-arrow-down-s-line");
                }
            });
        }
    </script>
    <!-- Accordion script Ends Here -->

    @yield('script')
</body>

</html>
