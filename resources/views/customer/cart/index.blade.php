<x-dashboard-layout>
    <div class="p-5">
        @if ($orders->isNotEmpty())
            <div class="md:flex justify-between items-center mb-5 p-3 bg-white shadow-lg rounded border border-gray-300 text-yellow-600">
                <p class="text-2xl">Total: &#8358;{{ $total }}</p>
                {{--<a href="{{ route('customer.cart.checkout') }}" class="py-1 px-2 font-bold bg-yellow-600 text-yellow-50 hover:bg-yellow-500 hover:text-white">Checkout</a>--}}
                {{--<a href="{{ route('customer.cart.confirm') }}" class="py-1 px-2 font-bold bg-yellow-600 text-yellow-50 hover:bg-yellow-500 hover:text-white">Confirm</a>--}}
            </div>
            <div class="mb-5 p-5 bg-white shadow-lg rounded border border-gray-300">
                <div class="flex justify-between items-center mb-3">
                    <h2 class="text-2xl font-bold text-gray-700">Orders</h2>
                </div>
                <div class="overflow-x-scroll">
                    <table class="table-auto w-full text-left whitespace-no-wrap">
                        <thead class="p-5 shadow-lg bg-yellow-600 text-white">
                            <tr>
                                <th class="p-2 rounded-tl rounded-bl">Name</th>
                                <th class="p-2">Unit Price</th>
                                <th class="p-2">Quantity</th>
                                <th class="p-2">Total</th>
                                <th class="p-2 rounded-tr rounded-br">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr class="{{ $loop->even ?'bg-gray-100':'' }}">
                                    <td class="p-2">{{ $order->product_name }}</td>
                                    <td class="p-2">{{ $order->product_price }}</td>
                                    <td class="p-2">{{ $order->quantity }}</td>
                                    <td class="p-2">{{ $order->total }}</td>
                                    <td class="p-2">
                                        <a class="inline-block my-1 py-1 px-3 bg-green-500 text-white rounded hover:bg-green-600" href="{{ route('customer.orders.confirm', ['order' => $order->id]) }}">Confirm</a>
                                        <a class="inline-block my-1 py-1 px-3 bg-blue-500 text-white rounded hover:bg-blue-600" href="{{ route('customer.orders.edit', ['order' => $order->id]) }}">Update</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <p class="p-5">Your cart is empty.</p>
        @endif
    </div>
</x-dashboard-layout>
