<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Estabelecimento;
use Illuminate\Support\Facades\DB;

class EstabelecimentoChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->chart->lineChart()
            ->setTitle('Estabelecimentos')
            ->setSubtitle('Vendas por Mês em cada Categoria')
            ->addData('Carpintaria', [40, 93, 35, 42, 18, 82])
            ->addData('Marcenaria',  [20, 30, 50, 28, 55, 45])
            ->addData('Freelancer', [70, 29, 77, 28, 55, 45])
            ->setColors(['#FFD7BE', '#C7B8EA', '#FFC5C5']) // cores pastéis mais suaves
            ->setXAxis(['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho']);
    }
}
