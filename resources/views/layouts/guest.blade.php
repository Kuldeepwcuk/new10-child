<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" href="{{asset('img/favicon/favicon.ico')}}">
        <link href="{{asset('vendor/fonts/boxicons.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{asset('vendor/css/core.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{asset('vendor/css/theme-default.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/demo.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{asset('/vendor/libs/apex-charts/apex-charts.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <script src="{{asset('vendor/js/helpers.js')}}"></script>
        <script src="{{asset('js/config.js')}}"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
    <script src="{{asset('vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('vendor/js/menu.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</html>
