<?php

namespace App\Filament\Resources\BirthDeclarationResource\Pages;

use App\Filament\Resources\BirthDeclarationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBirthDeclaration extends EditRecord
{
    protected static string $resource = BirthDeclarationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
