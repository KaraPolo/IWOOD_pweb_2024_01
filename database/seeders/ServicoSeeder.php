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
                'contato' => '+55 49 1111-1111',
                'email' => 'bradpitt@gmail.com',
                'valor_estimado'=> '100',
                'created_at' => '2024-03-18 20:49:45',
                'updated_at' => '2024-03-18 20:49:45',
            ],
            [
                'id' => 2,
                'nome' => 'Ashton Kutcher',
                'detalhamento' => 'Construção de armários',
                'contato' => '+55 49 2222-2222',
                'email' => 'ashtonkutcher@gmail.com',
                'valor_estimado'=> '90',
                'created_at' => '2024-03-18 20:49:45',
                'updated_at' => '2024-03-18 20:49:45',
            ],
            [
                'id' => 3,
                'nome' => 'Tom Cruise',
                'detalhamento' => 'Reparação de portas',
                'contato' => '+55 49 3333-3333',
                'email' => 'tomcruise@gmail.com',
                'valor_estimado'=> '80',
                'created_at' => '2024-03-18 20:49:45',
                'updated_at' => '2024-03-18 20:49:45',
            ],
            [
                'id' => 4,
                'nome' => 'Vin Diesel',
                'detalhamento' => 'Conserto de móveis',
                'contato' => '+55 49 4444-4444',
                'email' => 'vindisel@gmail.com',
                'valor_estimado'=> '60',
                'created_at' => '2024-03-20 15:55:45',
                'updated_at' => '2024-03-20 15:55:45',
            ],
            [
                'id' => 5,
                'nome' => 'Agenor de Miranda Araújo Neto',
                'detalhamento' => 'Arrumar o chuveiro',
                'contato' => '+55 49 5555-5555',
                'email' => 'agenormiranda@gmail.com',
                'valor_estimado'=> '60',
                'created_at' => '2024-03-20 15:55:45',
                'updated_at' => '2024-03-20 15:55:45',
            ],
            [
                'id' => 6,
                'nome' => 'Farrokh Bulsara',
                'detalhamento' => 'Instalação de novos pisos de madeira',
                'contato' => '+55 49 6666-6666',
                'email' => 'farrokhbulsara@gmail.com',
                'valor_estimado'=> '60',
                'created_at' => '2024-03-20 15:55:45',
                'updated_at' => '2024-03-20 15:55:45',
            ],
            [
                'id' => 7,
                'nome' => 'Paolla Oliveira',
                'detalhamento' => 'Reparação do deck de madeira',
                'contato' => '+55 49 7777-7777',
                'email' => 'paollaoliveira@gmail.com',
                'valor_estimado'=> '60',
                'created_at' => '2024-03-20 15:55:45',
                'updated_at' => '2024-03-20 15:55:45',
            ],
            [
                'id' => 8,
                'nome' => 'Allana',
                'detalhamento' => 'Criação de esculturas',
                'contato' => '+55 49 8888-8888',
                'email' => 'allanalima@gmail.com',
                'valor_estimado'=> '60',
                'created_at' => '2024-03-20 15:55:45',
                'updated_at' => '2024-03-20 15:55:45',
            ],
        ]);
    }
}