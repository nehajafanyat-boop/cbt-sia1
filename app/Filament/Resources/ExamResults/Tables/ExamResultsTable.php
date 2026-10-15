<?php

namespace App\Filament\Resources\ExamResults\Tables;

use App\Models\ExamResult;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ExamResultsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')
                    ->label('Siswa')
                    ->searchable(),

                TextColumn::make('exam.title')
                    ->label('Ujian')
                    ->searchable(),

                TextColumn::make('exam.subjects.name')
                    ->label('Mata Pelajaran')
                    ->badge(),

                TextColumn::make('created_at')
                    ->label('Tanggal')
                    ->date('d/m/Y'),

                TextColumn::make('correct')
                    ->label('Benar'),

                TextColumn::make('wrong')
                    ->label('Salah'),

                TextColumn::make('score')
                    ->label('Skor'),
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