<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tiposugestao;

class TiposugestaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tiposugestao::create(['nome' => 'Sugestão']);
        Tiposugestao::create(['nome' => 'Crítica']);
        Tiposugestao::create(['nome' => 'Comentário']);
    }
}
