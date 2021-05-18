<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'T & R SuperStore') }}</title>

        <link rel="icon" href="{{ asset('images/company/default_company_logo.jpeg') }}" sizes="16x16">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <nav class="bg-gray-800">
                <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                    <div class="relative flex items-center justify-between h-16">
                        <a href="{{ route('home') }}" class="flex">
                            <img src="{{ asset('images/company/default_company_logo.jpeg') }}" class="w-9 h-9 mr-2" alt="company logo">
                            <h1 class="text-2xl text-gray-200 font-bold">
                                {{ config('app.name', 'T & R SuperStore') }}
                            </h1>
                        </a>
                        <div class="hidden md:flex md:items-center">
                            <form action="{{ route('products.index') }}" method="GET">
                                <input class="py-1 px-3 rounded-full w-72 focus:ring-transparent" type="text" name="productName" id="search" value="{{ $searchWord }}" placeholder="Search products...">
                                <button class="bg-yellow-600 text-white rounded-full p-1 font-bold">GO</button>
                            </form>
                        </div>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                            @role('ROLE_CUSTOMER')
                                <a href="{{ route('customer.cart.index') }}" class="relative bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                                    <span class="sr-only">View cart</span>
                                    <i class="fas fa-shopping-cart text-xl"></i>
                                    @if ($cartCount > 0)
                                        <div class="bg-red-500 rounded-full text-xs w-2 h-2 flex justify-center items-center absolute top-0 right-0 text-white">
                                        </div>
                                    @endif
                                </a>
                            @endrole
                            <div class="ml-3 relative">
                                <div>
                                  <button id="userMenuButton" type="button" class="bg-gray-800 p-1 text-gray-400 hover:text-white flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <!--<img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">-->
                                    <i class="far fa-user text-xl"></i>
                                  </button>
                                </div>

                                <div id="userMenu" class="z-20 hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                                    @if (Auth::check())
                                        @role('ROLE_ADMIN')
                                            <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Admin</a>
                                        @endrole
                                        <a href="{{ route('customer.profile.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100 focus:outline-none" onclick="event.preventDefault(); this.closest('form').submit();">Sign out</button>
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Log in</a>
                                        <a href="{{ route('register') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Create account</a>
                                    @endif
                                    <a href="{{ route('fitness') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Fitness</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block p-2 md:hidden">
                    <form class="flex" action="{{ route('products.index') }}" method="GET">
                        <input class="py-1 px-3 mr-1 rounded-full flex-1 focus:ring-transparent" type="text" name="productName" id="search" value="{{ $searchWord }}" placeholder="Search products...">
                        <button class="bg-yellow-600 text-white rounded-full p-1 font-bold">GO</button>
                    </form>
                </div>
            </nav>
            @include('sweetalert::alert')
            {{ $slot }}
        </div>
    </body>
</html>
