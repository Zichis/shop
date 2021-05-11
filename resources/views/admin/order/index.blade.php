<x-dashboard-layout>
    <div class="p-5">
        @if ($pendingOrders->isNotEmpty())
            <div class="flex px-3 py-5 bg-yellow-600 text-white font-bold">
                <div class="flex-1">Name</div>
                <div class="flex-1">Unit Price</div>
                <div class="flex-1">Quantity</div>
                <div class="flex-1">Total</div>
                <div class="flex-1">Actions</div>
            </div>
            @foreach ($pendingOrders as $order)
                <div class="flex px-3 py-5 bg-yellow-50">
                    <div class="flex-1">
                        {{ $order->product_name }}
                    </div>
                    <div class="flex-1">
                        &#8358;{{ $order->product_price }}
                    </div>
                    <div class="flex-1">
                        {{ $order->quantity }}
                    </div>
                    <div class="flex-1">
                        &#8358;{{ $order->total }}
                    </div>
                    <div class="flex-1">
                        <a href="{{ route('admin.orders.confirm', ['order' => $order->id]) }}" class="py-1 px-3 bg-green-500 text-white rounded hover:bg-green-600">Confirm</a>&nbsp;
                        <a href="{{ route('admin.orders.reject', ['order' => $order->id]) }}" class="py-1 px-3 bg-red-500 text-white rounded hover:bg-red-600">Cancel</a>
                    </div>
                </div>
            @endforeach
        @else
            <p class="p-5">No pending orders.</p>
        @endif

        @if ($orders->isNotEmpty())
            <div class="flex px-3 py-5 mt-10 bg-yellow-600 text-white font-bold">
                <div class="flex-1">Name</div>
                <div class="flex-1">Unit Price</div>
                <div class="flex-1">Quantity</div>
                <div class="flex-1">Status</div>
                <div class="flex-1">Total</div>
            </div>
            @foreach ($orders as $order)
                <div class="flex px-3 py-5 bg-yellow-50">
                    <div class="flex-1">
                        {{ $order->product_name }}
                    </div>
                    <div class="flex-1">
                        &#8358;{{ $order->product_price }}
                    </div>
                    <div class="flex-1">
                        {{ $order->quantity }}
                    </div>
                    <div class="flex-1">
                        {{ $order->status }}
                    </div>
                    <div class="flex-1">
                        &#8358;{{ $order->total }}
                    </div>
                </div>
            @endforeach
        @else
            <p class="p-5 my-5">No pending orders.</p>
        @endif
    </div>
</x-dashboard-layout>
