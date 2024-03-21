@extends('layouts.app')

@section('content')
    <div class="w-full flex flex-col items-center justify-center md:px-40 px-5 py-10">
        <div class="md:w-[500px] w-full">
            <div class="flex flex-wrap items-center justify-center gap-5 mb-7">
                <div
                    class="md:w-36 text-[#0454CB] cursor-pointer border rounded-2xl border-[#0454CB] border-dashed font-semibold text-lg text-center p-5">
                    Leave a Message</div>
                <div
                    class="md:w-36 text-[#0454CB] cursor-pointer border rounded-2xl border-[#0454CB] border-dashed font-semibold text-lg text-center p-5">
                    Request a Proposal</div>
                <div
                    class="md:w-36 text-[#0454CB] cursor-pointer border rounded-2xl border-[#0454CB] border-dashed font-semibold text-lg text-center p-5">
                    Partner with Us</div>
            </div>
            <h1 class="font-bold text-xl md:text-3xl text-center">The first step towards improving <span class="text-[#0454CB]"> your
                    business </span> – Leave a Message.</h1>
            <p class="text-center mt-4 text-sm md:text-base">Looking to learn more about DELS CONSULTING, and how we can work together? We’re
                happy to help you understand what digital solutions we offer specific to your needs, and suggestions on what
                you should be focused on. Use our general inquiry form below to schedule time to chat with one of our
                experts. You can expect a response within 24 hours</p>
        </div>

        <form class="bg-white shadow-xl w-full md:w-[700px] py-5 md:px-5 my-10 rounded-xl">
            <div class="flex flex-col md:flex-row w-full gap-6 py-2 px-5">
                <input class="md:w-1/2 border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow" type="text" placeholder="First Name" required>
                <input class="md:w-1/2 border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow" type="text" placeholder="Last Name" required>
            </div>

            <div class="flex flex-col md:flex-row w-full gap-6 py-2 px-5">
                <input class="md:w-1/2 border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow" type="phone" placeholder="Phone" required>
                <input class="md:w-1/2 border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow" type="email" placeholder="Email" required>
            </div>

            <div class="flex w-full gap-6 py-2 px-5">
                <textarea placeholder="Message" class="w-full border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow" required name="" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="flex w-full gap-6 py-2 px-5">
                <button type="submit" class="bg-[#0063F7] hover:bg-[#0454CB] rounded-lg w-full px-3 py-2 text-white text-lg font-semibold"> Send</button>
            </div>
        </form>
    </div>
@endsection


@section('script')
@endsection
