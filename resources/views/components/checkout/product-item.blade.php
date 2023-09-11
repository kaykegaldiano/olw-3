<li class="flex items-start py-6 space-x-4">
    <img class="flex-none object-cover object-center w-20 h-20 rounded-md" src="{{ $image }}" alt="Imagem do produto {{ $name }}">
    <div class="flex-auto space-y-1">
        <h3 class="text-white">{{ $name }}</h3>
        @foreach ($features as $feature)
            <p class="text-primary-200">{{ $feature }}</p>
        @endforeach
    </div>
    <p class="flex-none text-base font-medium text-secondary-300">R$ {{ $price }}</p>
</li>