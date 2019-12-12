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
    </header>
    <nav>
        <a href="/">Home</a>
        <a href="/about-us">About</a>
        <a href="/shop">Shop</a>
        <a href="/matthijs">Me</a>
    </nav>
    <main>
     @yield('content')
    </main>
    <footer>
        FOOTER
    </footer>
</body>
</html>