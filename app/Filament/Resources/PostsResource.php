<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostsResource\Pages;
use App\Filament\Resources\PostsResource\RelationManagers;
use App\Models\Posts;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class PostsResource extends Resource
{
    public static function getNavigationSort(): ?int
    {
        return 6; // The lower the number, the higher it appears in the sidebar
    }

    public static function getNavigationLabel(): string
    {
        return 'Blog'; // Custom title for the sidebar
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Management'; // Group in the sidebar
    }

    protected static ?string $navigationIcon = 'heroicon-o-bookmark';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                        ->label('Judul')
                        ->required()
                        ->maxLength(255),

                Forms\Components\TextInput::make('desc')
                        ->label('Deskripsi Singkat')
                        ->required()
                        ->maxLength(255),

                SpatieMediaLibraryFileUpload::make('content'),

                RichEditor::make('content')
                    ->label('Content'),

                Forms\Components\Select::make('id')
                    ->label('Author')
                    ->relationship('user','name')
                    ->native(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                        ->label('Title')
                        ->searchable(),
                    
                Tables\Columns\TextColumn::make('desc')
                        ->label('Description'),

                Tables\Columns\TextColumn::make('id')
                        ->label('Author'),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePosts::route('/create'),
            'edit' => Pages\EditPosts::route('/{record}/edit'),
        ];
    }
}
