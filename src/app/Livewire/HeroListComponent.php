<?php

namespace App\Livewire;

use App\Models\Hero;
use Livewire\Component;

class HeroListComponent extends Component
{
    public string $search = '';

    public function render()
    {
        $heroes = Hero::query()
            ->when($this->search, fn ($query) => 
                $query->where('name', 'like', '%' . $this->search . '%')
            )
            ->get();
        return view('livewire.hero-list-component', compact('heroes'));
    }
}
