<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['id' => 1, 'nom' => 'competence', 'created_at' => null, 'updated_at' => null],
            ['id' => 2, 'nom' => 'reactivite', 'created_at' => null, 'updated_at' => null],
            ['id' => 3, 'nom' => 'numerique', 'created_at' => null, 'updated_at' => null],
        ]);
    }
}
