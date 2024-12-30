<footer class="bg-black text-white px-6 py-12 md:py-16">
    <div class="max-w-7xl mx-auto">
        <div class="mb-20">
            <h2 class="text-5xl md:text-7xl font-light mb-8">
                Let's shop<br />together
            </h2>
            <button
                class="group relative w-16 h-16 rounded-full border border-white/20 hover:border-white/40 transition-colors">
                <div
                    class="absolute inset-0 flex items-center justify-center rotate-[-45deg] group-hover:rotate-0 transition-transform duration-300">
                    →
                </div>
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
            <div class="space-y-8">
                <div>
                    <h3 class="text-sm mb-4">Pages</h3>
                    <div class="flex gap-2 sm:gap-4 flex-col sm:flex-row">
                        @foreach ($navItems as $item)
                            <a href="{{ $item['url'] }}"
                                class="block hover:text-white hover:underline  transition-colors">{{ $item['name'] }}</a>
                        @endforeach
                    </div>
                </div>
                <div>
                    <h3 class="text-sm mb-4">Visit</h3>
                    <address class="not-italic text-white/60">
                        TULIP<br />
                        Aldgate Tower<br />
                        London<br />
                        E1 8FA
                    </address>
                </div>
            </div>

            <div class="flex flex-col items-start md:items-end justify-between">
                <div class="text-3xl md:text-4xl font-light">tulip</div>
            </div>
        </div>


        <div class="flex flex-col md:flex-row justify-between items-start md:items-center pt-6 text-sm text-white/60">
            <div>© 2024 TULIP™</div>
            <div class="flex gap-6 mt-4 md:mt-0">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a> {{-- Changed Link to a --}}
                <a href="#" class="hover:text-white transition-colors">Terms & Conditions</a>
                {{-- Changed Link to a --}}
            </div>
        </div>
    </div>
</footer>
