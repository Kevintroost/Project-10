<x-layout :title="'Home | Opus Events'">


    <section class="bg-center bg-no-repeat" style="
     background-image: url('{{ Vite::asset('resources/assets/background.svg') }}');
    ">

        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0  lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Transform Your Events, Elevate Your Experiences</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Whether it's a concert, wedding, corporate
                    event, or
                    party, we handle the details so you can enjoy the moment.<br> Let's create something amazing
                    together!</p>
                <div class="flex ">
                    <div class="flex items-center bg-white rounded-lg shadow-lg px-4 py-2">
                        <form action="{{ route('results') }}" method="GET" class="flex items-center bg-white px-4 py-2">
                            <!-- Search Event Input -->
                            <div class="flex items-center border-r border-gray-300 pr-4">
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 10-14 0 7 7 0 0014 0z" />
                                </svg>
                                <input type="text" name="query" placeholder="Search Event"
                                    class="ml-2 focus:outline-none text-gray-600" />
                            </div>

                            <!-- Search Location Dropdown -->
                            <div class="flex items-center border-r border-gray-300 px-4">
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
                                </svg>
                                <input type="text" name="location" placeholder="Enter Location"
                                    class="ml-2 focus:outline-none text-gray-600" />
                            </div>

                            <!-- Date picker -->
                            <div class="flex items-center px-4 text">

                                <input type="date" name="date"
                                    class="ml-2 focus:outline-none text-gray-400 bg-transparent" />
                            </div>

                            <!-- Search Button -->
                            <button class="ml-4 p-2 bg-blue-600 text-white rounded-full shadow-md">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 10-14 0 7 7 0 0014 0z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ Vite::asset('resources/assets/stage.png') }}" alt="mockup">
            </div>
        </div>


    </section>
    <section class="bg-white">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-8 lg:px-6">
        <!-- Centered Section Title -->
        <div class="max-w-screen-md mb-8 lg:mb-16 text-center mx-auto">
            <h2 class="mb-4 text-4xl font-extrabold text-gray-900 ">Discover more</h2>
        </div>
        
        <!-- Left-aligned Grid for Icons and Content -->
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
            <div class="flex items-start space-x-4">
                <div class="flex justify-center items-center mb-4 w-12 p-2 rounded-full bg-blue-500">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <a href="{{ url('event-request/create') }}">

                    <h3  class="mb-2 text-xl font-bold hover:underline ">Event request</h3>
                    </a>
                    <p class="text-gray-500 dark:text-gray-400">
                        Submit your event requests and let us help you bring your vision to life. Our team is dedicated to making your event a success, from planning to execution.
                </p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <div class="flex justify-center items-center mb-4 w-12 p-2 rounded-full bg-blue-500">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                    </svg>
                </div>
                <div>
                    <a href="{{ url('/about-us') }}">
                    <h3 class="mb-2 text-xl font-bold hover:underline">About us</h3>
                    </a>
                    <p class="text-gray-500 dark:text-gray-400">
                        Learn more about our team, our mission, and our commitment to creating unforgettable experiences. We’re here to help you make your event dreams a reality.        
                </p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <div class="flex justify-center items-center mb-4 w-12 p-2 rounded-full bg-blue-500">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path>
                    </svg>
                </div>
                <div>
                    <a href="{{ url('/contact/create') }}">
                    <h3 class="mb-2 text-xl font-bold hover:underline ">Contact</h3>
                    </a>
                    <p class="text-gray-500 dark:text-gray-400">
                        Get in touch with us to discuss your event needs, ask questions, or provide feedback. We’re here to help you create the perfect event experience.       
                </p>
                </div>
            </div>
        </div>
    </div>
</section>



    <section class="bg-white py-8 px-4 mx-auto max-w-screen-xl lg:py-8">



        <div class="gap-8 items-center py-6 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2   ">

            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text">Discover, Connect, and Celebrate.
                </h2>
                <p class="mb-2 font-light text-gray-400 md:text-lg dark:text-gray-400">Join us as we explore new
                    ways to make events more engaging and inclusive. With tools that enhance participation and
                    ideas that spark innovation, we’re creating opportunities for people to connect with what
                    they love and with one another.
                </p>
                
            </div>
            <img class="w-full rounded-lg " src="{{ Vite::asset('resources/assets/events.jpeg') }}"
                alt="dashboard image">

        </div>
        <div class="gap-8 items-center py-8 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 ">

            <!-- Image Section -->
            <img class="w-full rounded-lg" src="{{ Vite::asset('resources/assets/wacken.jpg') }}" alt="dashboard image">

            <!-- Text Section -->
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text">Unleash the Power of Events</h2>
                <p class="mb-6 font-light text-gray-400 md:text-lg">
                    Experience the thrill of live music, the joy of celebrations, and the excitement of unique events.
                    Our platform brings you closer to the action, offering a seamless way to discover and attend events
                    that match your interests. Join us and be part of unforgettable moments.
                </p>
                

            </div>

        </div>






        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-16">
            @foreach ($fotoGaleries as $fotoGalerie)
                <div class="relative">
                    <img src="{{ asset('images/' . $fotoGalerie->foto) }}" alt="foto_galerij"
                        class="w-full h-64 object-cover rounded-lg">
                </div>
            @endforeach
        </div>




    </section>
    <section class=" bg-no-repeat bg-center bg-gray-700 bg-blend-multiply" style="
     background-image: url('{{ Vite::asset('resources/assets/concert.png') }}');
     background-size: cover;
    ">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md sm:text-center">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-neutral-100 sm:text-4xl">Sign up for our
                    newsletter</h2>
                <p class="mx-auto mb-8 max-w-2xl font-light text-neutral-200 md:mb-12 sm:text-xl">Stay up to date with
                    the roadmap progress, announcements, and exclusive discounts. Feel free to sign up with your
                    email.</p>
                <form class="flex items-center flex-wrap justify-center gap-2" action="{{ route('email.create') }}"
                    method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="Enter your email"
                        class="px-4 py-2 w-full md:w-auto rounded-md border border-gray-600 bg-neutral-100 text-neutral-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        value="{{ old('email') }}">
                    <input value="Subscribe" type="submit"
                        class="px-4 py-2 bg-blue-700  text-white font-semibold rounded-md cursor-pointer">
                </form>
            </div>
        </div>
    </section>







</x-layout>