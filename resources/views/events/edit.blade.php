<x-admin-layout :title="'Update events | Opus Events'">
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

    <section class="px-6 pt-6 flex gap-6 ">
        <!-- Left: Create Event Form -->
        <div class="w-full sm:w-1/2 bg-white p-8 border border-gray-200 shadow-md rounded-md">
            <h2 class="text-2xl font-semibold mb-4">Update an Event</h2>
            <form action="{{ route('events.edit', ['id' => $event->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Event/Artist Name -->
                    <div class="flex flex-col">
                        <label for="event-name" class="block text-sm font-medium text-gray-700">Event/Artist
                            Name</label>
                        <input type="text" id="event-name" placeholder="Enter event or artist" name="event_name"
                            value="{{ old('event_name', $event->event_name) }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6 h-11"
                            required />
                        @error('event_name')
                            <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Event Date -->
                    <div class="flex flex-col">
                        <label for="event-date" class="block text-sm font-medium text-gray-700">Date</label>
                        <input type="datetime-local" name="event_date" id="event-date"
                            value="{{ old('event_date', \Carbon\Carbon::parse($event->event_date)->format('Y-m-d\TH:i')) }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6 h-11 text-gray-700 placeholder-gray-700"
                            required />
                        @error('event_date')
                            <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Location -->
                <div class="mt-4 flex flex-col">
                    <label for="location" class="block text-sm font-medium text-gray-700">Location </label>
                    <input type="text" name="location" id="location" placeholder="Enter event location"
                        value="{{ old('location', $event->location) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6"
                        required />
                    @error('location')
                        <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Description -->
                <div class="mt-4 flex flex-col">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="description" name="description" placeholder="Add event description" rows="9"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6"
                        required>{{ old('description', $event->description) }}</textarea>
                    @error('description')
                        <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Link to Tickets -->
                <div class="mt-4 flex flex-col">
                    <label for="ticket-link" class="block text-sm font-medium text-gray-700">Link to Tickets</label>
                    <input type="url" id="ticket-link" name="ticket_link" placeholder="https://example.com"
                        value="{{ old('ticket_link', $event->ticket_link) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6"
                        required />
                    @error('ticket_link')
                        <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="mt-6">
                    <input value="Update event" type="submit"
                        class="w-full bg-blue-600 text-white font-semibold py-2 px-5 rounded-md shadow-sm hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 cursor-pointer">
                </div>
            </form>
        </div>

        <!-- Right: List of Events -->
        <div
            class="w-full sm:w-1/2 bg-white border border-gray-200 rounded-lg shadow-md p-8 flex flex-col max-h-[46rem]">
            <h2 class="text-2xl font-semibold mb-4">Event</h2>
            <div class="">
                @if($event)
                    <div class="flex flex-col items-start">
                        <img src="{{ asset($event->event_picture) }}" alt="Event Image"
                            class="w-full h-52 object-cover mb-4 rounded-lg" />
                        <div class="flex items-center gap-1 w-full">
                            <h3 class="text-lg font-semibold">{{ $event->event_name }} -</h3>
                            <p class="text-sm font-semibold">
                                {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}
                                {{ \Carbon\Carbon::parse($event->event_date)->format('H:i ') }}
                            </p>
                        </div>
                        <p class="text-sm text-gray-700 mb-6">{{ $event->location }}</p>
                        <p class="text-sm text-gray-500 mb-6">{{ $event->description }}</p>
                        <p class="text-semibold text-gray-700">Event type:</p>
                        <p class="text-sm text-gray-600 mb-6">{{ $event->event_type }}</p>

                        <p class="text-sm text-gray-700 ">Tickets available at:</p>
                        <a href="{{ $event->ticket_link }}"
                            class="text-blue-600 hover:text-blue-700 underline ">{{ $event->ticket_link }}</a>


                @else
                    <p>No event found.</p>
                @endif
                </div>
            </div>



</x-admin-layout>