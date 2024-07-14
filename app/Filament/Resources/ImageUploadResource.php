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
                ->disk('public') // Use the public disk
                ->directory('images') // Store files in the public/images directory
                ->visibility('public') // Set visibility to public
                ->acceptedFileTypes(['image/*', 'application/pdf']) // Accept images and PDFs
                ->preserveFilenames()
                ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('path'),
                Tables\Columns\TextColumn::make('path')
                    
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