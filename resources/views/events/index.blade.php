<x-layout :title="'Events | Opus Events'">
    <section class="bg-gray-700 bg-blend-multiply flex items-center justify-center" style="
        background-image: url('{{ Vite::asset('resources/assets/background2.jpg') }}');
        background-position: center;
        background-size: cover;
    ">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-4 lg:py-16">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                Upcoming Events
            </h1>
        </div>
    </section>
    <section class="bg-white antialiased">


        <div class="flow-root max-w-3xl mx-auto mt-8 sm:mt-12 lg:mt-16 mb-16">
            <div class="-my-4 divide-y divide-gray-200 dark:divide-neutral-800">
                @foreach ($events->sortBy('event_date') as $event)
                    <div class="flex items-center  py-4">
                        <!-- Date on the left -->
                        <div class="flex-shrink-0  p-6 text-center">
                            <p class="text-lg font-bold text-gray-700 ">
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
                            class="bg-neutral-800 text-white px-4 py-2 rounded hover:bg-gray-600">
                            Tickets & Info
                        </a>
                    </div>
                @endforeach
            </div>
        </div>



        <div class="flex items-center justify-center space-x-2 mt-6">
            <!-- Previous Button -->
            @if ($events->onFirstPage())
                <button class="px-4 py-2 text-gray-500 bg-gray-100 rounded-md cursor-not-allowed" disabled>
                    Previous
                </button>
            @else
                <a href="{{ $events->previousPageUrl() }}"
                    class="px-4 py-2 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                    Previous
                </a>
            @endif

            <!-- Page Numbers -->
            @if ($events->lastPage() > 9)
                @if ($events->currentPage() > 4)
                    <a href="{{ $events->url(1) }}"
                        class="px-4 py-2 text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                        1
                    </a>
                    @if ($events->currentPage() > 5)
                        <span class="px-4 py-2">...</span>
                    @endif
                @endif

                @for ($i = max(1, $events->currentPage() - 1); $i <= min($events->lastPage(), $events->currentPage() + 1); $i++)
                    @if ($i == $events->currentPage())
                        <button
                            class="px-4 py-2 text-white bg-neutral-800 rounded-md hover:bg-neutral-800 focus:outline-none focus:ring focus:ring-neutral-300">
                            {{ $i }}
                        </button>
                    @else
                        <a href="{{ $events->url($i) }}"
                            class="px-4 py-2 text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                            {{ $i }}
                        </a>
                    @endif
                @endfor

                @if ($events->currentPage() < $events->lastPage() - 3)
                    @if ($events->currentPage() < $events->lastPage() - 4)
                        <span class="px-4 py-2">...</span>
                    @endif
                    <a href="{{ $events->url($events->lastPage()) }}"
                        class="px-4 py-2 text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                        {{ $events->lastPage() }}
                    </a>
                @endif
            @else
                @for ($i = 1; $i <= $events->lastPage(); $i++)
                    @if ($i == $events->currentPage())
                        <button
                            class="px-4 py-2 text-white bg-neutral-800 rounded-md hover:bg-neutral-800 focus:outline-none focus:ring focus:ring-neutral-300">
                            {{ $i }}
                        </button>
                    @else
                        <a href="{{ $events->url($i) }}"
                            class="px-4 py-2 text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                            {{ $i }}
                        </a>
                    @endif
                @endfor
            @endif

            <!-- Next Button -->
            @if ($events->hasMorePages())
                <a href="{{ $events->nextPageUrl() }}"
                    class="px-4 py-2 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                    Next
                </a>
            @else
                <button class="px-4 py-2 text-gray-500 bg-gray-100 rounded-md cursor-not-allowed" disabled>
                    Next
                </button>
            @endif
        </div>
        <div class="flow-root max-w-3xl mx-auto mt-8 sm:mt-12 lg:mt-16 mb-16">

            <!-- Blue Section -->
            <div class="bg-white flex">
                <div
                    class="bg-blue-600 text-white text-center p-6 rounded-md w-full flex flex-col justify-center items-center">
                    <h2 class="text-xl font-bold mb-4">STAY UP TO DATE</h2>
                    <p class="text-sm mb-4">

                        Sign up for the Opus Events mailing list and receive the latest concert news from all major
                        shows every week. Be the first to know when a concert goes on sale and get access to exclusive
                        presales!
                    </p>
                    <form class="flex items-center flex-wrap justify-center gap-2" action="{{ route('email.create') }}"
                        method="POST">
                        @csrf
                        <input type="email" name="email" placeholder="Enter your email"
                            class="px-4 py-2 w-full md:w-auto rounded-md border border-gray-600 bg-neutral-100 text-neutral-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            value="{{ old('email') }}">
                        <input value="Subscribe" type="submit"
                            class="px-4 py-2 border border-neutral-200  text-white font-semibold rounded-md cursor-pointer">
                    </form>
                </div>
            </div>



        </div>



    </section>
</x-layout>