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
use Filament\Forms\Components\Placeholder;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Section;

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
                Section::make('Peringatan!')
                ->schema([
                    Placeholder::make('warning')
                    ->label('Mohon baca sebelum mengubah/menambahkan data')
                    ->content(fn ($record) => new HtmlString( '<span class="text-gray-500">Dikarenakan aplikasi menggunakan <i>password encyption</i> dimohon untuk memasukkan ulang password baru/lama</span>'))
                    ->columns(1),
                ]),
                Section::make('Data Akun Pendaftar')
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
                    ])
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->emptyStateHeading('Tidak ada data')
            ->heading('Akun Pendaftar')
            ->description('Dimohon untuk tidak mengubah atau menghapus data user! mengubah data user diharuskan untuk mengisi ulang password')
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
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
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
