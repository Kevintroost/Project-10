<x-admin-layout>
    <div class="bg-gray-100 min-h-screen p-6">
        <div class="flex flex-col lg:flex-row lg:space-x-6">
            
            <div class="max-w-md bg-white border border-gray-200 rounded-lg shadow-md p-6 mb-6 lg:mb-0 flex-shrink-0 h-[16rem]">
                <h2 class="text-lg font-medium text-gray-700 mb-4">File upload</h2>
                <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="file_input" class="block text-sm font-medium text-gray-700 mb-2">Attach file</label>
                    <input type="file" id="file_input" name="image" class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 py-4 px-4 text-base">
                    
                    @error('image')
                        <span class="text-sm mt-2 text-red-600">{{ $message }}</span>
                    @enderror
                    
                    <input type="submit" value="Upload" class="block w-full dark:bg-neutral-800 hover:dark:bg-neutral-900 text-white font-semibold text-sm rounded-lg cursor-pointer focus:outline-none focus:ring-1 focus:ring-blue-500 focus:dark:bg-neutral-900 py-4 px-4 mt-4">
                </form>
            </div>

            
            <div class="flex-1 bg-white border border-gray-200 rounded-lg shadow-md p-6 overflow-y-auto">
                <div class="grid grid-cols-1 gap-6">
                    @foreach ($images as $image)
                        <div class="flex items-center justify-between">
                            
                            <img src="{{ asset('images/' . $image->foto) }}" alt="foto_galerij" class="w-16 h-16 object-cover rounded-full">

                            
                           
                            <div class="flex flex-col items-start ml-4">
                                <p class="text-sm text-gray-700">{{ $image->foto }}</p>

                               
                                </div>
                                
                                <form action="{{ route('destroy') }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="image_id" value="{{ $image->id }}">
                                    <button type="submit" class="mt-2 w-full bg-red-600 text-white font-semibold text-sm rounded-lg py-3 px-10 focus:outline-none hover:bg-red-700">
                                        Delete
                                    </button>
                                </form>
                            
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

