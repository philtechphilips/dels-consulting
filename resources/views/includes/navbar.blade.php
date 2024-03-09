<header class="w-full bg-[#FCFCFC] py-3 md:px-20 px-5">
<nav class="w-full flex items-center justify-between">
    <img src="{{ asset("images/DELS Main Logo.png")}}" class="w-20"></img>

    <ul class="md:flex items-center gap-6 hidden">
        <li>
            <a href="/" class="text-[#828282] hover:text-[#0454CB] hover:font-semibold" >Home</a>
        </li>

        <li>
            <a  class="text-[#828282] hover:text-[#0454CB] hover:font-semibold" href="">Services</a>
        </li>

        <li>
            <a  class="text-[#828282] hover:text-[#0454CB] hover:font-semibold" href="">About Us</a>
        </li>

        <li>
            <a  class="text-[#828282] hover:text-[#0454CB] hover:font-semibold" href="">Blog</a>
        </li>

        <li>
            <a  class="text-[#828282] hover:text-[#0454CB] hover:font-semibold" href="">Case Studies</a>
        </li>

        <li>
            <a  class="text-[#828282] hover:text-[#0454CB] hover:font-semibold" href="">Career</a>
        </li>
    </ul>

    <a href="" class="bg-[#0454CB] py-3 px-8 text-white rounded-lg font-bold hidden md:flex">Get Started</a>
    <i class="ri-menu-2-line flex md:hidden text-3xl menuButton"></i>
</nav>

<nav id="menu" class="w-full p-5 md:hidden bg-gray-100 h-screen fixed top-0 left-0 translate-x-[500px] duration-[300ms] ease-in transform z-[1000]">
    <div class="flex items-center justify-between mb-20">
        <img src="{{ asset("images/DELS Main Logo.png")}}" class="w-20"></img>
        
        <div class="w-10 h-10 menuButton flex items-center justify-center">
            <i class="ri-close-line text-3xl"></i>
        </div>
    </div>
    
    <ul class="flex flex-col gap-10 items-center list">
        <li>
            <a href="/" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2"> Home</a>
            
        </li>

        <li>
            <a href="/about-us" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2">Services</a>
        </li>

        <li>
            <a href="/services" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2">About Us</a>
            
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
                <p class="text-[#ffffff] font-medium md:text-xl">Get Started</p>
        </li>
    </ul>

    </nav>

</header>