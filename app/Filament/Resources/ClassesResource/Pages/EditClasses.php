<?php

namespace App\Filament\Resources\ClassesResource\Pages;

use App\Filament\Resources\ClassesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClasses extends EditRecord
{
    protected static string $resource = ClassesResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getActions(): array
    {
        return [

        ];
    }
}
