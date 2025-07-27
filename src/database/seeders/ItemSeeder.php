<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run(): void
    {
        Item::create([
            'name' => 'Blade of Despair',
            'type' => 'Attack',
            'effect' => 'Meningkatkan physical attack secara drastis.',
        ]);
        Item::create([
            'name' => 'Athena\'s Shield',
            'type' => 'Defense',
            'effect' => 'Memberikan shield saat HP rendah.',
        ]);
    }
}
