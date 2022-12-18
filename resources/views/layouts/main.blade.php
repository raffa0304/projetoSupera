<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <img src="/img/logo.png" alt="logo">
                    <ul class="navbar-nav">
                        @auth 
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Home <ion-icon name="home-outline"></ion-icon></a>
                        </li>
                        <li class="nav-item">
                            <a href="/cars/yourCars" class="nav-link">Seus carros <ion-icon name="car-sport-outline"></ion-icon></a>
                        </li>
                        <li class="nav-item">
                            <a href="/registers/register" class="nav-link">Cadastrar carro <ion-icon name="clipboard-outline"></ion-icon></a>
                        </li>
                        <li class="nav-item">
                            <a href="/home" class="nav-link">Suas revisões <ion-icon name="construct-outline"></ion-icon></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}"
                            class="nav-link" 
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit()"> 
                                Sair <ion-icon name="log-out-outline"></ion-icon>
                            </a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Entrar <ion-icon name="log-in-outline"></ion-icon></a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Cadastrar <ion-icon name="reorder-four-outline"></ion-icon></a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
       <footer>
            Desenvolvido por <i><u>Rafael Augusto da Silva</u></i>  <ion-icon name="code-slash-outline"></ion-icon>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
