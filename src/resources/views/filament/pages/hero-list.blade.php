<x-filament::page>
    <div class="space-y-4">
        <h2 class="text-2xl font-bold">Hero List</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($heroes as $hero)
                <div class="p-4 bg-white rounded-xl shadow border">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $hero->name }}</h3>
                    <p class="text-sm text-gray-600">Role: {{ $hero->role }}</p>
                    <p class="text-sm text-gray-500 mt-1">{{ $hero->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</x-filament::page>
