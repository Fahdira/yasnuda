<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PriceResource\Pages;
use App\Filament\Resources\PriceResource\RelationManagers;
use App\Models\Price;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Clusters\Information;

class PriceResource extends Resource
{
    protected static ?string $cluster = Information::class;

    public static function getNavigationSort(): ?int
    {
        return 2; // The lower the number, the higher it appears in the sidebar
    }

    public static function getNavigationLabel(): string
    {
        return 'Informasi Biaya'; // Custom title for the sidebar
    }

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('instansi')
                        ->label('Bagian')
                        ->options([
                            'MDTA NUURUL HUDAA' => 'MDTA NUURUL HUDAA',
                            'MTS NUURUL HUDAA' => 'MTS NUURUL HUDAA',
                            'MA NUURUL HUDAA' => 'MA NUURUL HUDAA',
                        ])
                        ->native(false),

                Forms\Components\TextInput::make('desc')
                        ->required()
                        ->label('Detail'),

                Forms\Components\TextInput::make('harga')
                        ->required()
                        ->label('Biaya Pendaftaran')
                        ->numeric()
                        ->prefix('Rp.'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->emptyStateHeading('Tidak ada data')
            ->columns([
                Tables\Columns\TextColumn::make('instansi')
                        ->label('Instansi')
                        ->searchable(),

                Tables\Columns\TextColumn::make('desc')
                        ->label('Detail')
                        ->searchable(),

                Tables\Columns\TextColumn::make('harga')
                        ->label('Biaya Pendaftaran')
                        ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 0, ',', '.'))
                        ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]) 
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
            'index' => Pages\ListPrices::route('/'),
            'create' => Pages\CreatePrice::route('/create'),
            'edit' => Pages\EditPrice::route('/{record}/edit'),
        ];
    }
}
