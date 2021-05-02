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
            <header class="text-gray-600 body-font">
                <div class="container border-b mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                  <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                    <span class="ml-3 text-xl">T & R Fitness</span>
                  </a>
                  <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
                    <a class="mr-5 hover:text-gray-900">Pricing</a>
                    <a class="mr-5 hover:text-gray-900">Timetable</a>
                    <a class="mr-5 hover:text-gray-900">Payment</a>
                    <a href="{{ route('home') }}" class="mr-5 hover:text-gray-900">Shop</a>
                  </nav>
                </div>
            </header>
            <section class="text-gray-600 body-font">
                <div class="container mx-auto flex px-5 py-14 md:flex-row flex-col items-center">
                   <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Best Trainings
                            <br class="hidden lg:inline-block">For You
                        </h1>
                        <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
                        <div class="flex gap-3 justify-center">
                            <a href="#plans" class="inline-flex py-2 px-6 rounded bg-green-500 text-white text-lg hover:bg-green-600">Pricing</a>
                            <a href="#schedule" class="inline-flex py-2 px-6 rounded border border-gray-600 text-gray-600 text-lg hover:bg-gray-600 hover:text-white">Schedule</a>
                        </div>
                    </div>
                    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                        <img class="object-cover object-center rounded" alt="hero" src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Zml0bmVzc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60">
                    </div>
                </div>
            </section>
            <section id="plans" class="text-gray-600 body-font overflow-hidden">
                <div class="container px-5 py-14 mx-auto">
                    <div class="flex flex-col text-center w-full mb-12">
                        <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Pricing</h1>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-gray-500">Below are the different plans we have currently. There is a plan for everyone. </p>
                        <p>Payments can be made to our Keystone Bank account, <span class="text-green-500 font-bold">1012158608 (T & R Superstore)</span></p>
                    </div>
                    @if (count($plans) > 0)
                        <div class="flex flex-wrap justify-center -m-4">
                            @foreach ($plans as $plan)
                                <div class="p-4 xl:w-1/3 md:w-1/2 w-full">
                                    <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                                        <span class="bg-green-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
                                        <h2 class="text-sm tracking-widest title-font mb-1 font-medium uppercase">{{ $plan->sub_name }}</h2>
                                        <h1 class="text-4xl text-gray-900 pb-4 mb-4 border-b border-gray-200 leading-none">{{ $plan->name }}</h1>
                                        <p class="flex items-center text-gray-600 mb-2">
                                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                            </span>Single:
                                            @if($plan->single_discount != '0')
                                                &nbsp;<span class="line-through text-red-500">&#8358;{{ $plan->single_price }}</span>&nbsp;<span>&#8358;{{ (100 - $plan->single_discount) * ($plan->single_price)/100 }}</span>
                                            @else
                                                &#8358;{{  $plan->single_price }}
                                            @endif
                                        </p>
                                        <p class="flex items-center text-gray-600 mb-2">
                                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                                    <path d="M20 6L9 17l-5-5"></path>
                                                </svg>
                                            </span>Couple:
                                            @if($plan->couple_discount != '0')
                                                &nbsp;<span class="line-through text-red-500">&#8358;{{ $plan->couple_price }}</span>&nbsp;<span>&#8358;{{ (100 - $plan->couple_discount) * ($plan->couple_price)/100 }}</span>
                                            @else
                                                &#8358;{{  $plan->couple_price }}
                                            @endif
                                        </p>
                                        <p class="flex items-center text-gray-600 mb-2">
                                            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                                    <path d="M20 6L9 17l-5-5"></path>
                                                </svg>
                                            </span>Family:
                                            @if($plan->family_discount != '0')
                                                &nbsp;<span class="line-through text-red-500">&#8358;{{ $plan->family_price }}</span>&nbsp;<span>&#8358;{{ (100 - $plan->family_discount) * ($plan->family_price)/100 }}</span>
                                            @else
                                                &#8358;{{  $plan->family_price }}
                                            @endif
                                        </p>
                                        <p class="text-xs text-gray-500 mt-3"><i class="fas fa-info-circle"></i> Terms and conditions apply for discounts.</p>
                                    </div>
                                </div>
                            @endforeach
                            <!--<div class="p-4 xl:w-1/3 md:w-1/2 w-full">
                                <div class="h-full p-6 rounded-lg border-2 border-green-500 flex flex-col relative overflow-hidden">
                                    <span class="bg-green-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
                                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">SECOND PLAN</h2>
                                    <h1 class="text-4xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                                    Monthly
                                    </h1>
                                    <p class="flex items-center text-gray-600 mb-2">
                                    <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                        </svg>
                                    </span>Single: &nbsp;<span>&#8358;10,000</span>
                                    </p>
                                    <p class="flex items-center text-gray-600 mb-2">
                                    <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                        </svg>
                                    </span>Couple: &nbsp;<span class="line-through text-red-500">&#8358;20,000</span>&nbsp;<span>&#8358;18,000</span>
                                    </p>
                                    <p class="flex items-center text-gray-600 mb-2">
                                    <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                        </svg>
                                    </span>Family: &nbsp;<span class="line-through text-red-500">&#8358;40,000</span>&nbsp;<span>&#8358;30,00</span>
                                    </p>
                                    <p class="text-xs text-gray-500 mt-3"><i class="fas fa-info-circle"></i> Terms and conditions apply for discounts.</p>
                                </div>
                            </div>
                            <div class="p-4 xl:w-1/3 md:w-1/2 w-full">
                                <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">THIRD PLAN</h2>
                                    <h1 class="text-4xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                                    Quarterly
                                    </h1>
                                    <p class="flex items-center text-gray-600 mb-2">
                                    <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                        </svg>
                                    </span>Single: &nbsp;<span>&#8358;25,000</span>
                                    </p>
                                    <p class="flex items-center text-gray-600 mb-2">
                                    <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                        </svg>
                                    </span>Couple: &nbsp;<span class="line-through text-red-500">&#8358;50,000</span>&nbsp;<span>&#8358;45,000</span>
                                    </p>
                                    <p class="flex items-center text-gray-600 mb-2">
                                    <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                        </svg>
                                    </span>Family: &nbsp;<span class="line-through text-red-500">&#8358;100,000</span>&nbsp;<span>&#8358;75,00</span>
                                    </p>
                                    <p class="text-xs text-gray-500 mt-3"><i class="fas fa-info-circle"></i> Terms and conditions apply for discounts.</p>
                                </div>
                            </div>
                            <div class="p-4 xl:w-1/3 md:w-1/2 w-full">
                                <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">FOURTH PLAN</h2>
                                    <h1 class="text-4xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                                    Semi Annual
                                    </h1>
                                    <p class="flex items-center text-gray-600 mb-2">
                                    <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                        </svg>
                                    </span>Single: &nbsp;<span>&#8358;48,000</span>
                                    </p>
                                    <p class="flex items-center text-gray-600 mb-2">
                                    <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                        </svg>
                                    </span>Couple: &nbsp;<span class="line-through text-red-500">&#8358;96,000</span>&nbsp;<span>&#8358;86,400</span>
                                    </p>
                                    <p class="flex items-center text-gray-600 mb-2">
                                    <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                        </svg>
                                    </span>Family: &nbsp;<span class="line-through text-red-500">&#8358;192,000</span>&nbsp;<span>&#8358;144,000</span>
                                    </p>
                                    <p class="text-xs text-gray-500 mt-3"><i class="fas fa-info-circle"></i> Terms and conditions apply for discounts.</p>
                                </div>
                            </div>
                            <div class="p-4 xl:w-1/3 md:w-1/2 w-full">
                                <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">FIFTH PLAN</h2>
                                    <h1 class="text-4xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                                        Annual
                                    </h1>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg>
                                        </span>Single: &nbsp;<span class="line-through text-red-500">&#8358;90,000</span>&nbsp;<span>&#8358;85,500</span>
                                    </p>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg>
                                        </span>Couple: &nbsp;<span class="line-through text-red-500">&#8358;180,000</span>&nbsp;<span>&#8358;153,000</span>
                                    </p>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg>
                                        </span>Family: &nbsp;<span class="line-through text-red-500">&#8358;192,000</span>&nbsp;<span>&#8358;144,000</span>
                                    </p>
                                    <p class="text-xs text-gray-500 mt-3"><i class="fas fa-info-circle"></i> Terms and conditions apply for discounts.</p>
                                </div>
                            </div>-->
                        </div>
                    @else
                        <p>No payment plans available.</p>
                    @endif
                </div>
            </section>
            <section id="schedule" class="text-gray-600 body-font overflow-hidden">
                <div class="container px-5 py-14 mx-auto">
                    <div class="flex flex-col text-center w-full mb-12">
                        <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Schedules</h1>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-gray-500">Below are the different training schedules. </p>
                    </div>
                    @if (count($schedules) > 0)
                        <div class="shadow-md p-3 rounded">
                            @foreach ($schedules as $schedule)
                                <div class="flex flex-wrap p-2 text-green-900 @if($loop->iteration % 2 == 0) bg-green-100 @else bg-green-200 @endif">
                                    <div class="w-full md:w-1/3">
                                        <p class="text-sm font-bold">{{ $schedule->day }}</p>
                                    </div>
                                    <div class="w-full md:w-1/3">
                                        @if ($schedule->morning != '' || $schedule->morning != null)
                                            <p>{{ $schedule->morning }} <small class="text-xs font-bold">(M)</small></p>
                                        @endif
                                    </div>
                                    <div class="w-full md:w-1/3">
                                        @if ($schedule->evening != '' || $schedule->evening != null)
                                            <p>{{ $schedule->evening }} <small class="text-xs font-bold">(E)</small></p>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                            <p class="mt-3 text-green-900">
                                M - Morning &nbsp;
                                E - Evening
                            </p>
                        </div>
                    @else
                        <p>No schedules specified.</p>
                    @endif
                </div>
            </section>
        </div>
    </body>
</html>
