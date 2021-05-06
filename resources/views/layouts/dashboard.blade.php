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
            <div class="flex">
                <!-- Sidemenu -->
                @hasrole('ROLE_ADMIN')
                    @include('layouts.sidemenu')
                @else
                    @include('layouts.customerSidemenu')
                @endhasrole
                <div class="bg-gray-200 pl-14 h-screen overflow-y-scroll w-full">
                    @include('layouts.dashboardHeader')
                    @if ($message = Session::get('success'))
                        <div id="successFlash" class="flex justify-between items-center p-3 m-5 rounded bg-green-500 text-white">
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div>{{ $slot }}</div>
                </div>
            </div>
        </div>
    </body>
</html>
