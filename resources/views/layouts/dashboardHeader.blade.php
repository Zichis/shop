<div class="px-10 py-5">
    <p class="text-sm text-gray-500">{{ date('d F, Y') }}</p>
    <h1 class="text-3xl">{{ auth()->user()->fullName() }}</h1>
    <p>
        <a href="{{ route('home') }}" class="text-sm text-yellow-600 font-bold hover:text-yellow-500">{{ config('app.name', 'T & R SuperStore') }}</a>
    </p>
    <div>
        <a href="{{ route('products.index') }}" class="text-sm text-gray-400 font-bold hover:text-gray-600">Go to shop</a>&nbsp;
        <form method="POST" action="{{ route('logout') }}" class="inline-block">
            @csrf
            <button class="inline-block text-sm text-left text-red-400 font-bold hover:text-red-600 focus:outline-none" onclick="event.preventDefault(); this.closest('form').submit();">
                <i class="fas fa-sign-out-alt"></i> Sign out
            </button>
        </form>
    </div>
</div>
