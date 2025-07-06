<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            // membuat field yang berelasi terhadap kedua tabel berikut
            $table->foreignId("id_barang")->constrained(
                table:"products",
                indexName:"products_id_barang"
            );
            $table->foreignId("id_category")->constrained(
                table:"categories",
                indexName:"categories_id_category"
            );
            $table->integer("jumlah_pembelian");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
