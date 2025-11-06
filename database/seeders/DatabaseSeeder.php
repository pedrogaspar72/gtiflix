<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Pedro',
            'email' => 'gasparpedro72@gmail.com',
        ]);

        $this->call([
            NacionalidadeSeeder::class,
            ProdutoraSeeder::class,
            AtorSeeder::class,
            DiretorSeeder::class,
            FilmeSeeder::class,
            GeneroSeeder::class
            
            
    ]);
    }
}