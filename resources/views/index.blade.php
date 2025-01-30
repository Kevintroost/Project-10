<meta name="description" content="Opus Events offers expert event planning services for concerts, weddings, corporate events, and parties. Discover tailored experiences, submit event requests, and get in touch with our team to create unforgettable moments.">

<x-layout :title="'Home | Opus Events'">
    <section class="bg-center bg-no-repeat"
        style="background-image: url('{{ Vite::asset('resources/assets/background.svg') }}');">

        <!-- Main content section for SEO -->
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">

                <!-- SEO optimized heading -->
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Transform Your Events, Elevate Your Experiences
                </h1>

                <!-- SEO optimized paragraph with more details -->
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Whether you're planning a concert, wedding, corporate event, or party, we handle the details so you
                    can fully enjoy your special moment.
                    Let’s collaborate to create unforgettable experiences tailored to your vision!
                </p>

                <div class="flex">
                    <div class="flex items-center bg-white rounded-lg shadow-lg px-4 pt-2">
                        <form action="{{ route('results') }}" method="GET" class="flex items-center bg-white px-4 pt-2">

                            <!-- Search Event Input with placeholder including keywords -->
                            <div class="flex items-center border-r border-gray-300 pr-4">
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 10-14 0 7 7 0 0014 0z" />
                                </svg>
                                <input type="text" name="query" placeholder="Search for events"
                                    class="ml-2 focus:outline-none text-gray-600" aria-label="Search for events" />
                            </div>

                            <!-- Search Location Dropdown with descriptive placeholder -->
                            <div class="flex items-center border-r border-gray-300 px-4">
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
                                </svg>
                                <input type="text" name="location" placeholder="Enter event location"
                                    class="ml-2 focus:outline-none text-gray-600" aria-label="Enter event location" />
                            </div>

                            <!-- Date picker with a better description -->
                            <div class="flex items-center px-4">
                                <input type="date" name="date"
                                    class="ml-2 focus:outline-none text-gray-400 bg-transparent"
                                    aria-label="Select event date" />
                            </div>

                            <!-- Search Button with improved accessibility -->
                            <button class="ml-4 p-2 bg-blue-600 text-white rounded-full shadow-md"
                                aria-label="Search for events">
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

            <!-- Image Section with alt text for SEO -->
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ Vite::asset('resources/assets/stage.png') }}"
                    alt="Event stage setup for weddings, concerts, and parties" class="max-w-full h-auto">
            </div>
        </div>

    </section>
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-8 lg:px-6">
            <!-- Centered Section Title -->
            <div class="max-w-screen-md mb-8 lg:mb-16 text-center mx-auto">
                <h2 class="mb-4 text-4xl font-extrabold text-gray-900">
                    Discover More
                </h2>
            </div>

            <!-- Left-aligned Grid for Icons and Content -->
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <!-- Event Request Section -->
                <div class="flex items-start space-x-4">
                    <div class="flex justify-center items-center mb-4 w-12 p-2 rounded-full bg-blue-500">
                        <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"
                            alt="Event Request Icon">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 20V7m0 13-4-4m4 4 4-4m4-12v13m0-13 4 4m-4-4-4 4" />
                        </svg>
                    </div>
                    <div>
                        <a href="{{ url('event-request/create') }}" class="hover:underline">
                            <h3 class="mb-2 text-xl font-bold">Submit an event request
                            </h3>
                        </a>
                        <p class="text-gray-500 dark:text-gray-400">
                            Submit your event requests and let our expert event planners help bring your vision to life.
                            Whether it's corporate, social, or private events, we are dedicated to making your event a
                            success.
                        </p>
                    </div>
                </div>

                <!-- About Us Section -->
                <div class="flex items-start space-x-4">
                    <div class="flex justify-center items-center mb-4 w-12 p-2 rounded-full bg-blue-500">
                        <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"
                            alt="About Us Icon">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 9h3m-3 3h3m-3 3h3m-6 1c-.306-.613-.933-1-1.618-1H7.618c-.685 0-1.312.387-1.618 1M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm7 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                        </svg>
                    </div>
                    <div>
                        <a href="{{ url('/about-us/create') }}" class="hover:underline">
                            <h3 class="mb-2 text-xl font-bold">Learn more about us</h3>
                        </a>
                        <p class="text-gray-500 dark:text-gray-400">
                            Learn more about our team, our mission, and our commitment to creating unforgettable
                            experiences. We’re here to help you make your event dreams a reality.
                        </p>
                    </div>
                </div>

                <!-- Contact Section -->
                <div class="flex items-start space-x-4">
                    <div class="flex justify-center items-center mb-4 w-12 p-2 rounded-full bg-blue-500">
                        <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"
                            alt="Contact Icon">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17h6l3 3v-3h2V9h-2M4 4h11v8H9l-3 3v-3H4V4Z" />
                        </svg>
                    </div>
                    <div>
                        <a href="{{ url('/contact/create') }}" class="hover:underline">
                            <h3 class="mb-2 text-xl font-bold">Get in touch with us</h3>
                        </a>
                        <p class="text-gray-500 dark:text-gray-400">
                            Get in touch with us to discuss your event needs, ask questions, or provide feedback. We’re
                            here to help you create the perfect event experience.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-8 px-4 mx-auto max-w-screen-xl lg:py-8">
        <!-- First Section: Discover, Connect, and Celebrate -->
        <div class="gap-8 items-center py-6 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2">

            <!-- Text Section -->
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">
                    Discover, Connect, and Celebrate with Us
                </h2>
                <p class="mb-2 font-light text-gray-400 md:text-lg dark:text-gray-400">
                    Join us as we explore new ways to make events more engaging and inclusive. With tools that enhance
                    participation and ideas that spark innovation, we’re creating opportunities for people to connect
                    with what they love and with one another.
                </p>
            </div>

            <!-- Image Section -->
            <img class="w-full rounded-lg" src="{{ Vite::asset('resources/assets/events.jpeg') }}"
                alt="Exciting Event Experience Image showcasing engagement and celebration" />

        </div>

        <!-- Second Section: Unleash the Power of Events -->
        <div class="gap-8 items-center mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 mb-6">

            <!-- Image Section -->
            <img class="w-full rounded-lg" src="{{ Vite::asset('resources/assets/wacken.jpg') }}"
                alt="Live music concert at Wacken Festival, showcasing the excitement of live events" />

            <!-- Text Section -->
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">
                    Unleash the Power of Events with Unforgettable Experiences
                </h2>
                <p class="mb-6 font-light text-gray-400 md:text-lg">
                    Experience the thrill of live music, the joy of celebrations, and the excitement of unique events.
                    Our platform brings you closer to the action, offering a seamless way to discover and attend events
                    that match your interests. Join us and be part of unforgettable moments.
                </p>
            </div>
        </div>
    </section>
    <section class="bg-white py-8 px-4 mx-auto max-w-screen-xl lg:py-8">
        <!-- Client Testimonial Section -->
        <blockquote class="flex flex-col items-center p-4 ">
            <!-- Rating Stars -->
            <div class="flex space-x-1">
                <span class="text-yellow-400" aria-label="5 stars">&#9733;</span>
                <span class="text-yellow-400" aria-label="5 stars">&#9733;</span>
                <span class="text-yellow-400" aria-label="5 stars">&#9733;</span>
                <span class="text-yellow-400" aria-label="5 stars">&#9733;</span>
                <span class="text-yellow-400" aria-label="5 stars">&#9733;</span>
            </div>

            <!-- Testimonial Quote -->
            <p class="max-w-4xl text-xl font-medium text-center md:text-2xl lg:text-3xl">
                "Working with Opus events was an absolute delight! From the initial consultation to the execution of our
                event, their team was professional, attentive, and incredibly creative. They took care of every detail,
                allowing us to enjoy the day without any stress."
            </p>

            <!-- Testimonial Author Information -->
            <footer class="flex items-center gap-3 mt-6">
                <!-- Author Image -->
                <img class="flex-shrink-0 w-12 h-12 border rounded-full border-black/10"
                    src="{{ Vite::asset('resources/assets/person1.png') }}"
                    alt="Sebastiaan Kloos, CEO of NeuroSync Technologies" loading="lazy">

                <!-- Author Info with Link -->
                <a href="https://www.neurosync.com" target="_blank" rel="noopener noreferrer"
                    class="inline-block font-bold tracking-tight">
                    <p>Elara Voss</p>
                    <p class="font-medium text-black/60">CEO of NeuroSync Technologies</p>
                </a>
            </footer>
        </blockquote>
    </section>
    <section class="bg-white py-8 px-4 mx-auto max-w-screen-xl lg:py-8">
        <!-- Image Gallery Section -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-16">
            @foreach ($fotoGaleries as $fotoGalerie)
                <div class="relative">
                    <!-- Image with Alt Text for Accessibility and SEO -->
                    <img src="{{ asset('images/' . $fotoGalerie->foto) }}"
                        alt="{{ $fotoGalerie->title ?? 'Event Image Gallery' }}" class="w-full h-64 object-cover rounded-lg"
                        loading="lazy">
                </div>
            @endforeach
        </div>
    </section>
    <section class="bg-no-repeat bg-center bg-gray-700 bg-blend-multiply"
        style="background-image: url('{{ Vite::asset('resources/assets/concert.png') }}'); background-size: cover;">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <!-- Newsletter Sign-Up Section -->
            <div class="mx-auto max-w-screen-md sm:text-center">
                <!-- Heading for Newsletter Signup -->
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-neutral-100 sm:text-4xl">
                    Sign up for our newsletter
                </h2>
                <!-- Description for Newsletter -->
                <p class="mx-auto mb-8 max-w-2xl font-light text-neutral-200 md:mb-12 sm:text-xl">
                    Stay up to date with our latest updates, announcements, and exclusive discounts. Sign up with your
                    email for all the latest news and offers.
                </p>

                <!-- Newsletter Form -->
                <form class="flex items-center flex-wrap justify-center gap-2" action="{{ route('email.create') }}"
                    method="POST">
                    @csrf
                    <!-- Email Input with Label for Accessibility -->
                    <label for="email" class="sr-only">Enter your email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email"
                        class="px-4 py-2 w-full md:w-auto rounded-md border border-gray-600 bg-neutral-100 text-neutral-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        value="{{ old('email') }}" required aria-describedby="emailHelp">
                    <!-- Submit Button -->
                    <input value="Subscribe" type="submit"
                        class="px-4 py-2 bg-blue-700 text-white font-semibold rounded-md cursor-pointer"
                        aria-label="Subscribe to our newsletter">
                </form>
            </div>
        </div>
    </section>
</x-layout>