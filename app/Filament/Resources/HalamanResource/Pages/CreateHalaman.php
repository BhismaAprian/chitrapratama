<?php

namespace App\Filament\Resources\HalamanResource\Pages;

use App\Filament\Resources\HalamanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHalaman extends CreateRecord
{
    protected static string $resource = HalamanResource::class;

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
