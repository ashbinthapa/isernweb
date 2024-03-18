<?php

namespace App\Filament\Resources\PublicationCategoryResource\Pages;

use App\Filament\Resources\PublicationCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPublicationCategory extends EditRecord
{
    protected static string $resource = PublicationCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
