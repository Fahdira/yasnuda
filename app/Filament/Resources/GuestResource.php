<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GuestResource\Pages;
use App\Filament\Resources\GuestResource\RelationManagers;
use App\Models\Guest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GuestResource extends Resource
{
    public static function getNavigationLabel(): string
    {
        return 'Data Pendaftar'; // Custom title for the sidebar
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Pendaftar'; // Group in the sidebar
    }

    protected static ?string $navigationIcon = 'heroicon-o-user-plus';

    protected static ?string $pluralModelLabel = 'Data User';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->required(),

                Forms\Components\TextInput::make('no_telp')
                    ->label('No Hp')
                    ->numeric()
                    ->prefix('+62')
                    ->required(),

                Forms\Components\TextInput::make('username')
                    ->label('Username')
                    ->required(),

                Forms\Components\TextInput::make('password')
                    ->label('Password')
                    ->password()
                    ->revealable()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('username')
                    ->label('Username')
                    ->searchable(),

                Tables\Columns\TextColumn::make('email')
                        ->label('Email'),

                Tables\Columns\TextColumn::make('no_telp')
                        ->label('No Hp'),
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
            'index' => Pages\ListGuests::route('/'),
            'create' => Pages\CreateGuest::route('/create'),
            'edit' => Pages\EditGuest::route('/{record}/edit'),
        ];
    }
}
