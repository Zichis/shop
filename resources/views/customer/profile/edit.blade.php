<x-dashboard-layout>
    <div class="px-5 py-5 md:px-10">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('customer.profile.update', ['profile' => $profile->id]) }}" class="bg-white p-10 w-full md:w-1/2 lg:w-1/2">
            @csrf
            @method('PUT')
            <h2 class="text-2xl font-bold text-gray-700">Profile</h2>
            <div class="material-form-control relative overflow-hidden my-4 h-12">
                <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="@if(old('email')){{ old('email') }}@else{{ $profile->user->email }}@endif" type="email" name="email" id="email" required>
                <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="email">
                    <span class="label-name text-gray-500">Email</span>
                </label>
            </div>
            <h3 class="font-bold text-center text-gray-400 mt-5">Personal</h3>
            <div class="material-form-control relative overflow-hidden my-4 h-12">
                <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="@if(old('first_name')){{ old('first_name') }}@else{{ $profile->first_name }}@endif" type="text" name="first_name" id="first_name" required>
                <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="first_name">
                    <span class="label-name text-gray-500">First Name</span>
                </label>
            </div>
            <div class="material-form-control relative overflow-hidden my-4 h-12">
                <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="@if(old('last_name')){{ old('last_name') }}@else{{ $profile->last_name }}@endif" type="text" name="last_name" id="last_name" required>
                <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="last_name">
                    <span class="label-name text-gray-500">Last Name</span>
                </label>
            </div>
            <div class="material-form-control relative overflow-hidden my-4 h-12">
                <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="@if(old('phone_number')){{ old('phone_number') }}@else{{ $profile->phone_number }}@endif" type="text" name="phone_number" id="phone_number" required>
                <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="phone_number">
                    <span class="label-name text-gray-500">Phone</span>
                </label>
            </div>
            <div class="material-form-control relative overflow-hidden my-4 h-12">
                <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" value="@if(old('address')){{ old('address') }}@else{{ $profile->address }}@endif" type="text" name="address" id="address" required>
                <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="address">
                    <span class="label-name text-gray-500">Address</span>
                </label>
            </div>

            <button type="submit" class="px-3 py-1 text-white bg-gradient-to-t from-green-400 to-green-500 hover:shadow-md rounded shadow-sm">Enter</button>
        </form>
    </div>
</x-dashboard-layout>
