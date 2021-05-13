<x-custom-layout :cartCount="$cartCount" :searchWord="$searchWord">
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-9 mx-auto">
            <div class="mb-5">
                <h3 class="font-bold">Categories</h3>
                <div class="p-3 border-2 border-gray-300 max-h-32 overflow-y-scroll shadow-md rounded">
                    <a href="{{ route('products.index') }}" class="py-1 px-3 mr-2 bg-gray-500 text-white rounded-full hover:bg-yellow-600 {{ Request::url() == route('products.index') && $selectedCategory == null && $searchWord == '' ?'bg-yellow-600':'bg-gray-500' }}">All</a>
                    @foreach ($categories as $category)
                        <a href="{{ route('products.index', ['category' => $category->name]) }}" class="py-1 px-3 mr-2 bg-gray-500 text-white rounded-full hover:bg-yellow-600 {{ $selectedCategory && ($selectedCategory->name == $category->name) ?'bg-yellow-600':'bg-gray-500' }}">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
            @if ($selectedCategory != null)
                <h2 class="text-2xl mb-5">{{ $selectedCategory->name }} <small>({{ count($products) }} found)</small></h2>
            @endif
            @if ($searchWord != '')
                <p class="my-5">{{ count($products) }} items found for <span class="font-bold text-xl">{{ $searchWord }}</span></p>
                <p class="my-5">
                    <a href="{{ route('products.index') }}" class="font-bold text-yellow-600 hover:text-yellow-700">View all</a>
                </p>
            @endif
            <div class="flex flex-wrap -m-4">
                @if (count($products) > 0)
                    @foreach ($products as $product)
                        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                            <a href="{{ route('products.show', ['product' => $product->id]) }}" class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/products/' . $product->images[0]->name) }}">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $product->category->name ?? 'No Category' }}</h3>
                                <a href="{{ route('products.show', ['product' => $product->id]) }}">
                                    <h2 class="text-gray-700 text-md tracking-widest title-font mb-1">{{ $product->name }}</h2>
                                </a>
                                <p class="mt-1">&#8358; {{ $product->price }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="px-5">{{ $searchWord == '' ?'No items':'' }}</p>
                @endif
            </div>
        </div>
    </section>
</x-custom-layout>
