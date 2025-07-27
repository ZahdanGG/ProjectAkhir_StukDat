<div class="space-y-4">
    <div class="flex space-x-2">
        <input type="text" wire:model="value" placeholder="Masukkan data" class="border rounded p-2 w-full">
        <button wire:click="push" class="bg-green-500 text-white px-4 py-2 rounded">Push</button>
        <button wire:click="pop" class="bg-red-500 text-white px-4 py-2 rounded">Pop</button>
    </div>

    <div class="bg-white shadow rounded p-4">
        <h3 class="font-bold mb-2">Isi Stack:</h3>
        <ul class="list-disc pl-5">
            @forelse ($stack as $item)
                <li>{{ $item->value }}</li>
            @empty
                <li>Stack kosong</li>
            @endforelse
        </ul>
    </div>
</div>

