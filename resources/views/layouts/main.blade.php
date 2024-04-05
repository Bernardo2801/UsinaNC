<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- Tailwind -->
    @vite('resources/css/app.css')

    <!-- Css do Projeto -->
    <link rel="stylesheet" href="/css/styles.css">

    <!-- Js do Projeto -->
    <script src="/js/scripts.js"></script>


</head>
<body class="bg-gray-200">
    <nav class="bg-blue-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="/">
                            <img src="img/logo-usina-text.png" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="md:block">
                    <div class="ml-4 flex items-center space-x-4">
                        <a href="/solicitantes"
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-1 focus:ring-blue-700 transition ease-in-out duration-150">
                            Solicitantes
                        </a>
                        <a href="/materiais"
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-1 focus:ring-blue-700 transition ease-in-out duration-150">
                            Materiais
                        </a>
                        <a href="/motorista"
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-1 focus:ring-blue-700 transition ease-in-out duration-150">
                            Motorista
                        </a>
                        <a href="/veiculo"
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-1 focus:ring-blue-700 transition ease-in-out duration-150">
                            Veículo
                        </a>
                        @auth
                        <a href="/profile"
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-1 focus:ring-blue-700 transition ease-in-out duration-150">
                            Meu perfil
                        </a>
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout"
                                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-1 focus:ring-red-700 transition ease-in-out duration-150"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                Sair
                            </a>
                        </form>
                        @endauth
                        @guest
                        <a href="/login"
                            class="text-base font-medium text-base text-blue-600 hover:text-blue-800 hover:underline">
                            Login
                        </a>
                        <a href="/register"
                            class="text-base font-medium text-base text-blue-600 hover:text-blue-800 hover:underline">
                            Registrar
                        </a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-blue-950">
        <div class="max-w-7xl mx-auto px-8 py-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-center h-12">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="/" class="text-white">
                            <img src="img/logo-usina-text.png" alt="Logo" class="max-sm:hidden">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script Ion-Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
