<?php

namespace App\Filament\Resources\Answers\Schemas;

use App\Models\Answer;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AnswerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('question.id')
                    ->label('Question'),
                TextEntry::make('text'),
                IconEntry::make('is_correct')
                    ->boolean(),
                IconEntry::make('is_active')
                    ->boolean(),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (Answer $record): bool => $record->trashed()),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
