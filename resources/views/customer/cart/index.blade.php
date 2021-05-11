<x-dashboard-layout>
    <div class="p-5">
        @if ($orders->isNotEmpty())
            <div class="md:flex justify-between items-center mb-5 p-5 bg-white text-yellow-600">
                <p class="text-2xl sm:mb-2">Total: &#8358;{{ $total }}</p>
                {{--<a href="{{ route('customer.cart.checkout') }}" class="py-1 px-2 font-bold bg-yellow-600 text-yellow-50 hover:bg-yellow-500 hover:text-white">Checkout</a>--}}
                {{--<a href="{{ route('customer.cart.confirm') }}" class="py-1 px-2 font-bold bg-yellow-600 text-yellow-50 hover:bg-yellow-500 hover:text-white">Confirm</a>--}}
            </div>
            <div class="flex px-3 py-5 bg-yellow-600 text-white font-bold">
                <div class="flex-1">Name</div>
                <div class="flex-1">Unit Price</div>
                <div class="flex-1">Quantity</div>
                <div class="flex-1">Total</div>
                <div class="flex-1">Action</div>
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
                        &#8358;{{ $order->total }}
                    </div>
                    <div class="flex-1">
                        <a href="{{ route('customer.orders.confirm', ['order' => $order->id]) }}" class="py-1 px-2 font-bold bg-yellow-600 text-yellow-50 hover:bg-yellow-500 hover:text-white">Confirm</a>
                    </div>
                </div>
            @endforeach
        @else
            <p class="p-5">Your cart is empty.</p>
        @endif
    </div>
</x-dashboard-layout>
