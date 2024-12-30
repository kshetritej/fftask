<div class="{{ $class ?? 'max-h-[200px] container'}}">
    <div class="max-w-[420px] overflow-hidden rounded-lg object-cover h-[220px]">
        <img class="rounded-lg hove:scale-110" src="{{ $image }}" alt="{{ $heading ?? 'Product Image' }}">
    </div>
    <div class="flex flex-col gap-1">
        <h1 class="text-2xl font-semibold">
            {{ $heading }}
        </h1>
        <p class="max-w-sm">{{ $description }}</p>
        <p class="font-bold text-lg">${{ $price }}</p>
    </div>
</div>
