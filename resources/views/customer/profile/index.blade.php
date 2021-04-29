<x-dashboard-layout>
    <div class="px-5 py-5 md:px-10">
        <div class="p-5 bg-white shadow-lg rounded border border-gray-300 lg:w-1/2">
            <div class="flex justify-between items-center mb-3">
                <h2 class="text-2xl font-bold text-gray-700">Profile</h2>
                <a href="{{ route('customer.profile.edit', ['profile' => $customer->id]) }}" class="text-gray-700 px-3 py-1 font-semibold hover:text-yellow-600">
                    <i class="fas fa-edit"></i>
                </a>
            </div>
            <div>
                <div class="my-5">
                    <p class="text-gray-500">Email</p>
                    <p>{{ $customer->email }}</p>
                </div>
                <div class="my-5">
                    <p class="text-gray-500">Full Name</p>
                    <p>{{ $customer->fullName() }}</p>
                </div>
                <div class="my-5">
                    <p class="text-gray-500">Phone</p>
                    <p>{{ $customer->profile->phone_number }}</p>
                </div>
                <div class="my-5">
                    <p class="text-gray-500">Address</p>
                    <p>{{ $customer->profile->address }}</p>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
