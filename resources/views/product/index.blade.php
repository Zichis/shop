<x-custom-layout>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-14 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach ($products as $product)
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                        <a href="{{ route('products.show', ['product' => $product->id]) }}" class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/products/' . $product->images[0]->name) }}">
                        </a>
                        <div class="mt-4">
                            <a href="{{ route('products.show', ['product' => $product->id]) }}">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $product->name }}</h3>
                            </a>
                            <p class="mt-1">&#8358; {{ $product->price }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-custom-layout>
