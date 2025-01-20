<x-admin-layout :title="'Contact request | Opus Events'">
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
                                class="mt-2 bg-green-600 text-white font-semibold text-sm rounded-lg py-2 px-4 focus:outline-none hover:bg-red-700 cursor-pointer">
                                Complete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>



</x-admin-layout>