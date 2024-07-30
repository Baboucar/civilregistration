<?php

namespace App\Filament\Resources\CivilRegistrationResource\Pages;

use App\Filament\Resources\CivilRegistrationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCivilRegistrations extends ListRecords
{
    protected static string $resource = CivilRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
