<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SugestaoSeeder extends Seeder
{
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
            \DB::table('sugestaos')->insert([
                [
                    'id' => 1,
                    'nome' => 'Fábio Augusto Fagundes',
                    'sugestao' => 'Site Bacana.',
                    'avaliacao' => '5',
                    'created_at' => '2024-03-20 18:26:07',
                    'updated_at' => '2024-03-20 18:29:38',
                    'tiposugestao_id' => 2,
                ],
                [
                    'id' => 2,
                    'nome' => 'Pedro de Oliveira',
                    'sugestao' => 'Eu achei o site bacana, mas seria bacana se tivessem mais profissionais',
                    'avaliacao' => '4',
                    'created_at' => '2024-03-20 18:26:07',
                    'updated_at' => '2024-03-20 18:29:38',
                    'tiposugestao_id' => 1,
                ],
            ]);
        }
    }
    