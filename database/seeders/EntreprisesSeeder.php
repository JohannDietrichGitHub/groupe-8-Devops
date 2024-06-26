<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntreprisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('entreprises')->insert([
            ['id' => 1, 'nom' => 'Oxianet', 'created_at' => null, 'updated_at' => null],
        ]);
    }
}
