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
        <style>
            html, body{
                height: 100%;
            }
        </style>
    </head>
    <body>
        @include('sweetalert::alert')
        <div class="h-full font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
