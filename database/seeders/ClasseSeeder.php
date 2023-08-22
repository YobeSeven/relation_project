<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("classes")->insert([
            [
                "name" => "coding school"
            ],
            [
                "name" => "marketing school"
            ],
            [
                "name" => "content creator"
            ],
        ]);
    }
}
