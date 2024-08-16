<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BlogModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            CategoriaSeeder::class,
            EstabelecimentoSeeder::class,
            TiposugestaoSeeder::class,
            SugestaoSeeder::class,
            ServicoSeeder::class,
            OrcamentoSeeder::class,
            //BlogSeeder::class,

        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
