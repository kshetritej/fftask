    <nav class="navbar ">
        <div class="bg-black p-4 text-white text-center">Free Delivery inside Pokhara Valley!</div>
        <div class="flex justify-between items-center p-4 container mx-auto">
            <div class="nav hidden sm:flex">
                <ul class="flex  gap-4 font-bold">
                    @foreach ($navItems as $item)
                        <li><a href="{{ $item['url'] }}">{{ $item['name'] }}</a></li>
                    @endforeach
                    {{-- <li><a href="{{$item['url']}}">{{$item['name']}}</a></li>
                    <li><a href="#">Men</a></li>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Kids</a></li>
                    <li><a href="#">New & Featured</a></li>
                    <li><a href="#">Gift</a></li> --}}
                </ul>
            </div>

            <div class="logo">
                <span class="text-3xl font-black text-center">
                    TULIP
                </span>
            </div>
            <div class="ctas flex gap-8 items-center ">
                {{-- <x-heroicon-o-bars-3 class="size-6" /> --}}
                <x-heroicon-o-magnifying-glass class="size-6" />
                <x-heroicon-o-shopping-bag class="size-6" />
                <span>Login</span>
            </div>
        </div>
    </nav>
