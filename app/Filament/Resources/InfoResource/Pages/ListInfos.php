<?php

namespace App\Filament\Resources\InfoResource\Pages;

use App\Filament\Resources\InfoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListInfos extends ListRecords
{
    protected static string $resource = InfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambahkan Informasi pendaftaran')->Icon('heroicon-o-plus')
        ];
    }

    protected static ?string $title = 'Pendaftaran';

    public function getTabs(): array
    {
        return [
            'All' => Tab::make(),
            'Dipublish' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 1)),
            'Disembunyikan' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 0)),
        ];
    }
}
