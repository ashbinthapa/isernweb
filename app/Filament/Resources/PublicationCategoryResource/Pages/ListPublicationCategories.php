<?php

namespace App\Filament\Resources\PublicationCategoryResource\Pages;

use App\Filament\Resources\PublicationCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPublicationCategories extends ListRecords
{
    protected static string $resource = PublicationCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
