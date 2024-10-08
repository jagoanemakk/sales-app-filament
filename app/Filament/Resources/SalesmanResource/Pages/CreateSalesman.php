<?php

namespace App\Filament\Resources\SalesmanResource\Pages;

use App\Filament\Resources\SalesmanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSalesman extends CreateRecord
{
    protected static string $resource = SalesmanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
