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
use App\Models\Bank;
use Illuminate\Support\Str;

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
                Forms\Components\TextInput::make('nama')
                        ->label('Nama')
                        ->required()
                        ->maxLength(255),

                Forms\Components\TextInput::make('no_rek')
                        ->label('No Rekening')
                        ->required(),
                
                Forms\Components\Select::make('bank_id')
                        ->label('Bank')
                        ->searchable()
                        ->reactive()
                        ->afterStateUpdated(function ($state, callable $set) {
                            $bank = Bank::find($state);
                            if ($bank) {
                                $code = str_pad($bank->code, 3, '0', STR_PAD_LEFT);
                                $set('code', $code);
                            } else {
                                $set('code', null);
                            }
                        })
                        ->relationship('bank','name')
                        ->native(false),

                Forms\Components\TextInput::make('code')
                        ->label('Kode Bank')
                        ->disabled()
                        ->required()
                        ->dehydrated(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                        ->label('Nama')
                        ->searchable(),

                Tables\Columns\TextColumn::make('no_rek')
                        ->label('No Rekening'),
                
                Tables\Columns\TextColumn::make('bank.name')
                        ->label('Bank'),
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
            'index' => Pages\ListRekenings::route('/'),
            'create' => Pages\CreateRekening::route('/create'),
            'edit' => Pages\EditRekening::route('/{record}/edit'),
        ];
    }
}
