@extends('layouts.app')

@section('content')
    @include('includes.home.hero')

    @include('includes.home.about')

    @include('includes.home.services')

    @include('includes.home.choose')

    @include('includes.home.contact')

    @include('includes.home.blog')

    @include('includes.home.testimonial')

    @include('includes.home.faq')
@endsection


@section('script')
    {{-- Hero Swiper --}}
    <script>
        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 5000,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            pagination: {
                el: '.swiper-pagination',
            },


            navigation: {
                nextEl: '.swiper-pagination',
                prevEl: '.swiper-pagination',
            },

        });
    </script>
    {{-- Hero Swiper --}}


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
@endsection
