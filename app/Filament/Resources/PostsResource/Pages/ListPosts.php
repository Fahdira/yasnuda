<?php

namespace App\Filament\Resources\PostsResource\Pages;

use App\Filament\Resources\PostsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListPosts extends ListRecords
{
    protected static string $resource = PostsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Buat Postingan baru')->icon('heroicon-o-plus')
        ];
    }

    public function getTabs(): array
    {
        return [
            'All' => Tab::make(),
            'Dipublish' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('published', '1')),
            'Disembunyikan' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('published', '0')),
        ];
    }
}
