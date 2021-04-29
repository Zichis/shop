<div class="bg-gray-800 h-screen w-14 fixed text-center py-5">
    <div class="my-20 text-gray-200">
        <a href="{{ route('customer.dashboard') }}" class="p-2 block my-5 @if(Request::url() == route('customer.dashboard')) text-yellow-500 @endif hover:text-yellow-600 focus:outline-none">
            <i class="fas fa-th-large"></i>
        </a>
        <a href="{{ route('customer.profile.index') }}" class="p-2 block my-5 @if(Request::url() == route('customer.profile.index') || Request::url() == route('customer.profile.edit', ['profile' => Auth::user()->profile->id])) text-yellow-500 @endif hover:text-yellow-600 focus:outline-none">
            <i class="fas fa-user"></i>
        </a>
        <a href="{{ route('products.index') }}" class="p-2 block my-5 hover:text-yellow-600 focus:outline-none">
            <i class="fas fa-cubes"></i>
        </a>
        <a href="{{ route('customer.cart.index') }}" class="p-2 block my-5 @if(Request::url() == route('customer.cart.index') || Request::url() == route('customer.cart.checkout')) text-yellow-500 @endif hover:text-yellow-600 focus:outline-none">
            <i class="fas fa-shopping-cart"></i>
        </a>
        <a href="{{ route('customer.orders.index') }}" class="p-2 block my-5 @if(Request::url() == route('customer.orders.index')) text-yellow-500 @endif hover:text-yellow-600 focus:outline-none">
            <i class="fas fa-shopping-bag"></i>
        </a>
    </div>
</div>
