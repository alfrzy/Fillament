<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\BookResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class BookTabels extends BaseWidget
{
    protected static ?int $sort = 3;

    public function table(Table $table): Table
    {
        return $table
            ->query(BookResource::getEloquentQuery())
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
            ]);
    }
}
