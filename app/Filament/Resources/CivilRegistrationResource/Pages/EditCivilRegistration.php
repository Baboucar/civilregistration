<?php

namespace App\Filament\Resources\CivilRegistrationResource\Pages;

use App\Filament\Resources\CivilRegistrationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCivilRegistration extends EditRecord
{
    protected static string $resource = CivilRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
