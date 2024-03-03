<?php

namespace App\Filament\Resources\ResearchResource\Pages;

use App\Filament\Resources\ResearchResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResearch extends ListRecords
{
    protected static string $resource = ResearchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
