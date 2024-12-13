<x-admin-layout>
  <section class="p-6 flex flex-row gap-6">
    <!-- Left: Create Event Form -->
    <div class="w-1/2 bg-white p-8 shadow-md rounded-md">
      <h2 class="text-2xl font-semibold mb-4">Create a New Event</h2>
      <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <!-- Event/Artist Name -->
          <div>
            <label for="event-name" class="block text-sm font-medium text-gray-700">Event/Artist Name</label>
            <input type="text" id="event-name" placeholder="Enter event or artist" name="event_name"
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6 h-11" />
          </div>

          <!-- Event Date -->
          <div>
            <label for="event-date" class="block text-sm font-medium text-gray-700">Date</label>
            <input type="datetime-local" name="event_date" id="event-date" value="{{ old('date') }}"
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6 h-11 text-gray-700 placeholder-gray-700" />
          </div>
        </div>

        <!-- Location -->
        <div class="mt-4">
          <label for="location" class="block text-sm font-medium text-gray-700">Location <span
              class="text-red-500">*</span></label>
          <input type="text" name="location" id="location" placeholder="Enter event location" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6" />
        </div>

        <!-- Event Type -->
        <select id="event-type" name="event_type"
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-700 placeholder-gray-700 py-3 px-6">
          <option value="" disabled selected class="text-gray-400">Event type</option>
          <option value="Concert">Concert</option>
          <option value="Festival">Festival</option>
          <option value="Event">Event</option>
        </select>

        <!-- Description -->
        <div class="mt-4">
          <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
          <textarea id="description" name="description" placeholder="Add event description" rows="2"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6"></textarea>
        </div>

        <!-- Link to Tickets -->
        <div class="mt-4">
          <label for="ticket-link" class="block text-sm font-medium text-gray-700">Link to Tickets</label>
          <input type="url" id="ticket-link" name="ticket_link" placeholder="https://example.com"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6" />
        </div>

        <!-- Upload Picture -->
        <div class="mt-4">
          <label for="event-picture" class="block text-sm font-medium text-gray-700">Upload Picture</label>
          <div class="mt-1">
            <input type="file" name="event_picture" id="event-picture" accept="image/*"
              class="block w-full text-sm text-gray-500 file:py-3 file:px-6 file:rounded-md file:border file:border-gray-300 file:bg-white file:text-blue-600 hover:file:bg-gray-100" />
          </div>
        </div>

        <!-- Submit Button -->
        <div class="mt-6">
          <input value="Create event" type="submit"
            class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md shadow-sm hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">

          </>
        </div>
        @if ($errors->any())
    <div class="text-red-500 mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

      </form>
    </div>

    <!-- Right: List of Events -->
    <div class="w-1/2 bg-white border border-gray-200 rounded-lg shadow-md p-6 overflow-y-auto flex-shrink-0 h-[16rem]">
      <div class="grid grid-cols-1 gap-6">
        @foreach ($events as $event)
      <div class="flex items-center justify-between">
        <img src="{{ asset('images/' . $event->event_picture) }}" alt="foto_galerij"
        class="w-16 h-16 object-cover rounded-full">

        <div class="flex flex-col items-start ml-4">
        <p class="text-sm text-gray-700">{{ $event->event_name }}</p>
        </div>

        <form action="{{ route('destroy') }}" method="POST">
        @method('DELETE')
        @csrf
        <input type="hidden" name="event_id" value="{{ $event->id }}">
        <button type="submit"
          class="mt-2 w-full bg-red-600 text-white font-semibold text-sm rounded-lg py-3 px-10 focus:outline-none hover:bg-red-700">
          Delete
        </button>
        </form>
      </div>
    @endforeach
      </div>
    </div>
  </section>
</x-admin-layout>