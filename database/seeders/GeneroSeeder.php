<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('GENEROS')->insert(
            ['nome' => "Terror"],
            ['nome' => "Comedia"],
            ['nome' => "Suspense"],
            ['nome' => "Drama"],
            ['nome' => "Western"],
            ['nome' => "Hot [+18]"]
        );
    }
}
