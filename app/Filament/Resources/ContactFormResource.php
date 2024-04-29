<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactFormResource\Pages;
use App\Filament\Resources\ContactFormResource\RelationManagers;
use App\Models\ContactForm;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactFormResource extends Resource
{
    protected static ?string $model = ContactForm::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    
    // function to remove create button form the contact form
    public static function canCreate(): bool
    {
        return false;
    }

    /*
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }
    */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                ->searchable()
                ->sortable(),
                Tables\Columns\TextColumn::make('message')
                ->searchable()
                ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                ->searchable()
                ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListContactForms::route('/'),
        //    'create' => Pages\CreateContactForm::route('/create'),
        //    'view' => Pages\ViewContactForm::route('/{record}'),
        //    'edit' => Pages\EditContactForm::route('/{record}/edit'),
        ];
    }
}
