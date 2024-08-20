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
        ->addData([3, 4, 2])
        ->setLabels(['Reparação', 'Construção', 'Marcenaria']);
    }
}
