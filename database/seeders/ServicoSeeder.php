<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('servicos')->insert([
            [
                'id' => 1,
                'nome' => 'Brad Pitt',
                'detalhamento' => 'Arrumar o chuveiro',
                'imagem' => 'https://i0.wp.com/www.guiamuriae.com.br/wp-content/uploads/2016/05/Carpinteiro-Foto-Pixabay.jpg',
                'contato' => '+55 49 1111-1111',
                'created_at' => '2024-03-18 20:49:45',
                'updated_at' => '2024-03-18 20:49:45',
            ],
            [
                'id' => 2,
                'nome' => 'Ashton Kutcher',
                'detalhamento' => 'Construção de armários',
                'imagem' => 'https://www.cec.com.br/files/blog/posts/2022/06_jun/13062022/armarios-cozinha_700x409_1.png',
                'contato' => '+55 49 2222-2222',
                'created_at' => '2024-03-18 20:49:45',
                'updated_at' => '2024-03-18 20:49:45',
            ],
            [
                'id' => 3,
                'nome' => 'Tom Cruise',
                'detalhamento' => 'Reparação de portas',
                'imagem' => 'https://portasemadeirasgralhaazul.com.br/wp-content/uploads/2023/07/every-onlilnee-9SxI_VloA2g-unsplash-1.jpg',
                'contato' => '+55 49 3333-3333',
                'created_at' => '2024-03-18 20:49:45',
                'updated_at' => '2024-03-18 20:49:45',
            ],
            [
                'id' => 4,
                'nome' => 'Vin Diesel',
                'detalhamento' => 'Conserto de móveis',
                'imagem' => 'https://media-cdn.tripadvisor.com/media/photo-s/07/19/c2/9d/aquaville-resort.jpg',
                'contato' => '+55 49 4444-4444',
                'created_at' => '2024-03-20 15:55:45',
                'updated_at' => '2024-03-20 15:55:45',
            ],
            [
                'id' => 5,
                'nome' => 'Agenor de Miranda Araújo Neto',
                'detalhamento' => 'Arrumar o chuveiro',
                'imagem' => 'https://midias.jornalcruzeiro.com.br/wp-content/uploads/2021/01/chuveiro-547x364.jpg',
                'contato' => '+55 49 5555-5555',
                'created_at' => '2024-03-20 15:55:45',
                'updated_at' => '2024-03-20 15:55:45',
            ],
            [
                'id' => 6,
                'nome' => 'Farrokh Bulsara',
                'detalhamento' => 'Instalação de novos pisos de madeira',
                'imagem' => 'https://roidigital.com.br/a_pisopisoartes_sitepro/wp-content/uploads/instalacao.jpg',
                'contato' => '+55 49 6666-6666',
                'created_at' => '2024-03-20 15:55:45',
                'updated_at' => '2024-03-20 15:55:45',
            ],
            [
                'id' => 7,
                'nome' => 'Paolla Oliveira',
                'detalhamento' => 'Reparação do deck de madeira',
                'imagem' => 'https://pegaefaz.com.br/wp-content/uploads/2023/12/deck-madeira2-1024x683.jpg',
                'contato' => '+55 49 7777-7777',
                'created_at' => '2024-03-20 15:55:45',
                'updated_at' => '2024-03-20 15:55:45',
            ],
            [
                'id' => 8,
                'nome' => 'Allana',
                'detalhamento' => 'Criação de esculturas',
                'imagem' => 'https://www.awebic.com/wp-content/uploads/2017/09/esculturas-escala-real-1122x589.jpg',
                'contato' => '+55 49 8888-8888',
                'created_at' => '2024-03-20 15:55:45',
                'updated_at' => '2024-03-20 15:55:45',
            ],
        ]);
    }
}