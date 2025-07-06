<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // membuat seeder untuk membuat dump data pada database
        DB::table("categories")->insert([
            "nama" => "obat",
            "created_at" => new \DateTime,
            "updated_at" => new \DateTime,
        ]);

    }
}
