<x-dashboard-layout>
    <div class="p-5">
        @if ($orders->isNotEmpty())
            <div class="flex px-3 py-5 bg-yellow-600 text-white font-bold">
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
            <p class="p-5">You have not completed any orders.</p>
        @endif
    </div>
</x-dashboard-layout>
