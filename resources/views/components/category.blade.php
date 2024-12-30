    <div class="container mx-auto p-4 min-h-[60vh] my-4 flex flex-col gap-4">
        <h2 class="font-bold text-4xl text-center ">Explore Categories</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($categories as $category)
                <div class="relative aspect-[3/4] rounded-lg">
                    <img src="{{ $category['image'] }}" alt="{{ $category['name'] }}"
                        class="w-full h-full object-cover rounded-lg">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent flex flex-col justify-end p-6">
                        <h2 class="text-4xl font-bold text-white mb-4 uppercase">{{ $category['name'] }}</h2>
                        <div class="details hidden mb-4 bg-white/90 p-4 rounded-lg text-black">
                            <h3 class="font-semibold mb-2">{{ $category['name'] }}'s Collection</h3>
                            <p class="text-sm"> {{ $category['desc'] }}</p>
                        </div>
                        <x-button type="button" text="See Details"
                            class="see-details bg-white text-black font-semibold py-2 px-4 rounded-full hover:bg-gray-200 transition-colors" />
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const detailsButtons = document.querySelectorAll('.see-details');

            detailsButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const detailsElement = button.previousElementSibling;
                    const isHidden = detailsElement.classList.contains('hidden');

                    document.querySelectorAll('.details').forEach(elem => {
                        elem.classList.add('hidden');
                    });

                    detailsButtons.forEach(btn => {
                        btn.textContent = 'See Details';
                    });

                    if (isHidden) {
                        detailsElement.classList.remove('hidden');
                        button.textContent = 'Hide Details';
                    } else {
                        detailsElement.classList.add('hidden');
                        button.textContent = 'See Details';
                    }
                });
            });
        });
    </script>
