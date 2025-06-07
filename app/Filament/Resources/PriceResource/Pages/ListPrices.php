<?php

namespace App\Filament\Resources\PriceResource\Pages;

use App\Filament\Resources\PriceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListPrices extends ListRecords
{
    protected static string $resource = PriceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah Biaya')->Icon('heroicon-o-plus')
        ];
    }

    protected static ?string $title = 'Biaya';

    public function getTabs(): array
    {
        return [
            'All' => Tab::make(),
            'MDTA' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('instansi', 'MDTA NUURUL HUDAA')),
            'MTS' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('instansi', 'MTS NUURUL HUDAA')),
            'MA' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('instansi', 'MA NUURUL HUDAA')),
        ];
    }
}
