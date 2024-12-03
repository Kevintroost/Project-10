<x-layout>


    <section class="bg-center bg-no-repeat" style="
     background-image: url('{{ Vite::asset('resources/assets/background.jpg') }}');
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
            <div class="max-w-7xl mx-auto mb-20">

                <!-- Articles Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Article Card -->
                    <div class="bg-neutral-800 text-white rounded-lg overflow-hidden shadow-md">
                        <img src="{{ Vite::asset('resources/assets/linkinpark.jpg') }}" alt="linkin park"
                            class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold mb-2">Linkin park</h3>
                            <p class="text-gray-400 text-sm mb-4">
                                LINKIN PARK is terug en ze staan klaar om hun fans te trakteren op nieuwe muziek van het
                                album From Zero, waaronder de krachtige single Emptiness Machine.
                            </p>
                        </div>
                    </div>

                    <!-- Article Card -->
                    <div class="bg-neutral-800 text-white rounded-lg overflow-hidden shadow-md">
                        <img src="{{ Vite::asset('resources/assets/slipknot.jpg') }}" alt="Enterprise design tips"
                            class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold mb-2">Slipknot</h3>
                            <p class="text-gray-400 text-sm mb-4">
                                Nooit eerder was er zo'n unieke band in de nu-metalcore scene als Slipknot. De band is
                                bekend om hun maskers en hun energieke live shows.
                            </p>
                        </div>
                    </div>

                    <!-- Article Card -->
                    <div class="bg-neutral-800 text-white rounded-lg overflow-hidden shadow-md">
                        <img src="{{ Vite::asset('resources/assets/pinkpop.jpg') }}" alt="We partnered with Google"
                            class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold mb-2">Pinkpop</h3>
                            <p class="text-gray-400 text-sm mb-4">
                                Van eendagsfestival op pinkstermaandag in 1970 tot volwaardig weekendfestival met een
                                groot aanbod (inter)nationaal nieuw talent, toffe areas, een festivalmarkt en allerlei
                                randactiviteiten.
                            </p>

                        </div>
                    </div>

                    <!-- Article Card -->
                    <div class="bg-neutral-800 text-white rounded-lg overflow-hidden shadow-md">
                        <img src="{{ Vite::asset('resources/assets/babymetal.png') }}"
                            alt="Our first project with React" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold mb-2">Babymetal</h3>
                            <p class="text-gray-400 text-sm mb-4">
                                De Japanse meiden van BABYMETAL, Su-metal en Moametal, zijn al een metalsensatie sinds
                                hun 12e en 14e.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-20">
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                </div>
            </div>
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
                    class="bg-gray-50 dark:bg-neutral-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
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
                    class="bg-gray-50 dark:bg-neutral-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
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
        </div>
    </section>








</x-layout>