<x-layout :title="'Login | Opus Events'">
  <section class="bg-cover bg-center"
    style="background-image: url('{{ Vite::asset('resources/assets/wavebackground.svg') }}');">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <img class="w-[200px] h-[200px] mr-2 mt-[-100px]" src="{{ Vite::asset('resources/assets/Opuswhite2.png') }}"
        alt="logo">
      <div class="w-full bg-white rounded-lg shadow-lg md:mt-0 sm:max-w-md xl:p-0">
        <div class="p-8 space-y-6 sm:p-10">
          <h1 class="text-2xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
            Sign in to your account
          </h1>
          <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
            @csrf
            <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
              <input type="email" name="email" id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 block w-full p-3"
                placeholder="name@company.com" required value="{{ old('email') }}">

              @if($errors->has('email'))
          <p class="text-red-500 text-sm mt-1">{{ $errors->first('email') }}</p>
        @endif
            </div>

            <div>
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
              <input type="password" name="password" id="password" placeholder="••••••••"
                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 block w-full p-3"
                required>

            

            <button type="submit"
              class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 mt-5 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center shadow-md">Sign
              in</button>
          </form>

        </div>
      </div>
    </div>
  </section>
</x-layout>