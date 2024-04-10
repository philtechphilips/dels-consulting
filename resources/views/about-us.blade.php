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
    <section class="px-5 py-20 flex flex-wrap justify-center md:flex-row flex-col gap-5 relative">
        <div class="relative z-50" id="main1">
            <img src="{{ asset('images/Group 35.png') }}" alt="">
            <div class="absolute bottom-28 md:left-10 left-5 pr-10 md:pr-0">
                <h1 class="text-white text-3xl font-bold">Faruq Abdulsalam</h1>
                <p class="text-white mt-3">Managing Director</p>
            </div>
            <div class="flex items-center justify-center cursor-pointer absolute bottom-6 left-24 view-more"
                onclick="toggleSections('main1', 'sub1')">
                <p class="text-white px-5 py-2 rounded-xl border border-white">View More</p>
            </div>
        </div>

        <div class="relative z-50" id="sub1" style="display: none;">
            <img src="{{ asset('images/Group 35.png') }}" alt="">
            <div class="absolute top-0 left-0 bg-[#0454CB] bg-opacity-80 h-full w-full rounded-[150px] py-16 px-12">
                <h1 class="text-3xl font-bold text-white">Faruq Abdulsalam</h1>
                <p class="text-white mt-3">Managing Director</p>
                <a target="_blank" href="https://www.linkedin.com/in/faruq-abdulsalam-31376b103">
                    <img class="mt-2" src="{{ asset('images/Linkedins.svg') }}">
                </a>
                <p class="text-white mt-5">
                    I'm Faruq! I bring wealth of experience in both digital marketing and UI/UX design. I have successfully
                    led numerous digital marketing campaigns while also spearheading the design and development of
                    user-centric interfaces. My versatile skill set helps lead the company in delivering digital solutions
                    to clients.
                </p>
                <div class="flex items-center justify-center cursor-pointer absolute bottom-6 left-28 back"
                    onclick="toggleSections('main1', 'sub1')">
                    <p class="text-white px-5 py-2 rounded-xl border border-white">Back</p>
                </div>
            </div>
        </div>

        <div class="relative z-50" id="main2">
            <img src="{{ asset('images/Group 36.png') }}" alt="">
            <div class="absolute bottom-28 md:left-10 left-5 pr-10 md:pr-0">
                <h1 class="text-white text-3xl font-bold">Mubarakah Abdulazeez</h1>
                <p class="text-white mt-3">Project Manager</p>
            </div>
            <div class="flex items-center justify-center cursor-pointer absolute bottom-6 left-24"
                onclick="toggleSections('main2', 'sub2')">
                <p class="text-white px-5 py-2 rounded-xl border border-white">View More</p>
            </div>
        </div>

        <div class="relative z-50" id="sub2" style="display: none;">
            <img src="{{ asset('images/Group 36.png') }}" alt="">
            <div class="absolute top-0 left-0 bg-[#0454CB] bg-opacity-80 h-full w-full rounded-[150px] py-16 px-12">
                <h1 class="text-3xl font-bold text-white">Mubarakah Abdulazeez</h1>
                <p class="text-white mt-3">Project Manager</p>
                <a target="_blank"
                    href="https://www.linkedin.com/in/mubarakah-eniiyi-abdulazeez-2a5348241?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app">
                    <img class="mt-2" src="{{ asset('images/Linkedins.svg') }}">
                </a>
                <p class="text-white mt-5">
                    I'm Mubarakah! With a strong background in project management, I ensure the successful execution of
                    projects from inception to delivery. My planning and organizational skills drive efficiency and
                    excellence in project delivery process, ensuring client satisfaction every step of the way.
                </p>
                <div class="flex items-center justify-center cursor-pointer absolute bottom-6 left-28 back"
                    onclick="toggleSections('main2', 'sub2')">
                    <p class="text-white px-5 py-2 rounded-xl border border-white">Back</p>
                </div>
            </div>
        </div>

        <div class="relative z-50" id="main3">
            <img src="{{ asset('images/Group 37.png') }}" alt="">
            <div class="absolute bottom-28 md:left-10 left-5 pr-10 md:pr-0">
                <h1 class="text-white text-3xl font-bold">Oladeji Oluwatimileyin</h1>
                <p class="text-white mt-3">Creative Director</p>
            </div>
            <div class="flex items-center justify-center cursor-pointer absolute bottom-6 left-24"
                onclick="toggleSections('main3', 'sub3')">
                <p class="text-white px-5 py-2 rounded-xl border border-white">View More</p>
            </div>
        </div>

        <div class="relative z-50" id="sub3" style="display: none;">
            <img src="{{ asset('images/Group 37.png') }}" alt="">
            <div class="absolute top-0 left-0 bg-[#0454CB] bg-opacity-80 h-full w-full rounded-[150px] py-16 px-12">
                <h1 class="text-3xl font-bold text-white">Oladeji Oluwatimileyin</h1>
                <p class="text-white mt-3">Creative Director</p>
                <a href="javascript:void()">
                    <img class="mt-2" src="{{ asset('images/Linkedins.svg') }}">
                </a>
                <p class="text-white mt-5">
                    I’m Oluwatimileyin, With a background in cinematography and expertise in brand and graphics design, I
                    bring a unique blend of creativity and technical skill. With a passion for visual storytelling and a
                    keen eye for design, I ensure that every project is visually stunning and effectively communicates the
                    client's message.
                </p>
                <div class="flex items-center justify-center cursor-pointer absolute bottom-6 left-28 back"
                    onclick="toggleSections('main3', 'sub3')">
                    <p class="text-white px-5 py-2 rounded-xl border border-white">Back</p>
                </div>
            </div>
        </div>

        <div class="relative z-50" id="main4">
            <img src="{{ asset('images/pelumi.png') }}" alt="">
            <div class="absolute bottom-28 md:left-10 left-5 pr-10 md:pr-0">
                <h1 class="text-white text-3xl font-bold">Isola Pelumi</h1>
                <p class="text-white mt-3">Software Engineer</p>
            </div>
            <div class="flex items-center justify-center cursor-pointer absolute bottom-6 left-24"
                onclick="toggleSections('main4', 'sub4')">
                <p class="text-white px-5 py-2 rounded-xl border border-white">View More</p>
            </div>
        </div>


        <div class="relative z-50" id="sub4" style="display: none;">
            <img src="{{ asset('images/pelumi.png') }}" alt="">
            <div class="absolute top-0 left-0 bg-[#0454CB] bg-opacity-80 h-full w-full rounded-[150px] py-16 px-12">
                <h1 class="text-3xl font-bold text-white">Isola Pelumi</h1>
                <p class="text-white mt-3">Software Engineer</p>
                <a target="_blank" href="https://ng.linkedin.com/in/isola-pelumi-84661821a">
                    <img class="mt-2" src="{{ asset('images/Linkedins.svg') }}">
                </a>
                <p class="text-white mt-5">
                    I'm Pelumi, expertise in full-stack web development and backend programming. With a strong focus on
                    crafting robust and scalable solutions, I play a key role in developing innovative digital products. My
                    dedication to excellence ensures that projects are delivered with precision and efficiency.
                </p>
                <div class="flex items-center justify-center cursor-pointer absolute bottom-6 left-28 back"
                    onclick="toggleSections('main4', 'sub4')">
                    <p class="text-white px-5 py-2 rounded-xl border border-white">Back</p>
                </div>
            </div>
        </div>

        <div class="relative z-50" id="main5">
            <img src="{{ asset('images/ridwan.png') }}" alt="">
            <div class="absolute bottom-28 md:left-10 left-5 pr-10 md:pr-0">
                <h1 class="text-white text-3xl font-bold">Ridwan Abdulsalam</h1>
                <p class="text-white mt-3">Front-End Engineer</p>
            </div>
            <div class="flex items-center justify-center cursor-pointer absolute bottom-6 left-24"
                onclick="toggleSections('main5', 'sub5')">
                <p class="text-white px-5 py-2 rounded-xl border border-white">View More</p>
            </div>
        </div>


        <div class="relative z-50" id="sub5" style="display: none;">
            <img src="{{ asset('images/ridwan.png') }}" alt="">
            <div class="absolute top-0 left-0 bg-[#0454CB] bg-opacity-80 h-full w-full rounded-[150px] py-16 px-12">
                <h1 class="text-3xl font-bold text-white">Ridwan Abdulsalam</h1>
                <p class="text-white mt-3">Front-End Engineer</p>
                <a target="_blank" href="https://www.linkedin.com/in/abdulsalam-ridwan-06945b1a0?">
                    <img class="mt-2" src="{{ asset('images/Linkedins.svg') }}">
                </a>
                <p class="text-white mt-5">
                    I'm Ridwan! With a passion for coding and a keen eye for design, I specialize in creating engaging and
                    responsive user interfaces. Leveraging my expertise, I ensure that our digital solutions are not only
                    visually appealing but also function seamlessly to meet our clients' needs.
                </p>
                <div class="flex items-center justify-center cursor-pointer absolute bottom-6 left-28 back"
                    onclick="toggleSections('main5', 'sub5')">
                    <p class="text-white px-5 py-2 rounded-xl border border-white">Back</p>
                </div>
            </div>
        </div>

        <div class="relative z-50" id="main6">
            <img src="{{ asset('images/ayeni.png') }}" alt="">
            <div class="absolute bottom-28 md:left-10 left-5 pr-10 md:pr-0">
                <h1 class="text-white text-3xl font-bold">Ayeni Samuel O.</h1>
                <p class="text-white mt-3">Cross-platform Mobile Dev</p>
            </div>
            <div class="flex items-center justify-center cursor-pointer absolute bottom-6 left-24"
                onclick="toggleSections('main6', 'sub6')">
                <p class="text-white px-5 py-2 rounded-xl border border-white">View More</p>
            </div>
        </div>

        <div class="relative z-50" id="sub6" style="display: none;">
            <img src="{{ asset('images/ayeni.png') }}" alt="">
            <div class="absolute top-0 left-0 bg-[#0454CB] bg-opacity-80 h-full w-full rounded-[150px] py-16 px-12">

                <h1 class="text-3xl font-bold text-white">Ayeni Samuel O.</h1>
                <p class="text-white mt-3">Cross-platform Mobile Dev</p>
                <a href="https://www.linkedin.com/in/connectwithayeni" target="_blank">
                    <img class="mt-2" src="{{ asset('images/Linkedins.svg') }}">
                </a>
                <img class="mt-2" src="{{ asset('images/Linkedins.svg') }}">
                <p class="text-white mt-5">
                    I'm Samuel! As a full stack Flutter and Firebase developer with years of experience, I specialize in
                    designing and developing cross-platform mobile and web applications. My focus is on building seamlessly
                    integrated and optimized solutions for web, Android, and iOS platforms, ensuring a superior user
                    experience across all devices.
                </p>
                <div class="flex items-center justify-center cursor-pointer absolute bottom-6 left-28 back"
                    onclick="toggleSections('main6', 'sub6')">
                    <p class="text-white px-5 py-2 rounded-xl border border-white">Back</p>
                </div>
            </div>
        </div>


        <div class="relative z-50" id="main7">
            <img src="{{ asset('images/hauwa.png') }}" alt="">
            <div class="absolute bottom-28 md:left-10 left-5 pr-10 md:pr-0">
                <h1 class="text-white text-3xl font-bold">Abdulazeez Hauwa</h1>
                <p class="text-white mt-3">Ui, Ux Designer</p>
            </div>
            <div onclick="toggleSections('main7', 'sub7')"
                class="flex items-center justify-center cursor-pointer absolute bottom-6 left-24">
                <p class="text-white px-5 py-2 rounded-xl border border-white">View More</p>
            </div>
        </div>

        <div class="relative z-50" id="sub7" style="display: none;">
            <img src="{{ asset('images/hauwa.png') }}" alt="">
            <div class="absolute top-0 left-0 bg-[#0454CB] bg-opacity-80 h-full w-full rounded-[150px] py-16 px-12">
                <h1 class="text-3xl font-bold text-white">Abdulazeez Hauwa</h1>
                <p class="text-white mt-3">Ui, Ux Designer</p>
                <a target="_blank"
                    href="https://www.linkedin.com/in/abdulazeez-eniola-hauwa-3ba5671a7?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                    <img class="mt-2" src="{{ asset('images/Linkedins.svg') }}">
                </a>
                <p class="text-white mt-5">
                    I'm Hauwa! I specialize in crafting user-centric interfaces that enhance usability and engagement.
                    Leveraging my expertise in design principles and user psychology, I collaborate closely with developers
                    to deliver impactful solutions that exceed client expectations.
                </p>
                <div class="flex items-center justify-center cursor-pointer absolute bottom-6 left-28 back"
                    onclick="toggleSections('main7', 'sub7')">
                    <p class="text-white px-5 py-2 rounded-xl border border-white">Back</p>
                </div>
            </div>
        </div>

        <div class="relative z-50" id="main8">
            <img src="{{ asset('images/edet.png') }}" alt="">
            <div class="absolute bottom-28 md:left-10 left-5 pr-10 md:pr-0">
                <h1 class="text-white text-3xl font-bold">Victoria Edet</h1>
                <p class="text-white mt-3">Ui, Ux Designer</p>
            </div>
            <div onclick="toggleSections('main8', 'sub8')"
                class="flex items-center justify-center cursor-pointer absolute bottom-6 left-24">
                <p class="text-white px-5 py-2 rounded-xl border border-white">View More</p>
            </div>
        </div>

        <div class="relative z-50" id="sub8" style="display: none;">
            <img src="{{ asset('images/edet.png') }}" alt="">
            <div class="absolute top-0 left-0 bg-[#0454CB] bg-opacity-80 h-full w-full rounded-[150px] py-16 px-12">
                <h1 class="text-3xl font-bold text-white">Victoria Edet</h1>
                <p class="text-white mt-3">Ui, Ux Designer</p>
                <a target="_blank"
                    href="https://www.linkedin.com/in/victoria-edet-410b07181?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app">
                    <img class="mt-2" src="{{ asset('images/Linkedins.svg') }}">
                </a>
                <p class="text-white mt-5">
                    I'm Victoria,! With a passion for creating intuitive and visually appealing user experiences, I
                    specialize in crafting designs that seamlessly blend form and function. Through attention to detail and
                    a user-centric approach, I strive to enhance the overall usability and satisfaction of our digital
                    products.
                </p>
                <div class="flex items-center justify-center cursor-pointer absolute bottom-6 left-28 back"
                    onclick="toggleSections('main8', 'sub8')">
                    <p class="text-white px-5 py-2 rounded-xl border border-white">Back</p>
                </div>
            </div>
        </div>

        <div class="relative z-50" id="main9">
            <img src="{{ asset('images/mustapha.png') }}" alt="">
            <div class="absolute bottom-28 md:left-10 left-5 pr-10 md:pr-0">
                <h1 class="text-white text-3xl font-bold">Mustapha Aminah</h1>
                <p class="text-white mt-3">Operational Manager</p>
            </div>
            <div class="flex items-center justify-center cursor-pointer absolute bottom-6 left-24"
                onclick="toggleSections('main9', 'sub9')">
                <p class="text-white px-5 py-2 rounded-xl border border-white">View More</p>
            </div>
        </div>
        <div class="relative z-50" id="sub9" style="display: none;">
            <img src="{{ asset('images/mustapha.png') }}" alt="">
            <div class="absolute top-0 left-0 bg-[#0454CB] bg-opacity-80 h-full w-full rounded-[150px] py-16 px-12">
                <h1 class="text-3xl font-bold text-white">Mustapha Aminah</h1>
                <p class="text-white mt-3">Operational Manager</p>
                <a href=""></a>
                <img class="mt-2" src="{{ asset('images/Linkedins.svg') }}">
                <p class="text-white mt-5">
                    I'm Aminah! With a eye for detail and strong organizational skills, I ensure smooth day-to-day
                    operations and provide crucial support to the Managing Director. My proactive approach and dedication
                    contribute to the efficiency and success of the team.
                </p>
                <div class="flex items-center justify-center cursor-pointer absolute bottom-6 left-28 back"
                    onclick="toggleSections('main9', 'sub9')">
                    <p class="text-white px-5 py-2 rounded-xl border border-white">Back</p>
                </div>
            </div>
        </div>

        <div class="absolute -top-48 left-0 w-[500px] z-0">
            <img src="{{ asset('images/about-bg-t-l.png') }}" class="z-0" alt="">
        </div>

        <div class="absolute bottom-0 right-0 w-[500px] z-0">
            <img src="{{ asset('images/about-b-r.png') }}" class="z-0" alt="">
        </div>
    </section>

    <section class="bg-[#CDDDF5] md:rounded-t-[350px] rounded-bl-[70px] mb-20 py-20 md:px-24 px-5 hidden md:block">
        <h1 class="text-4xl text-center font-bold px-64"><span class="text-[#0454CB]">Timeline</span> of important events
            of
            our company</h1>
        <p class="text-[#4F4F4F] px-64 text-center mt-5">Embark on an immersive journey through the pivotal moments that
            have shaped the evolution of our company</p>

        <div class="flex gap-5 mt-20">
            <div class="w-1/2">
                <h1 class="text-[#0454CB] font-bold text-3xl text-right">2020</h1>

                <div class="mt-24">
                    <h1 class="font-bold text-3xl">Expansion of Service Offerings</h1>
                    <p class="mt-3">Introduction of new services such as UI/UX Design, web design & development, and
                        mobile app development, broadening our portfolio to meet diverse client needs.</p>
                </div>

                <h1 class="text-[#0454CB] font-bold text-3xl text-right mt-4">2021</h1>

                <div class="mt-24">
                    <h1 class="font-bold text-3xl">Adoption of Cutting-edge Technologies</h1>
                    <p class="mt-3">
                        Integration of advanced technologies and tools to drive innovation, efficiency, and superior
                        outcomes for our clients.
                    </p>
                </div>

                <h1 class="text-[#0454CB] font-bold text-3xl text-right mt-4">2023</h1>

                <div class="mt-24">
                    <h1 class="font-bold text-3xl">Launch of Training and Education Programs</h1>
                    <p class="mt-3">
                        Initiative to empower aspiring digital marketers, designers, developers with specialized skills and
                        knowledge through comprehensive training programs.
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
                        Inception of DELS CONSULTING by Faruq Abdulsalam, driven by a vision to revolutionize the digital
                        marketing landscape.
                    </p>
                </div>

                <h1 class="text-[#0454CB] font-bold text-3xl text-left">2021</h1>

                <div class="mt-24">
                    <h1 class="font-bold text-3xl">Strategic Partnership with Industry Leaders</h1>
                    <p class="mt-3">
                        Collaboration with renowned industry players to enhance service quality, innovation, and client
                        satisfaction.
                    </p>
                </div>

                <h1 class="text-[#0454CB] font-bold text-3xl text-left mt-4">2022</h1>
                <div class="mt-24">
                    <h1 class="font-bold text-3xl">Expansion into International Markets</h1>
                    <p class="mt-3">
                        Launch of strategic initiatives to extend our reach beyond local boundaries, tapping into global
                        markets and establishing a presence in key regions.
                    </p>
                </div>

                <h1 class="text-[#0454CB] font-bold text-3xl text-left mt-4">2024</h1>


            </div>
        </div>
    </section>

    <section class="bg-[#CDDDF5] rounded-bl-3xl py-20 mb-20 md:hidden flex flex-col px-5">
        <h1 class="text-3xl text-center font-bold"><span class="text-[#0454CB]">Timeline</span> of important events of
            our company</h1>
        <p class="text-[#4F4F4F] text-center mt-5">
            Embark on an immersive journey through the pivotal moments that
            have shaped the evolution of our company
        </p>

        <div class="flex flex-col py-10 gap-1">
            <h1 class="text-[#0454CB] text-2xl font-bold">2020</h1>
            <h1 class="text-xl font-semibold">Founding of DELS CONSULTING</h1>
            <p class="text-[#4f4f4f]">Inception of DELS CONSULTING by Faruq Abdulsalam, driven by a vision to revolutionize
                the digital marketing landscape.</p>
        </div>

        <div class="flex flex-col py-5 gap-1">
            <h1 class="text-[#0454CB] text-2xl font-bold">2021</h1>
            <h1 class="text-xl font-semibold">Expansion of Service Offerings</h1>
            <p class="text-[#4f4f4f]">Introduction of new services such as UI/UX Design, web design & development, and
                mobile app development, broadening our portfolio to meet diverse client needs.</p>
        </div>

        <div class="flex flex-col py-5 gap-1">
            <h1 class="text-[#0454CB] text-2xl font-bold">2021</h1>
            <h1 class="text-xl font-semibold">Strategic Partnership with Industry Leaders</h1>
            <p class="text-[#4f4f4f]">
                Collaboration with renowned industry players to enhance service quality, innovation, and client
                satisfaction.
            </p>
        </div>

        <div class="flex flex-col py-5 gap-1">
            <h1 class="text-[#0454CB] text-2xl font-bold">2022</h1>
            <h1 class="text-xl font-semibold">
                Adoption of Cutting-edge Technologies
            </h1>
            <p class="text-[#4f4f4f]">
                Integration of advanced technologies and tools to drive innovation, efficiency, and superior outcomes for
                our clients.
            </p>
        </div>

        <div class="flex flex-col py-5 gap-1">
            <h1 class="text-[#0454CB] text-2xl font-bold">2023</h1>
            <h1 class="text-xl font-semibold">
                Expansion into International Markets
            </h1>
            <p class="text-[#4f4f4f]">
                Launch of strategic initiatives to extend our reach beyond local boundaries, tapping into global markets and
                establishing a presence in key regions.
            </p>
        </div>


        <div class="flex flex-col py-5 gap-1">
            <h1 class="text-[#0454CB] text-2xl font-bold">
                2024
            </h1>
            <h1 class="text-xl font-semibold">
                Launch of Training and Education Programs
            </h1>
            <p class="text-[#4f4f4f]">
                Initiative to empower aspiring digital marketers, designers, developers with specialized skills and
                knowledge through comprehensive training programs.
            </p>
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
                    <form id="send-a-message" class="rounded-3xl gap-20 md:pr-5" action="/contact" method="POST">
                        @csrf
                        <h1 class="font-bold text-xl">Leave a Message Now!</h1>
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
                            <textarea placeholder="Message" name="messages"
                                class="rounded-xl w-full shadow bg-white  border-gray-500 px-4 py-2 outline-none h-40">
                            </textarea>
                        </div>

                        <button id="send-btn"
                            class="rounded-xl shadow cursor-pointer bg-[#0454CB] text-white w-full mt-4 px-4 py-2 outline-none">
                            <p>Send</p>
                        </button>
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
    <script>
        function toggleSections(mainId, subId) {
            var mainSection = document.getElementById(mainId);
            var subSection = document.getElementById(subId);

            if (mainSection.style.display === 'none') {
                mainSection.style.display = 'block';
                subSection.style.display = 'none';
            } else {
                mainSection.style.display = 'none';
                subSection.style.display = 'block';
            }
        }
    </script>
@endsection
