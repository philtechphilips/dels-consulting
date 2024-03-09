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


    <section class="w-full py-28 flex md:flex-row flex-col relative">
        <div class="bg-[#CDDDF5] md:rounded-r-full px-5 md:pl-16 md:pr-28 py-28 md:w-[750px] flex flex-col md:justify-start md:items-start justify-center items-center">
            <h1 class="md:text-4xl text-3xl font-bold text-[#010101] md:text-left text-center">Welcome To <span class="text-[#0454CB]">DELS CONSULTING</span></h1>
            <p class="mt-4 text-lg font-medium  md:text-left text-center">At <span class="text-[#0454CB]">DELS Consulting</span>, we have a professional team to help you grow your business. Want to know how? Click on the link below and learn more from us how we can help you!</p>
            <a href="" class="text-center bg-[#0454CB] rounded-full px-12 text-sm font-medium mt-4 py-2 w-fit text-white flex items center">Learn More <i class="ri-arrow-right-s-line mt-[1px]"></i></a>
        </div>

        <div class="md:flex gap-4 items-center -ml-28 hidden">
            <div>
                <img src="{{ asset("images/business-owner-working-their-strategy 1.png")}}" width="350">
            </div>

            <div class="flex flex-col gap-4">
                <img src="{{ asset("images/business-owner-working-their-strategy (2) 1.png")}}"  class="z-10">
                <img src="{{ asset("images/business-owner-working-their-strategy (3) 1.png")}}" class="z-10">
            </div>
        </div>

        <div class=" absolute w-[250px] top-0 z-0 right-0 hidden md:flex">
            <img src="{{ asset("images/54545454 3.png") }}" class="z-0" width="250" >
        </div>
        <div class=" absolute w-[250px] top-24 z-0 -right-[50px] hidden md:flex">
            <img src="{{ asset("images/Vector.png") }}" class="z-0" width="30" >
        </div>
        <div class=" absolute w-[250px] bottom-40 z-0 -right-[104px] hidden md:flex">
            <img src="{{ asset("images/Vector.png") }}" class="z-0" width="20" >
        </div>
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
