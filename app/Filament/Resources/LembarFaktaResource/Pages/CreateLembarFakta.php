<?php

namespace App\Filament\Resources\LembarFaktaResource\Pages;

use App\Filament\Resources\LembarFaktaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLembarFakta extends CreateRecord
{
    protected static string $resource = LembarFaktaResource::class;

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
