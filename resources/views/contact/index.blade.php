<x-admin-layout>
<section class="p-6 flex flex-row gap-6 max-w-screen-xl mx-auto">
    <div class="flex flex-col items-stretch w-full">

        @foreach ($contacts as $contact)
            <div class="flex flex-row items-center justify-between  border rounded-lg shadow-lg rounded-lg p-4 mb-4 shadow-sm bg-white">
                <div class="flex-1">
                    <p class="text-sm text-gray-700 font-medium">{{ $contact->name }}</p>
                </div>
                <div class="flex-1">
                    <p class="text-sm text-gray-700">{{ $contact->email }}</p>
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
                        <button type="submit" class="mt-2 bg-red-600 text-white font-semibold text-sm rounded-lg py-2 px-4 focus:outline-none hover:bg-red-700 cursor-pointer">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</section>



</x-admin-layout>