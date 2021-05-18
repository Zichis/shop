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
        <a href="{{ route('admin.information.index') }}" class="p-2 block my-5 @if(Request::url() == route('admin.information.index')) text-yellow-500 @endif hover:text-yellow-600 focus:outline-none">
            <i class="fas fa-info-circle"></i>
        </a>
    </div>
</div>
