<x-admin-layout>


  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 p-6 ">
    <!-- Card 1 -->
    <div class="bg-white rounded-lg shadow-lg p-4 flex items-center justify-between">
      <div class="flex items-center">
        <div class="bg-blue-100 p-3 rounded-full">
          <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 10l4.553 2.276a2 2 0 010 3.448L15 18m0-8l-4.553-2.276a2 2 0 00-3.448 0L3 10m6 0v8m6 0V10m0 8l-4.553 2.276a2 2 0 01-3.448 0L3 18" />
          </svg>
        </div>
        <div class="ml-4">
          <p class="text-xl font-semibold">$3.456K</p>
          <p class="text-gray-500">Total Views</p>
        </div>
      </div>
      <p class="text-green-500 text-sm">0.43% ↑</p>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-lg shadow-lg p-4 flex items-center justify-between">
      <div class="flex items-center">
        <div class="bg-blue-100 p-3 rounded-full">
          <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 10h11M9 21v-7m0 0a4 4 0 118 0v7m0 0H9" />
          </svg>
        </div>
        <div class="ml-4">
          <p class="text-xl font-semibold">$45.2K</p>
          <p class="text-gray-500">Total Profit</p>
        </div>
      </div>
      <p class="text-green-500 text-sm">4.35% ↑</p>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-lg shadow-lg p-4 flex items-center justify-between">
      <div class="flex items-center">
        <div class="bg-blue-100 p-3 rounded-full">
          <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M8 7V3m8 4V3M8 11v10m8-10v10M9 21h6m-6 0a3 3 0 003 3h0a3 3 0 003-3m0 0H9" />
          </svg>
        </div>
        <div class="ml-4">
          <p class="text-xl font-semibold">2.450</p>
          <p class="text-gray-500">Total Product</p>
        </div>
      </div>
      <p class="text-green-500 text-sm">2.59% ↑</p>
    </div>

    <!-- Card 4 -->
    <div class="bg-white rounded-lg shadow-lg p-4 flex items-center justify-between">
      <div class="flex items-center">
        <div class="bg-blue-100 p-3 rounded-full">
          <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17 20h5v-6M6 20H1v-6m5 6v-6m0 0a2 2 0 014 0v6M6 14a4 4 0 10-8 0M8 10a4 4 0 110 8" />
          </svg>
        </div>
        <div class="ml-4">
          <p class="text-xl font-semibold">3.456</p>
          <p class="text-gray-500">Total Users</p>
        </div>
      </div>
      <p class="text-red-500 text-sm">0.95% ↓</p>
    </div>
  </div>
  <section class="p-6">

    <div class="bg-white p-8 shadow-md rounded-md w-full max-w-2xl" style="max-width: 600px;">
      <h2 class="text-2xl font-semibold mb-4">Create a Newsletter</h2>
      <form action="{{ route('newsletter.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 gap-4">

          <div>
            <label for="event-name" class="block text-sm font-medium text-gray-700">Titel</label>
            <input type="text" name="title" id="event-name" placeholder="Enter event or artist name"
              value="{{ old('title') }}"
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6 h-11" />
          </div>
          @error('title')
        <span class="text-sm mt-2 text-red-600">{{ $message }}</span>
      @enderror


          <div class="mt-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea id="description" placeholder="Add event description" rows="2" name="description"
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6">{{ old('description') }}</textarea>
          </div>
          @error('description')
        <span class="text-sm mt-2 text-red-600">{{ $message }}</span>
      @enderror


          <div class="mt-4">
            <label for="image-url" class="block text-sm font-medium text-gray-700"> Provide a Image URL</label>
            <div class="mt-1">
              <input type="url" name="image_url" id="image-url" placeholder="Enter image URL"
                value="{{ old('image') }}"
                class="block w-full text-sm text-gray-500 py-3 px-6 rounded-md border border-gray-300 bg-white" />
            </div>
          </div>

          @error('image')
        <span class="text-sm mt-2 text-red-600">{{ $message }}</span>
      @enderror


          <div class="mt-6">
            <button type="submit"
              class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md shadow-sm hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
              Create Event
            </button>
          </div>
        </div>
      </form>
    </div>
  </section>


</x-admin-layout>