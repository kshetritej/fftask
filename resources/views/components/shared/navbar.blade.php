<nav class="navbar">
    <div class="bg-black p-4 text-white text-center">
        Free Delivery inside Pokhara Valley! 🛻
    </div>

    <!--navigations -->
    <div class="flex justify-between items-center p-4 container mx-auto">
        <div id="hamburger" class="cursor-pointer md:hidden  flex items-center gap-1">
            <x-heroicon-o-bars-3 class="size-8" />
        </div>

        <div class="hidden md:flex items-center gap-12">
            <span class="text-3xl font-black text-center cursor-pointer">
                <a href="/">TULIP</a>
            </span>
            <div id="nav-menu" class="nav hidden sm:flex">
                <ul class="flex flex-col sm:flex-row gap-4 font-bold bg-white w-full">
                    @foreach ($navItems as $item)
                        <li><a class="cursor-pointer hover:text-red-900"
                                href="{{ $item['url'] }}">{{ $item['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="ctas flex gap-8 items-center">
            <x-heroicon-o-magnifying-glass class="size-6" />
            <x-heroicon-o-shopping-bag class="size-6" />
            <span class="hover:text-red-900 cursor-pointer">Login</span>
        </div>
    </div>


    <!-- Mobile menu -->
    <div id="mobile-menu"
        class="fixed inset-0 bg-white text-black transform -translate-x-full transition-transform sm:hidden z-50">
        <div class="p-4 flex justify-between items-center">
            <span class="text-3xl font-black">TULIP</span>
            <button id="close-menu" class="focus:outline-none" aria-label="Close navigation">
                <x-heroicon-o-x-mark class="size-6" />
            </button>
        </div>
        <ul class="mt-8 space-y-4 p-4 text-lg">
            @foreach ($navItems as $item)
                <li>
                    <a href="{{ $item['url'] }}" class="block hover:text-red-900">{{ $item['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>

<script>
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenu = document.getElementById('close-menu');

    hamburger.addEventListener('click', () => {
        mobileMenu.classList.remove('-translate-x-full');
    });

    closeMenu.addEventListener('click', () => {
        mobileMenu.classList.add('-translate-x-full');
    });
</script>
