<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah Kontak baru')->Icon('heroicon-o-plus')
        ];
    }

    public function getTabs(): array
    {
        return [
            'All' => Tab::make(),
            'MDTA' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('bagian', 'MDTA Nuurul Hudaa')),
            'MTS' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('bagian', 'MTS Nuurul Hudaa')),
            'MA' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('bagian', 'MA Nuurul Hudaa')),
        ];
    }
}
