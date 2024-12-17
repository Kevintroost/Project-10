<x-admin-layout>


  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 p-6 ">
    <!-- Card 1 -->
    <div class="bg-white rounded-lg shadow-lg p-4 flex items-center justify-between">
      <div class="flex items-center">
        <div class="bg-blue-100 p-3 rounded-full">
          <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 5v14m-8-7h2m0 0h2m-2 0v2m0-2v-2m12 1h-6m6 4h-6M4 19h16c.5523 0 1-.4477 1-1V6c0-.55228-.4477-1-1-1H4c-.55228 0-1 .44772-1 1v12c0 .5523.44772 1 1 1Z" />
          </svg>
        </div>
        <div class="ml-4">
          <p class="text-xl font-semibold">200</p>
          <p class="text-gray-500">Events</p>
        </div>
      </div>
      <p class="text-green-500 text-sm"></p>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-lg shadow-lg p-4 flex items-center justify-between">
      <div class="flex items-center">
        <div class="bg-blue-100 p-3 rounded-full">
          <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
              d="M5.024 3.783A1 1 0 0 1 6 3h12a1 1 0 0 1 .976.783L20.802 12h-4.244a1.99 1.99 0 0 0-1.824 1.205 2.978 2.978 0 0 1-5.468 0A1.991 1.991 0 0 0 7.442 12H3.198l1.826-8.217ZM3 14v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5h-4.43a4.978 4.978 0 0 1-9.14 0H3Z"
              clip-rule="evenodd" />
          </svg>
        </div>
        <div class="ml-4">
          <p class="text-xl font-semibold">5</p>
          <p class="text-gray-500">Contact forms filled</p>
        </div>
      </div>
      <p class="text-green-500 text-sm"></p>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-lg shadow-lg p-4 flex items-center justify-between">
      <div class="flex items-center">
        <div class="bg-blue-100 p-3 rounded-full">
          <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
              d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
              clip-rule="evenodd" />
          </svg>
        </div>
        <div class="ml-4">
          <p class="text-xl font-semibold">5</p>
          <p class="text-gray-500">Event request forms filled</p>
        </div>
      </div>
      <p class="text-green-500 text-sm"></p>
    </div>

    <!-- Card 4 -->
    <div class="bg-white rounded-lg shadow-lg p-4 flex items-center justify-between">
      <div class="flex items-center">
        <div class="bg-blue-100 p-3 rounded-full">
          <svg class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
          </svg>
        </div>
        <div class="ml-4">
          <p class="text-xl font-semibold">50</p>
          <p class="text-gray-500">Reviews placed</p>
        </div>
      </div>
      <p class="text-red-500 text-sm"></p>
    </div>
  </div>
  <section class="p-6">
    <div class="flex flex-wrap gap-4">

      <div class="bg-white p-10 shadow-md rounded-md w-full max-w-2xl " style="max-width: 607px;">
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
                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 py-3 px-6 h-11" />
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

      <div class=" w-148 p-4 bg-white rounded-lg shadow-md">
        <h2 class="text-lg font-semibold text-gray-800">External Links</h2>
        <p class="text-sm text-gray-500 mb-4">Our social media</p>

        <ul class="space-y-3">
          <!-- Google Analytics -->
          <li class="flex items-center justify-between">
            <div class="flex items-center">
              <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#ea4335]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                  <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                  <path
                    d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                </svg>
              </span>
              <span class="ml-3 text-gray-800">Google mailing server</span>
            </div>
            <a href="https://mail.google.com/mail/" class="text-blue-500 hover:text-blue-700">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961" />
              </svg>
            </a>
          </li>

          <!-- Facebook Ads -->
          <li class="flex items-center justify-between ">
            <div class="flex items-center">
              <span class="text-blue-600 text-xl">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 239.7 64 64" width="28" height="28" fill="#009cde">
                  <path
                    d="M1.078 261.7h5.345l1.293-5.776 7.715-2.586-1.94 8.32h6.38l-1.078 5.345h-6.38l-2.586 11.982c-.216.647-.43 1.724-.43 2.76 0 1.724 1.078 2.76 2.76 2.76 1.293 0 2.586-.215 3.405-.647l-1.293 5.56c-1.293.215-2.586.647-3.836.647-4.914 0-8.32-1.94-8.32-7.284 0-2.155.43-4.267.862-6.422l2.155-9.396H0zm23.14 3.75l.647-2.974H31.5l-.647 3.62c1.94-2.76 5.13-4.267 8.534-4.267 3.2 0 6.638 1.94 7.07 5.345h.215c1.94-3.62 5.776-5.345 9.612-5.345 4.052 0 7.715 3.405 7.715 7.5 0 2.586-.647 5.345-1.293 7.5l-2.974 13.232H52.45l2.974-13.448c.43-1.724.862-4.267.862-6 0-2.155-1.5-3.405-3.405-3.405-4.914 0-6.207 5.776-7.07 9.612l-2.76 13.017h-7.284L38.74 276.4c.43-1.724.862-4.267.862-6 0-2.155-1.5-3.405-3.405-3.405-4.914 0-6.207 5.776-7.07 9.612l-2.76 13.017h-7.284z" />
                </svg>
              </span>
              <span class="ml-3 text-gray-800">Ticketmaster</span>
            </div>
            <a href="https://ticketmaster.nl/" class="text-blue-500 hover:text-blue-700 pl-28 ">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961" />
              </svg>
            </a>
          </li>

          <!-- Seranking -->
          <li class="flex items-center justify-between ">
            <div class="flex items-center">
              <span class="text-blue-500 text-xl">
                <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#128c7e]">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                    <path
                      d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                  </svg>
                </span>
              </span>
              <span class="ml-3 text-gray-800">Whatsapp</span>
            </div>
            <a href="#" class="text-blue-500 hover:text-blue-700 ">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961" />
              </svg>
            </a>
          </li>

          <!-- Instagram Ads -->
          <li class="flex items-center justify-between ">
            <div class="flex items-center">
              <span class="text-pink-500 text-xl">
                <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#c13584]">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                    <path
                      d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                  </svg>
                </span>

              </span>
              <span class="ml-3 text-gray-800">Instagram</span>
            </div>
            <a href="#" class="text-blue-500 hover:text-blue-700">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961" />
              </svg>

            </a>
          </li>
          <li class="flex items-center justify-between ">
            <div class="flex items-center">
              <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#0077b5]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                  <path
                    d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
                </svg>
              </span>
              <span class="ml-3 text-gray-800">Linkedin</span>
            </div>
            <a href="#" class="text-blue-500 hover:text-blue-700">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961" />
              </svg>

            </a>
          </li>
          <li class="flex items-center justify-between ">
            <div class="flex items-center">
              <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#333]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                  <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                  <path
                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                </svg>
              </span>
              <span class="ml-3 text-gray-800">Github</span>
            </div>
            <a href="https://github.com/Kevintroost/Project-10" class="text-blue-500 hover:text-blue-700">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961" />
              </svg>

            </a>
          </li>
          <li class="flex items-center justify-between ">
            <div class="flex items-center">
              <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#1877f2]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                  <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                  <path
                    d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                </svg>
              </span>

              <span class="ml-3 text-gray-800">Facebook</span>
            </div>
            <a href="#" class="text-blue-500 hover:text-blue-700">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961" />
              </svg>

            </a>
          </li>
          <li class="flex items-center justify-between ">
            <div class="flex items-center">
              <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#6a76ac]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                  <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                  <path
                    d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z" />
                </svg>
              </span>
              <span class="ml-3 text-gray-800">Tiktok</span>
            </div>
            <a href="#" class="text-blue-500 hover:text-blue-700">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961" />
              </svg>

            </a>
          </li>
          <li class="flex items-center justify-between ">
            <div class="flex items-center">
              <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#ff0000]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                  <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                  <path
                    d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                </svg>
              </span>
              <span class="ml-3 text-gray-800">Youtube</span>
            </div>
            <a href="#" class="text-blue-500 hover:text-blue-700">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961" />
              </svg>

            </a>
          </li>
          <li class="flex items-center justify-between ">
            <div class="flex items-center">
              <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-black">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                  <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                  <path
                    d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                </svg>
              </span>

              <span class="ml-3 text-gray-800">X</span>
            </div>
            <a href="#" class="text-blue-500 hover:text-blue-700">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961" />
              </svg>

            </a>
          </li>
        </ul>
      </div>
      <div class=" w-150 p-4 bg-white rounded-lg shadow-md" >
        <h2 class="text-lg font-semibold text-gray-800">Admin Profile</h2>

        <div class="p-16 text-center ">
          <!-- Profile Image -->
          <div class="relative inline-block">
            <img src="{{ Vite::asset('resources/assets/Adminpfp.jpg') }}" alt="Profile Picture"
              class="w-24 h-24 rounded-full mx-auto " />
            <!-- Decorative elements -->
            <div class="absolute top-0 left-0 w-6 h-6 bg-blue-100 rounded-full"></div>
            <div class="absolute bottom-0 right-0 w-5 h-5 border-2 border-white bg-green-500 rounded-full"></div>
          </div>
          <!-- Name and Role -->
          <div class="mt-4 ">
            <h2 class="text-lg font-semibold">{{ Auth::user()->name }}</h2>
            <p class="text-sm text-gray-500">Event account</p>
            <form action="{{ route('logout') }}" method="post" class="flex items-center">
              @csrf
              <button type="submit"
                class="flex items-center px-4 py-2 mt-4 text-sm font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-700">
                <span>Log out</span>
                <svg class="w-6 h-6 ml-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                  height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2" />
                </svg>
              </button>
            </form>
          </div>



        </div>


      </div>

    </div>
  </section>



</x-admin-layout>