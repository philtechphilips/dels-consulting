@extends('layouts.app')

@section('content')
    <section class=" swiper">
        <div class="swiper-wrapper">
            <div
                class="w-full  swiper-slide flex md:flex-row gap-6 flex-col items-center justify-between min-h-screen md:px-24 px-5 py-20">
                <div class="flex flex-col gap-3 items-center md:items-start md:w-1/2 w-full">
                    <h4 class="font-bold text-[#0454CB] text-sm md:text-left  text-center z-[10000]">Digital Marketing
                    </h4>
                    <h1
                        class="font-bold md:text-[48px] text-2xl  md:text-left text-center leading-[40px] md:leading-[70px] z-[10000]">
                        Regardless of the company size, we’ve got the right <span class="text-[#0454CB]">Digital
                            solution</span> for you</h1>
                    <p class="md:text-lg text-[#4F4F4F] md:text-left text-center mb-4">We’re an end-to-end digital agency
                        putting companies like yours ahead of their competition.</p>
                    <a href="" class="bg-[#0454CB] w-fit py-3 px-8 text-white rounded-lg font-bold text-sm">Get
                        Started
                        Today</a>
                </div>
                <div class="md:w-1/2 w-full flex justify-end">
                    <img class="text-right" src="{{ asset('images/2106.w013.n001.488B.p15.488 [Converted] 1.png') }}"
                        width="480">
                </div>

                <div class="absolute hidden md:flex z-0 top-[200px]">
                    <img src="{{ asset('images/Abstract Scratch Dash Line Rain.png') }}">
                </div>
            </div>

            <div
            class="w-full  swiper-slide flex md:flex-row gap-6 flex-col items-center justify-between min-h-screen md:px-24 px-5 py-20">
            <div class="flex flex-col gap-3 items-center md:items-start md:w-1/2 w-full">
                <h4 class="font-bold text-[#0454CB] text-sm md:text-left  text-center z-[10000]">Web Design and
                    Development</h4>
                <h1
                    class="font-bold md:text-[48px] text-2xl  md:text-left text-center leading-[40px] md:leading-[70px] z-[10000]">
                    We <span class="text-[#0454CB]">design and develop websites</span> that look incredible and perform
                    even better.</h1>
                <p class="md:text-lg text-[#4F4F4F] text-sm md:text-left text-center mb-4">We’re an end-to-end digital agency
                    putting companies like yours ahead of their competition.</p>
                <a href="" class="bg-[#0454CB] w-fit py-3 px-8 text-white rounded-lg font-bold text-sm">Get
                    Started
                    Today</a>
            </div>
            <div class="md:w-1/2 w-full flex justify-end">
                <img class="text-right" src="{{ asset('images/OBJECTS.png') }}"
                width="480">
            </div>

            <div class="absolute hidden md:flex z-0 top-[200px]">
                <img src="{{ asset('images/Abstract Scratch Dash Line Rain.png') }}">
            </div>
        </div>

            <div
                class="w-full  swiper-slide flex md:flex-row gap-6 flex-col items-center justify-between min-h-screen md:px-24 px-5 py-20">
                <div class="flex flex-col gap-3 items-center md:items-start md:w-1/2 w-full">
                    <h4 class="font-bold text-[#0454CB] text-sm md:text-left  text-center z-[10000]">Mobile App</h4>
                    <h1
                        class="font-bold md:text-[48px] text-2xl  md:text-left text-center leading-[40px] md:leading-[70px] z-[10000]">
                        Custom <span class="text-[#0454CB]">mobile application </span> development by our expert developers
                    </h1>
                    <p class="md:text-lg text-[#4F4F4F] md:text-left text-center mb-4">We’re an end-to-end digital agency
                        putting companies like yours ahead of their competition.</p>
                    <a href="" class="bg-[#0454CB] w-fit py-3 px-8 text-white rounded-lg font-bold text-sm">Get
                        Started
                        Today</a>
                </div>
                <div class="md:w-1/2 w-full flex justify-end">
                    <img class="text-right" src="{{ asset('images/Frame 1773.png') }}"
                        width="480">
                </div>

                <div class="absolute hidden md:flex z-0 top-[200px]">
                    <img src="{{ asset('images/Abstract Scratch Dash Line Rain.png') }}">
                </div>
            </div>

         
        </div>
        <div class="swiper-pagination"></div>
    </section>
@endsection


@section('script')
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
@endsection
