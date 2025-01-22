<x-admin-layout :title="'Contact request | Opus Events'">
@if(session('success'))
            <div class="w-full  pt-6 px-6 items-center ">
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
    <section class="p-6 flex flex-row gap-6 max-w-screen-xl mx-auto">
        
        <div class="flex flex-col items-stretch w-full">
        <h1 class="text-3xl font-bold border-b border-gray-300 pb-2 mb-6">Contact requests</h1>

            @foreach ($contacts as $contact)
                <div
                    class="flex flex-row items-center justify-between  border rounded-lg shadow-lg rounded-lg p-4 mb-4 shadow-sm bg-white">
                    <div class="flex-1">
                        <p class="text-sm text-gray-700 font-medium">{{ $contact->name }}</p>
                    </div>
                    <div class="flex-1">
                        <a href="mailto:{{ $contact->email }}" class="text-sm text-gray-700 hover:underline">
                            {{ $contact->email }}
                        </a>
                    </div>

                    <div class="flex-1">
                        <p class="text-sm text-gray-700">{{ $contact->phonenumber }}</p>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-700">{{ $contact->message }}</p>
                    </div>
                    <div class="flex-none">
                        <form action="{{ route('contact.destroy', ['id' => $contact->id]) }}" method="POST" class="ml-4">
                            @method('DELETE')
                            @csrf
                            <input type="hidden" name="event_id" value="{{ $contact->id }}">
                            <button type="submit"
                                class="mt-2 bg-green-600 text-white font-semibold text-sm rounded-lg py-2 px-4 focus:outline-none hover:bg-green-300 cursor-pointer">
                                Complete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>



</x-admin-layout>