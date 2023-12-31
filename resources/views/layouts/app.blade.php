<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->

         <!-- css -->
         <link rel="stylesheet" href="{{ asset('css/style.css')}}"> 

         <!-- Boostraps -->
         <!-- <link rel="stylesheet" href="{{ asset('style/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">  -->

         <!-- Font-awesome -->
           <link rel="stylesheet" href="{{ asset('style/font-awesome/css/all.css')}}">

           <!-- JavaScript -->
           <link rel="stylesheet" href="{{ asset('script/script.js')}}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="backe">
        <div >
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header >
                    <div >
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        
<div class="footer">copyright</div>

<script>
    function toggleMenu() {
        const sousMenu = document.getElementById("sousMenu");
        sousMenu.classList.toggle("open-menu");
    }
</script>

    </body>
</html>
