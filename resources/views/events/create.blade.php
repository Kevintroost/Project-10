<x-admin-layout>
  <section class="p-6">
  <div class="max-w-md   bg-white p-8 shadow-md rounded-md">
    <h2 class="text-2xl font-semibold mb-4">Create a New Event</h2>
    <form>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <!-- Event/Artist Name -->
        <div>
          <label for="event-name" class="block text-sm font-medium text-gray-700">Event/Artist Name</label>
          <input type="text" id="event-name" placeholder="Enter event or artist name"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 h-11" />
        </div>

        <!-- Event Date -->
        <div>
          <label for="event-date" class="block text-sm font-medium text-gray-700">Date</label>
          <input type="datetime-local" name="date" id="event-date" value="{{ old('date') }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 h-11 text-gray-700 placeholder-gray-700" />
        </div>
      </div>




      <!-- Location -->
      <div class="mt-4">
        <label for="location" class="block text-sm font-medium text-gray-700">Location <span
            class="text-red-500">*</span></label>
        <input type="text" id="location" placeholder="Enter event location" required
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
      </div>

      <!-- Event Type -->
      <div class="mt-4">
        <label for="event-type" class="block text-sm font-medium text-gray-700">Event Type</label>
        <select id="event-type"
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-700 placeholder-gray-700">
          <option value="" disabled selected class="text-gray-400">Event type</option>
          <option>Concert</option>
          <option>Festival</option>
          <option>Event</option>
        </select>
      </div>

      <!-- Description -->
      <div class="mt-4">
        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
        <textarea id="description" placeholder="Add event description" rows="2"
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
      </div>

      <!-- Link to Tickets -->
      <div class="mt-4">
        <label for="ticket-link" class="block text-sm font-medium text-gray-700">Link to Tickets</label>
        <input type="url" id="ticket-link" placeholder="https://example.com"
          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
      </div>

      <!-- Upload Picture -->
      <div class="mt-4">
        <label for="event-picture" class="block text-sm font-medium text-gray-700">Upload Picture</label>
        <div class="mt-1">
          <input type="file" name="picture" id="event-picture" accept="image/*"
            class="block w-full text-sm text-gray-500 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-300 file:bg-white file:text-blue-600 hover:file:bg-gray-100" />
        </div>
      </div>

      <!-- Submit Button -->
      <div class="mt-6">
        <button type="submit"
          class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md shadow-sm hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
          Create Event
        </button>
      </div>
    </form>
  </div>
  </section>
</x-admin-layout>