<div class="{{ $class ?? 'max-h-[200px] container' }}">
    <div class="max-w-[420px] overflow-hidden rounded-lg object-cover h-[220px]">
        <img class="rounded-lg" src="{{ $image }}" alt="{{ $heading ?? 'Product Image' }}">
    </div>
    <div class="flex justify-between gap-2">
        <div>
            <h1 class="text-2xl font-semibold">
                {{ $heading }}
            </h1>
            <p class="max-w-sm">{{ $description }}</p>
        </div>
        <x-button text="More" type="button" class="mt-4 bg-white text-black w-[200px] h-[50px] rounded-sm" />
    </div>
</div>
