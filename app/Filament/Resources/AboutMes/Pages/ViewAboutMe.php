<?php

namespace App\Filament\Resources\AboutMes\Pages;

use App\Filament\Resources\AboutMes\AboutMeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAboutMe extends ViewRecord
{
    protected static string $resource = AboutMeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
