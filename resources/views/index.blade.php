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
                        <form action="{{ route('results') }}" method="GET"
                            class="flex items-center bg-white px-4 py-2">
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


    <section class="bg-white py-8 px-4 mx-auto max-w-screen-xl lg:py-16">



        <div class="gap-8 items-center py-8 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16  ">

            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text">Discover, Connect, and Celebrate.
                </h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">Join us as we explore new
                    ways to make events more engaging and inclusive. With tools that enhance participation and
                    ideas that spark innovation, we’re creating opportunities for people to connect with what
                    they love and with one another.
                </p>
            </div>
            <img class="w-full rounded-lg " src="{{ Vite::asset('resources/assets/events.jpeg') }}"
                alt="dashboard image">

        </div>


        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($fotoGaleries as $fotoGalerie)
                <div class="relative">
                    <img src="{{ asset('images/' . $fotoGalerie->foto) }}" alt="foto_galerij"
                        class="w-full h-64 object-cover rounded-lg">
                </div>
            @endforeach
        </div>


        

    </section>








</x-layout>