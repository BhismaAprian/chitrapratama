<?php

namespace App\Filament\Resources\SiaranPersResource\Pages;

use App\Filament\Resources\SiaranPersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSiaranPers extends EditRecord
{
    protected static string $resource = SiaranPersResource::class;

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
