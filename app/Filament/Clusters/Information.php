<?php

namespace App\Filament\Clusters;

use Filament\Clusters\Cluster;

class Information extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function getNavigationSort(): ?int
    {
        return 2; // The lower the number, the higher it appears in the sidebar
    }
}
