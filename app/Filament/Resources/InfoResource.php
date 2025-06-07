<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InfoResource\Pages;
use App\Filament\Resources\InfoResource\RelationManagers;
use App\Models\Info;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Clusters\Information;
use Filament\Forms\Components\RichEditor;
use Illuminate\Support\Str;
use Filament\Tables\Columns\TextColumn;

class InfoResource extends Resource
{
    protected static ?string $cluster = Information::class;

    protected static ?string $modelLabel = 'Registration';

    public static function getTitle(): string
    {
        return 'Pendaftaran'; // Custom title for the page
    }
    
    public static function getNavigationSort(): ?int
    {
        return 1; // The lower the number, the higher it appears in the sidebar
    }
    
    public static function getNavigationLabel(): string
    {
        return 'Informasi Pendaftaran'; // Custom title for the sidebar
    }

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->label('Judul')
                    ->required(),

                RichEditor::make('content')
                    ->label('Content'),

                Forms\Components\Toggle::make('status')
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->emptyStateHeading('Tidak ada data')
            ->columns([
                TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable(),
            
                TextColumn::make('content')
                    ->label('Content')
                    ->formatStateUsing(fn ($state) => strip_tags(Str::limit($state, 25))) 
                    ->tooltip(fn ($state) => strip_tags($state)),

                TextColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(function ($state) {
                        return $state ? 'Dipublish' : 'Disembunyikan'; 
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
            'index' => Pages\ListInfos::route('/'),
            'create' => Pages\CreateInfo::route('/create'),
            'edit' => Pages\EditInfo::route('/{record}/edit'),
        ];
    }
}
