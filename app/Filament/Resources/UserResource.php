<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
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

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationLabel = 'Accounts';

    protected static ?string $pluralModelLabel = 'Akun Admin';

    protected static ?string $modelLabel = 'Administrator';

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Peringatan!')
                ->schema([
                    Placeholder::make('warning')
                    ->label('Mohon baca sebelum mengubah/menambahkan data')
                    ->content(fn ($record) => new HtmlString( '<span class="text-gray-500">Dimohon untuk tidak mengubah data akun orang lain!</span>'))
                    ->columns(1),
                ]),
                Section::make('Data Akun')
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('Username')
                        ->required()
                        ->maxLength(255),

                Forms\Components\TextInput::make('email')
                        ->label('Email')
                        ->email()
                        ->unique(ignoreRecord: true)
                        ->required(),

                Forms\Components\Select::make('jabatan')
                        ->options([
                            'Kepala Madrasah' => 'Kepala Madrasah',
                            'Guru' => 'Guru',
                            'Staff' => 'Staff',
                            'Operator' => 'Operator',
                        ])
                        ->native(false),

                Forms\Components\TextInput::make('no_telp')
                        ->label('No. Telepon')
                        ->numeric()
                        ->prefix('+62'),

                Forms\Components\Textarea::make('alamat')
                        ->rows(4)
                        ->cols(10),

                Forms\Components\DateTimePicker::make('email_verified_at')
                        ->label('Email verified')
                        ->default(now()),

                Forms\Components\TextInput::make('password')
                        ->label('Password (Cannot be Changed)')
                        ->password()
                        ->required(fn (string $operation) => $operation === 'create')
                        ->disabled(fn (string $operation) => $operation === 'edit')
                        ->dehydrateStateUsing(fn ($state) => filled($state) ? bcrypt($state) : null)
                        ->revealable(),
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->heading('Akun Admin')
            ->description('Dimohon untuk tidak mengubah atau menghapus data admin! mengubah data admin diharuskan untuk mengisi ulang password')
            ->emptyStateHeading('Tidak ada data')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                        ->label('Username')
                        ->searchable(),

                Tables\Columns\TextColumn::make('email')
                        ->label('Email'),

                Tables\Columns\TextColumn::make('jabatan')
                        ->label('Jabatan'),

                Tables\Columns\TextColumn::make('no_telp')
                        ->label('No Telepon'),

                Tables\Columns\BooleanColumn::make('email_verified_at')
                        ->label('Email Verified')
                        ->trueIcon('heroicon-o-shield-check')
                        ->falseIcon('heroicon-o-x-circle')
                        ->trueColor('success')
                        ->falseColor('danger')
                        ->getStateUsing(fn ($record) => $record->email_verified_at !== null),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
