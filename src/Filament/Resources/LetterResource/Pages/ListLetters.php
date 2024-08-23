<?php

namespace LaraZeus\Wind\Filament\Resources\LetterResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use LaraZeus\Wind\Filament\Resources\LetterResource;

class ListLetters extends ListRecords
{
    protected static string $resource = LetterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
