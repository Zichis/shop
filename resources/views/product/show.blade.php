<x-custom-layout>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-16 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="product" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('images/products/' . $product->images[0]->name) }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->name }}</h1>
                    <p class="my-2 leading-relaxed">{{ $product->description }}</p>
                    <p class="my-2 title-font font-medium text-2xl text-gray-900">&#8358; {{ $product->price }}</p>
                    <p class="my-4">
                        <label for="quantity" class="md:mr-2">Quantity</label>
                        <select class="focus:outline-none focus:ring-1 focus:ring-yellow-500 focus:border-yellow-300" name="quantity" id="quantity">
                            @for ($i = 1; $i <= $product->quantity; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </p>
                    <button class="py-2 px-4 border border-yellow-600 font-bold text-yellow-600 hover:bg-yellow-600 hover:text-white">
                        <i class="fas fa-cart-plus"></i> Add
                    </button>
                    <div class="mt-5">
                        <a href="{{ route('products.index') }}" class="py-2 px-4 font-bold border-1 bg-gray-700 text-gray-100 hover:bg-gray-800 hover:text-white">
                            <i class="fas fa-chevron-left"></i> Go back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-custom-layout>
