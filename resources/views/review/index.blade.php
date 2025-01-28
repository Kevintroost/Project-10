<x-admin-layout :title="'Contact request | Opus Events'">
    @if(session('success'))
        <div class="w-full pt-6 px-6 items-center">
            <div class="flex items-center p-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50"
                role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 1 1 1 1v4h1a1 1 0 0 1 0 2Z" />
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
            <h1 class="text-3xl font-bold border-b border-gray-300 pb-2 mb-6">Reviews requests</h1>

            @foreach ($reviews as $review)
                <div class="flex flex-wrap items-center justify-between border rounded-lg shadow-lg p-4 mb-4 shadow-sm bg-white">
                    <div class="flex-1 min-w-0 max-w-xs">
                        <p class="text-sm text-gray-700 font-medium break-words">{{ $review->name }}</p>
                    </div>
                    <div class="flex-1 min-w-0 max-w-xs">
                        <a href="mailto:{{ $review->email }}" class="text-sm text-gray-700 hover:underline break-words">{{ $review->email }}</a>
                    </div>
                    <div class="flex-1 min-w-0 max-w-xs">
                        <p class="text-sm text-gray-700">{{ $review->rating }}</p>
                    </div>
                    <div class="flex-1 min-w-0 max-w-xs">
                        <p class="text-sm text-gray-700 break-words">{{ $review->review }}</p>
                    </div>
                    <div class="flex-none">
                        <form action="{{ route('review.destroy', ['id' => $review->id]) }}" method="POST" class="ml-4">
                            @method('DELETE')
                            @csrf
                            <input type="hidden" name="event_id" value="{{ $review->id }}">
                            <button type="submit"
                                class="mt-2 bg-red-600 text-white font-semibold text-sm rounded-lg py-2 px-4 focus:outline-none hover:bg-red-300 cursor-pointer">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach

            <!-- Pagination -->
            <div class="flex items-center justify-center space-x-2 mt-12">
                <!-- Previous Button -->
                @if ($reviews->onFirstPage())
                    <button class="px-4 py-2 text-gray-500 bg-gray-100 rounded-md cursor-not-allowed" disabled>
                        Previous
                    </button>
                @else
                    <a href="{{ $reviews->previousPageUrl() }}"
                        class="px-4 py-2 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                        Previous
                    </a>
                @endif

                <!-- Page Numbers -->
                @if ($reviews->lastPage() > 9)
                    @if ($reviews->currentPage() > 4)
                        <a href="{{ $reviews->url(1) }}"
                            class="px-4 py-2 text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                            1
                        </a>
                        @if ($reviews->currentPage() > 5)
                            <span class="px-4 py-2">...</span>
                        @endif
                    @endif

                    @for ($i = max(1, $reviews->currentPage() - 1); $i <= min($reviews->lastPage(), $reviews->currentPage() + 1); $i++)
                        @if ($i == $reviews->currentPage())
                            <button class="px-4 py-2 text-white bg-neutral-800 rounded-md hover:bg-neutral-800 focus:outline-none focus:ring focus:ring-neutral-300">
                                {{ $i }}
                            </button>
                        @else
                            <a href="{{ $reviews->url($i) }}"
                                class="px-4 py-2 text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                                {{ $i }}
                            </a>
                        @endif
                    @endfor

                    @if ($reviews->currentPage() < $reviews->lastPage() - 3)
                        @if ($reviews->currentPage() < $reviews->lastPage() - 4)
                            <span class="px-4 py-2">...</span>
                        @endif
                        <a href="{{ $reviews->url($reviews->lastPage()) }}"
                            class="px-4 py-2 text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                            {{ $reviews->lastPage() }}
                        </a>
                    @endif
                @else
                    @for ($i = 1; $i <= $reviews->lastPage(); $i++)
                        @if ($i == $reviews->currentPage())
                            <button class="px-4 py-2 text-white bg-neutral-800 rounded-md hover:bg-neutral-800 focus:outline-none focus:ring focus:ring-neutral-300">
                                {{ $i }}
                            </button>
                        @else
                            <a href="{{ $reviews->url($i) }}"
                                class="px-4 py-2 text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                                {{ $i }}
                            </a>
                        @endif
                    @endfor
                @endif

                <!-- Next Button -->
                @if ($reviews->hasMorePages())
                    <a href="{{ $reviews->nextPageUrl() }}"
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
    </section>
</x-admin-layout>

