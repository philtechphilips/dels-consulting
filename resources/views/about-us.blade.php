@extends('layouts.app')

@section('content')
    <section class="md:px-48 px-5 md:py-40 py-20"
        style="background-image: url('{{ asset('images/about-page-bg-top.png') }}'); background-repeat: no-repeat; background-position: center center; background-size: 600px;">
        <h1 class="text-center md:text-5xl text-3xl font-bold mb-4">About <span class="text-[#0454CB]">DELS CONSULTING</span>
        </h1>
        <p class="text-center md:px-28">We are passionate about digital marketing solutions and driven by the goal of helping
            businesses thrive in the ever-changing digital world. Our team of skilled professionals brings together a
            diverse set of talents and expertise to provide a comprehensive suite of services that cater to all aspects of
            businesses.</p>
    </section>

    <section class="md:pr-40 md:-mt-32 md:mb-8">
        <div class="bg-[#CDDDF5] md:rounded-r-full py-16 flex flex-col md:flex-row items-center gap-10 md:px-24 px-5">
            <div class="md:w-[378px] relative">
                <div class="z-[100000]">
                    <img src="{{ asset('images/intersect.png') }}" class="z-[100000]" alt="Image">
                </div>
                {{-- <div class="absolute top-20 -z-5 -right-20">
                <img src="{{ asset("images/Frame 1796.png")}}" class="-z-5">
            </div> --}}
            </div>
            <div class="flex flex-col gap-4 md:w-[580px]">
                <h1 class="font-bold text-3xl md:text-left text-center">Our <span class="text-[#0454CB]">Mission</span></h1>
                <p class="text-center md:text-left">
                    Our mission is to provide comprehensive and cutting-edge digital services that enable businesses to
                    reach
                    their full potential. We are committed to staying ahead of the latest trends and technologies to deliver
                    creative, data-driven strategies that enhance brand visibility, foster engagement, and maximize ROI for
                    our clients. We pride ourselves on building long-term partnerships based on trust, transparency, and
                    outstanding results.
                </p>
            </div>
        </div>
    </section>

    <section class="md:pl-40 mb-8">
        <div
            class="bg-[#CDDDF5] md:rounded-l-full py-16 flex md:flex-row-reverse flex-col items-center gap-10 md:px-24 px-5">
            <div class="md:w-[378px] relative">
                <div class="z-[100000]">
                    <img src="{{ asset('images/dart.png') }}" class="z-[100000]" alt="Image">
                </div>
                {{-- <div class="absolute top-20 -z-5 -right-20">
                <img src="{{ asset("images/Frame 1796.png")}}" class="-z-5">
            </div> --}}
            </div>
            <div class="flex flex-col gap-4 md:w-[580px]">
                <h1 class="font-bold text-3xl text-center md:text-left">Our <span class="text-[#0454CB]">Vision</span></h1>
                <p class="text-center md:text-left">
                    Our vision is empowering businesses of all sizes to thrive in the digital world. We strive to deliver
                    innovative and effective digital solutions that elevate our clients' brands, build meaningful
                    connections with their audience, and drive tangible results in a constantly evolving digital landscape.
                </p>
            </div>
        </div>
    </section>

    <div class="md:px-48 px-5 md:py-10 py-10">
    <h1 class="text-center md:text-5xl text-3xl font-bold mb-4">Our <span class="text-[#0454CB]">Team</span>
    </h1>
    <p class="text-center md:px-44">Meet the dedicated professionals behind DELS CONSULTING, driven by passion, expertise, and commitment to deliver exceptional results for your business.</p>
</div>
    <section class="md:px-24 px-5 pb-20 flex md:flex-row flex-col gap-14">
        <div class="relative">
            <img src="{{ asset('images/Group 35.png') }}" alt="">
            <div class="absolute bottom-28 md:left-10 left-5 pr-10 md:pr-0">
                <h1 class="text-white text-3xl font-bold">Faruq Abdulsalam</h1>
                <p class="text-white mt-3">Managing Director</p>
            </div>
            <div class="flex items-center justify-center cursor-pointer absolute bottom-6 left-24">
                <p class="text-white px-5 py-2 rounded-xl border border-white">View More</p>
            </div>
        </div>

        <div class="relative">
            <img src="{{ asset('images/Group 36.png') }}" alt="">
            <div class="absolute bottom-28 md:left-10 left-5 pr-10 md:pr-0">
                <h1 class="text-white text-3xl font-bold">Mubarakah Abdulazeez</h1>
                <p class="text-white mt-3">Project Manager</p>
            </div>
            <div class="flex items-center justify-center cursor-pointer absolute bottom-6 left-24">
                <p class="text-white px-5 py-2 rounded-xl border border-white">View More</p>
            </div>
        </div>

        <div class="relative">
            <img src="{{ asset('images/Group 37.png') }}" alt="">
            <div class="absolute bottom-28 md:left-10 left-5 pr-10 md:pr-0">
                <h1 class="text-white text-3xl font-bold">Oladeji Oluwatimileyin</h1>
                <p class="text-white mt-3">Creative Director</p>
            </div>
            <div class="flex items-center justify-center cursor-pointer absolute bottom-6 left-24">
                <p class="text-white px-5 py-2 rounded-xl border border-white">View More</p>
            </div>
        </div>
    </section>


    <section class="md:px-24 px-5 pb-20"
        style="background-image: url('{{ asset('images/about-faq-bg.png') }}'); background-repeat: no-repeat; background-position: center center; background-size: 600px;">
        <div class="md:w-[400px]">
            <h1 class="font-bold text-4xl text-center md:text-left">FaQ</h1>
            <p class="text-[#474747] mt-4 text-center md:text-left">In this section, a brief description of the blog
                content and what can be useful is written</p>
        </div>

        <div class="bg-white md:px-16 px-5  py-5 my-5 shadow-lg md:rounded-r-full md:rounded-bl-full accordion active">
            <div class="flex justify-between items-start accordion-top">
                <h1 class="font-bold text-lg">How can I contact your team?</h1>
                <i class="ri-arrow-up-s-line text-2xl cursor-pointer"></i>
            </div>
            <div class="accordion-bottom">
                <p class="text-[#474747] mt-3">
                    You can reach out to our team through the contact form on our website, via email at
                    info@delsconsulting.com, or by calling or WhatsApp +234 9060069132. We're here to assist you with any
                    inquiries or concerns.
                </p>
            </div>
        </div>

        <div class="bg-white md:px-16 px-5  py-5 my-5 shadow-lg md:rounded-r-full md:rounded-bl-full accordion">
            <div class="flex justify-between items-start accordion-top">
                <h1 class="font-bold text-lg">What sets DELS CONSULTING apart from other agencies?</h1>
                <i class="ri-arrow-down-s-line text-2xl cursor-pointer"></i>
            </div>
            <div class="accordion-bottom">
                <p class="text-[#474747] mt-3">
                    We differentiate ourselves through our commitment to personalized service, innovative strategies,
                    transparency and measurable results. Our team of experts combines creativity with technical expertise to
                    deliver digital solutions that drive tangible business growth.
                </p>
            </div>
        </div>

        <div class="bg-white md:px-16 px-5  py-5 my-5 shadow-lg md:rounded-r-full md:rounded-bl-full accordion">
            <div class="flex justify-between items-start accordion-top">
                <h1 class="font-bold text-lg">Do you offer customized solutions for specific industries?</h1>
                <i class="ri-arrow-down-s-line text-2xl cursor-pointer"></i>
            </div>
            <div class="accordion-bottom">
                <p class="text-[#474747] mt-3">
                    Yes, we understand that every industry has unique needs and challenges. That's why we offer customized
                    digital solutions tailored to the specific requirements of each client, ensuring maximum effectiveness
                    and relevance.
                </p>
            </div>
        </div>

        <div class="bg-white md:px-16 px-5  py-5 my-5 shadow-lg md:rounded-r-full md:rounded-bl-full accordion">
            <div class="flex justify-between items-start accordion-top">
                <h1 class="font-bold text-lg">How long does it take to see results from your services?</h1>
                <i class="ri-arrow-down-s-line text-2xl cursor-pointer"></i>
            </div>
            <div class="accordion-bottom">
                <p class="text-[#474747] mt-3">
                    The timeline for seeing results can vary depending on factors such as the scope of the project, the
                    competitiveness of the industry, and the specific goals of the client. However, we strive to deliver
                    measurable results within a reasonable timeframe and keep our clients informed every step of the way.
                </p>
            </div>
        </div>
    </section>
@endsection


@section('script')
@endsection
