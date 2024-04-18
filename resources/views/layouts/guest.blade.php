<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Css do Projeto -->
        <link rel="stylesheet" href="/css/styles.css">

    </head>
    <body class="font-sans text-gray-900 antialiased flex flex-col items-center justify-center h-screen h-full" style="background-color: #DBE4FE">

        <div class="text-center mt-6">
            <a href="/">
                <x-application-logo class="sw-20 h-20 fill-current text-gray-500" />
            </a>
        </div>

        <div class="w-full sm:max-w-md px-6 py-4 bg-gray-800 shadow-md sm:rounded-lg mb-2">
            {{ $slot }}
        </div>

    </body>


</html>
