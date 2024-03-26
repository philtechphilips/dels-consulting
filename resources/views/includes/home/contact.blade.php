<section class="md:px-24 px-5 md:pr-20 md:pb-28"
    style="background-image: url('{{ asset('images/Group 11.png') }}'); background-repeat: no-repeat; background-position: center; background-size: 700px;">
    <div class="md:w-1/2">
        <h1 class="text-4xl font-bold">Contact Us</h1>
        <p class="text-[#4F4F4F] text-lg mt-2 md:pr-28">You can contact us through the form below and communication
            channels</p>

        <div class="mt-10 shadow-md rounded-3xl flex flex-wrap flex-col md:flex-row bg-white md:gap-5 gap-5 p-10">
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('images/w3c - 2022-05-13T134754.239 2.svg') }}" class="w-5">
                    <h1 class="font-bold text-xl text-[#0454CB]">Cincinnati Address</h1>
                </div>
                <p class="text-[#4F4F4F] text-lg">370 Probasco street</p>
            </div>
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('images/Group (3).svg') }}" class="w-5">
                    <h1 class="font-bold text-xl text-[#0454CB]">Phone</h1>
                </div>
                <p class="text-[#4F4F4F] text-lg">+234-906-006-9132</p>
            </div>

            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('images/w3c - 2022-05-13T134754.239 2.svg') }}" class="w-5">
                    <h1 class="font-bold text-xl text-[#0454CB]">Lagos Address</h1>
                </div>
                <p class="text-[#4F4F4F] text-lg">Lekki - Epe Expy, Eti-Osa, Sangotedo.</p>
            </div>
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('images/Subtract.svg') }}" class="w-5">
                    <h1 class="font-bold text-xl text-[#0454CB]">Mail</h1>
                </div>
                <p class="text-[#4F4F4F] text-lg">info@delsconsulting.com</p>
            </div>
        </div>


        <form class="mt-10  rounded-3xl gap-20 md:pr-5" action="/contact" method="POST">
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

            <button class="rounded-xl shadow bg-[#0454CB] text-white w-full mt-4 px-4 py-2 outline-none">Send</button>
        </form>
    </div>
</section>
