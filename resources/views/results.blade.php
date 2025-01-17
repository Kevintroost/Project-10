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
        <div class="max-w-3xl mx-auto text-center">
            <!-- <h2 class="text-4xl font-extrabold leading-tight tracking-tight text-gray-900 ">
                            Agenda
                        </h2> -->
        </div>

        <div class="flow-root max-w-3xl mx-auto mt-8 sm:mt-12 lg:mt-16 mb-16">
            <div class="-my-4 divide-y divide-gray-200 dark:divide-gray-700">
                @if ($events->isEmpty())
                    <div class="text-center py-8">
                        <h3 class="text-xl font-semibold text-gray-500 dark:text-gray-400">
                            No events found. Try searching for something else.
                        </h3>
                    </div>
                @else
                    @foreach ($events as $event)
                        <div class="flex items-center justify-between gap-2 py-4 sm:gap-6">
                            <!-- Date on the left -->
                            <p class="text-lg font-normal text-gray-500 sm:text-left dark:text-gray-400">
                                {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}
                            </p>

                            <!-- Name in the middle -->
                            <h3 class="text-lg  text-left flex-1">
                                <a class="font-semibold" href="{{ route('events.show', ['id' => $event->id]) }}"
                                    class="hover:underline">
                                    {{ $event->event_name }}
                                </a>
                                -
                                <a class="text-gray-600" href="{{ route('events.show', ['id' => $event->id]) }}"
                                    class="hover:underline">
                                    {{ $event->location }}
                                </a>
                            </h3>

                            <!-- Icon on the right -->
                            <a href="{{ route('events.show', ['id' => $event->id]) }}" class="hover:underline"
                                class="w-[19px] h-[19px] ml-2 text-gray-800 dark:text-black" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778" />
                                </svg>
                            </a>
                        </div>
                    @endforeach
                @endif
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
