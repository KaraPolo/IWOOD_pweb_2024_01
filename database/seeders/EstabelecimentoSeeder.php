<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstabelecimentoSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
            \DB::table('estabelecimentos')->insert([
                [
                    'id' => 1,
                    'nome' => 'Carpintaria Artesanal',
                    'descricao' => 'Na Madeira & Arte, combinamos habilidades artesanais com tecnologia moderna para criar móveis de alta qualidade que refletem elegância e sofisticação. Nosso compromisso com a excelência é evidente em cada detalhe, desde o design até a finalização.',
                    'imagem' => 'https://cptstatic.s3.amazonaws.com/imagens/enviadas/materias/materia12725/o-que-faz-um-marceneiro-cpt.jpg',
                    'telefone' => '+55 49 99999-9999',
                    'created_at' => '2024-03-17 18:26:07',
                    'updated_at' => '2024-03-17 18:29:38',
                    'categoria_id' => 2,
                ],
                [
                    'id' => 2,
                    'nome' => 'Madeira & Arte Marcenaria',
                    'descricao' => 'Na busca pela sustentabilidade, a Oficina da Madeira utiliza apenas madeira proveniente de fontes responsáveis ​​e práticas eco-friendly em todo o processo de produção. Nosso foco é criar móveis duráveis, belos e que respeitem o meio ambiente.',
                    'imagem' => 'https://artedamarcenariamoderna.com.br/wp-content/uploads/2017/07/profiss%C3%A3o-marceneiro.png',
                    'telefone' => '+55 49 99999-8888',
                    'created_at' => '2024-03-17 18:28:04',
                    'updated_at' => '2024-03-17 18:29:23',
                    'categoria_id' => 1,
                ],
                [
                    'id' => 3,
                    'nome' => 'Raízes Rústicas',
                    'descricao' => 'Especializada em móveis rústicos feitos à mão, a Marcenaria Raízes Rústicas celebra a beleza natural da madeira. Cada peça é única e carrega consigo a história e a autenticidade do material, proporcionando um toque de rusticidade a qualquer ambiente.',
                    'imagem' => 'https://cptstatic.s3.amazonaws.com/imagens/enviadas/materias/materia31114/o-que-um-marceneiro-faz-muita-coisa-cpt.jpg',
                    'telefone' => '+55 49 88888-8888',
                    'created_at' => '2024-03-17 18:28:38',
                    'updated_at' => '2024-03-17 18:28:38',
                    'categoria_id' => 1,
                ],
                [
                    'id' => 4,
                    'nome' => 'Oficina da Madeira',
                    'descricao' => 'Na busca pela sustentabilidade, a Oficina da Madeira utiliza apenas madeira proveniente de fontes responsáveis ​​e práticas eco-friendly em todo o processo de produção. Nosso foco é criar móveis duráveis, belos e que respeitem o meio ambiente.',
                    'imagem' => 'https://blog.ferimport.com.br/wp-content/uploads/2021/07/marceneiro.png',
                    'telefone' => '+55 49 88888-8888',
                    'created_at' => '2024-03-17 18:29:09',
                    'updated_at' => '2024-03-17 18:29:09',
                    'categoria_id' => 3,
                ],
                [
                    'id' => 5,
                    'nome' => 'Estilo & Elegância Carpintaria',
                    'descricao' => 'Combinando design contemporâneo com técnicas tradicionais, a Estilo & Elegância cria móveis sob medida que transcendem tendências passageiras. Nossa abordagem artesanal garante qualidade excepcional e beleza duradoura em cada peça.',
                    'imagem' => 'https://digital.formobile.com.br/sites/formobile.com/files/styles/article_featured_standard/public/uploads/2019/05/shutterstock_578729953.jpg?itok=di5-5pD1.png',
                    'telefone' => '+55 49 81234-1234',
                    'created_at' => '2024-03-18 20:48:20',
                    'updated_at' => '2024-03-18 20:48:20',
                    'categoria_id' => 2,
                ],
                [
                    'id' => 6,
                    'nome' => 'Marcelo Machado',
                    'descricao' => 'Especialista em móveis personalizados, combina técnicas tradicionais com inovação para atender às necessidades específicas de cada cliente. Minha missão é criar móveis que não apenas atendam às expectativas, mas as superem.',
                    'imagem' => 'https://artedamarcenariamoderna.com.br/wp-content/uploads/2017/07/melhores-profiss%C3%B5es-do-mercado.png',
                    'telefone' => '+55 49 81234-4321',
                    'created_at' => '2024-03-18 20:48:43',
                    'updated_at' => '2024-03-18 20:48:43',
                    'categoria_id' => 3,
                ],
                [
                    'id' => 7,
                    'nome' => 'Carpintaria Harmonia',
                    'descricao' => 'Na Carpintaria Harmonia, a paixão pela madeira é evidente em cada criação. Nossos móveis são projetados para proporcionar conforto, funcionalidade e beleza em perfeita harmonia, refletindo o compromisso com a excelência em carpintaria.',
                    'imagem' => 'https://jkmadeiras.com.br/wp-content/uploads/2022/11/JK-BLOG-9-1024x683.png',
                    'telefone' => '+55 49 9123-5544',
                    'created_at' => '2024-03-18 20:49:22',
                    'updated_at' => '2024-03-18 20:49:22',
                    'categoria_id' => 2,
                ],
                [
                    'id' => 8,
                    'nome' => 'Roberto Lenha',
                    'descricao' => 'Especialista renomado em serviços de carpintaria e marcenaria, com vasta experiência na criação de móveis sob medida. Seus projetos exclusivos e personalizados atendem às necessidades específicas de cada cliente, proporcionando funcionalidade e beleza em cada peça.',
                    'imagem' => 'https://i0.wp.com/www.guiamuriae.com.br/wp-content/uploads/2016/05/Carpinteiro-Foto-Pixabay.jpg',
                    'telefone' => '+55 49 81234-9899',
                    'created_at' => '2024-03-18 20:49:45',
                    'updated_at' => '2024-03-18 20:49:45',
                    'categoria_id' => 3,
                ],
            ]);
        }
    }
    