<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('atores')->insert(
            ['nome' => "Jailson Mandes",
            'nacionalidade_id' => 1,
            'nascimento' => '1909-05-05'],
            
            ['nome' => "Daria Nicolodi",
            'nacionalidade_id' => 3,
            'nascimento' => '1909-05-05']
        );
    }
}
