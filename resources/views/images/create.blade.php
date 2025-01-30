<x-admin-layout :title="'Add pictures | Opus Events'">
    @if(session('success'))
        <div class="w-full bg-gray-100 pt-6 px-6 items-center ">
            <div class="flex items-center p-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50"
                role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">Success alert!</span>
                    <div class="alert alert-success">{{ session('success') }}</div>
                </div>
            </div>
        </div>
    @endif
    <div class="min-h-screen p-6">
        <div class="flex flex-col lg:flex-row lg:space-x-6">

            <div
                class="max-w-md bg-white border border-gray-200 rounded-lg shadow-md p-6 mb-6 lg:mb-0 flex-shrink-0 h-[17rem]">
                <h1 class="text-3xl font-bold border-b border-gray-300 pb-2 mb-2">Picture upload</h1>
                <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="file_input" class="block text-sm font-medium text-gray-700 mb-2">Attach file</label>
                    <input type="file" id="file_input" name="image"
                        class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 py-4 px-4 text-base">

                    @error('image')
                        <span class="text-sm mt-2 text-red-600">{{ $message }}</span>
                    @enderror

                    <input type="submit" value="Upload"
                        class="block w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold text-sm rounded-lg cursor-pointer focus:outline-none focus:ring-1 focus:ring-blue-500 focus:dark:bg-neutral-900 py-4 px-4 mt-4">
                </form>

            </div>



            <div class="flex-1 bg-white border border-gray-200 rounded-lg shadow-md p-5 overflow-y-auto">

                <div class="grid grid-cols-1 gap-6">
                    <h1 class="text-3xl font-bold border-b border-gray-300 pb-2 ">Pictures</h1>

                    @foreach ($images as $image)
                        <div class="flex items-center justify-between">

                            <img src="{{ asset('images/' . $image->foto) }}" alt="foto_galerij"
                                class="w-16 h-16 object-cover rounded-full">



                            <div class="flex flex-col items-start ml-4">
                                <p class="text-sm text-gray-700">{{ $image->foto }}</p>


                            </div>

                            <form action="{{ route('destroy') }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="hidden" name="image_id" value="{{ $image->id }}">
                                <button type="submit"
                                    class="mt-2 w-full bg-red-600 text-white font-semibold text-sm rounded-lg py-3 px-4 focus:outline-none hover:bg-red-700">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                    </svg>
                                </button>
                            </form>

                        </div>
                    @endforeach
                    <div class="flex items-center justify-center space-x-2 mt-4">
                        <!-- Previous Button -->
                        @if ($images->onFirstPage())
                            <button class="px-4 py-2 text-gray-500 bg-gray-100 rounded-md cursor-not-allowed" disabled>
                                Previous
                            </button>
                        @else
                            <a href="{{ $images->previousPageUrl() }}"
                                class="px-4 py-2 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                                Previous
                            </a>
                        @endif

                        <!-- Page Numbers -->
                        @if ($images->lastPage() > 9)
                            @if ($images->currentPage() > 4)
                                <a href="{{ $images->url(1) }}"
                                    class="px-4 py-2 text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                                    1
                                </a>
                                @if ($images->currentPage() > 5)
                                    <span class="px-4 py-2">...</span>
                                @endif
                            @endif

                            @for ($i = max(1, $images->currentPage() - 1); $i <= min($images->lastPage(), $images->currentPage() + 1); $i++)
                                @if ($i == $images->currentPage())
                                    <button
                                        class="px-4 py-2 text-white bg-neutral-800 rounded-md hover:bg-neutral-800 focus:outline-none focus:ring focus:ring-neutral-300">
                                        {{ $i }}
                                    </button>
                                @else
                                    <a href="{{ $images->url($i) }}"
                                        class="px-4 py-2 text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                                        {{ $i }}
                                    </a>
                                @endif
                            @endfor

                            @if ($images->currentPage() < $images->lastPage() - 3)
                                @if ($images->currentPage() < $images->lastPage() - 4)
                                    <span class="px-4 py-2">...</span>
                                @endif
                                <a href="{{ $images->url($images->lastPage()) }}"
                                    class="px-4 py-2 text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                                    {{ $images->lastPage() }}
                                </a>
                            @endif
                        @else
                            @for ($i = 1; $i <= $images->lastPage(); $i++)
                                @if ($i == $images->currentPage())
                                    <button
                                        class="px-4 py-2 text-white bg-neutral-800 rounded-md hover:bg-neutral-800 focus:outline-none focus:ring focus:ring-neutral-300">
                                        {{ $i }}
                                    </button>
                                @else
                                    <a href="{{ $images->url($i) }}"
                                        class="px-4 py-2 text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-300">
                                        {{ $i }}
                                    </a>
                                @endif
                            @endfor
                        @endif

                        <!-- Next Button -->
                        @if ($images->hasMorePages())
                            <a href="{{ $images->nextPageUrl() }}"
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
            </div>
        </div>
    </div>
</x-admin-layout>