<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
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