<div class="my-5 text-white">
    <a href="{{ route('admin.products.index') }}" class="{{ Request::url() == route('admin.products.index') ?'bg-gray-600':'bg-gray-500' }} py-1 px-3 border-t border-l border-b border-r border-gray-700 rounded rounded-r-none">
        Products
    </a>
    <a href="{{ route('admin.categories.index') }}" class="{{ Request::url() == route('admin.categories.index') ?'bg-gray-600':'bg-gray-500' }} py-1 px-3 border-t border-r border-b border-gray-700 rounded rounded-l-none">
        Categories
    </a>
</div>
