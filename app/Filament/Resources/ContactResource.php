<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Clusters\Information;

class ContactResource extends Resource
{
    protected static ?string $cluster = Information::class;

    public static function getNavigationSort(): ?int
    {
        return 5; // The lower the number, the higher it appears in the sidebar
    }

    protected static ?string $navigationLabel = 'Informasi Kontak';

    protected static ?string $modelLabel = 'Contact';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                        ->label('Nama')
                        ->required()
                        ->maxLength(255),

                Forms\Components\TextInput::make('no_telp')
                        ->required()
                        ->label('No. Telepon')
                        ->prefix('+62'),

                Forms\Components\Select::make('bagian')
                        ->label('Penanggung Jawab')
                        ->options([
                            'MDTA Nuurul Hudaa' => 'MDTA Nuurul Hudaa',
                            'MTs Nuurul Hudaa' => 'MTs Nuurul Hudaa',
                            'MA Nuurul Hudaa' => 'MA Nuurul Hudaa',
                        ])
                        ->native(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                        ->label('Name')
                        ->searchable(),

                Tables\Columns\TextColumn::make('no_telp')
                        ->label('No Hp'),

                Tables\Columns\TextColumn::make('bagian')
                        ->label('Penanggung Jawab'),
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
