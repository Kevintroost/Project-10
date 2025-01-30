<x-admin-layout :title="'Create events | Opus Events'">
  @if(session('success'))
    <div class="w-full pt-6 px-6 items-center">
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

  <section class="px-6 pt-6 flex gap-6">
    <!-- Left: Create Event Form -->
    <div class="w-full sm:w-1/2 bg-white p-8 border border-gray-300 shadow-md rounded-md">
      <h2 class="text-2xl font-semibold mb-4">Create a New Event</h2>
      <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <!-- Event/Artist Name -->
          <div class="flex flex-col">
            <label for="event-name" class="block text-sm font-medium text-gray-700">Event/Artist Name</label>
            <input type="text" id="event-name" placeholder="Enter event or artist" name="event_name"
              value="{{ old('event_name') }}"
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6 h-11"
              required />
            @error('event_name')
        <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
      @enderror
          </div>

          <!-- Event Date -->
          <div class="flex flex-col">
            <label for="event-date" class="block text-sm font-medium text-gray-700">Date</label>
            <input type="datetime-local" name="event_date" id="event-date" value="{{ old('date') }}"
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6 h-11 text-gray-700 placeholder-gray-700"
              required />
            @error('event_date')
        <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
      @enderror
          </div>
        </div>

        <!-- Location -->
        <div class="mt-4 flex flex-col">
          <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
          <input type="text" name="location" id="location" placeholder="Enter event location"
            value="{{ old('location') }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6"
            required />
          @error('location')
        <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
      @enderror
        </div>

        <!-- Event Type -->
        <div class="mt-4 flex flex-col">
          <label for="event-type" class="block text-sm font-medium text-gray-700">Event Type</label>
          <select id="event-type" name="event_type"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6"
            required>
            <option value="" disabled selected class="text-gray-300">Choose event type</option>
            <option value="Concert">Concert</option>
            <option value="Festival">Festival</option>
            <option value="Event">Event</option>
          </select>
          @error('event_type')
        <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
      @enderror
        </div>

        <!-- Description -->
        <div class="mt-4 flex flex-col">
          <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
          <textarea id="description" name="description" placeholder="Add event description" rows="2"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6"
            required>{{ old('description') }}</textarea>
          @error('description')
        <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
      @enderror
        </div>

        <!-- Link to Tickets -->
        <div class="mt-4 flex flex-col">
          <label for="ticket-link" class="block text-sm font-medium text-gray-700">Link to Tickets</label>
          <input type="url" id="ticket-link" name="ticket_link" placeholder="https://example.com"
            value="{{ old('ticket_link') }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6"
            required />
          @error('ticket_link')
        <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
      @enderror
        </div>

        <!-- Upload Picture -->
        <div class="mt-4 flex flex-col">
          <label for="event-picture" class="block text-sm font-medium text-gray-700">Upload Picture</label>
          <div class="mt-1">
            <input type="file" name="event_picture" id="event-picture" accept="image/*"
              class="block w-full text-sm text-gray-500 file:py-3 file:px-6 file:rounded-md file:border file:border-gray-300 file:bg-white file:text-blue-600 hover:file:bg-gray-100"
              required />
          </div>
          @error('event_picture')
        <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
      @enderror
        </div>

        <!-- Submit Button -->
        <div class="mt-6">
          <input value="Create event" type="submit"
            class="w-full bg-blue-600 text-white font-semibold py-2 px-5 rounded-md shadow-sm hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 cursor-pointer">
        </div>
      </form>
    </div>

    <!-- Right: List of Events -->
    <div class="w-full sm:w-1/2 bg-white border border-gray-300 rounded-lg shadow-md p-8 flex flex-col max-h-[46rem]">
      <h2 class="text-2xl font-semibold mb-4">Events</h2>
      <div class="grid grid-cols-1 gap-6">
        @foreach ($events as $event)
      <div class="flex items-center justify-between">
        <img src="{{ asset($event->event_picture) }}" alt="Event Image" class="w-16 h-16 object-cover rounded-full">
        <div class="flex flex-col items-start ml-4 flex-1">
        <a href="{{route('events.show', ['id' => $event->id])}}"
          class="text-semibold text-gray-700 hover:underline">{{ $event->event_name }}</a>
        </div>

        <div class="relative inline-block text-left">
        <!-- Dropdown Button -->
        <button id="dropdownButton-{{ $event->id }}" class="p-2 rounded-full hover:bg-gray-200 focus:outline-none"
          onclick="toggleMenu({{ $event->id }})">
          <svg class="w-[31px] h-[31px] text-gray-800 " aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-width="3" d="M6 12h.01m6 0h.01m5.99 0h.01" />
          </svg>

        </button>

        <!-- Dropdown Menu -->
        <div id="dropdownMenu-{{ $event->id }}"
          class="hidden absolute right-0 mt-2 w-36 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
          <!-- Edit Button -->
          <a href="{{ route('events.edit', ['id' => $event->id]) }}"
          class="flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
          <svg class="w-6 h-6 text-gray-800 dark:text-gray-600 mr-2" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
          </svg>
          Edit
          </a>

          <!-- Delete Button -->
          <form action="{{ route('events.destroy') }}" method="POST" class="w-full">
          @method('DELETE')
          @csrf
          <input type="hidden" name="event_id" value="{{ $event->id }}">
          <button type="submit"
            class="flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <svg class="w-6 h-6 text-gray-800 dark:text-gray-600 mr-2" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
            </svg>
            Delete
          </button>
          </form>

        </div>
        </div>



      </div>
    @endforeach
      </div>

      <div class="flex items-center justify-center space-x-2 mt-12 ">
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
    </div>
  </section>
  <script>
    function toggleMenu(id) {
      const menu = document.getElementById(`dropdownMenu-${id}`);
      menu.classList.toggle("hidden");

      // Close the menu if clicked outside
      window.addEventListener("click", (e) => {
        const button = document.getElementById(`dropdownButton-${id}`);
        if (!button.contains(e.target) && !menu.contains(e.target)) {
          menu.classList.add("hidden");
        }
      });
    }
  </script>
          <script>
            document.querySelectorAll('form[action="{{ route('events.destroy') }}"]').forEach(form => {
              form.addEventListener('submit', function(event) {
                event.preventDefault();
                confirm('Are you sure you want to delete this event?').then(confirmation => {
                  if (confirmation) {
                    form.submit();
                  }
                });
              });
            });

            function confirm(message) {
              return new Promise((resolve) => {
                const modal = document.createElement('div');
                modal.classList.add('fixed', 'inset-0', 'flex', 'items-center', 'justify-center', 'bg-gray-800', 'bg-opacity-50', 'z-50');

                const modalContent = document.createElement('div');
                modalContent.classList.add('bg-white', 'p-6', 'rounded-lg', 'shadow-lg', 'text-center');

                const modalMessage = document.createElement('p');
                modalMessage.classList.add('text-gray-700', 'mb-4');
                modalMessage.textContent = message;

                const modalButtons = document.createElement('div');
                modalButtons.classList.add('flex', 'justify-center', 'gap-4');

                const confirmButton = document.createElement('button');
                confirmButton.classList.add('bg-blue-600', 'text-white', 'font-semibold', 'py-2', 'px-5', 'rounded-md', 'shadow-sm', 'hover:bg-blue-700', 'focus:ring-2', 'focus:ring-blue-500', 'focus:ring-offset-2');
                confirmButton.textContent = 'Yes';
                confirmButton.addEventListener('click', () => {
                  resolve(true);
                  document.body.removeChild(modal);
                });

                const cancelButton = document.createElement('button');
                cancelButton.classList.add('bg-gray-600', 'text-white', 'font-semibold', 'py-2', 'px-5', 'rounded-md', 'shadow-sm', 'hover:bg-gray-700', 'focus:ring-2', 'focus:ring-gray-500', 'focus:ring-offset-2');
                cancelButton.textContent = 'No';
                cancelButton.addEventListener('click', () => {
                  resolve(false);
                  document.body.removeChild(modal);
                });

                modalButtons.appendChild(confirmButton);
                modalButtons.appendChild(cancelButton);
                modalContent.appendChild(modalMessage);
                modalContent.appendChild(modalButtons);
                modal.appendChild(modalContent);
                document.body.appendChild(modal);
              });
            }
          </script>
</x-admin-layout>