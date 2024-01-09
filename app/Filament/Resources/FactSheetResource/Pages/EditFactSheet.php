<?php

namespace App\Filament\Resources\FactSheetResource\Pages;

use App\Filament\Resources\FactSheetResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFactSheet extends EditRecord
{
    protected static string $resource = FactSheetResource::class;

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
