<x-admin-layout :title="'Create events | Opus Events'">
  <section class="p-6 flex flex-row gap-6">
    <!-- Left: Create Event Form -->
    <div class="w-1/2 bg-white p-8 shadow-md rounded-md flex-shrink-0 h-[46rem] ">
      <h2 class="text-2xl font-semibold mb-4">Create a New Event</h2>
      <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <!-- Event/Artist Name -->
          <div>
            <label for="event-name" class="block text-sm font-medium text-gray-700">Event/Artist Name</label>
            <input type="text" id="event-name" placeholder="Enter event or artist" name="event_name"value="{{ old('event_name') }}"
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6 h-11" required />
          </div>

          <!-- Event Date -->
          <div>
            <label for="event-date" class="block text-sm font-medium text-gray-700">Date</label>
            <input type="datetime-local" name="event_date" id="event-date" value="{{ old('date') }}"
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6 h-11 text-gray-700 placeholder-gray-700"required />
          </div>
        </div>
        @error('event_date')
        <p class="text-red-500">{{ $message }}</p>
        @enderror
        @error('event_name')
          <p class="text-red-500">{{ $message }}</p>
          @enderror

        <!-- Location -->
        <div class="mt-4">
          <label for="location" class="block text-sm font-medium text-gray-700">Location <span
              class="text-red-500">*</span></label>
          <input type="text" name="location" id="location" placeholder="Enter event location" value="{{ old('location') }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6" required />
        </div>
        @error('location')
        <p class="text-red-500">{{ $message }}</p>
        @enderror


        <!-- Event Type -->
        <div class="mt-4">
          <label for="location" class="block text-sm font-medium text-gray-700">Event type</label>
          <select id="event-type" name="event_type"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-700 placeholder-gray-700 py-3 px-6" required>
            <option value="" disabled selected class="text-gray-300">Choose event type</option>
            <option value="Concert">Concert</option>
            <option value="Festival">Festival</option>
            <option value="Event">Event</option>
          </select>
        </div>
        @error('event_type')
        <p class="text-red-500">{{ $message }}</p>
        @enderror

        <!-- Description -->
        <div class="mt-4">
          <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
          <textarea id="description" name="description" placeholder="Add event description" rows="2"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6" required>{{ old('description') }}</textarea>
        </div>
        @error('description')
        <p class="text-red-500">{{ $message }}</p>
        @enderror

        <!-- Link to Tickets -->
        <div class="mt-4">
          <label for="ticket-link" class="block text-sm font-medium text-gray-700">Link to Tickets</label>
          <input type="url" id="ticket-link" name="ticket_link" placeholder="https://example.com"value="{{ old('ticket_link') }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6"  required/>
        </div>
        @error('ticket_link')
        <p class="text-red-500">{{ $message }}</p>
        @enderror

        <!-- Upload Picture -->
        <div class="mt-4">
          <label for="event-picture" class="block text-sm font-medium text-gray-700">Upload Picture</label>
          <div class="mt-1">
            <input type="file" name="event_picture" id="event-picture" accept="image/*"
              class="block w-full text-sm text-gray-500 file:py-3 file:px-6 file:rounded-md file:border file:border-gray-300 file:bg-white file:text-blue-600 hover:file:bg-gray-100" required />
          </div>
        </div>
        @error('event_picture')
        <p class="text-red-500">{{ $message }}</p>
        @enderror

        <!-- Submit Button -->
        <div class="mt-6">
          <input value="Create event" type="submit"
            class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md shadow-sm hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 cursor-pointer">

        
        </div>
        

      </form>
    </div>

    <!-- Right: List of Events -->

    <div class="w-1/2 bg-white border border-gray-200 rounded-lg shadow-md flex flex-col items-stretch w-full p-6 ">
    <h2 class="text-2xl font-semibold mb-4">Events</h2>
      <div class="grid grid-cols-1 gap-6">
        @foreach ($events as $event)
      <div class="flex items-center justify-between">
        <img src="{{ asset($event->event_picture) }}" alt="Event Image" class="w-16 h-16 object-cover rounded-full">

        <div class="flex flex-col items-start ml-4">
        <p class="text-sm text-gray-700">{{ $event->event_name }}</p>
        </div>

        <form action="{{ route('events.destroy') }}" method="POST">
        @method('DELETE')
        @csrf
        <input type="hidden" name="event_id" value="{{ $event->id }}">
        <button type="submit"
          class="mt-2 w-full bg-red-600 text-white font-semibold text-sm rounded-lg py-3 px-10 focus:outline-none hover:bg-red-700 cursor-pointer">
          Delete
        </button>
        </form>
      </div>
    @endforeach
      </div>
    </div>
  </section>
</x-admin-layout>