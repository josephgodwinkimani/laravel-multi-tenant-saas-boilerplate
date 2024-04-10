<?php

namespace App\Livewire\Dashboard;

use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Livewire\Component;

class Charts extends Component
{
    public function render()
    {
        $columnChartModel =
            LivewireCharts::columnChartModel()
                ->setTitle('Expenses by Type')
                ->addColumn('Food', 100, '#f6ad55')
                ->addColumn('Shopping', 200, '#fc8181')
                ->addColumn('Travel', 300, '#90cdf4')
        ;

        return view('livewire.dashboard.charts')
            ->with([
                'columnChartModel' => $columnChartModel,
            ]);
    }
}