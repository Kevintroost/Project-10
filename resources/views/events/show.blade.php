<x-layout>
<section class="bg-center bg-no-repeat bg-gray-500 bg-blend-multiply" style="
    background-image: url('{{ asset('images/' . $event->event_picture) }}');
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
    

<nav class="bg-white ">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <p class="">{{ $event->event_name }}</p>
    
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <button class="px-4 py-2 text-gray-500 bg-gray-100 rounded-md cursor-not-allowed" >
            

        
      </ul>
    </div>
  </div>
</nav>






</section>



</x-layout>
