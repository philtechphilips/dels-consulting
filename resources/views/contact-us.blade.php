@extends('layouts.app')

@section('content')
    <div class="w-full flex flex-col items-center justify-center md:px-40 px-5 py-10"
        style="background: url({{ asset('images/contact-us-bg.png') }}); background-position: bottom center; background-repeat: no-repeat; background-size: 800px;">
        <div class="md:w-[500px] w-full">
            <div class="flex flex-wrap items-center justify-center gap-5 mb-7">
                <div
                    class="contact-filter md:w-36 text-[#0454CB] cursor-pointer border rounded-2xl border-[#0454CB] border-dashed font-semibold text-lg text-center p-5">
                    Leave a Message
                </div>
                <div
                    class="contact-filter md:w-36 text-[#0454CB] cursor-pointer border rounded-2xl border-[#0454CB] border-dashed font-semibold text-lg text-center p-5">
                    Request a Proposal
                </div>
                <div
                    class="contact-filter md:w-36 text-[#0454CB] cursor-pointer border rounded-2xl border-[#0454CB] border-dashed font-semibold text-lg text-center p-5">
                    Partner with Us
                </div>
            </div>
            <h1 class="font-bold text-xl md:text-3xl text-center" id="leave-message-form-heading">The first step towards
                improving <span class="text-[#0454CB]"> your
                    business </span> – Leave a Message.</h1>
            <p class="text-center mt-4 text-sm md:text-base" id="leave-message-form-text">Looking to learn more about DELS
                CONSULTING, and how we can work
                together? We’re
                happy to help you understand what digital solutions we offer specific to your needs, and suggestions on what
                you should be focused on. Use our general inquiry form below to schedule time to chat with one of our
                experts. You can expect a response within 24 hours</p>


            <h1 class="font-bold text-xl md:text-3xl text-center hidden" id="request-proposal-form-heading">Ready to take
                <span class="text-[#0454CB]">your business </span> to the next level? – Request a Proposal.
            </h1>
            <p class="text-center mt-4 text-sm md:text-base hidden" id="request-proposal-form-text">Looking to explore how
                DELS CONSULTING can tailor digital solutions to your unique needs? We're here to guide you through the
                process and provide personalized recommendations for your business. Simply fill out our proposal request
                form below to schedule a consultation with one of our experts. Expect a prompt response within 24 hours.</p>


            <h1 class="font-bold text-xl md:text-3xl text-center hidden" id="partner-form-heading">Let’s make things happen
                <span class="text-[#0454CB]"> Together </span> Partner with us.
            </h1>
            <p class="text-center mt-4 text-sm md:text-base hidden" id="partner-form-text">Are you an agency that is
                considering white-labeling us, or partnering with us? We’d love to hear from you. Fill out the form below
                and one of our partnership specialists will be in touch as quickly as possible</p>
        </div>

        <form id="leave-message-form" action="/contact" method="POST"
            class="bg-white shadow-xl w-full md:w-[700px] py-5 md:px-5 my-10 rounded-xl ">
            @csrf
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
            <div class="flex flex-col md:flex-row w-full gap-6 py-2 px-5">
                <input class="md:w-1/2 border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow"
                    type="text" name="firstname" placeholder="First Name" required>
                <input class="md:w-1/2 border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow"
                    type="text" name="lastname" placeholder="Last Name" required>
            </div>

            <div class="flex flex-col md:flex-row w-full gap-6 py-2 px-5">
                <input class="md:w-1/2 border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow"
                    type="phone" name="phone" placeholder="Phone" required>
                <input class="md:w-1/2 border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow"
                    type="email" name="email" placeholder="Email" required>
            </div>

            <div class="flex w-full gap-6 py-2 px-5">
                <textarea name="messages" placeholder="Message"
                    class="w-full border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow" required name=""
                    id="" cols="30" rows="10"></textarea>
            </div>

            <div class="flex w-full gap-6 py-2 px-5">
                <button type="submit"
                    class="bg-[#0063F7] hover:bg-[#0454CB] rounded-lg w-full px-3 py-2 text-white text-lg font-semibold">
                    Send</button>
            </div>
        </form>

        <form id="request-proposal-form" action="/send-proposal" method="POST"
            class="bg-white shadow-xl w-full md:w-[700px] py-5 md:px-5 my-10 rounded-xl hidden-active">
            @csrf
            <div class="flex flex-col md:flex-row w-full gap-6 py-2 px-5">
                <input class="md:w-1/2 border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow"
                    type="text" placeholder="First Name" name="firstname" required>
                <input class="md:w-1/2 border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow"
                    type="text" placeholder="Last Name" name="lastname" required>
            </div>

            <div class="flex flex-col md:flex-row w-full gap-6 py-2 px-5">
                <input class="md:w-1/2 border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow"
                    type="phone" placeholder="Phone" name="phone" required>
                <input class="md:w-1/2 border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow"
                    type="email" placeholder="Email" name="email" required>
            </div>

            <div class="flex flex-col md:flex-row w-full gap-6 py-2 px-5">
                <input class="md:w-full border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow"
                    type="text" placeholder="Company Name" name="company" required>
            </div>

            <div class="flex flex-col md:flex-row w-full gap-6 py-2 px-5">
                <select name="service" id=""
                    class="md:w-full border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow">
                    <option value="" selected disabled>What Digital Solutions are you interested in?</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                    <option value="Website Design & Development">Website Design & Development</option>
                    <option value="Mobile App Development">Mobile App Development</option>
                    <option value="UI/UX Design">UI/UX Design</option>
                    <option value="Social Media Management">Social Media Management</option>
                    <option value="Search Engine Optimization">Search Engine Optimization</option>
                    <option value="Brand Strategy & Graphics Design">Brand Strategy & Graphics Design</option>
                    <option value="Video Production">Video Production</option>
                    <option value="Online Reputation Management">Online Reputation Management</option>
                </select>
            </div>


            <div class="flex flex-col md:flex-row w-full gap-6 py-2 px-5">
                <select name="budget" id=""
                    class="md:w-full border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow">
                    <option value="" selected disabled>What is your Budget for this initiative?</option>
                    <option value="Digital Marketing">$800 - $5,000</option>
                    <option value="Website Design & Development">$5,000 - $20,000</option>
                    <option value="$20,000 - $50,000">$20,000 - $50,000</option>
                    <option value="$50,000 - $70,000">$50,000 - $70,000</option>
                    <option value="$70,000+">$70,000+</option>
                </select>
            </div>

            <div class="flex w-full gap-6 py-2 px-5">
                <input type="text" placeholder="How long do you expect our engagement to last?"
                    class="w-full border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow" required
                    name="duration" id="" cols="30" rows="10"></input>
            </div>


            <div class="flex w-full gap-6 py-2 px-5">
                <textarea
                    placeholder="Briefly tell us about your biggest challenges at this moment, and what gaps you see us filling in your marketing."
                    class="w-full border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow" required
                    name="challenge" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="flex w-full gap-6 py-2 px-5">
                <textarea placeholder="What tools are you currently utilizing with your sales/marketing efforts?"
                    class="w-full border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow" required
                    name="tools" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="flex w-full gap-6 py-2 px-5">
                <button type="submit"
                    class="bg-[#0063F7] hover:bg-[#0454CB] rounded-lg w-full px-3 py-2 text-white text-lg font-semibold">
                    Send</button>
            </div>
        </form>

        <form id="partner-form" action="/send-parnership-mail" method="POST"
            class="bg-white shadow-xl w-full md:w-[700px] py-5 md:px-5 my-10 rounded-xl hidden-active">
            @csrf
            <div class="flex flex-col md:flex-row w-full gap-6 py-2 px-5">
                <input class="md:w-1/2 border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow"
                    type="text" placeholder="First Name" name="firstname" required>
                <input class="md:w-1/2 border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow"
                    type="text" placeholder="Last Name" name="lastname" required>
            </div>

            <div class="flex flex-col md:flex-row w-full gap-6 py-2 px-5">
                <input class="md:w-1/2 border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow"
                    type="phone" placeholder="Phone" name="phone" required>
                <input class="md:w-1/2 border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow"
                    type="email" placeholder="Email" name="email" required>
            </div>

            <div class="flex flex-col md:flex-row w-full gap-6 py-2 px-5">
                <input class="md:w-full border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow"
                    type="text" name="company" placeholder="Agency or Company Name" required>
            </div>

            <div class="flex flex-col md:flex-row w-full gap-6 py-2 px-5">
                <select name="budget" id=""
                    class="md:w-full border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow">
                    <option value="" selected disabled>What is your Budget for this initiative?</option>
                    <option value="$800 - $5,000">$800 - $5,000</option>
                    <option value="$5,000 - $20,000">$5,000 - $20,000</option>
                    <option value="$20,000 - $50,000">$20,000 - $50,000</option>
                    <option value="$50,000 - $70,000">$50,000 - $70,000</option>
                    <option value="$70,000+">$70,000+</option>
                </select>
            </div>

            <div class="flex w-full gap-6 py-2 px-5">
                <textarea name="challenge" placeholder="What are your current challenges that you need help with as an Agency or Company?"
                    class="w-full border rounded-lg px-4 py-2 text-sm outline-none focus:border-gray-400 shadow" required
                    name="" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="flex w-full gap-6 py-2 px-5">
                <button type="submit"
                    class="bg-[#0063F7] hover:bg-[#0454CB] rounded-lg w-full px-3 py-2 text-white text-lg font-semibold">
                    Send</button>
            </div>
        </form>
    </div>
@endsection


@section('script')
    <script>
        const contactFilters = document.querySelectorAll('.contact-filter');

        contactFilters.forEach(filter => {
            filter.addEventListener('click', () => {
                contactFilters.forEach(f => {
                    f.style.background = '';
                });
                filter.style.background = "#CDDDF5";
                document.querySelectorAll('.contact-form').forEach(form => {
                    form.classList.add('hidden');
                });

                const filterText = filter.textContent.trim();
                switch (filterText) {
                    case 'Leave a Message':
                        document.getElementById('leave-message-form').classList.remove('hidden-active');
                        document.getElementById('partner-form').classList.add('hidden-active');
                        document.getElementById('request-proposal-form').classList.add('hidden-active');

                        document.getElementById('leave-message-form-heading').classList.remove('hidden');
                        document.getElementById('leave-message-form-text').classList.remove('hidden');

                        document.getElementById('partner-form-heading').classList.add('hidden');
                        document.getElementById('partner-form-text').classList.add('hidden');

                        document.getElementById('request-proposal-form-heading').classList.add('hidden');
                        document.getElementById('request-proposal-form-text').classList.add('hidden');

                        break;
                    case 'Request a Proposal':
                        document.getElementById('request-proposal-form').classList.remove('hidden-active');
                        document.getElementById('leave-message-form').classList.add('hidden-active');
                        document.getElementById('partner-form').classList.add('hidden-active');

                        document.getElementById('leave-message-form-heading').classList.add('hidden');
                        document.getElementById('leave-message-form-text').classList.add('hidden');

                        document.getElementById('partner-form-heading').classList.add('hidden');
                        document.getElementById('partner-form-text').classList.add('hidden');

                        document.getElementById('request-proposal-form-heading').classList.remove('hidden');
                        document.getElementById('request-proposal-form-text').classList.remove('hidden');

                        break;
                    case 'Partner with Us':
                        document.getElementById('partner-form').classList.remove('hidden-active');
                        document.getElementById('request-proposal-form').classList.add('hidden-active');
                        document.getElementById('leave-message-form').classList.add('hidden-active');

                        document.getElementById('leave-message-form-heading').classList.add('hidden');
                        document.getElementById('leave-message-form-text').classList.add('hidden');

                        document.getElementById('partner-form-heading').classList.remove('hidden');
                        document.getElementById('partner-form-text').classList.remove('hidden');

                        document.getElementById('request-proposal-form-heading').classList.add('hidden');
                        document.getElementById('request-proposal-form-text').classList.add('hidden');
                        break;
                    default:
                        break;
                }
            });
        });
    </script>
@endsection
