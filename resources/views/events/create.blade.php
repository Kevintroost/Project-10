aaroniscord
aaroniscord
Online

aaroniscord — 06/12/2024 8:37
Ben nu onderweg ik had de bus gemist
KEVN — 06/12/2024 8:37
Shiet
Hoelaat
aaroniscord — 06/12/2024 8:39
9:15 ong
KEVN — 06/12/2024 8:46
shieettt
ja  daar kan ik je niet mee helpen hahah, wou miss ff zeggen dat je later kwam maar ja
bus rijd zeker om het half uur
KEVN — 06/12/2024 12:27
I’ve created a payment request of €8.70 for BK 9546 D56C23. You can pay with any bank in the Netherlands. Thank you!
https://www.ing.nl/payreq/m/?trxid=OQjyI6wOTCy2UHQAz0bSReR9nZunjowz
KEVN — 06/12/2024 13:34
https://www.figma.com/design/Unf6UlPDJGunvfr9WLp7mF/wireframe?node-id=0-1&t=81GvKQFRaZbljKjd-1
Figma
wireframe
Created with Figma
Image
KEVN — 06/12/2024 14:25
https://demo.tailadmin.com/pro-form-layout
KEVN — 06/12/2024 22:49
Gaan we spelen
aaroniscord — 06/12/2024 22:51
Ik weet niet man ik ga nu een film kijken met mijn nichten als je later nog wakker bent ik stuur jou een bericht
KEVN — 06/12/2024 22:51
Ai
aaroniscord — 06/12/2024 22:52
Ik had trouwens een potje gespeeld, ik vind persoonlijk dat ie beter is dan Overwatch maar ik krijg maar 20 fps en het is een beetje laggy, ik zal dat ook eerst oplossen voordat we gaan spelen
KEVN — 06/12/2024 22:56
Ik hoop dat dat voor mij geen probleem is met me pc
Ik speel sws nooit hoogste settings
aaroniscord — 07/12/2024 0:51
Hey bro laten we morgen spelen die kut film heeft bijna 3 uur geduurd en ik val nu bijna in slaap
Wat vond je van die game trouwens
KEVN — 07/12/2024 0:52
ik speel nu met evan en het is echt gaaf man
KEVN — 07/12/2024 12:29
nwarh4k3xqy free skin
aaroniscord — 07/12/2024 12:56
Thanks my g
KEVN — 07/12/2024 21:41
kom je ook rivals
aaroniscord — 07/12/2024 21:59
misschien straks ik zit nu the forest te spelen met vrienden
KEVN — 07/12/2024 21:59
ai
KEVN — 09/12/2024 14:20
Kan je marvel rivals samen?
aaroniscord — 09/12/2024 14:20
ai
KEVN — 09/12/2024 14:21
Ik vraag ff evan ook
aaroniscord — 09/12/2024 14:21
ik had hem ook gevraagd maar hij reageert niet maar probeer nog eens
KEVN — 09/12/2024 14:21
Ik bel m wel
hij komt zo
ik zit in de server
aaroniscord — 09/12/2024 14:23
ok ik join zo meteen
KEVN — Yesterday at 18:42
kan je spelen
aaroniscord — Yesterday at 19:12
Yup
KEVN — Yesterday at 19:12
we hebben denk zo een extra noidug
aaroniscord — Yesterday at 19:12
Vraag Evan
KEVN — Yesterday at 19:15
ik bedoel jou
jij bent de extra
aaroniscord — Yesterday at 19:16
ah lol
ok
wacht ff de game is aan t updaten
KEVN — Yesterday at 19:21
zeg maar als je ready bent
we  zitten nog pot
KEVN — Yesterday at 19:32
ai ben je ready
aaroniscord — Yesterday at 19:33
ye
KEVN — Yesterday at 19:33
https://discord.gg/pc85QRuq
KEVN — Today at 8:30
Kom je vandaag
aaroniscord — Today at 8:36
Ja hoor ik ben nu onderweg ik had mij verslapen
KEVN — Today at 9:20
<x-admin-layout>
  <section class="p-6 flex flex-row gap-6">
    <!-- Left: Create Event Form -->
    <div class="w-1/2 bg-white p-8 shadow-md rounded-md">
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

    <!-- Right: List of Events -->
    <div class="w-1/2 bg-white border border-gray-200 rounded-lg shadow-md p-6 overflow-y-auto flex-shrink-0 h-[16rem]">
      <div class="grid grid-cols-1 gap-6">
        @foreach ($events as $event)
        <div class="flex items-center justify-between">
          <img src="{{ asset('images/' . $event->foto) }}" alt="foto_galerij"
            class="w-16 h-16 object-cover rounded-full">

          <div class="flex flex-col items-start ml-4">
            <p class="text-sm text-gray-700">{{ $event->title }}</p>
          </div>

          <form action="{{ route('destroy') }}" method="POST">
            @method('DELETE')
            @csrf
            <input type="hidden" name="image_id" value="{{ $event->id }}">
            <button type="submit"
              class="mt-2 w-full bg-red-600 text-white font-semibold text-sm rounded-lg py-3 px-10 focus:outline-none hover:bg-red-700">
              Delete
            </button>
          </form>
        </div>
        @endforeach
      </div>
    </div>
... (3 lines left)
Collapse
message.txt
5 KB
﻿
KEVN
kevn_010
Bakje/yoghurt
 
 
 
Wer wartet mit Besonnenheit, der wird belohnt zur rechten Zeit
<x-admin-layout>
  <section class="p-6 flex flex-row gap-6">
    <!-- Left: Create Event Form -->
    <div class="w-1/2 bg-white p-8 shadow-md rounded-md">
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

    <!-- Right: List of Events -->
    <div class="w-1/2 bg-white border border-gray-200 rounded-lg shadow-md p-6 overflow-y-auto flex-shrink-0 h-[16rem]">
      <div class="grid grid-cols-1 gap-6">
        @foreach ($events as $event)
        <div class="flex items-center justify-between">
          <img src="{{ asset('images/' . $event->foto) }}" alt="foto_galerij"
            class="w-16 h-16 object-cover rounded-full">

          <div class="flex flex-col items-start ml-4">
            <p class="text-sm text-gray-700">{{ $event->title }}</p>
          </div>

          <form action="{{ route('destroy') }}" method="POST">
            @method('DELETE')
            @csrf
            <input type="hidden" name="image_id" value="{{ $event->id }}">
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