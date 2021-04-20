<x-guest-layout>
    <div class="flex flex-col h-full justify-center items-center p-5">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" class="bg-white p-10 w-full md:w-1/2 lg:w-1/3">
            @csrf
            <h2 class="text-3xl text-yellow-500">Create Account</h2>
            <div class="material-form-control relative overflow-hidden my-4 h-12">
                <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="{{ old('email') }}" type="email" name="email" id="email" required>
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
            <div class="material-form-control relative overflow-hidden my-4 h-12">
                <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" type="password" name="password_confirmation" id="password_confirmation" required>
                <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="password_confirmation">
                    <span class="label-name text-gray-500">Confirm Password</span>
                </label>
            </div>
            <h3 class="font-bold text-center text-gray-400 mt-5">Personal</h3>
            <div class="material-form-control relative overflow-hidden my-4 h-12">
                <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="{{ old('first_name') }}" type="text" name="first_name" id="first_name" required>
                <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="first_name">
                    <span class="label-name text-gray-500">First Name</span>
                </label>
            </div>
            <div class="material-form-control relative overflow-hidden my-4 h-12">
                <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="{{ old('last_name') }}" type="text" name="last_name" id="last_name" required>
                <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="last_name">
                    <span class="label-name text-gray-500">Last Name</span>
                </label>
            </div>
            <div class="material-form-control relative overflow-hidden my-4 h-12">
                <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="{{ old('phone_number') }}" type="text" name="phone_number" id="phone_number" required>
                <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="phone_number">
                    <span class="label-name text-gray-500">Phone</span>
                </label>
            </div>
            <div class="material-form-control relative overflow-hidden my-4 h-12">
                <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="{{ old('address') }}" type="text" name="address" id="address" required>
                <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="address">
                    <span class="label-name text-gray-500">Address</span>
                </label>
            </div>

            <button type="submit" class="px-3 py-1 text-white bg-gradient-to-t from-green-400 to-green-500 hover:shadow-md rounded shadow-sm">Enter</button>
        </form>
    </div>
</x-guest-layout>
