<?php

namespace App\Filament\Resources\ExamResults\RelationManagers;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ExamResultAnswersRelationManager extends RelationManager
{
    protected static string $relationship = 'answers';

    protected static ?string $title = 'Detail Histori Ujian';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('question.payload')
                    ->label('Soal')
                    ->formatStateUsing(fn ($state) => strip_tags($state))
                    ->wrap(),

                TextColumn::make('answer.text')
                    ->label('Jawaban Siswa')
                    ->wrap(),

                TextColumn::make('answer.text')
                    ->label('Jawaban')
                    ->formatStateUsing(function ($state) {
                        return explode('.', $state)[0] ?? $state;
                    })
                    ->badge(),

                TextColumn::make('question.id')
                    ->label('Kunci Jawaban')
                    ->formatStateUsing(function ($state, $record) {
                        $correctAnswer = \App\Models\Answer::where('question_id', $record->question_id)
                            ->where('is_correct', true)
                            ->first();

                        return $correctAnswer?->text ?? '-';
                    })
                    ->wrap(),

                TextColumn::make('is_correct')
                    ->label('Status')
                    ->badge()
                    ->formatStateUsing(fn ($state) => $state ? 'Benar' : 'Salah'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}