<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    
    <header>
       @section('header')

           De header
       @show
       <img src="https://cdn.worldvectorlogo.com/logos/laravel-2.svg" alt="logo">
    </header>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('about-us') }}">About</a>
        <a href="{{ url('product/create') }}">Product Formulier</a>
        <a href="{{ url('bedrijven') }}">Bedrijven</a>
        <a href="{{ url('products') }}">Products</a>
        @auth
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endauth
        @guest
            <a href="{{ url('login') }}">Login</a>
            <a href="{{ url('register') }}">Register</a>
        @endguest
    </nav>
    <div class="container">
        <img src="https://www.bacancytechnology.com/blog/wp-content/uploads/2019/09/laravel6.0banner.png" alt="huts!">
    </div>
    <main>
      @yield('kopje')
     @yield('content')
    </main>
    <footer>
        <div class="links">
            <a href="http://matthijsberghuis.com">Mijn portfolio</a>
            <a href="https://github.com/matthijsdevelopment/bap-website">Github voor dit project</a>
        </div>
    </footer>
</body>
</html>