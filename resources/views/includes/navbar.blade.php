<header class="w-full bg-[#FCFCFC] py-3 md:px-20 px-5">
    <nav class="w-full flex items-center justify-between">
        <a href="/">
            <img src="{{ asset('images/DELS Main Logo.png') }}" class="w-20"></img>
        </a>

        <ul class="md:flex items-center gap-10 hidden list">
            <li>
                <a href="/" class="text-[#828282] hover:text-[#0454CB] hover:font-semibold">Home</a>
            </li>

            <li>
                <a class="text-[#828282] hover:text-[#0454CB] hover:font-semibold" href="/about-us">About Us</a>
            </li>

            <li class="flex items-center gap-2">
                <a class="text-[#828282] hover:text-[#0454CB] hover:font-semibold" href="">Services</a>
                <i class="ri-arrow-down-s-line cursor-pointer text-[#828282]" onclick="toggleDropdown()"></i>
            </li>

            <li>
                <a class="text-[#828282] hover:text-[#0454CB] hover:font-semibold" href="">Blog</a>
            </li>

            <li>
                <a class="text-[#828282] hover:text-[#0454CB] hover:font-semibold" href="">Case Studies</a>
            </li>

            <li>
                <a class="text-[#828282] hover:text-[#0454CB] hover:font-semibold" href="">Career</a>
            </li>
        </ul>

        <a href="/contact-us" class="bg-[#0454CB] py-3 px-8 text-white rounded-lg font-bold hidden md:flex">Contact
            Us</a>
        <i class="ri-menu-2-line flex md:hidden text-3xl menuButton"></i>
    </nav>
    <div id="service_dropdown" class="service-hidden">
        <div class="bg-white flex absolute w-[1100px] shadow-lg rounded-xl top-24 left-40 z-[1000] px-10 py-9 gap-8">
            <div class="flex flex-col gap-5">
                <div class="flex">
                    <h4 class="font-bold text-lg text-[#0454CB]">Design & Development</h4>
                    <img src="{{ asset('images/icon-Bold-Next.svg') }}">
                </div>
                <div class="flex gap-2 items-center">
                    <img src="{{ asset('images/d-1.svg') }}">
                    <p>Website Design</p>
                </div>
                <div class="flex gap-2 items-center">
                    <img src="{{ asset('images/d2.png') }}">
                    <p>Mobile App</p>
                </div>
                <div class="flex gap-2 items-center">
                    <img src="{{ asset('images/d-1.svg') }}">
                    <p>Web & App Redesign</p>
                </div>
            </div>

            <div class="flex flex-col gap-5">
                <div class="flex">
                    <h4 class="font-bold text-lg text-[#0454CB]">Seo</h4>
                    <img src="{{ asset('images/icon-Bold-Next.svg') }}">
                </div>
                <div class="flex gap-2 items-center">
                    <img src="{{ asset('images/d-7.svg') }}">
                    <p>SEO Managment</p>
                </div>
                <div class="flex gap-2 items-center">
                    <img src="{{ asset('images/d-6.svg') }}">
                    <p>Content & Copywriting</p>
                </div>
                <div class="flex gap-2 items-center">
                    <img src="{{ asset('images/d-5.svg') }}">
                    <p>E-Commerce SEO</p>
                </div>
                <div class="flex gap-2 items-center">
                    <img src="{{ asset('images/d-4.svg') }}">
                    <p>Link Building Services</p>
                </div>
            </div>

            <div class="flex flex-col gap-5">
                <div class="flex">
                    <h4 class="font-bold text-lg text-[#0454CB]">Advertising</h4>
                    <img src="{{ asset('images/icon-Bold-Next.svg') }}">
                </div>
                <div class="flex gap-2 items-center">
                    <img src="{{ asset('images/d-8.svg') }}">
                    <p>PPC Management</p>
                    <img src="{{ asset('images/icon-Bold-Next.svg') }}">
                </div>
                <div class="flex gap-2 items-center mx-9">
                    <img src="{{ asset('images/d-9.svg') }}">
                    <p>Google AD</p>
                </div>
                <div class="flex gap-2 items-center mx-9">
                    <img src="{{ asset('images/d-10.svg') }}">
                    <p>Facebook AD</p>
                </div>
            </div>

            <div class="flex flex-col gap-5">
                <div class="flex">
                    <h4 class="font-bold text-lg text-[#0454CB]">Social Managment</h4>
                    <img src="{{ asset('images/icon-Bold-Next.svg') }}">
                </div>
                <div class="flex">
                    <h4 class="font-bold text-lg text-[#0454CB]">Social Managment</h4>
                    <img src="{{ asset('images/icon-Bold-Next.svg') }}">
                </div>
            </div>
        </div>
        <div
            class="w-0 h-0 border-l-[40px] border-l-transparent border-r-[40px] border-r-transparent border-b-[40px] border-b-white absolute top-[72px] left-[495px]">
        </div>
    </div>

    <nav id="menu"
        class="w-full p-5 md:hidden bg-gray-100 h-screen fixed top-0 left-0 translate-x-[500px] duration-[300ms] ease-in transform z-[1000]">
        <div class="flex items-center justify-between mb-20">
          <a href="/">
            <img src="{{ asset('images/DELS Main Logo.png') }}" class="w-20"></img>
        </a>

            <div class="w-10 h-10 menuButton flex items-center justify-center">
                <i class="ri-close-line text-3xl"></i>
            </div>
        </div>

        <ul class="flex flex-col gap-10 items-center list">
            <li>
                <a href="/" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2"> Home</a>

            </li>

            <li>
                <a href="/services" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2">Services</a>
            </li>

            <li>
                <a href="/about-us" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2">About Us</a>

            </li>

            <li>
                <a href="/projects" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2">Blog</a>

            </li>

            <li>
                <a href="/teams" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2">Case Studies</a>

            </li>

            <li>
                <a href="/teams" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2">Career</a>

            </li>

            <li class="flex gap-2 items-center bg-[#0454CB] rounded-lg px-6 py-3">
                <a href="/contact-us">
                    <p class="text-[#ffffff] font-medium md:text-xl">Contact Us</p>
                </a>
            </li>
        </ul>

    </nav>

</header>
