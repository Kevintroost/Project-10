<x-layout>
    <section class="bg-white antialiased">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <div class="gap-8 items-center py-8 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2">
                <div class="mt-4 md:mt-0">
                    <div class="max-w-3xl mx-auto text-center">
                        <h2 class="text-4xl font-extrabold leading-tight tracking-tight text-gray-900 ">
                            Upcoming Events
                        </h2>
                    </div>

                    <div class="flow-root max-w-3xl mx-auto mt-8 sm:mt-12 lg:mt-16">
                        <div class="-my-4 divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($events as $event) <!-- Loop through events -->
                                <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                                    <p
                                        class="w-40 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                                        {{ $event->event_date }} <!-- Show event date -->
                                    </p>
                                    <h3 class="text-lg font-semibold ">
                                        <a href="#" class="hover:underline">
                                            {{ $event->event_name }} <!-- Show event title -->
                                        </a>
                                    </h3>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Pagination and other parts here... -->
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
                </div>

                <img class="w-full rounded-lg " src="{{ Vite::asset('resources/assets/kanye.jpeg') }}"
                    alt="dashboard image">
            </div>
        </div>
    </section>
</x-layout>