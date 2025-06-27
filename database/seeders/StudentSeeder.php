<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                "name" => "Somonor",
                "gender" => "male",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Jammy",
                "gender" => "male",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Jonny",
                "gender" => "male",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Jame",
                "gender" => "male",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ];

        DB::table("students")->insert($students);
    }
}
