<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filmes')->insert([
        ['nome' => "Profondo Rosso",
        'nacionalidade_id' => 2,
        'diretor_id' => 1,
        'produtora_id' => 1],
        
        ['nome' => 'Rope',
        'nacionalidade_id' => 3,
        'diretor_id' => 2,
        'produtora_id' => 2]
        ]
        );
    }
}
