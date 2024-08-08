<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class BookCharts extends ChartWidget
{
    protected static ?string $heading = 'Book Submited';

    protected static ?string $pollingInterval ='10s';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        return [
            'datasets' => [
            [
                'label' => 'Total Book Submited',
                'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                'backgroundColor' => '#9BD0F5',
                'borderColor' => '##36A2EB,'


            ],
        ],
        'labels' => ['Jan', 'Feb', 'Mar,', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],

            
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
