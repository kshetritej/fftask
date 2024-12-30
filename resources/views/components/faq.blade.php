    <div class="flex flex-col min-h-[40vh] sm:min-h-[60vh] m-2 ">
        <h1 class=" text-xl sm:text-4xl font-bold text-center">Frequently Asked Questions</h1>
        <div class="flex flex-col gap-4">
            <div class="my-4">
                @foreach ($faqs as $faq)
                    <div class="question flex justify-between border-b p-4 ">
                        <h3 class="sm:text-2xl font-semibold">{{ $faq['question'] }}</h3>
                        <x-heroicon-o-plus class="size-6 plus" />
                        <x-heroicon-o-minus class="size-6 minus hidden" />
                    </div>
                    <p class="hidden answer text-lg p-4 ">{{ $faq['answer'] }}</p>
                @endforeach
            </div>
        </div>

        <script>
            document.querySelectorAll('.question').forEach(item => {
                item.addEventListener('click', event => {
                    item.nextElementSibling.classList.toggle('hidden');
                    item.querySelector('.minus').classList.toggle('hidden');
                    item.querySelector('.plus').classList.toggle('hidden');
                });
            });
        </script>
