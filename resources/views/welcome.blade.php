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
                    <p class="md:text-lg text-[#4F4F4F] text-sm md:text-left text-center mb-4">We’re an end-to-end digital
                        agency
                        putting companies like yours ahead of their competition.</p>
                    <a href="" class="bg-[#0454CB] w-fit py-3 px-8 text-white rounded-lg font-bold text-sm">Get
                        Started
                        Today</a>
                </div>
                <div class="md:w-1/2 w-full flex justify-end">
                    <img class="text-right" src="{{ asset('images/OBJECTS.png') }}" width="480">
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
                    <img class="text-right" src="{{ asset('images/Frame 1773.png') }}" width="480">
                </div>

                <div class="absolute hidden md:flex z-0 top-[200px]">
                    <img src="{{ asset('images/Abstract Scratch Dash Line Rain.png') }}">
                </div>
            </div>


        </div>
        <div class="swiper-pagination"></div>
    </section>

    <section class="w-full py-28 flex md:flex-row flex-col relative">
        <div
            class="bg-[#CDDDF5] md:rounded-r-full px-5 md:pl-16 md:pr-28 py-28 md:w-[750px] flex flex-col md:justify-start md:items-start justify-center items-center">
            <h1 class="md:text-4xl text-3xl font-bold text-[#010101] md:text-left text-center">Welcome To <span
                    class="text-[#0454CB]">DELS CONSULTING</span></h1>
            <p class="mt-4 text-lg font-medium  md:text-left text-center">At <span class="text-[#0454CB]">DELS
                    Consulting</span>, we have a professional team to help you grow your business. Want to know how? Click
                on the link below and learn more from us how we can help you!</p>
            <a href=""
                class="text-center bg-[#0454CB] rounded-full px-12 text-sm font-medium mt-4 py-2 w-fit text-white flex items center">Learn
                More <i class="ri-arrow-right-s-line mt-[1px]"></i></a>
        </div>

        <div class="md:flex gap-4 items-center -ml-28 hidden">
            <div>
                <img src="{{ asset('images/business-owner-working-their-strategy 1.png') }}" width="350">
            </div>

            <div class="flex flex-col gap-4">
                <img src="{{ asset('images/business-owner-working-their-strategy (2) 1.png') }}" class="z-10">
                <img src="{{ asset('images/business-owner-working-their-strategy (3) 1.png') }}" class="z-10">
            </div>
        </div>

        <div class=" absolute w-[250px] top-0 z-0 right-0 hidden md:flex">
            <img src="{{ asset('images/54545454 3.png') }}" class="z-0" width="250">
        </div>
        <div class=" absolute w-[250px] top-24 z-0 -right-[50px] hidden md:flex">
            <img src="{{ asset('images/Vector.png') }}" class="z-0" width="30">
        </div>
        <div class=" absolute w-[250px] bottom-40 z-0 -right-[104px] hidden md:flex">
            <img src="{{ asset('images/Vector.png') }}" class="z-0" width="20">
        </div>
    </section>

    <section class="w-full md:pr-24 pr-5 md:py-14 pb-28 flex flex-col md:flex-row items-center gap-10">
        <div class="md:w-1/2">
            <img src="{{ asset("images/mobile-apps.png") }}">
        </div>

        <div class="flex flex-col items-center md:items-start gap-2 md:w-1/2 px-5">
            <h1 class="md:text-4xl text-3xl font-bold text-center">Amazing & Beautiful apps!</h1>
            <p class="md:text-lg font-medium text-[#4F4F4F] text-center">At <span class="text-[#0454CB]">DELS Consulting</span>, we have a professional team to help you grow your business. Want to know how? Click on the link below and learn more from us how we can help you!</p>
            <a href=""
            class="text-center bg-[#0454CB] rounded-full px-20 text-sm font-medium mt-4 py-4 w-fit text-white flex gap-1 items center">See
            More <svg class="mt-1" width="8" height="14" viewBox="0 0 8 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M1 13L7 7L1 1" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </a>
        </div>
    </section>

    <section class="md:pl-24">
        <div
            class="w-full bg-[#CDDDF5] md:px-20 py-20 px-5 md:rounded-l-full relative md:py-10 gap-10 flex md:flex-row flex-col items-center md:h-[521px]">
            <div class="z-[100] md:w-[700px] w-full flex flex-col items-center gap-3">
                <h1 class="font-bold md:text-[42px] text-3xl text-center md:text-left leading-[50px] md:pr-20"><span
                        class="text-[#0454CB]">Special Ui, Ux</span> For Your Project !</h1>
                <p class="font-medium text-lg text-[#4F4F4F] text-center md:text-left">To make your business very special
                    and eye-catching, we design your website and application with a very professional team that will nail
                    the user! Want to know how? click :))</p>
                <a href=""
                    class="text-center bg-[#0454CB] rounded-full px-20 text-sm font-medium mt-4 py-4 w-fit text-white flex gap-1 items center">Read
                    More <svg class="mt-1" width="8" height="14" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 13L7 7L1 1" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
            <div class="z-[100]">
                <img class="z-[100]" src="{{ asset('images/Frame 2132.png') }}">
            </div>

            <img class="absolute hidden md:flex right-[300px] top-[110px] z-0" src="{{ asset('images/Frame 1824.png') }}">
        </div>
    </section>

    <section class="md:pr-24 flex md:flex-row flex-col-reverse md:items-center gap-10 mt-10">
        <div class="md:w-1/2 pr-5">
            <img src="{{ asset('images/Frame 1800.png') }}">
        </div>
        <div class="md:w-1/2 px-5 flex flex-col items-center md:justify-start md:items-start justify-center">
            <h1 class="font-bold md:text-5xl text-3xl mb-2"><span class="text-[#0454CB]">SEO</span> Services</h1>
            <p class="text-[#4D4F51] md:text-lg text-center md:text-left">Custom web application development by our expert
                web app developers. Front-end & design, backend, database, and server scale designed to fit your custom
                workflow.Custom mobile application development by our expert mobile app developers. From design to
                development and ongoing support. Custom built from scratch or code-takeover projects .</p>
            <a href=""
                class="text-center bg-[#0454CB] rounded-full px-20 text-sm font-medium mt-4 py-4 w-fit text-white flex gap-1 items center">Read
                More <svg class="mt-1" width="8" height="14" viewBox="0 0 8 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 13L7 7L1 1" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>
        </div>
    </section>

    <section class="md:px-24 hidden md:block px-5"
        style="background-image: url('{{ asset('images/Rectangle 164.png') }}'); background-repeat: no-repeat; background-position: center center; background-size: 1000px;">
        <div class="flex md:flex-row flex-col md:ml-36 py-40 gap-5">
            <div class="flex flex-col items-center md:items-start justify-center gap-4 mt-10 md:w-[480px]">
                <h1 class="font-bold text-4xl">Web <span class="text-[#0454CB]">Design</span></h1>
                <p class="text-[#4F4F4F] text-lg">Custom web application development by our expert web app developers.
                    Front-end & design, backend, database, and server scale designed to fit your custom workflow.
                </p>
                <a href=""
                    class="text-center bg-[#0454CB] rounded-full px-20 text-sm font-medium mt-4 py-4 text-white flex gap-1 items center">Read
                    More <svg class="mt-1" width="8" height="14" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 13L7 7L1 1" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </div>

            <div class="md:w-[650px] mt-8">
                <img src="{{ asset('images/MacBook Pro 16.png') }}" class="w-[650px]">
            </div>
        </div>
    </section>

    <section class="md:px-24 md:hidden block px-5">
        <div class="flex md:flex-row flex-col md:ml-36 md:py-40 gap-1">
            <div class="flex flex-col justify-center items-center gap-4 mt-10 md:w-[480px]">
                <h1 class="font-bold text-4xl">Web <span class="text-[#0454CB]">Design</span></h1>
                <p class="text-[#4F4F4F] text-lg text-center md:text-left">Custom web application development by our expert
                    web app developers.
                    Front-end & design, backend, database, and server scale designed to fit your custom workflow.
                </p>
                <a href=""
                    class="text-center bg-[#0454CB] rounded-full px-20 text-sm font-medium mt-4 py-4 w-fit text-white flex gap-1 items center">Read
                    More <svg class="mt-1" width="8" height="14" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 13L7 7L1 1" stroke="#FCFCFC" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </div>

            <div class="md:w-[650px] mt-8">
                <img src="{{ asset('images/MacBook Pro 16.png') }}" class="w-[650px]">
            </div>
        </div>
    </section>

    <section class="md:px-24 px-5 py-20">
        <div class="md:w-[400px] w-full flex flex-col gap-4">
            <h1 class="font-bold text-4xl text-center md:text-left">Why Choose Us?</h1>
            <p class="text-[#4D4F51] md:text-lg text-sm text-center md:text-left">We have unique features, just to name a few why you should choose us</p>
        </div>

        <div class="flex py-10 flex-wrap gap-2 justify-center">
            <div class="flex bg-[white] rounded-xl shadow-md px-3 py-5 gap-2 w-[350px]">
                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M56 28C56 25.4335 55.0571 22.9662 53.3449 21.0526C51.1126 18.5581 51.625 15.905 51.625 14.875C51.625 9.08523 46.9148 4.375 41.125 4.375C40.2778 4.375 37.4923 4.93237 34.9474 2.65519C33.0338 0.943031 30.5666 0 28 0C25.4334 0 22.9662 0.943031 21.0527 2.65508C18.514 4.92669 15.7379 4.375 14.875 4.375C8.75186 4.375 3.8862 9.62631 4.41383 15.784C4.57855 17.6992 3.93761 19.6195 2.65508 21.0527C0.942922 22.9662 0 25.4335 0 28C0 30.5665 0.942922 33.0338 2.65508 34.9474C4.88742 37.4419 4.375 40.095 4.375 41.125C4.375 47.2694 9.64917 52.114 15.7841 51.5861C17.6431 51.4263 19.5628 52.0117 21.0527 53.3448C22.9662 55.057 25.4334 56 28 56C30.5666 56 33.0338 55.057 34.9473 53.3449C37.4911 51.0688 40.2769 51.625 41.125 51.625C47.2481 51.625 52.1138 46.3737 51.5862 40.216C51.4215 38.3008 52.0624 36.3805 53.3449 34.9473C55.0571 33.0338 56 30.5665 56 28ZM50.0846 32.0299C48.001 34.3584 46.9595 37.4787 47.2271 40.5908C47.5375 44.1972 44.6861 47.25 41.125 47.25C40.408 47.25 36.0209 46.5137 32.0299 50.0846C30.9198 51.0779 29.4886 51.625 28 51.625C26.5114 51.625 25.0802 51.0779 23.97 50.0845C21.6267 47.9878 18.5346 46.9584 15.4092 47.2271C11.8031 47.5365 8.75 44.6875 8.75 41.125C8.75 40.2866 9.42681 35.954 5.91544 32.0299C4.92209 30.9198 4.375 29.4886 4.375 28C4.375 26.5114 4.92209 25.0802 5.91544 23.9701C7.99903 21.6416 9.0405 18.5213 8.77286 15.4092C8.46245 11.8028 11.3139 8.75 14.875 8.75C15.5918 8.75 19.9793 9.4862 23.9701 5.91544C25.0802 4.92209 26.5114 4.375 28 4.375C29.4886 4.375 30.9198 4.92209 32.03 5.91555C36.0306 9.49517 40.543 8.75 41.125 8.75C44.5024 8.75 47.25 11.4977 47.25 14.875C47.25 15.7134 46.5732 20.046 50.0846 23.9701C51.0779 25.0802 51.625 26.5114 51.625 28C51.625 29.4886 51.0779 30.9198 50.0846 32.0299Z"
                        fill="#0454CB" />
                    <path
                        d="M25.8125 29.2813L22.9844 26.4531L19.8906 29.5467L25.8125 35.4685L36.1094 25.1717L33.0156 22.0781L25.8125 29.2813Z"
                        fill="#0454CB" />
                    <path
                        d="M28 10.5C18.3504 10.5 10.5 18.3505 10.5 28C10.5 37.6495 18.3504 45.5 28 45.5C37.6496 45.5 45.5 37.6495 45.5 28C45.5 18.3505 37.6496 10.5 28 10.5ZM28 41.125C20.7629 41.125 14.875 35.2371 14.875 28C14.875 20.7629 20.7629 14.875 28 14.875C35.2371 14.875 41.125 20.7629 41.125 28C41.125 35.2371 35.2371 41.125 28 41.125Z"
                        fill="#0454CB" />
                </svg>
                <div class="flex flex-col gap-2">
                    <h4 class="text-[#1D1D1E] font-bold text-lg">100% satisfaction guarantee</h4>
                    <p class="text-sm">In this section, a brief description of this feature is written</p>
                </div>
            </div>

            <div class="flex bg-[white] rounded-xl shadow-md px-3 py-5 gap-2 w-[350px]">
                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M54.3594 19.3302H48.9069C48.0672 8.5307 39.0112 0 28 0C16.9888 0 7.93275 8.5307 7.09308 19.3302H1.64062C0.734562 19.3302 0 20.0647 0 20.9708V38.5438C0 39.4498 0.734562 40.1844 1.64062 40.1844H8.66983C9.57589 40.1844 10.3105 39.4498 10.3105 38.5438V20.9708C10.3105 11.2167 18.2459 3.28125 28 3.28125C37.7541 3.28125 45.6895 11.2167 45.6895 20.9708V38.5438C45.6895 44.4219 40.9072 49.2042 35.0291 49.2042H32.886C32.199 47.1638 30.269 45.6897 28 45.6897C25.1575 45.6897 22.8447 48.0023 22.8447 50.8448C22.8447 53.6874 25.1575 56 28 56C30.269 56 32.199 54.5258 32.886 52.4855H35.0291C42.1614 52.4855 48.0592 47.1015 48.8738 40.1844H54.3594C55.2654 40.1844 56 39.4498 56 38.5438V20.9708C56 20.0647 55.2654 19.3302 54.3594 19.3302ZM7.0292 36.9031H3.28125V22.6114H7.0292V36.9031ZM28 52.7188C26.9667 52.7188 26.126 51.8781 26.126 50.8448C26.126 49.8116 26.9667 48.9709 28 48.9709C29.0333 48.9709 29.874 49.8116 29.874 50.8448C29.874 51.8781 29.0333 52.7188 28 52.7188ZM52.7188 36.9031H48.9708V22.6114H52.7188V36.9031Z"
                        fill="#0454CB" />
                    <path
                        d="M40.0504 19.4551C39.4375 19.2011 38.7319 19.3413 38.2625 19.8105C38.2624 19.8105 33.1402 24.9311 30.7116 27.358C29.6208 28.4547 28.9953 29.9697 28.9953 31.5145C28.9953 32.4206 29.7299 33.1552 30.6359 33.1552H37.7818V36.7864C37.7818 37.6925 38.5164 38.427 39.4225 38.427C40.3285 38.427 41.0631 37.6925 41.0631 36.7864V33.1552H41.1797C42.0857 33.1552 42.8203 32.4206 42.8203 31.5145C42.8203 30.6085 42.0857 29.8739 41.1797 29.8739H41.0631V20.9708C41.0631 20.3073 40.6633 19.7091 40.0504 19.4551ZM37.7818 29.8739H32.8569C32.9127 29.8048 32.972 29.7385 33.0346 29.6754C34.2635 28.4474 36.1853 26.5266 37.7818 24.9306V29.8739Z"
                        fill="#0454CB" />
                    <path
                        d="M26.126 36.7863C26.126 35.8803 25.3914 35.1457 24.4853 35.1457H17.9199C17.9756 35.0766 18.0348 35.0102 18.0975 34.9472C20.5227 32.5238 25.6453 27.4028 25.6453 27.4028C25.9531 27.0952 26.1261 26.6778 26.1261 26.2426V25.364C26.1261 22.0369 23.4194 19.3301 20.0923 19.3301C16.7322 19.3301 14.0584 22.0526 14.0584 25.3621V25.3639C14.0584 26.2699 14.793 27.0036 15.699 27.0036C16.6051 27.0036 17.3397 26.2682 17.3397 25.3621C17.3397 23.8582 18.5506 22.6113 20.0923 22.6113C21.6101 22.6113 22.8448 23.8462 22.8448 25.364V25.5628C21.5145 26.8927 17.7519 30.6539 15.7746 32.6299C14.6838 33.7266 14.0584 35.2416 14.0584 36.7863C14.0584 37.6924 14.793 38.427 15.699 38.427H24.4855C25.3914 38.427 26.126 37.6925 26.126 36.7863Z"
                        fill="#0454CB" />
                </svg>

                <div class="flex flex-col gap-2">
                    <h4 class="text-[#1D1D1E] font-bold text-lg">24/7 support</h4>
                    <p class="text-sm">In this section, a brief description of this feature is written</p>
                </div>
            </div>


            <div class="flex bg-[white] rounded-xl shadow-md px-3 py-5 gap-2 w-[350px]">
                <svg width="56" height="54" viewBox="0 0 56 54" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M51.3012 5.36094C44.8324 -1.14444 34.1564 -0.821055 27.9974 5.94104C21.8379 -0.820816 11.1624 -1.14456 4.69349 5.36106C-1.73924 11.7672 -1.5201 22.3162 5.10783 28.4993C1.71697 31.7378 3.65955 37.5573 8.27489 38.1246C7.99842 41.2849 10.6883 44.1831 13.8701 44.1293C14.0652 47.6084 17.557 50.0988 20.9048 49.1793C22.0032 53.3242 27.283 54.7405 30.312 51.6899C32.0324 49.9799 33.4005 48.9016 33.4877 46.3116C36.3303 46.2324 38.7898 43.7395 38.8331 40.8986C41.703 40.8543 44.2034 38.353 44.2476 35.484C47.2248 35.4388 49.8063 32.7516 49.6677 29.7181L51.301 28.0849C57.5662 21.8199 57.5662 11.6259 51.3012 5.36094ZM7.57055 31.1143L9.10465 29.5801C9.50116 29.1836 10.0218 28.9854 10.5426 28.9854C12.3286 28.9736 13.2608 31.1816 11.9804 32.4559L10.4463 33.99C8.46052 35.8182 5.74215 33.1009 7.57055 31.1143ZM11.8482 38.5083C11.8482 37.965 12.0598 37.4543 12.4438 37.0703L13.9788 35.5355C14.3627 35.1519 14.873 34.9406 15.4158 34.9406C17.2169 34.9375 18.1298 37.1404 16.8537 38.412L15.5 39.7657C15.0863 40.2346 14.5179 40.5519 13.8816 40.5417C12.7887 40.5642 11.8255 39.6013 11.8482 38.5083ZM18.0389 45.1801C17.2501 44.4233 17.2501 43.0614 18.0389 42.3045L19.3925 40.9508C20.1817 40.0139 21.5671 39.8919 22.4489 40.7703C23.2416 41.5632 23.2416 42.853 22.4489 43.646L20.9146 45.1803C20.1219 45.9734 18.8318 45.9733 18.0389 45.1801ZM29.3074 47.617L27.7733 49.1511C27.3893 49.5352 26.8786 49.7468 26.3354 49.7468C25.7922 49.7468 25.2815 49.5352 24.8974 49.1511C24.1087 48.3941 24.1084 47.0322 24.8976 46.2754L26.4315 44.7413C27.2243 43.9484 28.5145 43.9484 29.3073 44.7411C30.0962 45.4981 30.0964 46.86 29.3074 47.617ZM45.4837 31.3054C44.7267 32.0942 43.3648 32.0943 42.6079 31.3054L34.6182 23.3157L32.0794 25.8545L40.0691 33.8442C40.8619 34.6371 40.8619 35.9271 40.0691 36.72C39.2762 37.5131 37.9862 37.5129 37.1933 36.72L29.3391 28.8658L29.2036 28.7303L26.6648 31.2691L26.8003 31.4046L34.6545 39.2588C35.4474 40.0517 35.4474 41.3418 34.6545 42.1347C33.8616 42.9276 32.5715 42.9276 31.7786 42.1347L31.7771 42.1362C30.3183 40.7259 28.2795 40.2615 26.438 40.7431C25.8518 38.3478 23.4439 36.5343 21.0225 36.5871C20.9051 34.0089 18.7254 31.6799 16.1496 31.4016C16.4895 26.9781 11.6313 23.9318 7.79735 26.1109C2.45781 21.3413 2.12892 12.9684 7.23257 7.89978C12.3069 2.78991 20.6912 3.12849 25.4588 8.47988L21.0202 12.9185L24.5768 16.4751C27.3088 19.2073 31.5188 19.5833 34.6577 17.6032L45.484 28.4296C46.2765 29.2224 46.2765 30.5125 45.4837 31.3054ZM48.7624 25.5461L48.2153 26.0931C48.153 26.0244 48.0887 25.9569 48.0226 25.8908L34.7988 12.6669L33.5294 13.9362C31.7612 15.7044 28.884 15.7047 27.1154 13.9362L26.0976 12.9185L31.1163 7.89978C43.3074 -3.32088 59.9807 13.363 48.7624 25.5461Z"
                        fill="#0454CB" />
                </svg>

                <div class="flex flex-col gap-2">
                    <h4 class="text-[#1D1D1E] font-bold text-lg">Solution over services</h4>
                    <p class="text-sm">In this section, a brief description of this feature is written</p>
                </div>
            </div>

            <div class="flex bg-[white] rounded-xl shadow-md px-3 py-5 gap-2 w-[350px]">
                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M33.25 1.75C21.6699 1.75 12.25 11.1708 12.25 22.75C12.25 27.9111 14.1299 32.6356 17.23 36.2963L14.875 38.6504L13.6445 37.4199C12.9609 36.7363 11.8552 36.7363 11.1716 37.4182L3.26929 45.3026C1.25098 47.3466 1.25098 50.6722 3.28638 52.7307C4.27589 53.7074 5.5918 54.2457 6.99146 54.2457C8.39112 54.2457 9.70704 53.7074 10.7034 52.7239L18.5955 44.8489C18.9253 44.5208 19.1099 44.0756 19.1099 43.6107C19.1099 43.1467 18.9253 42.7007 18.5972 42.3726L17.3496 41.125L19.7046 38.7709C23.3635 41.8701 28.0889 43.75 33.25 43.75C44.8301 43.75 54.25 34.3292 54.25 22.75C54.25 11.1708 44.8301 1.75 33.25 1.75ZM8.23902 50.239C7.57593 50.8918 6.39161 50.8756 5.75928 50.2552C5.08082 49.5682 5.08082 48.4497 5.75074 47.7712L12.4055 41.131L14.8836 43.6082L8.23902 50.239ZM33.25 40.25C23.6011 40.25 15.75 32.3998 15.75 22.75C15.75 13.1002 23.6011 5.25 33.25 5.25C42.8989 5.25 50.75 13.1002 50.75 22.75C50.75 32.3998 42.8989 40.25 33.25 40.25ZM43.75 15.75C43.75 16.7164 42.9673 17.5 42 17.5H24.5C23.5327 17.5 22.75 16.7164 22.75 15.75C22.75 14.7836 23.5327 14 24.5 14H42C42.9673 14 43.75 14.7836 43.75 15.75ZM33.25 22.75C33.25 23.7164 32.4673 24.5 31.5 24.5H24.5C23.5327 24.5 22.75 23.7164 22.75 22.75C22.75 21.7836 23.5327 21 24.5 21H31.5C32.4673 21 33.25 21.7836 33.25 22.75ZM33.25 29.75C33.25 30.7164 32.4673 31.5 31.5 31.5H24.5C23.5327 31.5 22.75 30.7164 22.75 29.75C22.75 28.7836 23.5327 28 24.5 28H31.5C32.4673 28 33.25 28.7836 33.25 29.75ZM43.75 22.75C43.75 23.7164 42.9673 24.5 42 24.5H38.5C37.5327 24.5 36.75 23.7164 36.75 22.75C36.75 21.7836 37.5327 21 38.5 21H42C42.9673 21 43.75 21.7836 43.75 22.75ZM43.75 29.75C43.75 30.7164 42.9673 31.5 42 31.5H38.5C37.5327 31.5 36.75 30.7164 36.75 29.75C36.75 28.7836 37.5327 28 38.5 28H42C42.9673 28 43.75 28.7836 43.75 29.75Z"
                        fill="#0454CB" />
                </svg>

                <div class="flex flex-col gap-2">
                    <h4 class="text-[#1D1D1E] font-bold text-lg">Focus on details</h4>
                    <p class="text-sm">In this section, a brief description of this feature is written</p>
                </div>
            </div>

            <div class="flex bg-[white] rounded-xl shadow-md px-3 py-5 gap-2 w-[350px]">
                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_106_4498)">
                        <path
                            d="M28 56C27.7386 56 27.4754 55.9419 27.2344 55.8223C16.1634 50.4321 6.99969 44.6146 6.99969 27.9996V8.74933C6.99969 8.01276 7.45938 7.35645 8.15156 7.10527L27.4018 0.105091C27.7881 -0.0350304 28.2119 -0.0350304 28.5981 0.105091L47.8484 7.10517C48.5406 7.35635 49.0003 8.01266 49.0003 8.74923V27.9995C49.0003 44.6145 39.8366 50.432 28.7656 55.8222C28.5246 55.9419 28.2615 56 28 56ZM10.4998 9.97466V27.9996C10.4998 41.0548 16.3924 46.5389 28 52.2983C39.6077 46.5389 45.5003 41.0548 45.5003 27.9996V9.97466L28 3.61199L10.4998 9.97466Z"
                            fill="#0454CB" />
                        <path
                            d="M26.7627 34.9998L18.5253 26.7624L20.9999 24.2877L26.7627 30.0505L37.7755 19.0376L40.2501 21.5122L26.7627 34.9998Z"
                            fill="#0454CB" />
                    </g>
                    <defs>
                        <clipPath id="clip0_106_4498">
                            <rect width="56" height="56" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

                <div class="flex flex-col gap-2">
                    <h4 class="text-[#1D1D1E] font-bold text-lg">Safety & Security</h4>
                    <p class="text-sm">In this section, a brief description of this feature is written</p>
                </div>
            </div>

            <div class="flex bg-[white] rounded-xl shadow-md px-3 py-5 gap-2 w-[350px]">
                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20.8495 25.7201C20.8495 29.6818 24.0733 32.9056 28.035 32.9056C31.9967 32.9056 35.2204 29.6818 35.2204 25.7201C35.2204 21.7584 31.9967 18.5347 28.035 18.5347C24.0733 18.5347 20.8495 21.7584 20.8495 25.7201ZM28.035 21.1758C30.5441 21.1758 32.5793 23.211 32.5793 25.7201C32.5793 28.2293 30.5441 30.2644 28.035 30.2644C25.5258 30.2644 23.4907 28.2293 23.4907 25.7201C23.4907 23.2111 25.5258 21.1758 28.035 21.1758Z"
                        fill="#0454CB" />
                    <path
                        d="M32.8278 35.0418L23.2032 35.0107C23.2032 35.0107 23.2032 35.0107 23.1954 35.0107C17.9286 35.0107 13.6484 39.2909 13.6484 44.5577V53.5532C13.6484 54.9049 14.7437 56.0001 16.0954 56.0001H39.9045C41.2794 56.0001 42.3514 54.936 42.3514 53.5766V44.5811C42.3514 39.322 38.079 35.0418 32.8278 35.0418ZM39.7103 53.359H36.7818V44.6199C36.7818 44.0218 36.2923 43.5324 35.6943 43.5324C35.0962 43.5324 34.6067 44.0218 34.6067 44.6199V53.359H21.3933V44.6199C21.3933 44.0218 20.9038 43.5324 20.3058 43.5324C19.7077 43.5324 19.2182 44.0218 19.2182 44.6199V53.359H16.2897V44.55C16.2897 40.7436 19.3892 37.6519 23.1956 37.6519L32.8125 37.683C32.8125 37.683 32.8125 37.683 32.8202 37.683C36.6188 37.683 39.7104 40.7747 39.7104 44.5811V53.359H39.7103Z"
                        fill="#0454CB" />
                    <path
                        d="M15.5672 14.3709C19.5289 14.3709 22.7527 11.1472 22.7527 7.18546C22.7527 3.22375 19.5289 0 15.5672 0C11.6055 0 8.38177 3.22375 8.38177 7.18546C8.38177 11.1472 11.6055 14.3709 15.5672 14.3709ZM15.5672 2.64114C18.0764 2.64114 20.1116 4.67631 20.1116 7.18546C20.1116 9.6946 18.0764 11.7298 15.5672 11.7298C13.0581 11.7298 11.0229 9.6946 11.0229 7.18546C11.0229 4.67631 13.0581 2.64114 15.5672 2.64114Z"
                        fill="#0454CB" />
                    <path
                        d="M15.07 35.9195C15.07 35.1893 14.4797 34.599 13.7495 34.599H8.95664V25.8676C8.95664 25.2696 8.46719 24.7801 7.86911 24.7801C7.27103 24.7801 6.78158 25.2696 6.78158 25.8676V34.6067H3.85293V25.8054C3.85293 21.9991 6.95242 18.8996 10.7588 18.8996H20.3912C20.8961 18.8996 21.3777 18.9539 21.8748 19.0627C21.968 19.0861 22.069 19.0938 22.1622 19.0938C22.7682 19.0938 23.3119 18.6743 23.4517 18.0606C23.607 17.346 23.1643 16.6469 22.4496 16.4836C21.7659 16.3282 21.0901 16.2583 20.391 16.2583H10.7588C5.49196 16.2583 1.21179 20.5385 1.21179 25.8053V34.8008C1.21179 36.1524 2.30706 37.2477 3.65873 37.2477H13.7495C14.4797 37.2401 15.07 36.6498 15.07 35.9195Z"
                        fill="#0454CB" />
                    <path
                        d="M40.4716 14.3709C44.4333 14.3709 47.6571 11.1472 47.6571 7.18546C47.6571 3.22375 44.4333 0 40.4716 0C36.5099 0 33.2862 3.22375 33.2862 7.18546C33.2862 11.1472 36.5099 14.3709 40.4716 14.3709ZM40.4716 2.64114C42.9808 2.64114 45.0159 4.67631 45.0159 7.18546C45.0159 9.6946 42.9808 11.7298 40.4716 11.7298C37.9625 11.7298 35.9273 9.6946 35.9273 7.18546C35.9273 4.67631 37.9625 2.64114 40.4716 2.64114Z"
                        fill="#0454CB" />
                    <path
                        d="M51.9917 19.047C50.1896 17.2449 47.7892 16.2505 45.249 16.2505L35.6243 16.2582C34.9329 16.2582 34.2649 16.3282 33.5891 16.4835C32.8745 16.6389 32.4317 17.3458 32.587 18.0605C32.7269 18.6742 33.2707 19.0937 33.8765 19.0937C33.9696 19.0937 34.0707 19.086 34.1638 19.0626C34.6533 18.9538 35.1194 18.8995 35.6243 18.8995L45.249 18.8918C47.0899 18.8918 48.8223 19.6143 50.1274 20.9192C51.4325 22.2243 52.1548 23.9565 52.1548 25.7976V34.5989H49.2263V25.8676C49.2263 25.2695 48.7368 24.78 48.1388 24.78C47.5407 24.78 47.0512 25.2695 47.0512 25.8676V34.6066H42.2584C41.5282 34.6066 40.9378 35.197 40.9378 35.9272C40.9378 36.6574 41.5282 37.2478 42.2584 37.2478H52.3414C53.6931 37.2478 54.7884 36.1525 54.7884 34.8008V25.8035V25.7978C54.7882 23.2496 53.7938 20.857 51.9917 19.047Z"
                        fill="#0454CB" />
                </svg>

                <div class="flex flex-col gap-2">
                    <h4 class="text-[#1D1D1E] font-bold text-lg">Dedicated team</h4>
                    <p class="text-sm">In this section, a brief description of this feature is written</p>
                </div>
            </div>

            <div class="flex bg-[white] rounded-xl shadow-md px-3 py-5 gap-2 w-[350px]">
                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_106_4505)">
                        <path
                            d="M38.1104 9.31029H32.6114C32.8059 6.89299 31.9827 4.40843 30.1376 2.56327C26.7993 -0.774852 21.3676 -0.774852 18.0293 2.56327L16.3227 4.26985L14.6161 2.56327C11.2778 -0.77507 5.84598 -0.774961 2.50775 2.56338C0.890641 4.18038 0 6.33059 0 8.61751C0 10.9044 0.890531 13.0545 2.50775 14.6716L6.64552 18.8094C5.27691 21.3832 4.55777 24.2569 4.55777 27.1999C4.55777 37.0643 12.583 45.0895 22.4475 45.0895H25.121L36.7798 55.94V45.0895H38.1104C47.9748 45.0895 56 37.0642 56 27.1999C56 17.3356 47.9747 9.31029 38.1104 9.31029ZM4.82989 4.88541C5.85889 3.85641 7.21022 3.34202 8.56187 3.34202C9.9132 3.34202 11.2651 3.85663 12.2939 4.88541L16.3226 8.91413L20.3513 4.88541C22.4092 2.82774 25.7574 2.82763 27.8154 4.88552C28.8122 5.88237 29.3612 7.20766 29.3612 8.61751C29.3612 10.0272 28.8122 11.3526 27.8154 12.3495L16.3227 23.8423L4.82989 12.3495C2.77211 10.2916 2.77211 6.9433 4.82989 4.88541ZM38.1104 41.8055H33.4957V48.3975L26.4129 41.8055H22.4475C14.3939 41.8055 7.84186 35.2535 7.84186 27.1999C7.84186 25.1394 8.27334 23.1212 9.09989 21.2637L16.3228 28.4866L30.1377 14.6716C30.7654 14.0439 31.2749 13.3422 31.6666 12.5943H38.1105C46.164 12.5943 52.7161 19.1463 52.7161 27.1999C52.7161 35.2535 46.1639 41.8055 38.1104 41.8055Z"
                            fill="#0454CB" />
                        <path d="M21.3226 26.2661H24.7934V29.5502H21.3226V26.2661Z" fill="#0454CB" />
                        <path d="M28.9859 26.2661H32.4567V29.5502H28.9859V26.2661Z" fill="#0454CB" />
                        <path d="M36.6492 26.2661H40.12V29.5502H36.6492V26.2661Z" fill="#0454CB" />
                    </g>
                    <defs>
                        <clipPath id="clip0_106_4505">
                            <rect width="56" height="56" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

                <div class="flex flex-col gap-2">
                    <h4 class="text-[#1D1D1E] font-bold text-lg">97% customers satisfaction</h4>
                    <p class="text-sm">In this section, a brief description of this feature is written</p>
                </div>
            </div>

        </div>
    </section>

    <section class="md:px-24 px-5 md:pr-20 md:py-40" style="background-image: url('{{ asset('images/map.png') }}'); background-repeat: no-repeat; background-position: center; background-size: 700px;">
        <div class="md:w-1/2">
            <h1 class="text-4xl font-bold">Contact Us</h1>
            <p class="text-[#4F4F4F] text-lg mt-2 md:pr-28">You can contact us through the form below and communication channels</p>

            <div class="mt-10 shadow-md rounded-3xl flex flex-col md:flex-row bg-white md:gap-20 gap-5 p-10">
                <div class="flex flex-col gap-4">
                    <h1 class="font-bold text-2xl text-[#0454CB]">Address</h1>
                    <p class="text-[#4F4F4F] text-lg">Lagos. Nigeria</p>
                </div>
                <div class="flex flex-col gap-4">
                    <h1 class="font-bold text-2xl text-[#0454CB]">Phone</h1>
                    <p class="text-[#4F4F4F] text-lg">+234-906-006-9132</p>
                </div>
            </div>

            
            <form class="mt-10  rounded-3xl gap-20 md:pr-5">
                <h1 class="font-bold text-xl">Leave a Message Now!</h1>

                <div class="flex flex-col md:flex-row gap-4 mt-4">
                    <input type="text" placeholder="First Name" class="rounded-xl md:w-1/2 shadow bg-white  border-gray-500 px-4 py-2 outline-none">
                    <input type="text" placeholder="Last Name"  class="rounded-xl md:w-1/2  shadow bg-white  border-gray-500 px-4 py-2 outline-none">
                </div>

                <div class="flex gap-4  flex-col md:flex-row mt-4">
                    <input type="text" placeholder="Phone" class="rounded-xl md:w-1/2 shadow bg-white  border-gray-500 px-4 py-2 outline-none">
                    <input type="text" placeholder="Email"  class="rounded-xl md:w-1/2  shadow bg-white  border-gray-500 px-4 py-2 outline-none">
                </div>

                <div class="flex gap-4 mt-4">
                    <textarea placeholder="First Name" class="rounded-xl w-full shadow bg-white  border-gray-500 px-4 py-2 outline-none"></textarea>
                </div>

                <button class="rounded-xl shadow bg-[#0454CB] text-white w-full mt-4 px-4 py-2 outline-none">Send</button>
            </form>
        </div>
    </section>

    <section class="md:pl-24 pl-0 px-5 md:px-0 py-28" style="background-image: url('{{ asset('images/circle4.png') }}'); background-repeat: no-repeat; background-position: center left; background-size: 700px;">
        <div class="md:px-28 px-5 flex items-end flex-col md:mb-8">
            <h1 class="font-bold text-4xl mt-2 text-center md:text-left">What Our Client Say</h1>
            <p class="md:w-96 text-base mt-2 text-[#474747] text-center md:text-left">In this section, a brief description of the blog content and what can be useful is written</p>
        </div>
        <div class="w-full hidden h-screen md:flex items-center md:px-16 gap-10" style="background-image: url('{{ asset('images/quoted.png') }}'); background-repeat: no-repeat; background-position: center left; background-size: cover;">
            <div class="flex gap-5 p-0 items-center w-1/2 ">
                <img src="{{ asset("images/woman.png") }}">
            </div>

            <div class="flex flex-col gap-4 w-1/2">
                <h1 class="font-bold text-xl">Iranian Health Company CEO </h1>
                <p class="">Before they’d even arrived, all three of the features writers for T’s Travel issue immersed themselves in the place to which they were going with a number of books, television shows, songs and films. After all, the assignment — to return to ..</p>
            </div>
        </div>

        <div class="w-full md:hidden md:h-screen flex items-center md:px-16 md:gap-10">
            <div class="hidden gap-5 p-0 items-center w-1/2 ">
                <img src="{{ asset("images/woman.png") }}">
            </div>

            <div class="flex flex-col gap-4 md:w-1/2 px-5 mt-4 md:mt-0">
                <h1 class="font-bold text-xl text-center md:text-left">Iranian Health Company CEO </h1>
                <p class="text-center md:text-left">Before they’d even arrived, all three of the features writers for T’s Travel issue immersed themselves in the place to which they were going with a number of books, television shows, songs and films. After all, the assignment — to return to ..</p>
            </div>
        </div>
    </section>

    <section class="md:px-24 px-5">
      <div class="md:w-[400px]">
        <h1 class="font-bold text-4xl text-center md:text-left">FaQ</h1>
        <p class="text-[#474747] mt-4 text-center md:text-left">In this section, a brief description of the blog content and what can be useful is written</p>
      </div>

        <div class="bg-white md:px-16 px-5  py-5 my-5 shadow-lg md:rounded-r-full md:rounded-bl-full">
            <div class="flex justify-between items-start">
                <h1 class="font-bold text-lg">What does a web development company do?</h1>
                <i class="ri-arrow-up-s-line text-2xl cursor-pointer"></i>
            </div>
            <p class="text-[#474747] mt-3">The major scope of work for a web development company includes ideating, developing, maintaining, picking the right content management system, and designing websites. Web developers can also be responsible for crafting.</p>
        </div>

        <div class="bg-white md:px-16 px-5  py-5 my-5 shadow-lg md:rounded-r-full md:rounded-bl-full">
            <div class="flex justify-between items-start">
                <h1 class="font-bold text-lg">What does a web development company do?</h1>
                <i class="ri-arrow-up-s-line text-2xl cursor-pointer"></i>
            </div>
            <p class="text-[#474747] mt-3">The major scope of work for a web development company includes ideating, developing, maintaining, picking the right content management system, and designing websites. Web developers can also be responsible for crafting.</p>
        </div>


        <div class="bg-white md:px-16 px-5  py-5 my-5 shadow-lg md:rounded-r-full md:rounded-bl-full">
            <div class="flex justify-between items-start">
                <h1 class="font-bold text-lg">What does a web development company do?</h1>
                <i class="ri-arrow-up-s-line text-2xl cursor-pointer"></i>
            </div>
            <p class="text-[#474747] mt-3">The major scope of work for a web development company includes ideating, developing, maintaining, picking the right content management system, and designing websites. Web developers can also be responsible for crafting.</p>
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
