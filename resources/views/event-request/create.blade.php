<x-layout>
    <section class="bg-bottom bg-no-repeat')] " style="
     background-image: url('{{ Vite::asset('resources/assets/background3.svg') }}');
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

        <!-- Form Section -->
        <div class="w-full max-w-2xl bg-white text-black rounded-lg shadow-lg p-8 mt-6">
            <form action="{{ route('event-request.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-6">
                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block text-sm font-medium mb-2">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                            class="w-full bg-gray-50 border border-gray-300 text-black text-sm rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter your name">
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
                            placeholder="Enter your email">
                        @error('email')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Phone Field -->
                    <div>
                        <label for="phone" class="block text-sm font-medium mb-2">Phone</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                            class="w-full bg-gray-50 border border-gray-300 text-black text-sm rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter your phone number">
                        @error('phone')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Location Input -->
                    <div>
                        <label for="location" class="block text-sm font-medium mb-2">Location</label>
                        <input type="text" name="location" id="location" value="{{ old('location') }}"
                            class="w-full bg-gray-50 border border-gray-300 text-black text-sm rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Enter your province">
                        @error('location')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>


                    <!-- Date Field -->
                    <div>
                        <label for="date" class="block text-sm font-medium mb-2">Event Date</label>
                        <input type="datetime-local" name="date" id="date" value="{{ old('date') }}"
                            class="w-full bg-gray-50 border border-gray-300 text-black text-sm rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500">
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
                        placeholder="Provide details about the event">{{ old('details') }}</textarea>
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
    </section>
</x-layout>