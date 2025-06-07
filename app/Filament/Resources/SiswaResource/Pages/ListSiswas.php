<?php

namespace App\Filament\Resources\SiswaResource\Pages;

use App\Filament\Resources\SiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListSiswas extends ListRecords
{
    protected static string $resource = SiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'All' => Tab::make(),
            'MDTA' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('daftar_ke', 'MDTA NUURUL HUDAA')),
            'MTS' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('daftar_ke', 'MTS NUURUL HUDAA')),
            'MA' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('daftar_ke', 'MA NUURUL HUDAA')),
        ];
    }
}
