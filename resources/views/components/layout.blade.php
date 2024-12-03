<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <nav class="bg-white border-gray-200 dark:bg-neutral-800">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="{{ url('/index') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ Vite::asset('resources/assets/opuslogo.png') }}" class="h-8" alt="Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
      </a>
      <div class="flex items-center  md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <button type="button"
          class="flex text-sm bg-neutral-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
          id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
          data-dropdown-placement="bottom">
          <span class="sr-only">Open user menu</span>
          <img class="w-8 h-8 rounded-full" src="{{ Vite::asset('resources/assets/Adminpfp.jpg') }}" alt="user photo">
        </button>
        <!-- Dropdown menu -->
        <div
          class="z-50 hidden absolute top-14 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-neutral-900 dark:divide-gray-600"
          id="user-dropdown">

          <div class="px-4 py-3">
            <span class="block text-sm text-gray-900 dark:text-white">Meneer Opus</span>
            <span class="block text-sm text-gray-500 truncate dark:text-gray-400">OpusEvents</span>
          </div>
          <ul class="py-2" aria-labelledby="user-menu-button">
            <li>
              <a href="{{ url('/admin/dashboard') }}"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
              <a href="{{ url('/') }}"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                out</a>
            </li>
          </ul>
        </div>
        <button data-collapse-toggle="navbar-user" type="button"
          class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-controls="navbar-user" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M1 1h15M1 7h15M1 13h15" />
          </svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
        <ul
          class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-neutral-800 md:dark:bg-neutral-800 dark:border-gray-700">
          <li>
            <a href="#"
              class="block py-2 px-3 text-blue-700 rounded hover:bg-gray-100 hover:text-blue-700 md:p-0 dark:text-blue-500 dark:hover:bg-gray-900 dark:hover:text-white">
              Home
            </a>
          </li>
          <li>
            <a href=""
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-900 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Events</a>
          </li>
          <li>
            <a href="{{ route('event-requests.create') }}"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-900 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Request</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-900 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-900">About
              us</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-900 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-900">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  {{ $slot }}


  <footer class="bg-white shadow dark:bg-neutral-800">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
      <div class="sm:flex sm:items-center sm:justify-between">
        <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
          <img src="{{ Vite::asset('resources/assets/opuslogo.png') }}" class="h-8" alt="Flowbite Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
        </a>
        <form class="flex items-center space-x-2">
          <input type="email" placeholder="Enter your email"
            class="px-4 py-2 w-full md:w-auto rounded-md border border-gray-600 bg-neutral-900 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500" />
          <button type="submit" class="px-4 py-2 bg-blue-700 hover:bg-blue-800 text-white font-semibold rounded-md">
            Subscribe
          </button>
        </form>
        <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
          <li>
            <a href="#" class="hover:underline me-4 md:me-6">Home</a>
          </li>
          <li>
            <a href="#" class="hover:underline me-4 md:me-6">Events</a>
          </li>
          <li>
            <a href="#" class="hover:underline me-4 md:me-6">Request</a>
          </li>
          <li>
            <a href="#" class="hover:underline me-4 md:me-6">About us</a>
          </li>
          <li>
            <a href="#" class="hover:underline">Contact</a>
          </li>
        </ul>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="flex justify-between items-center py-4">
        <!-- Text -->
        <span class="text-gray-500 dark:text-gray-400">
          © 2024 <a href="" class="hover:underline">OpusEvents™</a>. All Rights Reserved.
        </span>

        <!-- Social Icons -->
        <div class="flex space-x-6">
          <!-- Facebook Icon -->
          <a href="#" class="text-gray-400 hover:text-white">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 24 24">
              <path fill-rule="evenodd"
                d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                clip-rule="evenodd" />
            </svg>
          </a>
          <!-- Instagram Icon -->
          <a href="#" class="text-gray-400 hover:text-white">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <path fill="currentColor" fill-rule="evenodd"
                d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                clip-rule="evenodd" />
            </svg>
          </a>
          <!-- WhatsApp Icon -->
          <a href="#" class="text-gray-400 hover:text-white">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <path fill="currentColor" fill-rule="evenodd"
                d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                clip-rule="evenodd" />
              <path fill="currentColor"
                d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
            </svg>
          </a>
        </div>
      </div>

    </div>
  </footer>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const userMenuButton = document.getElementById('user-menu-button');
      const userDropdown = document.getElementById('user-dropdown');

      // Toggle the dropdown visibility
      userMenuButton.addEventListener('click', function () {
        userDropdown.classList.toggle('hidden');
      });

      // Close the dropdown if clicked outside
      document.addEventListener('click', function (event) {
        if (!userMenuButton.contains(event.target) && !userDropdown.contains(event.target)) {
          userDropdown.classList.add('hidden');
        }
      });
    });
  </script>


</body>

</html>