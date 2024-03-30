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
    <header>
        <div class="bg-blue-100">
            <div class="container max-w-5xl mx-auto px-4 h-24 flex items-center justify-between">
                <div>
                    <a href="/">
                        <img src="img/logo-usina-text.png" alt="Logo" class="w-44 max-sm:hidden">
                    </a>
                </div>

                <ul class="flex items-center ml-auto space-x-4">
                    <li>
                        <a href="/" class="text-base font-medium text-base text-blue-600 hover:text-blue-800 hover:underline">Solicitante
                    </li>
                    <li>
                        <a href="/" class="text-base font-medium text-base text-blue-600 hover:text-blue-800 hover:underline">Materiais</a>
                    </li>
                    <li>
                        <a href="/" class="text-base font-medium text-base text-blue-600 hover:text-blue-800 hover:underline">Motorista</a>
                    </li>
                    <li>
                        <a href="/" class="text-base font-medium text-base text-blue-600 hover:text-blue-800 hover:underline">Automóvel</a>
                    </li>
                    @auth
                    <li>
                        <a href="/profile" class="text-base font-medium text-base text-blue-600 hover:text-blue-800 hover:underline">Meu perfil</a>
                    </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                    <a href="/logout"
                                    class="text-base font-medium text-base text-blue-600 hover:text-blue-800 hover:underline"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                        Sair
                                    </a>
                            </form>
                        </li>
                    @endauth
                    @guest
                    <li>
                        <a href="/login" class="text-base font-medium text-base text-blue-600 hover:text-blue-800 hover:underline">Login</a>
                    </li>
                    <li>
                        <a href="/register" class="text-base font-medium text-base text-blue-600 hover:text-blue-800 hover:underline">Registrar</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="bg-blue-100">
            <div class="container max-w-5xl mx-auto flex items-center justify-center">
                <div>
                    <a href="/">
                        <img src="img/logo-usina-text.png" alt="Logo" class="w-20">
                    </a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
