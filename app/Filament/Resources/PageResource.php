<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $slug = 'pages';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationGroup = 'Controls';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title'),

                Forms\Components\TextInput::make('slug'),

                TinyEditor::make('content')
                    ->fileAttachmentsDisk('local')
                    ->fileAttachmentsVisibility('public')
                    ->fileAttachmentsDirectory('uploads')
                    ->columnSpan('full'),
                
                Forms\Components\Select::make('parent_id')
                ->label('Parent Page')
                ->options(Page::all()->pluck('title', 'id'))
                ->searchable(),

                Forms\Components\Checkbox::make('is_published')
                ->columnSpan('full'),

                Forms\Components\Checkbox::make('is_featured'),
                
                Forms\Components\SpatieMediaLibraryFileUpload::make('image')
                ->imageEditor()
                ->columnSpan('full'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\SpatieMediaLibraryImageColumn::make('thumbnail')
                    ->label('Image'),
                    Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\CheckboxColumn::make('is_featured'),
                Tables\Columns\CheckboxColumn::make('is_published'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
