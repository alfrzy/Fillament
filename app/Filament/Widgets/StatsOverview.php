<?php

namespace App\Filament\Widgets;

use App\Models\Book;
use App\Models\Category;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Popular Book', Book::count())
                ->description('Total popular book this month')
                ->descriptionIcon('heroicon-o-book-open', IconPosition::Before)
                ->color('success')
                ->chart([10, 20, 30, 60, 90, 180]),

            Stat::make('Total Category', Category::count())
                ->description('Total books category this month')
                ->descriptionIcon('heroicon-o-bookmark', IconPosition::Before)
                ->color('warning')
                ->chart([10, 43, 35, 68, 98, 185])
        ];
    }
}
