<x-custom-layout :cartCount="$cartCount">
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-14 mx-auto">
            @if ($searchWord != '')
                <p class="my-5">{{ count($products) }} items found for {{ $searchWord }}</p>
            @endif
            <div class="flex flex-wrap -m-4">
                @if (count($products) > 0)
                    @foreach ($products as $product)
                        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                            <a href="{{ route('products.show', ['product' => $product->id]) }}" class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/products/' . $product->images[0]->name) }}">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $product->category->name }}</h3>
                                <a href="{{ route('products.show', ['product' => $product->id]) }}">
                                    <h2 class="text-gray-700 text-md tracking-widest title-font mb-1">{{ $product->name }}</h2>
                                </a>
                                <p class="mt-1">&#8358; {{ $product->price }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No items</p>
                @endif
            </div>
        </div>
    </section>
</x-custom-layout>
