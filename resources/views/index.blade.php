<x-custom-layout :cartCount="$cartCount">
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>

                <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                </div>

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-800 sm:text-5xl md:text-6xl">
                            <span class="block">Shop from the</span>
                            <span class="block text-yellow-500">comfort of your home</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            {{ $information->shop_banner != '' ?$information->shop_banner:'Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.' }}
                        </p>
                        <div class="mt-5">
                            <a href="{{ route('contact') }}" class="inline-flex py-2 px-6 rounded bg-green-500 text-white text-lg hover:bg-green-600">Contact</a>&nbsp;&nbsp;
                            <a href="{{ route('fitness') }}" class="inline-flex py-2 px-6 rounded border border-gray-600 text-gray-600 text-lg hover:bg-gray-600 hover:text-white">Fitness</a>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.pexels.com/photos/3687999/pexels-photo-3687999.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
        </div>
    </div>

    <section class="text-gray-600 body-font">
        @if (count($products) > 0)
            <div class="container px-5 py-7 mx-auto">
                <div class="flex justify-between items-center rounded bg-yellow-600 text-white mb-3 px-2 py-1">
                    <p class="my-2">Latest</p>
                    <a href="{{ route('products.index') }}" class="underline">View All</a>
                </div>
                <div class="flex flex-wrap -m-4">
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
                                <p class="mt-1">{{ $product->price }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p class="m-5 text-center">No items</p>
        @endif

        <div class="container px-5 py-7 mx-auto">
            @foreach ($categories as $category)
                @if (count($category->products) > 0)
                    <div class="flex justify-between items-center rounded bg-yellow-600 text-white mb-3 px-2 py-1">
                        <p class="my-2">{{ $category->name }}</p>
                        <a href="{{ route('products.index', ['category' => $category->name]) }}" class="underline">View All</a>
                    </div>
                @endif
                <div class="flex flex-wrap -m-4">
                    @foreach ($category->products as $product)
                        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                            <a href="{{ route('products.show', ['product' => $product->id]) }}" class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('images/products/' . $product->images[0]->name) }}">
                            </a>
                            <div class="mt-4 mb-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $product->category->name }}</h3>
                                <a href="{{ route('products.show', ['product' => $product->id]) }}">
                                    <h2 class="text-gray-700 text-md tracking-widest title-font mb-1">{{ $product->name }}</h2>
                                </a>
                                <p class="mt-1">{{ $product->price }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
</x-custom-layout>
