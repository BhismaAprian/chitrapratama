<?php

namespace App\Filament\Resources\LembarFaktaResource\Pages;

use App\Filament\Resources\LembarFaktaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLembarFakta extends EditRecord
{
    protected static string $resource = LembarFaktaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['slug'] = str()->slug($data['title']);

        return $data;
    }
}
