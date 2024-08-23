<?php

namespace LaraZeus\Wind\Filament\Resources\LetterResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use LaraZeus\Wind\Events\NewLetterSent;
use LaraZeus\Wind\Filament\Resources\LetterResource;

/**
 * @property mixed $record
 */
class CreateLetter extends CreateRecord
{
    protected static string $resource = LetterResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['status'] = 'SENT';

        return $data;
    }

    protected function afterCreate(): void
    {
        NewLetterSent::dispatch($this->record);
    }
}
