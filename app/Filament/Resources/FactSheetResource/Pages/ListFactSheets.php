<?php

namespace App\Filament\Resources\FactSheetResource\Pages;

use App\Filament\Resources\FactSheetResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFactSheets extends ListRecords
{
    protected static string $resource = FactSheetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
