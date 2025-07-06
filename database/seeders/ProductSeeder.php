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
        // membuat seeder untuk membuat dump data pada database   
        DB::table("products")->insert([
            'nama' => "telur",
            "harga" => 25500,
            "stock" => 30,
            "id_categories" => 1,
            "created_at" => new \DateTime,
            "updated_at" => new \DateTime,
        ]);

    }
}
