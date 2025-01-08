<x-layout>
  <section class="bg-center bg-no-repeat bg-gray-500 bg-blend-multiply" style="
    background-image: url('{{ asset($event->event_picture) }}'); /* The image used */
    background-size: cover; /* Makes the image cover the entire section */
    background-position: center; /* Ensures the image stays centered */
    width: 100%; /* Ensures the section takes full width */
    ">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
      <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
        {{ $event->event_name }}
      </h1>
      <p class="text-lg text-neutral-300">
        {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}
        {{ \Carbon\Carbon::parse($event->event_date)->format('h:i A') }}
      </p>
      <p class="mb-8 text-lg text-neutral-300">
        {{ $event->location}}
      </p>
    </div>
  </section>
  <section>


    <nav class="dark:bg-neutral-800 text-white ">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <h2 class="font-medium ">{{ $event->event_name }}</h2>

        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
          <ul
            class="font-medium flex flex-col mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-neutral-800  dark:border-gray-700">
            <button onclick="shareLink()"
              class="flex items-center justify-between text-white font-medium px-6 rounded-md  transition duration-200">
              <span>Share</span>
              <svg class="w-[19px] h-[19px] text-white ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m15.141 6 5.518 4.95a1.05 1.05 0 0 1 0 1.549l-5.612 5.088m-6.154-3.214v1.615a.95.95 0 0 0 1.525.845l5.108-4.251a1.1 1.1 0 0 0 0-1.646l-5.108-4.251a.95.95 0 0 0-1.525.846v1.7c-3.312 0-6 2.979-6 6.654v1.329a.7.7 0 0 0 1.344.353 5.174 5.174 0 0 1 4.652-3.191l.004-.003Z" />
              </svg>
            </button>

            <script>
              function shareLink() {
                if (navigator.share) {
                  navigator
                    .share({
                      title: "Check this out!",
                      text: "Here's a link I wanted to share with you:",
                      url: "{{ route('events.show', ['id' => $event->id]) }}", // Replace with your link
                    })
                    .then(() => console.log("Link shared successfully"))
                    .catch((error) => console.error("Error sharing", error));
                } else {
                  alert("Sharing not supported in this browser.");
                }
              }
            </script>


            <a class="flex items-center justify-between px-4 py-2 bg-blue-700 hover:bg-blue-800 text-white font-semibold rounded-md cursor-pointer"
              href="{{ $event->ticket_link }}">Buy tickets<svg
                class="w-[19px] h-[19px] ml-2 text-gray-800 dark:text-white" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778" />
              </svg>
            </a>




          </ul>
        </div>
      </div>
    </nav>
    <section>

      <div class="max-w-screen-xl px-4  mx-auto  lg:py-12 ">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-28">
          <!-- Main Content -->
          <div class="lg:col-span-3 space-y-4">
            <h1 class="text-3xl font-bold text-neutral-900">About the event</h1>
            <p class="break-words overflow-hidden whitespace-normal">
  {{ $event->description }}
</p>

            <button>
              <a href="{{ url('/contact/create') }}"
                class="flex items-center justify-between px-4 py-2 bg-blue-700 hover:bg-blue-800 text-white font-semibold rounded-md cursor-pointer">Contact
                us for more info<svg class="w-[19px] h-[19px] ml-2 text-gray-800 dark:text-white" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778" />
                </svg></a>
            </button>
          </div>

          <!-- Right Sidebar -->
          <aside class="space-y-4 lg:pl-8 lg:border-l border-neutral-300">
            <h3 class="text-xl font-semibold text-neutral-900">Location</h3>
            <p class="text-lg text-neutral-600">
              {{ $event->location }}
            </p>
            <h3 class="text-xl font-semibold text-neutral-900">Date</h3>
            <p class="text-lg text-neutral-600">
              {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}
              {{ \Carbon\Carbon::parse($event->event_date)->format('h:i A') }}
            </p>
            <h3 class="text-xl font-semibold text-neutral-900">Event type</h3>
            <p class="text-lg text-neutral-600">
              {{ $event->event_type }}
            </p>
          </aside>
        </div>
      </div>



    </section>






  </section>



</x-layout>