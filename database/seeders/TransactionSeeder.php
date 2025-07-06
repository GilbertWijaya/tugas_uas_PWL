<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // membuat seeder untuk membuat dump data pada database
        DB::table("transactions")->insert([
            "id_barang" => 1,
            "id_category" => 1,
            "jumlah_pembelian" => 2,
            "created_at" => new \DateTime,
            "updated_at" => new \DateTime,
        ]);

    }
}
