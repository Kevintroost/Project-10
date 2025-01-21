<x-layout :title="'Event requests | Opus Events'">
    <section class="bg-gray-700 bg-blend-multiply flex items-center justify-center" style="
        background-image: url('{{ Vite::asset('resources/assets/background2.jpg') }}');
        background-position: center;
        background-size: cover;
    ">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-4 lg:py-16">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                Event request</h1>
        </div>
    </section>

    <section class="flex flex-col items-center justify-center py-8 bg-gray-100 bg-cover bg-center"
        style="background-image: url('{{ Vite::asset('resources/assets/wavebackground.svg') }}');">
        <!-- Alert Section -->
        @if(session('success'))
            <div class="w-full max-w-2xl mb-6">
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
        <div class="flex flex-col md:flex-row w-full max-w-7xl gap-6">
            <div class="md:w-1/2 p-6">
                <h2 class="text-3xl font-semibold mb-4 text-center md:text-left">Request a quote for your event</h2>
                <p class="text-center md:text-left mb-6 text-gray-600">If you want us to organize your events, fill out
                    this form and give as much information as you can. We will contact you as soon as possible.</p>

                <h1 class="text-2xl font-semibold  mb-2">Contact Details</h1>
                <div class="flex items-center space-x-2 mb-2">

                    <span class="text-red-500">
                        <svg class="w-5 h-5 text-blue-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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
                <div class="flex items-center space-x-2 mb-6">
                    <span class="text-red-500">
                        <svg class="w-5 h-5 text-blue-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z" />
                        </svg>


                    </span>
                    <span>06-1234567</span>
                </div>
                <div class="flex space-x-6">
                    <!-- Facebook Icon -->
                    <a href="#" class="text-blue-700 hover:text-gray-700">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <!-- Instagram Icon -->
                    <a href="#" class="text-blue-700 hover:text-gray-700">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <!-- WhatsApp Icon -->
                    <a href="#" class="text-blue-700 hover:text-gray-700">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                clip-rule="evenodd" />
                            <path fill="currentColor"
                                d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Form Section -->
            <div class="md:w-1/2 bg-white text-black rounded-lg shadow-lg p-8">
                <form action="{{ route('event-request.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 gap-6">
                        <!-- Name Field -->
                        <div>
                            <label for="name" class="block text-sm font-medium mb-2">Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="w-full bg-gray-50 border border-gray-300 text-black text-sm rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter your name" required>
                            @error('name')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-sm font-medium mb-2">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="w-full bg-gray-50 border border-gray-300 text-black text-sm rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter your email" required>
                            @error('email')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Phone Field -->
                        <div>
                            <label for="phone" class="block text-sm font-medium mb-2">Phone</label>
                            <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                                class="w-full bg-gray-50 border border-gray-300 text-black text-sm rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter your phone number" required>
                            @error('phone')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Location Input -->
                        <div>
                            <label for="location" class="block text-sm font-medium mb-2">Location</label>
                            <input type="text" name="location" id="location" value="{{ old('location') }}"
                                class="w-full bg-gray-50 border border-gray-300 text-black text-sm rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter the location" required>
                            @error('location')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Date Field -->
                        <div>
                            <label for="date" class="block text-sm font-medium mb-2">Event Date</label>
                            <input type="datetime-local" name="date" id="date" value="{{ old('date') }}"
                                class="w-full bg-gray-50 border border-gray-300 text-black text-sm rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500"
                                required>
                            @error('date')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Details Field -->
                    <div class="mt-4">
                        <label for="details" class="block text-sm font-medium mb-2">Details</label>
                        <textarea id="details" name="details" rows="4"
                            class="w-full bg-gray-50 border border-gray-300 text-black text-sm rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Provide details about the event" required>{{ old('details') }}</textarea>
                        @error('details')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full py-2.5 mt-6 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md focus:ring-4 focus:ring-blue-400 focus:ring-opacity-50">
                        Submit Event Request
                    </button>
                </form>
            </div>
        </div>
    </section>
</x-layout>