<x-dashboard-layout>
    <div class="px-10 py-5">
        <div class="p-5 bg-white shadow-lg rounded border border-gray-300">
            <div class="flex justify-between items-center mb-3">
                <h2 class="text-2xl font-bold text-gray-700">Customers</h2>
            </div>
            <div class="overflow-x-scroll">
                <table class="table-auto w-full text-left whitespace-no-wrap">
                    <thead class="p-5 shadow-lg bg-yellow-600 text-white">
                        <tr>
                            <th class="p-2 rounded-tl rounded-bl">Name</th>
                            <th class="p-2 rounded-tr rounded-br">Orders</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr class="{{ $loop->even ?'bg-gray-100':'' }}">
                                <td class="p-2">
                                    <a href="{{ route('admin.users.show', ['user' => $customer->id]) }}" class="text-gray-800 hover:text-gray-900">{{ $customer->fullName() }}</a>
                                </td>
                                <td class="p-2">{{ count($customer->orders) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-dashboard-layout>
