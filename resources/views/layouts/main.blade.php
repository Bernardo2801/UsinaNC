<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- Tailwind -->
    @vite('resources/css/app.css')

    <!-- Alertify -->
    <link rel="stylesheet" href="{{asset('css/alertify.min.css')}}">
    <script src="{{asset('js/alertify.min.js')}}"></script>

    <!-- Css do Projeto -->
    <link rel="stylesheet" href="/css/styles.css">

    <!-- Js do Projeto -->
    <script src="/js/scripts.js"></script>
</head>

<body class="bg-gray-200">
<x-app-layout>

    @yield('content')

    <footer class="bg-blue-950">
        <div class="max-w-7xl mx-auto px-8 py-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-center h-12">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="/">
                            <x-application-logo class="sw-20 h-20 fill-current text-gray-500" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script Ion-Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</x-app-layout>
</body>
</html>
