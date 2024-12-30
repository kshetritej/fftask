<div class="min-h-[80vh] my-10 flex flex-col items-center gap-4 container mx-auto">
    <h1 class="uppercase text-xl lg:text-4xl font-bold">New Collection</h1>
    <p class="max-w-sm text-center text-sm sm:text-md">Our latest collection were classic and conteperory, styles converenge in
        perfect harmony.</p>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 justify-between">
        @foreach ($products as $product)
            <x-card :heading="$product['name']" :description="$product['description']" :image="$product['image_url']" :price="$product['price']"
                class=" bg-gray-100 flex flex-col p-4 gap-4 rounded-lg hover:-translate-y-1 m-2 cursor-pointer delay-150 duration-300 ease-in-out" />
        @endforeach
    </div>
</div>
