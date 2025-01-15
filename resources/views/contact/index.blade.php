<x-admin-layout>
    <section class="p-6 flex flex-row gap-6 max-w-screen-xl mx-auto px-8 mx-auto max-w-screen-xl">
        <div
            class="w-full md:w-auto bg-white border border-gray-200 rounded-lg shadow-md p-6 overflow-y-auto flex-shrink-0 h-[16rem]">
            <div class="grid grid-cols-1 gap-6">
                @foreach ($contacts as $contact)
                    <div class="flex items-center justify-between">
                        <div class="flex flex-col items-start ml-4">
                            <p class="text-sm text-gray-700">{{ $contact->name }}</p>
                        </div>
                        <div class="flex flex-col items-start ml-4">
                            <p class="text-sm text-gray-700">{{ $contact->email }}</p>
                        </div>
                        <div class="flex flex-col items-start ml-4">
                            <p class="text-sm text-gray-700">{{ $contact->phonenumber }}</p>
                        </div>
                        <div class="flex flex-col items-start ml-4">
                            <p class="text-sm text-gray-700">{{ $contact->message }}</p>
                        </div>

                        <form action="{{ route('contact.destroy', ['id' => $contact->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input type="hidden" name="event_id" value="{{ $contact->id }}">
                            <button type="submit"
                                class="mt-2 w-full bg-red-600 text-white font-semibold text-sm rounded-lg py-3 px-10 focus:outline-none hover:bg-red-700 cursor-pointer">
                                Delete
                            </button>
                        </form>

                    </div>
                @endforeach
            </div>
        </div>
    </section>


</x-admin-layout>