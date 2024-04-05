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
        <p class="text-center md:px-44">Meet the dedicated professionals behind DELS CONSULTING, driven by passion,
            expertise, and commitment to deliver exceptional results for your business.</p>
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

    <section class="bg-[#CDDDF5] md:rounded-t-[350px] rounded-bl-[70px] mb-20 py-20 md:px-24 px-5 hidden md:block">
        <h1 class="text-4xl text-center font-bold px-64"><span class="text-[#0454CB]">Timeline</span> of important events of
            our company</h1>
        <p class="text-[#4F4F4F] px-64 text-center mt-5">Embark on an immersive journey through the pivotal moments that
            have shaped the evolution of our company</p>

        <div class="flex gap-5 mt-20">
            <div class="w-1/2">
                <h1 class="text-[#0454CB] font-bold text-3xl text-right">2020</h1>

                <div class="mt-24">
                    <h1 class="font-bold text-3xl">Expansion of Service Offerings</h1>
                    <p class="mt-3">Introduction of new services such as UI/UX Design, web design & development, and mobile app development, broadening our portfolio to meet diverse client needs.</p>
                </div>

                <h1 class="text-[#0454CB] font-bold text-3xl text-right mt-4">2021</h1>

                <div class="mt-24">
                    <h1 class="font-bold text-3xl">Adoption of Cutting-edge Technologies</h1>
                    <p class="mt-3">
                        Integration of advanced technologies and tools to drive innovation, efficiency, and superior outcomes for our clients.
                    </p>
                </div>

                <h1 class="text-[#0454CB] font-bold text-3xl text-right mt-4">2023</h1>

                <div class="mt-24">
                    <h1 class="font-bold text-3xl">Launch of Training and Education Programs</h1>
                    <p class="mt-3">
                        Initiative to empower aspiring digital marketers, designers, developers with specialized skills and knowledge through comprehensive training programs.
                    </p>
                </div>
            </div>
            <div class="md:flex flex-col justify-center items-center gap-0 hidden">
                <div class="w-6 h-6 rounded-full bg-[#82C7A5]"></div>
                <div class="h-28 w-[2px] border-2 border-[#BDBDBD] border-dashed"></div>
                <div class="w-6 h-6 rounded-full bg-[#82C7A5]"></div>
                <div class="h-28 w-[2px] border-2 border-[#BDBDBD] border-dashed"></div>
                <div class="w-6 h-6 rounded-full bg-[#82C7A5]"></div>
                <div class="h-28 w-[2px] border-2 border-[#BDBDBD] border-dashed"></div>
                <div class="w-6 h-6 rounded-full bg-[#82C7A5]"></div>
                <div class="h-28 w-[2px] border-2 border-[#BDBDBD] border-dashed"></div>
                <div class="w-6 h-6 rounded-full bg-[#82C7A5]"></div>
                <div class="h-28 w-[2px] border-2 border-[#BDBDBD] border-dashed"></div>
                <div class="w-6 h-6 rounded-full bg-[#82C7A5]"></div>
                <div class="h-28 w-[2px] border-2 border-[#BDBDBD] border-dashed"></div>
                <div class="w-6 h-6 rounded-full bg-[#82C7A5]"></div>
            </div>
            <div class="w-1/2">
                <div class="mb-10">
                    <h1 class="font-bold text-3xl">Founding of DELS CONSULTING</h1>
                    <p class="mt-3">
                        Inception of DELS CONSULTING by Faruq Abdulsalam, driven by a vision to revolutionize the digital marketing landscape.
                    </p>
                </div>

                <h1 class="text-[#0454CB] font-bold text-3xl text-left">2021</h1>

                <div class="mt-24">
                    <h1 class="font-bold text-3xl">Strategic Partnership with Industry Leaders</h1>
                    <p class="mt-3">
                        Collaboration with renowned industry players to enhance service quality, innovation, and client satisfaction.
                    </p>
                </div>

                <h1 class="text-[#0454CB] font-bold text-3xl text-left mt-4">2022</h1> <div class="mt-24">
                    <h1 class="font-bold text-3xl">Expansion into International Markets</h1>
                    <p class="mt-3">
                        Launch of strategic initiatives to extend our reach beyond local boundaries, tapping into global markets and establishing a presence in key regions.
                    </p>
                </div>

                <h1 class="text-[#0454CB] font-bold text-3xl text-left mt-4">2024</h1>


            </div>
        </div>
    </section>

    <section class="md:px-24 px-5 pb-20">
        <h1 class="font-bold mb-3 md:text-5xl text-3xl text-center md:text-left">Read other <scan class="text-[#0454CB]">
                people's opinions </scan> on this</h1>
        <p class="md:w-[723px] text-[#4F4F4F] text-center md:text-left">Discover reviews from satisfied clients, partners,
            and industry experts,
            showcasing our dedication to delivering exceptional service.</p>

        <div class="flex flex-col md:flex-row justify-between items-start gap-8 py-12">
            <div class="bg-white shadow-xl md:w-1/2 rounded-2xl md:px-14 px-5 py-4">
                <div class="flex items-end gap-10">
                    <img src="{{ asset('images/tolu.png') }}" alt="tolu" class="w-16">
                    <div class="flex flex-col justify-between gap-2">
                        <h2 class="md:text-2xl text-xl font-bold text-[#0454CB]">Tolu Ade</h2>
                        <p class="font-semibold">23 Feb 2023</p>
                    </div>
                    <img src="{{ asset('images/stars.png') }}" alt="" class="w-24 hidden md:flex">
                </div>
                <div class="w-full h-[1px] bg-[#E0E0E0] my-5"></div>
                <p class="text-[#4F4F4F]">Your team exhibited unmatched professionalism throughout our project. Your
                    attention to detail, clear communication, and dedication to excellence truly set you apart.</p>
            </div>

            <div class="bg-white shadow-xl md:w-1/2 rounded-2xl md:px-14 px-5 py-4">
                <div class="flex items-end gap-10">
                    <img src="{{ asset('images/stephen.png') }}" alt="tolu" class="w-16">
                    <div class="flex flex-col justify-between gap-2">
                        <h2 class="md:text-2xl text-xl font-bold text-[#0454CB]">Stephen Collins</h2>
                        <p class="font-semibold">11 Oct 2022</p>
                    </div>
                    <img src="{{ asset('images/stars.png') }}" alt="" class="w-24 hidden md:flex">
                </div>
                <div class="w-full h-[1px] bg-[#E0E0E0] my-5"></div>
                <p class="text-[#4F4F4F]">
                    My experience with your team was nothing short of phenomenal. Your expertise and professionalism
                    exceeded my expectations, and you delivered outstanding results for my business.
                </p>
            </div>
        </div>

    </section>

    <section class="md:px-24 px-5 pb-20">
        <div class="w-full flex flex-col-reverse md:flex-row">
            <div class="md:w-1/2 z-[100000]">
                <h1 class="text-4xl font-bold text-center md:text-left">How we can <span
                        class="text-[#0454CB]">help</span> you?</h1>
                <p class="py-4 text-[#4F4F4F] md:pr-16 text-center md:text-left">You can contact us through the form below
                    and communication channels</p>
                <div class="bg-[#FCFCFC] p-10 md:mt-16 mt-4 rounded-3xl">
                    <form class="rounded-3xl gap-20 md:pr-5" action="/contact" method="POST">
                        @csrf
                        <h1 class="font-bold text-xl">Leave a Message Now!</h1>
                        @if (session('success'))
                            <div class="text-white bg-green-600 px-4 py-2 rounded-lg">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-disc list-inside">
                                    @foreach ($errors->all() as $error)
                                        <li class="text-white bg-red-600 px-4 py-2 rounded-lg">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="flex flex-col md:flex-row gap-4 mt-4">
                            <input type="text" name="firstname" placeholder="First Name"
                                class="rounded-xl md:w-1/2 shadow bg-white  border-gray-500 px-4 py-2 outline-none">
                            <input type="text" name="lastname" placeholder="Last Name"
                                class="rounded-xl md:w-1/2  shadow bg-white  border-gray-500 px-4 py-2 outline-none">
                        </div>

                        <div class="flex gap-4  flex-col md:flex-row mt-4">
                            <input type="text" name="phone" placeholder="Phone"
                                class="rounded-xl md:w-1/2 shadow bg-white  border-gray-500 px-4 py-2 outline-none">
                            <input type="text" name="email" placeholder="Email"
                                class="rounded-xl md:w-1/2  shadow bg-white  border-gray-500 px-4 py-2 outline-none">
                        </div>

                        <div class="flex gap-4 mt-4">
                            <input placeholder="Message" name="messages"
                                class="rounded-xl w-full shadow bg-white  border-gray-500 px-4 py-2 outline-none h-16">
                        </div>

                        <button
                            class="rounded-xl shadow bg-[#0454CB] text-white w-full mt-4 px-4 py-2 outline-none">Send</button>
                    </form>
                </div>
            </div>
            <img src="{{ asset('images/customer-center.png') }}" alt="" class="md:w-[580px] md:-ml-9 z-0">
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
