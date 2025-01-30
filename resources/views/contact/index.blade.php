<x-admin-layout :title="'Contact request | Opus Events'">
    @if(session('success'))
        <div class="w-full pt-6 px-6 items-center">
            <div class="flex items-center p-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"></svg>
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 1 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">Success alert!</span>
                    <div class="alert alert-success">{{ session('success') }}</div>
                </div>
            </div>
        </div>
    @endif

    <section class="p-6 flex flex-row gap-6 max-w-screen-xl mx-auto">
        <div class="flex flex-col items-stretch w-full">
            <h1 class="text-3xl font-bold border-b border-gray-300 pb-2 mb-6">Contact requests</h1>

            @foreach ($contacts as $contact)
                <div
                    class="flex flex-row items-center justify-between border border-gray-300 rounded-lg shadow-lg p-4 mb-4 shadow-sm bg-white">
                    <div class="flex-1">
                        <p class="text-sm text-gray-700 font-medium">{{ $contact->name }}</p>
                    </div>
                    <!-- Email field -->
                    <div class="flex-1 w-1/5 mr-4">
                        <a href="mailto:{{ $contact->email }}" class="text-sm text-gray-700 hover:underline break-words">
                            {{ $contact->email }}
                        </a>
                    </div>
                    <!-- Phone field -->
                    <div class="flex-1 w-1/5 mr-4">
                        <p class="text-sm text-gray-700 break-words">{{ $contact->phonenumber }}</p>
                    </div>
                    <!-- Message field -->
                    <div class="flex-1 w-1/5 mr-4">
                        <p class="text-sm text-gray-700 break-words">{{ $contact->message }}</p>
                    </div>
                    <div class="flex-none">
                        <form action="{{ route('contact.destroy', ['id' => $contact->id]) }}" method="POST" class="ml-4">
                            @method('DELETE')
                            @csrf
                            <input type="hidden" name="event_id" value="{{ $contact->id }}">
                            <button type="submit" class="mt-2 bg-green-600 text-white font-semibold text-sm rounded-lg py-2 px-4 focus:outline-none hover:bg-green-300 cursor-pointer">
                                Complete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach

            <!-- Pagination -->
            <div class="flex items-center justify-center space-x-2 mt-12">
                <!-- Previous Button -->
                @if ($contacts->onFirstPage())
                    <button class="px-4 py-2 text-gray-500 bg-white rounded-md cursor-not-allowed" disabled>
                        Previous
                    </button>
                @else
                    <a href="{{ $contacts->previousPageUrl() }}"
                        class="px-4 py-2 text-gray-500 bg-white rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                        Previous
                    </a>
                @endif

                <!-- Page Numbers -->
                @if ($contacts->lastPage() > 9)
                    @if ($contacts->currentPage() > 4)
                        <a href="{{ $contacts->url(1) }}"
                            class="px-4 py-2 text-gray-700 bg-white rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                            1
                        </a>
                        @if ($contacts->currentPage() > 5)
                            <span class="px-4 py-2">...</span>
                        @endif
                    @endif

                    @for ($i = max(1, $contacts->currentPage() - 1); $i <= min($contacts->lastPage(), $contacts->currentPage() + 1); $i++)
                        @if ($i == $contacts->currentPage())
                            <button class="px-4 py-2 text-white bg-neutral-800 rounded-md hover:bg-neutral-800 focus:outline-none focus:ring focus:ring-neutral-300">
                                {{ $i }}
                            </button>
                        @else
                            <a href="{{ $contacts->url($i) }}"
                                class="px-4 py-2 text-gray-700 bg-white rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                                {{ $i }}
                            </a>
                        @endif
                    @endfor

                    @if ($contacts->currentPage() < $contacts->lastPage() - 3)
                        @if ($contacts->currentPage() < $contacts->lastPage() - 4)
                            <span class="px-4 py-2">...</span>
                        @endif
                        <a href="{{ $contacts->url($contacts->lastPage()) }}"
                            class="px-4 py-2 text-gray-700 bg-white rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                            {{ $contacts->lastPage() }}
                        </a>
                    @endif
                @else
                    @for ($i = 1; $i <= $contacts->lastPage(); $i++)
                        @if ($i == $contacts->currentPage())
                            <button class="px-4 py-2 text-white bg-neutral-800 rounded-md hover:bg-neutral-800 focus:outline-none focus:ring focus:ring-neutral-300">
                                {{ $i }}
                            </button>
                        @else
                            <a href="{{ $contacts->url($i) }}"
                                class="px-4 py-2 text-gray-700 bg-white rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                                {{ $i }}
                            </a>
                        @endif
                    @endfor
                @endif

                <!-- Next Button -->
                @if ($contacts->hasMorePages())
                    <a href="{{ $contacts->nextPageUrl() }}"
                        class="px-4 py-2 text-gray-500 bg-white rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                        Next
                    </a>
                @else
                    <button class="px-4 py-2 text-gray-500 bg-gray-100 rounded-md cursor-not-allowed" disabled>
                        Next
                    </button>
                @endif
            </div>
        </div>
    </section>
</x-admin-layout>

