<x-layout>


    <section class="bg-center bg-no-repeat" style="
     background-image: url('{{ Vite::asset('resources/assets/background.svg') }}');
    ">
        <div class="px-4 mx-auto max-w-screen-xl  py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                Transform Your Events, Elevate Your Experiences</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl">Whether it's a concert, wedding, corporate
                event, or
                party, we handle the details so you can enjoy the moment.<br> Let's create something amazing together!
            </p>

    </section>


    <section class="bg-white">

        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <h1 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-black md:text-5xl lg:text-6xl">
                Search for upcoming events</h1>
            <div
                class="flex flex-col md:flex-row items-center bg-neutral-800  p-4 rounded-lg space-y-4 md:space-y-0 md:space-x-4 mb-8">

                <input type="text" placeholder="Search events"
                    class="px-4 py-2 w-full md:w-auto rounded-md border border-gray-600 bg-neutral-900 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                <input type="text" placeholder="Search dates"
                    class="px-4 py-2 w-full md:w-auto rounded-md border border-gray-600 bg-neutral-900 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                <input type="text" placeholder="Location"
                    class="px-4 py-2 w-full md:w-auto rounded-md border border-gray-600 bg-neutral-900 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                <input type="text" placeholder="Type of event"
                    class="px-4 py-2 w-full md:w-auto rounded-md border border-gray-600 bg-neutral-900 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                <button class="bg-blue-700 text-white py-2 px-6 rounded-md hover:bg-blue-600">
                    Search
                </button>
            </div>
            
            <section class="bg-white">
                <div class="gap-8 items-center py-8 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 ">

                    <div class="mt-4 md:mt-0">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text">Discover, Connect, and Celebrate.
                        </h2>
                        <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">Join us as we explore new
                            ways to make events more engaging and inclusive. With tools that enhance participation and
                            ideas that spark innovation, we’re creating opportunities for people to connect with what
                            they love and with one another.
                        </p>
                        <a href="#"
                            class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                            Get started
                            <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                    <img class="w-full " src="{{ Vite::asset('resources/assets/events.jpeg') }}" alt="dashboard image">

                </div>
            </section>

            <div
                class="bg-gray-50 dark:bg-neutral-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
                <a
                    class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                    <svg class="w-[12px] h-[12px] text-gray-800 dark:text-blue-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                            clip-rule="evenodd" />
                    </svg>

                    Events
                </a>
                <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">Take a look at
                    all
                    our events</h1>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">We have a wide range of events
                    coming up, take a look or use the search bar above.</p>
                <a href="{{ url('/events') }}"
                    class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Read more
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div
                    class="bg-gray-50 dark:bg-neutral-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-20">
                    <a
                        class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                        <svg class="w-[12px] h-[12px] text-green-800 dark:text-green-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                clip-rule="evenodd" />
                        </svg>
                        About us
                    </a>
                    <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Get to know us</h2>
                    <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">As a concert promoter in
                        the
                        Netherlands, we have been sharing our love for music with artists and visitors.</p>
                    <a href="{{ url('/aboutus') }}"
                        class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Read
                        more
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                <div
                    class="bg-gray-50 dark:bg-neutral-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-20">
                    <a href="#"
                        class="bg-purple-100 text-purple-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-purple-400 mb-2">
                        <svg class="w-[12px] h-[12px] text-gray-800 dark:text-purple-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4" />
                        </svg>

                        Request
                    </a>
                    <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">We deliver the best help
                        to
                        create an event to your liking</h2>
                    <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Send your request and
                        receive a
                        quote the same week</p>
                    <a href="{{ url('/contact') }}"
                        class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Read
                        more
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ Vite::asset('resources/assets/linkinpark.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ Vite::asset('resources/assets/slipknot.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ Vite::asset('resources/assets/pinkpop.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ Vite::asset('resources/assets/slipknot.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ Vite::asset('resources/assets/pinkpop.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="{{ Vite::asset('resources/assets/linkinpark.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>








</x-layout>