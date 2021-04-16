<div class="bg-gray-800 h-screen w-14 fixed text-center py-5">
    <div class="my-20 text-gray-200">
        <a href="{{ route('admin.dashboard') }}" class="p-2 block my-5 @if(Request::url() == route('admin.dashboard')) text-yellow-500 @endif hover:text-yellow-600 focus:outline-none">
            <i class="fas fa-th-large"></i>
        </a>
        <a href="{{ route('admin.products.index') }}" class="p-2 block my-5 @if(Request::url() == route('admin.products.index')) text-yellow-500 @endif hover:text-yellow-600 focus:outline-none">
            <i class="fas fa-cubes"></i>
        </a>
        <a href="#" class="p-2 block my-5 hover:text-yellow-600 focus:outline-none">
            <i class="fas fa-users"></i>
        </a>
    </div>
</div>
