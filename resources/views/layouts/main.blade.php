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
<body>
    <nav class="bg-blue-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="/" class="text-white">
                            <img src="img/logo-usina-text.png" alt="Logo" class="max-sm:hidden">
                        </a>
                    </div>
                </div>
                <div class="md:block">
                    <div class="ml-4 flex items-center space-x-4">
                        <a href="/solicitantes"
                        class="text-white hover:bg-white hover:text-black rounded-lg p-2">
                            Solicitantes
                        </a>
                        <a href="/materiais"
                        class="text-white hover:bg-white hover:text-black rounded-lg p-2">
                            Materiais
                        </a>
                        <a href="/motorista"
                        class="text-white hover:bg-white hover:text-black rounded-lg p-2">
                            Motorista
                        </a>
                        <a href="/veiculo"
                        class="text-white hover:bg-white hover:text-black rounded-lg p-2">
                            Veículo
                        </a>
                        @auth
                        <a href="/profile"
                        class="text-white hover:bg-white hover:text-black rounded-lg p-2">
                            Meu perfil
                        </a>
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout"
                                class="text-white hover:bg-white hover:text-black rounded-lg p-2"
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

    <footer class="bg-blue-800">
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
