<?php

namespace App\Filament\Resources\LembarFaktaResource\Pages;

use App\Filament\Resources\LembarFaktaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLembarFaktas extends ListRecords
{
    protected static string $resource = LembarFaktaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
