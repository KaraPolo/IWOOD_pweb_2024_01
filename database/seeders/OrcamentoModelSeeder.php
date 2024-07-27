<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrcamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('orcamentos')->insert([
            [
                'id' => 1,
                'nome' => 'Brad Pitt',
                'detalhamento' => 'Arrumar o chuveiro',
                'contato' => '+55 49 1111-1111',
                'email' => 'bradpitt@gmail.com',
                'valor_estimado'=> '100',
                'created_at' => '2024-03-18 20:49:45',
                'updated_at' => '2024-03-18 20:49:45',
            ],
        ]);
    }
}