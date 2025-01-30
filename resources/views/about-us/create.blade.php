<x-layout :title="'About us | Opus Events'">

  <!-- Hero Section -->
  <section class="bg-gray-700 bg-blend-multiply flex items-center justify-center" style="
        background-image: url('{{ Vite::asset('resources/assets/background2.jpg') }}');
        background-position: center;
        background-size: cover;
    ">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-4 lg:py-16">
      <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
        About us
      </h1>
    </div>
  </section>

  <section class="bg-white">

    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">

      <div class="gap-8 items-center py-8 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16">

        <img class="w-full rounded-lg " src="{{ Vite::asset('resources/assets/events.jpeg') }}" alt="dashboard image">

        <div class="mt-4 md:mt-0">
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text">Opus events
          </h2>
          <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">Welcome to OpusEvents, your go-to
            platform for discovering the best events across the Netherlands! Whether you're into music festivals,
            theater shows, sports events, or live concerts, we’ve got you covered.

            At OpusEvents, we make finding your next unforgettable experience easy and hassle-free. Explore a curated
            list of events, check out detailed schedules, and conveniently access ticket purchasing through trusted
            third-party platforms.

            We’re passionate about connecting people to the moments that matter. Our mission is to bring you closer to
            the events you love, all in one place. Let’s make memories together!
          </p>
        </div>
      </div>
  </section>


  <section class="gap-6 items-center py-8 mx-auto max-w-screen-xl xl:gap-12 px-4 md:grid md:grid-cols-2 sm:py-16">
    <!-- Ordered List -->
    <ol class="relative border-l border-gray-200 dark:border-gray-400">
      <!-- List Item 1 -->
      <li class="mb-10 ms-6">
        <span
          class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-blue-900 dark:bg-blue-900">
          <svg class="w-4 h-4 text-blue-800 dark:text-neutral-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
          </svg>
        </span>
        <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-black">Today</h3>
        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on October
          13th, 2024</time>
        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">We’ve successfully managed hundreds of
          events, building a reputation for excellence, reliability, and creativity. Our journey has been fueled by our
          commitment to innovation and our clients' trust in us to deliver exceptional experiences.</p>
      </li>

      <!-- List Item 2 -->
      <li class="mb-10 ms-6">
        <span
          class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-blue-900 dark:bg-blue-900">
          <svg class="w-4 h-4 text-blue-800 dark:text-neutral-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
          </svg>
        </span>
        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-black">Rebranding</h3>
        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Started on August
          10th, 2023</time>
        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Rebranded with a modern look, a new logo, and
          enhanced user experience.</p>
      </li>

      <!-- List Item 3 -->
      <li class="mb-10 ms-6">
        <span
          class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-blue-900 dark:bg-blue-900">
          <svg class="w-4 h-4 text-blue-800 dark:text-neutral-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
          </svg>
        </span>
        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-black">First major update</h3>
        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on December
          20th, 2021</time>
        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Introduced advanced event filters, making it
          easier to find your favorite events.</p>
      </li>

      <!-- List Item 4 -->
      <li class="ms-6">
        <span
          class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-blue-900 dark:bg-blue-900">
          <svg class="w-4 h-4 text-blue-800 dark:text-neutral-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
          </svg>
        </span>
        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-black">Our journey</h3>
        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Started on December
          2nd, 2021</time>
        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Founded in 2021, Opus events began with a
          simple mission: to turn ordinary moments into extraordinary memories. What started as a small team with a
          passion for event planning has grown into a trusted name in the industry.</p>
      </li>
    </ol>

    <!-- Image -->
    <img class="w-full h-full rounded-lg object-cover" src="{{ Vite::asset('resources/assets/pinkpop.jpg') }}"
      alt="dashboard image">
  </section>


  <div class="max-w-screen-xl mx-auto px-4 mx-auto max-w-screen-xl mb-16">
    <!-- Header -->
    <div class="mb-6">
      <h2 class="text-2xl font-bold text-gray-800 flex items-center">
        Reviews
        
      </h2>
      
      <p class="text-gray-600 text-sm"><a  class="text-blue-500 underline">{{$totalreviews}} Reviews</a>
      </p>
    </div>

    <!-- pop up form -->
    <div id="app">
      <div class="mb-6">
        
        <!-- <button @click="openModal"
          class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600">Write a review</button> -->
        <review-form></review-form>
      </div>
      <!-- Modal Component (This will be displayed when the button is clicked) -->
    </div>


    <div>
    @foreach ($reviews as $review)
    <!-- Review -->
    <div class="border-t border-gray-200 pt-6 mb-6">
        <div class="flex items-center mb-2 space-x-2"> 
            <p class="text-gray-800 font-semibold break-words max-w-xs">{{ $review->name }}</p> 

            
            <div class="flex text-yellow-500">
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i <= $review->rating)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21z" />
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21z" />
                        </svg>
                    @endif
                @endfor
            </div>
        </div>
        <p class="text-gray-600 text-sm break-words max-w-full">{{ $review->review }}</p> 
    </div>
@endforeach



    <div class="flex items-center justify-center space-x-2 mt-4">
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
                                    <button
                                        class="px-4 py-2 text-white bg-neutral-800 rounded-md hover:bg-neutral-800 focus:outline-none focus:ring focus:ring-neutral-300">
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
                                    <button
                                        class="px-4 py-2 text-white bg-neutral-800 rounded-md hover:bg-neutral-800 focus:outline-none focus:ring focus:ring-neutral-300">
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
            </div>

      <div class="flex items-center text-sm text-gray-600">
      </div>
    </div>
  </div>
</x-layout>