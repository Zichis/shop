<div class="bg-gray-800 h-screen w-14 fixed text-center py-5 overflow-y-scroll">
    <div class="my-20 text-gray-200">
        <a href="{{ route('admin.dashboard') }}" class="p-2 block my-5 @if(Request::url() == route('admin.dashboard')) text-yellow-500 @endif hover:text-yellow-600 focus:outline-none">
            <i class="fas fa-th-large"></i>
        </a>
        <a href="{{ route('admin.products.index') }}" class="p-2 block my-5 @if(Request::url() == route('admin.products.index') || Request::url() == route('admin.products.create') || Request::url() == route('admin.categories.index')) text-yellow-500 @endif hover:text-yellow-600 focus:outline-none">
            <i class="fas fa-cubes"></i>
        </a>
        <a href="{{ route('admin.users.index') }}" class="p-2 block my-5 @if(Request::url() == route('admin.users.index')) text-yellow-500 @endif hover:text-yellow-600 focus:outline-none">
            <i class="fas fa-users"></i>
        </a>
        <a href="{{ route('admin.orders.index') }}" class="p-2 block my-5 @if(Request::url() == route('admin.orders.index')) text-yellow-500 @endif hover:text-yellow-600 focus:outline-none">
            <i class="fas fa-truck"></i>
        </a>
        <a href="{{ route('admin.plans.index') }}" class="p-2 block my-5 @if(Request::url() == route('admin.plans.index')) text-yellow-500 @endif hover:text-yellow-600 focus:outline-none">
            <i class="fas fa-clipboard-list"></i>
        </a>
        <hr class="border-gray-700">
        <a href="{{ route('customer.profile.index') }}" class="p-2 block my-5 @if(Request::url() == route('customer.profile.index') || Request::url() == route('customer.profile.edit', ['profile' => Auth::user()->profile->id])) text-yellow-500 @endif hover:text-yellow-600 focus:outline-none">
            <i class="fas fa-user"></i>
        </a>
        <a href="{{ route('customer.cart.index') }}" class="p-2 block my-5 @if(Request::url() == route('customer.cart.index') || Request::url() == route('customer.cart.checkout')) text-yellow-500 @endif hover:text-yellow-600 focus:outline-none">
            <i class="fas fa-shopping-cart"></i>
        </a>
        <a href="{{ route('customer.orders.index') }}" class="p-2 block my-5 @if(Request::url() == route('customer.orders.index')) text-yellow-500 @endif hover:text-yellow-600 focus:outline-none">
            <i class="fas fa-shopping-bag"></i>
        </a>
    </div>
</div>
