<?php

namespace App\Filament\Resources\Answers\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AnswerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('question_id')
                    ->relationship('question', 'id')
                    ->required(),
                TextInput::make('text')
                    ->required(),
                Toggle::make('is_correct')
                    ->required(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
