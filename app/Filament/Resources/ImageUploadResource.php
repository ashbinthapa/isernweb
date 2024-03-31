<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImageUploadResource\Pages;
use App\Filament\Resources\ImageUploadResource\RelationManagers;
use App\Models\ImageUpload;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImageUploadResource extends Resource
{
    protected static ?string $model = ImageUpload::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('path')
                ->image()
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif'])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListImageUploads::route('/'),
            'create' => Pages\CreateImageUpload::route('/create'),
            'edit' => Pages\EditImageUpload::route('/{record}/edit'),
        ];
    }
}
