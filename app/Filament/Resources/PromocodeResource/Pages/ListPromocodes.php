<?php

namespace App\Filament\Resources\PromocodeResource\Pages;

use App\Filament\Resources\PromocodeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPromocodes extends ListRecords
{
    protected static string $resource = PromocodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
