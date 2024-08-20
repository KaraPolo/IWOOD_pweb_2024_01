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
                'contato' => '+55 49 1111-1111',
                'endereco' => 'Rua Humberto Bertolo Decesaro',
                'descricao_projeto' => 'Arrumar meu roupeiro',
                'tipo_madeira' => 'Pinos',
                'quantidade_unidades' => '3',
                'observacao' => 'Nada',
                'created_at' => '2024-03-18 20:49:45',
                'updated_at' => '2024-03-18 20:49:45',
            ],
        ]);
    }
}