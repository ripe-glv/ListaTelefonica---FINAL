<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="/css/estilos.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Lista</a>
                        </li>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/cadastro" class="nav-link">Cadastro</a>
                        </li>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/editar" class="nav-link">Editar/Excluir</a>
                        </li>
                    @auth
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout" 
                                 class="nav-link"
                                 onclick="event.preventDefault();
                                 this.closest('form').submit();">
                                 Sair
                                </a>
                            </form>
                        </li>
                    @endauth
                    @guest
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Entrar</a>
                        </li>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Registrar-se</a>
                        </li>
                    @endguest    
    </header>
    
        @yield('content')
        <footer>
            <p>LinceWeb &copy; 2022 </p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
