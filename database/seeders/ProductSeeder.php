<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                "product_name" => "Coca cola",
                "quantity" => 20,
                "price" => 1.5,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "product_name" => "PRO VIDA",
                "quantity" => 10,
                "price" => 2.50,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "product_name" => "Red Sting",
                "quantity" => 20,
                "price" => 3.5,
                "created_at" => now(),
                "updated_at" => now()
            ]
        ];

        DB::table("products")->insert($products);
    }
}
