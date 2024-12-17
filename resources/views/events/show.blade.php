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
    </div>
</section>
</x-layout>
