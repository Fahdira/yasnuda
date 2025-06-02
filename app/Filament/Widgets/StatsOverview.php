<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Siswa;
use App\Models\Guest;
use App\Models\Posts;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Siswa Mendaftar', Siswa::count()),
            Stat::make('Total User', Guest::count()),
            Stat::make('Blog', Posts::count()),
        ];
    }
}
