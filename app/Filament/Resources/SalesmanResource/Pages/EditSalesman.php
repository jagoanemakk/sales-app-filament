<?php

namespace App\Filament\Resources\SalesmanResource\Pages;

use App\Filament\Resources\SalesmanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSalesman extends EditRecord
{
    protected static string $resource = SalesmanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
