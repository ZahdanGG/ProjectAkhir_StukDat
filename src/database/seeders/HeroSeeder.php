<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Hero;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    public function run(): void
    {
        Hero::create([
            'name' => 'Layla',
            'role' => 'Marksman',
            'description' => 'Hero jarak jauh dengan damage tinggi.',
        ]);
        Hero::create([
            'name' => 'Tigreal',
            'role' => 'Tank',
            'description' => 'Hero dengan pertahanan tinggi dan skill crowd control.',
        ]);
    }
}
