<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublicationCategoryResource\Pages;
use App\Filament\Resources\PublicationCategoryResource\RelationManagers;
use App\Models\PublicationCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PublicationCategoryResource extends Resource
{
    protected static ?string $model = PublicationCategory::class;

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationGroup = 'Publications';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name'),

                Forms\Components\TextInput::make('slug'),

                Forms\Components\MarkdownEditor::make('description')
                    ->columnSpan('full'),

                Forms\Components\Toggle::make('is_visible')
                    ->label('Visible to customers.')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\CheckboxColumn::make('is_visible')
                    ->label('Visibility'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->date(),
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
            'index' => Pages\ListPublicationCategories::route('/'),
            'create' => Pages\CreatePublicationCategory::route('/create'),
            'edit' => Pages\EditPublicationCategory::route('/{record}/edit'),
        ];
    }
}
