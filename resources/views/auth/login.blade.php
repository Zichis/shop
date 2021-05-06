<x-guest-layout>
        <div class="flex flex-col h-full justify-center items-center p-5">
            <a href="{{ route('home') }}" class="flex flex-col items-center">
                <img src="{{ asset('images/company/default_company_logo.jpeg') }}" class="w-24 h-24" alt="company logo">
            </a>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}" class="bg-white p-10 w-full md:w-1/2 lg:w-1/3">
                @csrf
                <h2 class="text-3xl text-yellow-500">Login</h2>
                <div class="material-form-control relative overflow-hidden my-4 h-12">
                    <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" type="email" name="email" id="email" required>
                    <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="email">
                        <span class="label-name text-gray-500">Email</span>
                    </label>
                </div>
                <div class="material-form-control relative overflow-hidden my-4 h-12">
                    <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" type="password" name="password" id="password" required>
                    <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="password">
                        <span class="label-name text-gray-500">Password</span>
                    </label>
                </div>
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <div class="flex justify-between items-center my-2">
                    <button type="submit" class="px-3 py-1 text-white bg-gradient-to-t from-green-400 to-green-500 hover:shadow-md rounded shadow-sm focus:outline-none">Login</button>
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                <p class="my-3 text-gray-600">Don't have an account? Register <a href="{{ route('register') }}" class="text-yellow-500 font-bold hover:text-yellow-600">here</a>.</p>
                <a href="{{ route('home') }}" class="text-gray-600 block text-center hover:text-gray-800"><i class="fas fa-home"></i> Home</a>
            </form>
        </div>
</x-guest-layout>
