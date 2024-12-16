<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RekeningResource\Pages;
use App\Filament\Resources\RekeningResource\RelationManagers;
use App\Models\Rekening;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Clusters\Information;

class RekeningResource extends Resource
{
    protected static ?string $cluster = Information::class;

    public static function getNavigationSort(): ?int
    {
        return 3; // The lower the number, the higher it appears in the sidebar
    }

    public static function getNavigationLabel(): string
    {
        return 'Informasi Rekening'; // Custom title for the sidebar
    }


    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRekenings::route('/'),
            'create' => Pages\CreateRekening::route('/create'),
            'edit' => Pages\EditRekening::route('/{record}/edit'),
        ];
    }
}
