<?php

namespace App\Filament\Resources\Students\RelationManagers;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ExamResultsRelationManager extends RelationManager
{
    protected static string $relationship = 'examResults';

    protected static ?string $title = 'Histori Pelajaran';

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
                TextColumn::make('exam.subjects.name')
                    ->label('Mata Pelajaran')
                    ->badge(),

                TextColumn::make('exam.title')
                    ->label('Ujian')
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label('Tanggal')
                    ->date('d/m/Y'),

                TextColumn::make('correct')
                    ->label('Benar'),

                TextColumn::make('wrong')
                    ->label('Salah'),

                TextColumn::make('score')
                    ->label('Nilai'),
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