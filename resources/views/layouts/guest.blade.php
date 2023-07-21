<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>


        <div class="flex farida">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <!-- <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" /> -->
                        <img src="{{ asset('image/logob.jpg')}}" class="im" width="75px" height="65px" alt="">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex ">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                       <a href="/" class="bienvenue">{{ __('Bienvenue sur ESI') }}</a> 
                    </x-nav-link>
                </div>
            </div>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

         <!-- css -->
         <link rel="stylesheet" href="{{ asset('css/style.css')}}"> 

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased back">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 white:bg-gray-900">
            <div class="cadre">
                <a href="/">
                    <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
                    <!-- <img src="{{ asset('image/logo.png')}}" width="100px" height="80px" alt=""> -->
                </a>
            </div>

            <div class=" garb w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>

<div class="footer">copyright</div>

</html>
