<div class="p-6 space-y-4">
    <input 
        type="text" 
        wire:model="search" 
        placeholder="Cari Hero..." 
        class="w-full px-4 py-2 border rounded"
    >

    <table class="w-full table-auto border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">Nama</th>
                <th class="border px-4 py-2">Role</th>
                <th class="border px-4 py-2">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($heroes as $hero)
                <tr>
                    <td class="border px-4 py-2">{{ $hero->name }}</td>
                    <td class="border px-4 py-2">{{ $hero->role }}</td>
                    <td class="border px-4 py-2">{{ $hero->description }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="border px-4 py-2 text-center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
