<x-dashboard-layout>
    <div class="px-5 py-5 md:px-10">
        <div class="flex flex-wrap gap-5">
            <div class="p-5 flex-1 bg-white shadow-lg rounded border border-gray-300">
                <div class="flex justify-between items-center mb-3">
                    <h2 class="text-2xl font-bold text-gray-700">Profile</h2>
                </div>
                <div>
                    <div class="my-5">
                        <p class="text-gray-500">Email</p>
                        <p>{{ $user->email }}</p>
                    </div>
                    <div class="my-5">
                        <p class="text-gray-500">Full Name</p>
                        <p>{{ $user->fullName() }}</p>
                    </div>
                    <div class="my-5">
                        <p class="text-gray-500">Phone</p>
                        <p>{{ $user->profile->phone_number }}</p>
                    </div>
                    <div class="my-5">
                        <p class="text-gray-500">Address</p>
                        <p>{{ $user->profile->address }}</p>
                    </div>
                </div>
            </div>
            <div class="p-5 flex-1 bg-white shadow-lg rounded border border-gray-300">
                <div class="flex justify-between items-center mb-3">
                    <h2 class="text-2xl font-bold text-gray-700">Orders</h2>
                </div>
                @if ($user->orders->isNotEmpty())
                    <table class="table-auto w-full text-left whitespace-no-wrap">
                        <thead class="p-5 shadow-lg bg-yellow-600 text-white">
                            <tr>
                                <th class="p-2 rounded-tl rounded-bl">Name</th>
                                <th class="p-2 rounded-tr rounded-br">Orders</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user->orders as $order)
                                <tr class="{{ $loop->even ?'bg-gray-100':'' }}">
                                    <td class="p-2">{{ $order->product_name }}</td>
                                    <td class="p-2">{{ $order->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="p-5">Customer has no orders.</p>
                @endif
            </div>
        </div>
    </div>
</x-dashboard-layout>
