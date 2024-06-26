<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('groupes')->insert([
            ['id' => 1, 'nom' => 'Excellence Technique/Communauté de pratiques', 'categorie_id' => 1, 'created_at' => null, 'updated_at' => null],
            ['id' => 2, 'nom' => 'Faire agile', 'categorie_id' => 1, 'created_at' => null, 'updated_at' => null],
            ['id' => 3, 'nom' => 'Gestion humaine des compétences', 'categorie_id' => 1, 'created_at' => null, 'updated_at' => null],
            ['id' => 4, 'nom' => 'Vélocité de réponse', 'categorie_id' => 2, 'created_at' => null, 'updated_at' => null],
            ['id' => 5, 'nom' => 'Environnements souples', 'categorie_id' => 2, 'created_at' => null, 'updated_at' => null],
            ['id' => 6, 'nom' => 'Défi environnemental', 'categorie_id' => 2, 'created_at' => null, 'updated_at' => null],
            ['id' => 7, 'nom' => 'Veille et benchmark', 'categorie_id' => 2, 'created_at' => null, 'updated_at' => null],
            ['id' => 8, 'nom' => 'Business model', 'categorie_id' => 3, 'created_at' => null, 'updated_at' => null],
            ['id' => 9, 'nom' => 'Relation client', 'categorie_id' => 3, 'created_at' => null, 'updated_at' => null],
            ['id' => 10, 'nom' => 'Management', 'categorie_id' => 3, 'created_at' => null, 'updated_at' => null],
        ]);
    }
}
