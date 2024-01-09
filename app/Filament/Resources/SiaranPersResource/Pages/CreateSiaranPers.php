<?php

namespace App\Filament\Resources\SiaranPersResource\Pages;

use App\Filament\Resources\SiaranPersResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSiaranPers extends CreateRecord
{
    protected static string $resource = SiaranPersResource::class;

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
