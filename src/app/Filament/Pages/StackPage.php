<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class StackPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-archive-box';
    protected static string $view = 'filament.pages.stack-page';
    protected static ?string $title = 'Stack';
}
