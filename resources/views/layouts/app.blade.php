<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'TULIP - Shop More') - @lang('app.name')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <x-navbar :navItems="$navItems" />
        <x-header />
    </header>
    <main class="container mx-auto ">
        <x-product-catalog :products="$products" />
    </main>
</body>

</html>
