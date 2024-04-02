<section class="md:px-24 px-5 min:h-screen pb-28 z-0"
    style="background-image: url('{{ asset('images/blog-bg.png') }}'); background-repeat: no-repeat; background-position: center center; background-size: center;">
    <div class="flex justify-between items-start flex-col md:flex-row">
        <div class="md:w-[400px]">
            <h1 class="font-bold text-4xl text-center md:text-left">Our Blog</h1>
            <p class="text-[#474747] mt-4 text-center md:text-left">In this section, a brief description of the blog
                content and what can be useful is written</p>
        </div>

        <div class="bg-white rounded-full px-7 py-3 gap-4 flex items-center z-[100]">
            <h1 class="text-[#0454CB] font-bold bg-[#CDDDF5] rounded-full px-4 py-1">All</h1>
            <h1 class="text-[#BDBDBD]">Popular</h1>
            <h1 class="text-[#BDBDBD]">Trending</h1>
            <h1 class="text-[#BDBDBD]">Most Viewed</h1>
        </div>
    </div>

    <div class="flex flex-col z-[100]">
        <div
            class="flex relative flex-col md:flex-row shadow-lg items-center my-4 md:mx-10 rounded-3xl mt-16 gap-8 z-[100] bg-white md:w-[880px]">
            <img src="{{ asset('images/blog-one.png') }}" class="w-full">
            <div class="z-[100] px-5">
                <h1 class="text-[#0454CB] font-bold text-lg">The Mindset of Successful Entrepreneurs</h1>
                <h4 class="font-bold py-5">22 Mar 2024</h4>
                <p class="text-[#4F4F4F]">In today's competitive business landscape, achieving success as an
                    entrepreneur requires more than just a great idea or product. It requires the right mindset – a
                    combination of attitudes, beliefs, and behaviors that drive success and growth ...</p>
                <div class="flex gap-1 py-5 md:justify-end pr-10">
                    <p class="text-[#0454CB] font-semibold">
                        Read more
                    </p>
                    <img src="{{ asset('images/path.svg') }}"></img>
                </div>
            </div>
            <div class="absolute top-4 left-5 bg-white rounded-full py-2 px-4">
                <p class="text-[#0454CB] font-medium">Business Growth</p>
            </div>
        </div>

        <div
            class="flex relative flex-col md:flex-row shadow-lg items-center my-4 md:mx-20 rounded-3xl mt-16 gap-8 z-[100] bg-white md:w-[880px]">
            <img src="{{ asset('images/full-shot-travel-concept-with-landmarks 1 (1).png') }}" class="w-full">
            <div class="z-[100] px-5">
                <h1 class="text-[#0454CB] font-bold text-lg">Technologies and Strategies of AI in Business</h1>
                <h4 class="font-bold py-5">22 Mar 2024</h4>
                <p class="text-[#4F4F4F]">
                    In the modern business landscape, the integration of artificial intelligence (AI) has become
                    increasingly prevalent, revolutionizing the way organizations operate and compete. From streamlining
                    processes to enhancing customer experiences ...
                </p>
                <div class="flex py-5 gap-1 justify-end pr-10">
                    <p class="text-[#0454CB] font-semibold">
                        Read more
                    </p>
                    <img src="{{ asset('images/path.svg') }}"></img>
                </div>
            </div>
            <div class="absolute top-4 left-5 bg-white rounded-full py-2 px-4">
                <p class="text-[#0454CB] font-medium">AI (Artificial Intelligence)</p>
            </div>
        </div>

        <div
            class="flex relative flex-col md:flex-row shadow-lg items-center my-4 md:mx-10 rounded-3xl mt-16 gap-8 z-[100] bg-white md:w-[880px]">
            <img src="{{ asset('images/full-shot-travel-concept-with-landmarks 1.png') }}" class="w-full">
            <div class="z-[100] px-5">
                <h1 class="text-[#0454CB] font-bold text-lg">
                    Building Brand Consistency Across All Touchpoints
                </h1>
                <h4 class="font-bold py-5">23 Mar 2024</h4>
                <p class="text-[#4F4F4F]">
                    Consistency is key when it comes to building a strong brand identity. From your website and social
                    media profiles to your packaging and customer interactions, every touchpoint with your audience
                    should reflect your brand's values, messaging, and visual identity ...
                </p>
                <div class="flex gap-1 py-5 justify-end pr-10">
                    <p class="text-[#0454CB] font-semibold">
                        Read more
                    </p>
                    <img src="{{ asset('images/path.svg') }}"></img>
                </div>
            </div>
            <div class="absolute top-4 left-5 bg-white rounded-full py-2 px-4">
                <p class="text-[#0454CB] font-medium">Branding and Identity</p>
            </div>
        </div>
    </div>

</section>
