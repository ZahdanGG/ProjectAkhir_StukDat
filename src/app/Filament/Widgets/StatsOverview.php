<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\User;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Users', User::count())
                ->description('Jumlah akun yang terdaftar')
                ->color('success'),

            Card::make('Total Hero', 0) // nanti diganti pakai model Hero
                ->description('Jumlah hero MLBB')
                ->color('info'),

            Card::make('Total Item', 0) // nanti diganti pakai model Item
                ->description('Jumlah item MLBB')
                ->color('warning'),
        ];
    }
}
