<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('blog')->insert([
            [
                'id' => 1,
                'titulo' => 'Como colocar pisos vinílicos',
                'conteudo' => ' O piso vinílico pode ser instalado diretamente no contrapiso, ou ainda, sob o revestimento já instalado no ambiente que você está reformando, desde que o piso esteja limpo e nivelado.',
                'data_publicacao' => '2024-03-17 18:26:07',
                'created_at' => '2024-03-17 18:26:07',
                'updated_at' => '2024-03-17 18:29:38',
            ],
            [
                'id' => 2,
                'titulo' => ' Como assentar cerâmica: dicas para não errar!',
                'conteudo' => '  Algumas etapas da obra devem ser realizadas com maior cuidado para atingir o resultado esperado. Durante o acabamento, por exemplo, é preciso atenção a tarefas como o assentamento de cerâmica. Isso é necessário para obter uma aplicação perfeita mantendo as vantagens do produto, como durabilidade e facilidade de limpeza da argamassa para cerâmica. 
                Com o aumento do tamanho das peças no mercado, é importante definir um ponto de saída das placas e sua paginação, tentando sempre diminuir ou eliminar recortes.',
                'data_publicacao' => '2024-03-17 18:26:07',
                'created_at' => '2024-03-17 18:26:07',
                'updated_at' => '2024-03-17 18:29:38',
            ],
            [
                'id' => 3,
                'titulo' => 'Como colocar pisos vinílicos',
                'conteudo' => ' O piso vinílico pode ser instalado diretamente no contrapiso, ou ainda, sob o revestimento já instalado no ambiente que você está reformando, desde que o piso esteja limpo e nivelado.',
                'data_publicacao' => '2024-03-17 18:26:07',
                'created_at' => '2024-03-17 18:26:07',
                'updated_at' => '2024-03-17 18:29:38',
            ],
            [
                'id' => 4,
                'titulo' => ' Como assentar cerâmica: dicas para não errar!',
                'conteudo' => '  Algumas etapas da obra devem ser realizadas com maior cuidado para atingir o resultado esperado. Durante o acabamento, por exemplo, é preciso atenção a tarefas como o assentamento de cerâmica. Isso é necessário para obter uma aplicação perfeita mantendo as vantagens do produto, como durabilidade e facilidade de limpeza da argamassa para cerâmica. 
                Com o aumento do tamanho das peças no mercado, é importante definir um ponto de saída das placas e sua paginação, tentando sempre diminuir ou eliminar recortes.',
                'data_publicacao' => '2024-03-17 18:26:07',
                'created_at' => '2024-03-17 18:26:07',
                'updated_at' => '2024-03-17 18:29:38',
            ],
        ]);
    }
}
