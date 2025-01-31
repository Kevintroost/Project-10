<x-layout :title="'Results | Opus Events'">
    <section class="bg-gray-700 bg-blend-multiply flex items-center justify-center" style="
        background-image: url('{{ Vite::asset('resources/assets/background2.jpg') }}');
        background-position: center;
        background-size: cover;
    ">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-4 lg:py-16">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                Results
            </h1>
        </div>
    </section>

    <section class="bg-white antialiased">
        <div class="flow-root max-w-3xl mx-auto mt-8 sm:mt-12 lg:mt-16 mb-16">
            <nav class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ url('index') }}" class="text-gray-700 hover:text-blue-600">

                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <a href="{{ url('events/index') }}"
                                class="ml-1 text-gray-700 hover:text-blue-600 md:ml-2">Events</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="ml-1 text-gray-500 md:ml-2">{{ request('query') ?: 'Results' }}</span>
                        </div>
                    </li>
                </ol>
            </nav></svg>

            <div class="flex items-center bg-white rounded-lg shadow-lg px-4  mb-16 border border-gray-200 ">

                <form action="{{ route('results') }}" method="GET" class="flex items-center bg-white   p-4">

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
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
                        </svg>
                        <input type="text" name="location" placeholder="Enter event location"
                            class="ml-2 focus:outline-none text-gray-600" aria-label="Enter event location" />
                    </div>

                    <!-- Date picker with a better description -->
                    <div class="flex items-center px-4">
                        <input type="date" name="date" class="ml-2 focus:outline-none text-gray-400 bg-transparent"
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
            <div class="-my-4 divide-y divide-gray-200 dark:divide-neutral-800">
                @if ($events->isEmpty())
                    <div class="text-center py-8">
                        <h3 class="text-xl font-semibold text-gray-500 dark:text-gray-400">
                            No events found. Try searching for something else.
                        </h3>
                    </div>
                @else
                    @foreach ($events as $event)
                        <div class="flex items-center py-4">
                            <!-- Date on the left -->
                            <div class="flex-shrink-0 p-6 text-center">
                                <p class="text-lg font-bold text-gray-700">
                                    {{ \Carbon\Carbon::parse($event->event_date)->format('d') }}
                                </p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">
                                    {{ \Carbon\Carbon::parse($event->event_date)->format('M Y') }}
                                </p>
                            </div>

                            <!-- Image next to the date -->
                            <div class="flex-shrink-0 w-64 h-32 overflow-hidden">
                                <img src="{{ asset($event->event_picture) }}" alt="{{ $event->event_name }}"
                                    class="object-cover w-full h-full">
                            </div>

                            <!-- Event details in the middle -->
                            <div class="flex-1 pl-6">
                                <h3 class="text-lg font-semibold text-gray-800">
                                    <a href="{{ route('events.show', ['id' => $event->id]) }}" class="hover:underline">
                                        {{ $event->event_name }}
                                    </a>
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    {{ $event->location }}
                                </p>
                            </div>

                            <!-- Tickets & Info button on the right -->
                            <a href="{{ route('events.show', ['id' => $event->id]) }}"
                                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-gray-600">
                                Tickets & Info
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <!-- Pagination Section -->
        <div class="flex items-center justify-center space-x-2 mt-6">
            @if ($events->onFirstPage())
                <button class="px-4 py-2 text-gray-500 bg-gray-100 rounded-md cursor-not-allowed" disabled>
                    Previous
                </button>
            @else
                <a href="{{ $events->appends(request()->query())->previousPageUrl() }}"
                    class="px-4 py-2 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                    Previous
                </a>
            @endif

            @for ($i = 1; $i <= $events->lastPage(); $i++)
                @if ($i == $events->currentPage())
                    <button class="px-4 py-2 text-white bg-neutral-800 rounded-md">
                        {{ $i }}
                    </button>
                @else
                    <a href="{{ $events->appends(request()->query())->url($i) }}" class="px-4 py-2 text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200">
                        {{ $i }}
                    </a>
                @endif
            @endfor

            @if ($events->hasMorePages())
                <a href="{{ $events->appends(request()->query())->nextPageUrl() }}"
                    class="px-4 py-2 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200">
                    Next
                </a>
            @else
                <button class="px-4 py-2 text-gray-500 bg-gray-100 rounded-md cursor-not-allowed" disabled>
                    Next
                </button>
            @endif
        </div>

        <!-- Subscription Section -->
        <div class="flow-root max-w-3xl mx-auto mt-8 sm:mt-12 lg:mt-16 mb-16">
            <div class="bg-white flex">
                <div
                    class="bg-blue-600 text-white text-center p-6 rounded-md w-full flex flex-col justify-center items-center">
                    <h2 class="text-xl font-bold mb-4">STAY UP TO DATE</h2>
                    <p class="text-sm mb-4">
                        Sign up for the Opus Events mailing list and receive the latest concert news from all major
                        shows every week. Be the first to know when a concert goes on sale and get access to
                        exclusive presales!
                    </p>
                    <form class="flex items-center flex-wrap justify-center gap-2" action="{{ route('email.create') }}"
                        method="POST">
                        @csrf
                        <input type="email" name="email" placeholder="Enter your email"
                            class="px-4 py-2 w-full md:w-auto rounded-md border border-gray-600 bg-neutral-100 text-neutral-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            value="{{ old('email') }}">
                        <input value="Subscribe" type="submit"
                            class="px-4 py-2 border border-neutral-200 text-white font-semibold rounded-md cursor-pointer">
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>