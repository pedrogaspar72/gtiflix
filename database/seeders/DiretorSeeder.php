<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiretorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('diretores')->insert([
            ['nome' => "Dario Argento",
            'nacionalidade_id' => 3, 
            'nascimento' => '1940-09-07'],
            
            ['nome' => "Alfred Hitchcock",
            'nacionalidade_id' => 2,
            'nascimento' => '1899-08-13'],

            ['nome' => "Glauber Rocha",
            'nacionalidade_id' => 1,
            'nascimento' => '1939-03-14' ]
        ]
        );
    }
}
