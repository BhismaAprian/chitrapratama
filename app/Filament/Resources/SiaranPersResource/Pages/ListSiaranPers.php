<?php

namespace App\Filament\Resources\SiaranPersResource\Pages;

use App\Filament\Resources\SiaranPersResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSiaranPers extends ListRecords
{
    protected static string $resource = SiaranPersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
