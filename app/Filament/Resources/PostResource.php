<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $slug = 'posts';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationGroup = 'Controls';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?int $navigationSort = 0;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title'),

                TextInput::make('slug'),

                MarkdownEditor::make('content')
                ->columnSpan('full'),
                Forms\Components\Checkbox::make('is_published'),
                Forms\Components\Checkbox::make('is_featured'),
                
                Select::make('category_id')
                ->relationship('category', 'name')
                ->required(),

                Forms\Components\Hidden::make('user_id')
                ->dehydrateStateUsing(fn ($state) => Auth::id()),

                SpatieMediaLibraryFileUpload::make('image')
                ->imageEditor(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('thumbnail')
                    ->label('Image'),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.name')->searchable()->badge(),
                TextColumn::make('slug')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\CheckboxColumn::make('is_featured'),
                Tables\Columns\CheckboxColumn::make('is_published'),
                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->date()
                    ->sortable(),

            ])
            ->filters([
                Tables\Filters\Filter::make('is_featured')
                    ->label('Featured')
                    ->query(fn (Builder $query): Builder => $query->where('is_featured', true)),
                Tables\Filters\Filter::make('is_published')
                    ->label('Published')
                    ->query(fn (Builder $query): Builder => $query->where('is_published', true)),
                Tables\Filters\SelectFilter::make('categories')
                    ->multiple()
                    ->relationship('category', 'name'),
                Tables\Filters\TrashedFilter::make()

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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
