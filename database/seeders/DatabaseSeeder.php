<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table("exercices")->insert([
            "name" => "Exercice 2",
            "allow" => 1
        ]);

        DB::table("exercices")->insert([
            "name" => "Exercice 3",
            "allow" => 0
        ]);

        DB::table("exercices")->insert([
            "name" => "Point courbe",
            "allow" => 0
        ]);

    }
}
