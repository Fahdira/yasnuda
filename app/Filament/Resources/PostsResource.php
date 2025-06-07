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
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Support\Str;
use Filament\Forms\Components\Placeholder;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Section;

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

    protected static ?string $navigationIcon = 'heroicon-o-document-chart-bar';

    protected static ?string $pluralModelLabel = 'Blog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Peringatan!')
                ->schema([
                    Placeholder::make('warning')
                    ->label('Mohon baca sebelum mengubah/menambahkan data')
                    ->content(fn ($record) => new HtmlString( '<span class="text-gray-500">Gunakan gambar berformat .png | .jpg, dengan rasio 1:1, maks 15MB.</span>'))
                    ->columns(1),
                ]),
                Section::make('Form Posts')
                    ->schema([
                        Forms\Components\TextInput::make('judul')
                            ->label('Judul')
                            ->reactive()
                            ->afterStateUpdated(function ($state, callable $set) {
                                $set('slug', Str::slug($state));
                            })
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->required(),

                        Forms\Components\TextInput::make('desc')
                            ->label('Deskripsi Singkat')
                            ->required()
                            ->maxLength(255),

                        RichEditor::make('content')
                            ->label('Content'),
                                
                        SpatieMediaLibraryFileUpload::make('thumbnail')
                            ->collection('thumbnail')
                            ->label('Thumbnail')
                            ->required(),
                                
                        Forms\Components\Select::make('id')
                            ->label('Author')
                            ->relationship('user','name')
                            ->native(false),

                        Forms\Components\Toggle::make('published'),
                    ]),
                ]);
                
    }

    public static function table(Table $table): Table
    {
        return $table
            ->emptyStateHeading('Tidak ada data')
            ->description('Postingan hanya akan terlihat di beranda website jika status "dipublish"')
            ->columns([
                SpatieMediaLibraryImageColumn::make('thumbnail')
                    ->collection('thumbnail')
                    ->label('Thumbnail')
                    ->width(200)
                    ->height(200),

                Tables\Columns\TextColumn::make('judul')
                        ->label('Title')
                        ->searchable(),
                    
                Tables\Columns\TextColumn::make('desc')
                        ->label('Description'),

                Tables\Columns\TextColumn::make('user.name')
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
