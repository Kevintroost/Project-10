<x-layout :title="'Contact | Opus Events'">

    <!-- Hero Section -->
    <section class="bg-gray-700 bg-blend-multiply flex items-center justify-center" style="
        background-image: url('{{ Vite::asset('resources/assets/background2.jpg') }}');
        background-position: center;
        background-size: cover;
    ">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-4 lg:py-16">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                Contact
            </h1>
        </div>
    </section>

    <!-- Success Message Section -->
    @if(session('success'))
        <section class="flex flex-col items-center justify-center bg-gray-100 bg-cover bg-center">
            <div class="w-full max-w-2xl mt-6">
                <div class="flex items-center p-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Success alert!</span>
                        <div class="alert alert-success">{{ session('success') }}</div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Contact Section -->
    <section class="flex flex-col items-center bg-gray-100 py-12">
        <div class="w-full max-w-6xl flex flex-col md:flex-row items-start space-y-8 md:space-y-0 md:space-x-8">
            <!-- Form Section -->
            <div class="w-full md:w-1/2 bg-white text-gray-800 rounded-lg shadow-lg p-8">
                <h2 class="text-3xl font-semibold mb-4 text-center md:text-left">Contact us</h2>
                <p class="text-center md:text-left mb-6 text-gray-600">Use this form for all general inquiries. We
                    monitor these responses constantly during working hours.</p>
                <form action="{{ route('contact.store') }}" method="POST" id="contactForm">
                    @csrf
                    <div class="grid grid-cols-1 gap-6">
                        <!-- Name Field -->
                        <div>
                            <label for="name" class="block text-sm font-medium mb-2">Full name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="w-full bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg px-4 py-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter your name" required>
                            @error('name')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-sm font-medium mb-2">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="w-full bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg px-4 py-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter your email" required>
                            @error('email')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Phone Field -->
                        <div>
                            <label for="phone" class="block text-sm font-medium mb-2">Phone number</label>
                            <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                                class="w-full bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg px-4 py-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter your phone number" required>
                            @error('phone')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Message Field -->
                    <div class="mt-4">
                        <label for="details" class="block text-sm font-medium mb-2">Message</label>
                        <textarea id="details" name="details" rows="4"
                            class="w-full bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg px-4 py-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter your message here" required>{{ old('details') }}</textarea>
                        @error('details')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full py-2.5 mt-6 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg focus:ring-4 focus:ring-blue-400">
                        Send Your Message
                    </button>
                </form>
            </div>

            <!-- Google Maps Section -->
            <div class="md:w-1/2 flex flex-col items-center justify-center">
                <iframe class="object-cover rounded-lg shadow-md mb-8"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2345.106896396644!2d4.7553091763382564!3d52.10889756658539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5dac4766bd899%3A0x93216324e3b6c220!2sOpus%20Nederland%20BV!5e1!3m2!1snl!2snl!4v1733994413549!5m2!1snl!2snl"
                    width="550" height="315" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="w-full bg-white text-gray-800 rounded-lg shadow-lg p-8">
                    <h1 class="text-2xl font-semibold mb-4">Contact details</h1>
                    <div class="flex items-center space-x-2 mb-2">
                        <span class="text-red-500">
                            <svg class="w-5 h-5 text-blue-700" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
                            </svg>

                        </span>
                        <span>Prins alexanderlaan 55</span>
                    </div>
                    <div class="flex items-center space-x-2 mb-2">
                        <span class="text-red-500">
                            <svg class="w-5 h-5 text-blue-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                            </svg>

                        </span>
                        <span>Opuseventnederland@gmail.com</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-red-500">
                            <svg class="w-5 h-5 text-blue-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z" />
                            </svg>


                        </span>
                        <span>06-1234567</span>
                    </div>
                </div>
            </div>
        </div>

        </div>

        <!-- FAQ Section -->
        <div class="max-w-3xl mt-20 my-8">
            <h1 class="text-3xl font-extrabold text-center mb-8">Frequently asked questions</h1>

            <!-- FAQ Accordion Container -->
            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="border-b border-gray-200 pb-4">
                    <input type="checkbox" id="faq-1" class="peer hidden">
                    <label for="faq-1"
                        class="flex items-center justify-between w-full text-left text-gray-800 font-medium text-lg cursor-pointer">
                        <span>Do I have to pay for posting events?</span>
                        <svg class="w-5 h-5 transition-transform duration-300 peer-checked:rotate-180"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </label>
                    <div
                        class="max-h-0 overflow-hidden peer-checked:max-h-[500px] transition-all duration-300 mt-2 text-gray-600">
                        The VAT imposed by the government on the food price will be added and visible to you while
                        placing the order. Also, the restaurant’s service charge if there is any. Our customer doesn't
                        have to pay any duties or taxes upon delivery of their order.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="border-b border-gray-200 pb-4">
                    <input type="checkbox" id="faq-2" class="peer hidden">
                    <label for="faq-2"
                        class="flex items-center justify-between w-full text-left text-gray-800 font-medium text-lg cursor-pointer">
                        <span>What types of event alerts can I get?</span>
                        <svg class="w-5 h-5 transition-transform duration-300 peer-checked:rotate-180"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </label>
                    <div
                        class="max-h-0 overflow-hidden peer-checked:max-h-[500px] transition-all duration-300 mt-2 text-gray-600">
                        If you are still confused and not sure how our products work or how they can help you in
                        building an excellent digital experience, you can talk to us via live chat, support, or email.
                        We are always here to help you out.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="border-b border-gray-200 pb-4">
                    <input type="checkbox" id="faq-3" class="peer hidden">
                    <label for="faq-3"
                        class="flex items-center justify-between w-full text-left text-gray-800 font-medium text-lg cursor-pointer">
                        <span>How do I post about an event?</span>
                        <svg class="w-5 h-5 transition-transform duration-300 peer-checked:rotate-180"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </label>
                    <div
                        class="max-h-0 overflow-hidden peer-checked:max-h-[500px] transition-all duration-300 mt-2 text-gray-600">
                        The VAT imposed by the government on the food price will be added and visible to you while
                        placing the order. Also, the restaurant’s service charge if there is any. Our customer doesn't
                        have to pay any duties or taxes upon delivery of their order.
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="border-b border-gray-200 pb-4">
                    <input type="checkbox" id="faq-4" class="peer hidden">
                    <label for="faq-4"
                        class="flex items-center justify-between w-full text-left text-gray-800 font-medium text-lg cursor-pointer">
                        <span>How do I subscribe to the event alert?</span>
                        <svg class="w-5 h-5 transition-transform duration-300 peer-checked:rotate-180"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </label>
                    <div
                        class="max-h-0 overflow-hidden peer-checked:max-h-[500px] transition-all duration-300 mt-2 text-gray-600">
                        If you are still confused and not sure how our products work or how they can help you in
                        building an excellent digital experience, you can talk to us via live chat, support, or email.
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>