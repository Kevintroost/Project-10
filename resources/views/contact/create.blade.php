<x-layout>



    <section class="flex flex-col items-center bg-gray-100 py-12">
    @if(session('success'))
            <div class="w-full max-w-2xl">
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
        @endif
    <div class="w-full max-w-4xl bg-white text-gray-800 rounded-lg shadow-lg p-8 mt-6 flex flex-col md:flex-row">
        <!-- Form Section -->
        <div class="w-full md:w-2/3">
            <h2 class="text-3xl font-semibold mb-4 text-center md:text-left">Contact Us</h2>
            <p class="text-center md:text-left mb-6 text-gray-600">Use this form for all general inquiries. We monitor these responses constantly during working hours.</p>
            <form action="{{ route('contact.store') }}" method="POST" id="contactForm">
                @csrf
                <div class="grid grid-cols-1 gap-6">
                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block text-sm font-medium mb-2">Full Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                            class="w-full bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg px-4 py-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter your name">
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
                            placeholder="Enter your email">
                        @error('email')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Phone Field -->
                    <div>
                        <label for="phone" class="block text-sm font-medium mb-2">Phone Number</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                            class="w-full bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg px-4 py-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter your phone number">
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
                        placeholder="Enter your message here">{{ old('details') }}</textarea>
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

        <!-- Image Section -->
        <div class="w-full md:w-1/3 flex justify-center items-center mt-8 md:mt-0">
            <img src="{{ Vite::asset('resources/assets/contact.png') }}" alt="Contact Us Illustration" class="max-w-full h-auto ">
        </div>
    </div>
</section>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d75043.42618233351!2d4.688596370471655!3d52.10889429999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5dac4766bd899%3A0x93216324e3b6c220!2sOpus%20Nederland%20BV!5e1!3m2!1snl!2snl!4v1733914695933!5m2!1snl!2snl" width="1920" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>









</x-layout>