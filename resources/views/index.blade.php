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
                            Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
                        </p>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.pexels.com/photos/3687999/pexels-photo-3687999.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
        </div>
    </div>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-14 mx-auto">
            <p class="my-2">Latest Items</p>
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
                            <p class="mt-1">{{ $product->price }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="my-3 p-5 text-center">
            <a href="{{ route('products.index') }}" class="p-3 border-2 border-yellow-600 font-bold text-yellow-600 hover:bg-yellow-600 hover:text-white">View more</a>
        </div>
    </section>
</x-custom-layout>
