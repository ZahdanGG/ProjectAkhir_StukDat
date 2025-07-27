<?php

namespace App\Livewire;

use App\Models\StackItem;
use Livewire\Component;

class StackComponent extends Component
{
    public $value;

    public function push()
    {
        if ($this->value) {
            StackItem::create(['value' => $this->value]);
            $this->reset('value');
        }
    }

    public function pop()
    {
        $topItem = StackItem::latest()->first();
        if ($topItem) {
            $topItem->delete();
        }
    }

    public function render()
    {
        return view('livewire.stack-component', [
            'stack' => StackItem::latest()->get(),
        ]);
    }
}
