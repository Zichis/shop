<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

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
                        <div>
                            <h1 class="text-2xl text-gray-200 font-bold">Shop</h1>
                        </div>
                        <div class="hidden md:block">
                            <input class="py-1 px-3 rounded-full w-72 focus:ring-transparent" type="text" name="search" id="search" placeholder="Search products...">
                        </div>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                            <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                                <span class="sr-only">View notifications</span>
                                <!-- Heroicon name: outline/bell -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </button>
                            <div class="ml-3 relative">
                                <div>
                                  <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                  </button>
                                </div>

                                <!--
                                  Dropdown menu, show/hide based on menu state.

                                  Entering: "transition ease-out duration-100"
                                    From: "transform opacity-0 scale-95"
                                    To: "transform opacity-100 scale-100"
                                  Leaving: "transition ease-in duration-75"
                                    From: "transform opacity-100 scale-100"
                                    To: "transform opacity-0 scale-95"
                                -->
                                <div class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>
                                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
                                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block p-2 md:hidden">
                    <input class="py-1 px-3 rounded-full w-full focus:ring-transparent" type="text" name="search" id="search" placeholder="Search products...">
                </div>
            </nav>
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
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-wrap -m-4">
                        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                            <a class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                                <p class="mt-1">$16.00</p>
                            </div>
                        </div>
                        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                            <a class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/421x261">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
                                <p class="mt-1">$21.15</p>
                            </div>
                        </div>
                        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                            <a class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/422x262">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
                                <p class="mt-1">$12.00</p>
                            </div>
                        </div>
                        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                            <a class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/423x263">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
                                <p class="mt-1">$18.40</p>
                            </div>
                        </div>
                        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                            <a class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/424x264">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                                <p class="mt-1">$16.00</p>
                            </div>
                        </div>
                        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                            <a class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/425x265">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
                                <p class="mt-1">$21.15</p>
                            </div>
                        </div>
                        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                            <a class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/427x267">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
                                <p class="mt-1">$12.00</p>
                            </div>
                        </div>
                        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                            <a class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/428x268">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
                                <p class="mt-1">$18.40</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--<main class="p-5">
                <div class="bg-white p-5 my-5 rounded shadow-sm">
                    <h3 class="my-2 font-bold text-gray-800">Featured</h3>
                    <hr>
                    <div class="my-4 flex justify-between flex-wrap">
                        <div class="p-3 border mb-5 md:mr-1 border-gray-300 hover:shadow-md w-full sm:w1/2 md:w-1/4 lg:w-1/6">
                            <div class="h-52" style="background: url(https://images.pexels.com/photos/3819969/pexels-photo-3819969.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500); background-size: cover; background-position: center;"></div>
                            <div>
                                <p>Can Coke</p>
                                <p>NGN 100</p>
                            </div>
                        </div>
                        <div class="p-3 border mb-5 md:mr-1 border-gray-300 hover:shadow-md w-full sm:w1/2 md:w-1/4 lg:w-1/6">
                            <div class="h-52" style="background: url(https://images.pexels.com/photos/3819969/pexels-photo-3819969.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500); background-size: cover; background-position: center;"></div>
                            <div>
                                <p>Can Coke</p>
                                <p>NGN 100</p>
                            </div>
                        </div>
                        <div class="p-3 border mb-5 md:mr-1 border-gray-300 hover:shadow-md w-full sm:w1/2 md:w-1/4 lg:w-1/6">
                            <div class="h-52" style="background: url(https://images.pexels.com/photos/3819969/pexels-photo-3819969.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500); background-size: cover; background-position: center;"></div>
                            <div>
                                <p>Can Coke</p>
                                <p>NGN 100</p>
                            </div>
                        </div>
                        <div class="p-3 border mb-5 md:mr-1 border-gray-300 hover:shadow-md w-full sm:w1/2 md:w-1/4 lg:w-1/6">
                            <div class="h-52" style="background: url(https://images.pexels.com/photos/3819969/pexels-photo-3819969.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500); background-size: cover; background-position: center;"></div>
                            <div>
                                <p>Can Coke</p>
                                <p>NGN 100</p>
                            </div>
                        </div>
                        <div class="p-3 border mb-5 md:mr-1 border-gray-300 hover:shadow-md w-full sm:w1/2 md:w-1/4 lg:w-1/6">
                            <div class="h-52" style="background: url(https://images.pexels.com/photos/3819969/pexels-photo-3819969.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500); background-size: cover; background-position: center;"></div>
                            <div>
                                <p>Can Coke</p>
                                <p>NGN 100</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-5 my-5 rounded shadow-sm">
                    <h3 class="my-2 font-bold text-gray-800">Latest</h3>
                    <hr>
                    <div class="my-4 flex justify-between flex-wrap">
                        <div class="p-3 border mb-5 md:mr-1 border-gray-300 hover:shadow-md w-full sm:w1/2 md:w-1/4 lg:w-1/6">
                            <div class="h-52" style="background: url(https://images.pexels.com/photos/3819969/pexels-photo-3819969.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500); background-size: cover; background-position: center;"></div>
                            <div>
                                <p>Can Coke</p>
                                <p>NGN 100</p>
                            </div>
                        </div>
                        <div class="p-3 border mb-5 md:mr-1 border-gray-300 hover:shadow-md w-full sm:w1/2 md:w-1/4 lg:w-1/6">
                            <div class="h-52" style="background: url(https://images.pexels.com/photos/3819969/pexels-photo-3819969.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500); background-size: cover; background-position: center;"></div>
                            <div>
                                <p>Can Coke</p>
                                <p>NGN 100</p>
                            </div>
                        </div>
                        <div class="p-3 border mb-5 md:mr-1 border-gray-300 hover:shadow-md w-full sm:w1/2 md:w-1/4 lg:w-1/6">
                            <div class="h-52" style="background: url(https://images.pexels.com/photos/3819969/pexels-photo-3819969.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500); background-size: cover; background-position: center;"></div>
                            <div>
                                <p>Can Coke</p>
                                <p>NGN 100</p>
                            </div>
                        </div>
                        <div class="p-3 border mb-5 md:mr-1 border-gray-300 hover:shadow-md w-full sm:w1/2 md:w-1/4 lg:w-1/6">
                            <div class="h-52" style="background: url(https://images.pexels.com/photos/3819969/pexels-photo-3819969.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500); background-size: cover; background-position: center;"></div>
                            <div>
                                <p>Can Coke</p>
                                <p>NGN 100</p>
                            </div>
                        </div>
                        <div class="p-3 border mb-5 md:mr-1 border-gray-300 hover:shadow-md w-full sm:w1/2 md:w-1/4 lg:w-1/6">
                            <div class="h-52" style="background: url(https://images.pexels.com/photos/3819969/pexels-photo-3819969.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500); background-size: cover; background-position: center;"></div>
                            <div>
                                <p>Can Coke</p>
                                <p>NGN 100</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>-->
        </div>
    </body>
</html>
