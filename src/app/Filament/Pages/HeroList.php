<?php

namespace App\Filament\Pages;

use App\Models\Hero;
use Filament\Pages\Page;

class HeroList extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static string $view = 'filament.pages.hero-list';
    protected static ?string $title = 'Hero List';

    public $heroes = [];

    public function mount(): void
    {
        $this->heroes = Hero::all();
    }
}
