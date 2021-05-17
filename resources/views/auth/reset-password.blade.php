<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{ route('home') }}" class="flex flex-col items-center">
                <img src="{{ asset('images/company/default_company_logo.jpeg') }}" class="w-24 h-24" alt="company logo">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div class="material-form-control relative overflow-hidden my-4 h-12">
                <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" type="email" name="email" id="email" value="@if(old('email')){{ old('email') }}@else{{ $request->email }}@endif" required>
                <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="email">
                    <span class="label-name text-gray-500">Email</span>
                </label>
            </div>

            <!-- Password -->
            <div class="material-form-control relative overflow-hidden my-4 h-12">
                <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" type="password" name="password" id="password" required>
                <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="password">
                    <span class="label-name text-gray-500">Password</span>
                </label>
            </div>

            <!-- Confirm Password -->
            <div class="material-form-control relative overflow-hidden my-4 h-12">
                <input class="p-0 pt-5 border-none w-full h-full focus:outline-none focus:ring-0" type="password" name="password_confirmation" id="password_confirmation" required>
                <label class="border-b-2 border-fuchsia-600 absolute bottom-0 left-0 w-full h-full pointer-events-none" for="password_confirmation">
                    <span class="label-name text-gray-500">Confirm Password</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
