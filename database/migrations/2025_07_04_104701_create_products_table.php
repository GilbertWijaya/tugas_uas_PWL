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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("nama",50)->unique();
            $table->integer("harga");
            $table->integer("stock");
            // membuat field relasi yang terhubung pada tabel categories
            $table->foreignId("id_categories")->constrained(
                table:"categories",
                indexName:"products_id_categories"
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
