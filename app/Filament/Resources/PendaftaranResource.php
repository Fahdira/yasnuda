<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendaftaranResource\Pages;
use App\Filament\Resources\PendaftaranResource\RelationManagers;
use App\Models\Pendaftaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;

class PendaftaranResource extends Resource
{
    public static function getNavigationSort(): ?int
    {
        return 4; // The lower the number, the higher it appears in the sidebar
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Management'; // Group in the sidebar
    }

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $pluralModelLabel = 'Jadwal Pendaftaran';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Buat Pendaftaran')
                        ->schema([
                            Forms\Components\TextInput::make('tahun')
                                    ->label('Tahun Ajaran')
                                    ->required(),

                            Forms\Components\DatePicker::make('tgl_dibuka')
                                    ->label('Tanggal Dibuka')  
                                    ->required()
                                    ->format('Y-m-d'), 

                            Forms\Components\DatePicker::make('tgl_ditutup')
                                    ->label('Tanggal Ditutup')  
                                    ->required()
                                    ->format('Y-m-d'), 
                        ]),
                
                Section::make('Status Pendaftaran')
                        ->schema([
                            Forms\Components\Toggle::make('status')
                                ->label('Dibuka / Ditutup'),
                        ])
                        ->columnSpanFull(), 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tahun')
                        ->label('Tahun Ajaran'),

                Tables\Columns\TextColumn::make('tgl_dibuka')
                        ->label('Tanggal Dibuka')
                        ->date($format = 'd.m.Y'),

                Tables\Columns\TextColumn::make('tgl_ditutup')
                        ->label('Tanggal Ditutup')
                        ->date($format = 'd.m.Y'),

                Tables\Columns\TextColumn::make('status')
                        ->label('Status')
                        ->formatStateUsing(function ($state) {
                            return $state ? 'Dibuka' : 'Ditutup'; 
                        })
                        ->color(fn ($state) => $state ? 'success' : 'danger')
                        ->weight('bold'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
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
            'index' => Pages\ListPendaftarans::route('/'),
            'create' => Pages\CreatePendaftaran::route('/create'),
            'edit' => Pages\EditPendaftaran::route('/{record}/edit'),
        ];
    }
}
