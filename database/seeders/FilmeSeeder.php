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
        'produtora_id' => 1,
        'descricao' => "Filme de Terror Italiano"],
        
        ['nome' => 'Rope',
        'nacionalidade_id' => 3,
        'diretor_id' => 2,
        'produtora_id' => 2,
        'descricao' => "Primeiro casal gay da historia"],

        ['nome' => "Deus e o Diabo na Terra do Sol",
        'nacionalidade_id' => 1,
        'diretor_id' => 3,
        'produtora_id' => 3,
        'descricao' => "Filme do cangacao"]
        ]
        );
    }
}
