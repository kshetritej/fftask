<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'TULIP - Shop More')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <x-shared.navbar :navItems="$navItems" />
        <x-section.header />
    </header>
    <main class="container mx-auto ">
        <x-section.product-catalog :products="$products" />
        <div class="my-10">
        <x-section.category :categories="$categories"/>
        </div>
        <x-section.faq :faqs="$faqs" />
    </main>
    <x-section.footer :navItems="$navItems" />
</body>

</html>
