<footer class="w-full">
    <div
        class="w-full bg-white md:px-12 px-5 py-12 flex flex-col gap-5 md:gap-0 md:flex-row items-start justify-between">
        <img src="{{ asset('images/DELS Main Logo.png') }}" class="w-28">

        <div class="flex flex-col gap-3 px-1">
            <h1 class="text-lg font-bold text-[#0454CB]">Services</h1>
            <h1 class="font-semibold">Website Design & Development</h1>
            <h1 class="font-semibold">Mobile App Design & Development</h1>
            <h1 class="font-semibold">Search Engine Optimization</h1>
            <h1 class="font-semibold">Advertising</h1>
            <h1 class="font-semibold">Social Media Management</h1>
        </div>


        <div class="flex flex-col gap-3 px-1">
            <h1 class="text-lg font-bold text-[#0454CB]">Company</h1>
            <h1 class="font-semibold">
                <a href="/about-us">
                    About Us
                </a>
            </h1>
            <h1 class="font-semibold">Case Studies</h1>
            <h1 class="font-semibold">Career</h1>
            <h1 class="font-semibold">Blog</h1>
        </div>

        <div class="flex flex-col gap-3 px-1">
            <h1 class="text-lg font-bold text-[#0454CB]">Support</h1>
            <h1 class="font-semibold">Contact Us</h1>
            <h1 class="font-semibold">What Our Client Say</h1>
            <h1 class="font-semibold">FAQ</h1>
        </div>

        <div class="flex flex-col gap-3 px-1">
            <h1 class="text-lg font-bold text-[#0454CB]">Social Media</h1>
            <div class="flex gap-4">
                <a href="https://instagram.com/delsconsulting">
                    <image src="{{ asset('images/Instagram.svg') }}">
                </a>
                <a href="https://www.facebook.com/delsconsulting">
                    <image src="{{ asset('images/Facebook.svg') }}">
                </a>
                <a href="https://www.linkedin.com/company/dels-consulting/">
                    <image src="{{ asset('images/LinkedIn.svg') }}">
                </a>
                <a href="https://www.youtube.com/@delsonsulting">
                    <image src="{{ asset('images/Youtube.svg') }}">
                </a>
            </div>

            <div class="flex gap-4">
                <a href="https://twitter.com/delsconsulting">
                    <image src="{{ asset('images/X.svg') }}">
                </a>
                <a href="https://pin.it/61j448u">
                    <image src="{{ asset('images/Pinterest.svg') }}">
                </a>
                <a href="https://www.threads.net/@delsconsulting">
                    <image src="{{ asset('images/Thread.svg') }}">
                </a>
                <a href="http://tiktok.com/@delsconsulting">
                    <image src="{{ asset('images/Tiktok.svg') }}">
                </a>

            </div>
        </div>


    </div>
    <div class="w-full flex items-center justify-between md:px-24 px-5 py-4 bg-[#F5F5F7]">
        <p class="text-xs text-[#6D6D6D] text-center">© {{ date('Y') }} Dells. All rights reserved.</p>
        <p class="text-xs text-[#6D6D6D] text-center">Terms and Conditions</p>
        <p class="text-xs text-[#6D6D6D] text-center">Privacy Policy</p>
    </div>
</footer>
