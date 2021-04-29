<div class="px-10 py-5">
    <p class="text-sm text-gray-500">{{ date('d F, Y') }}</p>
    <h1 class="text-3xl">{{ auth()->user()->fullName() }}</h1>
    <p>
        <a href="{{ route('home') }}" class="text-sm text-yellow-600 font-bold hover:text-yellow-500">{{ config('app.name', 'T & R SuperStore') }}</a>
    </p>
    <p>
        <a href="{{ route('products.index') }}" class="text-sm text-gray-400 font-bold hover:text-gray-600">Go to shop</a>
    </p>
</div>
