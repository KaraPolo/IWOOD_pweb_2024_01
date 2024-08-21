<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Servico;
use Illuminate\Support\Facades\DB;

class ServicoChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->PieChart()
            ->setTitle('Serviços')
            ->setSubtitle('Principais Categorias')
            ->addData([30, 40, 20])
            ->setLabels(['Reparação', 'Construção', 'Marcenaria'])
            ->setColors(['#FFC5C5', '#FF99CC', '#C5E1FF']); // adicionei essa linha
    }
}
