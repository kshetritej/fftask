<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>@yield('title', 'TULOS - Shop Now')</title>
</head>

<body>
    <nav>
        @include('navbar')
    </nav>
    <header class="container">
        @yield('header')
    </header>

    <main>
    </main>

    <footer>
    </footer>

</body>

</html>
