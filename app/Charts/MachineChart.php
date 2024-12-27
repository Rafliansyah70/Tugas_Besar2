<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class MachineChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {
        return $this->chart->pieChart()
            ->setTitle('Machine Status Distribution')
            ->setSubtitle('Current Status of Machines')
            ->setDataset([40, 30, 30]) // Example: Working, Non-working, Repairing
            ->setLabels(['Working', 'Non-working', 'Repairing']);
    }
}
