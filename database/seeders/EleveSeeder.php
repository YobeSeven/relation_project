<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('eleves')->insert([
            [
                "name" => "amina",
                "age" => 22,
                "classe_id" => 1,
                "gender_id" => 2,
            ],
            [
                "name" => "charaf",
                "age" => 20,
                "classe_id" => 3,
                "gender_id" => 3,
            ],
            [
                "name" => "raihana",
                "age" => 21,
                "classe_id" => 1,
                "gender_id" => 2,
            ],
            [
                "name" => "oussama",
                "age" => 5,
                "classe_id" => 3,
                "gender_id" => 1,
            ],
            [
                "name" => "hiba",
                "age" => 21,
                "classe_id" => 1,
                "gender_id" => 2,
            ],
            [
                "name" => "oussama",
                "age" => 3,
                "classe_id" => 3,
                "gender_id" => 3,
            ],
            [
                "name" => "nassim",
                "age" => 6,
                "classe_id" => 3,
                "gender_id" => 1,
            ],
        ]);
    }
}
