<?php

namespace App\Filament\Resources\FactSheetResource\Pages;

use App\Filament\Resources\FactSheetResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFactSheet extends CreateRecord
{
    protected static string $resource = FactSheetResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = str()->slug($data['title']);

        return $data;
    }
}
