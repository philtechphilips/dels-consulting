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
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>


    {{-- Hero Swiper --}}


    <script>
        const swipers = new Swiper('.swiper-2', {
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 10000,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            navigation: {
                nextEl: '.tes-control-right',
                prevEl: '.tes-control-left',
            },
        });
    </script>


    <script>
        const swipers1 = new Swiper('.swiper-3', {
            direction: 'horizontal',
            spaceBetween: 20,
            loop: true,
        });
    </script>

@endsection
