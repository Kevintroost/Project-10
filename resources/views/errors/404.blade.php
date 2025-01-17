<x-layout :title="'404 not found | Opus Events'">
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
            <div class="mx-auto max-w-screen-sm text-center">
                <!-- 404 Error Code -->
                <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-blue-600">
                    404
                </h1>

                <!-- Title -->
                <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl">
                    Something's missing.
                </p>

                <!-- Description -->
                <p class="mb-4 text-lg font-light text-gray-500">
                    Sorry, we can't find that page. You'll find lots to explore on the home page.
                </p>

                <!-- Back to Homepage Button -->
                <a href="{{ url('/') }}"
                    class="inline-flex text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center my-4">
                    Back to Homepage
                </a>
            </div>
        </div>
    </section>
</x-layout>
