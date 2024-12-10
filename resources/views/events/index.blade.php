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
                                    <p class="w-40 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">
                                        {{ $event->date }} <!-- Show event date -->
                                    </p>
                                    <h3 class="text-lg font-semibold ">
                                        <a href="#" class="hover:underline">
                                            {{ $event->title }} <!-- Show event title -->
                                        </a>
                                    </h3>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Pagination and other parts here... -->
                </div>

                <img class="w-full rounded-lg " src="{{ Vite::asset('resources/assets/slipknotlive.jpg') }}" alt="dashboard image">
            </div>
        </div>
    </section>
</x-layout>
